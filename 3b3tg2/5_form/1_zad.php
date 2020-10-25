<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>zadanie</title>
  </head>
  <body>
<table border="1px, black, solid">
  <tr>
    <th>name</th><th>value</th>
  </tr>
   <tr>
    <td>name</td>
    <td><input type="text" name="name" placeholder="name" autofocus></td>
</tr>
<tr>
    <td>sex</td>
    <td><input type="radio" name="sex" value='m'>male
    <input type="radio" name="sex" value='f'>female</td>
  </tr>
  <tr>
    <td>eye color</td>
    <td><select name="eye">
      <option>blue</option>
      <option>green</option>
      <option>brown</option>
    </td>
  </tr>
  <tr>
    <td>check all that apply</td>
    <td><input type="checkbox" name="height" >over 6 feet tall<br>
    <input type="checkbox" name="weight" >over 200 pounds
    </td>
  </tr>
  <tr>
    <td colspan="2">describe your athletic ability<br>
      <textarea rows=5 cols=40 name='textarea'></textarea></td>
  </tr>
  <tr>
    <td colspan="2">
    <input type="submit" value="enter my information">
  </td>
  </tr>
</table>
  </body>
</html>
