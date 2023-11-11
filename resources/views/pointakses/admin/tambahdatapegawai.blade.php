<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Tambah Data Pegawai</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css">
        <link href="../css/style1.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form
                                action="/insertdatapegawai"
                                method="post"
                                enctype="multipart/form-data"
                            >
                            @csrf
                                
                                <div class="mb-3">
                                    <label
                                        for="idpegawai"
                                        class="form-label"
                                        >ID Pegawai</label
                                    >
                                    <input
                                        name="idpegawai"
                                        type="text"
                                        class="form-control"
                                        id="idpegawai"
                                        aria-describedby="emailHelp"
                                        value="{{ 'P' }}"
                                        @required(true)
                                        {{-- @disabled(true) --}}
                                        {{-- @disabled(true) --}}
                                    />
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="nama"
                                        class="form-label"
                                        >Nama</label
                                    >
                                    <input
                                        name="nama"
                                        type="text"
                                        class="form-control"
                                        id="nama"
                                        aria-describedby="emailHelp"
                                        @required(true)
                                    />
                                </div>
                                <div class="mb-3">
                                    <label
                                        for="nik"
                                        class="form-label"
                                        >NIK</label
                                    >
                                    <input
                                        name="nik"
                                        type="number"
                                        class="form-control"
                                        id="nik"
                                        aria-describedby="emailHelp"
                                        @required(true)
                                    />
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="alamat"
                                        class="form-label"
                                        >Alamat</label
                                    >
                                    <input
                                        name="alamat"
                                        type="text"
                                        class="form-control"
                                        id="alamat"
                                        aria-describedby="emailHelp"
                                        @required(true)
                                    />
                                </div>
                                <div class="mb-3">
                                    <label
                                        for="notelepon"
                                        class="form-label"
                                        >No Telepon</label
                                    >
                                    <input
                                        name="notelepon"
                                        type="number"
                                        class="form-control"
                                        id="notelepon"
                                        aria-describedby="emailHelp"
                                        @required(true)
                                    />
                                </div>
                                <div class="mb-3">
                                    <label
                                        for="tanggalbekerja"
                                        class="form-label"
                                    >Tanggal Bekerja</label>
                                    <input
                                        name="tanggalbekerja"
                                        type="text"
                                        class="form-control"
                                        id="tanggalbekerja"
                                        required="true"
                                    />
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/pikaday.min.js"></script>
        <script>
            const tanggalInput = document.getElementById('tanggalbekerja');
            const kalenderIcon = document.getElementById('kalender-icon');

            const picker = new Pikaday({
                field: tanggalInput,
                format: 'YYYY-MM-DD',
                yearRange: [2000, moment().year()],
                showYearDropdown: true,
                showMonthDropdown: true,
            });

            kalenderIcon.addEventListener('click', function () {
                picker.show();
            });
        </script>
    </body>
</html>