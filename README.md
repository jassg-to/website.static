# JASSG Website

## Why does this exist (in GitHub)?

You could build a website by editing files on a server directly — and in the early days of the web, that's exactly what people did. It works, but it's fragile. There's no undo. If someone makes a mistake, the live site breaks instantly with no easy way to roll back. If two people edit the same file at the same time, someone's work gets lost.

This repository ("repo") solves those problems. It's a shared workspace where every change is tracked, reversible, and reviewed before it goes live. You edit files here, someone reviews the changes, and only then does the website update. Think of it like editing a Google Doc with revision history — except the "document" is the entire website, and publishing is a deliberate step rather than automatic.

We also use **templates** so that things like the navigation bar and footer only need to exist in one place. If you need to change a phone number in the footer, you change it once and every page picks it up — rather than hunting through every single page to update it by hand.

---

## For website designers

### What's in this repo

| Folder | What's inside |
|--------|--------------|
| `html/` | Page templates and the build script that combines them |
| `css/` | Stylesheets — Bootstrap 5 plus our custom styles |
| `js/` | Scripts — jQuery, Bootstrap JS, and our custom scripts |
| `images/` | Site images (some have `@2x` versions for high-res screens) |
| `fonts/` | The Nexa font family |

### The files you'll edit most

**CSS** — The visual design lives in three files in `css/`:

- `style.css` — main site styles
- `template.css` — layout and structural styles
- `responsive.css` — mobile/tablet adjustments

**Page content** — The HTML templates live in `html/`. The site is bilingual (English and Portuguese), so each page has two files:

- `about.en.html` — English version
- `about.pt.html` — Portuguese version

Every content page follows this naming pattern: `<pagename>.<language>.html`.

### How the templates work

Instead of each page containing the full HTML (head, nav, footer, etc.), pages only contain what's unique to them. The shared parts live in base templates:

- `html/_base_en.html` — shared layout for English pages
- `html/_base_pt.html` — shared layout for Portuguese pages

Files starting with `_` are base templates — they don't become pages themselves.

A content page looks something like this:

```html
{% extends '_base_en.html' %}
{% block content %}

    <section>
        <!-- Your page content goes here -->
    </section>

{% endblock %}
```

The `{% extends %}` line says "use the English base layout," and everything inside `{% block content %}` is the unique content for that page. The rest (navigation, footer, scripts, stylesheets) comes from the base template automatically.

### Adding a new page

1. Create two files in `html/`: `mypage.en.html` and `mypage.pt.html`
2. Start each one with `{% extends '_base_en.html' %}` (or `_base_pt.html` for Portuguese)
3. Put your content inside `{% block content %}` ... `{% endblock %}`
4. Push your changes — the site will update automatically

### Building and previewing locally

To turn the templates into final HTML files, run:

```bash
uv run html/build.py
```

This requires [uv](https://docs.astral.sh/uv/) to be installed. You don't need to install Python or any libraries yourself — `uv` handles all of that. The generated `.html` files will appear in the project root folder and can be opened directly in a browser.

### Making changes (pull requests)

The `main` branch is protected — you can't push changes to it directly. Instead, you'll use a **pull request** (PR), which is basically saying "here are my changes, please review and merge them."

The workflow:

1. **Create a branch** — this is your own copy of the code where you can make changes freely:
   ```bash
   git checkout -b my-change-name
   ```
2. **Make your edits** and commit them:
   ```bash
   git add -A
   git commit -m "Describe what you changed"
   ```
3. **Push your branch** to GitHub:
   ```bash
   git push -u origin my-change-name
   ```
4. **Open a pull request** — go to the repository on GitHub and you'll see a prompt to create a PR from your branch. Add a short description of what you changed and submit it.
5. Once the PR is **approved and merged** into `main`, the site is automatically built and deployed to [Firebase Hosting](https://firebase.google.com/docs/hosting). A GitHub Actions workflow handles all of that — you don't need to do anything after merging.

### Template variables

Two variables are available in templates:

- `{{year}}` — the current year (useful for copyright notices)
- `{{slug}}` — the current page name without the language or extension (e.g., `about` for `about.en.html`)
