<?php
$val = false;
if (isset($_POST['addTopic'])) {
    $val = true;
    $t = Clear($_POST["title"]);
    $d = Clear($_POST["description"]);
    $ok = true;

    if (!preg_match('/[a-zA-Z0-9 ]{1,60}/',$t)) {
        Alert('Wrong Title', 'Must be letters only between 1 and 60 characters!');
        $ok = false;
    }
    if (!preg_match('/[a-zA-Z0-9 ]{1,200}/',$d)) {
        Alert('Wrong Description', 'Must be letters only between 1 and 200 characters!');
        $ok = false;
    }
    if($ok){
        $ins = $db->prepare('INSERT INTO Topics(title, description, createdat, userid) VALUES(?,?, NOW(), ?)');
        if($ins->execute(array($t, $d, $_SESSION['id']))){
            Alert('Topic Added', 'click <a href="#" class="alert-link">here</a> to see your list of topic!', 'success');
            $val = false;
        }
        else {
            Alert('Error Insertion', 'Oops something went wrong!');
        }
    }
}
