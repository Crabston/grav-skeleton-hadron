---
title: Kontakt
sitemap:
  changefreq: yearly
  priority: 0.4
  lastmod: 18.06.2024

form:
  name: contact-form
  fields:
    names:
      type: columns
      fields:

        col1:
          type: column
          fields:
            firstname:
              type: text
              label: Vorname
              placeholder: Max

        col2:
          type: column
          fields:
            lastname:
              type: text
              label: Nachname
              placeholder: Mustermann

    email:
      type: email
      label: 'E-Mail Adresse'
      placeholder: max.mustermann@example.com
      validate:
        required: '1'

    subject:
      type: text
      label: Betreff
      placeholder: 'Ihr Anliegen'
      validate:
        required: '1'

    message:
      type: textarea
      label: Nachricht
      placeholder: 'Ihre Nachricht an uns.'
      validate:
        required: '1'

  buttons:
    submit:
      type: submit
      value: Senden
      classes: 'btn btn-primary'
    reset:
      type: reset
      value: Zurücksetzen

  process:
    email:
      from: '{{ config.plugins.email.from }}'
      to:
        - '{{ config.plugins.email.to }}'
        - '{{ config.site.author.email }}'
      subject: '[Feedback]: {{ form.value.subject|e }}'
      body: '{% include ''forms/data.html.twig'' %}'
    display: thankyou
    message: 'Wir haben Ihre Nachricht bekommen.'
---

# Kontakt

Kontaktiere uns:

Crabston GmbH <br />
Städtli 16 <br />
3380 Wangen an der Aare <br />
[kontakt@crabston.ch](mailto:kontakt@crabston.ch) <br />
[crabston.ch](https://crabston.ch)
