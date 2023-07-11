<!DOCTYPE html>
<html>
<head>
  <title>Button Example</title>
  <!-- Nạp Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="test.css">
</head>
<body>
  <div class="w-40 h-12 background-custom">123456789</div>
  
  <div class="input-group has-validation">
  <span class="input-group-text">@</span>
  <div class="form-floating is-invalid">
    <input type="text" class="form-control is-invalid" id="floatingInputGroup2" placeholder="Username" required>
    <label for="floatingInputGroup2">Username</label>
  </div>
  <div class="invalid-feedback">
    Please choose a username.
  </div>
</div>
<select class="form-select bg-gray-100" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  

  <!-- Nạp thư viện jQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <!-- Nạp thư viện Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <!-- Nạp Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
