#Tooltips

## How To use
1. Add the data attribute "data-tool-tip" to any element
2. assing data-tool-tip text (data-tool-tip="my tool tip text")
3. (optional) add styling classes or css variables (limited support)

## color classes
#### .tool-dark - (is the default value) black background, white text, black background and pointer
#### .tool-light - white background, black text, black border and pointer
#### .custom-tool - lets you assign colors based on css variables (to add css variables style="--tooltip-variable-type:myValue")
###### custom variables:
--tooltip-color = text color and border color (only border color if not set with border color variable)
--tooltip-bg = background color
--tooltip-font-size = font-size (default 1 rem)
--tooltip-font-family = font family
--tooltip-cursor = cursor action (default help on all elements except button and a tag, they default to pointer)
--tooltip-border-color = overrides the --tooltip-color variable and sets pointer color and border color

## positioning classes
#### .right - tooltip on the right end of the element
#### .top - tooltip on top of the elment
#### .bottom - tooltip below element (default)
#### .left - coming soon

## utility
#### .no-point - removes the pointer of the tooltip

## notes
#### only place one postition class per tooltip
#### only place one color class per tooltip
#### to use custom css variables you must use the custom class

## examples
```
<div data-tool-tip="my tool tip">Default tool tip</div>
```

```
<div class="tool-light no-point" data-tool-tip="my tool tip">Light tool tip (no point)</div>
```

```
<div class="tool-dark" data-tool-tip="my tool tip">Dark tool tip</div>
```

```
<div class="custom-tool" data-tool-tip="my tool tip" style="--tooltip-color:red;--tooltip-bg:blue;--tooltip-font-sizs:50px;">Custom tool tip</div>
```

```
<div class="left" data-tool-tip="my tool tip">tool tip to the left</div>
```

```
<div class="top" data-tool-tip="my tool tip">tool tip on top</div>
```

```
<div class="bottom" data-tool-tip="my tool tip">tool tip on the bottom (default)</div>
```

```
<a href="#" class="bottom" data-tool-tip="my tool tip">tool tip on an A tag</a>
```

```
<h3>using a span as a<span data-tool-tip="my tool tip">tool tip</span><h3>
```
