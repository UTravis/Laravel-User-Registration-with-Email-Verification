<h1>Welcome {{ $mail_data['name'] }} !!!</h1>
<h3> Thanks for signing up for our project.</h3>
<br>
Click this <a href="http://127.0.0.1:8000/verification?code={{$mail_data['verification_code']}}">here</a> to verify your account.
<p>Thank You.</p>