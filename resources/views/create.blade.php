@extends('app')
@section('page','Add new')
@section('page-sub-title','Add your personel info')
@section('main-content')
      <div class="user-form w-25 mx-auto my-5">
      <a class="btn btn-primary" href="./user.php" >All teachers</a>
          <div class="card shadow ">
         
              <div class="card-header">
                  <h1 calss ="card-title">Create teachers account</h1>
              </div>
              <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label class = "form-label" for="name">Name </label>
                          <input name="name" type ="text" id ="name" value="<" class="form-control">
                      </div>
                      <div class="form-group">
                          <label class = "form-label" for="salary">Salary </label>
                          <input name="salary" type ="text" id ="salary" value="" class="form-control">
                      </div>
                      <div class="form-group">
                          <label class = "form-label" for="email">Email </label>
                          <input name="email" type ="text" id ="email" value="" class="form-control">
                          <?php echo $email_chk ?? '' ?>
                      </div>
                      <div class="form-group">
                          <label class = "form-label" for="cell">Cell </label>
                          <input name="cell" type ="text" id ="cell" value="" class="form-control">
                      </div>
                      <div class="form-group">
                          <label class = "form-label" for="dpt">Department </label>
                          <input name="dpt" type ="text" id ="dpt" value="" class="form-control">
                      </div>
                      <div class="form-group">
                      <label for="">Gender</label></label>
                         <input name="gender" type ="radio" id ="Male" value="Male" > <label for="Male">Male </label>
                         <input name="gender" type ="radio" id ="Female" value="Female" > <label  for="Female">Female </label>
                      </div>
                      <br>
                      <div class="form-group">
                          <label for="">Last certificate</label>
                          <select class ="form-control" name="edu" id="">
                              <option>--Select--</option>
                              <option>Bachelor</option>
                              <option>Masters</option>
                              <option>Phd</option>
                              <option>PGDM</option>
                          </select>
                      </div>
                      <br>
                      <div class="form-group">
                         <input name="photo" type ="file" > 
                         
                      </div>
                      <br>
                     
                      <div class="form-group">
                         <input class ="btn btn-primary" name="submit" type ="submit" valeu="submit" > 
                         
                      </div>
                      <div class="card-footer">
                          <h1>It is card footer</h1>
                      </div>
                  </form>
              </div>
          </div>
  
      </div>
@endsection
