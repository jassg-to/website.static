#!/usr/bin/env -S uv run
# /// script
# requires-python = ">=3.10"
# dependencies = [
#     "jinja2",
# ]
# ///
from pathlib import Path

from jinja2 import Environment, FileSystemLoader

HERE = Path(__file__).resolve().parent
TARGET = HERE.parent


def main():
    env = Environment(loader=FileSystemLoader(HERE))
    for file in HERE.glob("*.html"):
        # skip partials
        if file.name.startswith("_"):
            continue

        template = env.get_template(file.name)
        output = template.render()
        with open(TARGET / file.name, "w") as f:
            f.write(output)


if __name__ == "__main__":
    main()
