<?php
  // message vars
    $msg = '';
    $msgClass = '';

  // check submit
  if (filter_has_var(INPUT_POST, 'submit')) {
    // get form dat
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // check required fields
    if (!empty($email) && !empty($name) && !empty($message)) {
      // passed
      // $msg = 'PASSED';
      // $msgClass = 'alert-success';

      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      } else {
        $toEmail = 'parkersalterego92@gmail.com';
        $subject = 'Contact Reguest From '.$name;
        $body = '<h2>Contact Request</h2>
                <h4>Name</h4>
                <p>'.$name.'</p>
                <h4>Email</h4>
                <p>'.$email.'</p>
                <h4>Message</h4>
                <p>'.$message.'</p>
        ';

        // email headers
        $headers = "MIME-Version: 1.0" ."\r\n";
        $headers .= "content-type:text/html:charset=UTF-8" . "\r/\n";

        // additional headers
        $headers .= "From: " .$name. "<".$email.">". "\r\n";

        if (mail($toEmail, $subject, $body, $headers)) {
          // email sent
          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';
        } else {
          $msg = 'Your email was not sent';
          $msgClass = 'alert-danger';
        }

      }
    } else {
      // failed
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
</head>
<body>
  <nav class="navbar navbar-default">
  <?php if($msg != ''): ?>
    <div class="alert <?php echo $msgClass; ?>">
      <?php echo $msg; ?>
    </div>
  <?php endif;?>
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">My Website</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : '';?>">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '';?>">
      </div>
      <div class="form-group">
        <label for="">Message</label>
        <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : '';?></textarea>
      </div>
      <br>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>