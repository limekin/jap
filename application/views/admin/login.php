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
            height: 500px;
            width: 340px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 5px 5px 50px -25px grey;
            display: flex;
            flex-directioN: column;
        }

        .container:before {
            background: url('https://images.pexels.com/photos/8313/food-eating-potatoes-beer-8313.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
            background-size: cover;
            background-position: center;
            position: absolute;
            content: "";

            height: 100%;
            width: 100%;
            top: 0;
            left: 0;

            z-index: -1;
        }

        .container:after {
            background: rgba(0,0,0,.5);
            position: absolute;
            content: "";

            height: 100%;
            width: 100%;
            top: 0;
            left: 0;

            z-index: -1;
        }

        img {
            display: block;
            width: 200px;
            margin: auto;
        }

        .main-title {
            color: white;
            padding: 40px;
            text-align: center;
        }
        .title {
            font-size: 4em;
            font-family: 'Parisienne', cursive;
            color: #e7bf6d;
            font-weight: bold;
        }

        form {
            flex: 1;
            background: white;
        }

        input {
            display: block;
            width: 100%;
            padding: 20px 10px;
            border: none;
            border-bottom: 1px solid #f2f2f2;
            text-align: center;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: #e7bf6d;
        }
        button {
            background: #EB3349;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #F45C43, #EB3349);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #F45C43, #EB3349); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            color: white;
            display: block;
            margin: auto;
            width: 90%;
            padding: 15px 0px;
            border: none;

            border-radius: 10px;
            margin-top: 50px;
            transition: all .3s ease-out;
            box-shadow: 2px 2px 10px -7px black;
        }

        button:hover {
            cursor: pointer;
            background: #EB3349;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #F45C43, #EB3349);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #F45C43, #EB3349); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            
        }

        .error {
            text-align: center;
            color: red;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    
    <div class='container'>
        <div class='main-title'>
            <span class='title'>Jaipur</span> 
            <br>
            <span class='sub'>Indian Cuisine</span>
        </div>

        <form method='POST'>
            <input type='text' name='username' placeholder='Username'>
            <input type='password' name='password' placeholder='Password'>

            <button type='submit'>Login</button>

            <?php if($this->session->has_userdata('error')): ?>
            <div class='error'>
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif ;?>
        </form>

       
        <!--
        <img src='<?php echo base_url(); ?>public/img/logo.png'>
        -->
    </div>

</body>
</html>