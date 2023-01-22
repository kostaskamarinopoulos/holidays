<html>
    <head>
        <title>Edit User</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
    </head>
    <body>
        <?php
            require_once('../views/nav.php');
        ?>
        <div id="form">
            <h1>Edit User</h1>
            <form name="form" action="/holidays/public/user/update" method="POST">
                <input type="number" id="id" name="id" value="<?php echo $data['user']->id ?>" hidden>
                <label>First name: </label>
                <input type="text" id="firstname" name="firstname" value="<?php echo $data['user']->firstname ?> "></br></br>
                <label>Last name: </label>
                <input type="text" id="lastname" name="lastname" value="<?php echo $data['user']->lastname ?> "></br></br>
                <label>Email: </label>
                <input type="email" id="email" name="email" value="<?php echo $data['user']->email ?> "></br></br>
                <select name="type">
                <option value="">Role</option>
                <option value="6" <?php if ($data['user']->type === 6 ) { echo ' selected="selected"'; } ?>>Admin</option>
                <option value="3" <?php if ($data['user']->type === 3 ) { echo ' selected="selected"'; } ?>>Employee</option>
                </select>
                <input type="submit" id="btn" value="Update" name = "submit"/>
            </form>
        </div>
    </body>
</html>