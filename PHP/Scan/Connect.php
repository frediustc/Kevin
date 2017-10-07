<?php //page that takes care about the registration and the login script
$actu = $actus = false;
if(isset($_POST['login'])){ //if the users want to log in
    $actus = true;
    $un = Clear($_POST['logUn']); //username
    $pw = Clear($_POST['logPsw']); //password

    $sel = $db->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
    $sel->execute(array($un, sha1($pw)));
    $_sel = $sel->fetch();
    if(!empty($_sel)){
        Alert('Successfully Registered', 'You will be redirected to your account!', 'success');
        $_SESSION['id'] = $_sel['id'];
        $_SESSION['un'] = $_sel['username'];
        $_SESSION['fn'] = $_sel['fullname'];
        header('refresh:4;url=../');
    }else {
        Alert('Data Do not Match', 'Username or/and Password is/are wrong!');
    }
}

if(isset($_POST['reg'])){ //if the users want to register
    $actu = true;
    $fn = Clear($_POST['regFn']); //full name
    $un = Clear($_POST['regUn']); //username
    $gd = Clear($_POST['regGd']); //gender
    $em = Clear($_POST['regEm']); //email
    $pw = Clear($_POST['regPsw']); //password
    $cf = Clear($_POST['regCPsw']); //confirm
    $ad = Clear($_POST['address']); //address
    $ok = true;

    $cun = $db->prepare('SELECT COUNT(*) AS cun FROM users WHERE username = ?');
    $cun->execute(array($un));
    $_cun = $cun->fetch();

    $cem = $db->prepare('SELECT COUNT(*) AS cem FROM users WHERE email = ?');
    $cem->execute(array($em));
    $_cem = $cem->fetch();

    if (!preg_match('/[a-zA-Z ]{5,100}/',$fn)) {
        Alert('Wrong FullName', 'Must be letters only between 5 and 100 characters!');
        $ok = false;
    }
    if (!preg_match('/[a-zA-Z0-9\, ]{5,100}/',$ad)) {
        Alert('Wrong Address', 'Must be between 5 and 100 characters!');
        $ok = false;
    }
    if (!preg_match('/[a-zA-Z ]{4,32}/',$un)) {
        Alert('Wrong UserName', 'Must be letters only between 4 and 32 characters!');
        $ok = false;
    }
    if ($_cun['cun'] > 0) {
        Alert('UserName Exist', $un . ' already exists!');
        $ok = false;
    }
    if ($gd !== 'Male' && $gd !== 'Female') {
        Alert('Wrong Gender', 'Unknown gender!');
        $ok = false;
    }
    if (!preg_match('/(^[a-zA-Z_0-9.+-]+)@([a-zA-Z_0-9-]+).([a-zA-Z]{2,4}$)/',$em)) {
        Alert('Bad Email Format', 'required format is exmaple@domain.com!');
        $ok = false;
    }
    if ($_cem['cem'] > 0) {
        Alert('Email Exist', $em . ' already exists!');
        $ok = false;
    }
    if (!preg_match('/[a-zA-Z0-9]{8,32}/',$pw)) {
        Alert('Bad Password', 'Must be alphanumeric only between 8 and 32 characters!');
        $ok = false;
    }
    if ($pw !== $cf) {
        Alert('Password do not match', 'Password and confirm must match!');
        $ok = false;
    }

    if ($ok) {

        $ins = $db->prepare('INSERT INTO Users(username, fullname, email, password, gender, postaladdress, registrationdate, usertypeid) VALUES(?,?,?,?,?,?, NOW(), 1)');
        if ($ins->execute(array($un, $fn, $em, sha1($pw), $gd, $ad))) {
            Alert('Successfully Registered', 'You will be redirected to your account!', 'success');
            $_SESSION['id'] = $db->lastInsertId();
            $_SESSION['un'] = $un;
            $_SESSION['fn'] = $fn;
            header('refresh:4;url=../');
        }
        else {
            Alert('Error data insertion', 'Something went wrong!');
        }
    }
}
