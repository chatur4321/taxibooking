<?php 

	session_start();

	session_destroy();

	 header("location:login.php");





?>


 <script type="text/javascript">
    	$(document).ready(function()
{
function disablePrev()
{
window.history.forward()
}
window.onload = disablePrev();

window.onpageshow = function(evt)
{
if (evt.persisted)
{
disableBack() ;
}
}
});
    </script>