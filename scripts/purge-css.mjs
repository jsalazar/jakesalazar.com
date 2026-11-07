// Post-build step: remove CSS rules that no page uses (mostly unused Bootstrap).
// Only touches Astro's own bundles in dist/_astro, never the legacy demos in dist/portfolio.
import { readdir, writeFile } from 'node:fs/promises';
import { join } from 'node:path';
import { PurgeCSS } from 'purgecss';

const dist = new URL('../dist/', import.meta.url).pathname;
const assets = join(dist, '_astro');
const files = await readdir(assets);
const css = files.filter((f) => f.endsWith('.css')).map((f) => join(assets, f));
const js = files.filter((f) => f.endsWith('.js')).map((f) => join(assets, f));
const html = (await readdir(dist)).filter((f) => f.endsWith('.html')).map((f) => join(dist, f));

const results = await new PurgeCSS().purge({
  content: [...html, ...js],
  css,
  fontFace: true,
  variables: true,
  safelist: {
    // classes Bootstrap and Splide add at runtime
    standard: ['show', 'fade', 'collapsing', 'active', 'modal-open', 'modal-backdrop', 'pointer-event'],
    greedy: [/^carousel-/, /^modal/, /^splide/, /^is-/],
  },
});

for (const { file, css: out } of results) {
  await writeFile(file, out);
  console.log(`purged ${file.replace(dist, 'dist/')} -> ${(out.length / 1024).toFixed(1)} KB`);
}
