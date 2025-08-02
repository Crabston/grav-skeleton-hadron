---
# TODO: check if there are missing components
title: Komponenten
slug: komponenten
sitemap:
  changefreq: monthly
  priority: 0.8
  lastmod: 02-08-2025
date: 02-08-2025
page-toc:
  depth: 3
---

[div class="columns"]
[div class="column col-9 col-md-12 extra-spacing"]

# Komponenten
Auf dieser Seite sind alle Standardkomponenten von Hadron aufgelistet, die verwendet werden können. Diese Komponenten können in der Regel unabhängig des Seitentyps verwendet werden. 

Diese Seite enthält zu den Komponenten Beschreibungen, Syntax und Beispiele, um die Verwendung zu erleichtern. Manche Komponenten benötigen zusätzliche Plugins, die jedoch im Hadron Skeleton bereits enthalten sind.

===

## Kommentar

!!! **Standardkomponente**  
!!! Kommentare können im Markdown eingefügt werden, um Text zu verstecken, der nicht auf der Seite angezeigt werden soll, jedoch für andere Autoren sichtbar sein soll.  
!!! Der Kommentar wird jedoch immer noch im Quelltext der Seite angezeigt, weswegen er nicht für vertrauliche Informationen verwendet werden sollte.

<!--
Dieser Kommentar wird auf der Seite nicht angezeigt.
-->

```md
<!--
Dieser Kommentar wird auf der Seite nicht angezeigt.
-->
```

## Überschriften

!!! **Standardkomponente**  
!!! Überschriften dienen dazu, den Text zu strukturieren und zu gliedern. Überschriften können Levels von H1 bis H6 haben, wobei H1 die höchste Ebene ist und H6 die niedrigste.

# H1 Überschrift

## H2 Überschrift

### H3 Überschrift

#### H4 Überschrift

##### H5 Überschrift

###### H6 Überschrift

```md
# H1 Überschrift

## H2 Überschrift

### H3 Überschrift

#### H4 Überschrift

##### H5 Überschrift

###### H6 Überschrift
```

## Paragraphen

!!! **Standardkomponente**  
!!! Paragraphen sind Abschnitte von Text, die durch eine Leerzeile getrennt sind. Zeilenumbrüche innerhalb eines Paragraphen werden ignoriert, es sei denn, sie sind durch zwei Leerzeichen am Ende der Zeile markiert.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus.  
Etiam euismod ornare consequat.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.

```md
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus.  
Etiam euismod ornare consequat.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.
```

## Markdown Elemente

!!! **Standardkomponente**  
!!! Markdown Elemente sind spezielle Textformatierungen, die in Markdown verwendet werden können. Diese können auch in anderen Markdown Editoren verwendet werden.

**Fett** `**Fett**`

_Kursiv_ `_Kursiv_`

~~Durchstrichen~~ `~~Durchstrichen~~`

`Inline Code` `` `Inline Code` ``

> Blockquote `> Blockquote`

[Link](https://example.com) `[Link](https://example.com)`

[Link mit Titel](https://example.com "Titel des Links") `[Link mit Titel](https://example.com "Titel des Links")`

---
Horizontale Linie: `---`

## HTML Text Elemente

!!! **Standardkomponente**  
!!! HTML Elemente können in Markdown verwendet werden, um spezielle Textformatierungen hinzuzufügen, die in Markdown nicht unterstützt, jedoch generell auf Websites verwendet werden können.

<!-- TODO: update -->

<abbr>I18N</abbr> `<abbr>`

<cite>Blockquote</cite> `<cite>`

<kbd>Ctrl + S</kbd> `<kbd>`

Text<sup>Superscripted</sup> `<sup>`

Text<sub>Subscripted</sub> `<sub>`

<var>x = y + 2</var> `<var>`

## Medien

!!! **Standardkomponente**  
!!! Medien werden in Markdown ähnlich wie Links eingefügt, jedoch mit einem Ausrufezeichen (`!`) vor dem Link.  
!!! Zu den unterstützten Medien gehören Bilder, Videos und Audiodateien.

!!! Weitere Informationen zu Medien findest du in der [offiziellen Grav Dokumentation](https://learn.getgrav.org/17/content/media)

### Bilder

!!! Syntax: `![Bild](Bildpfad)`

![Bild](grav-logo.png)

```md
![Bild](grav-logo.png)
```

#### Bild mit Link

!!! Ein Bild, welches zusätzlich als Link funktioniert.  
!!! Syntax: `[![Bild](Bildpfad)](Link)`

[![Bild](grav-logo.png)](https://example.com)

```md
[![Bild](grav-logo.png)](https://example.com)
```

#### Bild mit Optionen

!!! Syntax: `![Bild](Bildpfad?Option1&Option2&Option3)`
!!! - `lightbox` - öffnet das Bild in einem Lightbox-Modus
!!! - `resize=200` - ändert die Größe des Bildes auf 200px

![Bild](grav-logo.png?lightbox&resize=200)

```md
![Bild](grav-logo.png?lightbox&resize=200)
```

### Videos

!!! Syntax: `![Video](Videopfad?Optionen)`
!!! - `autoplay[=1|0]` - 1: startet das Video automatisch (Standard: 0)
!!! - `loop[=1|0]` - 1: wiederholt das Video (Standard: 0)
!!! - `controls[=1|0]` - 1: zeigt die Steuerungselemente (Standard: 1)
!!! - `muted[=1|0]` - 1: schaltet den Ton stumm (Standard: 0)

![Beispiel Video](beispiel-video.mp4?autoplay&loop&muted&resize=600)

```md
![Beispiel Video](beispiel-video.mp4?autoplay&loop&muted&resize=600)
```

### Audio

!!! Syntax: `![Audio](Audiopfad?Optionen)`
!!! - `autoplay[=1|0]` - 1: startet das Audio automatisch (Standard: 0)
!!! - `loop[=1|0]` - 1: wiederholt das Audio (Standard: 0)
!!! - `controls[=1|0]` - 1: zeigt die Steuerungselemente (Standard: 1)
!!! - `muted[=1|0]` - 1: schaltet den Ton stumm (Standard: 0)

![Beispiel Audio](beispiel-audio.mp3)

```md
![Beispiel Audio](beispiel-audio.mp3)
```

### YouTube (Variante 1)

!!! **benötigt [YouTube Plugin](https://github.com/getgrav/grav-plugin-youtube)**  
!!! Syntax: `[plugin:youtube](Videopfad)`

[plugin:youtube](https://www.youtube.com/watch?v=K4TOrB7at0Y)

```md
[\plugin:youtube](https://www.youtube.com/watch?v=K4TOrB7at0Y)
```

### YouTube (Variante 2)

!!! **benötigt [YouTube Plugin](https://github.com/getgrav/grav-plugin-youtube)**  
!!! Syntax: `[\youtube OPTIONEN] https://www.youtube.com/watch?v=VIDEOPFAD [/youtube]`
!!! - `autoplay[=1|0]` - 1: startet das Video automatisch (Standard: 0)
!!! - `controls[=1|0]` - 1: zeigt die Steuerungselemente (Standard: 1)
!!! - `loop[=1|0]` - 1: wiederholt das Video (Standard: 0)

[youtube autoplay=1 controls=0 loop=1]
https://www.youtube.com/watch?v=K4TOrB7at0Y
[/youtube]

```md
[raw]
[youtube autoplay=1 controls=0 loop=1]
https://www.youtube.com/watch?v=K4TOrB7at0Y
[/youtube]
[/raw]
```

### PDF

<!-- TODO: add example and link to tutorial for more options -->

_siehe [Tutorial > Plugins > Shortcode Media](https://tutorials.crabston.ch/grav/plugins/shortcode-media#pdf?utm_source=usehadron.dev&utm_medium=hadron-docs)_

### Dokumente

<!-- TODO: add example and link to tutorial for more options -->

_siehe [Tutorial > Plugins > Shortcode Media](https://tutorials.crabston.ch/grav/plugins/shortcode-media#docviewwer?utm_source=usehadron.dev&utm_medium=hadron-docs)_

## Code

!!! **Standardkomponente**  
!!! Codeblöcke können in Markdown eingefügt werden, um Code oder Skripte anzuzeigen. Diese können zudem mit Syntax-Highlighting versehen werden, indem man die Sprache des Codes angibt.

```js
// Code
const foo = 'bar';
function bar() {
    return foo;
}
console.log(bar());
```

```md
\```js
// Code
const foo = 'bar';
function bar() {
    return foo;
}
console.log(bar());
\```
```

## Blockquote

!!! **Standardkomponente**  
!!! Blockquotes sind Elemente, die in Markdown verwendet werden können, um Texte hervorzuheben. Sie können auch mit anderen Elementen kombiniert werden.

> The advance of technology is based on making it fit in so that you don't really even notice it,
> so it's part of everyday life.
>
> <cite>- Bill Gates</cite>

```md
> The advance of technology is based on making it fit in so that you don't really even notice it,
> so it's part of everyday life.
>
> <cite>- Bill Gates</cite>
```

## Listen

!!! **Standardkomponente**  
!!! Mit Listen können Elemente in einer geordneten oder ungeordneten Reihenfolge angezeigt werden. Zudem können Listen verschachtelt werden.

### ungeordnete Listen

- List Item 1
- List Item 2
  - List Item 2.1
  - List Item 2.2
      - List Item 2.2.1
- List Item 3

```md
- List Item 1
- List Item 2
  - List Item 2.1
  - List Item 2.2
    - List Item 2.2.1
- List Item 3
```

### geordnete Listen

1. List Item 1
2. List Item 2
   1. List Item 2.1
   2. List Item 2.2
      1. List Item 2.2.1
3. List Item 3

```md
1. List Item 1
2. List Item 2
   1. List Item 2.1
   2. List Item 2.2
      1. List Item 2.2.1
3. List Item 3
```

## Tabellen

!!! **Standardkomponente**  
!!! Tabellen können in Markdown erstellt werden, um Daten in einer tabellarischen Form anzuzeigen.  
!!! Dazu gibt es zu beachten, dass in der zweiten Zeile die Ausrichtung der Spalten definiert wird:
!!! - `:---`: linksbündig
!!! - `:---:`: zentriert
!!! - `---:`: rechtsbündig
!!!
!!! Eine weitere Funktion von Tabellen ist, dass sie auch richtig angezeigt werden, wenn die Formatierung mit den Leerzeichen nicht korrekt ist.

| Name                     |           Genre           |   Veröffentlichung |
|:-------------------------|:-------------------------:|-------------------:|
| The Shawshank Redemption |       Crime, Drama        |   14. Oktober 1994 |
| The Godfather            |       Crime, Drama        |      24. März 1972 |
| Schindler's List         | Biography, Drama, History |    4. Februar 1994 |
| No Genre                 |                           |        7. Mai 1990 |
| Se7en                    |   Crime, Drama, Mystery   | 22. September 1995 |

```md
| Name                     |           Genre           |   Veröffentlichung |
|:-------------------------|:-------------------------:|-------------------:|
| The Shawshank Redemption |       Crime, Drama        |   14. Oktober 1994 |
| The Godfather            |       Crime, Drama        |      24. März 1972 |
| Schindler's List         | Biography, Drama, History |    4. Februar 1994 |
| No Genre                 |                           |        7. Mai 1990 |
| Se7en                    |   Crime, Drama, Mystery   | 22. September 1995 |
```

### mobilfreundliche Tabellen

!!! **benötigt [Hadron Theme](https://github.com/Crabston/grav-theme-hadron)**  
!!! Mit einer manuellen Funktion des Hadron Themes werden Tabellen auch auf mobilen Geräten gut dargestellt (hauptsächlich bei breiten Tabellen nötig). Die Tabelle wird dann wie folgt dargestellt:  
!!! ![Darstellung Tabelle auf Mobilgeräten](responsive-tabelle.webp?lightbox)


```md
[raw]
[div class="table-responsive"]

| Name                     |           Genre           |   Veröffentlichung |
|:-------------------------|:-------------------------:|-------------------:|
| The Shawshank Redemption |       Crime, Drama        |   14. Oktober 1994 |
| The Godfather            |       Crime, Drama        |      24. März 1972 |
| Schindler's List         | Biography, Drama, History |    4. Februar 1994 |
| No Genre                 |                           |        7. Mai 1990 |
| Se7en                    |   Crime, Drama, Mystery   | 22. September 1995 |
[/div]
[/raw]
```

## Shortcode Elemente

!!! **benötigt [Shortcode Core Plugin](https://github.com/getgrav/grav-plugin-shortcode-core)**  
!!! Shortcodes sind spezielle Tags, die in Markdown verwendet werden können, um spezielle Funktionen oder Komponenten hinzuzufügen. Diese werden in eckigen Klammern `[]` geschrieben und benötigen das Shortcode Plugin.

Dies ist ein beispielhafter Text [mark]mit diesem **hervorgehobenen** Teil und _Markdown_ Syntax[/mark] und der Rest ist normal.

Dies ist ein [u]unterstrichener Text[/u].

```md
[raw]
Dies ist ein beispielhafter Text [mark]mit diesem **hervorgehobenen** Teil und _Markdown_ Syntax[/mark] und der Rest ist normal.

Dies ist ein [u]unterstrichener Text[/u].
[/raw]
```

## Ausrichtung

!!! **benötigt [Shortcode Core Plugin](https://github.com/getgrav/grav-plugin-shortcode-core)**  
!!! Mit der Ausrichtung können Texte links, zentriert oder rechts ausgerichtet werden.

[left]
Dieser Text ist links ausgerichtet.
[/left]

[center]
Dieser Text ist zentriert.
[/center]

[right]
Dieser Text ist rechts ausgerichtet.
[/right]

```md
[raw]
[left]
Dieser Text ist links ausgerichtet.
[/left]

[center]
Dieser Text ist zentriert.
[/center]

[right]
Dieser Text ist rechts ausgerichtet.
[/right]
[/raw]
```

## Kolonnen

!!! **benötigt [Shortcode Core Plugin](https://github.com/getgrav/grav-plugin-shortcode-core)**  
!!! Kolonnen dienen dazu, Texte in mehrere Spalten aufzuteilen.

!!! [Dokumentation: Shortcode Core Plugin](https://github.com/getgrav/grav-plugin-shortcode-core#columns)

[columns count=2]
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat.

Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[/columns]

```md
[raw]
[columns count=2]
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat.

Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[/columns]
[/raw]
```

## Details

!!! **benötigt [Shortcode Core Plugin](https://github.com/getgrav/grav-plugin-shortcode-core)**  
!!! Details sind eine gute Möglichkeit, Inhalte zu verbergen, die nicht wichtig für den Hauptfluss des Dokuments sind. Diese können durch Klicken auf die Schaltfläche angezeigt werden.

!!! [Dokumentation: Shortcode Core Plugin](https://github.com/getgrav/grav-plugin-shortcode-core#detailssummary)

[details="Klicken Sie hier, um weitere Informationen anzuzeigen"]
Hier ist zusätzliche Informationen, die Sie durch Klicken auf die Schaltfläche aufdecken können.
[/details]

```md
[raw]
[details="Klicken Sie hier, um weitere Informationen anzuzeigen"]
Hier ist zusätzliche Informationen, die Sie durch Klicken auf die Schaltfläche aufdecken können.
[/details]
[/raw]
```

## Anmerkungen

!!! **benötigt [Markdown Notices Plugin](https://github.com/getgrav/grav-plugin-markdown-notices)**  
!!! Anmerkungen können verwendet werden, um wichtige Informationen hervorzuheben.

! Warnung

!! Fehler

!!! Info

!!!! Erfolg

```md
! Warnung

!! Fehler

!!! Info

!!!! Erfolg
```

## Akkordeon

!!! **benötigt [Shortcode UI Plugin](https://github.com/getgrav/grav-plugin-shortcode-ui)**  
!!! Akkordeons können verwendet werden, um Inhalte in Abschnitte zu unterteilen, die bei Bedarf geöffnet oder geschlossen werden können.

!!! [Dokumentation: Shortcode UI Plugin](https://github.com/getgrav/grav-plugin-shortcode-ui#accordion)

[ui-accordion independent=false open=1]
[ui-accordion-item title="Sektion 1"]
Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.
[/ui-accordion-item]
[ui-accordion-item title="Sektion 2"]
Short loin swine shankle flank picanha andouille burgdoggen landjaeger hamburger drumstick. Beef ham tail, tri-tip flank ham hock meatball picanha corned beef t-bone shank turkey ball tip shoulder. Flank corned beef chicken, meatloaf venison ball tip ham hock tail salami jowl short ribs pork belly drumstick. Meatball chicken hamburger beef filet mignon doner pork picanha pork chop fatback rump ham tri-tip ball tip landjaeger. Sausage leberkas shoulder tongue short loin shankle. Prosciutto tri-tip frankfurter shoulder drumstick capicola. Pork loin shank strip steak pork belly tongue cow.
[/ui-accordion-item]
[ui-accordion-item title="Sektion 3"]
Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.
[/ui-accordion-item]
[/ui-accordion]

```md
[raw]
[ui-accordion independent=false open=1]
[ui-accordion-item title="Sektion 1"]
Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.
[/ui-accordion-item]
[ui-accordion-item title="Sektion 2"]
Short loin swine shankle flank picanha andouille burgdoggen landjaeger hamburger drumstick. Beef ham tail, tri-tip flank ham hock meatball picanha corned beef t-bone shank turkey ball tip shoulder. Flank corned beef chicken, meatloaf venison ball tip ham hock tail salami jowl short ribs pork belly drumstick. Meatball chicken hamburger beef filet mignon doner pork picanha pork chop fatback rump ham tri-tip ball tip landjaeger. Sausage leberkas shoulder tongue short loin shankle. Prosciutto tri-tip frankfurter shoulder drumstick capicola. Pork loin shank strip steak pork belly tongue cow.
[/ui-accordion-item]
[ui-accordion-item title="Sektion 3"]
Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.
[/ui-accordion-item]
[/ui-accordion]
[/raw]
```

## Tabs

!!! **benötigt [Shortcode UI Plugin](https://github.com/getgrav/grav-plugin-shortcode-ui)**  
!!! Tabs können verwendet werden, um Inhalte in verschiedenen Reitern anzuzeigen.

!!! [Dokumentation: Shortcode UI Plugin](https://github.com/getgrav/grav-plugin-shortcode-ui#tabs)

[ui-tabs position=top-left active=0 theme=lite]
[ui-tab title="Erster Tab"]
In tempor sed sapien eu porttitor. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. Quisque et enim vitae orci [placerat tincidunt](#) id ac eros. Fusce et gravida libero.

Phasellus cursus odio ex, in **mattis lorem tincidunt** vel. Donec nibh odio, dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor.
[/ui-tab]
[ui-tab title="Zweiter Tab"]
In tempor sed sapien **eu porttitor**. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. [Quisque et enim](#) vitae orci placerat tincidunt id ac eros. Fusce et gravida libero.

Phasellus cursus odio ex, in mattis lorem tincidunt vel. [Donec nibh odio](#), dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor.
[/ui-tab]
[/ui-tabs]

```md
[raw]
[ui-tabs position=top-left active=0 theme=lite]
[ui-tab title="Erster Tab"]
In tempor sed sapien eu porttitor. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. Quisque et enim vitae orci [placerat tincidunt](#) id ac eros. Fusce et gravida libero.

Phasellus cursus odio ex, in **mattis lorem tincidunt** vel. Donec nibh odio, dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor.
[/ui-tab]
[ui-tab title="Zweiter Tab"]
In tempor sed sapien **eu porttitor**. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. [Quisque et enim](#) vitae orci placerat tincidunt id ac eros. Fusce et gravida libero.

Phasellus cursus odio ex, in mattis lorem tincidunt vel. [Donec nibh odio](#), dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor.
[/ui-tab]
[/ui-tabs]
[/raw]
```

## Galerie

!!! **benötigt [Shortcode Gallery Plugin](https://github.com/sal0max/grav-plugin-shortcode-gallery-plusplus)**  
!!! Galerien können verwendet werden, um mehrere Bilder in einer Galerie anzuzeigen.  
!!! Optionen:
!!! - `lastRow=justify` - Letzte Reihe ausrichten
!!! - `captions=false` - Bildunterschriften ausblenden

!!! [Dokumentation: Shortcode Gallery++ Plugin](https://github.com/sal0max/grav-plugin-shortcode-gallery-plusplus#gallery-settings)

[gallery lastRow=justify]
![unsplash/jeremy-bishop](images/jeremy-bishop-EwKXn5CapA4-unsplash.webp)
![unsplash/piotr-chrobot](images/piotr-chrobot-6oUsyeYXgTg-unsplash.webp)
![unsplash/ben-o-bro](images/ben-o-bro-wpU4veNGnHg-unsplash.webp)
![unsplash/aaron-burden](images/aaron-burden-dXYE1d08BiY-unsplash.webp)
![unsplash/qingbao-meng](images/qingbao-meng-01_igFr7hd4-unsplash.webp)
![unsplash/blake-verdoorn](images/blake-verdoorn-cssvEZacHvQ-unsplash.webp)
![unsplash/robert-lukeman](images/robert-lukeman-_RBcxo9AU-U-unsplash.webp)
![unsplash/max-bender](images/max-bender-VmX3vmBecFE-unsplash.webp)
![unsplash/pedro-lastra](images/pedro-lastra-Nyvq2juw4_o-unsplash.webp)
![unsplash/abhi-verma](images/abhi-verma-WH3gEB21roA-unsplash.webp)
[/gallery]

```md
[raw]
[gallery lastRow=justify]
![unsplash/jeremy-bishop](images/jeremy-bishop-EwKXn5CapA4-unsplash.webp)
![unsplash/piotr-chrobot](images/piotr-chrobot-6oUsyeYXgTg-unsplash.webp)
![unsplash/ben-o-bro](images/ben-o-bro-wpU4veNGnHg-unsplash.webp)
![unsplash/aaron-burden](images/aaron-burden-dXYE1d08BiY-unsplash.webp)
![unsplash/qingbao-meng](images/qingbao-meng-01_igFr7hd4-unsplash.webp)
![unsplash/blake-verdoorn](images/blake-verdoorn-cssvEZacHvQ-unsplash.webp)
![unsplash/robert-lukeman](images/robert-lukeman-_RBcxo9AU-U-unsplash.webp)
![unsplash/max-bender](images/max-bender-VmX3vmBecFE-unsplash.webp)
![unsplash/pedro-lastra](images/pedro-lastra-Nyvq2juw4_o-unsplash.webp)
![unsplash/abhi-verma](images/abhi-verma-WH3gEB21roA-unsplash.webp)
[/gallery]
[/raw]
```

## Owl Carousel

!!! **benötigt [Shortcode Owl Carousel Plugin](https://github.com/getgrav/grav-plugin-shortcode-owl-carousel)**  
!!! Owl Carousel ist ein Plugin, das verwendet wird, um Bilder in einem Karussell anzuzeigen.  
!!! Optionen:
!!! - `items=1` - Anzahl der Elemente die angezeigt werden
!!! - `margin=10` - Abstand zwischen den Elementen
!!! - `loop=true` - Endlosschleife
!!! - `nav=true` - Navigation anzeigen
!!! - `stagePadding=200` - Abstand zum Rand

!!! [Dokumentation: Shortcode Owl Carousel Plugin](https://github.com/getgrav/grav-plugin-shortcode-owl-carousel)

[owl-carousel items=1 margin=10 loop=true nav=true stagePadding=200]
![unsplash/aaron-burden](images/aaron-burden-dXYE1d08BiY-unsplash.webp)
![unsplash/abhi-verma](images/abhi-verma-WH3gEB21roA-unsplash.webp)
![unsplash/ben-o-bro](images/ben-o-bro-wpU4veNGnHg-unsplash.webp)
![unsplash/pedro-lastra](images/pedro-lastra-Nyvq2juw4_o-unsplash.webp)
![unsplash/piotr-chrobot](images/piotr-chrobot-6oUsyeYXgTg-unsplash.webp)
![unsplash/qingbao-meng](images/qingbao-meng-01_igFr7hd4-unsplash.webp)
![unsplash/robert-lukeman](images/robert-lukeman-_RBcxo9AU-U-unsplash.webp)
[/owl-carousel]

```md
[raw]
[owl-carousel items=1 margin=10 loop=true nav=true stagePadding=200]
![unsplash/aaron-burden](images/aaron-burden-dXYE1d08BiY-unsplash.webp)
![unsplash/abhi-verma](images/abhi-verma-WH3gEB21roA-unsplash.webp)
![unsplash/ben-o-bro](images/ben-o-bro-wpU4veNGnHg-unsplash.webp)
![unsplash/pedro-lastra](images/pedro-lastra-Nyvq2juw4_o-unsplash.webp)
![unsplash/piotr-chrobot](images/piotr-chrobot-6oUsyeYXgTg-unsplash.webp)
![unsplash/qingbao-meng](images/qingbao-meng-01_igFr7hd4-unsplash.webp)
![unsplash/robert-lukeman](images/robert-lukeman-_RBcxo9AU-U-unsplash.webp)
[/owl-carousel]
[/raw]
```
[/div]

[div class="column col-3 col-md-12"]
[div style="position: sticky; top: 4rem;"][TOC][/div]
[/div]

[/div]
