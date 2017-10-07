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

$limit = 5;
$offset = ($_GET['id'] <= 1) ? 0 : (($_GET['id'] - 1) * $limit);

?>

<div class="container" id="Global">
    <nav class="breadcrumb">
      <span class="breadcrumb-item active">Forum</span>
    </nav>
    <p><a href="<?php echo $_ind . 'Forum/addTopic.php'; ?>" class="text-capitalize btn btn-primary">Create New Topic</a></p>
    <div class="row">
        <div class="col">
            <h3 class="title box">Topics</h3>
            <?php
            $sel = $db->prepare('SELECT * FROM topics ORDER BY id DESC LIMIT ' .$limit. ' OFFSET ' .$offset );
            $sel->execute();
            while ($_sel = $sel->fetch()) {
             ?>

            <div class="box topic">
                <p><strong class="topictitle"><?php echo $_sel['title'] ?></strong><span class="float-right time"><?php echo $_sel['createdat'] ?></span></p>
                <p><?php echo $_sel['description'] ?></p>
                <ul class="list-unstyled details mb-0">
                    <li class="d-inline mr-4 rounded">Comments : 300</li>
                    <li class="float-right"><a href="<?php echo $_ind . 'Forum/Topic.php?id=' . $_sel['id'] ; ?>" class="btn btn-success btn-sm">Open Topic</a></li>
                </ul>
            </div>

            <?php } ?>

            <nav aria-label="Page navigation example">
              <ul class="pagination">
                  <?php
                  $c = $db->prepare('SELECT COUNT(*) AS c from Topics');
                  $c->execute();
                  $_c = $c->fetch();

                  $prev = ($_GET['id'] <= 1) ? 1 : ($_GET['id'] - 1);
                  $next = (($_c['c'] / 5) > $_GET['id']) ? ($_GET['id'] + 1)  : $_GET['id'];
                   ?>
                <li class="page-item"><a class="page-link" href="<?php echo $_ind . 'Forum/?id=' . $prev; ?>">Previous</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo $_ind . 'Forum/?id=' . $next; ?>">Next</a></li>
              </ul>
            </nav>

        </div>
        <?php Include $_ind . 'PHP/include/_forumLatest.php'; ?>
    </div>
</div>

<?php include Footer($_ind); ?>
