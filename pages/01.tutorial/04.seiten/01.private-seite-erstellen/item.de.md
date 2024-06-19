---
title: Private Seite erstellen
slug: private-seite-erstellen
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 20-04-2024
date: 20-04-2024
taxonomy:
  category: Seiten
  tag: [ Anleitung, Seiten ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-dark overlay-dark parallax'
---

!!! Wie du in Grav eine private Seite erstellst, die nur für angemeldete Benutzer sichtbar ist

===

## Ziel

In dieser Anleitung lernst du, wie du eine private Seite erstellst, die nur für bestimmte Benutzer sichtbar ist.

Wenn ein Benutzer nicht angemeldet ist, wird er aufgefordert, sich anzumelden:
![Screenshot Private Seite - Login](private-seite-login.webp?lightbox&resize=600)

Nach dem Anmelden kann er den Inhalt der Seite sehen:
![Screenshot Private Seite - angemeldet](private-seite-angemeldet.webp?lightbox&resize=600)

## Schritte

### Benutzer konfigurieren

Zuerst musst du die Benutzer konfigurieren, die Zugriff auf die private Seite haben sollen.

1. Melde dich im Admin Panel an
2. Navigiere zu «Benutzerkonten»
3. Falls noch nicht vorhanden, erstelle die nötigen Benutzerkonten
4. Füge den Benutzern die `site.login` Berechtigung _(Website > An der Website anmelden)_ hinzu oder nutze eine entsprechende Gruppe

### Seite konfigurieren

Als Nächstes musst du die Seite konfigurieren, damit sie nur für angemeldete Benutzer sichtbar ist.

1. Erstelle eine neue Seite oder öffne eine bestehende
2. Navigiere zum Tab «Sicherheit»
3. Ändere die Einstellung «Seitenzugriff» gemäss dem unteren Screenshot
![Screenshot Admin Panel](admin-private-seite.webp?lightbox&resize=600)
4. Alternativ kannst du die Einstellung auch über den Frontmatter der Seite setzen:

```yaml
login:
  visibility_requires_access: true
access:
  site.login: true
```

### Testen

Zuletzt musst du die Seite testen, um sicherzustellen, dass sie korrekt funktioniert.

1. Logge dich aus
2. Navigiere zur Seite
3. Du solltest aufgefordert werden, dich anzumelden
4. Logge dich ein
5. Du solltest den Inhalt der Seite sehen können

!!!! Du hast nun erfolgreich eine private Seite erstellt, die nur für angemeldete Benutzer sichtbar ist.
 