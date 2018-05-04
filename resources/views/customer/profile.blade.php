<table width="80%" height="50" cellspacing="0" cellpadding="10" border="1" align="center">
    <tr>
        <td colspan="2" valign="middle" height="30">
            <table width="100%">
                <tr>
                    <td>
                        <a href="/customer" target="contentFrame">
                            <img alt="SHEBA" width="130" height="70" src="images/Capture.png">
                        </a>
                    </td>
                    <td align="right">
                    	<font size="4">
                        Logged in as <a href="/customer_profile/{{session('user')->username}}" target="contentFrame">{{session('user')->username}}</a>&nbsp;|
                        <a href="/logout">Logout</a>
                    	</font>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
    	<table width="80%" height = "85%" align="center" cellspacing="1" cellpadding="10" border="1" bgcolor="white">
		 <tr>
		    <td width="200" valign="top">
		    	<font size="4">
		    	<ul>
		    	<li><a href="/medicine" target="contentFrame"><label>Medicine List</label></a></li><br><br>
		        <li><a href="/cart" target="contentFrame"><label>cart</label></a></li><br><br>
		        <li><a href="/blacklisted" target="contentFrame"><label>Black Listed Drugs</label></a></li><br><br>
		    	</ul>
		    </font>
		    </td>
		    <td>
		    	<fieldset>
			    <legend><b>PROFILE</b></legend>
			    <form method="POST">
		        <br/>
		        <input type="hidden" name="id" value="{{$pro->id}}" />
		        <table width="100%" cellpadding="0" cellspacing="0">
			            <tr>
			                <td width="130"></td>
			                <td width="10"></td>
			                <td width="230"></td>
			                <td></td>
			            </tr>
			          	<tr><td colspan="4"><hr/></td></tr>
			            <tr>
			                <td>Name</td>
			                <td>:</td>
			                <td>{{$pro->name}}</td>
			                <td></td>
			            </tr>
			            <tr><td colspan="4"><hr/></td></tr>
			            <tr>
			                <td>Email</td>
			                <td>:</td>
			                <td>{{$pro->email}}</td>
			                <td></td>
			            </tr>       
			            <tr><td colspan="4"><hr/></td></tr>
			            <tr>
			                <td>User Name</td>
			                <td>:</td>
			                <td>{{$pro->username}}</td>
			                <td></td>
			            </tr>       
			            <tr><td colspan="4"><hr/></td></tr>
			            <tr>
			                <td>Password</td>
			                <td>:</td>
			                <td>{{$pro->password}}</td>
			                <td></td>
			            </tr>      			          
				        </table>	
				        <hr/><br>
				        <a href="/customer/edit_profile/{{$pro->id}}">Edit Profile</a><br>
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