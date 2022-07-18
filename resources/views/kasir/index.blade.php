<x-app-layout>

    
    <div class="mx-3 my-3">
        <a class="btn btn-primary" href="{{ route('tambah-kasir') }}">Tambah Data Kasir</a>
        <table class="table caption-top">
            <caption>List of users</caption>
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Kasir</th>
                <th scope="col">Nama Kasir</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($kasir as $item)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $item->kodeksr }}</td>
                  <td>{{ $item->namaksr }}</td>
                  <td class="d-flex">
                      <a class="btn btn-warning mr-3" href="{{ route('edit-kasir', $item->kodeksr) }}">Edit</a>
                      <form method="POST" action="{{ route('delete-kasir', $item->kodeksr) }}">
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