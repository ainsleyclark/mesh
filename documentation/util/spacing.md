# Spacing
Spacing is overwhelming, especially when it comes to making it responsive. mesh makes it easy and provides a shorthand responsive margin and padding utility classes.


| Notation                |                                                                   |
| ----------------------- | ----------------------------------------------------------------- | 
| Default                 | {property}{sides}-{size}                                          |   
| Responsive              | {property}{sides}-{breakpoint}-{size} for mob, tab, desk & hd     | 

### Where:
**Property** is either m for margin or p for padding

**Sides** is t for top, b for bottom, l for left, r for right

**Size** is from 0 (no padding or margin) to 5 where:
  - 1 is 0.5rem
  - 2 is 0.75rem
  - 3 is 1rem
  - 4 is 2rem
  - 5 is 3rem


#### Examples
```
<div class="my-3 my-tab-4 my-desk-5">
</div>
```
This gives us 1rem of margin on the y axis as default, 2rem margin for tablet and 3rem for desktop

```
<div class="pt-5 pt-hd-0">
</div>
```
This gives us 3rem of padding top as default but nothing for HD screens.

```
<div class="p-5">
</div>
```
This gives us 3rem of padding on all sides, on all screens.