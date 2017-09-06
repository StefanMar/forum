@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new thread</div>

                <form action="/action_page.php">
                    <p><b>Title:</b></p>
                    <input name="fname" cols="100"><br>
                    <p><b>Body:</b></p>
                    <textarea name="message" rows="10" cols="100"></textarea><br>
                    <input type="submit" value="Publish">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
