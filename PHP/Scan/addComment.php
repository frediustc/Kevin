<?php
if (isset($_POST['addCmt'])) {
    $c = Clear($_POST['cmt']);
    if(strlen($c) > 0){
        $ins = $db->prepare('INSERT INTO Comments (comment, topicid, userid, createdat) VALUES(?,?,?, NOW())');
        if ($ins->execute(array($c, $_GET['id'], $_SESSION['id']))) {
            Alert('Comment Added', 'Click on the x button to close the popup', 'success');
        }
        else {
            Alert('Error Insertion', 'Oops something went wrong!');
        }
    }
}
