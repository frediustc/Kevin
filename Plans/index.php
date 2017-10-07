<?php

$_current = 'Plans';
$page = 'Plans';
$ind = true;
include '../PHP/Include/_head.php';



?>

<div class="container" id="Global">
    <nav class="breadcrumb">
      <span class="breadcrumb-item active">Plans</span>
    </nav>
    <h4>Cabin Type</h4>
    <div class="row">

      <div class="col">
          <div id="accordion" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header box mb-0" role="tab" id="headingOne">
              <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Luxury
                </a>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
              <div class="card-block">
                  <div class="row rooms">
                      <div class="col pr-0 pb-0 ">
                          <img src="../media/room2.jpeg" alt="" class="w-100">
                      </div>
                      <div class="col grey pt-3 pb-3 text-capitalize">
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
                      <div class="col blue pt-3">
                          <p><strong class="text-capitalize">description</strong></p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad .</p>
                          <h4>300$ per day</h4>
                          <a href="./Order.php?id=1" class="btn btn-primary rounded-0">Order Now</a>
                      </div>
                  </div>
                  <div class="row rooms">
                      <div class="col pr-0 pb-0 ">
                          <img src="../media/room1.jpeg" alt="" class="w-100">
                      </div>
                      <div class="col blue pt-3 pb-3 text-capitalize">
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
                                Garage: yes
                            </div>
                          </div>
                      </div>
                      <div class="col grey pt-3">
                          <p><strong class="text-capitalize">description</strong></p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad .</p>
                          <h4>300$ per day</h4>
                          <a href="./Order.php?id=2" class="btn btn-primary rounded-0">Order Now</a>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header box mb-0" role="tab" id="headingTwo">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Contemporary
                </a>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header box mb-0" role="tab" id="headingThree">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Original
                </a>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</div>

<?php include Footer($_ind); ?>
