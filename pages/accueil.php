<?php
$query = 'Select * from ville';

$result =$cnx->query($query);
$data=$result->fetchAll();
var_dump($data);
