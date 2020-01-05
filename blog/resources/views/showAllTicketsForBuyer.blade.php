<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 1/3/2020
 * Time: 10:12 AM
 */
?>
<html>
<head>
</head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
{{--at this file we will all concerts as a cards  in system and any users can see this --}}
<h1 style="border-left: #1c5ab0;">you must select any type of these tickets </h1>
<div class="card-group">
    <?php foreach($tickets as $key):?>
    <div class="card">
        <form method="get" action="/orderStore/{{$key->id}},{{$concert_id}},{{$user_id}}">
            <div class="form-group">
            <p> <?php printf('ticket price: '.$key-> price);?></p>
            <p> <?php printf('ticket id:'.$key-> id);?> </p>
            <p> <?php printf('ticket name:'.$key->name);?> </p>
            <input type="number" name="totalNumberOfTickets" placeholder="totalNumberOfTickets">
            <button type="submit" class="btn btn-primary fa-align-center">buy</button>
            </div>
        </form>
    </div>
</div>
<?php endforeach;?>
</div>
</body>
</html>
