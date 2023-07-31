@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Transaksi {{$item->uuid}}</strong>
            
        </div>
        <div class="card-body card-block">
            <form action="{{route('transactions.update', $item->id)}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Pemesan</label>
                    <input type="text" name="name" value="{{old('name') ? old('name') : $item->name }}" class="form-control" @error('name') is -nvalid @enderror/>
                    @error('name')
                    <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input type="text" name="email" value="{{old('email') ? old('email') : $item->email }}" class="form-control" @error('type') is -nvalid @enderror/>
                    @error('email')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="number" class="form-control-label">Nomor HP</label>
                    <input type="text" name="number" value="{{old('number') ? old('number') : $item->number }}" class="form-control" @error('number') is -nvalid @enderror/>
                    @error('number')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="address" class="form-control-label">Alamat</label>
                    <input type="text" name="address" value="{{old('address') ? old('address') : $item->address}}" class="form-control" @error('address') is -nvalid @enderror/>
                    @error('address')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Transaksi
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection