<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Anggota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-3 my-3">
                    <a class="btn btn-warning mb-3" href="{{ route('data-anggota') }}">Back</a>
                    <form method="POST" action="{{ route('update-anggota', $anggota->no_anggota) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="no-anggota" class="form-label">No Anggota</label>
                            <input name="no_anggota" type="text" class="form-control" value="{{ $anggota->no_anggota }}">
                        </div>
                        <div class="mb-3">
                            <label for="nama-anggota" class="form-label">Nama Anggota</label>
                            <input name="nama" type="text" class="form-control" value="{{ $anggota->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="wajib" class="form-label">Wajib</label>
                            <input name="wajib" type="number" class="form-control" value="{{ $anggota->wajib }}">
                        </div>
                        <div class="mb-3">
                            <label for="pokok" class="form-label">Pokok</label>
                            <input name="pokok" type="number" class="form-control" value="{{ $anggota->pokok }}">
                        </div>
                        <div class="mb-3">
                            <label for="saldo" class="form-label">Saldo</label>
                            <input name="saldo" type="number" class="form-control" value="{{ $anggota->saldo }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>