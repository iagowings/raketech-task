<?php 
    //Fetch data to PHP
    $data = json_decode(file_get_contents('data.json'));
    echo '<pre>';
    //print_r ($data); Checking info
    echo '</pre>';
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE); // remove warning messages
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>

<!-- [0] First -->
<?php foreach($data as $page=>$value): //Foreach for looping thru the data?>
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <div class="col"><img src='<?php print_r($value->brands[0]->logo); ?>'></div>
    <div class="col">
      <p><?php print_r($value->brands[0]->info->rating); ?>
      <p><?php print_r($value->brands[0]->info->bonus); ?></p>
    </div>
    <div class="col"><ul>
      <?php print_r($value->brands[0]->info->features[0].'<br>'.$value->brands[0]->info->features[1].'<br>'.$value->brands[0]->info->features[2]); ?>
    </ul></div>
    <div class="col"><a href='<?php print_r($value->brands[0]->play_url); ?>'><button>PLAY NOW</button></a></div>
  </div>
</div>  

<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <div class="col"><img src='<?php print_r($value->brands[1]->logo); ?>'></div>
    <div class="col">
      <p><?php print_r($value->brands[1]->info->rating); ?>
      <p><?php print_r($value->brands[1]->info->bonus); ?></p>
    </div>
    <div class="col"><ul>
      <?php print_r($value->brands[1]->info->features[0].'<br>'.$value->brands[1]->info->features[1].'<br>'.$value->brands[1]->info->features[2]); ?>
    </ul></div>
    <div class="col"><a href='<?php print_r($value->brands[1]->play_url); ?>'><button>PLAY NOW</button></a></div>
  </div>
</div>

<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <div class="col"><img src='<?php print_r($value->brands[2]->logo); ?>'></div>
    <div class="col">
      <p><?php print_r($value->brands[2]->info->rating); ?>
      <p><?php print_r($value->brands[2]->info->bonus); ?></p>
    </div>
    <div class="col"><ul>
      <?php print_r($value->brands[2]->info->features[0].'<br>'.$value->brands[2]->info->features[1].'<br>'.$value->brands[2]->info->features[2]); ?>
    </ul></div>
    <div class="col"><a href='<?php print_r($value->brands[2]->play_url); ?>'><button>PLAY NOW</button></a></div>
  </div>
</div> 

<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <div class="col"><img src='<?php print_r($value->brands[3]->logo); ?>'></div>
    <div class="col">
      <p><?php print_r($value->brands[3]->info->rating); ?>
      <p><?php print_r($value->brands[3]->info->bonus); ?></p>
    </div>
    <div class="col"><ul>
      <?php print_r($value->brands[3]->info->features[0].'<br>'.$value->brands[3]->info->features[1].'<br>'.$value->brands[3]->info->features[2]); ?></ul>
    </div>
    <div class="col">
      <a href='<?php print_r($value->brands[3]->play_url);?>'>
    <button>PLAY NOW</button></a>
    </div>
  </div>
</div> 

<?php endforeach; ?>

  </body>
</html>
