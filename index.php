<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/styles.css">
  <!-- <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon"> -->
  <title>Test Site</title>
</head>

<body>
  <header class="bg-dark">
    <div class="container">
      <div class="row flex-column align-items-center">
        <img class="img-fluid logo" src="./img/RenderLogoImage.png" alt="Logo">
        <h2 class="sub-text">Example Test Page</h2>
      </div>
    </div>
  </header>

  <div class="main">
    <div class="container">

      <p class="instructions"><span>Instructions for the test:</span> Please answer all questions. Press submit when completed.</p>

      <form action="./submit.php" method="POST">

        <div class="form-group d-none">
          <input type="text" name="address" id="address" autocomplete="off">
        </div>

        <div class="form-group">
          <p class="bold">Name</p>
          <input class="form-control form-control-lg" type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
          <p class="bold">What is 2 + 2?</p>
          <input class="form-control form-control-lg" type="text" name="question1" id="question1" required>
        </div>

        <div class="form-group">
          <p class="bold">Is the earth round?</p>
          <hr>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="question2" id="question22" value="No" required>
            <label class="form-check-label" for="question22">No</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="question2" id="question21" value="Yes" required>
            <label class="form-check-label" for="question21">Yes</label>
          </div>
        </div>

        <div class="form-group">
          <p class="bold">What is 4 - 2?</p>
          <input class="form-control form-control-lg" type="text" name="question3" id="question3" required>
        </div>

        <button class="btn btn-lg form-btn">Submit</button>
      </form>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>