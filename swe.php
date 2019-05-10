<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" id="form">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="name" id="name">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div>
<table class="table">
  <thead>
    <tr>
        <th scope="col">ลำดับ</th>
        <th scope="col">ชื่อ</th>
        <th scope="col">อายุ</th>
        <th scope="col">ที่อยู๋</th>
        <th scope="col">โรงเรียนประถม</th>
        <th scope="col">โรงเรียน</th>
        <th scope="col">มหาลัย</th>
      
    </tr>
  </thead>
  <tbody id="profile">
    
  </tbody>
</table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            search();
            function search(data){
            $.post("http://localhost/slimmongo/search", data,
                function (data, textStatus, jqXHR) {
                    renderTable(data);
                }
            );
        }
                $("#form").submit(function (e) { 
                e.preventDefault();
                var data = $(this).serialize(); 
                search(data);
            });
            function renderTable(data) {
                var profile =$("#profile");
                profile.empty();

                $.each(data, function (index, value) { 
                    profile.append('<tr>'
                    +' <th>'+(index+1)+'</th>'
                    +' <th>'+value.name+'</th>'
                    +' <th>'+value.age+'</th>'
                    +'<th>'+value.address.hno+' '+value.address.subdistrict+' '
                    +value.address.district+' '+value.address.province+'</th>'
                    +'<th>'+value.education[0]+'</th>'
                    +'<th>'+value.education[1]+'</th>'
                    +'<th>'+value.education[2]+'</th>'
                +'</tr>')
                });
                
            }
        });
    </script>
    
  </body>
</html>