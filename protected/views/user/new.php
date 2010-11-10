<div id="dialog" title="Update">
  <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
  <span id="dg_message"></span>
</div>
<div id="inputs">
<h2>Create Your User Account</h2>
<form id="createUser">
  <table style="width:300px;">
    <tr>
      <td>username:</td>
      <td><input type="text" name="username" /></td>
    </tr><tr>
      <td>password:</td>
      <td><input type="password" name="user_pass" id="pass" /></td>
    </tr><tr>
      <td>Retype:</td>
      <td><input type="password" id="pass_verify" /></td>
    </tr><tr>
      <td>Email:</td>
      <td><input type="text" name="user_email" />(don't worry, we won't sell it to pirates)</td> 
    </tr><tr >
      <td>I have read the <a href="<?php echo $this->createUrl('site/toc'); ?>">Terms and Conditions</a>
            <input type="checkbox" id="toc" /></td>
    </tr>
  </table>
  Are you Human?
                <div>
                <?php $this->widget('CCaptcha'); ?>
                <input type='text' name='verifyCode' />
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
      alert($("#toc").val());
      if($("#pass").val()!=$("#pass_verify").val()){
        $("#dg_message").html('Your passwords do not match');
        return false;
      }
      //if($("#toc").val()!='checked'){
        
      $.post("<?php echo $this.createUrl('user/create'); ?>",
        $("#createUser").serialize(),
        function(data){
          $("#inputs").html('User Created, however, you'll have to verify before you are able to login')
        }
      );
  }) 
</script>
