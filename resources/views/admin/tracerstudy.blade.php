<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Tarcer Study - UNIVERSITAS MUHAMMADIYAH BANDUNG
                </div>
                <div class="card-body">
                    <a href="/admin/tracerstudy/tambah" class="btn btn-primary">Input Data Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Kegiatan Setelah Lulus</th>
                                <th>Nama Perguruan Tinggi</th>
                                <th>Nama Tempat Bekerja</th>
                                <th>Jabatan</th>
                                <th>Alamat Bekerja</th>
                                <th>Saran / Masukan</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tracerstudy as $p)
                            <tr>
                                <td>{{ $p->alumni_id }}</td>
                                <td>{{ $p->kegiatan_stlh_lulus }}</td>
                                <td>{{ $p->nama_pt }}</td>
                                <td>{{ $p->nama_tmpt_kerja }}</td>
                                <td>{{ $p->jabatan }}</td>
                                <td>{{ $p->alamat_bekerja }}</td>
                                <td>{{ $p->saran_masukan }}</td>
                                <td>
                                    <a href="/admin/tracerstudy/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/admin/tracerstudy/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>