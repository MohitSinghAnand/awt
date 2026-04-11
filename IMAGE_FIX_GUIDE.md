# Image Path Fix Guide for Tour Package Pages

## Problem
Images in "View All [Country] Tour Packages" section show as broken. The issue is incorrect file extensions in image paths - they use `.html` instead of `.jpg`.

## Common Broken Patterns
Broken paths typically look like:
```html
src="../../../../wp-content/uploads/2019/11/filename.html"
```

Should be:
```html
src="../../../../wp-content/uploads/2019/11/filename-680x500.jpg"
```

## Quick Fix Steps

### 1. Find the Target File
Location pattern:
```
/packages/international/europe/[country]-tour-packages/index.html
```

### 2. Locate the Section
Search for:
```
"View All [Country] Tour Packages"
```
or
```
id="gt_all_packages"
```

### 3. Find Broken Images
Look for `grid-item` elements with `image_mark` class containing `img` tags. Check for `.html` extensions:
```html
<div class="grid-item">
  <div class="image_mark">
    <img src=".../filename.html" />  <!-- BROKEN -->
  </div>
</div>
```

### 4. Verify Correct Filename
Check `wp-content/uploads/2019/11/` directory for actual file with `-680x500.jpg` suffix.

### 5. Apply Fix
Replace `.html` with `-680x500.jpg`:
```html
<!-- Before -->
src="../../../../wp-content/uploads/2019/11/croatia-holiday-package.html"

<!-- After -->
src="../../../../wp-content/uploads/2019/11/croatia-holiday-package-680x500.jpg"
```

## Real Examples

| Country | Broken Path | Fixed Path |
|---------|-------------|------------|
| Croatia | `croatia-holiday-package.html` | `croatia-holiday-package-680x500.jpg` |
| Croatia | `dubrovnik-sea.html` | `dubrovnik-sea-680x500.jpg` |
| Croatia | `Zagreb.html` | `Zagreb-680x500.jpg` |
| Belgium | `belgium-holiday-package.html` | `belgium-holiday-package-680x500.jpg` |
| Bulgaria | `istanbul-turkey-city-tour.html` | `Istanbul-turkey-tour-package-680x500.jpg` |

## Countries Already Fixed
- Austria
- Belgium
- Bulgaria
- Croatia

## Pattern for Future Fixes
Replace:
```
../../../../wp-content/uploads/2019/11/[ANY_NAME].html
```

With:
```
../../../../wp-content/uploads/2019/11/[ANY_NAME]-680x500.jpg
```

Note: Check actual file exists with `-680x500.jpg` suffix in the uploads folder before applying.
