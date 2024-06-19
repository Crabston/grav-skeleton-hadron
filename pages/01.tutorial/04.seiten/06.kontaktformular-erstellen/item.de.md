---
published: true
title: Kontaktformular erstellen
slug: kontaktformular-erstellen
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 18-06-2024
date: 18-06-2024
taxonomy:
  category: Seiten
  tag: [ Anleitung, Seiten, Formular ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-dark overlay-dark parallax'
---

!!! In dieser Anleitung lernst du, wie du ein Kontaktformular mit verschiedenen Optionen erstellst und so Daten von Besuchern sammeln kannst.

===

!!! Diese Anleitung zeigt nicht, wie Formulare im Admin Panel erstellt werden können. Eine Anleitung zu den Optionen über das Admin Panel findest du über [Tutorials / Seiten / Seiten bearbeiten - erweitert #Formular](/tutorial/seiten/seiten-bearbeiten-erweitert#formular).

! Für diese Anleitung ist etwas mehr Erfahrung mit Grav erforderlich, um alle Informationen in dieser Anleitung zu verstehen und anzuwenden. Optimal hast du auch bereits mit dem Frontmatter gearbeitet.
! Ein Standard Formular kann jedoch auch ohne Vorkenntnisse erstellt werden.

## Einleitung
Mit einem Kontaktformular können Besucher der Website einfach und schnell mit dir in Kontakt treten, auch wenn sie keinen Zugang zu E-Mail oder Telefon haben. Ein Kontaktformular kann viele verschiedene Felder enthalten und kann mit vielen verschiedenen Optionen und Layouts erstellt werden.

Dadurch ist es jedoch etwas komplizierter und erfordert etwas mehr Erfahrung mit Grav, es ist jedoch möglich ein Standardformular ohne Vorkenntnisse zu erstellen.

## Voraussetzungen

Es braucht keine speziellen Voraussetzungen, um ein Kontaktformular zu erstellen und Daten von Besuchern zu sammeln. Jedoch gibt es verschiedene Möglichkeiten, wie Daten gesammelt werden können. Es gibt folgende Möglichkeiten per Standard:
- versenden einer E-Mail an eine E-Mail-Adresse
- speichern der Daten in einer Datei auf dem Server

Damit eine E-Mail versendet werden kann, muss der Server E-Mails versenden können. Dafür wird eine E-Mail Konfiguration benötigt.

Für das Speichern der Daten auf dem Server wird keine spezielle Konfiguration benötigt. Jedoch braucht es im Admin Panel eine Option um die Daten zu sehen, welche nicht standardmässig vorhanden ist.

## Beispielformular

Ein Beispielformular für eine Kontaktseite könnte folgende Felder enthalten und deren Inhalt an eine bestimmte E-Mail-Adresse gesendet werden:
- Name
- Vorname
- E-Mail
- Betreff
- Nachricht

Du findest ein Beispiel für ein Kontaktformular unter [Beispiele / Formular](/beispiele/formular).

Um ein Formular zu erstellen, muss eine Seite mit dem Typ `form` erstellt werden. Diese **muss** anschliessend über die Expertenansicht bearbeitet werden um die Felder zu erstellen. Füge dazu den folgenden Code in die Frontmatter der Seite ein:

```yaml
# ... andere Frontmatter Daten

# Hier beginnt das Formular
form:
  name: kontaktformular # Name des Formulars um es zu identifizieren
  fields: # Felder des Formulars
    names: # Name des Feldes
      type: columns # Felder in Spalten anordnen
      fields: # Felder der Spalten

        col1: 
          type: column # Spalte 1
          fields: # Felder der Spalte
            firstname: # Name des Feldes
              type: text # Typ des Feldes
              label: Vorname # Beschriftung des Feldes
              placeholder: Max # Platzhalter im Feld

        col2:
          type: column
          fields:
            lastname:
              type: text
              label: Nachname
              placeholder: Mustermann

    email:
      type: email # Der Typ E-Mail setzt ein E-Mail Format voraus
      label: 'E-Mail Adresse'
      placeholder: max.mustermann@example.com
      validate:
        required: '1' # Das Feld ist Pflichtfeld

    subject:
      type: text
      label: Betreff
      placeholder: 'Ihr Anliegen'
      validate:
        required: '1'

    message:
      type: textarea # Textarea ist ein mehrzeiliges Textfeld
      label: Nachricht
      placeholder: 'Ihre Nachricht an uns.'
      validate:
        required: '1'

  buttons: # Knöpfe des Formulars
    submit: 
      type: submit # Knopf zum Absenden
      value: Senden # Beschriftung des Knopfes
      classes: 'btn btn-primary' # Klassen für das Styling, hier für einen Primärknopf
    reset:
      type: reset # Knopf zum Zurücksetzen
      value: Zurücksetzen

  process: # Verarbeitung des Formulars
    email: # E-Mail Option
      from: '{\{ config.plugins.email.from \}}' # Absender der E-Mail, hier die Standard E-Mail Adresse des Plugins
      to: # Empfänger der E-Mail als Liste, hier die E-Mail Adresse des Seitenautors
        - '{\{ config.site.author.email \}}'
      subject: '[Kontaktformular]: {\{ form.value.subject|e \}}' # Betreff der E-Mail
      body: '{\% include 'forms/data.html.twig' \%}' # Inhalt der E-Mail einfügen
    display: thankyou # Anzeige einer Dankesseite nach Absenden des Formulars
    message: 'Wir haben Ihre Nachricht erhalten und werden uns in Kürze bei Ihnen melden.' # Nachricht auf der Dankesseite
```

**_Es müssen unbedingt alle '\' zwischen {{ '{{ }}' }} und {{ '{% %}' }} entfernt werden!_**

Der gesamte Inhalt der Seite wird über dem Formular angezeigt. Der Inhalt wird nur angezeigt, wenn das Formular nicht abgesendet wurde. Nach dem Absenden des Formulars wird die Dankesseite angezeigt.

Die Dankesseite muss mit dem bei `form.process.display` angegebenen Pfad übereinstimmen. In diesem Beispiel muss noch eine Unterseite mit dem Namen `thankyou` erstellt werden, als Seitentyp muss `formdata` gewählt werden. Der Inhalt der Seite wird über dem Rest angezeigt. Es braucht keine Felder oder sonstige Einstellungen. Optional soll die Seite konfiguriert werden, dass sie nicht auffindbar ist und von der Sitemap ausgeschlossen wird.

## Formular Typen

Es gibt viele verschiedene Typen von Elementen, die in einem Formular verwendet werden können:
- `text`: Ein einfaches Textfeld
- `email`: Ein Textfeld für E-Mail Adressen
- `textarea`: Ein mehrzeiliges Textfeld
- `date`: Ein Datumsfeld
- `number`: Ein Textfeld für Zahlen
- `url`: Ein Textfeld für URLs
- `checkbox`: Ein Kontrollkästchen
- `radio`: Ein Radioknopf (Auswahl zwischen mehreren Optionen)
- `select`: Ein Dropdown-Menü
- `range`: Ein Schieberegler
- `toggle`: Ein Schalter (Ja/Nein)

Zudem gibt es noch spezielle Typen für Layouts:
- `columns`: Felder in Spalten anordnen
- `tabs`: Felder in Tabs anordnen
- `section`: Felder in Abschnitten anordnen

!!! Du findest Beispiele für die verschiedenen Felder auf der Seite [Beispiele / Formular](/beispiele/formular).

### _Standard_
Standardmässig hat ein Feld folgende Einstellungen:
```yaml
name: # Name des Feldes
	type: text # Typ des Feldes
	label: 'Beschriftung' # Beschriftung des Feldes
	classes: 'css-class' # CSS-Klassen des Feldes (verwende `no-css` um den Standard style zu entfernen)
	validate: # Validierungsregeln des Feldes
		required: '1' # Das Feld ist Pflichtfeld
```

### Text
Ein einfaches Textfeld, welches für kurze Texte verwendet wird:
```yaml
name:
	type: text
	label: 'Beschriftung'
	placeholder: 'Platzhalter'
	validate:
		# ... Validierungsregeln
```

### E-Mail
Ein Textfeld für E-Mail Adressen:
```yaml
name:
	type: email
	label: 'Beschriftung'
	placeholder: 'Platzhalter'
	validate:
		# ... Validierungsregeln
```

### Textarea
Ein mehrzeiliges Textfeld, welches für längere Texte verwendet wird:
```yaml
name:
	type: textarea
	label: 'Beschriftung'
	placeholder: 'Platzhalter'
	rows: 5 # Anzahl Zeilen
	cols: 40 # Anzahl Zeichen pro Zeile
	validate:
		# ... Validierungsregeln
```

### Date
Ein Datumsfeld, mit welchem ein Datum ausgewählt werden kann:
```yaml
name:
	type: date
	label: 'Beschriftung'
	validate:
		min: 2020-01-01 # Minimales Datum
		max: 2025-12-31 # Maximales Datum
```

### Number
Ein Textfeld für Zahlen:
```yaml
name:
	type: number
	label: 'Beschriftung'
	validate:
		min: 1 # Minimale Zahl
		max: 10 # Maximale Zahl
```

### URL
Ein Textfeld für URLs:
```yaml
name:
	type: url
	label: 'Beschriftung'
	placeholder: 'https://example.com'
```

### Checkbox
Ein Kontrollkästchen, welches für Ja/Nein Fragen verwendet wird:
```yaml
name:
	type: checkbox
	label: 'Beschriftung'
	description: 'Beschreibung'
```

### Radio
Ein Radioknopf, welcher eine Auswahl zwischen mehreren Optionen ermöglicht:
```yaml
name:
	type: radio
	label: 'Beschriftung'
	default: 'Option' # Standardoption
	options: # Liste von Optionen mit deren Wert und Beschriftung
		one: 'Option Eins'
		two: 'Option Zwei'
		three: 'Option Drei'
```

### Select
Ein Dropdown-Menü, welches eine Auswahl zwischen mehreren Optionen ermöglicht:
```yaml
name:
	type: select
	label: 'Beschriftung'
	default: 'Option' # Standardoption
	multiple: true # Mehrfachauswahl
	options: # Liste von Optionen mit deren Wert und Beschriftung
		one: 'Option Eins'
		two: 'Option Zwei'
		three:
			value: 'Option Drei' # Wert der Option (Beschriftung)
			disabled: true # Option deaktivieren
		four: 'Option Vier'
```

Zudem können die Optionen auch in Gruppen angeordnet werden:
```yaml
name:
  type: select_optgroup
  label: 'Beschriftung'
  options: # Liste von Gruppen mit deren Optionen
    - Gruppe 1: # Name der Gruppe (kann nicht ausgewählt werden)
        - 'Option Eins' # Optionen der Gruppe
        - 'Option Zwei'
    - Gruppe 2:
        - 'Option Drei'
        - 'Option Vier'
```

### Range
Ein Schieberegler, welcher eine Auswahl zwischen einem Bereich von Zahlen ermöglicht:
```yaml
name:
	type: range
	label: 'Beschriftung'
	default: 5 # Standardwert
	validate:
		min: 1 # Minimale Zahl
		max: 10 # Maximale Zahl
```

### Toggle
Ein Schalter, welcher eine Auswahl zwischen Ja und Nein ermöglicht:
```yaml
name:
	type: toggle
	label: 'Beschriftung'
	highlight: 1 # Standardwert
	options: # Liste von Optionen mit deren Wert und Beschriftung
		1: 'Ja'
		0: 'Nein'
```

### Columns
Felder in Spalten anordnen:
```yaml
name:
	type: columns
	fields: # Liste von Feldern in den Spalten
		col1:
			type: column
			fields: # Liste von Feldern in der Spalte
				field1: # Name des Feldes
					type: text
					label: 'Beschriftung'
		col2:
			type: column
			fields:
				field2:
					type: text
					label: 'Beschriftung'
```

### Tabs
Felder in Tabs anordnen:
```yaml
name:
  type: tabs
  active: 1 # Standard Tab
  fields: # Liste von Feldern in den Tabs
    tab1:
      type: tab
      title: 'Tab 1' # Titel des Tabs
      fields: # Liste von Feldern im Tab
        field1: # Name des Feldes
          type: text
          label: 'Beschriftung'
    tab2:
      type: tab
      title: 'Tab 2'
      fields:
        field2:
          type: text
          label: 'Beschriftung'
```

### Section
Felder in Abschnitten anordnen:
```yaml
name:
	type: section
	title: 'Abschnitt' # Titel des Abschnitts
	text: 'Beschreibung' # Beschreibung des Abschnitts
	fields: # Liste von Feldern im Abschnitt
		field1: # Name des Feldes
			type: text
			label: 'Beschriftung'
```

## Fazit
Das Erstellen von Formularen in Grav ist etwas komplizierter als viele andere Funktionen, dafür hat man fast unbegrenzte Möglichkeiten, wie ein Formular erstellt werden kann. Mit den verschiedenen Typen und Layouts können Formulare für viele verschiedene Zwecke erstellt werden.

Zu beachten ist, dass das Formular richtig aufgebaut und konfiguriert ist, bevor es veröffentlicht wird. Dazu eignet sich zu Beispiel eine Testseite, auf welcher das Formular getestet werden kann. So können Fehler frühzeitig erkannt und behoben werden.

Sollten dennoch Probleme auftreten, versuche zur letzten funktionierenden Version zurückzukehren und die Änderungen Schritt für Schritt zu überprüfen. So kann das Problem schnell gefunden und behoben werden.

Kontaktiere andernfalls den Seitenadministrator.
