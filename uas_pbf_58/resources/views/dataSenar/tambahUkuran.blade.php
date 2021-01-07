@extends('layouts.master')
@section('content')
<div class="container">

    <form action="{{ url('pemasukan/add') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Ukuran</label>
                    <input type="number" name="ukuran" class="form-control" id="exampleFormControlInput1" placeholder="input ukuran">
                    @error('jumlah')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Tanggal</label>
                    <input name="tanggal" type="text" class="form-control datepicker" autocomplete="off" >
                    @error('tanggal')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlTextarea2">keterangan</label>
                    <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea2" rows="3" resize="none"></textarea>
                    @error('keterangan')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="simpan" >
                    
                </div>
      </div>
      
      
    </div>
    
</form>

</div>
@endsection