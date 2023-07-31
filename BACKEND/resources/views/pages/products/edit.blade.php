@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Barang {{$item->name}}</strong>
            
        </div>
        <div class="card-body card-block">
            <form action="{{route('products.update', $item->id)}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <input type="text" name="name" value="{{old('name') ? old('name') : $item->name }}" class="form-control" @error('name') is -nvalid @enderror/>
                    @error('name')
                    <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="type" class="form-control-label">Tipe Barang</label>
                    <input type="text" name="type" value="{{old('type') ? old('type') : $item->type }}" class="form-control" @error('type') is -nvalid @enderror/>
                    @error('type')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description" class="form-control-label">Deskripsi Barang</label>
                    <textarea name="description" class="form-control ckeditor" @error('description') is -nvalid @enderror>{{old('description') ? old('description') : $item->description }}</textarea>
                    @error('description')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price" class="form-control-label">Price</label>
                    <input type="number" name="price" value="{{old('price') ? old('price') : $item->price }}" class="form-control" @error('price') is -nvalid @enderror/>
                    @error('price')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="quantity" class="form-control-label">Quantity</label>
                    <input type="number" name="quantity" value="{{old('quantity') ? old('quantity') : $item->quantity}}" class="form-control" @error('quantity') is -nvalid @enderror/>
                    @error('quantity')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Barang
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection