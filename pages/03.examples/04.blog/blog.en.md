---
title: Blog
blog_url: /blog
sitemap:
  changefreq: never
  priority: 0.3
  lastmod: 01-08-2025
date: 01-08-2025
feed:
  limit: 10
hero_classes: 'text-light overlay-dark-gradient hero-large parallax'
body_classes: 'header-dark header-transparent'
show_breadcrumbs: false
sidebar:
  show_popular_tags: true
  show_feed: true
  show_toc: false
  show_tntsearch: true
pagination: true
show_pagination: true
bricklayer_layout: true
child_type: item
display_post_summary:
  enabled: false
modular_content:
  items: '@self.modular'
  order:
    by: folder
    dir: dsc
    custom:
      - _message
content:
  items: '@self.children'
  limit: 8
  order:
    by: date
    dir: dsc
  pagination: true
  url_taxonomy_filters: true
---

# Blog Example
## Example Blog Page in Hadron

This is an example blog page in Grav with Hadron. It shows how a blog can look alike and what features it offers.