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
		    <legend><b>EDIT PROFILE</b></legend>
		    <form method="post" action="/customer/update_profile/{{$userPro->id}}">
		        <br/>
		        <input type="hidden" name="uid" value="{{$userPro->id}}">
				<input type="hidden" name="_method" value="put">
		        <table width="100%" cellpadding="0" cellspacing="0">
		            <tr>
		                <td width="100"></td>
		                <td width="10"></td>
		                <td width="230"></td>
		                <td></td>
		            </tr>
		            <tr>
		                <td>Name</td>
		                <td>:</td>
		                <td><input name="name" type="text" value="{{$userPro->name}}"></td>
		                <td></td>
		            </tr>		
		            <tr><td colspan="4"><hr/></td></tr>
		            <tr>
		                <td>Email</td>
		                <td>:</td>
		                <td>
		                    <input name="email" type="text" value="{{$userPro->email}}">
		                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
		                </td>
		                <td></td>
		            </tr>				
		            <tr><td colspan="4"><hr/></td></tr>
		            <tr>
		                <td>Username</td>
		                <td>:</td>
		                <td><input name="username" type="text" value="{{$userPro->username}}"></td>
		                <td></td>
		            </tr>		
		        </table>
		        <hr/><br>
		        <input type="submit" value="Update"> &nbsp;
		        <button><a href="/customer_profile/{{session('user')->username}}">Cancel</a></button>	
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