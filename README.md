# The Ultimate Blog

The Ultimate Blog is a package that allows you to integrate a whole blog system that contains:
* CRUD on posts
* Likes/Dislikes
* Commenting system
* Search posts
* Post user control system
* Notification and alerts system
* Author profile
* Responsive design
* Tags System
* Views count
* Subscribe to blog

## Future Features:
* Live chatroom
* Follow/Unfollow Author
* Admin panel 

# Screenshots:
## Ultimate blog Home page
![Alt text](initial_release_screensthots/demo1.png?raw=true "HomePage")
##  One post page
![Alt text](initial_release_screensthots/demo2.png?raw=true "One Post")

# Installation :
composer require fjerbi/ultimateblog

### go to your config/auth.php file and update this line :
` 'model' => App\User::class,`
 
` 'model' => fjerbi\ultimateblog\User::class,`

### Add this line in the providers in your config/app.php file :
` fjerbi\ultimateblog\BlogServiceProvider::class, `

### Don't forget to config your .env file and configure your email 
### Finally you can access the blog by typing
`http://localhost:8000/ultimateblog`

# Note:
This package works with Laravel 5.* and 6.*
