<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet">    
    <style>
        body {
            font-family: sans-serif;
            background: #f2f2f2;
        }

        .container {
            height: 400px;
            width:700px;
            background: url('https://images.pexels.com/photos/8313/food-eating-potatoes-beer-8313.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 5px 5px 50px -20px black;
        }


    </style>
</head>
<body>
    
    <div class='container'>
        <div class='main-title'>
        </div>
        <img src='<?php echo base_url(); ?>public/img/logo.png'>
    </div>

</body>
</html>