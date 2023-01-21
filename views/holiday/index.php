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
                    <th>Date submitted</th>
                    <th>Dates requested</th>
                    <th>Days requested</th>
                    <th>status</th>
                </tr>
                <?php
                foreach ($data['holidays'] as $holiday) :?>
                    <tr class="item_row">
                    
                        <td> <?php echo $holiday['createdAt']; ?></td>
                        <td><?php echo $holiday['dates']; ?></td>
                        <td> <?php echo $holiday['days']; ?></td>
                        <td> <?php echo $holiday['status']; ?></td>
                    </tr>
                <?php endforeach;?>
                
            </table>
        </div>
    </body>
</html>