<?php

function createMenu($ind, $link = [], $txt = [], $cur = '', $bool = false){
    if ((count($link) === count($txt)) && strlen($cur) > 0) {

        echo '
        <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse" id="mainMenu">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">Woodlands Away</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">';

        for ($i=0, $l = count($link); $i < $l; $i++) {

            $act = $txt[$i] === $cur ? ' active' : '';
            $aria = $txt[$i] === $cur ? ' <span class="sr-only">(current)</span>' : '';

            echo '
            <li class="nav-item'. $act .'">
                <a class="nav-link" href="' . $ind . $link[$i] .'">'. $txt[$i] . $aria . '</a>
            </li>
            ';
        }
        echo '
        </ul>';
        if($bool){
            echo '<div class="dropdown">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                '.$_SESSION['fn'].' ('.$_SESSION['un'].')
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Account</a>';
                if($_SESSION['id'] == 1){
                    echo '
                    <a class="dropdown-item" href="#">Add Plan</a>
                    <a class="dropdown-item" href="#">View Plans</a>
                    <a class="dropdown-item" href="#">View Orders</a>
                    <a class="dropdown-item" href="#">View Users</a>
                    <a class="dropdown-item" href="#">Add Cabin</a>
                    <a class="dropdown-item" href="#">View Cabins</a>';
                }
                echo '<a class="dropdown-item" href="'.$ind.'LogOut">LogOut</a>
              </div>
            </div>';
        }
        echo'
      </div>
    </nav>';
    }
    else {
        Die('Menu Error: Links and texts do not match');
    }

}

function Footer($ind){
    return $ind . 'PHP/Include/_footer.php';
}

function FuncTest(){
    return true;
}

function Alert($tle = 'Error', $msg = 'Unknown Error!!!', $lvl = 'danger'){
    echo '
    <div class="alert alert-'. $lvl .' alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong>'. $tle .' : </strong>'. $msg .'
    </div>';
}

function Clear($a){
    return htmlspecialchars(trim(stripslashes($a)));
}
