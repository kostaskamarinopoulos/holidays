<html>
    <head>
        <title>Add Request</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php 
            require_once('../views/nav.php');
        ?>
        <div id="form">
            <h1>Holidays Form</h1>
            <form name="form" action="/holidays/public/holiday/create" method="GET">
                <label>from: </label>
                <input type="date" id="request_start" name="request_start"
                value="2018-07-22">
                <label>to: </label>
                <input type="date" id="request_end" name="request_end"
                value="2018-07-22"></br></br>
                <label>Reason: </label></br>
                <textarea id="reason" name="reason"></textarea></br>
                <input type="submit" id="btn" value="Submit" name = "submitRequest"/>
            </form>
        </div>
    </body>
</html>