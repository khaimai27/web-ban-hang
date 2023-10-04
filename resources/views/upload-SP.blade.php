@extends('layout')
@section('content')
<form method="POST" action="{{route('doUpload')}}" enctype="multipart/form-data">
    @csrf
    <input type="file" multiple name="hinh_anh"/>
    <button type="sumit">Upload</button>
</form>
@endsection