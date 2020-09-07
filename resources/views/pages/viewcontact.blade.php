
<center>

<form method="post" action="">

	@csrf
	<input type="text" name="name" value="{{ $view->name }}"><br>
	<input type="email" name="email"  value="{{ $view->email }}"><br>
	<input type="text" name="phone" value="{{ $view->phone }}" ><br>
	<input type="text" name="description" value="{{ $view->description }}">
	
</form>
</center>