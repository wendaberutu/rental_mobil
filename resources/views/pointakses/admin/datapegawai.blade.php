<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kelola Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="../css/style1.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('public/css/style.css') }}"> --}}
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}


    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body class="mb-4">
    <div class="sidebar">
        <div class="logo_details">
            <div class="logo_name">Kedan & Tour</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search..." />
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-grid-alt"></i>
                    <span class="link_name">Beranda</span>
                </a>
                <span class="tooltip">Beranda</span>
            </li>
            <li>
                <a href="pegawai">
                    <i class="bx bx-user"></i>
                    <span class="link_name">Lihat Pegawai</span>
                </a>
                <span class="tooltip">Lihat Pegawai</span>
            </li>
            <li>
                <a href="mobil">
                    <i class="bx bx-car"></i>
                    <span class="link_name">Lihat Mobil</span>
                </a>
                <span class="tooltip">Lihat Mobil</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cart"></i>
                    <span class="link_name">Transaksi</span>
                </a>
                <span class="tooltip">Transaksi</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-report"></i>
                    <span class="link_name">Laporan Keuangan</span>
                </a>
                <span class="tooltip">Laporan Keuangan</span>

            </li>

            <li class="profile">
                <div class="profile_details">
                    <img src="img/Profile.png" alt="profile image" />
                    <div class="profile_content">
                        <div class="name">Kalebb</div>
                        <div class="designation">Pegawai1</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out"></i>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Beranda</div>
        
        <h1 class="text-center mb-4">Daftar Pegawai</h1>

        <div class="container">
            <a href="/tambahpegawai" type="button" class="btn btn-primary">Tambah +</a>
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Pegawai</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Tanggal Bekerja</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $nomor = 1;
                        @endphp

                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $nomor++ }}</th>
                                <td>{{ $row->id_pegawai }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->nik }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->no_telepon }}</td>
                                <td>{{ $row->tanggal_bekerja }}</td>
                                <td>

                                    <a href="/tampilkandatapegawai/{{ $row->id_pegawai }}" class="btn btn-success">
                                        Edit
                                    </a>

                                    <a href="{{ route('deletepegawai', ['id_pegawai' => $row->id_pegawai]) }}"
                                        type="button" class="btn btn-danger">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>
</section>
<!-- Scripts -->
<script src="js/script1.js"></script>

</html>
{{-- @php
    $no = 1;
    foreach ($variable as $key => $value) {
        # code...
    }
    endforeach
@endphp --}}
