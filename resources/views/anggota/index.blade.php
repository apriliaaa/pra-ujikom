<x-app-layout>
    
    <div class="mx-3 my-3">
        <a class="btn btn-primary" href="{{ route('tambah-anggota') }}">Tambah Data Anggota</a>
        <table class="table caption-top">
            <caption>List of users</caption>
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">No Anggota</th>
                <th scope="col">Nama Anggota</th>
                <th scope="col">Wajib</th>
                <th scope="col">Pokok</th>
                <th scope="col">Saldo</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($anggota as $item)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $item->no_anggota }}</td>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->wajib }}</td>
                  <td>{{ $item->pokok }}</td>
                  <td>{{ $item->saldo }}</td>
                  <td class="d-flex">
                      <a class="btn btn-warning" href="{{ route('edit-anggota', $item->no_anggota) }}">Edit</a>
                      <form method="POST" action="{{ route('delete-anggota', $item->no_anggota) }}">
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