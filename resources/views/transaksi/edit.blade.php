<!-- Tambahkan link Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="shadow-sm card">
        <div class="text-white card-header bg-primary">
            <h4 class="mb-0">Form Edit Sewa Kendaraan</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('sewa.update', $sewa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Nama Pengguna -->
                <div class="mb-3">
                    <label for="user_id" class="form-label">ID Pengguna</label>
                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="text" class="form-control" value="{{ auth()->user()->name }}" readonly>
                </div>

                <!-- ID Kendaraan -->
                <div class="mb-3">
                    <label for="kendaraan_id" class="form-label">ID Kendaraan</label>
                    <input type="hidden" class="form-control" id="kendaraan_id" name="kendaraan_id" value="{{ $sewa->kendaraan_id }}">
                    <input type="text" class="form-control" value="{{ $sewa->kendaraan_id }}" readonly>
                </div>

                <!-- Merk Kendaraan -->
                <div class="mb-3">
                    <label for="merk_kendaraan" class="form-label">Merk Kendaraan</label>
                    <input type="text" class="form-control" id="merk_kendaraan" name="merk_kendaraan" value="{{ $sewa->merk_kendaraan }}" readonly>
                </div>

                <!-- Harga Sewa -->
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Sewa per Hari (Rp)</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="{{ $sewa->harga }}" readonly>
                </div>

                <!-- Tanggal Sewa -->
                <div class="mb-3">
                    <label for="tanggal_sewa" class="form-label">Tanggal Sewa</label>
                    <input type="date" class="form-control" id="tanggal_sewa" name="tanggal_sewa" value="{{ $sewa->tanggal_sewa }}" required>
                </div>

                <!-- Tanggal Kembali -->
                <div class="mb-3">
                    <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="{{ $sewa->tanggal_kembali }}" required>
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
</div>
