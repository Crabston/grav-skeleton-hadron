---
title: Formular
slug: formular
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 29.05.2024

form:
  name: beispiel-formular
  fields:
    honeypot:
      type: honeypot

    columns:
      type: columns
      fields:
        column1:
          type: column
          fields:
            lastname:
              label: Name
              placeholder: Mustermann
              type: text
              validate:
                required: true
        column2:
          type: column
          fields:
            firstname:
              label: Vorname
              placeholder: Max
              type: text
              validate:
                required: true

    email:
      label: Email
      placeholder: email@example.com
      type: email
      validate:
        required: true

    subject:
      label: Betreff
      placeholder: Betreff
      type: text
      validate:
        required: true

    message:
      label: Nachricht
      placeholder: Deine Nachricht
      type: textarea
      rows: 5
      cols: 40
      validate:
        required: true

  buttons:
    submit:
      type: submit
      value: Senden
    reset:
      type: reset
      value: Zurücksetzen

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
