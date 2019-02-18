<!-- Page Content -->
<div class="container">

  <!-- Projects Row -->
  <div class="row">
    <div class="col-sm-12 mb10">
      <ul class="breadcrumb">
        <li><a href="<?=base_url()?>">Home</a></li>                     
        <li><a href="<?=base_url().'user/dining'?>">Dining</a></li>
        <li><a href="<?=base_url().'user/dining/barclub'?>">Bar/Club</a></li>
        <li class="active">Potato Head Beach Club</li>
      </ul>
    </div>
    <div class="col-md-9">
      <div class="panel panel-default detail">
        <div class="panel-body">
          <div class="img-prev">        
            <img class="img-responsive" src="<?=base_img().'content/dining/2.jpg'?>" alt="">   
          </div>       

          <div class="row">
            <div class="col-sm-10 desc">
              <h3><strong>Potato Head Beach Club</strong></h3>
              <h5>Bar/Club</h5>
            </div>
            <div class="col-sm-2">
              <div class="bs-component">
                <button type="button" class="btn btn-raised btn-success rating" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Good"><span class="rate">4.2</span>/5</button>
              </div>
            </div>
          </div>                  
        </div>
      </div>

      <div class="col-sm-12 panel panel-default">
        <ul class="nav nav-tabs tabdetail">
          <li class="active"><a href="#home" data-toggle="tab">Overview</a></li>
          <li><a href="#profile" data-toggle="tab">Look Map</a></li>
        </ul>
        <div id="myTabContent" class="tab-content tabdetail">
          <div class="tab-pane fade active in" id="home">
            <div class="row">
              <div class="col-sm-4">
                <h4><strong>Open Hours</strong></h4>
                <p>09:00 AM - 10:30 PM</p>
              </div>              
              <div class="col-sm-4">
                <h4><strong>Address</strong></h4>
                <p>Jl. A Yani Utara Riverside Block C-1, 65126, Lawang</p>
              </div>
              <div class="col-sm-4">
                <h4><b>Telephone</b></h4>
                <p>081335826606</p>
              </div>              
            </div>
          </div>
          <div class="tab-pane fade" id="profile">
            <div class="row">
              <div class="col-sm-12 ">
                <p>Jl. A Yani Utara Riverside Block C-1, 65126, Lawang</p>
                <a href="javascript:void(0)" class="btn btn-raised btn-info"><i class="material-icons">directions</i> Get Direction</a>
                <a href="#">
                  <img class="img-responsive" src="<?=base_img().'content/dining/content.jpg'?>" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 panel panel-default">
        <div class="panel-body">
          <h4><strong>Give Review</strong></h4>
          <div class="form-group">
            <div class="col-sm-10">
              <input class="form-control" id="inputText" placeholder="Give your review..." type="text">
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 panel panel-default">
        <div class="panel-body">
          <h4><strong>Review</strong></h4>
          <div class="list-group">
            <div class="list-group-item">
              <div class="row-picture">
                <img class="circle" src="<?=base_img().'profile/2.jpg'?>" alt="icon">
              </div>
              <div class="row-content">
                <h2 class="list-group-item-heading">Tono</h2>

                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-picture">
                <img class="circle" src="<?=base_img().'profile/2.jpg'?>" alt="icon">
              </div>
              <div class="row-content">
                <h4 class="list-group-item-heading">Tile with another avatar</h4>

                <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
              </div>
            </div>

            <div class="list-group-separator"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="recomended-title">Recommended</div>      
      <div class="panel panel-default recomended" style="background-image: url('<?=base_img().'content/dining/1.jpg'?>');">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12 desc">
              <div class="row">
                <div class="col-xs-8 truncate">
                  <a href="#" class="sub-category">Traditional</a><br>
                  <a href="#" class="restaurant nowrap"><b>Budhe Har</b></a>
                </div>
                <div class="col-xs-4">
                  <div class="bs-component">
                    <button type="button" class="btn btn-success rating" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Good"><i class="material-icons">star</i>&nbsp;4.2/5</button>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <h6 class="truncate">Jl.Danau Toba, Sawojajar, Malang</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default recomended" style="background-image: url('<?=base_img().'content/dining/5.jpg'?>');">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12 desc">
              <div class="row">
                <div class="col-xs-8 truncate">
                  <a href="#" class="sub-category">Bakery/Desert</a><br>
                  <a href="#" class="restaurant nowrap"><b>Livingstone</b></a>
                </div>
                <div class="col-xs-4">
                  <div class="bs-component">
                    <button type="button" class="btn btn-success rating" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Good"><i class="material-icons">star</i>&nbsp;4.2/5</button>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <h6 class="truncate">Jl.Danau Toba, Sawojajar, Malang</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default recomended" style="background-image: url('<?=base_img().'content/dining/3.jpg'?>');">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12 desc">
              <div class="row">
                <div class="col-xs-8 truncate">
                  <a href="#" class="sub-category">Western</a><br>
                  <a href="#" class="restaurant nowrap"><b>Sisterfields</b></a>
                </div>
                <div class="col-xs-4">
                  <div class="bs-component">
                    <button type="button" class="btn btn-success rating" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Good"><i class="material-icons">star</i>&nbsp;4.2/5</button>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <h6 class="truncate">Jl.Danau Toba, Sawojajar, Malang</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default recomended" style="background-image: url('<?=base_img().'content/dining/2.jpg'?>');">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12 desc">
              <div class="row">
                <div class="col-xs-8 truncate">
                  <a href="#" class="sub-category">Bar/Club</a><br>
                  <a href="#" class="restaurant nowrap"><b>Potato Head Beach Club</b></a>
                </div>
                <div class="col-xs-4">
                  <div class="bs-component">
                    <button type="button" class="btn btn-success rating" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Good"><i class="material-icons">star</i>&nbsp;4.2/5</button>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <h6 class="truncate">Jl.Danau Toba, Sawojajar, Malang</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-default nearme">
        <div class="panel-body">
          <div class="filter"><p><b>Nearby Restaurant</b></p></div>
          <hr>
          <div class="list-group">
            <a href="#">
              <div class="list-group-item">
                <div class="row">
                  <div class="col-sm-4 img">
                    <img src="<?=base_img().'content/dining/6.jpg'?>" alt="nasipedas_icon">
                  </div>
                  <div class="col-sm-8 desc">
                    <h5 class="list-group-item-heading truncate">Nasi Pedas Bu Andika</h5>
                    <p class="list-group-item-text">Traditional - Jl.Danau Toba, Sawojajar</p>
                  </div>
                </div>
              </div>
            </a>
            <div class="list-group-separator"></div>
            <a href="#">
              <div class="list-group-item">
                <div class="row">
                  <div class="col-sm-4 img">
                    <img src="<?=base_img().'content/dining/5.jpg'?>" alt="livingstone_icon">
                  </div>
                  <div class="col-sm-8 desc">
                    <h5 class="list-group-item-heading truncate">Livingstone</h5>
                    <p class="list-group-item-text">Bakery/Desert - Jl. A Yani Utara Riverside Block C-1, Lawang</p>
                  </div>
                </div>
              </div>
            </a>
            <div class="list-group-separator"></div>
            <a href="#">
              <div class="list-group-item">
                <div class="row">
                  <div class="col-sm-4 img">
                    <img src="<?=base_img().'content/dining/4.jpg'?>" alt="kudeta_icon">
                  </div>
                  <div class="col-sm-8 desc">
                    <h5 class="list-group-item-heading truncate">Ku De Ta</h5>
                    <p class="list-group-item-text">Japanese - Jl. Utara Riverside, Lawang</p>
                  </div>
                </div>
              </div>
            </a>
            <div class="list-group-separator"></div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.row -->
</div>
<!-- /.container -->