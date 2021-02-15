<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner Info</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,800;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
    html, body{font-family: 'Raleway', sans-serif;}
    </style>
</head>
<body>
<div class="container pt-5">
<div class="border p-2">
<h3 class="display-3"><small>Partner: </small><?=$partnerName;?></h3>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Partners in structure</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach($leftSide as $item):
if($item->ID == $globalId){}
else{
?>

    <tr>
      <th scope="row"><?=$item->ID;?> </th>
      <td><a href="/mlm/partner/<?=$item->ID;?>" class="text-decoration-none"><?=$item->name;?> <?=$item->surname;?></a></td>
      <td><button class="btn btn-sm btn-info btn-leftSide" data-id="<?=$item->ID;?>"><span class="text-white">left</span></button></td>
    </tr>

<?php
}
 endforeach;?>
  </tbody>
</table>
</div>  
</body>
</html>