#!/usr/bin/env -S uv run -q
# /// script
# requires-python = ">=3.10"
# dependencies = [
#     "jinja2",
# ]
# ///
import datetime
import pathlib

import jinja2

HERE = pathlib.Path(__file__).resolve().parent


def main():
    environment = jinja2.Environment(loader=jinja2.FileSystemLoader(HERE))
    environment.globals["year"] = datetime.date.today().year
    destination_folder = HERE.parent
    for file in HERE.glob("*.html"):
        # skip helper files
        if file.name.startswith("_"):
            continue

        # infer value for {{slug}} from filename if possible
        parts = file.name.split(".")
        slug = parts[0] if len(parts) == 3 and len(parts[1]) == 2 else "index"

        # run template and save results
        template = environment.get_template(file.name)
        output = template.render(slug=slug)
        path = destination_folder / file.name
        path.write_text(output)


if __name__ == "__main__":
    main()
