# Maca Messenger
Go to the following address to download the Maca application 

https://maca.avaw.ir


# Start Create Robot

Click on the magnifying glass icon from the main screen and write the ```robot``` username

Click on start or write ```/start```

Write the phrase ```/newbot```

After writing this command, it will ask you the name of the robot you want to create

After that, she wants you to create a username for your robot (make sure that the robot is only with lowercase English letters or English numbers)

congratulation! You made your own robot! Please do not give the token key that is given to you to anyone because by taking your token they can access your robot!

# Getting started with robot management

First of all, we must install the Maca Robot library!

Composer
```
composer require heidarelhaee/macarobot
```

Create a PHP file with the desired name and put the following code inside it...

PHP
```
<?php
require 'vendor/autoload.php';

use MacaRobot\MacaRobot;
$MacaRobot = new MacaRobot();
?>
```

Now let's send a message to one of the people you want

PHP
```
<?php
require 'vendor/autoload.php';

use MacaRobot\MacaRobot;
$MacaRobot = new MacaRobot();

$keyrobot = "";//key robot

$user = "";//The username of the person you want to send a message to...

$text = "";//Message

echo $MacaRobot->sendMessageText($keyrobot,$user,$text);
?>
```

Now let's answer a message

PHP
```
<?php
require 'vendor/autoload.php';

use MacaRobot\MacaRobot;
$MacaRobot = new MacaRobot();

$keyrobot = "";//key robot

$user = "";//The username of the person you want to send a message to...

$text = "";//Message

$id = ""; //ID Message

echo $MacaRobot->sendMessageReplayText($keyrobot,$user,$text,$id);
?>
```


