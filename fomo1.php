<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php include("nav.php");?>
      <h1>Hello World!</h1>
        <?php for($x = 0; $x <= 12; $x++):?>
            <div class="card" style="max-width: 320px;">
                <div class="card-body">
                 <h4 class="card-title">Example card title</h4>
                 <p class="card-subtitle fg-3">With a card subtitle</p>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                < a href="#">Card link</a>
            </div>
          </div>
         <?php endfor;?> 
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
  </body>
</html>