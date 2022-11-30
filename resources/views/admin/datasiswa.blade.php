@extends('layouts.navbar_admin')
@extends('layouts.sidebar_admin')

  @section('konten')
        <div class="content">
            <div class="animated">
                <div class="row">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Siswa</strong>
                            </div>
                            <div class="table-stats">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>NISN</th>
                                            <th>Nama Lengkap</th>
                                            <th>NIS</th>
                                            <th>Kelas</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Rombel</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="serial">200124</td>
                                            <td>Tiara Andini</td>
                                            <td><span class="nis"></span>322114</td>
                                            <td><span class="kelas">12</span> </td>
                                            <td><span class="jenis_kelamin">Perempuan</span></td>
                                            <td><span class="rombel">12 MIPA 1 </span></td>
                                            <td><button type="button" class="btn btn-success">Edit</button></td>
                                            <td><button type="button" class="btn btn-primary">Detail</button></td>
                                            <td><button type="button" class="btn btn-danger">Hapus</button></td>
                                        </tr>
                                        <tr>
                                            <td class="serial">202001</td>
                                            <td>Lyodra Ginting</td>
                                            <td><span class="nis"></span>653143</td>
                                            <td><span class="kelas">11</span> </td>
                                            <td><span class="jenis_kelamin">Perempuan</span></td>
                                            <td><span class="rombel">11 IPS 2 </span></td>
                                            <td><button type="button" class="btn btn-success">Edit</button></td>
                                            <td><button type="button" class="btn btn-primary">Detail</button></td>
                                            <td><button type="button" class="btn btn-danger">Hapus</button></td>
                                        </tr>
                                        <tr>
                                            <td class="serial">200543</td>
                                            <td>Arsya Widianto</td>
                                            <td><span class="nis"></span>213652</td>
                                            <td><span class="kelas">12</span> </td>
                                            <td><span class="jenis_kelamin">Laki-laki</span></td>
                                            <td><span class="rombel">12 MIPA 5 </span></td>
                                            <td><button type="button" class="btn btn-success">Edit</button></td>
                                            <td><button type="button" class="btn btn-primary">Detail</button></td>
                                            <td><button type="button" class="btn btn-danger">Hapus</button></td>
                                        </tr>
                                        <tr>
                                            <td class="serial">200974</td>
                                            <td>Ziva Magnolya</td>
                                            <td><span class="nis"></span>322114</td>
                                            <td><span class="kelas">10</span> </td>
                                            <td><span class="jenis_kelamin">Perempuan</span></td>
                                            <td><span class="rombel">10 MIPA 1 </span></td>
                                            <td><button type="button" class="btn btn-success"><i class="fa fa-pen-to-square"></i>Edit</button></td>
                                            <td><button type="button" class="btn btn-primary"><i class="fa fa-eye"> Detail</i></button></td>
                                            <td><button type="button" class="btn btn-danger">Hapus</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
        @endsection