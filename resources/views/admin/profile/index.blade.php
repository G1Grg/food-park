@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update User Profile</h4>
                <div class="card-header-action">
                    <a href="#" class="btn btn-primary">
                        View All
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                </form>
            </div>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update User Password</h4>
                <div class="card-header-action">
                    <a href="#" class="btn btn-primary">
                        View All
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control" name="password confirmation">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
