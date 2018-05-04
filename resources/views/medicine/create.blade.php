<table width="80%" height="40" cellspacing="0" cellpadding="10" border="1" align="center">
    <tr>
        <td colspan="2" valign="middle" height="50">
            <table width="100%">
                <tr>
                    <td>
                        <a href="./dashboard.html" target="contentFrame">
                            <img alt="SHEBA" width="100" height="80" src="images/Capture.png">
                        </a>
                    </td>
                    <td align="right">
                        Logged in as <a href="Admin_profile.html" target="contentFrame">Admin</a>&nbsp;|
                        <a href="/logout">Logout</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
    	<table width="80%" height = "85%" align="center" cellspacing="5" cellpadding="10" border="1" bgcolor="white">
 		<tr>
        <td width="200" valign="top">
        	<font size="4">
        	<ul>
        	<li><a href="/admin" target="contentFrame">Dashboard</a></li><br><br>
            <li><a href="/add_medicine" target="contentFrame"><label>Add Medicines</label></a></li><br><br>
            <li><a href="/retrieve_medicine" target="contentFrame"><label>Retrieve Medicines</label></a></li><br>
            </ul>
        </font>
        </td>
        <td>
    	<fieldset>
	    <legend><b>Add Medicine</b></legend>
		<form method="post">
			@if(session('message'))
			<label><b>{{session('message')}}</b></label>
			@endif
	        <br/><br>
	        <table width="100%" cellpadding="0" cellspacing="0">
	            <tr>
	                <td width="130"></td>
	                <td width="10"></td>
	                <td width="230"></td>
	                <td></td>
	            </tr>
	            <tr>
	                <td>Medicine Name</td>
	                <td>:</td>
	                <td><input name="med_name" type="text"></td>
	                <td></td>
	            </tr>       
	            <tr><td colspan="4"><hr/></td></tr>
	            <tr>
	                <td>Instruction</td>
	                <td>:</td>
	                <td>
	                    <textarea name="indication" type="text"></textarea>    
	                </td>
	                <td></td>
	            </tr>       
	            <tr><td colspan="4"><hr/></td></tr>
	            <tr>
	                <td>Generic</td>
	                <td>:</td>
	                <td><input name="generic" type="text"></td>
	                <td></td>
	            </tr>
	            <tr><td colspan="4"><hr/></td></tr>
	            <tr>
	                <td>Price</td>
	                <td>:</td>
	                <td><input name="price" type="text"></td>
	                <td></td>
	            </tr>
	            <tr><td colspan="4"><hr/></td></tr>
	            <tr>
	                <td>Quantity</td>
	                <td>:</td>
	                <td><input name="quantity" type="text"></td>
	                <td></td>
	            </tr>                  
	        </table>
	        <hr/>
	        <input type="submit" value="Submit">&nbsp;
	        <a href="retrieve_medicine.php">Preview data</a>
	    </form>
		</fieldset>
	    </td>
	</tr>
	</table>
	</tr>
	<tr>
		<table width="80%" height="7%" align="center" cellspacing="0" cellpadding="10" border="1" bgcolor="white">	
		<tr>
			<td align="center" height="30">
				Copyright &copy; 2018
			</td>
		</tr>
		</table>
	</tr>
</table>