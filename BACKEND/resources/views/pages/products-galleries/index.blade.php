@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Foto Barang</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>#</th>
                                        <th>Nama Barang</th>
                                        <th>Foto</th>
                                        <th>Default</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $key => $item)
                                    <tr>
                                        <td>{{$items->firstItem() + $key}}</td>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->product->name}}</td>
                                        <td>
                                            <img src="{{ $item->photo }}" alt="">
                                        </td>
                                        <td>{{$item->is_default ? 'Ya' : 'Tidak'}}</td>
                                        <td>
                                            <form action="{{route('products-galleries.destroy', $item->id)}}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center p-5">
                                                Data Kosong
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{$items->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection