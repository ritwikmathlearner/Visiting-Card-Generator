<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Card Generator - Home</title>
  </head>
  <body>
    <div class="navbar">
      <div class="visiting card">Card Generator</div>
      <ul class="menu uppercase">
        <li><a href="#">Home</a></li>
        <li><a href="#">Cards</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Login/Register</a></li>
      </ul>
    </div>
    <div class="header half-page">
      <h1 class="primary-heading">Use Card Generator Tool</h1>
      <h2 class="secondary-heading">
        And make your favourite card in seconds
      </h2>
      <!-- <a href="#generates" class="uppercase slogan">Generate</a> -->
    </div>
    <div class="card-generate" id="generate">
        <form action="" class="card-details">
            <div class="card-generate-details">Details
                <div class="arrow"></div>
            </div>
            <select name="card-type" id="">
                <option value="1">Classic</option>
                <option value="2">Modern</option>
            </select>
            <input type="text" name="fullname" id="fullname-input" value="Name Surname">
            <input type="text" name="Designation" id="designation-input" value="Designation">
            <input type="text" name="company" id="company-input" value="Company Name">
            <input type="text" name="line1" id="line1-input" value="Line1">
            <input type="text" name="line2" id="line2-input" value="Line2">
            <input type="submit" value="Preview" class="uppercase" name="preview" id="preview">
            <input type="submit" value="Save" class="uppercase" name="card-create">
        </form>
        <div class="card-showcase">
            <div class="classic-preview">
                <h1 class="name" id="fullName">Gabriel Donovan</h1>
                <p class="designation" id="job">Business Analyst</p>
                <h1 class="company" id="companyName">IBM Solutions</h1>
                <p class="line" id="line1">Line1</p>
                <p class="line" id="line2">Line2</p>
            </div>
        </div>
    </div>
    <div class="footer">
      <div class="social-link">
        <a href="#">facebook</a>
        <a href="#">google+</a>
        <a href="#">twitter</a>
      </div>
      <p>&copy; 2019 Mohammed Khaled Uddin</p>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="./js/navigation.js"></script>
  </body>
</html>
