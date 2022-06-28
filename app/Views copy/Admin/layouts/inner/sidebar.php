<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
                    <a href="adminhome" class="simple-text">
                    <img src="<?=base_url('assets/admin/images/sunbearlogo.png')?>" alt="logo" height="70px" width="190px">
                    
                    </a>
                </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('adminhome') ? 'active' : ''}}">
            <a href="<?=base_url('adminhome')?>">
              <ion-icon name="desktop"></ion-icon>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('uploads') ? 'active' : ''}}">
            <a href="<?=base_url('uploads')?>">
              <ion-icon name="cloud-upload"></ion-icon>
              <p>New Uploads</p>
            </a>
          </li>
          <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('users') ? 'active' : ''}}">
            <a href="<?=base_url('users')?>">
              <ion-icon name="people"></ion-icon>
              <p>Users</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url('forums')?>">
              <ion-icon name="chatboxes"></ion-icon>
              <p>Flagged Forums</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url('flagged_users')?>">
              <ion-icon name="contacts"></ion-icon>
              <p>Flagged Users</p>
            </a>
          </li>
        </ul>
      </div>
    </div>