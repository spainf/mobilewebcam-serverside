<?php
require 'common.php';
getparams();
getdirs();
getfiles();
?>

<html>
<body>

<?php
navigation_top();
?>

    
<img src="current.jpg" name="refresh"> 
      <script language="JavaScript" type="text/javascript"> 
      <!-- 
      image = "current.jpg" //name of the image 
      function Reload() { 
      tmp = new Date(); 
      tmp = "?"+tmp.getTime() 
      document.images["refresh"].src = image+tmp 
      setTimeout("Reload()",1000) 
      } 
      Reload(); 
      // --> 
      </script>
      
      
</body>
</html>