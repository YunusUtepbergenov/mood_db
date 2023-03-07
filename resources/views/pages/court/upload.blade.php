@extends('layouts.main')

@section('content')
<form action="#">
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <input class="form-control" type="file" id="formFile">        
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected="">Voyaga etmaganlar</option>
                    <option value="1">Ayollarga nisbatan zo'ravonlik</option>
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Yuklash</button>
        </div>
    </div>
</form>
<br><br>
    <div class="card">
        <h5 class="card-header">Yuklangan fayl</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr class="text-nowrap">
                <th>#</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

@endsection