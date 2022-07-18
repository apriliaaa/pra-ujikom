<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kasir') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-3 my-3">
                    <a class="btn btn-warning mb-3" href="{{ route('data-kasir') }}">Back</a>
                    <form method="POST" action="{{ route('simpan-kasir') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="no-anggota" class="form-label">Kode Kasir</label>
                            <input name="kodeksr" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="nama-anggota" class="form-label">Nama Kasir</label>
                            <input name="namaksr" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="wajib" class="form-label">Password</label>
                            <input name="passwordksr" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>