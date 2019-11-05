
  <div class="content">
    <h1> Tambah Buku</h1>
    <hr>
    @if($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      <li> <strong>{{ $error }}</strong> </li>
      @endforeach
    </div>
    @endif

    <form action="{{ route('buku.store') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="nama_buku">Nama Buku: </label>
        <input type="String" class="form-control" id="nama_buku" name="nama_buku">
      </div>

      <div class="form-group">
        <label for="kode_buku">Kode Buku: </label>
        <input type="text" class="form-control" id="kode_buku" name="kode_buku">
      </div>
      
      <div class="form-group">
        <label for="penerbit">Penerbit: </label>
        <input type="text" class="form-control" id="penerbit" name="penerbit">
      </div>

      <div class="form-group">
        <label for="jumlah">Jumlah: </label>
        <input type="String" class="form-control" id="jumlah" name="jumlah">
      </div>


      </div> 
      <div class="form-group">
        <button type="submit" class="btn btn-md btn-primary">Submit</button>
        <button type="reset" class="btn btn-md btn-danger">Cancel</button>

      </div>

    </form>
  </div>
