@extends('layouts.layout')
@section('navbar')

<h1>CREATE ITEM FORM</h1>

<form action="{{route('createItem')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input name="category" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Category">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Name">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input name="price" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Price">
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input name="amount" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Amount">
    </div>
    <div class="mb-3">
        <label for="image">Item Image</label>
        <input name="image" type="file" id="image" accept="image/*">
    </div>
    <button type="submit" class="btn btn-success">Insert</button>
</form>
@endsection
