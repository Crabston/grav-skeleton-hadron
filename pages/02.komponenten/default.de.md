---
title: Komponenten
slug: komponenten
sitemap:
  changefreq: monthly
  priority: 0.8
date: 03-05-2024
---

# Komponenten

!!! Hier findest du eine Übersicht über alle verfügbaren Komponenten, die du in deine Seite einfügen kannst.

===

## Überschriften

> Überschriften dienen dazu, den Text zu strukturieren und zu gliedern.

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

> Paragraphen sind Abschnitte von Text, die durch eine Leerzeile getrennt sind.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus.
Etiam euismod ornare consequat.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.

```md
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus.
Etiam euismod ornare consequat.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.
```

## Kommentar

> Kommentare können im Markdown eingefügt werden, um Text zu verstecken, der nicht auf der Seite angezeigt werden soll, jedoch für andere Autoren sichtbar sein soll.

<!--
Dieser Kommentar wird auf der Seite nicht angezeigt.
-->

```md
<!--
Dieser Kommentar wird auf der Seite nicht angezeigt.
-->
```


## Ausrichtung

> Mit der Ausrichtung können Texte links, zentriert oder rechts ausgerichtet werden.

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

## Markdown Elemente

> Markdown Elemente sind spezielle Textformatierungen, die in Markdown verwendet werden können. Diese können auch in anderen Markdown Editoren verwendet werden.

**Fett** `**Fett**`

_Kursiv_ `_Kursiv_`

~~Durchstrichen~~ `~~Durchstrichen~~`

`Inline Code` `` `Inline Code` ``

> Blockquote `> Blockquote`

[Link](https://grav.demo.crabston.dev) `[Link](https://grav.demo.crabston.dev)`

[Link mit Titel](https://grav.demo.crabston.dev "Titel des Links") `[Link mit Titel](https://grav.demo.crabston.dev "Titel des Links")`

---
Horizontale Linie: `---`

## Shortcode Elemente

> Shortcodes sind spezielle Tags, die in Markdown verwendet werden können, um spezielle Funktionen oder Komponenten hinzuzufügen. Diese werden in eckigen Klammern `[]` geschrieben und benötigen das Shortcode Plugin.

Dies ist ein beispielhafter Text [mark]mit diesem **hervorgehobenen** Teil und _Markdown_ Syntax[/mark] und der Rest ist normal.

Dies ist ein [u]unterstrichener Text[/u].

```md
[raw]
Dies ist ein beispielhafter Text [mark]mit diesem **hervorgehobenen** Teil und _Markdown_ Syntax[/mark] und der Rest ist normal.

Dies ist ein [u]unterstrichener Text[/u].
[/raw]
```

## HTML Text Elemente

> HTML Elemente können in Markdown verwendet werden, um spezielle Textformatierungen hinzuzufügen, die in Markdown nicht unterstützt werden.

<abbr>I18N</abbr> `<abbr>`

<cite>Blockquote</cite> `<cite>`

<kbd>Ctrl + S</kbd> `<kbd>`

Text<sup>Superscripted</sup> `<sup>`

Text<sub>Subscripted</sub> `<sub>`

<var>x = y + 2</var> `<var>`

## Medien

> Medien werden in Markdown ähnlich wie Links eingefügt, jedoch mit einem Ausrufezeichen `!` vor dem Link.  
> Zu den unterstützten Medien gehören Bilder, Videos und Audiodateien.

!!! Weitere Informationen findest du in der [offiziellen Grav Dokumentation](https://learn.getgrav.org/17/content/media)

### normales Bild

> Syntax: `![Bild](Bildpfad)`

![Bild](grav-logo.png)

```md
![Bild](grav-logo.png)
```

### Bild mit Link

> Ein Bild, welches zusätzlich als Link funktioniert.  
> Syntax: `[![Bild](Bildpfad)](Link)`

[![Bild](grav-logo.png)](https://grav.demo.crabston.dev)

```md
[![Bild](grav-logo.png)](https://grav.demo.crabston.dev)
```

### Bild mit Optionen

> Syntax: `![Bild](Bildpfad?Option1&Option2&Option3)`
> - `lightbox` - öffnet das Bild in einem Lightbox-Modus
> - `resize=200` - ändert die Größe des Bildes auf 200px

![Bild](grav-logo.png?lightbox&resize=200)

```md
![Bild](grav-logo.png?lightbox&resize=200)
```

## Code

> Codeblöcke können in Markdown eingefügt werden, um Code oder Skripte anzuzeigen. Diese können zudem mit Syntax-Highlighting versehen werden, indem man die Sprache des Codes angibt.

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

> Blockquotes sind Elemente, die in Markdown verwendet werden können, um Texte hervorzuheben. Sie können auch mit anderen Markdown Elementen kombiniert werden.

<br>

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

> Mit Listen können Elemente in einer geordneten oder ungeordneten Reihenfolge angezeigt werden. Zudem können Listen verschachtelt werden.

### ungeordnete Listen

- List Item 1
- List Item 2
  - List Item 2.1
  - List Item 2.2
  - List Item 2.3
- List Item 3

```md
- List Item 1
- List Item 2
    - List Item 2.1
    - List Item 2.2
    - List Item 2.3
- List Item 3
```

### geordnete Listen

1. List Item 1
2. List Item 2
    1. List Item 2.1
    2. List Item 2.2
    3. List Item 2.3
3. List Item 3

```md
1. List Item 1
2. List Item 2
    1. List Item 2.1
    2. List Item 2.2
    3. List Item 2.3
3. List Item 3
```

## Tabellen

> Tabellen können in Markdown erstellt werden, um Daten in einer tabellarischen Form anzuzeigen.  
> Dazu gibt es zu beachten, dass in der zweitetn Zeile die Ausrichtung der Spalten definiert wird:
> - `:---`: linksbündig
> - `:---:`: zentriert
> - `---:`: rechtsbündig
>
> Ein Vorteil von Tabellen ist, dass sie auch richtig angezeigt werden, wenn die Formatierung mit den Leerzeichen nicht korrekt ist.

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

> Um eine Tabelle auch auf mobilen Geräten gut darzustellen (gerade bei breiten Tabellen) können folgende Zeilen um die Tabelle hinzugefügt werden:

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

> Die Tabelle wird dann wie folgt dargestellt:  
> ![Darstellung Tabelle auf Mobilgeräten](responsive-tabelle.webp?lightbox)

## Anmerkungen

> Anmerkungen können verwendet werden, um wichtige Informationen hervorzuheben.

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

## Kolonnen

> Kolonnen dienen dazu, Texte in mehrere Spalten aufzuteilen.

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

> Details sind eine gute Möglichkeit, Inhalte zu verbergen, die nicht wichtig für den Hauptfluss des Dokuments sind. Diese können durch Klicken auf die Schaltfläche angezeigt werden.

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

## Akkordeon

> Akkordeons können verwendet werden, um Inhalte in Abschnitte zu unterteilen, die bei Bedarf geöffnet oder geschlossen werden können.

!!! [Dokumentation: Shortcode UI Plugin](https://github.com/getgrav/grav-plugin-shortcode-ui#accordion)

[ui-accordion independent=false open=1]
[ui-accordion-item title="Section 1"]
Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.
[/ui-accordion-item]
[ui-accordion-item title="Section 2"]
Short loin swine shankle flank picanha andouille burgdoggen landjaeger hamburger drumstick. Beef ham tail, tri-tip flank ham hock meatball picanha corned beef t-bone shank turkey ball tip shoulder. Flank corned beef chicken, meatloaf venison ball tip ham hock tail salami jowl short ribs pork belly drumstick. Meatball chicken hamburger beef filet mignon doner pork picanha pork chop fatback rump ham tri-tip ball tip landjaeger. Sausage leberkas shoulder tongue short loin shankle. Prosciutto tri-tip frankfurter shoulder drumstick capicola. Pork loin shank strip steak pork belly tongue cow.
[/ui-accordion-item]
[ui-accordion-item title="Section 3"]
Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.
[/ui-accordion-item]
[/ui-accordion]

```md
[raw]
[ui-accordion independent=false open=1]
[ui-accordion-item title="Section 1"]
Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.
[/ui-accordion-item]
[ui-accordion-item title="Section 2"]
Short loin swine shankle flank picanha andouille burgdoggen landjaeger hamburger drumstick. Beef ham tail, tri-tip flank ham hock meatball picanha corned beef t-bone shank turkey ball tip shoulder. Flank corned beef chicken, meatloaf venison ball tip ham hock tail salami jowl short ribs pork belly drumstick. Meatball chicken hamburger beef filet mignon doner pork picanha pork chop fatback rump ham tri-tip ball tip landjaeger. Sausage leberkas shoulder tongue short loin shankle. Prosciutto tri-tip frankfurter shoulder drumstick capicola. Pork loin shank strip steak pork belly tongue cow.
[/ui-accordion-item]
[ui-accordion-item title="Section 3"]
Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.
[/ui-accordion-item]
[/ui-accordion]
[/raw]
```
