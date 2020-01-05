<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 12/9/2019
 * Time: 2:05 PM
 * this file was created to take the information of new users
 * this form contains a many filed:
 * 1- user_id=> generate  automatically in data base
 * 2-user_name => text field
 * 3-email => email input in form
 * 4-password => password input
 * 5-seller or buyer => checked box
 */
?>
<html>
{{--this page for login users " old users " view --}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>     <style>
        form{
            padding: 2%;
            border: solid dodgerblue;
            alignment: center;
            background: rgba(0,0,0,.3);
            margin: 10%;
        }
        body {
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            font-size: 14px;
        }
        html {
            position: relative;
            min-height: 100%;
            -webkit-font-smoothing: antialiased;
        }
        button{
            alignment: center;
            padding: 2%;
        }
        h1{
            color: white;
        }
    </style>
</head>
<body>
<form method="post" action="/editPriceOfTickets/{{$tickets}}">
    @csrf
    <h1 class=" main-title " >update price</h1>
    <div class="form-group">
        {{--<label for="date">Concert Location</label>--}}
        <input type="text" class="form-control"  name="price" placeholder="ticketPrice">
        <p class="help is-danger">{{$errors->first('price')}}</p>
    </div>
    <br>
    <button type="submit" class="btn btn-primary fa-align-center">Set the price of tickets </button>
</form>
</body>
</html>
