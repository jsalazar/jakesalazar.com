# Push-to-deploy setup (one time)

After this, every push to `main` builds the site with GitHub Actions, syncs
`dist/` to the `jakesalazar.com` S3 bucket and refreshes CloudFront. GitHub
gets short-lived AWS credentials through OIDC, so there are no access keys
to store or rotate.

Nothing here changes DNS, the certificate or the bucket contents, and the
live site keeps working while you do these steps.

## 1. Create the IAM role, CloudFront Function and headers policy

In the AWS console, switch to **us-east-1 (N. Virginia)**, open
**CloudFormation → Create stack → With new resources**, upload
`aws/github-deploy.yml` and name the stack `jakesalazar-github-deploy`.

- Keep the defaults (`jsalazar/jakesalazar.com`, bucket `jakesalazar.com`,
  distribution `E3T3BX3KQ5ZY43`).
- If you already added `token.actions.githubusercontent.com` under
  **IAM → Identity providers** for another site, set
  `CreateOidcProvider` to `false`.
- Tick "I acknowledge that AWS CloudFormation might create IAM resources
  with custom names", then create.

Or with the CLI:

```sh
aws cloudformation deploy --region us-east-1 \
  --stack-name jakesalazar-github-deploy \
  --template-file aws/github-deploy.yml \
  --capabilities CAPABILITY_NAMED_IAM
```

When it finishes, copy `DeployRoleArn` from the stack's **Outputs** tab.

## 2. Attach the function and headers to the distribution

CloudFront → distribution `E3T3BX3KQ5ZY43` → **Behaviors** → edit the
default behavior:

- **Function associations → Viewer request:** CloudFront Functions,
  `jakesalazar-clean-urls`.
- **Response headers policy:** `jakesalazar-security-headers`.
- **Cache policy:** keep `CachingOptimized` (it serves Brotli and gzip).
- **Viewer protocol policy:** Redirect HTTP to HTTPS (should already be set).

Save. It takes a few minutes to roll out.

## 3. Switch from OAI to Origin Access Control (recommended)

OAI still works but is legacy. On the same distribution → **Origins** → edit
the S3 origin → **Origin access: Origin access control settings** → **Create
new OAC** (defaults) → Save. CloudFront then shows a bucket policy; copy it
into **S3 → jakesalazar.com → Permissions → Bucket policy**, replacing the old
OAI statement. Load the site to confirm it still works.

## 4. Tell GitHub where to deploy

GitHub → `jsalazar/jakesalazar.com` → **Settings → Secrets and variables →
Actions → Variables** → add these repository variables (they are not secret):

| Name | Value |
| --- | --- |
| `AWS_ROLE_ARN` | the `DeployRoleArn` from step 1 |
| `AWS_REGION` | the bucket's region (S3 console shows it), e.g. `us-east-2` |
| `S3_BUCKET` | `jakesalazar.com` |
| `CLOUDFRONT_DISTRIBUTION_ID` | `E3T3BX3KQ5ZY43` |

Then **Settings → Environments → production** (created by the first
workflow run, or add it yourself) → **Deployment branches and tags** →
**Selected branches** → add `main`. That keeps any other branch from
deploying.

## 5. Ship it

Merge the pull request. The **Build and deploy** run under the **Actions**
tab uploads the site and refreshes CloudFront. You can also re-run a deploy
any time with **Actions → Build and deploy → Run workflow**.

## Cleanup

- Delete the old IAM user and access keys you used for manual deploys, if
  any, once a GitHub deploy has succeeded.
- Rotate or deactivate the access keys written in your Notion
  "Static Sites Setups" page.
