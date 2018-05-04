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
            <table width="80%" height="70%" align="center" cellspacing="0" cellpadding="10" border="1" bgcolor="white">
                <tr><td>
                <fieldset>
                    <legend>UPDATE</legend>
                    <form method="post" action="/medicine/{{$med->id}}">
                    	<input type="hidden" name="mid" value="{{$med->id}}">
						<input type="hidden" name="_method" value="put">
                        <table border="0" cellspacing="0" cellpadding="3">
                            <tr>
                                <td>Medicine Name</td>
                                <td><input name="med_name" value="{{$med->med_name}}"/></td>
                                
                            </tr>
                            <tr>
                                <td>Indication</td>
                                <td><input name="indication" value="{{$med->indication}}"/></td>
                                
                            </tr>
                            <tr>
                                <td>Generic</td>
                                <td><input name="generic" value="{{$med->generic}}"/></td>
                                
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td><input name="price" value="{{$med->price}}"/></td>
                                
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td><input name="quantity" value="{{$med->quantity}}"/></td>
                                
                            </tr>
                        </table>
                        <hr/>
                        &nbsp; <input type="submit" name="submit" value="Save">
                        <input type="button" name="cancel" value="Cancel" class="cancel" onclick="return confirm('Are you sure?')">
                    </form>
                </fieldset>
                </td></tr>
            </table>
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