# -*- coding: utf-8 -*-
"""Merge gtholidays Europe body with Austria tour-packages head, header, footer."""
import re
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]


def read_text(p: Path) -> str:
    return p.read_text(encoding="utf-8", errors="replace")


def reduce_rel_one_level(s: str) -> str:
    """Austria is one folder deeper than europe/; remove exactly one ../ per URL attribute."""

    def _strip_one(m: re.Match) -> str:
        prefix, dots = m.group(1), m.group(2)
        if len(dots) >= 3:
            return prefix + dots[3:]
        return m.group(0)

    s = re.sub(
        r'((?:href|src|content|action)\s*=\s*["\'])((?:\.\./)+)',
        _strip_one,
        s,
        flags=re.I,
    )
    # Inline CSS url(../../../../...)
    s = re.sub(
        r'(url\s*\(\s*["\']?)((?:\.\./)+)',
        lambda m: m.group(1) + (m.group(2)[3:] if len(m.group(2)) >= 3 else m.group(2)),
        s,
        flags=re.I,
    )
    return s


def main() -> None:
    austria_path = ROOT / "packages/international/europe/austria-tour-packages/index.html"
    gth_path = ROOT / "packages/international/europe/index.gtholidays.html"
    out_path = ROOT / "packages/international/europe/index.html"

    austria = read_text(austria_path)
    gth = read_text(gth_path)

    m = re.search(r"(?is)<head[^>]*>.*?</head>", austria)
    if not m:
        raise SystemExit("No <head> in austria")
    head = reduce_rel_one_level(m.group(0))

    m = re.search(r"(?is)<header[^>]*>.*?</header>", austria)
    if not m:
        raise SystemExit("No <header> in austria")
    header = reduce_rel_one_level(m.group(0))

    m = re.search(r'(?is)<footer[^>]*id=["\']main-footer["\'][^>]*>.*?</footer>', austria)
    if not m:
        raise SystemExit("No #main-footer in austria")
    footer = reduce_rel_one_level(m.group(0))

    m = re.search(r"(?is)</header>(.*?)<footer[^>]*id=[\"']main-footer[\"']", gth)
    if not m:
        raise SystemExit("No middle section in gtholidays (header→footer)")
    middle = m.group(1)

    # Tail: everything after gth's closing </footer> (main-footer block) through </html>
    m = re.search(r"(?is)<footer[^>]*id=[\"']main-footer[\"'][^>]*>.*?</footer>", gth)
    if not m:
        raise SystemExit("Cannot find gtholidays footer block")
    end_pos = m.end()
    tail = gth[end_pos:].strip()
    if "</html>" not in tail:
        raise SystemExit("No </html> after gtholidays footer")

    m = re.search(r"(?is)<!DOCTYPE[^>]*>\s*<html[^>]*>", gth)
    html_open = m.group(0) if m else "<!DOCTYPE html>\n<html lang=\"en-US\">\n"

    m = re.search(r"(?is)<body[^>]*>", gth)
    if not m:
        raise SystemExit("No <body> in gtholidays")
    body_open = m.group(0)

    merged = html_open + "\n" + head + "\n" + body_open + "\n" + header + "\n" + middle + "\n" + footer + "\n" + tail

    out_path.write_text(merged, encoding="utf-8", newline="")
    print("OK", out_path, "bytes", len(merged.encode("utf-8")))


if __name__ == "__main__":
    main()
