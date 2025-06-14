<!-- Tambahkan link Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="shadow-sm card">
        <div class="text-white card-header bg-primary">
            <h4 class="mb-0">Form Sewa Kendaraan</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('transaksi.store') }}" method="POST">
                @csrf

                <!-- Nama Pengguna -->
                <div class="mb-3">
                    <label for="user_id" class="form-label">ID Pengguna</label>
                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="text" class="form-control" value="{{ auth()->user()->name }}" readonly>
                </div>

                <!-- ID Kendaraan -->
                <div class="mb-3">
                    <label for="kendaraan_id">Kendaraan</label>
                    <select id="kendaraan_id" name="kendaraan_id" class="form-control" required>
                        <option value="">-- Pilih Kendaraan --</option>
                        @foreach($kendaraans as $kendaraan)
                            <option value="{{ $kendaraan->id }}">{{ $kendaraan->merk_kendaraan }} - {{ $kendaraan->nomor_plat }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Merk Kendaraan -->
                <div class="mb-3">
                    <label for="merk_kendaraan" class="form-label">Merk Kendaraan</label>
                    <input type="text" class="form-control" id="merk_kendaraan" name="merk_kendaraan" readonly>
                </div>

                <!-- Harga Sewa per Hari -->
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Sewa per Hari (Rp)</label>
                    <input type="text" class="form-control" id="harga" name="harga" readonly>
                </div>

                <!-- Tanggal Sewa -->
                <div class="mb-3">
                    <label for="tanggal_sewa" class="form-label">Tanggal Sewa</label>
                    <input type="date" class="form-control" id="tanggal_sewa" name="tanggal_sewa" required onchange="hitungTotalHarga()">
                </div>

                <!-- Tanggal Kembali -->
                <div class="mb-3">
                    <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required onchange="hitungTotalHarga()">
                </div>

                <!-- Total Harga -->
                <div class="mb-3">
                    <label for="total_harga" class="form-label">Total Harga Pembayaran (Rp)</label>
                    <input type="text" class="form-control" id="total_harga" name="total_harga" readonly>
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-primary w-100">Sewa</button>
            </form>
        </div>
    </div>
</div>

<script>
    function hitungTotalHarga() {
        const hargaPerHari = parseInt(document.getElementById('harga').value) || 0;
        const tanggalSewa = new Date(document.getElementById('tanggal_sewa').value);
        const tanggalKembali = new Date(document.getElementById('tanggal_kembali').value);

        if (!isNaN(tanggalSewa) && !isNaN(tanggalKembali) && tanggalKembali > tanggalSewa) {
            const totalHari = Math.ceil((tanggalKembali - tanggalSewa) / (1000 * 60 * 60 * 24));
            const totalHarga = totalHari * hargaPerHari;
            document.getElementById('total_harga').value = totalHarga.toLocaleString('id-ID');
        } else {
            document.getElementById('total_harga').value = '';
        }
    }
</script>