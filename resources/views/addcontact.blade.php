@extends('layout.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Add Person information </h5>

                    <formv >
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="names" aria-describedby="emailHelp">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mobile</label>
                            <input type="text" class="form-control" id="phone" aria-describedby="emailHelp">
                        </div>
                        <button onclick="onSubmit();" type="submit" class="btn btn-primary">Add Persion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection