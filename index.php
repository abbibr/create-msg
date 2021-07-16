<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Box</title>
    <link rel="stylesheet" type="text/css" href="files/app.css">
    <link rel="icon" type="text/css" href="files/image.jpg">
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Comment Box</header>
            <?php 
            	if(isset($_GET['success']))
            	{
            		?>
            		<p style="color: green; text-align: center; font-size: 20px;"><?php echo $_GET['success']; ?></p>
            		<?php
            	}
            ?>
            <?php 
            	if(isset($_GET['error']))
            	{
            		?>
            		<p style="color: red; text-align: center; font-size: 20px;"><?php echo $_GET['error']; ?></p>
            		<?php
            	}
            ?>
            <form action="<?php echo htmlspecialchars('comment.php'); ?>" method="post">
                <div class="field input">
                    <label>Message Name</label>
                    <input type="text" name="name" autocomplete="off" placeholder="Message Name">
                </div>
                <div class="field input">
                    <label>Message</label>
                    <textarea placeholder="Message" cols="5" rows="5" name="msg"></textarea>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Next">
                </div>
            </form>
            <a href="mine.php">Comments</a>
        </section>
    </div>
</body>
</html>