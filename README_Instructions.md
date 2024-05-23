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

## Creating a User Levels (user and admin)

This site will have two main roles: User and Admin.
They will have separate functionality based on the type of roles:
The term <b>User</b> will be any user who will be able to access website and will have limited functionality.
The term <b>Admin</b> will be all other user who will have full control over the system.

<br/>
<ul>
<li>Create a new column in users table.</li>
<li>The columns will be avatar with string data type and default image. 
Create a new folder in public and name it uploads. This will store all of our images. The default image is uploaded under public ->uploads folder. <br/>
-->$table->text('avatar')->default('/uploads/user.png');
</li>
<li>Add another column role with enum data type. It will take two parameter. 
First the column name and second array. The column name will be 'role' and second array data are 'user' and 'admin'. The default will be user.<br/>
--> $table->enum('role',['user','admin'])->default('user');
</li>
<li>Run the command: <br/>
--> php artisan migrate:fresh to migrate all fresh data to the database
</li>
</ul>
This way we have successfully added columns in the database
