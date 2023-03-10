<html>
    <head>
        <title>Add User</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    </head>
    <body>
        <?php 
            require_once('../views/nav.php');
        ?><br>
        <a href="/holidays/public/user/create/">
            <button>Add User</button>
        </a>
        <div id="container">
            <h1>Users</h1>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($data['users'] as $user) :?>
                    <tr class="item_row">
                        <td> <?php echo $user['firstname']; ?></td>
                        <td> <?php echo $user['lastname']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['type']; ?></td>
                        <td>
                            <a href="/holidays/public/user/edit/<?= $user['id']; ?>">
                                <button>Edit</button>
                            </a>
                            <a href="/holidays/public/user/destroy/<?= $user['id']; ?>">
                                <button>Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </body>
</html>