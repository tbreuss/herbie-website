---
title: Kontakt
no_cache: true
form1:
   elements:
       Name:
           type: text
           options:
               constraints: ['NotBlank()', 'MinLength(4)']
       Email:
           type: text
           options:
               constraints: ['Email()']
       Nachricht:
           type: textarea
           options:
               constraints: ['NotBlank()', 'MinLength(10)']
---

# Kontaktformular

{{ form('form1') }}