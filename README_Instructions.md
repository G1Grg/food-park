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

<code>"php.validate.executablePath": "C:\\laragon\\bin\\php\\php-8.3.6-nts-Win32-vs16-x64\\php.exe",

"artisan.php.location": "C:\\laragon\\bin\\php\\php-8.3.6-nts-Win32-vs16-x64\\php.exe",</code>

## (Do this if you want to change the default Terminal of VS-Code to cmder(default terminal of Laragon))

<code>
"terminal.integrated.profiles.windows": {
"laragon": {
"path": "${env:windir}\\System32\\cmd.exe",
"args": ["/k", "C:\\laragon\\bin\\cmder\\vendor\\bin\\vscode_init.cmd"]
}
},
"terminal.integrated.defaultProfile.windows": "laragon",</code>

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
--> php artisan migrate:fresh<br/>
to migrate all fresh data to the database
</li>
</ul>
This way we have successfully added columns in the database

## Add New Seeders for User and Admin

php artisan make:seeder UserSeeder<br/>
Location: Seeders --> UserSeeder
This command will create a new seeder. <br/>

Since, we are inserting a new user in the model "User", We will use
the following code. in UserSeeder.
<br/>
<code>
public function run(): void
{
User::insert([
[
'name' => 'Admin',
'email' => 'admin@gmail.com',
'role' => 'admin',
'password' => Hash::make('password')
],
[
'name' => 'user',
'email' => 'user@gmail.com',
'role' => 'user',
'password' => Hash::make('password')
]

        ]);
    }

</code>

Now, all we need to do is call the DatabaseSeeder.php
Use the following code to call the seeder class we just created.<br/>
<code>
$this->call(UserSeeder::class);
</code>

## Creating Separate Dashboard for Admin and User

By default, the dashboard is already created for user. We will add View, Controller, and Route to create separate dashboard for Admin.

1. Create a Controller for Admin <br/>
   <code>
   php artisan make:controller Admin/AdminDashboardController
   </code>
   <br/>

2. Create a new adminDashboard.blade.php file in views/admin/Dashboard
   This will contain the adminDashboard contents

3. Add an index() method in AdminDashboardController
   <code>
   function index() : view {
   return view ('adminDashboard.blade.php');
   }
   </code>
   <br/>

4. Create a Route path to access the controller
   <code>
   Route::get('/admin/dashboard',[AdminDashboardController::class,'index']->middleware('auth')->name('admin.index');
   </code>
   <br/>

5. Run the program
   npm run dev
   php artisan serve
