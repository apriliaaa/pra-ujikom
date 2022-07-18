<x-app-layout>
    
    <div class="mx-3 my-3">
        <a class="btn btn-primary" href="{{ route('tambah-simpan') }}">Tambah Data Simpan</a>
        <table class="table caption-top">
            <caption>List of users</caption>
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">No Simpan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">No Anggota</th>
                <th scope="col">Jumlah Simpan</th>
                <th scope="col">Kode Kasir</th>                
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($simpan as $item)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $item->no_simpan }}</td>
                  <td>{{ $item->tanggal }}</td>
                  <td>{{ $item->no_anggota }}</td>
                  <td>{{ $item->jmlsimpan }}</td>
                  <td>{{ $item->kodeksr }}</td>
                  <td class="d-flex">
                      <a class="btn btn-warning" href="{{ route('edit-simpan', $item->no_simpan) }}">Edit</a>
                      <form method="POST" action="{{ route('delete-simpan', $item->no_simpan) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger show-alert-delete-box" data-toggle="tooltip" title='Delete'>
                           Delete
                        </button>
                    </form>
                  </td>
                </tr>
                    
                @endforeach
              
            </tbody>
          </table>
    </div>
</x-app-layout>