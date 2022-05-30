@extends('layouts.layout')
@section('navbar')
    <h1>UPDATE ITEM FORM</h1>

    <form action="{{ route('updateItem', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input name="category" type="text" class="form-control" id="formGroupExampleInput" value="{{ $item->category }}"
                placeholder="Input Category">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="formGroupExampleInput" value="{{ $item->name }}"
                placeholder="Input Name">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="numeric" class="form-control" id="formGroupExampleInput" value="{{ $item->price }}"
                placeholder="Input Price">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input name="amount" type="numeric" class="form-control" id="formGroupExampleInput" value="{{ $item->amount }}"
                placeholder="Input Amount">
        </div>
        <button type="submit" class="btn btn-success">Done</button>
    </form>
@endsection
