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
		    </td>        <td>
            <table width="80%" height="70%" align="center" cellspacing="0" cellpadding="10" border="1" bgcolor="white">
                <tr><td>
                <fieldset>
                    <legend>Detail</legend>
                    <form action="{{route('cart.store')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$med->id}}">
                        <input type="hidden" name="med_name" value="{{$med->med_name}}">
                        <input type="hidden" name="price" value="{{$med->price}}">
                        <table border="0" cellspacing="0" cellpadding="3">
                            <tr>
                                <td>Medicine Name</td>
                                <td>:</td>
                                <td><label name="med_name" value=""/>{{$med->med_name}}</td>
                                
                            </tr>
                            <tr>
                                <td>Indication</td>
                                <td>:</td>
                                <td><label name="indication" value=""/>{{$med->indication}}</td>
                                
                            </tr>
                            <tr>
                                <td>Generic</td>
                                <td>:</td>
                                <td><label name="generic" value=""/>{{$med->generic}}</td>
                                
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>:</td>
                                <td><label name="price" value=""/>{{$med->price}}</td>
                                
                            </tr>
                           <!--<tr>
                                <td>Quantity</td>
                                <td>:</td>
                                <td><input name="quantity" value=""/></td>                                           
                            </tr>-->
                        </table>
                        <hr/>
                        &nbsp; <input type="submit" name="submit" value="Add to Cart">
                    
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