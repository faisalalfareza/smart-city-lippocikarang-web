<div class="navbar">
  <div class="container">
    <div class="row">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()."assets/front/img/logo.png"?>"></a>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">                
          <li>
            <form class="navbar-form navbar-left">   
              <div class="form-group navcategory">
                <select class="form-control categoryinput">
                  <option value="">All Category</option>
                  <option value="Entertainment">Entertainment</option>
                  <option value="Dining">Dining</option>
                  <option value="Accomodation">Accomodation</option>
                  <option value="Shopping">Shopping</option>
                  <option value="Transportation">Transportation</option>
                  <option value="Public Service">Public Service</option>
                  <option value="Industry">Industry</option>                      
                </select>
              </div>
              <input type="text" class="form-control searchinput" placeholder="Keyword">
              <button type="submit" class="btn btn-raised btn-info btn-nav searchbtn"><i class='fa fa-search'></i> &nbsp; Search</button>  
            </form>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          if(isset($this->session->userdata('sc_sess')[1]['username'])) {
            $username = $this->session->userdata('sc_sess')[1]['username'];
            ?>
            <li><a href="<?=base_url().'user/profile'?>" data-toggle="" data-target=""><?=$username?></a></li>          
            <li><a href="<?=base_url().'user/logout'?>">Log Out</a></li>
            <?php
          } else {
            ?>
            <li><a id="modal_trigger" href="javascript:voisd(0)" data-toggle="modal" data-target="#login">Log In</a></li>
            <?php
          }         
          ?>
          <li><a href="<?=base_url().'user/getapp'?>" class="btn btn-raised btn-info btn-nav getapp">Get App</a></li>
        </ul>
      </div>
    </div>  
  </div>
</div>