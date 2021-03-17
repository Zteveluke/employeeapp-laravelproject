@extends("search")
@section("content")
<div class="container">
    <table class="table">
        <tr>
            <td>Employee Name</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Employee Code</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Employee Designation</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Salary</td>
            <td><input type="number" class="form-control"></td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td><input type="date" name="" id=""></td>
        </tr>
        <tr>
            <td>Place</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Pincode</td>
            <td><input type="number" class="flow-control"></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="number" class="flow-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" class="btn btn-warning">Submit</button></td>
        </tr>
    </table>
</div>
@endsection