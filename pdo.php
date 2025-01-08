<?php
$pdo = new PDO('mysql:host=db;port=3306;dbname=clothing', 'root', '123456');   //clothing is the name of the database
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   //used for error handling
