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
	    <form method="post">
	    		
			<h2><i>List with <u>Top medicine</u> according to number of sold unit is: </i></h2><br>

			<!--<table width="90%" height="20%" border="1" cellspacing="3" cellpadding="15" valign="top">
				<tr>
					<th>Id</th>
					<th>Medicine Name</th>
				</tr>
				<tr>
					<td>     <%= (0+1) %> </td>
					<td><i>  <%= data[0].med_name %> </i></td>
				</tr>
	 		</table><br><br>-->
	        <table width="90%" height="90%" border="1" cellspacing="0" cellpadding="7" valign="top">
				<tr>
					<th>Id</th>
					<th>Medicine Name</th>
					<th>Unit Sold</th>
				</tr>

				@foreach($topmedlist as $topmed)  
				<tr>
					<td align="center"> {{$topmed->id}} </td>
					<td align="center"><i> {{$topmed->med_name}} </i></td>
					<td align="center"> {{$topmed->buy_count}} </td>
				</tr>
				@endforeach
			</table><br><br>
			<a href="/admin">Back to Dashboard</a>
	 	</form>
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