@extends('Frontend.LA DataAnggota')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Anggota</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">List Anggota</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    List Anggota
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>No. Telp</th>
                                <th>Alamat</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>No. Telp</th>
                                <th>Alamat</th>
                                <th>Edit</th>
                            </tr>
                        </tfoot>
                        <tbody>
                                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection