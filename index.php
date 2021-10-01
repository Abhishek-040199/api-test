<!DOCTYPE html>
<html>
  
<head>
    <title>
        How to pass variables and data
        from PHP to JavaScript?
    </title>
</head>
  
<body style="text-align:center;">
      
    <h1 style="color:green;">GeeksforGeeks</h1>
      
    <h4>
        How to pass variables and data
        from PHP to JavaScript?
    </h4>
     
    <?php
    	include("simple_html_dom.php");

        $html = file_get_html('http://www.google.com/');

        $html->find('title',0)->plaintext;
    ?>
  
    <script type="text/javascript">
        var x = "<?php echo"$html"?>";
        document.write(x);
    </script>
</body>
  
<html>