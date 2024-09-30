---
title: Blog
slug: blog
blog_url: /blog
sitemap:
  changefreq: yearly
  priority: 0.7
  lastmod: 27-08-2024
date: 27-08-2024
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
      - _nachricht
content:
  items: '@self.children'
  limit: 8
  order:
    by: date
    dir: dsc
  pagination: true
  url_taxonomy_filters: true
---

# Blog Beispiel
## Beispiel Blog Seite in Grav

Dies ist eine Beispiel Blog Seite in Grav. Sie zeigt, wie ein Blog in Grav aussehen kann und welche Funktionen er bietet.
