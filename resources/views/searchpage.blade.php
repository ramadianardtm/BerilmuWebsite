<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  </style>
  <link rel="icon" href="http://localhost:8080/Tiara/apa/img/logotoga.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <title>BERILMU | Homepage</title>
</head>

<body>

  @include('navbarsudahlogin')

  <div class="container">
    <div class="text-center" style="margin-top: 100px; padding-top: 30px; font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Poppins?query=Poppins);">
      <h3><b>PERANGKAT PEMBELAJARAN</b>
        <h3>
          <div>
            <form class="d-flex" style="margin: 4%;">
              <input class="form-control me-2" href type="search" name="Keyword" placeholder="Masukkan Keyword"></input>
              <button class="btn btn-outline-success" type="submit">Search</button>
              <style>
                .btn-outline-success {
                  background-color: white;
                  color: black;
                  border-color: rgb(136, 212, 255);
                }

                .btn-outline-success:hover {
                  background-color: rgb(136, 212, 255);
                  color: white;
                  border-color: white;
                }
              </style>
            </form>
          </div>
    </div>
  </div>


  <div class="custom_container" style="background-color: #E4F5FF; border-radius: 60px; padding-top: 5%; padding-bottom: 5%; margin-left: 5%; margin-right: 5%; margin-bottom: 5%; font-family: 'Pridi'; src: url(https://fonts.google.com/specimen/Pridi?query=pridi);">

    <div class="container text-justify pt-4">
      <style>
        .btn-outline-download {
          background-color: #088dff;
          color: white;
          border-color: white;
        }

        .btn-outline-download:hover {
          background-color: white;
          color: black;
          border-color: #088dff;
        }

        .btn-outline-youtube {
          background-color: #c60240;
          color: white;
          border-color: white;
        }

        .btn-outline-youtube:hover {
          background-color: white;
          color: black;
          border-color: #c60240;
        }
      </style>
      <div class="row row-cols-2 row-cols-md-2 g-3">
        @foreach ($posts as $post)
        <?php $user_info = App\Models\User::find($post->user_id); ?>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="mb-3">{{$post->judul}}</h5>
              <p>{{$user_info->name}} Berbagi <em> {{$post->created_at->diffForHumans()}} </em></p>
              <p>{{$post->ket}}</p>
              <div class="col">
                <a href="/searchpage/{{$post->perangkat}}" class="btn btn-outline-download"><i class="fa fa-download"></i> Download File</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="container">
    {{$posts->links()}}
  </div>

  @include ('topbutton')

  @include ('footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>