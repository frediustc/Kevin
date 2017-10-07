<?php

$_current = 'Home';
$page = 'Forum';
$ind = false;
include 'PHP/Include/_head.php';

?>
<div class="banner">
    <div class="h-100 w-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="text-center">
                <h2>Welcome to Woodlands Away</h2>
                <h3 class="mt-3">Holiday company</h3>
                <p><a href="#" type="button" class="btn mt-3 br btn-primary">Explore</a></p>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col-10">
                    <div class="box">
                        <form class="form-inline">
                          <div class="form-group">
                            <label for="exampleInputName2">Name</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail2">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                          </div>
                          <button type="submit" class="btn btn-primary">Send invitation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="Global">

</div>

<?php include Footer($_ind); ?>
