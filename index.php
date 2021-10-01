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
    <script>
    var p1 = 'http://52.66.204.194:8000/github/Enterprise';
    </script>
     
    <?php
    	$domain="<script>document.writeln(p1);</script>";
    	include("simple_html_dom.php");

		$html = file_get_html($domain);

		$final=$html->plaintext;
    ?>
  
    <script type="text/javascript">
        var x = "<?php echo"$final"?>";
        document.write(x);
        console.log(x);
    </script>
</body>
  
<html>