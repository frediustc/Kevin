<?php

$_current = 'Forum';
$page = 'Forum';
$ind = true;
include '../PHP/Include/_head.php';


if(!isset($_GET['id'])){
    header('location: ./?id=1');
}
else {
    if(!preg_match('/[0-9]/', $_GET['id'])){
        header('location: ./?id=1');
    }
    if ($_GET['id'] < 1) {
        header('location: ./?id=1');
    }
}

$t = $db->prepare('SELECT * FROM topics WHERE id = ?');
$t->execute(array($_GET['id']));
$_t = $t->fetch();


?>

<div class="container" id="Global">
    <div class="alertMsg">
        <?php include '../PHP/Scan/addComment.php'; ?>
    </div>
    <nav class="breadcrumb">
      <a class="breadcrumb-item" href="<?php echo $_ind . 'Forum'; ?>">Forum</a>
      <span class="breadcrumb-item active">Post</span>
    </nav>
    <div class="row">
        <div class="col">
            <h3 class="title box">Title: <?php echo $_t['title']; ?> <br> <small>Description: <?php echo $_t['description']; ?></small></h3>


            <div class="msgs row">
                <?php
                $sel = $db->prepare('SELECT * FROM Comments WHERE topicid = ? ORDER BY id LIMIT 20');
                $sel->execute(array($_GET['id']));
                while ($_sel = $sel->fetch()) {
                    $is = $_SESSION['id'] == $_sel['userid'] ? 'me' : 'his';
                    $ta = $is == 'me' ? 'text-right' : '';
                    $f = $is == 'me' ? 'float-left' : 'float-right';
                    $p = $is == 'me' ? 'push-2' : '';

                    $u = $db->prepare('SELECT username FROM users WHERE id = ?');
                    $u->execute(array($_sel['userid']));
                    $_u = $u->fetch();

                 ?>
                <div class="col-10 <?php echo $p; ?>">
                    <div class="box <?php echo $is; ?> <?php echo $ta; ?>">
                        <p class="mb-0">
                            <strong class="text-capitalize topictitle"><?php echo $_u['username']; ?></strong>
                            <span class="<?php echo $f; ?> time"><?php echo $_sel['createdat']; ?></span>
                        </p>
                        <p class="msg"><?php echo $_sel['comment']; ?></p>
                    </div>
                </div>
            <?php } ?>
            </div>

            <form class="box" method="post" action="<?php echo $_ind . 'Forum/Topic.php?id=' . $_GET['id']; ?>">
                <div class="form-group mb-2">
                  <textarea name="cmt" rows="2" class="form-control" required="required">Your Comment</textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="addCmt">Add Comment</button>
            </form>

        </div>
        <?php Include $_ind . 'PHP/include/_forumLatest.php'; ?>
    </div>
</div>

<?php include Footer($_ind); ?>
