<?php if(((session()->get('logged')))):?>
<header>
    <div id="navsec">
        <nav class="navbar navbar-expand-lg"  style="background-color: #0feded;">
            <a class="navbar-brand" href="<?=base_url('homepage')?>"> <img src="assets/images/logo.png" class="logo" alt="logo" height="80" width="80"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <li class="welmess">
                    <span>Hi <?php echo($_SESSION['name'])?>!!</span>
            </li>
         
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <button class="button f-nav"><a class="nav-link" href="<?=base_url('homepage')?>">Home <span class="sr-only">(current)</span></a></button>
                    </li>
                    <li class="nav-item">
                    <button class="button f-nav"><a class="nav-link " href="<?=base_url('puznadquiz')?>" >
                        Puzzles/Quizes
                        </a></button>
                    </li>
                    <li class="nav-item ">
                    <button class="button f-nav">
                        <a class="nav-link" href="<?=base_url('review')?>">
                        Forums
                        </a></button>
                    </li>
                    <li class="nav-item">
                    <button class="button f-nav">
                        <a class="nav-link" href="<?=base_url('readbooks')?>">
                        Read
                        </a></button>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('logout')?>"><ion-icon size="small" name="power"></ion-icon> Logout</span></a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
            </div>
        </nav>
    </div>
    </header>
<?php else:?>
    <header>
    <div id="navsec">
        <nav class="navbar navbar-expand-lg"  style="background-color: #0feded;">
            <a class="navbar-brand" href="/Homepage"> <img src="assets/images/logo.png" class="logo" alt="logo" height="80" width="80"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <button class="button f-nav"><a class="nav-link" href="<?=base_url('initial')?>">Home <span class="sr-only">(current)</span></a></button>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="button f-nav"><a class="nav-link" href="<?=base_url('login')?>">Login/SignUp</a></button>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
            </div>
        </nav>
    </div>
    </header>
    <?php endif;?>