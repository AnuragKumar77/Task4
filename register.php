<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
      margin: 50px auto;
      text-align: left;
      font-family: sans-serif;
    }
    form {
      border: 1px solid #1A33FF;
      background: #ecf5fc;
      padding: 40px 50px 45px;
    }
    .form-control:focus {
      border-color: #000;
      box-shadow: none;
    }
    label {
      font-weight: 600;
    }
    
    .error {
      color: red;
      font-weight: 400;
      display: block;
      padding: 6px 0;
      font-size: 14px;
    }
    .form-control.error {
      border-color: red;
      padding: .375rem .75rem;
    }    
  </style>
</head>
<body>
  <div class="container mt-5">
    <!-- Messge -->
    <?php if(!empty($response)) {?>
      <div class="alert text-center <?php echo $response['status']; ?>" role="alert">
        <?php echo $response['message']; ?>
      </div>
    <?php }?>
    <!-- Contact form -->
    <form action="" name="contactForm" method="post" enctype="multipart/form-data" >
        <p style="text-align:center">Registration Form</p>
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>
      <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control" name="phone" id="phone">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" id="address">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>
      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="confirm_password" id="confirm_password">
      </div>
      <input type="submit" name="submit" value="Submit" class="btn btn-dark btn-block">
    </form>
  </div>
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
  
  <script>
    $(function() {
      $("form[name='contactForm']").validate({
        // Define validation rules
        rules: {
          name: "required",
          email: "required",
          phone: "required",
          address: "required",
          password: "required",
          confirm_password: "required",
          name: {
            required: true
          },
          email: {
            required: true,
            email: true
          },          
          phone: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
          },          
          address: {
            required: true
          },          
          password: {
            required: true
          },
          confirm_password: {
            required: true
          },
          
        },
        // Specify validation error messages
        messages: {
          name: "Please provide a valid name.",
          email: {
            required: "Please enter your email",
            minlength: "Please enter a valid email address"
          },
          phone: {
            required: "Please provide a phone number",
            minlength: "Phone number must be min 10 characters long",
            maxlength: "Phone number must not be more than 10 characters long"
          },
          address: "Please enter Address",
          password: "Please enter your password",
          confirm_password: "please enter confirm password",
          pass: "password does not match"
        },
        submitHandler: function(form) {
          form.submit();
        }
      });
    });    
  </script>
</body>
</html>