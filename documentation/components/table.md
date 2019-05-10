# Getting started with the table

The implementation of the table in mesh is very minimalistic as we view the table as tool for displaying data and making it easy to compare data, because of this our styles are very decent and easy to override.

This view also had an impact on our idea how to make a table responsive and useable on smaller screens.

## Basic structure

A table is build with pretty much one main class and only has some extra modifing classes. So the basic structure of a table looks like this:

- A `table` element with the `.table` class.
  - An optional `thead` element for column headings.
    - Contains one `tr` with one or more `th` elements.
  - An optional `tbody` element.
    - Contains on or more `tr` with one or more `td` elements.
  - An optional `tfoot` as a footer with column headings for example.
    - Contains on or more `tr` with on or more `th` as bottom headings.

## Modifiers

As mentioned before, we have some simple modifier classes for the table:

- `.table-striped`: This adds a different color to every even row for a striped look.
- `.table-fullwidth`: With this modifier the table will always consume 100% of it's parent container.
- `.table-hoverable`: Adds a hover effect to the table rows.

## Responsive Table

Like we said in the introduction to the table, we think of the table as a primary tool for data presentation. Because of this we decided to make only the table scrollable via the parent container. So it's always possible to read the table in it's natrual layout.

To make use of this you need to add the `.table-responsive` class to the parent container element.

## Customize

The table can be customized by overwritting the default variables with your own values:

- `$table-font-size`: Controls the default font size of the table. Defaults to 16px.
- `$table-heading-font-siz`: Controls the default heading font size of the table. Defaults to 18px.
- `$table-padding`: Controls the padding applied to the table elements. Defaults to `padding: 10px 15px`
- `$table-standard-border`: Controls the default border style of the table. Defaults to `1px solid #f0f0f0`
- `$table-striped-color`: The default color of the colored rows when adding the striped modifier class. Defaults to `#fdadad`
- `$table-hover-color`: The default color of the hover effect on rows when adding the hover modifier class. Defaults to `#aaffaa`.

## Examples

### Simple table with thead, tbody and tfoot:

```html
<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Rank</th>
      <th>Birthday</th>
      <th>Streename</th>
      <th>City</th>
      <th>Zip</th>
      <th class="center-text">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Sweet Mask</td>
      <td>A-Class</td>
      <td>19.02.1995</td>
      <td>Idoleave.</td>
      <td>A-City</td>
      <td>512312</td>
      <td><button>Text</button></td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>Name</th>
      <th>Rank</th>
      <th>Birthday</th>
      <th>Streename</th>
      <th>City</th>
      <th>Zip</th>
      <th class="center-text">Actions</th>
    </tr>
  </tfoot>
</table>
```

### Table with hover effect on data rows:

```html
<table class="table table-hoverabl">
  <thead>
    <tr>
      <th>Name</th>
      <th>Rank</th>
      <th>Birthday</th>
      <th>Streename</th>
      <th>City</th>
      <th>Zip</th>
      <th class="center-text">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Sweet Mask</td>
      <td>A-Class</td>
      <td>19.02.1995</td>
      <td>Idoleave.</td>
      <td>A-City</td>
      <td>512312</td>
      <td><button>Text</button></td>
    </tr>
  </tbody>
</table>
```

### Table with striped rows::

```html
<table class="table table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Rank</th>
      <th>Birthday</th>
      <th>Streename</th>
      <th>City</th>
      <th>Zip</th>
      <th class="center-text">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Sweet Mask</td>
      <td>A-Class</td>
      <td>19.02.1995</td>
      <td>Idoleave.</td>
      <td>A-City</td>
      <td>512312</td>
      <td><button>Text</button></td>
    </tr>
  </tbody>
</table>
```

### Table fills container with 100% width

```html
<table class="table table-fullwidth">
  <thead>
    <tr>
      <th>Name</th>
      <th>Rank</th>
      <th>Birthday</th>
      <th>Streename</th>
      <th>City</th>
      <th>Zip</th>
      <th class="center-text">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Sweet Mask</td>
      <td>A-Class</td>
      <td>19.02.1995</td>
      <td>Idoleave.</td>
      <td>A-City</td>
      <td>512312</td>
      <td><button>Text</button></td>
    </tr>
  </tbody>
</table>
```

### Simple card with title and header icon:

```html
<div class="table-responsive">
  <table class="table table-fullwidth">
    <thead>
      <tr>
        <th>Name</th>
        <th>Rank</th>
        <th>Birthday</th>
        <th>Streename</th>
        <th>City</th>
        <th>Zip</th>
        <th class="center-text">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Sweet Mask</td>
        <td>A-Class</td>
        <td>19.02.1995</td>
        <td>Idoleave.</td>
        <td>A-City</td>
        <td>512312</td>
        <td><button>Text</button></td>
      </tr>
    </tbody>
  </table>
</div>
```
