# Pool All-Stars Commercial — WordPress Theme

A WordPress theme that mirrors the static HTML site at https://rbtech24.github.io/pool-allstars-commercial/ — same design, same structure, same content, but powered by WordPress so content can be edited from the admin.

## What's included

- **32 page templates** — one per page on the static site
  - 1 home (`front-page.php`)
  - 5 overview pages (about, contact, services, industries, service-area)
  - 8 industry pages (hotels-resorts, hoas-condos, fitness-aquatic, multi-property, municipal-schools, vacation-rentals, water-parks, country-clubs)
  - 8 service pages (weekly-maintenance, equipment-repair, water-chemistry, filter-cleaning, green-pool-recovery, leak-detection, acid-washing, pool-renovation)
  - 7 service area pages (tampa-bay, orlando, south-florida, jacksonville, sw-florida, space-coast, lakeland)
  - 3 legal pages (privacy, terms, accessibility)
- **Shared template parts** — header, footer, mobile menu, CTA, services-grid, industries-grid, areas-grid
- **Auto page creation on activation** — installs all 32 pages with correct slugs and parent-child relationships when the theme activates
- **SEO ready** — per-page schema.org JSON-LD, canonical URLs, OpenGraph, breadcrumbs, sitemap-ready URL structure
- **Leaflet map** on the service-area page (loaded conditionally)
- **Mobile responsive** — full hamburger menu drawer for screens under 1024px

## Install

1. **Zip the theme folder.** From inside `pool-allstars-commercial-theme/`, create a zip of the entire directory.
2. **Upload to WordPress.** WP Admin → Appearance → Themes → Add New → Upload Theme → choose the zip → Install Now.
3. **Activate.** The theme will automatically create all 32 pages with the right URL slugs.
4. **Set permalinks.** WP Admin → Settings → Permalinks → choose **Post name** → Save Changes.
5. **Set the homepage.** WP Admin → Settings → Reading → "Your homepage displays" → either keep "Latest posts" (since `front-page.php` overrides) OR select "A static page" and choose "Home" if you create one. Either works.
6. **Done.** Visit your site and click around — all pages will be live.

## Editing content

Content for industry/service/area pages is currently in the template files (matching the static HTML site). To edit:
- Edit the corresponding `page-{slug}.php` file in this theme
- OR move content into the WP page editor and load with `the_content()` in the template

For the homepage, edit `front-page.php` directly.

## File structure

```
pool-allstars-commercial-theme/
├── style.css                       (theme metadata header)
├── functions.php                   (setup, enqueue, page auto-creator, SEO meta)
├── header.php                      (utility bar, sticky header, mobile menu)
├── footer.php                      (footer + mobile menu JS)
├── front-page.php                  (homepage)
├── index.php                       (fallback)
├── page.php                        (default page template)
├── 404.php
├── page-{slug}.php × 31           (one per unique page)
├── template-parts/
│   ├── cta-final.php              (final CTA section)
│   ├── services-grid.php          (4-card services grid)
│   ├── industries-grid.php        (4-card industries grid)
│   └── areas-grid.php             (4-card service areas grid)
└── assets/
    ├── css/style.css              (all theme styles)
    └── images/                    (logo, hero, truck)
```

## Domain & DNS

When you point `PoolAllstarsCommercial.com` at this WordPress install:
1. Configure your hosting (e.g., SiteGround, WP Engine, Cloudways)
2. Update DNS A records to your WP host's IP
3. Set WordPress URL: WP Admin → Settings → General → both URLs to `https://poolallstarscommercial.com`
4. Submit `https://poolallstarscommercial.com/sitemap.xml` to Google Search Console (install Yoast SEO or Rank Math to auto-generate it)

## Recommended plugins

- **Rank Math** or **Yoast SEO** — better than the basic SEO meta in this theme; handles sitemap.xml, breadcrumbs, schema, and per-page meta editing in admin
- **WPForms** or **Contact Form 7** — replace the placeholder contact form with a real form handler
- **Wordfence** or **Sucuri** — security
- **WP Rocket** or **W3 Total Cache** — speed/caching
- **Smush** — image optimization (compress the existing PNGs)

## License

GPL v2 or later.
