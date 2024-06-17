---
title: Formular
slug: formular
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 17.06.2024

form:
  name: beispiel-formular
  fields:
    honeypot:
      type: honeypot

    tabs:
      type: tabs
      active: 1
      fields:
        tab1:
          type: tab
          title: Kontaktinformationen
          fields:

            names:
              type: columns
              fields:
                column1:
                  type: column
                  fields:
                    firstname:
                      type: text
                      label: Vorname
                      placeholder: Max
                      classes: fancy
                      validate:
                        required: true
                column2:
                  type: column
                  fields:
                    lastname:
                      type: text
                      label: Name
                      placeholder: Mustermann
                      classes: fancy
                      validate:
                        required: true

            contact_info:
              type: columns
              fields:
                column1:
                  type: column
                  fields:
                    email:
                      type: email
                      label: Email
                      placeholder: email@example.com
                      classes: fancy
                      validate:
                        required: true
                column2:
                  type: column
                  fields:
                    tel:
                      type: tel
                      label: Telefon
                      placeholder: +41 12 345 67 89
                      classes: fancy

            subject:
              type: text
              label: Betreff
              placeholder: Betreff
              classes: fancy
              validate:
                required: true

            message:
              type: textarea
              label: Nachricht
              placeholder: Deine Nachricht
              classes: fancy
              rows: 5
              cols: 40
              validate:
                required: true

        tab2:
          type: tab
          title: weitere Felder
          fields:
            section:
              type: section
              title: Zusätzliche Felder
              text: Hier sind weitere Felder, die benutzt werden können.
            checkbox:
              type: checkbox
              label: Checkbox
              description: Beschreibung des Feldes
              classes: fancy
            #checkboxes:
            #  type: checkboxes
            #  label: Mehrere Checkboxen
            #  default:
            #    - one
            #  options:
            #    one: Option Eins
            #    two: Option Zwei
            #    three: Option Drei
            date:
              type: date
              label: Datum
              classes: fancy
              validate:
                min: 2020-01-01
                max: 2025-12-31
            number:
              type: number
              label: Nummer
              classes: fancy
              validate:
                min: 1
                max: 10
            radio:
              type: radio
              label: Radio
              classes: fancy
              default: two
              options:
                one: Option Eins
                two: Option Zwei
                three: Option Drei
            range:
              type: range
              label: Bereich
              classes: fancy
              default: 5
              validate:
                min: 1
                max: 10
            select:
              type: select
              label: Auswahl
              classes: fancy
              default: two
              options:
                one: Option Eins
                two: Option Zwei
                three:
                  value: Option Drei
                  disabled: true
                four: Option Vier
            select_multiple:
              type: select
              label: Mehrfachauswahl
              classes: fancy
              default: two
              multiple: true
              options:
                one: Option Eins
                two: Option Zwei
                three:
                  value: Option Drei
                  disabled: true
                four: Option Vier
            select_optgroup:
              type: select_optgroup
              label: Gruppenauswahl
              classes: fancy
              options:
                - Gruppe 1:
                    - Option Eins
                    - Option Zwei
                - Gruppe 2:
                    - Option Drei
                    - Option Vier
            toggle:
              type: toggle
              label: Schalter
              classes: fancy
              highlight: 1
              options:
                1: Ja
                0: Nein
              validate:
                type: bool
            url:
              type: url
              label: URL
              classes: fancy
              placeholder: https://crabston.ch


  buttons:
    submit:
      type: submit
      value: Senden
      classes: fancy btn btn-primary
    reset:
      type: reset
      value: Zurücksetzen
      classes: fancy

  process:
    # NOTE: commented out to prevent spam
    #email:
    #  from: "{{ config.plugins.email.from }}"
    #  to:
    #    - "{{ config.plugins.email.to }}"
    #    - "{{ form.value.email }}"
    #  subject: "[Feedback]: {{ form.value.subject|e }}"
    #  body: "{% include 'forms/data.html.twig' %}"
    #save:
    #  fileprefix: feedback-
    #  dateformat: Ymd-His-u
    #  extension: txt
    #  body: "{% include 'forms/data.txt.twig' %}"
    message: Vielen Dank für deine Nachricht!
    display: thankyou
---

# Beispiel Formular

Dies ist ein Beispiel für ein Kontaktformular. Es enthält Felder für Name, Vorname, E-Mail, Betreff und Nachricht. Das Formular kann per E-Mail versendet werden und die Daten werden in einer Datei gespeichert.

!!! Aus Spam und Sicherheitsgründen werden Formulardaten weder gespeichert noch versendet.
