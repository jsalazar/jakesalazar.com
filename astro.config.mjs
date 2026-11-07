// @ts-check
import { defineConfig } from 'astro/config';

export default defineConfig({
  site: 'https://jakesalazar.com',
  build: {
    // index.astro -> /index.html, portfolio.astro -> /portfolio.html (keeps today's URLs)
    format: 'file',
    // emit CSS as files so scripts/purge-css.mjs can trim unused Bootstrap rules
    inlineStylesheets: 'never',
  },
});
