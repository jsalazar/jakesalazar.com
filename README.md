# jakesalazar.com

Personal site, built with [Astro](https://astro.build) as plain HTML, CSS and
a little vanilla JavaScript, hosted on S3 + CloudFront.

## Work on it

Requires Node 22.23.4 or newer (see `.nvmrc`).

```sh
npm install
npm run dev       # http://localhost:4321 with live reload
npm run build     # production build into dist/
npm run preview   # serve dist/ locally
```

## Where things live

| Path | What |
| --- | --- |
| `src/pages/index.astro`, `src/pages/portfolio.astro` | the two pages (`/` and `/portfolio.html`) |
| `src/layouts/Base.astro` | shared `<head>`: meta tags, favicons, analytics |
| `src/components/` | home page sections, one file each |
| `src/data/testimonials.json` | the celebrity endorsements carousel |
| `src/styles/` | plain CSS, loaded after Bootstrap |
| `src/scripts/main.js` | logo strip, smooth scroll, footer year |
| `src/assets/images/` | photos and logos; Astro serves them as AVIF/WebP at the right size |
| `public/` | copied as-is: favicons, fonts, the legacy `portfolio/` demos |

### Replacing a photo

Drop the new file into `src/assets/images/` (full-size originals are fine)
and point the `<Img src="...">` in the component at it. The build
resizes and compresses it.

## Deploy

Push to `main`. GitHub Actions (`.github/workflows/deploy.yml`) builds the
site, syncs it to S3 and refreshes CloudFront. Pull requests only run the
build. One-time AWS setup is in [`aws/README.md`](aws/README.md).
