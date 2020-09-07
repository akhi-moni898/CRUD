<form method="post" action="{{url('update-contact/'.$edt->id)}}">
	@csrf
	<input type="text" name="name" value="{{ $edt->name }}">
	<input type="email" name="email"  value="{{ $edt->email }}">
	<input type="text" name="phone" value="{{ $edt->phone }}" >
	<input type="text" name="description" value="{{ $edt->description }}">
	<input type="submit" name="submit" value="submit">
	
</form>