<!DOCTYPE html>
<html>

<head>
    <title>Add Employee Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/c9cf9181a8.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <h1>Add Employee Profile</h1>

        <form method="post" action="/employee-profiles/update-profile/{{$employeeProfile->id}}">
            @csrf

            <div class="form-group">
                <label for="nama_karyawan">Nama Karyawan:</label>
                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="{{$employeeProfile->nama_karyawan}}" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$employeeProfile->tanggal_lahir}}" required>
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{$employeeProfile->jabatan}}" required>
            </div>

            <div class="form-group">
                <label for="kota_asal">Kota Asal:</label>
                <input type="text" class="form-control" id="kota_asal" name="kota_asal" value="{{$employeeProfile->kota_asal}}" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>