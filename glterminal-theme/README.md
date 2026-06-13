# GL Terminal WordPress Theme

This theme uses the approved static homepage design and converts it into WordPress templates.

Most page content is intentionally written directly inside the theme template files so it can be edited in code.

News is dynamic from normal WordPress Posts.

Careers are dynamic from the theme's `Careers / Jobs` custom post type.

## Install

Copy `glterminal-theme` into:

`wp-content/themes/glterminal-theme`

Then activate **GL Terminal** in WordPress.

## Create These Pages In WordPress

Create empty pages with these exact slugs. WordPress will automatically load the matching template files.

- `home` or set the site front page to use `front-page.php`
- `about` uses `page-about.php`
- `services` uses `page-services.php`
- `warehousing` uses `page-warehousing.php`
- `container-depot` uses `page-container-depot.php`
- `freight-forwarding` uses `page-freight-forwarding.php`
- `compliance` uses `page-compliance.php`
- `management` uses `page-management.php`
- `news` uses `page-news.php` and displays normal WordPress Posts
- `careers` uses `page-careers.php` and displays Careers / Jobs posts
- `contact` uses `page-contact.php`

For service URLs like `/services/warehousing/`, create `Warehousing`, `Container Depot`, and `Freight Forwarding` as child pages under `Services`. The slug templates still apply.

## Where To Edit Text

Edit these files directly:

- Homepage: `front-page.php`
- About: `page-about.php`
- Services: `page-services.php`
- Warehousing: `page-warehousing.php`
- Container Depot: `page-container-depot.php`
- Freight Forwarding: `page-freight-forwarding.php`
- Compliance: `page-compliance.php`
- Management: `page-management.php`
- News listing: `page-news.php`; add/edit news items as WordPress Posts
- News detail: `single.php`
- Careers listing: `page-careers.php`; add/edit jobs in Careers / Jobs
- Career detail: `single-glt_career.php`
- Contact: `page-contact.php`

## Assets

Images are local inside:

`assets/images`

Logo and favicon:

- `assets/GLTWhite.svg`
- `assets/GLTfavicon.ico`

Styles:

`assets/css/home.css`
