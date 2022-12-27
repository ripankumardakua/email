<?php
if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $to = "ripan.dakua@gmail.com";
    $header = "form:$email";

    if(mail($to, $name, $msg, $header)){
        $message = "Message has been sent  successfully";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" media="all"> 
</head>
<body>
    <div class="container">
        <form method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Please Name" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button name="submit" type="submit" class="btn">Send Message!</button>
                <?php if(!empty($message)) { ?>
                    <div class="success">
                        <p><?php echo $message ?></p>
                    </div>
                    <?php } ?>
            </div>
        </form>
    </div>
</body>

</html>