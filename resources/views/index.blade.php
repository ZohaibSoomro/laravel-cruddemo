<body>
    <h1>Crud Student</h1>
    <form action="{{url('/')}}/students" method="POST">
        @csrf
        @method('POST')
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="text" name="rollNo" placeholder="Roll no"><br><br>
        <input type="submit" value="Add Student"><br>
    </form>

    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>RollNo</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->rollNo}}</td>
                <td>
                    <a href="{{route('edit',$student)}}">Edit <a>
            <form action="{{route('destroy',$student)}}" method="POST">
                @csrf
                @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>