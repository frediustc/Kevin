<?php

//links accessfor createMenu
$links = ['', 'Plans'];
$linksTxt = ['Home', 'Plans'];
//pages access
$_page = $page ? $page : 'WebsiteName'; //the title of the page
$_ind = $ind ? '../' : './'; //the indentation base on the directory

//function initializer
include $_ind . 'PHP/Include/func.php';
include $_ind . 'PHP/Include/_db.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> <?php echo $_page; ?> </title>

    <link rel="stylesheet" href="<?php echo $_ind; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/fullcalendar.min.css">
    <?php if (isset($orders)): ?>
        <link rel="stylesheet" href="<?php echo $_ind; ?>css/jquery-ui.min.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/style.css">
  </head>
  <body <?php echo $_page === 'Connexion' ? 'class="log"' : '' ; ?>>

<?php

if(isset($_SESSION['id'])){

    array_push($links, 'Forum');
    array_push($linksTxt, 'Forum');
    createMenu($_ind, $links, $linksTxt, $_current, true);
}
else {
     array_push($links, 'Connexion');
     array_push($linksTxt, 'Connexion');
     createMenu($_ind, $links, $linksTxt, $_current);
}

?>
