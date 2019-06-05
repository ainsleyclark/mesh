# Notes - 

## Live Server Address
- http://meshcss.com/
- http://127.0.0.1:5500/

## /etc/hosts
- 192.168.33.10 meshcss.com


## /subtree
git subtree add --prefix=mesh-src https://github.com/ainsleyclark/mesh.git master --squash
git subtree push --prefix=mesh-src https://github.com/ainsleyclark/mesh.git  master --squash
git subtree pull --prefix=mesh-src https://github.com/ainsleyclark/mesh.git  master --squash

## Gulp 
sudo npm install gulp -g 
npm install --global gulp-cli

###
Example usage via shell (for website)
gulp website --input './src/mesh.scss' --output './dist/css/mesh.css' --build_dir './dist/css'
gulp website --input '/Users/Ainsley/Desktop/Web/mesh-site/temp/test.scss' --output '/Users/Ainsley/Desktop/Web/mesh-site/temp/test.css' --build_dir '/Users/Ainsley/Desktop/Web/mesh-site/temp/'
