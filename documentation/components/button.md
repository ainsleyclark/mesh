
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
- ``` "btn primary" ``` - Red
- ``` "btn info"    ``` - light Blue
- ``` "btn success" ``` - Light Green
- ``` "btn warning" ``` - Orange
- ``` "btn danger"  ``` - Red Orange
- ``` "btn link"    ``` - Dark Blue
- ``` "btn disabled" ```- White background disabled
#### Example:
```
<button class="btn primary">
</button>
```

## To add outline to buttons
- add ``` outline ``` to class field
- This will create outlined border and letters in primary color with white background
#### Example:
```
<button class="btn outline primary"
</button>
```

## To change the size of Mesh button
- for small buttons add ``` small ``` to class field
- for large buttons add ``` large ``` to class field
> **Note:** The default button size does not require any additional classes.

#### Example:
```
<button class="btn large">
</button>
```

## To add rounder corners
- add ``` rounded ``` to class field
- gives border-radius 600px 
#### Example:
```
<button class="btn rounded primary">
</button>
```

## to add loading animation to a button
- add ``` loading ``` to class field
#### Example:
```
<button class="btn loading primary">
</button>
```

## To add a block button
- add ``` block ``` to class field
- creates a full width button
#### Example:
```
<button class="btn block primary">
</button>
```