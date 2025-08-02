---
# TODO: update docs to match current Hadron version and features
title: Dokumentation
slug: docs
blog_url: /docs
sitemap:
  changefreq: monthly
  priority: 0.7
  lastmod: 31-07-2025
date: 31-07-2025
taxonomy:
  category: [ Docs ]
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
    dir: asc
    custom:
      - _notice
content:
	# TODO: use '@self.children' instead of '@self.descendants' when the blog is ready
	# needs bugfix of empty tags getting displayed
  items: '@self.descendants'
  limit: 8
  order:
    by: folder
    dir: asc
  pagination: true
  url_taxonomy_filters: true
hide_summary: true
---

===

# [span class="hadron-font"]Hadron[/span] Dokumentation
## Technische Anleitungen für Entwickler
