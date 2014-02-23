<!doctype html>
<head>

	<style type="text/css">

	.forma{
		width: 100%;

	}
	.forma input[type="text"]{
		width: 150px;
		height: 15px;
		padding: 5px;
	}
	.forma label{
		
		font-style: 1.2em;

	}
	.forma select{
		width: 150px;
		height: 30px;
		padding: 5px;
	}
	.forma textarea{
		padding: 5px;
		font-size: 1.2em;
	}
	.forma input[type="submit"]{
		width: 100px;
		height: 30px;
		background-color: #303030;
		color: #fff;
		border: none;
		cursor: pointer;
	}
	.forma input[type = "submit"]:hover{
		background-color: #DE5E60;
	}

	</style>
</head>
<body>
<br />
{{ Form::open(array('url' => 'support/tiket_create', 'class' => 'forma')) }}
<p>
{{ Form::label('subject', 'Subject: ') }}
{{ Form::text('subject', null, array('placeholder' => 'subject')) }}
</p><br />
<p>
{{ Form::label('cat', 'Category: ') }}
{{ Form::select('cat', array( 'issue with app'       => 'issue with app',
								'application crashed'  => 'application crashed',
								'finances problems'    => 'finances problem',
								'account problems'     => 'account problems'
	)) }}
</p></br />
<p>
{{ Form::textarea('description', null, array('placeholder' => 'describe your problem...')) }}
</p><br />
{{ Form::token() }}
{{ Form::submit('Submit') }}

{{ Form::close() }}

</body>
</html>