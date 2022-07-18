<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Pinjam') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-3 my-3">
                    <a class="btn btn-warning mb-3" href="{{ route('data-pinjam') }}">Back</a>
                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('simpan-pinjam') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="no-anggota" class="form-label">No Pinjam</label>
                            <input name="no_pinjam" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="nama-anggota" class="form-label">Tanggal</label>
                            <input name="tanggal" type="date" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="wajib" class="form-label">No Anggota</label>
                            <input name="no_anggota" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="pokok" class="form-label">Jumlah Simpan</label>
                            <input name="jmlpinjam" type="number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="saldo" class="form-label">Kode Kasir</label>
                            <input name="kodeksr" type="number" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>