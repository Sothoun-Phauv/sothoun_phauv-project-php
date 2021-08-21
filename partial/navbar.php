<div class="container p-1 mt-4">
  <div class="row d-flex justify-content-center">
    <div class="col-sm-4 ">
      <div class="card border border-0">
      <div class="card-body">
          <img src="assets/images/khmer.gif" class="rounded" alt="Please Check the internet" style="width:100%; height:110px">
      </div>    
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card border border-0">
        <div class="card-body">
        <div class="text-center">
          <img src="assets/images/image.png" class="rounded" alt="Please Check the internet" style="width:140px; height:140px">
        </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card border border-0">
        <div class="card-body">
          <img src="assets/images/khmer.gif" class="rounded" alt="Please Check the internet" style="width:100%; height:110px">
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary mt-3">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link text-light" href="?page=home"><i class="fa fa-home" style="font-size:25px"></i> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold text-light" href="?page=business" style="font-size:17px;">Business</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold text-light" href="?page=khmer" style="font-size:17px;">Khmer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold text-light" href="?page=sport" style="font-size:17px;">Sports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold text-light" href="?page=agriculture" style="font-size:17px;">Agriculture</a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link font-weight-bold text-light" href="?page=about" style="font-size:17px;">About US</a> -->
          <!-- Example single danger button -->
        <div class="btn-group">
          <a type="button" class="btn dropdown-toggle nav-link font-weight-bold text-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Short By
          </a>
          <div class="dropdown-menu bg-primary">
            <a class="dropdown-item font-weight-bold" href="?page=news">New Arrived</a>
            <a class="dropdown-item font-weight-bold" href="?page=new">News Title</a>
          </div>
        </div>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold text-light" href="?page=contact" style="font-size:17px;">Contact US</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fa fa-search" style="font-size:13px"></i></button> -->
        <a href="process/create.php" class="btn btn-danger btn-sm mr-2 ml-2"> <i class="fa fa-arrow-circle-lefts" style="font-size:24px">Add</i></a>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
          <i class="fa fa-user-circle" aria-hidden="true"></i>
        </button>

        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <input type="text">
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>

  </nav>
</div>