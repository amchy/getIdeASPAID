<script>
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;
document.cookie = "myJavascriptVar = " + dateTime;
</script>


<?php
$dt = new DateTime('now');
$_SESSION['date'] = dateTime;
	require_once("header.php");
?>
	<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="15%">&nbsp;</td>
		<td>
		
		<form class="needs-validation" novalidate action="checkEmail.php" method="get">
  
    <div class="col-md-12 mb-3">
      <label for="validationTooltipUsername" style="color:#FF0004">Please enter registered email address to reset password</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">Email</span>
        </div>
        <input type="text" class="form-control" name="email" id="validationTooltipUsername" placeholder="you@you.com" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>
<button class="btn btn-primary" type="submit">Get Code</button>
</form>
		
		
		
		</td>
		<td width="15%">&nbsp;</td>
    </tr>
  </tbody>
</table>

	
<?php
	require_once("footer.php");
?>