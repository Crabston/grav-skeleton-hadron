---
# TODO: check if there are missing components
title: Components
slug: components
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

# Components
On this page are all standard components of Hadron listed that can be used. These components can usually be used most of the time independently of the page type.

This page contains descriptions, syntax, and examples for the components to facilitate their use. Some components require additional plugins, which are already included in the Hadron Skeleton.

===

## Comment

!!! **Default Component**  
!!! Comments can be inserted in Markdown to hide text that should not be displayed on the page, but is visible to other authors.
!!! The comment is still visible in the page source, so it should not be used for confidential information.

<!--
This comment will not be displayed on the page, but is visible in the source code.
-->

```md
<!--
This comment will not be displayed on the page, but is visible in the source code.
-->
```

## Headings

!!! **Default Component**  
!!! Headings are used to structure and organize the text. Headings can have levels from H1 to H6, with H1 being the highest level and H6 the lowest.

# H1 Heading

## H2 Heading

### H3 Heading

#### H4 Heading

##### H5 Heading

###### H6 Heading

```md
# H1 Heading

## H2 Heading

### H3 Heading

#### H4 Heading

##### H5 Heading

###### H6 Heading
```

## Paragraphs

!!! **Default Component**  
!!! Paragraphs are sections of text that are separated by a blank line. Line breaks within a paragraph are ignored unless they are marked with two spaces at the end of the line.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus.  
Etiam euismod ornare consequat.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.

```md
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus.  
Etiam euismod ornare consequat.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.
```

## Markdown elements

!!! **Default Component**  
!!! Markdown elements are special text formats that can be used in Markdown. These can also be used in other Markdown editors.

**Bold** `**Bold**`

_Italic_ `_Italic_`

~~Strikethrough~~ `~~Strikethrough~~`

`Inline Code` `` `Inline Code` ``

> Blockquote `> Blockquote`

[Link](https://example.com) `[Link](https://example.com)`

[Link with Title](https://example.com "Title of the Links") `[Link with Title](https://example.com "Title of the Links")`

---
Horizontal Line: `---`

## HTML text elements

!!! **Default Component**  
!!! HTML elements can be used in Markdown to add special text formatting that is not supported in Markdown, but is generally used on websites.

<!-- TODO: update -->

<abbr>I18N</abbr> `<abbr>`

<cite>Blockquote</cite> `<cite>`

<kbd>Ctrl + S</kbd> `<kbd>`

Text<sup>Superscripted</sup> `<sup>`

Text<sub>Subscripted</sub> `<sub>`

<var>x = y + 2</var> `<var>`

## Media

!!! **Default Component**  
!!! Media is inserted in Markdown similar to links, but with an exclamation mark (`!`) before the link.
!!! Supported media include images, videos, and audio files.

!!! More information about media can be found in the [official Grav documentation](https://learn.getgrav.org/17/content/media)

### Images

!!! Syntax: `![Image description](Image-path)`

![Grav logo](grav-logo.png)

```md
![Grav logo](grav-logo.png)
```

#### Image with Link

!!! An image that also works as a link.  
!!! Syntax: `[![Image description](Image-path)](Link)`

[![Grav logo](grav-logo.png)](https://example.com)

```md
[![Grav logo](grav-logo.png)](https://example.com)
```

#### Image with Options

!!! Syntax: `![Image description](Image-path?Option1&Option2&Option3)`  
!!! **Options:**
!!! - `lightbox` - opens the image in a lightbox when clicked
!!! - `resize=200` - resizes the image to a width of 200 pixels

![Grav logo](grav-logo.png?lightbox&resize=200)

```md
![Grav logo](grav-logo.png?lightbox&resize=200)
```

### Videos

!!! Syntax: `![Video description](Video-path?Options)`
!!! - `autoplay[=1|0]` - 1: starts the video automatically (default: 0)
!!! - `loop[=1|0]` - 1: repeats the video (default: 0)
!!! - `controls[=1|0]` - 1: shows the controls (default: 1)
!!! - `muted[=1|0]` - 1: mutes the video (default: 0)

![Example Video](beispiel-video.mp4?autoplay&loop&muted&resize=600)

```md
![Example Video](beispiel-video.mp4?autoplay&loop&muted&resize=600)
```

### Audio

!!! Syntax: `![Audio description](Audio-path?Options)`
!!! - `autoplay[=1|0]` - 1: starts the audio automatically (default: 0)
!!! - `loop[=1|0]` - 1: repeats the audio (default: 0)
!!! - `controls[=1|0]` - 1: shows the controls (default: 1)
!!! - `muted[=1|0]` - 1: mutes the audio (default: 0)

![Example Audio](beispiel-audio.mp3)

```md
![Example Audio](beispiel-audio.mp3)
```

### YouTube (Variant 1)

!!! **depends on [YouTube Plugin](https://github.com/getgrav/grav-plugin-youtube)**  
!!! Syntax: `[plugin:youtube](Video-path)`

[plugin:youtube](https://www.youtube.com/watch?v=K4TOrB7at0Y)

```md
[\plugin:youtube](https://www.youtube.com/watch?v=K4TOrB7at0Y)
```

### YouTube (Variant 2)

!!! **depends on [YouTube Plugin](https://github.com/getgrav/grav-plugin-youtube)**  
!!! Syntax: `[\youtube OPTIONS] https://www.youtube.com/watch?v=VIDEO-PATH [/youtube]`
!!! - `autoplay[=1|0]` - 1: starts the video automatically (default: 0)
!!! - `controls[=1|0]` - 1: shows the controls (default: 1)
!!! - `loop[=1|0]` - 1: repeats the video (default: 0)

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

_see [Crabston Tutorials > Plugins > Shortcode Media](https://tutorials.crabston.ch/grav/plugins/shortcode-media#pdf?utm_source=usehadron.dev&utm_medium=hadron-docs)_

### Dokumente

<!-- TODO: add example and link to tutorial for more options -->

_see [Crabston Tutorials > Plugins > Shortcode Media](https://tutorials.crabston.ch/grav/plugins/shortcode-media#docviewwer?utm_source=usehadron.dev&utm_medium=hadron-docs)_

## Code

!!! **Default Component**  
!!! Code blocks can be inserted in Markdown to display code or scripts. These can also be highlighted with syntax highlighting by specifying the language of the code.

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

!!! **Default Component**  
!!! Blockquotes are elements that can be used in Markdown to highlight text. They can also be combined with other elements.

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

## Lists

!!! **Default Component**  
!!! Lists can be used in Markdown to display items in an ordered or unordered manner. Lists can also be nested.

### unordered lists

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

### ordered lists

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

## Tables

!!! **Default Component**  
!!!Tables can be created in Markdown to display data in a tabular format.
!!! To do this, it should be noted that the alignment of the columns is defined in the second row:
!!! - `:---`: left-aligned
!!! - `:---:`: centered
!!! - `---:`: right-aligned
!!! 
!!! Another feature of tables is that they are displayed correctly even if the formatting with spaces is not correct.

| Name                     |           Genre           |          Published |
|:-------------------------|:-------------------------:|-------------------:|
| The Shawshank Redemption |       Crime, Drama        |   14. Oktober 1994 |
| The Godfather            |       Crime, Drama        |      24. März 1972 |
| Schindler's List         | Biography, Drama, History |    4. Februar 1994 |
| No Genre                 |                           |        7. Mai 1990 |
| Se7en                    |   Crime, Drama, Mystery   | 22. September 1995 |

```md
| Name                     |           Genre           |          Published |
|:-------------------------|:-------------------------:|-------------------:|
| The Shawshank Redemption |       Crime, Drama        |   14. Oktober 1994 |
| The Godfather            |       Crime, Drama        |      24. März 1972 |
| Schindler's List         | Biography, Drama, History |    4. Februar 1994 |
| No Genre                 |                           |        7. Mai 1990 |
| Se7en                    |   Crime, Drama, Mystery   | 22. September 1995 |
```

### mobile-friendly tables


!!! **depends on [Hadron Theme](https://github.com/Crabston/grav-theme-hadron)**  
!!! With a special feature of the Hadron theme, tables are also displayed well on mobile devices (mainly necessary for wide tables). The table is then displayed as follows:
!!! ![Display table on mobile devices](responsive-tabelle.webp?lightbox)

```md
[raw]
[div class="table-responsive"]

| Name                     |           Genre           |          Published |
|:-------------------------|:-------------------------:|-------------------:|
| The Shawshank Redemption |       Crime, Drama        |   14. Oktober 1994 |
| The Godfather            |       Crime, Drama        |      24. März 1972 |
| Schindler's List         | Biography, Drama, History |    4. Februar 1994 |
| No Genre                 |                           |        7. Mai 1990 |
| Se7en                    |   Crime, Drama, Mystery   | 22. September 1995 |
[/div]
[/raw]
```

## Shortcode elements

!!! **depends on [Shortcode Core Plugin](https://github.com/getgrav/grav-plugin-shortcode-core)**  
!!! Shortcodes are special tags that can be used in Markdown to add special functions or components. These are written in square brackets `[]` and require the Shortcode Plugin.

This is a sample text [mark]with this **highlighted** part and _Markdown_ syntax[/mark] and the rest is normal.

This is an [u]underlined text[/u].

```md
[raw]
This is a sample text [mark]with this **highlighted** part and _Markdown_ syntax[/mark] and the rest is normal.

This is an [u]underlined text[/u].
[/raw]
```

## Alignment

!!! **depends on [Shortcode Core Plugin](https://github.com/getgrav/grav-plugin-shortcode-core)**  
!!! With alignment, texts can be aligned to the left, centered, or right.

[left]
This text is left aligned.
[/left]

[center]
This text is centered.
[/center]

[right]
This text is right aligned.
[/right]

```md
[raw]
[left]
This text is left aligned.
[/left]

[center]
This text is centered.
[/center]

[right]
This text is right aligned.
[/right]
[/raw]
```

## Columns

!!! **depends on [Shortcode Core Plugin](https://github.com/getgrav/grav-plugin-shortcode-core)**  
!!! Columns are used to split text into multiple columns.

!!! [Docs: Shortcode Core Plugin](https://github.com/getgrav/grav-plugin-shortcode-core#columns)

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

!!! **depends on [Shortcode Core Plugin](https://github.com/getgrav/grav-plugin-shortcode-core)**  
!!! Details are a good way to hide content that is not important for the main flow of the document. These can be displayed by clicking on the button.

!!! [Docs: Shortcode Core Plugin](https://github.com/getgrav/grav-plugin-shortcode-core#detailssummary)

[details="Click here to show more information"]
Here are additional details that can be revealed by clicking the button.
[/details]

```md
[raw]
[details="Click here to show more information"]
Here are additional details that can be revealed by clicking the button.
[/details]
[/raw]
```

## Notices

!!! **depends on [Markdown Notices Plugin](https://github.com/getgrav/grav-plugin-markdown-notices)**  
!!! Notices can be used to highlight important information.

! Warning

!! Error

!!! Info

!!!! Success

```md
! Warning

!! Error

!!! Info

!!!! Success
```

## Accordion

!!! **depends on [Shortcode UI Plugin](https://github.com/getgrav/grav-plugin-shortcode-ui)**  
!!! Accordions are used to divide content into sections that can be opened or closed as needed.

!!! [Docs: Shortcode UI Plugin](https://github.com/getgrav/grav-plugin-shortcode-ui#accordion)

[ui-accordion independent=false open=1]
[ui-accordion-item title="Sections 1"]
Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.
[/ui-accordion-item]
[ui-accordion-item title="Sections 2"]
Short loin swine shankle flank picanha andouille burgdoggen landjaeger hamburger drumstick. Beef ham tail, tri-tip flank ham hock meatball picanha corned beef t-bone shank turkey ball tip shoulder. Flank corned beef chicken, meatloaf venison ball tip ham hock tail salami jowl short ribs pork belly drumstick. Meatball chicken hamburger beef filet mignon doner pork picanha pork chop fatback rump ham tri-tip ball tip landjaeger. Sausage leberkas shoulder tongue short loin shankle. Prosciutto tri-tip frankfurter shoulder drumstick capicola. Pork loin shank strip steak pork belly tongue cow.
[/ui-accordion-item]
[ui-accordion-item title="Sections 3"]
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

## Tabs

!!! **depends on [Shortcode UI Plugin](https://github.com/getgrav/grav-plugin-shortcode-ui)**  
!!! Tabs can be used to display content in different tabs.

!!! [Docs: Shortcode UI Plugin](https://github.com/getgrav/grav-plugin-shortcode-ui#tabs)

[ui-tabs position=top-left active=0 theme=lite]
[ui-tab title="First Tab"]
In tempor sed sapien eu porttitor. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. Quisque et enim vitae orci [placerat tincidunt](#) id ac eros. Fusce et gravida libero.

Phasellus cursus odio ex, in **mattis lorem tincidunt** vel. Donec nibh odio, dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor.
[/ui-tab]
[ui-tab title="Second Tab"]
In tempor sed sapien **eu porttitor**. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. [Quisque et enim](#) vitae orci placerat tincidunt id ac eros. Fusce et gravida libero.

Phasellus cursus odio ex, in mattis lorem tincidunt vel. [Donec nibh odio](#), dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor.
[/ui-tab]
[/ui-tabs]

```md
[raw]
[ui-tabs position=top-left active=0 theme=lite]
[ui-tab title="First Tab"]
In tempor sed sapien eu porttitor. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. Quisque et enim vitae orci [placerat tincidunt](#) id ac eros. Fusce et gravida libero.

Phasellus cursus odio ex, in **mattis lorem tincidunt** vel. Donec nibh odio, dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor.
[/ui-tab]
[ui-tab title="Second Tab"]
In tempor sed sapien **eu porttitor**. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. [Quisque et enim](#) vitae orci placerat tincidunt id ac eros. Fusce et gravida libero.

Phasellus cursus odio ex, in mattis lorem tincidunt vel. [Donec nibh odio](#), dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor.
[/ui-tab]
[/ui-tabs]
[/raw]
```

## Gallery

!!! **depends on [Shortcode Gallery Plugin](https://github.com/sal0max/grav-plugin-shortcode-gallery-plusplus)**  
!!! Galleries can be used to display multiple images in a gallery.  
!!! Options:
!!! - `lastRow=justify` - Justify the last row
!!! - `captions=false` - Hide captions

!!! [Docs: Shortcode Gallery++ Plugin](https://github.com/sal0max/grav-plugin-shortcode-gallery-plusplus#gallery-settings)

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

!!! **depends on [Shortcode Owl Carousel Plugin](https://github.com/getgrav/grav-plugin-shortcode-owl-carousel)**  
!!! Owl Carousel is a plugin that is used to display images in a carousel.  
!!! Options:
!!! - `items=1` - Number of items to display
!!! - `margin=10` - Margin between items
!!! - `loop=true` - Infinite loop
!!! - `nav=true` - Show navigation
!!! - `stagePadding=200` - Padding to the edge

!!! [Docs: Shortcode Owl Carousel Plugin](https://github.com/getgrav/grav-plugin-shortcode-owl-carousel)

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
