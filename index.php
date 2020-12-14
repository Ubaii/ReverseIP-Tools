<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Reverse IP Tools</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<form id="reverse">
  <h1>Reverse IP tools</h1>
  
  <div class="row">
    <input type="text" name="fancy-text" id="domain"/>
    <label for="fancy-text">Domain</label>
  </div>

  <div class="row">
    <center/>
  <button type="submit" tabindex="0">Reverse</button>
  </div>

  <br>
  <div class="row">
    <textarea style="resize: none;" id="results" readonly="yes" name="fancy-textarea"></textarea>
    <label for="fancy-textarea">Output</label>
  </div>

</form>
  <script src='https://code.jquery.com/jquery-3.5.1.js'></script>
  <script src='./script.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js'></script>
</body>
</html>
