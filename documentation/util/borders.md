# Borders
You can manipulate borders, widths and border border-radius with our border utility classes. They also come in three different flavours, light, medium & dark.

#### Borders:

| Notation                |                              |               
| ----------------------- | ---------------------------- | 
| Default                 | b-{side}                     |   
| Sides                   | b-{side}{amount}             |   
| Thickness               | b-{side}{amount}-{shade}     | 

### Where:
**Side** is either t for top, b for bottom, r for right or l for left.

**Amount** is 1, 2 or 3 for pixels.

**Shade** is light or dark.

#### Examples

```
<div class="b-1">
</div>
```
Results in: ```border: 1px solid rgba(0, 0, 0, 0.6)```;

```
<div class="b-r1-dark">
</div>
```
Results in: ```border-right: 1px solid rgba(0, 0, 0, 0.9);```;

```
<div class="b-l2">
</div>
```
Results in: ```border-left: 2px solid rgba(0, 0, 0, 0.6);```;

```
<div class="b-t3-light">
</div>
```
Results in: ```border-top: 3px solid rgba(0, 0, 0, 0.3)```;

### Border radius:

- ```.br``` - Slight rounded corners on all sides
- ```.br-sm``` - Small rounded corners on all sides
- ```.br-lg``` - Font weight, bold
- ```.br-none``` - No border radius
- ```.br-top``` - Rounded corners on top of element
- ```.br-bottom``` - Rounded corners on bottom of element
- ```.br-right``` - Rounded corners on right of element
- ```.br-left``` - Rounded corners on left of element
- ```.br-top-left``` - Rounded corners on top left side of element
- ```.br-top-right``` - Rounded corners on top right side of element
- ```.br-bottom-left``` - Rounded corners on bottom left side of element
- ```.br-bottom-right``` - Rounded corners on bottom right side of element
