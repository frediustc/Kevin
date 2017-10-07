<?php

$_current = 'Forum';
$page = 'Forum';
$ind = true;
include '../PHP/Include/_head.php';

?>

<div class="container" id="Global">
    <div class="alertMsg">
        <?php include '../PHP/Scan/addTopic.php'; ?>
    </div>
    <nav class="breadcrumb">
      <a class="breadcrumb-item" href="<?php echo $_ind . 'Forum'; ?>">Forum</a>
      <span class="breadcrumb-item active">Add New Topic</span>
    </nav>
    <p><a href="<?php echo $_ind . 'Forum/addTopic.php'; ?>" class="text-capitalize btn btn-primary">Create New Topic</a></p>
    <div class="row">
        <div class="col">
            <h3 class="title text-capitalize box">Create new topic</h3>

            <div class="box">
                <form action="<?php echo $_ind . 'Forum/addTopic.php'; ?>" method="post">
                    <div class="form-group">
                       <label for="title">Title (60 characters)</label>
                       <input type="text" class="form-control" id="title" <?php echo $val ? 'value="' . $_POST["title"] . '"' : '' ; ?> name="title" placeholder="Topic Title" required>
                     </div>
                    <div class="form-group">
                       <label for="description">Description (200 characters)</label>
                       <textarea class="form-control" id="description" name="description" required><?php echo $val ?  $_POST["description"]  : 'Topic Description' ; ?></textarea>
                     </div>
                     <button type="submit" name="addTopic" class="btn btn-success btn-block">Create</button>
                </form>
            </div>
        </div>
        <?php Include $_ind . 'PHP/include/_forumLatest.php'; ?>
    </div>
</div>

<?php include Footer($_ind); ?>
