@extends("theme")
@section("content")
<div class="container">
      <div class="row">
          <div class="col col-12 col-sm-6 col-6">
              <img height="500px" src="https://cdn5.vectorstock.com/i/1000x1000/71/94/cartoon-happy-chef-holding-a-silver-platter-vector-6587194.jpg=" alt="">
          </div>
          <div class="col col-12 col-sm-6 col-lg-6">
              <h2><i>join us!!!</i></h2>
              <table class="table">
                  <tr>
                      <td>Name</td>
                      <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                      <td>Email</td>
                      <td><input type="email" name="email" id="email"></td>
                  </tr>
                  <tr>
                      <td>Password</td>
                      <td><input type="password" name="password" id="password"></td>
                  </tr>
                  <tr>
                      <td>Confirm Password</td>
                      <td><input type="password" name="password" id="password"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><button class="btn btn-success">Submit</button></td>
                  </tr>
              </table>
          </div>
      </div>

@endsection