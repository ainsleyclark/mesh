# Getting started with the toast component

The toast component is quite a bit like the card component in terms of style, but suits a different purpose. Its main job is to show small notifactions for the user like a success message or something like this and disapear after a few seconds. As always we provide only the css for the toast component but also deliver a sample with JavaScript how to use it.

## Basic structure

The toast is build from two elements, a container where all actual toast life in and the toast itself. The Structe looks like this:

- `.toast`: This marks the container in which the toasts life and manages where they are displayed.
  - `.toast-body`: This is the body of the actual toast that the user can see. It may contain a heading and some text.
    - Optional `.toast-control`: A container which can be used to add a close icon as control for example.

## Modifiers

We also provide some modifiers to alter the position where to toast-body will be displayed. They all are applied to the `.toast` container element.
You can combine the `.toast-bottom` class with one of the other to classes.

- `.toast-right-corner`: Shifts the toast to the right corner of the display.
- `.toast-left-corner`: Shifts the toast to the left corner of the display.
- `.toast-bottom`: Moves to toast from the top to the bottom of the display.
- `.toast-body-large`: When added to the `.toast-body` element enlarges the toast body.
- `.hide`: When applied to a predfined `.toast-body` hides it.
- `.show`: Adds a CSS animation that is used to fade the `.toast-body` in and out. We use this to take advantage of the `'animationend'` event in JavaScript. For more details take a look at the example implementation below.
## Customize

The toast can be customized by overwritting the default variables with your own values:

- `$toast-width`: Controls the default size of the toast. Defaults to 256px.
- `$toast-width-large`: Controls the default size of a large toast. Defaults to 512px.
- `$toast-padding`: Controls the padding applied to the table elements. Defaults to `padding: 10px 15px`.

## Examples

### Simple toast with primary bg color:

```html
<div class="toast-body bg-primary">
  <p>A wonderfull message.</p>
</div>
```

### Toast with large body

```html
<div class="toast-body toast-body-large bg-primary">
  <p>A wonderfull message.</p>
</div>
```

### Toast with a control

```html
<div class="toast-body bg-primary">
  <div class="toast-control">
    <i class="close-icon"></i>
  </div>
  <p>A wonderfull message.</p>
</div>
```

### Example of usage with JavaScript:

```html
<div class="toast toast-right-corner toast-bottom">
  <!-- All toast are created inside here -->
</div>
```

```javascript
function createToast(text, opts = {}) {
  // Create sensible defaults for our toast-bodys.
  const defaults = {
    color: "bg-primary"
  };
  const options = Object.assign(defaults, opts);
  // Select our toast container to insert our new toast-body later.
  const toastContainer = document.getElementsByClassName("toast")[0];
  // Now we create a new toast-body element
  const toastBody = document.createElement("div");
  toastBody.classList.add("toast-body", options.color);

  const toastText = document.createElement("p");
  toastText.innerText = text;
  toastBody.appendChild(toastText);
  toastContainer.appendChild(toastBody);
  // We use the 'animationend' event from a CSS animation to remove the toast after it is finished displaying
  toastBody.addEventListener("animationend", e => {
    toastBody.remove(1);
  });
  // The show CSS class is used to add a fade-in & -out animation. After this is finished the 'animationend' event is triggerd and the toast-body is removed from the DOM.
  toastBody.classList.add("show");
  if (options.displayTime) {
    toastBody.style.animationDuration = options.displayTime;
  }
}

createToast('Demo Text', { displayTime: '2s' });
```
