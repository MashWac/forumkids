<?= $this->extend('Admin/layouts/admin')?>
<?=$this->section('content')?>
<div class="card">
        <div class="card-header">
            <h4>Add user</h4>
            <h6>Select user Type</h6>
            <label for="account-selection" class="form-label">Account Type:</label>
            <input class="form-control" name="account-selection" list="accountOptions" onchange="toggle()" id="accounttypes" placeholder="Type to search...">
                <datalist id="accountOptions">
                <option value="Admin">
                <option value="Parents">
                <option value="Kids">
                <option value="Not Selected" selected>
            </datalist>
        </div>
        
        <div class="card-body">
            <div id="formaccount">

            </div>
        </div>
    </div>

<?=$this->endSection()?>