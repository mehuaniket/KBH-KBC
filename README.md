# :dollar: KBH-KBC :dollar:
clone of real kbc(kaun banega crorepati) system

## Introduction
---------------
I created this software for a college event called 'Kaun Banega Hazarpati_KBH' which was a part of Techfest named Convergence-2k16 at UVPCE. It was my first time attempting to create such a system that could replicate the environment of the real KBC show. Even though it seemed impossible, I worked hard and managed to create the software in just one week. 

## Installation
---------------
 
To get started, you need to install XAMPP or WAMP on your PC. Then, copy the directory to the htdocs folder, and modify the initial connection block in includes/db.php. 

```php
  public static $dbName = 'KBH';
  public static $user = 'dbuser';
  public static $password = 'dbpass';
  public static $host = 'localhost';
  public static $port = 3306;
  public static $encoding = 'utf8';
```

Please keep the following information in mind:

- You can import the database with phpMyAdmin, which is already included in the project.
- The website is ready, simply enter the URL in your browser (for example, http://localhost/kbh-kbc/).
- You can add or remove questions as needed.
- If you notice any missing features, feel free to improve the project and contribute to it.

## Setup Stage
-----------
If you want to have KBC-like screens, you can use TightVNC to copy the screen locally, but that requires two computers and a powerful router. Alternatively, you can clone screens using an HDMI splitter, but that can be quite expensive.

## How to use!!
---------------
There are two main URLs for the project, which are as follows:

- http://localhost/kbh-kbc/
- http://localhost/kbh-kbc/next_que.php

The first URL is the home screen that the user can see. The second URL is used to add the next question by adding the ID in the text box.

Although the project architecture is simple, it might take some time to understand the whole project.
