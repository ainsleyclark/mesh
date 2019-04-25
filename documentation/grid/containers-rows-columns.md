# Grid
mesh uses the conventional containers, rows and columns to layout and align content, it's built with flex box and is fully responsive. Here's an example

```
<div class="container">
    <div class="row">
        <div class="col-12 col-tab-6 col-desk-4 col-hd-3">
          I'm a column, I take up 12 columns at mobile, 6 at tablet, 4 at dekstop and 3 in hd screens
        </div>
    </div>
</div>
```

See how our grid system works:

|                         | Default       | Mobile       | Tablet       | Desktop      | HD           |
| ----------------------- | ------------- | ------------ | ------------ | ------------ | ------------ |
| Minimum Width           | 0             | 568px        | 768px        | 1024px       | 1408px       |  
| Max container width     | None          | 518px        | 718px        | 974px        | 1358px       |
| Class prefix            | .col-         | .col-mob     | .col-tab     | .col-desk    | .col-hd      | 
| Gap width               | 0.75rem       | 0.75rem      | 0.75rem      | 0.75rem      | 0.75rem      |    

## Containers
- A container can be at fixed size, and will gracefully become smaller as screen size gets smaller.

```
<div class="container">
</div>
```

- Or a container can be at full width of the screen.

```
<div class="container-fullwidth">
</div>
```

## Rows
- Rows live inside containers, they are at full width and are wrappers for columns. 
- Rows use flexbox by default, so you can add any of our responsive flex classes to them to align them horizontally and vertically.

```
<div class="row">
</div>
```

## Columns
- Columns live inside rows, there can be a maximum of 12 columns in each row. If there are more, the column will wrap to the next line.
- The column prefix is **col-modifier-amount** as shown below.
- The **col-auto** class will fill up all available space, great if you want a column to have a predefined width.
- If you decide to leave the default (*col-) out of the class declaration, it will default to 12, saving you're typing.

```
<div class="col-12 col-mob-10 col-tab-6 col-desk-4 col-hd-4">
</div>
```
## Offsetting Columns
- In order to move columns along within a row, you can use the offset classes, which are responsive.
- Below will offset a column by 6 for tablet.
- **Note:** This will also offset 6 columns for desktop and HD as well. To reset it add - ```col-desk-0```

```
<div class="col-12 col-tab-6 offset-tab-6">
</div>
```

### Notes
- Rows are nest-able, meaning you can have rows that live inside columns.