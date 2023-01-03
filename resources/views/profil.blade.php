<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profil | BERILMU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    @include('navbarsudahlogin')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

<div class="container">
    <div class = "text-center" style="margin-top: 100px;">
        <div class="row" style="padding-top: 10%;">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="w-100 ms-3">
                            <h1 class="text-center">Hai,</h1>
                            <h3 class="text-center my-0" style="padding-bottom: 2%;">{{$user->name}}</h3>
                            <p class="text-center text-muted"></p>
                        </div>
                    </div>
                </div>                                 
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="header-title mb-3">
                        <a href="/" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center pb-1" id="tooltips-container">
                                <div class="w-100 ms-2">
                                <h4 href="/logout" class="mb-1">LOGOUT</h4>
                                </div>
                                <i class="mdi mdi-chevron-right h2"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->
    </div> <!-- end card-->
</div> <!-- end col -->


<style type="text/css">

body {
    background-color: #E8F2FD;
    background-size: cover;
    display: block;
    argin: 5%;
}

.card {
    box-shadow: 0 0 2px 0 rgb(0 0 0 / 10%);
    margin-bottom: 24px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid #ecf2f5;
    border-radius: .25rem;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>