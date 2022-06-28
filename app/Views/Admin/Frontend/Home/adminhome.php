<?= $this->extend('Admin/layouts/admin')?>
<?=$this->section('content')?>
    <div class="card">
            <div class="card-body">
                <h1>Welcome!!</h1>
            </div>
    </div>
    <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Users Sign Up</h5>
              </div>
              <div class="card-body ">
                <canvas id="chartHours" width="400" height="100"></canvas>
              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Gender Statistics</h5>
              </div>
              <div class="card-body ">
                <canvas id="chartgender" width="1000" height="1000"><canvas>
              </div>
            </div>
          </div>
          <script>
            var _ydata=JSON.parse('<?php echo( json_encode( $months))?>');
            var _xdata=JSON.parse('<?php echo(json_encode($monthcount))?>');
            var genders=JSON.parse('<?php echo(json_encode($genders))?>');
        </script>
<?=$this->endSection()?>