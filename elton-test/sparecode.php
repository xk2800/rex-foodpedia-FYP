            <!-- testing *session got issue-->
            <?php
                //session is carried from staff/index.php
                //$staff_username = $_SESSION['staffuname'];

                //echo $staff_username;

                //$query_select_menu_detail = mysqli_query($connect, "SELECT * FROM menu WHERE username = '$staff_username' ");
                //$row = mysqli_fetch_assoc($query_select_menu_detail);

                //$show_data = $row["username"];

                //echo $show_data;
            ?>    

            <!-- testing *session got issue -->
            <?php 
                //if($staff_username) {
                   // echo "true";
                //} else {
                    //echo "false";
                //}     
            ?>


  <!-- will need to adjust it to be at the center of the screen after backend is setup -->
  <!-- <div class="row mb-4 mt-5">
        <div class="form-group col-md-9">
            <input id="exampleFormControlInput5" type="email" placeholder="Kindly insert the user email that would like to add points" class="form-control form-control-underlined">
        </div>
        <div class="form-group col-md-3">
            <button type="submit" class="btn btn-primary rounded-pill btn-block shadow-sm">Search</button>
        </div>
    </div> -->

    
    <!--  ref : https://getbootstrap.com/docs/4.0/components/pagination/
    <nav aria-label="Loyalty Points Navigator" style="margin: 30px 0px 30px 0px;">
                    <ul class="pagination">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            -->

<!--$query_menu_detail = mysqli_query($connect, "INSERT INTO menu (username, dish_name, price, description, stock_qty) VALUES ('$staff_username','$var_dish_menu_detail','$var_price_menu_detail', 
                                                                                       '$var_desc_menu_detail','$var_qty_menu_detail') ");-->

                           <!-- <th scope="row"><?php $db_dish_id ?></th>
                            <td><?php $db_dish_name ?></td>
                            <td rowspan=""><img src="../img/dummy.jpg" alt="Girl in a jacket" style="width:20em; height:10em"></td>
                            <td><?php $db_dish_desc ?></td>
                            <td><?php $db_dish_qty ?></td>
                            <td><?php $db_dish_price ?></td> -->

 
 <!--

                            <div class="form-group">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                &ensp;
                                <label for="card-address-register">Address : </label>
                                <input type="text" class="form-control" id="card-address-register" placeholder="1234 Main St" name="address1">
                            </div>

                            <div class="form-group">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                &ensp;
                                <label for="card-address-2-register">Address 2 : </label>
                                <input type="text" class="form-control" id="card-address-2-register" placeholder="Apartment, studio, or floor" name="address2">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <i class="fa fa-building" aria-hidden="true"></i>
                                    <label for="card-city-register">City : </label>
                                    <input type="text" class="form-control" id="card-city-register" name="city">
                                </div>
                                <div class="form-group col-md-4">
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                    &ensp;
                                    <label for="card-state-register">State : </label>
                                    <select id="card-state-register" class="form-control" name="state">
                                        <option selected>Choose...</option>
                                            <option>Johor</option> <option>Kedah</option> <option>Kelantan</option> <option>Malacca</option> <option>Negeri Sembilan</option>
                                            <option>Pahang</option> <option>Penang</option> <option>Perak</option> <option>Perlis</option> <option>Sabah</option>
                                            <option>Sarawak</option> <option>Selangor</option> <option>Terengganu</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="card-zip-register">Zip : </label>
                                        <input type="text" class="form-control" id="card-zip-register" name="zip">
                                </div>
                            </div>
                        </div>

-->


<!--

                <div class="card p-3 mb-5 rounded mx-auto" id="card-whole-profile">
                    <div class="card-header" id="card-input-title">
                        Manage Payment Method
                    </div>
                    <div class="card-body">
                        <form>
                            <div id="card-input-profile">  
                                <div class="form-group pl-5 pb-3">
                                    <i class="fa fa-university" aria-hidden="true"></i>
                                    &ensp;
                                    <label for="card-payment-type-profile">Payment Method </label>
                                    <div class="form-row">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" checked>&ensp;Visa</label>
                                        </div>
                                        <div class="radio pl-5">
                                            <label><input type="radio" name="optradio">&ensp;MasterCard</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group pl-5 pb-3 w-75">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                    &nbsp;
                                    <label for="card-payment-profile">Card Number</label>
                                    <input type="tel" class="form-control" id="card-payment-profile">
                                </div>
                            </div>
                            
                            <div id="card-profile-button">
                                <div class="text-center">
                                    <center><a href="https://www.youtube.com/?gl=US" class="btn btn-dark btn-block w-25 p-1">Save Payment<br/>Method Details</a></center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

-->


// if(!empty($var_dish_menu_detail) && !empty($var_desc_menu_detail) && !empty($var_qty_menu_detail) && !empty($var_price_menu_detail)&& !empty($var_dish_menu_type)) {
//} else {
//echo "Please fill in all the inputs!";
//}
