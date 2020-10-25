<!DOCTYPE html>
<head>
<style>
body{
     background-color: white;
}
table{
     width: 450px;
     margin: auto;
     border: 5px ridge;
}
.p{
     width: 145px;
}
.t{
     color: grey;
     font-size: 12px;
}
</style>
</head>
<body>
<table >
<form action="./form_user_data.php" method="post" >
<tr><td colspan=2>(*) Required fields</td></tr>
<tr> <td class="p">Account Type*</td>
<td> <input type="radio" name="account" value="Personal" requried checked >Personal Account
     <input type="radio" name="account" value="Business" requried>Business Account</td>
</tr>
<tr>  <td> First Name*</td>
<td> <input type="text" name="FN" requried pattern="[A-ZĄĆĘŁŃÓŚŹŻa-ząćęłńóśźż ]{2,10}" valid=""></td>
</tr>
<tr>
<td>Last Name*</td>
<td><input type="text" name="LN"  requried pattern="[A-ZĄĆĘŁŃÓŚŹŻa-ząćęłńóśźż ]{2,20}" valid=""></td>
</tr>
<tr>
<td>Country/Region*</td>
<td><select name="country" requried >
<option values="u">USA</option>
<option values="p">Polska</option>
<option values="g">Grecja</option>
</select></td>
</tr>
<tr>
<td>Street Address*</td>
<td><input type="text" name="Ad1"  valid="" requried ></td>
</tr>
<tr>
<td>Street Address 2</td>
<td><input type="text" name="Ad2" valid=""></td>
</tr>
<tr>
<td>City*</td>
<td><input type="text" name="City"  valid="" requried ></td>
</tr>
<tr>
<td>State/Province*</td>
<td><select name="State" requried>
<option valuse="S"  disabled selected>Select State or Province</option>
<option values="w">Wielkopolskie</option>
<option values="z">Zachodniopomorskie</option>
<option values="m">Małopolskie</option>
</select></td>
</tr>
<tr>
<td>ZIP/Postal Code*</td>
<td><input type="text" name="PC" size="6" requried pattern="[0-9]{2}-[0-9]{3}|[0-9]{5}" valid=""></td>
</tr>
<tr>
<td>  </td>
<td><div class="t">Only used for questions related to your order.</div></td>
</tr>
<tr>
<td>Phone Number*</td>
<td><input type="text" name="Phone" size="19" requried valid="" ></td>
</tr>
<tr>
<td colspan=2><center><input type="submit" name="button" value="Send"></center></td>
</tr>
</table>
</body>
</html>
