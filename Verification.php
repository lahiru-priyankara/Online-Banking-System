<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Math Verification</title>
</head>
<body>
    <form action="verify.php" method="POST">
        <label for="email">Enter your email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <?php
    
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        ?>

        <label for="captcha">What is <?php echo $num1; ?> + <?php echo $num2; ?>?</label>
        <input type="text" id="captcha" name="captcha_answer" required>

    
        <input type="hidden" name="correct_answer" value="<?php echo $num1 + $num2; ?>">

        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
