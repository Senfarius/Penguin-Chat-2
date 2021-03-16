Things you will need:
 
Notepad++ or some kind of text editor.
PHP knowledge
Very little Actionscript 2 knowledge
SWFs , which are included below.
The finished PHP files which are also included below.
 
Okay, so once you download the attachments, you will need to use a decompiler to decompile chat.swf.
 
(could someone post a decompiled one here?)
 
You should see something like on like Frame 1:
host = "waiting to get decompiled chat.swf";
Change the host to whatever you host is, if it's localhost use localhost as the host, not 127.0.0.1!
 
Alright, that's it for the SWFs! Make sure you export chat.swf in the same folder as your other SWFs and PHP.
 
Okay, now moving onto the PHP.
 
Open up config.php and edit your info. An example of my config.php:
<?php
    $host = 'localhost';
    $user = 'penguinc_urmom';
    $pass = 'loldongs123';
    $dbase = 'penguinc_users';
?> 
That's basically all you need to edit in the PHP.
 
 
Now, you'll need to add the database!
 
The SQL code is included in the download.
 
Make sure you keep the table named "penguins" unless you want to edit some of the PHP!
 
Alright, DO NOT RUN THE FILES. YOU KEEP THEM IN THE FOLDER AND LEAVE THEM THERE.
