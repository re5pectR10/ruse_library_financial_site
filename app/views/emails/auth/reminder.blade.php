<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
            За да зададете нова парола попълнете следната форма: <a href="{{ URL::to('password/reset', array($token)) }}">{{ URL::to('password/reset', array($token)) }}.</a><br/>
            Този линк ще бъде валиден още {{ Config::get('auth.reminder.expire', 60) }} минути.<br/><br/>
            ----------------------------------------------------------------------------------------------------------------------------------------------------<br/><br/>
			To reset your password, complete this form: <a href="{{ URL::to('password/reset', array($token)) }}">{{ URL::to('password/reset', array($token)) }}.</a><br/>
			This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.
		</div>
	</body>
</html>
