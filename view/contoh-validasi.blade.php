{{--  Id nya samakan dengan yang di bawah  --}}
<form id="cobaForm" action="#" method="POST">
  <div>
    <label for="nama">Nama</label>
    <input name="nama" type="text">
  </div>
  <div>
    <label for="umur">Umur</label>
    <input name="umur" type="text">
  </div>
  <div>
    <label for="hobi">Hobi</label>
    <input name="hobi" type="text">
  </div>
  <div>
    <button type="submit">Simpan</button>
  </div>
</form>
{{--  Include dependensi nya  --}}
<script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
{{--  Ini gasan validator nya, sesuaikan aja lawan projek  --}}
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js', false)}}"></script>
{!! $validasi->selector('#cobaForm') !!}