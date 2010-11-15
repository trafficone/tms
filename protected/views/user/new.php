<div id="dialog" title="Update">
  <span class="ui-icon ui-icon-circle-check" style="float:right; margin:0 7px 50px 0;"></span>
  <span id="dg_message"></span>
</div>
<div id="inputs">
<h2>Create Your User Account</h2>
<form id="createUser">
  <table style="width:300px;">
    <tr>
      <td>Username:</td>
      <td><input type="text" name="username" /></td>
    </tr><tr>
      <td>Password:</td>
      <td><input type="password" name="user_pass" id="pass" /></td>
    </tr><tr>
      <td>Retype:</td>
      <td><input type="password" id="pass_verify" /></td>
    </tr><tr>
      <td>Email:</td>
      <td>
        <input type="text" name="user_email" />
        <p>(don't worry, we won't sell it to pirates)</p>
      </td> 
    </tr><tr>
      <td colspan="2">I have read the <a href="<?php echo $this->createUrl('site/toc'); ?>">Terms and Conditions</a>
            <input type="checkbox" id="toc" /></td>
    </tr>
  </table>
  Are you Human? Answer this question:
                <div>
                <span id="captcha"></span><br />
                <input type="text" name="verify_code" />
                </div>
                <div class="hint">Please enter the letters as they are shown in the image above.
                <br/>Letters are not case-sensitive.</div>
  <br />
  <button id='submit'>Create User</button>
</form>
</div>
<script language="javascript">
  $(document).ready( function() {
    $("#submit").button();
    $("#captcha").load("<?php echo $this->createUrl('captcha/getRiddle');?>");
    $("#dialog").dialog({
      autoOpen:false,
      modal:true,
      buttons: { 
        Ok: function() {
          $(this).dialog("close");
        }
      }
    });
    $('#submit').click( function() {
      //verify passwords match
      if($("#pass").val()!=$("#pass_verify").val()){
        $("#dg_message").html('Your passwords do not match');
        $("#dialog").dialog("open");
        return false;
      } else if(!$("#toc").is(':checked')){
    	$("#dg_message").html('Please read and agree to the Terms and Conditions');
        $("#dialog").dialog("open");
        return false;
      } else {
    	  $("#pass").val($.md5('rocksalt'+$("#pass").val()));
        $.post("<?php echo $this->createUrl('user/new'); ?>",
          $("#createUser").serialize(),
          function(data){
        	$("#pass").val("");
        	$("#pass_verify").val("");
            if(data=="User Saved"){
              $("#inputs").html("User Created, however, you'll have to verify before you are able to login");
            } else if(data=="User not Verified") {
              $("#dg_message").html('Verification Failed');
              $("#dialog").dialog("open");
            } else {
            	$("#dg_message").html('User Creation Failed');
                $("#dialog").dialog("open");
            }
          }
        );
        return false;
      }
  }); 
});
</script>
