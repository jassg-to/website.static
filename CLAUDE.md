# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Bilingual (English/Portuguese) static website for JASSG (Joanna de Ângelis Spiritist Study Group). Uses Jinja2 templates compiled to static HTML, deployed to Firebase Hosting.

## Build

```bash
uv run html/build.py
```

This processes all `html/*.html` Jinja2 templates (skipping `_`-prefixed files) and outputs generated HTML to the project root. Requires Python >= 3.10; `uv` handles the jinja2 dependency automatically.

## Deployment

Push to `main` triggers GitHub Actions (`/.github/workflows/upload.yaml`) which builds and deploys to Firebase Hosting (project: `jassg-website`). For manual deploys: `firebase deploy`.

## Architecture

- **`html/`** — Jinja2 source templates and build script
  - `_base_en.html` / `_base_pt.html` — Base layouts (files prefixed with `_` are not output directly)
  - Content pages extend base templates using `{% extends %}` / `{% block %}`
  - Naming convention: `<page>.<lang>.html` (e.g., `about.en.html`, `about.pt.html`)
  - Build injects `{{slug}}` (filename without extension) and `{{year}}` (current year) into templates
- **`css/`** — Bootstrap 5 + custom stylesheets (`style.css`, `template.css`, `responsive.css`)
- **`js/`** — jQuery, Bootstrap JS, and custom scripts (`scripts.js`, `footer.js`)
- **`images/`** — Site images with `@2x` hi-DPI variants
- **`fonts/`** — Nexa font family (OTF)

## Key Conventions

- Every content page needs both `.en.html` and `.pt.html` variants
- Generated HTML files in the root are gitignored (built from templates)
- No test suite exists; verify changes by running the build and inspecting output
