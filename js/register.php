<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset= iso-8859-7" />
    <title>�������</title>
	<link rel="stylesheet" href="eggrafi.css" type="text/css"/>
</head>

<body>
<h3> ���� ������� </h3>

<?php 
require_once('connect.inc');
?>

<div id="stylized" class="column1">
	<form method="post" action="eggrafi.php">
		<p>
		<label> �����* </label>
		<input name="firstname" tabindex="110" type="text" id="firstname"  />
		</p>
		<p>
		<label> �������* </label>
		<input name="lastname" tabindex="110" type="text" id="lastname" />
		</p>
		<p>
		<label> ��������</label>
		<input name="phoneNumber" tabindex="110" type="int" id="phoneNumber" />
		</p>
		<p>
		<label> �-mail* </label>
		<input name="email" tabindex="110" type="text" id="email" />
		</p>
		<p>
		<label>����� ������*
		<span class="small">�� username ����� ��������</span></label>
		<input name="username" tabindex="110" type="text" id="username" />
		</p>
		<p>
		<label> �������* 
		<span class="small">6-8 ����������</span></label>
		<input name="password" tabindex="110" type="password" id="password" />
		</p>

		<p><span class="small">* ����������� ����� </span></p>
	
	
				    <div id="checkbox">
			<label>
			<input id="adult" name="adult" value="true" type="checkbox" class="c�lors" /></label>B������� ��� ����� ��� ��� 18 ��� ��� ��� �������� ���� <a href="terms_and_conditions">��o�� ������.</a>
			<br/>
			</div>
			
					<div id="button" class="colors">
			<input type="submit" name="button" value="�������" />
			</div>	
	



	</form>
	</div>
		  <br/>  <br/>  <br/>
	</body>
	</html>