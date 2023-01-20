<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div id="form">
            <h1>Login Form</h1>
            <form name="form" action="/holidays/public/login/" method="POST">
                <label>Email: </label>
                <input type="email" id="email" name="email"></br></br>
                <label>Password: </label>
                <input type="password" id="password" name="password"></br></br>
                <input type="submit" id="btn" value="Login" name = "submitLogin"/>
            </form>
        </div>
    </body>
</html>