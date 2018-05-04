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
			<table width="100%" height = "100%" align="center" cellspacing="1" cellpadding="10" border="0" bgcolor="white">
				<tr bgcolor="white" align="center">
				     <td heaight="200" colspan="3">
			            <table align="center" border="0" width="80%" height="100%" cellpadding="40">
			                <tr>
			                    <td height="100%" align="center">
			                        <font size="4">
			                        <p><h3> Balck Listed Medicines</h3></p>
			                        <input type="text" name="fsearch" placeholder="filter">
			                      	<ul align="left">
			                            <li>Paracitamol</a></li>
			                            <li>Paracipairol</a></li>
			                            <li>Dosulepin</li>
			                            <li>lutein</li>
			                    	</ul>
			                    </td>
			                </tr>
			            </table>
					</td>
				</tr>
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