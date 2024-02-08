# Marvel API - CodeIgniter 4
Web application built with PHP, CodeIgniter 4, and Bootstrap 5 that implements MVC and CRUD architectures to consume Marvel API characters and display them, allowing users to create new characters and update-delete the existing ones. 

## Requirements
* [CodeIgniter 4 ](https://codeigniter.com)
* [PHP version 7.4 or higher](https://www.php.net/downloads.php)
* [intl - PHP extension](http://php.net/manual/en/intl.requirements.php)
* [mbstring - PHP extension](http://php.net/manual/en/mbstring.installation.php)
* [Apache Server](https://httpd.apache.org)
* [Marvel API Key](https://developer.marvel.com/documentation/getting_started)

I utilized XAMPP as my development enviroment to run Apache and MySQL, more information at [www.apachefriends.org](https://www.apachefriends.org)

## How to Consume Marvel API
This application consumes Marvel API to populate the database with an initial set of data. [Sign up](https://developer.marvel.com/documentation/getting_started) to get an API key. 
* To invoke the endpoint you need to generate an [md5 hash]( http://www.md5.cz/) with this structure `md5(ts+privateKey+publicKey)`
* Go to **app** > **Database** > **Seeds** > **Character.php** and replace the environment variables with your own. `ts` (I used 1000), `public key`, and `md5 hash`.

## How to Run it Locally 
Note: if you are using XAMPP, move the project folder into `htdocs` folder from XAMPP folder `C:\xampp\htdocs`. I used `marvel-codeigniter4` as my project name.
* Configure the base URL with your project name on **app** > **Config** > **App.php** 
* Configure the database on **app** > **Config** > **Database.php** I used "marvel-characters" as my database name. 
* Open the terminal in the project root `C:\xampp\htdocs\marvel-codeigniter4` and run the command `php spark migrate AddCharacters` to create a *migration* for characters table. 
* Open the terminal in the project root `C:\xampp\htdocs\marvel-codeigniter4` and run the command `php spark db:seed Character` to pupulate (*seed*) the character table with an initial set of data from the Marvel API. You can run it as many times as you want. 

## Web Application
You should see it this way: 

### Home page
![project-local](https://github.com/abraham-espinosa/marvel-codeigniter4/assets/60346436/ecf8b6cc-5388-4801-b620-c086559f560f)
<br>
### Create page
![project-create](https://github.com/abraham-espinosa/marvel-codeigniter4/assets/60346436/2ad63666-b2a1-461a-9eea-ebd2634229ed)
<br>
### Update page
![project-update](https://github.com/abraham-espinosa/marvel-codeigniter4/assets/60346436/3647ca84-8697-4bb4-9e52-07f9dadf480e)
<br>
### Successfully message after deleting, creating, or updating a character 
![project-delete](https://github.com/abraham-espinosa/marvel-codeigniter4/assets/60346436/9f4ee717-cdfd-4a37-980f-d52b03903995)












