<!DOCTYPE html>
<html>

<head>
    <title>Add Employee Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/c9cf9181a8.js" crossorigin="anonymous"></script>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Jabatan</th>
                <th>Tanggal Lahir</th>
                <th>Kota Asal</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employeeProfiles as $employeeProfile)
            <tr>
                <td>{{$employeeProfile->id}}</td>
                <td>{{ $employeeProfile->nama_karyawan }}</td>
                <td>{{ $employeeProfile->jabatan }}</td>
                <td>{{ $employeeProfile->tanggal_lahir }}</td>
                <td>{{ $employeeProfile->kota_asal }}</td>
                <td>
                    <form action="/employee-profiles/delete/{{$employeeProfile->id}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                        <!-- <p>{{$employeeProfile->id}}</p> -->
                    </form>
                </td>

                <td>
                    <form action="/employee-profiles/update/{{$employeeProfile->id}}" method="post">
                        @csrf
                        <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container">
        <h1>Add Employee Profile</h1>

        <form method="post" action="/employee-profiles">
            @csrf

            <div class="form-group">
                <label for="nama_karyawan">Nama Karyawan:</label>
                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
            </div>

            <div class="form-group">
                <label for="kota_asal">Kota Asal:</label>
                <input type="text" class="form-control" id="kota_asal" name="kota_asal" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>