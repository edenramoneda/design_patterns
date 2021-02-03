

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    <form action="{{ url('/FormController/store')}}" method="POST">
        <label>Name</label><br>
        <input id="name" type="text" name="name"><br>

        <input id="age" type="number" name="age"><br>
        <select id="can_drive" name="can_drive"><br>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </form>
@endif
