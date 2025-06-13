<!-- Tambahkan link Bootstrap di bagian <head> jika belum ada -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="shadow-sm card">
        <div class="text-white card-header bg-primary">
            <h4 class="mb-0">Form Update Kendaraan</h4>
        </div>
        <div class="card-body">
            <!-- Form untuk Update -->
            <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $kendaraan->tanggal }}" required>
                </div>
                <div class="mb-3">
                    <label for="merk_kendaraan" class="form-label">Merk Kendaraan</label>
                    <input type="text" class="form-control" id="merk_kendaraan" name="merk_kendaraan" value="{{ $kendaraan->merk_kendaraan }}" required>
                </div>
                <div class="mb-3">
                    <label for="nomor_plat" class="form-label">Nomor Plat</label>
                    <input type="text" class="form-control" id="nomor_plat" name="nomor_plat" value="{{ $kendaraan->nomor_plat }}" required>
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $kendaraan->lokasi }}" required>
                </div>
                <div class="mb-3">
                    <label for="warna" class="form-label">Warna</label>
                    <input type="text" class="form-control" id="warna" name="warna" value="{{ $kendaraan->warna }}" required>
                </div>
                <div class="mb-3">
                    <label for="bahan_bakar" class="form-label">Bahan Bakar</label>
                    <select class="form-select" id="bahan_bakar" name="bahan_bakar" required>
                        <option value="Pertamax" {{ $kendaraan->bahan_bakar == 'Pertamax' ? 'selected' : '' }}>Pertamax</option>
                        <option value="Pertalite" {{ $kendaraan->bahan_bakar == 'Pertalite' ? 'selected' : '' }}>Pertalite</option>
                        <option value="Listrik" {{ $kendaraan->bahan_bakar == 'Listrik' ? 'selected' : '' }}>Listrik</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="Tersedia" {{ $kendaraan->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                        <option value="Tidak Tersedia" {{ $kendaraan->status == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga (Rp)</label>
                    <input type="number" class="form-control" id="harga" name="harga" step="0.01" value="{{ $kendaraan->harga }}" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Kendaraan</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if ($kendaraan->image)
                        <img src="{{ Storage::url($kendaraan->image) }}" alt="Image" class="mt-2" width="100">
                    @else
                        <img src="{{ asset('images/no-image.png') }}" alt="No image" class="mt-2" width="100">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
</div>
