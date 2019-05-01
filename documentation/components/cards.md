# Getting started with the card component

The mesh card component is a minimalistic implementation of a card component. The goal is to create a basic structre for a card and leave the styling to the user. So nothing behind a plain white background and a little bit of layout is applied to the cards.

## Basic structure

The card component is build with different levels of elements:

- `.card`: The main class used on the element which is the card.
  - `.card-menu`: Allows to create simple action icon-buttons like a close button.
  - `.card-header`: This element contains all elements related to the head like the title.
    - `.card-title`: As the name suggest contains this element the Title of the card.
    - `.card-header-icon`: A container for a icon / img like a avatar.
  - `.card-content`: Contains the main content of the card.
  - `.card-footer`: The footer area to create some action buttons for example.

## Modifiers

It is possible to modify the normal card layout with the provided modifier-classes:

- `.card-large`: Using this class on the element with the `.card` class will create a large card.
- `.img-card`: This modifier allows it to create a card with a background image which fills the complete card.
- `.card-media-header`: If applied on the element with the `.card-header` class, it sets all options to use a background image via the `background` property or the `background-image` property.

## Customize

The card component can be customized by overwritting the default variables with your own values:

- `$card-default-width`: Controls the width of the normal card, defaults to 300px.
- `$card-default-width-large`: Controls the width of a large card, defaults to 500px.
- `$card-default-padding`: Controls the padding applied to title, content and footer container.
- `$card-default-header-icon-padding`: Controls the padding around the header icon in the title.
- `$card-default-media-img-title-padding`: Controls the padding of the title inside a media-header.
- `$card-default-media-header-height`: Controls the default height of the media-header, defaults to 150px.
- `$card-default-title-font-size`: Controls the font-size for the content of a card, defaults to 16px.
- `$card-default-content-font-size`: Controls the font-size of the title, defaults to 18px.

## Examples

### Simple card with title and text:

```html
<div class="card">
  <div class="card-header">
    <div class="card-title">
      <h2>Simple Card Header</h2>
    </div>
  </div>
  <div class="card-content">
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
  </div>
  <div class="card-footer">
    <button>Some action</button>
  </div>
</div>
```

### Simple card with title and text and footer:

```html
<div class="card">
  <div class="card-header">
    <div class="card-title">
      <h2>Simple Card Header</h2>
    </div>
  </div>
  <div class="card-content">
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
  </div>
</div>
```

### Large card with title and text:

```html
<div class="card card-large">
  <div class="card-header">
    <div class="card-title">
      <h2>Simple Card Header</h2>
    </div>
  </div>
  <div class="card-content">
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
  </div>
</div>
```

### Card with card-menu:

```html
<div class="card card-large">
  <div class="card-menu">
    <i class="fas fa-times"></i>
  </div>
  <div class="card-header">
    <div class="card-title">
      <h2>Simple Card Header</h2>
    </div>
  </div>
  <div class="card-content">
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
  </div>
</div>
```

### Simple card with title and header icon:

```html
<div class="card">
  <div class="card-header">
    <div class="card-header-icon">
      <img src="img-src" />
    </div>
    <div class="card-title">
      <h2>Card Header with icon and long title!</h2>
    </div>
  </div>
  <div class="card-content">
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
  </div>
</div>
```

### Simple image-card:

```html
<div class="card img-card">
  <div class="card-header">
    <div class="card-title">
      <h2>Small card with full bg img and title</h2>
    </div>
  </div>
</div>
```

### Image-card with content:

```html
<div class="card img-card card-large">
  <div class="card-header">
    <div class="card-title">
      <h2>Wide img card with title & content area(unlikely but possible)</h2>
    </div>
  </div>
  <div class="card-content">
      Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
  </div>
</div>
```
