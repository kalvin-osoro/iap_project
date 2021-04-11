<div class="card mb-3">
    {{-- <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="..."> --}}
    <img src="{{url('/img/class.JPG')}}" alt="Image"/>
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the information about students in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">adm_no</th>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->adm_no }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>

                        <a href="{{ url('/student/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form onsubmit="return confirm('Do you really want to delete?');" action="{{ url('/student/destroy/'.$student->id)}}" method="post">
                            @csrf
                           <span><input class="btn btn-sm btn-danger" type="submit" value="Delete" /></span>

                         </form>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>





