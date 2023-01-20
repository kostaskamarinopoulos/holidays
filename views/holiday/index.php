<html>
    <head>
        <title>Holidays Requested</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php 
            require_once('../views/nav.php');
        ?>
        <div id="container">
            <h1>Holidays Requested</h1>
            <table>
                <tr>
                    <th>User email</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Reason</th>
                </tr>
                <?php
                foreach ($data['holidays'] as $holiday) :?>
                    <tr class="item_row">
                        <td> <?php echo $holiday['user_id']; ?></td>
                        <td> <?php echo $holiday['request_start']; ?></td>
                        <td><?php echo $holiday['request_end']; ?></td>
                        <td>Summer</td>
                    </tr>
                <?php endforeach;?>
                
            </table>
        </div>
    </body>
</html>