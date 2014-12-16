<?php 
  include_once('../path.php');
  /******************************
  With this we include the path 
  to address files and other 
  elements. 
  Update this path and the entire 
  site will be updated.
  
  Always include this file at the 
  top of every page.
  *******************************/

?>

<?php
ob_start();
$path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
$path .= "_/partial/head.html";
include_once($path);
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Order now!",$buffer);
$buffer=str_replace("%DESCRIPTION%","Ordering tarmac repair online has never been so ez…",$buffer);
$buffer=str_replace("%KEYWORDS%","Tarmac repair, cold asphalt, road repair, utility trenches, pothole repair, pot hole repair, asphalt repair, pavement repair, driveway repair, street repair, pavement patch, no mixing, asphalt applications,",$buffer);
echo $buffer;
?>

<body>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/nav-main.html";
  include_once($path);
?>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Order</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $subPath; ?>">Hem</a>
                    </li>
                    <li class="active">Order</li>
                </ol>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
              <h1 class="page-title">ORDERING TARMAC REPAIR ONLINE HAS NEVER BEEN SO EZ…</h1>

              Simply click on the link with the number of EZ Street Asphalt bags you require and enter your credit card or Paypal details. Once payment has been transferred, the order will be processed and you will receive delivery of the goods in up to 5-7 working days straight to your door. If you require further information on the product, please email sales@pelicanroads.ie

              <div class="alert alert-warning spacetop20">DISCLAIMER: If you are unsure as to the correct application for EZ Street, please call us at 00353 86 2531156 or email us at sales@ezstreetasphalt.co.uk for consultation.</div>

            </div>
        </div>
        <!-- /.row -->

        <div class="row">

          <div class="divider-line"></div>

            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo $subPath; ?>_/img/order/pallet-order.jpg">
                
                <h3>8 x 15.8kg bags of tarmac repair</h3>
                <p>Price per bag: £16.00<br>
                <b>Subtotal: £128.00</b><br>
                England delivery charge: £50.00<br>
                Scotland delivery charge: £100.00</p>


                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="margin-top:15px;">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="BBF28PD9BRR5U">
                <table>
                <tbody><tr><td><input type="hidden" name="on0" value="Delivered price:">Delivered price:</td></tr><tr><td><select name="os0">
                  <option value="England">England £178.00 GBP</option>
                  <option value="Scotland">Scotland £228.00 GBP</option>
                </select> </td></tr>
                <tr><td><input type="hidden" name="on1" value="Do you require a tail lift delivery vehicle?">Do you require a tail lift delivery vehicle?</td></tr><tr><td><select name="os1">
                  <option value="- Select Answer -">- Select Answer - </option>
                  <option value="Yes">Yes </option>
                  <option value="No">No </option>
                </select> </td></tr>
                <tr><td><input type="hidden" name="on2" value="Please provide a phone number:">Please provide a phone number:</td></tr><tr><td><input type="text" name="os2" maxlength="200"><br><p><b>A phone number is required for our courier.</b></p></td></tr>
                <tr><td><input type="hidden" name="on3" value="Special delivery instructions:">Special delivery instructions:</td></tr><tr><td><input type="text" name="os3" maxlength="200"></td></tr>
                </tbody></table>
                <input type="hidden" name="currency_code" value="GBP">
                <input  type="submit" class="btn btn-primary btn-lg btn-block spacetop20" border="0" value="ORDER NOW" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>

                <p><i>*No VAT is charged on orders</i></p>

                <div class="divider-line"></div>

            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo $subPath; ?>_/img/order/pallet-order.jpg">
                

                <h3>24 x 15.8kg bags of tarmac repair</h3>
                <p>Price per bag: £16.00<br>
                <b>Subtotal: £372.00</b><br>
                England delivery charge: £50.00<br>
                Scotland delivery charge: £100.00</p>
                        

                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="margin-top:15px;">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="HTNEHYEPVKC86">
                <table>
                <tbody><tr><td><input type="hidden" name="on0" value="Delivered price:">Delivered price:</td></tr><tr><td><select name="os0">
                  <option value="England">England £422.00 GBP</option>
                  <option value="Scotland">Scotland £472.00 GBP</option>
                </select> </td></tr>
                <tr><td><input type="hidden" name="on1" value="Do you require a tail lift delivery vehicle?">Do you require a tail lift delivery vehicle?</td></tr><tr><td><select name="os1">
                  <option value="- Select Answer -">- Select Answer - </option>
                  <option value="Yes">Yes </option>
                  <option value="No">No </option>
                </select> </td></tr>
                <tr><td><input type="hidden" name="on2" value="Please provide a phone number:">Please provide a phone number:</td></tr><tr><td><input type="text" name="os2" maxlength="200"><br><p><b>A phone number is required for our courier.</b></p></td></tr>
                <tr><td><input type="hidden" name="on3" value="Special delivery instructions:">Special delivery instructions:</td></tr><tr><td><input type="text" name="os3" maxlength="200"></td></tr>
                </tbody></table>
                <input type="hidden" name="currency_code" value="GBP">
                <input  type="submit" class="btn btn-primary btn-lg btn-block spacetop20" border="0" value="ORDER NOW" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>

                <p><i>*No VAT is charged on orders</i></p>

                <div class="divider-line"></div>

            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo $subPath; ?>_/img/order/pallet-order.jpg">
               
                <h3>48 x 15.8kg bags of tarmac repair</h3>
                <p>Price per bag: £15.00<br>
                <b>Subtotal: £720.00</b><br>
                England delivery charge: £50.00<br>
                Scotland delivery charge: £100.00</p>
                        
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="margin-top:15px;">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="8WWDS3SVZ82AN">
                <table>
                <tbody><tr><td><input type="hidden" name="on0" value="Delivered price:">Delivered price:</td></tr><tr><td><select name="os0">
                  <option value="England">England £770.00 GBP</option>
                  <option value="Scotland">Scotland £820.00 GBP</option>
                </select> </td></tr>
                <tr><td><input type="hidden" name="on1" value="Do you require a tail lift delivery vehicle?">Do you require a tail lift delivery vehicle?</td></tr><tr><td><select name="os1">
                  <option value="- Select Answer -">- Select Answer - </option>
                  <option value="Yes">Yes </option>
                  <option value="No">No </option>
                </select> </td></tr>
                <tr><td><input type="hidden" name="on2" value="Please provide a phone number:">Please provide a phone number:</td></tr><tr><td><input type="text" name="os2" maxlength="200"><br><p><b>A phone number is required for our courier.</b></p></td></tr>
                <tr><td><input type="hidden" name="on3" value="Special delivery instructions:">Special delivery instructions:</td></tr><tr><td><input type="text" name="os3" maxlength="200"></td></tr>
                </tbody></table>
                <input type="hidden" name="currency_code" value="GBP">
                <input  type="submit" class="btn btn-primary btn-lg btn-block spacetop20" border="0" value="ORDER NOW" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>

                <p><i>*No VAT is charged on orders</i></p>

                <div class="divider-line"></div>

            </div>

        </div>
        <!-- /.row -->

        <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo $subPath; ?>_/img/order/pallet-order.jpg">
                
                <h3>70 x 15.8kg bags of tarmac repair</h3>
                <p>Price per bag: £14.50<br>
                <b>Subtotal: £1015.00</b><br>
                England delivery charge: £50.00<br>
                Scotland delivery charge: £100.00</p>
                        
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="margin-top:15px;">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="9M36GEL6NUVYA">
                <table>
                <tbody><tr><td><input type="hidden" name="on0" value="Delivered price:">Delivered price:</td></tr><tr><td><select name="os0">
                  <option value="England">England £1,065.00 GBP</option>
                  <option value="Scotland">Scotland £1,115.00 GBP</option>
                </select> </td></tr>
                <tr><td><input type="hidden" name="on1" value="Do you require a tail lift delivery vehicle?">Do you require a tail lift delivery vehicle?</td></tr><tr><td><select name="os1">
                  <option value="- Select Answer -">- Select Answer - </option>
                  <option value="Yes">Yes </option>
                  <option value="No">No </option>
                </select> </td></tr>
                <tr><td><input type="hidden" name="on2" value="Please provide a phone number:">Please provide a phone number:</td></tr><tr><td><input type="text" name="os2" maxlength="200"><br><p><b>A phone number is required for our courier.</b></p></td></tr>
                <tr><td><input type="hidden" name="on3" value="Special delivery instructions:">Special delivery instructions:</td></tr><tr><td><input type="text" name="os3" maxlength="200"></td></tr>
                </tbody></table>
                <input type="hidden" name="currency_code" value="GBP">
                <input  type="submit" class="btn btn-primary btn-lg btn-block spacetop20" border="0" value="ORDER NOW" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>

                <p><i>*No VAT is charged on orders</i></p>

                <div class="divider-line"></div>

            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo $subPath; ?>_/img/order/bulk-sack-order.jpg">
                
                <h3>1 Ton Bulk Sack of tarmac repair</h3>
                <p>Price per sack: £333.00<br>
                England delivery charge: £50.00<br>
                Scotland delivery charge: £100.00</p><br>
                        
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="margin-top:15px;">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="FVQVRWH863CC6">
                <table>
                <tbody><tr><td><input type="hidden" name="on0" value="Delivered price:">Delivered price:</td></tr><tr><td><select name="os0">
                  <option value="England">England £383.00 GBP</option>
                  <option value="Scotland">Scotland £433.00 GBP</option>
                </select> </td></tr>
                <tr><td><input type="hidden" name="on1" value="Do you require a tail lift delivery vehicle?">Do you require a tail lift delivery vehicle?</td></tr><tr><td><select name="os1">
                  <option value="- Select Answer -">- Select Answer - </option>
                  <option value="Yes">Yes </option>
                  <option value="No">No </option>
                </select> </td></tr>
                <tr><td><input type="hidden" name="on2" value="Please provide a phone number:">Please provide a phone number:</td></tr><tr><td><input type="text" name="os2" maxlength="200"><br><p><b>A phone number is required for our courier.</b></p></td></tr>
                <tr><td><input type="hidden" name="on3" value="Special delivery instructions:">Special delivery instructions:</td></tr><tr><td><input type="text" name="os3" maxlength="200"></td></tr>
                </tbody></table>
                <input type="hidden" name="currency_code" value="GBP">
                <input  type="submit" class="btn btn-primary btn-lg btn-block spacetop20" border="0" value="ORDER NOW" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>

                <p><i>*No VAT is charged on orders</i></p>

                <div class="divider-line"></div>

            </div>



        </div>
        <!-- /.row -->

        





    </div>
    <!-- /.container -->

<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/footer.html";
  include_once($path);
?>
