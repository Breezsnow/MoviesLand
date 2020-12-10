<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Land</title>
    
    <link rel="stylesheet" href="src\public\Styles\styles.css">
    <script src="./src/public/js/script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    
<header>
    <nav class="navbar bg-dark ">
        <div class="menu navbar"><a href="?page=home">Home</a></div>
        <div class="menu navbar"><a href="?page=addMovie">Add a movie</a></div>
        <div class="menu navbar"><a href="?page=listMovie">All my movies</a></div>
        <div class="menu navbar"><a href="?page=search">Search</a></div>
    </nav>
</header>
<div class = "container">
<h1 class="text-center"><?=$this->title;?></h1>