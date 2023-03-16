@extends('layout')

@section('content')
    <h1>File Upload</h1>

    @if(isset($message))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    @if(isset($error))
        <div class="alert alert-danger">{{ $error }}</div>
    @endif

    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Choose a file to upload:</label>
            <input type="file" name="file" id="file" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
    
