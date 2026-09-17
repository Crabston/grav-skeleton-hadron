---
# TODO: update docs to match current Hadron version and features
title: Dokumentation
blog_url: /docs
display_banner: /docs/news-banner
sitemap:
    changefreq: monthly
    priority: 0.8
    lastmod: 02-07-2026
date: 02-07-2026
taxonomy:
    category: [ Dokumentation, Hadron ]
feed:
    limit: 10
show_breadcrumbs: true
sidebar:
    enable: true
    show_popular_tags: true
    show_feed: true
    show_toc: false
    show_tntsearch: true
pagination: true
show_pagination: true
child_type: item
modular_content:
    items: '@self.modular'
    order:
        by: folder
        dir: asc
        custom:
            - _notice
content: # TODO: use '@self.children' instead of '@self.descendants' when the blog is ready
    # needs bugfix of empty tags getting displayed
    items: '@self.descendants'
    limit: 10
    order:
        by: folder
        dir: asc
    pagination: true
    url_taxonomy_filters: true
---

===

# [span class="hadron-font"]Hadron[/span] Dokumentation
## Technische Anleitungen für Entwickler
## Einfache Anweisungen für Anfänger
