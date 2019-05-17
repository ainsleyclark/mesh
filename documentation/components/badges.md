# How To Use Badges
- The mesh badges should be prefixed with the ``` badge ``` class which will give you access to all of the classes.
- Badges are designed to be used the ``` <span> ``` element.
#### Example of default badge:
```
<span class="badge">
</span>
```

## Basic Colors
 - add one of these class
 - ``` badge badge-light ``` - Light
 - ``` badge badge-dark  ``` - Dark
 - ``` badge badge-black ``` - Black
 #### Example:
 ```
 <span class="badge badge-light">
 </span>
 ```

 ## Colored Badges
 - To add color to badges, prefix them with ``` badge-{color} ``` class which will give access to all of the classes outlined below.
 - ``` badge badge-primary ``` - Red
 - ``` badge badge-success ``` - Light Green
 - ``` badge badge-info    ``` - Light Blue
 - ``` badge badge-warning ``` - Orange
 - ``` badge badge-danger  ``` - Red Orange
 - ``` badge badge-link    ``` - Dark Blue
 #### Example:
 ```
 <span class="badge badge-primary">
 </span>
 ```

 ## Rounded Badges
 - To make badges rounded, prefix them with ``` badge-rounded ``` class 
 ### Example: 
 ```
 <span class="badge badge-rounded badge-primary">
 </span>
 ```

 ## Notification Badges
 - Badges can be used with buttons
 - Just add ``` badge ``` class needed inside of ``` <button> ``` element
 #### Example:
 ```
 <button class="btn btn-primary">
    <span class="badge badge-light">
    </span>
 </button>
 ```

 # How To Use Tags
 - The mesh tags should be prefixed with the ``` tag ``` class which will give you access to all of the classes.
 - To make tags colorful, add a new class ``` tag-{color} ``` 
 - Next add the letters for your tag between new ``` <div> ``` element with a class of ```action```.
 - next inside of new ``` div ``` element add a class of ``` deletable ```.
 - Inside of ``` deletable ``` class create a ``` span ``` element wich containes ``` &times; ```.
 #### Example:
 ```
 <div class="tag tag-primary">
   <div class="action">Primary</div>
   <div class="deletable">
      <span>&times;</span>
   </div>
 </div>
 ```