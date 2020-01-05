<html>
{{--this page for login users " old users " view --}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
  form{
      alignment: center;
      margin: 10%;
  }
  body {
      background: #eee;
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
</style>
</head>
<body>
<form method="get" action="/user/checkIsUser">
    {{--this login form --}}
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    {{--this btn will go to anther view depends on if the users is saller or buyer after checked from data base --}}
    <button type="submit" class="btn btn-primary fa-align-center">Login</button>
    <a href="/sign_up">sign up</a>
    {{--this btn will go to anther view call sign uo --}}
</form>
</body>
</html>

