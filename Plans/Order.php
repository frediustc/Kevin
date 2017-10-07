<?php

$_current = 'Plans';
$page = 'Plans';
$ind = true;
$orders = true;
include '../PHP/Include/_head.php';

?>

<div class="container" id="Global">
    <nav class="breadcrumb">
      <a class="breadcrumb-item" href="<?php echo $_ind . 'Plans'; ?>">Plans</a>
      <span class="breadcrumb-item active">Order</span>
    </nav>
    <div class="row rooms">
        <div class="col-8 mb-5">
            <div id='calendar'></div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="box">
                        <h2>Create Order</h2>
                        <form class="modal-form" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Ex: Reception" class="form-control name" required>
                            </div>
                            <div class="form-group">
                                <label>Coming Date</label>
                                <input type="text" name="name" placeholder="Ex: 2017-10-20" class="form-control sd" required>
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control opt" name="opt" required>
                                    <option value="4">Friday to Monday (4 Days)</option>
                                    <option value="5">Monday to Friday (5 Days)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Create</button>
                        </form>
                        <div class="">

                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col ">
                    <div class="box blue">
                        <p><strong class="text-capitalize">description</strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad .</p>
                        <h4>300$ per day</h4>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col text-capitalize">
                    <div class="box grey">
                        <h5>Villa on hollywood Boulevard</h5>
                        <div class="row option">
                          <div class="col">
                              Bedroom : 3
                          </div>
                          <div class="col">
                              Bathroom : 3
                          </div>
                          <div class="w-100"></div>
                          <div class="col">
                              Living Room: 1
                          </div>
                          <div class="col">
                              Area: 4300 <sup>SQ</sup>FT
                          </div>
                          <div class="w-100"></div>
                          <div class="col">
                              free access swimming pool: yes
                          </div>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <div class="box p-0">
                        <img src="../media/room2.jpeg" alt="images" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include Footer($_ind); ?>
