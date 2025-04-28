@extends('layouts.main')

@section('title', 'Pasien Dashboard')

@section('content')

<div class="d-flex flex-column">
    <div>
        <h1 class="fw-bold mb-4">Dashboard Pasien</h1>

        <div class="card">
            <div class="card-body">
                <h5>Daftar Dokter</h5>
                <table class="table table-bordered table-striped mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dokter</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dokters as $index => $dokter)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $dokter->name }}</td>
                            <td>{{ $dokter->email }}</td>
                            <td>{{ $dokter->no_hp ?? '-' }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#daftarModal{{ $dokter->id }}">
                                    Daftar
                                </button>
                            </td>
                        </tr>

                        <!-- Modal untuk setiap Dokter -->
                        <div class="modal fade" id="daftarModal{{ $dokter->id }}" tabindex="-1" role="dialog" aria-labelledby="daftarModalLabel{{ $dokter->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('periksa.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Form Daftar Periksa</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" name="dokter_id" value="{{ $dokter->id }}">
                                            <div class="form-group">
                                                <label>Nama Pasien</label>
                                                <input type="text" class="form-control" value="{{ auth()->user()->name }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Dokter</label>
                                                <input type="text" class="form-control" value="{{ $dokter->name }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="keluhan">Keluhan</label>
                                                <textarea name="keluhan" class="form-control" rows="3" required></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Kirim</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection
