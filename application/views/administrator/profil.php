<html lang="en">
<head>
<body>
<?php $no=1; foreach($user as$jrs):?>

<div class="container">
<div class="card p-2 shadow-sm border-bottom-success">
    <div class="card-header bg-white">
        <h4 class="h5 align-middle m-0 font-weight-bold text-success">
		<?php echo $jrs->username?>
        </h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-2 mb-4 mb-md-0">
                <img src="" alt="" class="img-thumbnail rounded mb-2">
                <a href="" class="btn btn-sm btn-block btn-success"><i class="fa fa-edit"></i> Edit Profile</a>
                <a href="" class="btn btn-sm btn-block btn-success"><i class="fa fa-lock"></i> Ubah Password</a>
            </div>
            <div class="col-md-10">
                <table class="table">
                    <tr>
                        <th width="200">Username</th>
                        <td><?php echo $jrs->username?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $jrs->email?></td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td><?php echo $jrs->no_hp?></td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td class="text-capitalize"><?php echo $jrs->level?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php endforeach;?>
</body>
</html>


