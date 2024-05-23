## Installing VS-Code

https://code.visualstudio.com/

## VS-Code Extensions

Andromedia --> Dark Theme<br/>
Laravel Extension Pack<br/>
Laravel Blade Wrapper<br/>
Laravel Blade Spacer<br/>
Laravel Snippet<br/>
Laravel IDE-helper:<br/>

--> This doesn't work in itself. So, use the following commands<br/>
--> composer require --dev barryvdh/laravel-ide-helper<br/>
--> php artisan ide-helper:generate<br/>

This will generate a new file in root directory of your project with name: ##(\_ide_helper.php)

Material Icon Theme
PHP IntelliSense - Autocompletion
Prettier - Code Formatter
Github Repositories

## Configuring VS-Code

Setting --> AutoSave --> Afterdelay
Font Size --> 18

## Settings.json (open User settings)

"php.validate.executablePath": "C:\\laragon\\bin\\php\\php-8.3.6-nts-Win32-vs16-x64\\php.exe",

"artisan.php.location": "C:\\laragon\\bin\\php\\php-8.3.6-nts-Win32-vs16-x64\\php.exe",

## (Do this if you want to change the default Terminal of VS-Code to cmder(default terminal of Laragon))

"terminal.integrated.profiles.windows": {
"laragon": {
"path": "${env:windir}\\System32\\cmd.exe",
"args": ["/k", "C:\\laragon\\bin\\cmder\\vendor\\bin\\vscode_init.cmd"]
}
},
"terminal.integrated.defaultProfile.windows": "laragon",

## Installing Laragon (Download Full Version)

https://laragon.org/download/index.html

## Installing Laravel using command

1. Installing Composer using command<br/>
   composer global require laravel/installer
2. Creating a new Application<br/>
   laravel new food-park (Where food-park is the name of the project/application)

## Github (login if required)

Create Github Repository

## Using Breeze for authentication

goto: https://laravel.com/docs/11.x/starter-kits#laravel-breeze

1. composer require laravel/breeze --dev
2. php artisan breeze:install
3. php artisan migrate
4. npm install
5. npm run dev

##
