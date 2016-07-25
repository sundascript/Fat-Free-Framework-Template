# Fat-Free-Framework-Template

a boilerplate template for fat free framework

## How to use

1. Download zip file to your local machine
2. Extract from `/src/` folder to your root folder
3. use "composer update" to install vendor script
4. run app from `/public/` folder

## File Structure

```
+ [app]
---+ [config]
-------+ config.ini   // global set
-------+ routes.ini   // route set
---+ [Controller]     // controller file
---+ [Model]
---+ bootstrap.php
+ [lib]               // fat-free libraries
+ [public]
---+ [css]
---+ [images]
---+ .htaccess
---+ index.php
+ [ui]                // views template
```

## Editing Config
### config.ini
You can set global setting here, including database setting

### route.ini
Where you can set your route

### Adding Custom file ini
you can add more custom ini file by editing file `app/bootstrap.php`

## Moving index.php from `/public/` folder to master root folder
Feel free to move `index.php` and `.htaccess` file from public folder to master root

to make change this, simply follow this step

1. move the two file `index.php` and `.htaccess`
2. edit `index.php`
3. change ```include_once '../app/bootstrap.php';``` to ```include_once './app/bootstrap.php';```
4. save file and that's all





