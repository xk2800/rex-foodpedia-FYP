<!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <script src="jquery.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
            <!-- CDN for jquery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

           <style>  
            .file_drag_area  
            {  
                    width:600px;  
                    height:400px;  
                    border:2px dashed #ccc;  
                    line-height:400px;  
                    text-align:center;  
                    font-size:24px;  
            }  
            .file_drag_over{  
                    color:#000;  
                    border-color:#000;  
            }  

            #uploaded_file > img{

                height: 100%;

            }
           </style>  
      </head>  
      <body>  
           <br />            
           <div class="container" style="width:700px;" align="center">  
                <h3 class="text-center">Drag and drop file upload using JQuery Ajax and PHP</h3><br />  
                <div class="file_drag_area">  
                    Drop Files Here  
                    [Max Size: 3mb per image]
                </div>  

                <div class="form-group" id="process" style="display: flex; justify-content:center">
                    <div class="progress" style="width: 400px">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>

                <br>
                <hr>
                <br>

                <div id="uploaded_file" height="100px" width="100px"></div>  
           </div>  
           <br />  

        </body>  
</html>  
<script>  
$(document).ready(function(){  

    $('.file_drag_area').on('dragover', function(){  
        $(this).addClass('file_drag_over');  
        return false;  
    });  

    $('.file_drag_area').on('dragleave', function(){  
        $(this).removeClass('file_drag_over');  
        return false;  
    });  

    $('.file_drag_area').on('drop', function(e){  
        e.preventDefault();  
        $(this).removeClass('file_drag_over');  
        var formData = new FormData();  
        var files_list = e.originalEvent.dataTransfer.files;  
        //console.log(files_list);  
        for(var i=0; i<files_list.length; i++)  
        {  
            formData.append('file[]', files_list[i]);  
        }  

        var percentage = 0;

        var timer = setInterval(function(){
        percentage = percentage + 20;
        progress_bar_process(percentage, timer);
        }, 100);

        $('.file_drag_area').html("Uploading ... ");  

        $.ajax({  
            url:"uploadMultiple.php",  
            method:"POST",  
            data:formData,  
            contentType:false,  
            cache: false,  
            processData: false,  
            success:function(data){  

                if(data.includes("failed")){

                    $('.file_drag_area').html("Upload Failed");
                    $('#uploaded_file').html(data); 
                    $("#process").css("display", "none");

                }else{

                    $('#uploaded_file').html(data);  
                    $('.file_drag_area').html("Uploaded");
                    $("#process").css("display", "none");
                }

            }  
        })  
    });  

    function progress_bar_process(percentage, timer)
    {
    $('.progress-bar').css('width', percentage + '%');
    if(percentage > 100)
    {
        clearInterval(timer);
        $('#sample_form')[0].reset();
        $('#process').css('display', 'none');
        $('.progress-bar').css('width', '0%');
        $('#save').attr('disabled', false);
        $('#success_message').html("<div class='alert alert-success'>Data Saved</div>");
        setTimeout(function(){
        $('#success_message').html('');
        }, 500);
    }
    }

});  

</script> 