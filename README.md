# :dollar: KBH-KBC :dollar:
clone of real kbc(kaun banega crorepati) system

## Introduction
---------------
- i made this for my college event kaun banega hazarpati_kbh in techfest named convergence-2k16,uvpce!first time it's seems totally impossible to make this kind of system !
  that can create env like real kbc show but i try to make and got succesed and made this software in week!i think this type of software really need some one that's why i uploaded on github.

## Installation
---------------
- first step you need xammp or wamp already need to install on your pc.
- after that copy directory in htdocs.
- change the intial connnection block in includes/db.php
```php
  public static $dbName = 'KBH';
  public static $user = 'dbuser';
  public static $password = 'dbpass';
  public static $host = 'localhost';
  public static $port = 3306;
  public static $encoding = 'utf8';
```
- also import database with phpmyadmim that i already includes in project.
- website is ready just enter the url in browser like http://localhost/kbh-kbc/
- add or remove questions as you need!
   improve it if you get some feature missing and also contribute to this project!

## Setup Stage
-----------
- if you want kbc like screens than you can use tightvnc to copy screen locally but that needs two pc:computer: and powerful router.
- you can also clone screens with using hdmi splitter but that is quite costly.

## How to use!!
---------------
- there is two main url as following.
  - http://localhost/kbh-kbc/
  - http://localhost/kbh-kbc/next_que.php
- first url is home screen that what user can see.
- and second url is for add the next question by adding id in text box.

- project architecture is simple but you need to spend some time to understand whole project!

## Contribution
----------------
- feel free to submit any kind of patch to this project.
- minus point of this project is there is no perfect model of this project,you can improve it!
