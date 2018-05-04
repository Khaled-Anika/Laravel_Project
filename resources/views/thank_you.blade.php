<html>
<head>
	<link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
</head>
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
		        <li><a href="../healthTips.html" target="contentFrame"><label>Health Tips</label></a></li><br><br>
		        <li><a href="../Black_Listed_Medicines.html" target="contentFrame"><label>Black Listed Drugs</label></a></li><br><br>
		    	</ul>
		    </font>
		    </td>
		    <td>
		    	<h2 align="center"><i>Congratulations!! Your purchase has been successful!</i></h2>
		    	<h3 align="center">Thank You :) </h3>
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