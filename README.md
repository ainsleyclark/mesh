<p align="center">
  <a href="https://www.meshcss.com">
    <img alt="mesh-logo" src="https://www.meshcss.com/assets/img/meshlogo.svg" width="144">
  </a>
</p>

<h1 align="center">
  mesh
</h1>

<p align="center">
  A pure open source SCSS Framework, with no frills but a modular approach to a responsive grid system and other utilities.
</p>


<center>

[![CodeFactor](https://www.codefactor.io/repository/github/ainsleyclark/mesh/badge)](https://www.codefactor.io/repository/github/ainsleyclark/mesh)
[![Discord Chat](https://img.shields.io/discord/308323056592486420.svg)](https://discord.gg/geBW7CN) 
[![known vulnerabilities](https://snyk.io/test/github/ainsleyclark/mesh/badge.svg?targetFile=package.json)](https://snyk.io/test/github/ainsleyclark/mesh?targetFile=package.json)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/dwyl/esta/issues)
[![dependency status](https://david-dm.org/ainsleyclark/mesh.svg)](https://david-dm.org/ainsleyclark/mesh)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/ainsleyclark/mesh/) 

</center>


## Why? [![start with why](https://img.shields.io/badge/start%20with-why%3F-brightgreen.svg?style=flat)](http://www.ted.com/talks/simon_sinek_how_great_leaders_inspire_action)

### Versatile
It's based on the principle that every website is different. Most CSS frameworks have consistent styling, you can almost tell if a website was designed with a particular one. Here, we use wire-framing to show you what it could look like, not what it will look like.

### Fast
It's quick - under 100kb minified. mesh was built with a very modular approach, meaning you can cut back on classes & components you won't use by using our scss files.

### Functional
It has a huge amount of very useful utility classes, it's also built entirely around flex box, which enables you to write HTML quicker. It's extremely easy to pick up and will save you bags of time in the long run.

##  Installation

- To begin with, download or clone this repository 
- Under copy `dist` , copy `mesh.min.css` to your site's css folder.
- Add stylesheet declaration in `<head>`

```
<link rel="stylesheet" type="text/css" href="path-to-stylesheet/mesh.min.css" />
```

##  Docs

meshcss.com is underway, you can view the temporary documentation [here](DOCUMENTATION.md)

##  Contributing 

mesh is still in its early days, if you wish to contribute, please do so! It would be appreciated. 
Please email info@ainsleyclark.com if you have any questions, I will be more than happy to answer them. 

### How to contribute:
1. Clone this repo and create a new branch.
2. Using node/npm enter `npm install` to install dev dependencies.
3. If you have vagrant, use 'npm run dev' to boot up vagrant box (trusty64) and watch & compile sass.
4. If you use docker, use 'npm run docker-create' in the mesh base dir to create a docker container and 'npm run docker-start' to start the container and watch & compile sass.
5. If you do not have vagrant, use 'npm run watch-css' to watch & compile sass.
6. When finished use `npm run prod` to clean compiled css files. 
7. Merge & commit, create new pull request.

**Notes:**
- Please do not edit ***mesh.css*** directly, they are automatically generated. 
- Get yourself familiar with the demo pages to see how things work. 


## Licence
Code Copyright 2018 mesh. Code released under the [MIT Licence](LICENCE).

## Contributors
[@kassuro]( https://github.com/kassuro )
[@nicholsk18]( https://github.com/nicholsk18 )
[@versustune]( https://github.com/versustune )

## Testing
Tested with BrowserStack.  <br/>
<a href="https://www.browserstack.com/">
  <img alt="BrowserStack Logo" src="https://www.meshcss.com/assets/img/browserstack-logo.png" width="144">
</a>
