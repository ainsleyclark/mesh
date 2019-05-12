
# Getting started with Mesh buttons
## To create a default button
- Create a html button or input and add ``` btn ``` class
> **Note**: The ``` btn ``` class is required with every mesh button
#### Example:
```
<button class="btn">
</button>
``` 

## To add color to buttons 
- add one of these classes
- ``` "btn-primary" ``` - Red
- ``` "btn-info"    ``` - Light Blue
- ``` "btn-success" ``` - Light Green
- ``` "btn-warning" ``` - Orange
- ``` "btn-danger"  ``` - Red Orange
- ``` "btn-link"    ``` - Dark Blue
- ``` "btn-disabled" ```- White background disabled
#### Example:
```
<button class="btn-primary">
</button>
```

## To add outline to buttons
- add ``` outline ``` to class field
- This will create outlined border and letters in primary color with white background
#### Example:
```
<button class="btn outline-primary"
</button>
```

## To change the size of Mesh button
- for small buttons add ``` small ``` to class field
- for large buttons add ``` large ``` to class field
> **Note:** The default button size does not require any additional classes.

#### Example:
```
<button class="btn btn-large">
</button>
```

## To add rounder corners
- add ``` rounded ``` to class field
- gives border-radius 600px 
#### Example:
```
<button class="btn btn-rounded btn-primary">
</button>
```

## to add loading animation to a button
- add ``` loading ``` to class field
#### Example:
```
<button class="btn btn-loading btn-primary">
</button>
```

## To add a block button
- add ``` block ``` to class field
- creates a full width button
#### Example:
```
<button class="btn btn-block btn-primary">
</button>
```

## To add Icons to a button
- add ``` btn-icon ``` to class field inside of a button
- after that add a ``` <i> ``` or a ``` <span> ``` tag
> **Note:** Works with any color or size.
#### Example:
```
<button class="btn btn-icon btn-primary">
    <i class="far fa-hashtag></i>
</button>
```

## To add Just Icons
- add ``` btn-justicon ``` to class field inside of a button
- or to make button circular add ``` br-circle ``` to class field
#### Example:
```
<button class="btn btn-justicon btn-primary">
    <i class="far fa-hashtag></i>
</button>
```