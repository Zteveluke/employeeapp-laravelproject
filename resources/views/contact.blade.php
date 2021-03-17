@extends("search")
@section("content")
<div class="container">
    <table class="table">
        <tr>
            <td>Employee Code</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" class="btn btn-info">Search</button></td>
        </tr>
    </table>
</div>
@endsection