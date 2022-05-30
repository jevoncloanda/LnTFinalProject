@extends('layouts.layout')
@section('navbar')
    <h1>VIEW ITEMS</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Category</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Amount</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($itemz as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->name }}</td>
                    <td>Rp.{{ $item->price }}</td>
                    <td>{{ $item->amount }}</td>
                    <td><a href="{{route('viewImage', $item->id)}}">Image</a></td>
                    {{-- <td><img src="{{('storage/').$item->image}}" class="img-thumbnail" alt="..."></td> --}}
                    <td>
                        <a href="{{ route('getItemById', ['id' => $item->id]) }}"><button type="submit"
                                class="btn btn-success">Edit</button></a>
                        <form action="{{ route('deleteItem', ['id' => $item->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
