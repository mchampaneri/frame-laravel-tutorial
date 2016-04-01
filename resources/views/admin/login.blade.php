<html>
    <head>
        <title>Login | Home</title>

    </head>
    <body>
    <form action="{{url('/login')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" name="email" id="username" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password"  id="password" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Login" class="btn btn-primary">
        </div>
    </form>
    </body>
</html>