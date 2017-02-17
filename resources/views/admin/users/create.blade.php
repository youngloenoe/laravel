<form method="post" action="/users">
{{-- {!! csrf_field()!!} --}}
	name
	<input type="text" name="name">
	</br>
	email
	<input type="email" name="email">
	</br>
	password
	<input type="password" name="password">
	</br>
	<input type="submit" name="Create">
</form>