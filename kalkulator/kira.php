<html>
     <head>
	     <title>Calculator</title>
	 </head>
     <body style='background:cyan;'>
	     <center><br>
		 <h1><B><font color='black' style='font-size:50px;'>Electronic Calculator</font></B></h1>
		  <br>
		  
		   <div style='width:261px; background:fff8dc;'>
		  <form name ='calculator'>
		     <input name ='display' placeholder='0'  />
		     <br>
			 <input type ='button'  value="7" onClick ="document.calculator.display.value +='7'"  />
			 <input type ='button' value="8" onClick ="document.calculator.display.value +='8'" >
		     <input type ='button' value='9' onClick ='document.calculator.display.value +="9"' > 
		     <input type ='button' value='+' onClick ='btnadd()' />
		     <br>
			 <input type ='button'  value="4" onClick ="document.calculator.display.value +='4'"  />
			 <input type ='button' value="5" onClick ="document.calculator.display.value +='5'" >
		     <input type ='button' value='6' onClick ='document.calculator.display.value +="6"'> 
		     <input type ='button' value='-' onClick ='btnsub()' />
			 <br>
			 <input type ='button'  value="1" onClick ="document.calculator.display.value +='1'" />
			 <input type ='button' value="2" onClick ="document.calculator.display.value +='2'">
		     <input type ='button' value='3' onClick ='document.calculator.display.value +="3"' > 
		     <input type ='button' value='*' onClick ='btnmult()' />
		     <br>
			  <input type ='button' value="c" onClick ='btnclear()' >
			 <input type ='button'  value="0" onClick ="document.calculator.display.value +='0'"  />
		      
		     
			 <input type ='button'  value="=" onClick ="document.calculator.display.value =eval(document.calculator.display.value)" />
			 <input type ='button' value='/' onClick ='btndiv()' />
		  </form>
		  </div>
	     </center>
		 <script>
		     function btnadd() {
			  document.calculator.display.value +='+';
			  document.calculator.display.style.textAlign ='right';
			 }
			 function btnsub() {
			     document.calculator.display.value +='-';
				 document.calculator.display.style.textAlign='right';
			 }
			 
			 function btnmult() {
			     document.calculator.display.value +='*';
				 document.calculator.display.style.textAlign='right';
			 }
			
			 function btndiv() {
			     document.calculator.display.value +='/';
				 document.calculator.display.style.textAlign ='right';
			 }
			 function btnclear() {
			     document.calculator.display.value ="";
				 document.calculator.display.syle.textAlign ="right";
			 }
		 </script>
		 
		  <td align="center"><button><a href="papar.php">SUBMIT</a></button></td>
		  <td align="center"><button><a href="logout.php">LOGOUT</a></button></td><br>
	 </body>
</html>