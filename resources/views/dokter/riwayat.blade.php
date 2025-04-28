

@extends('dokter.layout.layoutdokter')

@section('title', 'Dokter Dashboard')

@section('content')

<div class="container mt-5">

<h1 class="mb-4">Riwayat Periksa</h1>

<div class="card">
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>ID Periksa</th>
                    <th>Obat</th>
                    <th>Biaya</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh Data, nanti bisa pakai foreach kalau data dari database -->
                <tr>
                    <td>1</td>
                    <td>PRK001</td>
                    <td>Paracetamol</td>
                    <td>Rp 150.000</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detailModal1">
                            Detail
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PRK002</td>
                    <td>Amoxicillin</td>
                    <td>Rp 200.000</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detailModal2">
                            Detail
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Detail 1 -->
<div class="modal fade" id="detailModal1" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Pemeriksaan PRK001</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>Obat:</strong> Paracetamol</p>
                <p><strong>Biaya:</strong> Rp 150.000</p>
                <p><strong>Diagnosa:</strong> Demam dan Sakit Kepala</p>
                <p><strong>Tanggal Periksa:</strong> 27 April 2025</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail 2 -->
<div class="modal fade" id="detailModal2" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Pemeriksaan PRK002</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>Obat:</strong> Amoxicillin</p>
                <p><strong>Biaya:</strong> Rp 200.000</p>
                <p><strong>Diagnosa:</strong> Infeksi Tenggorokan</p>
                <p><strong>Tanggal Periksa:</strong> 28 April 2025</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

</div>

@endsection
