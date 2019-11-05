<!-- @extends('template') -->
<!-- @section('content') -->
<section class="main-section">
<div class="content">
    <h1> Edit Buku</h1>
    <hr>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
      <li> <strong>{{ $error }}</strong> </li>
      @endforeach
        </ul>
    
    </div>
    @endif

    @foreach($data as $datas)
    <form action="{{ route('buku.update',$datas->id) }}" method="post">
      {{ csrf_field() }}
      {{method_field('PUT')}}
      <div class="form-group">
        <label for="nama_buku">Nama Buku: </label>
        <input type="String" class="form-control" id="nama_buku" name="nama_buku"  value="{{ $datas->nama_buku}}">
      </div>

      <div class="form-group">
        <label for="kode_buku">Kode Buku: </label>
        <input type="text" class="form-control" id="kode_buku" name="kode_buku" value="{{ $datas->kode_buku}}">
      </div>
      
      <div class="form-group">
        <label for="penerbit">Penerbit: </label>
        <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $datas->penerbit}}">
      </div>

      <div class="form-group">
        <label for="jumlah">Jumlah: </label>
        <input type="String" class="form-control" id="jumlah" name="jumlah" value="{{ $datas->jumlah}}">
      </div>


      </div> 
      <div class="form-group">
        <button type="submit" class="btn btn-md btn-primary">Submit</button>
        <button type="reset" class="btn btn-md btn-danger">Cancel</button>

      </div>

    </form>
    <!-- @endforeach -->
  </div>
</section>
<!-- @endsection -->
 