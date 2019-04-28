#Breadcrumbs

## How to use breadcrumbs
1. add a ul or ol(not recomended) with class name of "breadcrumb"
2. fill with li's which will appear left to right 
3. add a tags inside of each li (optional but reccomended so they can be used to navigate)

## color classes
- breadcrumb children inherit the parent class so the default classes of ".c-{color}" will apply to the breadcrumb items
- seperators inherit the same color as the li/a color by deafult
- if you are looking to chnage the color of the seperator use the follwing classes
#### .seperator-grey 
#### .seperator-black
#### .seperator-white


## changing breadcrumb icons - font-awesome
#### the default (not specified) is >
#### .double will make the seperators >>
#### .solid will make the seperators solid arrows \f0da
#### .slash will make the seperators /

## Positioning
#### .center will position the breadcrumbs in the center of its parent
#### .left will position the breadcrumbs in the left of its parent
#### .right will position the breadcrumbs in the right of its parent

## Notes
by deafult the breadcrumb ul will take up 100% of it's container, if you want to make it a specified size wrap it in a container

## Examples
```
//default
<ul class="breadcrumb">
    <li><a href="#">one</a></li>
    <li><a href="#">two</a></li>
    <li><a href="#">three</a></li>
</ul>
```

```
//example of using a color class
<ul class="breadcrumb c-{color}">
    <li><a href="#">one</a></li>
    <li><a href="#">two</a></li>
    <li><a href="#">three</a></li>
</ul>
```

```
//example of using a color class and seperator color
<ul class="breadcrumb c-{color} seperator-grey">
    <li><a href="#">one</a></li>
    <li><a href="#">two</a></li>
    <li><a href="#">three</a></li>
</ul>
```

```
//example of using a specified seperator
<ul class="breadcrumb double">
    <li><a href="#">one</a></li>
    <li><a href="#">two</a></li>
    <li><a href="#">three</a></li>
</ul>
```

```
//example of using a specified seperator
<ul class="breadcrumb slash">
    <li><a href="#">one</a></li>
    <li><a href="#">two</a></li>
    <li><a href="#">three</a></li>
</ul>
```
