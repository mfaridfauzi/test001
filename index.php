
<script type="text/javascript">
	function addFields(){
			var number = document.getElementById("member").value;
			var container = document.getElementById("container");
			while (container.hasChildNodes()) {
				container.removeChild(container.lastChild);
			}
			for (i=0;i<number;i++){
				container.appendChild( document.createTextNode( '\u00A0\u00A0' ) );
				var input = document.createElement("input");
				input.type = "text";
				input.size = "68";
				input.name = "getQR["+(i+1)+"]";
				container.appendChild(input);
				container.appendChild( document.createTextNode( '\u00A0' ) );
				var inputT = document.createElement("input");
				inputT.type = "checkbox";
				inputT.name = "cb["+(i+1)+"]";
				container.appendChild(inputT);
				container.appendChild( document.createTextNode( '\u00A0' ) );
				var input2 = document.createElement("input");
				input2.type = "text";
				input2.size = "24";
				input2.name = "getText["+(i+1)+"]";
				container.appendChild(input2);
				container.appendChild(document.createElement("br"));
			}
		}
</script>

<?php

?>
<center><span>Assalamualaikum Dunia..</span>
<h2>Ini merupakan skrip pengaturcaraan untuk menghasilkan kod QR. Sila gunakan dengan sebaiknya. Moga bermanfaat untuk semua.</h2></center>
<div>Acu Cuba Try Test</div>
<form name="permohonan" method="post" action="multipleqrb250.php">
			<center><font color="#000066" face="Arial, Helvetica, sans-serif" size="4"><strong>GENERATE QR CODE FOR GEOTREES </strong></font></center><br><br>
			<table width="70%" align="center" cellpadding="3" cellspacing="0" border="0" class="font-std" >
			  
			  
			  <tr valign="top">
				<td colspan="2" align="left" style="background-color:#000099;"><font color="white"><center><b>List of QR Code to be printed  </b></center></font></td>
			  </tr>
			  <tr valign="top">
				<td align="left"><font color="#000099"><input type="text" style="width:100%" id="member" name="member" placeholder="Number of QR Code"></font></td>
				<td>&ensp;</td>
			  </tr>
			  <tr valign="top">
				<td align="left"><input type="button" value="Generate" style="width:100%" id="filldetails" onclick="addFields()"/></td>
				<td>&ensp;<input type="text" style="text-align: center;font-weight:bold;" size="68" readonly="readonly" value="Physical QR Code" />
							<input type="checkbox" />
							<input type="text" style="text-align: center;font-weight:bold;" size="24" readonly="readonly" value="Text" /></td>
			  </tr>
			  <!--tr valign="top">
				<td align="left"><font color="#000099"><input type="text" id="member" name="member" placeholder="Bilangan Jalan Terlibat"></font></td>
				<td>&ensp;<input type="text" size="70" name="company" value="<?php echo $p_company;?>" />
							<input type="text" size="25" name="company" value="<?php echo $p_company;?>" /></td>
			  </tr-->
			  <tr><td>&nbsp;</td><td>
				<div id="container"/>
			  </td></tr>
			  
			  <tr><td>&nbsp;</td></tr>
			  <tr valign="top"> 
				<td colspan="2" align="center"> 
				  <input type="hidden" id="upd" name="upd"/> 
				  <input type="submit" value="Generate"/> 
				  <input type="hidden" value="Cancel" onclick="javascript:parent.emailwindow.hide()" /> 
				</td>
			  </tr>
			  <tr>
				  <label for="name">Names</label>
				  <input type="text" >
			  </tr>
			  <tr>
				  <label for="age">Age</label>
				  <input type="text" >
			  </tr>
			  <tr>
				  <label for="password">Password</label>
				  <input type="password" >

			  </tr>
			</table>
		</form>

