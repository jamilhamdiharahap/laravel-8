<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <title>Rumah sakit!</title>
</head>

<body>
    <div class="container">
        <h1 style="text-align: center;padding:2rem;">Data Dokter</h1>
        <a type="button" href="{{ url('tambahdata') }}" style="margin:5px; " class="btn btn-info float-start">Add</a>
        <table class="table table-striped">
            <thead>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telp</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($tabel as $value)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>{{ $value->telepon }}</td>
                        <td>
                            <a type="button" href="{{ url('delete/') }}/{{ $value->id }}"
                                class="btn btn-danger">Delete</a>
                            <a type="button" href="/update/{{ $value->id }}" class="btn btn-warning">Update</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>
