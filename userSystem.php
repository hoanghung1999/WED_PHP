<?php
session_start();
include "admin.php";
?>
<div id="content">
    <div class="container">
        <div class="jumbotron">
            <div class="card-header">
            <h2 align="center">User</h2><br/>

        </div>
            <div class="form-group">
                <div class="input-group">
                <button type="submit" class="btn-success" style="width: 6%; padding: 5px;">
                <i class="fas fa-search"></i>
                    </button>
                    <input type="text" name="search_text" id="search_text" placeholder="User hệ thống" class="form-control" style="margin-left:5px;" />
                </div>
            </div>
            <br />
            <div id="result"></div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function(){

 load_data();
 function load_data(query)
 {
  $.ajax({
   url:"findUser.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>