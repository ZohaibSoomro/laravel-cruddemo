<h2>Edit Student</h2>
<br><br>
<form method="POST" action="{{route('update',$student)}}" >
    @csrf
    @method('PUT')
        <input type="text" name="name" placeholder="name"><br>
        <input type="text" name="rollNo" placeholder="Roll no"><br>
        <input type="submit" value="Update Student"><br>
</form>