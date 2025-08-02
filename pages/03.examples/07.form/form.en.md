---
title: Form
sitemap:
  changefreq: never
  priority: 0.3
  lastmod: 01-08-2025
date: 01-08-2025
form:
  name: example-form
  fields:
    honeypot:
      type: honeypot

    tabs:
      type: tabs
      active: 1
      fields:
        tab1:
          type: tab
          title: Contact Information
          fields:

            names:
              type: columns
              fields:
                column1:
                  type: column
                  fields:
                    firstname:
                      type: text
                      label: First Name
                      placeholder: Eva
                      validate:
                        required: true
                column2:
                  type: column
                  fields:
                    lastname:
                      type: text
                      label: Last Name
                      placeholder: Example
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
                      validate:
                        required: true
                column2:
                  type: column
                  fields:
                    tel:
                      type: tel
                      label: Phone
                      placeholder: +41 12 345 67 89

            subject:
              type: text
              label: Subject
              placeholder: Your Subject
              validate:
                required: true

            message:
              type: textarea
              label: Message
              placeholder: Your message here...
              rows: 5
              cols: 40
              validate:
                required: true

        tab2:
          type: tab
          title: Additional Fields
          fields:
            section:
              type: section
              title: Additional Fields
              text: This is a section with additional fields that you can add as needed.
            checkbox:
              type: checkbox
              label: Checkbox
              description: Description for the checkbox
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
              label: Date
              validate:
                min: 2020-01-01
                max: 2025-12-31
            number:
              type: number
              label: Number
              validate:
                min: 1
                max: 10
            radio:
              type: radio
              label: Radio
              default: two
              options:
                one: Option One
                two: Option Two
                three: Option Three
            range:
              type: range
              label: Range
              default: 5
              validate:
                min: 1
                max: 10
            select:
              type: select
              label: Select
              default: two
              options:
                one: Option One
                two: Option Two
                three:
                  value: Option Three
                  disabled: true
                four: Option Four
            select_multiple:
              type: select
              label: Multiple Select
              default: two
              multiple: true
              options:
                one: Option One
                two: Option Two
                three:
                  value: Option Three
                  disabled: true
                four: Option Four
            select_optgroup:
              type: select_optgroup
              label: Select with Groups
              options:
                - Group 1:
                    - Option One
                    - Option Two
                - Group 2:
                    - Option Three
                    - Option Four
            toggle:
              type: toggle
              label: Toggle
              highlight: 1
              options:
                1: Yes
                0: No
              validate:
                type: bool
            url:
              type: url
              label: URL
              placeholder: https://crabston.ch

  buttons:
    submit:
      type: submit
      value: Submit
      classes: btn btn-primary
    reset:
      type: reset
      value: Reset

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
    message: Thank you for your submission!
    display: thankyou
---

# Form Example

This is an example of a contact form. It includes fields for first name, last name, email, phone, subject, and message. The form can be submitted via email and the data can be saved to a file.

!!! Due to spam and security reasons, form data is neither saved nor sent.
