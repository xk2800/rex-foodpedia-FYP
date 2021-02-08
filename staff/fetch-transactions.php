<?php  

if(isset($_POST["receipt_id"]))  
{  
        $output = '';  
        include "../db-connect.php" ;
        $query = "SELECT * FROM transaction WHERE receipt_id = '".$_POST["receipt_id"]."'";  
        $result = mysqli_query($connect, $query);  
      //$row = mysqli_fetch_array($result);

        
        $output .= '  
        <div class="table-responsive">  
            <table class="table table-bordered">';  
        while($row = mysqli_fetch_array($result))  
        {  

            if(($row ["payment_method"]) == '0'){
                $paymentmethod = "Cash On Demand(COD)";

            }else if(($row ["payment_method"]) == '1'){
                $paymentmethod = "Credit/Debit Card";

            }else if(($row ["payment_method"]) == '2'){
                $paymentmethod = "Online Banking";

            }else{
                $paymentmethod = "No Payment Found In System";
            }

            if(($row["address"]) == NULL){
                $address_out = "Self Pickup";
            }else{
                $address_out = $row["address"];
            }

            $db_time        = $row["payment_time"];
            $output_date    = date('d M Y, H:i:s', strtotime(str_replace('-','/', $db_time)));   //remove/replace symbols from string in db

            $receipt_date           = $row["date"];
            $receipt_date_output    = date('d M Y, H:i:s', strtotime(str_replace('-','/', $receipt_date)));

            $output .= '  
                <tr>  
                    <td width="30%"><label>Customer Email</label></td>  
                    <td width="70%">'.$row["email"].'</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Contact Type</label></td>  
                    <td width="70%">'.$row["contactornot"].'</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Send Type</label></td>  
                    <td width="70%">'.$row["send_type"].'</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Receipt ID</label></td>  
                    <td width="70%">'.$row["receipt_id"].'</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Receipt Date</label></td>  
                    <td width="70%">'.$receipt_date_output.'</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Address(If applicable)</label></td>  
                    <td width="70%">'.$address_out.'</td>  
                </tr>
                <tr>  
                    <td width="30%"><label>Subtotal</label></td>  
                    <td width="70%">RM '.$row["subtotal"].'</td>  
                </tr>
                <tr>  
                    <td width="30%"><label>Discount</label></td>  
                    <td width="70%">RM '.$row["discount"].'</td>  
                </tr>
                <tr>  
                    <td width="30%"><label>Total</label></td>  
                    <td width="70%">RM '.$row["total"].'</td>  
                </tr>
                <tr>  
                    <td width="30%"><label>Payment Method</label></td>  
                    <td width="70%">'.$paymentmethod.'</td>  
                </tr>
                <tr>  
                    <td width="30%"><label>Payment Time</label></td>  
                    <td width="70%">'.$output_date.'</td>  
                </tr>
            ';  
        }  
        $output .= '  
            </table>  
        </div>  
        ';  

        echo $output;  
}  
?>