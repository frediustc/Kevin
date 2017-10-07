<?php

$_current = 'Connexion';
$page = 'Connexion';
$ind = true;
include '../PHP/Include/_head.php';

?>

<div class="container h-100" id="main">
    <div class="alertMsg">
        <?php include '../PHP/Scan/connect.php'; ?>
    </div>
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-4">
            <h2 class="text-center">Registration</h2>
            <form method="post" action="./">
                <div class="form-group">
                   <label for="regFn">FullName</label>
                   <input type="text" class="form-control" id="regFn" <?php echo $actu ? 'value="' . $_POST["regFn"] . '"' : '' ; ?> name="regFn" placeholder="FullName" required>
                 </div>

                <div class="row">
                    <div class="form-group col">
                       <label for="regUn">UserName</label>
                       <input type="text" class="form-control" id="regUn" <?php echo $actu ? 'value="' . $_POST["regUn"] . '"' : '' ; ?> name="regUn" placeholder="UserName" required>
                     </div>
                     <div class="form-group col">
                        <label for="regGd">Gender</label>
                        <select class="form-control" id="regGd" <?php echo $actu ? 'value="' . $_POST["regGd"] . '"' : '' ; ?> name="regGd" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                      </div>
                </div>
                <div class="form-group">
                   <label for="regEm">Email</label>
                   <input type="email" class="form-control" id="regEm" <?php echo $actu ? 'value="' . $_POST["regEm"] . '"' : '' ; ?> name="regEm" placeholder="Email" required>
                 </div>
                 <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" <?php echo $actu ? 'value="' . $_POST["address"] . '"' : '' ; ?> name="address" placeholder="Address" required>
                  </div>
                <div class="row">
                    <div class="form-group col">
                       <label for="regPsw">Password</label>
                       <input type="password" class="form-control" id="regPsw" <?php echo $actu ? 'value="' . $_POST["regPsw"] . '"' : '' ; ?> name="regPsw" placeholder="Password" required>
                     </div>
                    <div class="form-group col">
                       <label for="regCPsw">Confirm Password</label>
                       <input type="password" class="form-control" id="regCPsw" <?php echo $actu ? 'value="' . $_POST["regCPsw"] . '"' : '' ; ?> name="regCPsw" placeholder="Confirm Password" required>
                     </div>
                </div>
                 <button type="submit" name="reg" class="btn btn-success btn-block">Register</button>
            </form>
        </div>
        <div class="col-4">
            <h2 class="text-center">Login</h2>
            <form method="post" action="./">
                <div class="form-group">
                   <label for="logUn">UserName</label>
                   <input type="text" class="form-control" id="logUn" <?php echo $actus ? 'value="' . $_POST["logUn"] . '"' : '' ; ?> name="logUn" placeholder="UserName" required>
                 </div>
                <div class="form-group">
                   <label for="logPsw">Password</label>
                   <input type="password" class="form-control" id="logPsw" <?php echo $actus ? 'value="' . $_POST["logPsw"] . '"' : '' ; ?> name="logPsw" placeholder="Password" required>
                 </div>
                 <button type="submit" name="login" class="btn btn-success btn-block">LogIn</button>
            </form>
        </div>
    </div>

</div>

<?php include Footer($_ind); ?>
