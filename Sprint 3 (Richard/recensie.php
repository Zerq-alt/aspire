<?php include 'head.php';?>
<?php include 'sidebar.php';?>
<?php include 'foot.php';?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="styleform.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<h2>Recensie Formulier</h2>

<div class="container">
  <form action="mailto:someone@example.com" method="post" enctype="text/plain">
    <div class="row">
      <div class="col-25">
        <label for="fname">Voornaam</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Achternaam</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Land</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Nederland</option>
          <option value="canada">Duitsland</option>
          <option value="usa">Belgie</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Recensie</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>