@extends('layouts.navbar_admin')
@extends('layouts.sidebar_admin')

  @section('konten')
        <div class="content">
            <div class="animated">
                <div class="row">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Guru</strong>
                            </div>
                            <div class="table-stats">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>                                
                                            <th>Agama</th>
                                            <th>No.Telepon</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="serial">191012</td>
                                            <td>Taehyung</td>
                                            <td><span class="jenis_kelamin">Laki-Laki</span> </td>
                                            <td><span class="tempat_lahir">Medan</span> </td>
                                            <td><span class="tanggal_lahir">12 Januari 1993</span></td>
                                            <td><span class="agama">Islam</span></td>
                                            <td><span class="no_telp">081290345678</span></td>
                                            <td><button type="button" class="btn btn-primary">Detail</button></td>
                                            <td><button type="button" class="btn btn-success">Edit</button></td>
                                            <td><button type="button" class="btn btn-danger">Hapus</button></td>
                                        </tr>
                                        <tr>
                                            <td class="serial">191013</td>
                                            <td>Hyolyn</td>
                                            <td><span class="jenis_kelamin">Perempuan</span> </td>
                                            <td><span class="tempat_lahir">Kisaran</span> </td>
                                            <td><span class="tanggal_lahir">30 September 1997</span></td>
                                            <td><span class="agama">Kristen</span></td>
                                            <td><span class="no_telp">081345876910</span></td>
                                            <td><button type="button" class="btn btn-primary">Detail</button></td>
                                            <td><button type="button" class="btn btn-success">Edit</button></td>
                                            <td><button type="button" class="btn btn-danger">Hapus</button></td>
                                        </tr>
                                        <tr>
                                            <td class="serial">191014</td>
                                            <td>Namjoon</td>
                                            <td><span class="jenis_kelamin">Laki-Laki</span> </td>
                                            <td><span class="tempat_lahir">Jakarta</span> </td>
                                            <td><span class="tanggal_lahir">23 Januari 1993</span></td>
                                            <td><span class="agama">Buddha</span></td>
                                            <td><span class="no_telp">08129034890</span></td>
                                            <td><button type="button" class="btn btn-primary">Detail</button></td>
                                            <td><button type="button" class="btn btn-success">Edit</button></td>
                                            <td><button type="button" class="btn btn-danger">Hapus</button></td>
                                        </tr>
                                        <tr>
                                            <td class="serial">191015</td>
                                            <td>Shannon</td>
                                            <td><span class="jenis_kelamin">Perempuan</span> </td>
                                            <td><span class="tempat_lahir">Medan</span> </td>
                                            <td><span class="tanggal_lahir">21 Mei 1999</span></td>
                                            <td><span class="agama">Hindu</span></td>
                                            <td><span class="no_telp">081290345678</span></td>
                                            <td><button type="button" class="btn btn-primary">Detail</button></td>
                                            <td><button type="button" class="btn btn-success">Edit</button></td>
                                            <td><button type="button" class="btn btn-danger">Hapus</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
        @endsection