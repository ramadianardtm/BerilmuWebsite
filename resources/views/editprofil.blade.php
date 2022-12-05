<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Edit Profil | BERILMU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">John Smith</h4>
                    <p class="mb-0">@johnny.s</p>
                    <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                    <div class="mt-2">
                      <button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button>
                    </div>
                  </div>
                  <div class="text-center text-sm-right">
                    <span class="badge badge-secondary">administrator</span>
                    <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <h4 class="mb-2"><label>Nama Lengkap</label></h4>
                              <input class="form-control" type="text" name="name" value="">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <h4 class="mb-2"><label>Email</label></h4>
                              <input class="form-control" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <h4 class="mb-2"><label>Instansi</label></h4>
                              <input class="form-control" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              <h4 class="mb-2"><label>About Me</label></h4>
                              <textarea class="form-control" rows="5"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-content pt-3">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <div class="mb-2"><b>Change Password</b></div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Current Password</label>
                    <input class="form-control" type="password" placeholder="••••••">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>New Password</label>
                    <input class="form-control" type="password" placeholder="••••••">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                    <input class="form-control" type="password" placeholder="••••••">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="px-xl-3" style="padding: 2% 0% 1% 0%;">
            <button class="btn btn-block btn-secondary">
              <i class="fa fa-sign-out"></i>
              <span>Logout</span>
            </button>
            <div class="row" style="margin-top: 15%;">
              <div class="col d-flex justify-content-end">
                <input class="btn btn-block btn-success" type="submit" value="Save">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<style type="text/css">
body{
    margin:2%;
    background:#E8F2FD
}
.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 10%);
}
</style>

<script type="text/javascript">

</script>
</body>
</html>