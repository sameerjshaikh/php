<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>


<div class="container">
     <div id ="loaddata"><h2>this is going to change </h2></div>
     <button class="btn" id="btnclick">CLICk</button>
 <div>
<script type="text/javascript">

$(document).ready(function(){
    $('#btnclick').click(function(){
        $('#loaddata').load('PhpProject1/index.php',function(){

           alert("this is done");

        });
    });
});

</script>




</body>
</html>