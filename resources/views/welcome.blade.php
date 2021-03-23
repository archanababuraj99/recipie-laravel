@extends("theme")
@section("content")

  <div class="container">
      <div class="row">
          <div class="col col-12 col-sm-6 col-lg-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img height="500px" src="https://cdn.vox-cdn.com/thumbor/fWdJKI_dirNSL2bBWVVWVW_I4-Q=/0x0:7360x4912/1200x800/filters:focal(3092x1868:4268x3044)/cdn.vox-cdn.com/uploads/chorus_image/image/67000785/shutterstock_1435374326.0.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img height="500px" src="https://www.supermarketperimeter.com/ext/resources/2019/2/AfricanFoods_Lead.jpg?1551280728" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img height="500px" src="https://img.etimg.com/thumb/msid-72299767,width-1200,height-900,imgsize-365179,overlay-etpanache/photo.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>
          <div class="col col-12 col-sm-6 col-lg-6">
              <h2><i><center>Login</center></i></h2>
              <table class="table">
                  <tr>
                      <td>Username</td>
                      <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                      <td>Password</td>
                      <td><input type="password" name="password" id="password"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><button class="btn btn-Success">LOGIN</button></td>
                  </tr>
              </table>
          </div>
      </div>
      <div class="container">
          <h2><center><i>The Best and soul touched RECIPIES!!!</i></center></h2>
      </div>
      

      </div>
  </div>

@endsection