<html>
    <head>
        <title>Edit User</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php 
            require_once('../views/nav.php');
        ?>
        <div id="form">
            <h1>Edit User</h1>
            <form name="form" action="/holidays/public/login/" method="POST">
                <label>First name: </label>
                <input type="email" id="email" name="email"></br></br>
                <label>Last name: </label>
                <input type="email" id="email" name="email"></br></br>
                <label>Email: </label>
                <input type="email" id="email" name="email"></br></br>
                <label>Password: </label>
                <input type="password" id="password" name="password"></br></br>
                <label>Confirm Password: </label>
                <input type="password" id="password" name="password"></br></br>
                <select name="" value=""><option value="">Role</option>
                <option value="admin">Admin</option><option value="employee">Employee</option></select>
                <input type="submit" id="btn" value="Add" name = "submit"/>
            </form>
        </div>
    </body>
</html>