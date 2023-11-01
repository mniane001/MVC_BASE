
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>Shout IT</title>
        <link rel="stylesheet" href="/ShoutBox/public/css/styles.css" type="text/css" >
        <!-- <style>
            body{
    font-family: arial;
    font-size: 15px;
    line-height: 1.5em;
    background: #f4f4f4;
}
        </style> -->
    </head>

    <body>
        <div id="container">
            <header>
                <h1>SHOUT IT! shoutbox</h1>
            </header>

            <div id="shouts">
                <ul>
                <?php foreach($shouts as $shout) : ?>
                    <li class="shout">
                    <span><?= $shout['time']; ?> - </span>
                    <?= $shout['user']; ?>: <?= $shout['message']; ?>
                    </li>
                <?php endforeach; ?>
                    <!-- <li class="shout"><span>10:15pm - </span>Momo: hey wassup?</li>
                    <li class="shout"><span>10:15pm - </span>Momo: hey wassup?</li>
                    <li class="shout"><span>10:15pm - </span>Momo: hey wassup?</li>
                    <li class="shout"><span>10:15pm - </span>Momo: hey wassup?</li>
                    <li class="shout"><span>10:15pm - </span>Momo: hey wassup?</li>
                    <li class="shout"><span>10:15pm - </span>Momo: hey wassup?!</li> -->
                </ul>
            </div>

            <div id="input">
                <form method="post" action="process.php">
                    <input type="text" name="user" placeholder="Enter your name"/>
                    <input type="text" name="message" placeholder="Enter a message"/>
                    <br>
                    <input class="shout-btn" type="submit" name="submit" value="Shout it out">
                </form>
               




            </div>


        </div>
    </body>

</html>