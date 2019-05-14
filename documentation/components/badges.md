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
 - Tags should also containe ``` deletable ``` class.
 - Next add the letters for your tag between ``` <div> ``` element.
 - next wrap your choice of icon between ``` <div> ``` element. This element must containe ``` input ``` class.
 #### Example:
 ```
 <div class="tag tag-primary deletable>
   <div>Primary</div>
   <div class="input">
      <i>
         <svg height="14" viewBox="0 0 24 24" width="14" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
            <path d="M0 0h24v24H0z" fill="none"></path>
         <svg>
      </i>
   </div>
 </div>
 ```