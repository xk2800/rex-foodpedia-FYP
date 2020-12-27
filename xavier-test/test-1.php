<?php
//index.php
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Make Stylish Toggles Checkboxes  & Use in Form with PHP Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">
   <h2 align="center">Make Stylish Toggles Checkboxes & Use in Form with PHP Ajax</h2><br /><br />
   <form method="post" id="insert_data">
    
    <!--div class="form-group"-->
     <!--label>Define Gender</label-->
     <!--div id="error" style="color: yellow;"></div-->

     <div class="checkbox">
      <input type="checkbox" name="gender" id="gender" checked />
     </div>
    <!--/div-->
    <input type="text" name="hidden_gender" id="hidden_gender" value="Contactless" />
    <br />
    <input type="submit" name="insert" id="action" class="btn btn-info" value="Insert" />
   </form>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#gender').bootstrapToggle({
  on: 'Contactless',
  off: 'Non-Contactless',
  onstyle: 'success',
  offstyle: 'danger'
 });

 $('#gender').change(function(){
  if($(this).prop('checked'))
  {
   $('#hidden_gender').val('Contactless');
  }
  else
  {
   $('#hidden_gender').val('Non-Contactless');
  }
 });

 /*$('#insert_data').on('submit', function(event){
  event.preventDefault();
  if($('#name').val() == '')
  {
   alert("Please Enter Name");
   return false;
  }
  else
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data){
     if(data == 'done')
     {
      $('#insert_data')[0].reset();
      $('#gender').bootstrapToggle('on');
      alert("Data Inserted");
     }
    }
   });
  }
 });*/

});
</script>

<?php
    if(isset($_POST["insert"])){
        $gender  = $_POST['hidden_gender'];

        echo "<script>document.getElementById('error').innerHTML = ''</script>";
        echo $gender;


    }


?>
