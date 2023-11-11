

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Detail Mobil</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
    <div class="card mx-auto" style="width: 18rem;">
      {{-- <svg  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg> --}}
{{-- <img src="{{ asset('storage/' . $data->foto) }}" alt="Gambar Mobil" class="bd-placeholder-img card-img-top" width="100%" height="180"> --}}


      <div class="card-body">
        <h5 class="card-title">{{ $data->no_polisi }}</h5>
         
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">ID :  {{ $data->id_mobil }}</li>
        {{-- <li class="list-group-item">No Polisi : {{ $data->no_polisi }}</li> --}}
        <li class="list-group-item">Warna : {{ $data->warna }}</li>
        <li class="list-group-item">Jenis : {{ $data->jenis }}</li>
        <li class="list-group-item">Harga Sewa : {{ $data->harga_sewa }}</li>
      </ul>
      <div class="card-body">
        {{-- <a href="/tampilmobil/{$data->id}" class="btn btn-primary" >Edit</a> --}}
        <a href="{{ route('mobil') }}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
    
    <!-- End Example Code -->
  </body>
</html>

