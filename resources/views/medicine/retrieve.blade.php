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
	    <legend><b>Medicine List</b></legend>
		<form method="post">
			        <br/> 
        <table width="90%" height="90%" border="1" cellspacing="0" cellpadding="5">
	        <tr>
	            <th>Id</th>
	            <th>Name</th>
	            <th>Indication</th>
	            <th>Generic</th>
	            <th>Price</th>
	            <th>Quantity</th>
	            <th colspan="4"></th>
	        </tr>
	         @foreach($medlist as $med)                 
	            <tr>
	            	<td>{{$med->id}}</td>
	                <td>{{$med->med_name}}</td>
	                <td>{{$med->indication}}</td>
	                <td>{{$med->generic}}</td>
	                <td>{{$med->price}}</td>
	                <td>{{$med->quantity}}</td>
                <td>
                    <a href="/medicine/{{$med->id}}/edit">Edit</a>                       
                    &nbsp;&nbsp;<a href="/medicine/{{$med->id}}/delete" onclick="return confirm('Are you sure?')">Delete</a>                       
                </td>
                </tr>
            @endforeach
        </table>
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