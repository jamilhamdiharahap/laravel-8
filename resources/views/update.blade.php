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
        <h1 style="text-align: center;padding:2rem;">Update Data</h1>
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form action="updatedata/{{ $data->id }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Name" value="{{ $data->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                <input type="text" value="{{ $data->alamat }}" name="alamat" class="form-control"
                                    id="exampleFormControlInput1" placeholder="Address">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Telepon</label>
                                <input type="text" value="{{ $data->telepon }}" name="telepon" class="form-control"
                                    id="exampleFormControlInput1" placeholder="Telepon">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
