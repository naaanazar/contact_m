<?php
$fail="";
$error['1'] = "";
$error['2'] = "";
$error['3'] = "";
$error['4'] = "";

foreach ($error as $value) {
    echo "$value";
    $fail .= $value;
}

if ($fail == ""){
echo 111;
}
else{
echo 222;
}

?>

<!--
<!DOCTYPE html>
<html>
 <head>
 <script src="js_scripts\validate.js"></script>
 <title>Пример формы</title>
 <style>
 .signup {
 border: 1px solid #999999;
 font: normal 14px helvetica;
 color:#444444;
 }
 </style>
 <script>
 function validate(form) {
 fail = validateForename(form.forename.value)
 fail += validateSurname(form.surname.value)
 fail += validateUsername(form.username.value)
 fail += validatePassword(form.password.value)
 fail += validateAge(form.age.value)
 fail += validateEmail(form.email.value)
 if (fail == "") return true
 else { alert(fail); return false }
 }
 </script>
 </head>
 <body>
 <table class="signup" border="0" cellpadding="2"
 cellspacing="5" bgcolor="#eeeeee">
 <th colspan="2" align="center">Регистрационная форма</th>
 <form method="post" action="adduser.php"
 onSubmit="return validate(this)">
 <tr><td>Имя</td><td><input type="text" maxlength="32"
 name="forename"></td></tr>
 <tr><td>Фамилия</td><td><input type="text" maxlength="32"
 name="surname"></td></tr>
 <tr><td>Пользовательское имя</td>
 <td><input type="text" maxlength="16"
 name="username"></td></tr>
 <tr><td>Пароль</td>
 <td><input type="text" maxlength="12"
 name="password"></td></tr>
 <tr><td>Возраст</td>
 <td><input type="text" maxlength="3"
 name="age"></td></tr>
 <tr><td>Электронный адрес</td>
 <td><input type="text" maxlength="64"
 name="email"></td></tr>
 <tr><td colspan="2" align="center">
 <input type="submit" value="Зарегистрироваться"></td></tr>
 </form>

 </table>
 </body>
</html>

<!--

<!DOCTYPE html>
<html>
<head>
<script src="js_scripts\validate.js"></script> 
<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script> 
</head>
<body>

<form name="myForm" action="demo_form.asp"
onsubmit="return validateForm()" method="post">
Name: <input type="text" name="fname">
<input type="submit" value="Submit">
</form>

</body>
</html>





Привіт в мене є в коді куча функцій типу наведеної нижче, поки script в документі все ок

якщо забираю в окремий файл 
<script src="js_scripts\validate.js"></script> 
функція виконується,
alert виводить
 але не вертає return false
для
onsubmit="return validateForm()"



<!DOCTYPE html>
<html>
	<head>
		<script src="js_scripts\validate.js"></script>

		<script>
		function validateForm() {
		    var x = document.forms["myForm"]["fname"].value;
		    if (x == null || x == "") {
		        alert("Name must be filled out");
		        return false;
		    }
		}
		</script>

	</head>
	<body>

		<form name="myForm" action="demo_form.asp" onsubmit="return validateForm()" method="post">
		Name: <input type="text" name="fname">
			<input type="submit" value="Submit">
		</form>

</body>
</html>

<!--<FORM action="index.php" method="POST" id="show_content">

   <INPUT type='checkbox' name='number1'>

   <INPUT type='checkbox' name='number2'>

   <INPUT type='submit' name='edit' id='edit' value='Изменить'>

   <INPUT type='submit' name='del' id='del' value='Удалить'>

</FORM>


<a href="index.php" onclick="document.getElementById('show_content').submit('edit'); return false;">Изменить</a>
<a href="index.php" onclick="document.getElementById('show_content').submit('del'); return false;">Удалить</a>

<form name="test" method="post" action="index.php"> 
<input type="text"  name="text" value="sdsad>"> 
</form> 
<a href="jаvаscriрt:document.test.submit()"> послать на.. </a> 


<html>
    <head>
        <script type="text/javascript">
            window.onload = function() {
                document.getElementById('test-submit').onclick = function() {
                    document.getElementById('test-params').value = '1';
                    document.getElementById('test-form').submit();
                }
            }
        </script>
    </head>
    <body>
        <form action="index.php" id="test-form" method="post" >
            <input type="text" name="params" id="test-params" value="<?php (
                isset($_POST['params'])
                ? $_POST['params']
                : ''
            )?>" />
            <a href="#" id="test-submit">Тест</a>
        </form>
    </body>
</html>

<?php/*

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Абсолютное позиционирование.</title>
</head>
<body>
<div style="background: #0f0; border: #000000 2px solid; padding: 5px; margin: 10px; width: 300px; height: 200px;"><h1>Блок №1</h1></div>
<div style="background: #00f; border: #000000 2px solid; padding: 5px; margin: 10px; width: 500px; height: 100px;"><h1>Блок №2</h1></div>
<div style="position: absolute; left:200px; top: 100px; background: #f00; border: #000 2px solid; padding: 5px; width: 200px; height: 200px;"><h1>Блок №3</h1> Данный блок абсолютно позиционирован! <br><br> Блоки 1 и 2 никак не влияют на его месторасположение.</div>
</body>
</html>


$string = "This is\tan example\nstring";
// в качестве разделителей используем пробел, табуляцию и перевод строки 
$tok = strtok($string, " \n\t");
while ($tok) {
    echo "Word=$tok<br />";
    $tok = strtok(" \n\t");
}


<script src="js_scripts\jquery-2.2.3.min.js"></script>
<form action="#">
    <p><label><input type="checkbox" id="checkAll"/> Check all</label></p>
    
  
        <legend>Loads of checkboxes</legend>
        <p><label><input type="checkbox" /> Option 1</label></p>
        <p><label><input type="checkbox" /> Option 2</label></p>
        <p><label><input type="checkbox" /> Option 3</label></p>
        <p><label><input type="checkbox" /> Option 4</label></p>

</form>

<script src="js_scripts\jquery-2.2.3.min.js"></script>
<script>$("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
</script>


$sort_s = 1; 
print "<script>var type=" . $sort_s .";</script>";

if (isset($_GET['last_sort'] )){
$sort_s = 2; 
echo $_GET['last_sort'];

print "<script>var type=" . $sort_s .";</script>";
}
?>

<script >
query='last_sort=' + type;

document.write("<a href=test.php?" + query + ">ссылка<?php echo $sort_s; ?></a>");
</script>
<?php
/* 
$to  = "<mail@example.com>, " ; 
$to .= "mail2@example.com>"; 

$subject = "Заголовок письма"; 

$message = ' <p>Текст письма</p> </br> <b>1-ая строчка </b> </br><i>2-ая строчка </i> </br>';

$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
$headers .= "From: От кого письмо <from@example.com>\r\n"; 
$headers .= "Reply-To: reply-to@example.com\r\n"; 
ini_set("SMTP", "localhost");
ini_set("smtp_port", "25");

mail($to, $subject, $message, $headers); 




<input type="image" name="submit" src="image.gif">
*/
?>
-->