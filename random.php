<html>
    <body>
	    <div id="number"></div>
	    <div id="number1"></div>
	    <div id="number2"></div>
	    <div id="number3"></div>
	    <div id="number4"></div>
	    <div id="number5"></div>
	    <div id="number6"></div>
	    <div id="number7"></div>
    <script>
        document.getElementById('number').innerHTML= Math.round(20.20);  
        document.getElementById('number1').innerHTML= Math.round(20.90);  
        document.getElementById('number2').innerHTML= Math.ceil(40.10);  
        document.getElementById('number3').innerHTML= Math.floor(40.90);  
        document.getElementById('number4').innerHTML= Math.abs(40.910000);  
        document.getElementById('number5').innerHTML= Math.sqrt(81);  
        document.getElementById('number6').innerHTML= Math.min(20,30,100,122);  
        document.getElementById('number7').innerHTML= Math.max(20,30,100,122);  
         
    </script>
	</body>
</html>
