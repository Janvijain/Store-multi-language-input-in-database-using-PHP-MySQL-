# Store-multi-language-input-in-database-using-PHP-MySQL-

A simple basic form to store multi-language input in database using PHP & MySQL

SQL script to create database and table is present in language.sql

Important :-
In form.php file - <meta type http-equiv="Content-Type" content="text/html; charset=UTF-8"> is added in head tag & 
enctype='multipart/form-data' add this in form tag

In connection.php file - "mysqli_set_charset($db,'utf8');" is added before insert query 

In database for each field add collation as "utf8_general_ci	"

Output Images are added for references
Input is stored in 1)Hindi , 2)Marathi , 3)Gujrati , 4)Malayalam



