<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Insert</title>
  </head>
  <body>

    <div class="container">
    <form action="swe.php" method="POST">
        <h1>Insert</h1>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationDefault01">name</label>
            <input type="text" class="form-control" id="name" placeholder="" value="" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault02">age</label>
            <input type="text" class="form-control" id="age" placeholder="" value="" required>
          </div>
          <div class="col-md-4 mb-3">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationDefault03">education</label>
            <input type="text" class="form-control" id="education" placeholder="" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault04">education2</label>
            <input type="text" class="form-control" id="education1" placeholder="" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault05">education3</label>
            <input type="text" class="form-control" id="education2" placeholder="" required>
          </div>
        </div>
        <div class="form-row">
                <div class="col-md-3 mb-3">
                  <label for="validationDefault03">hno</label>
                  <input type="text" class="form-control" id="hno" placeholder="" required>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationDefault04">subdistrict</label>
                  <input type="text" class="form-control" id="subdistrict" placeholder="" required>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationDefault05">district</label>
                  <input type="text" class="form-control" id="district" placeholder="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">province</label>
                    <input type="text" class="form-control" id="province" placeholder="" required>
                </div>
              </div>
        <button class="btn btn-outline-primary" id="btn_insert" type="submit">Submit</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
          $(document).ready(function () {
            
              $("#btn_insert").click(function(){
                $.post("http://localhost/slimmongo/insert",
                { name : $( "#name" ).val(), 
                age : $( "#age" ).val(), 
                education0 : $( "#education" ).val(), 
                education1 : $( "#education1" ).val(), 
                education2 : $( "#education2" ).val(), 
                hno : $( "#hno" ).val(), 
                subdistrict : $( "#subdistrict" ).val(), 
                district : $( "#district" ).val(), 
                province : $( "#province" ).val()
                }, 
                function(data, status){
                    alert("Data: " + data + "\nStatus: " + status);
                });
            });
                
        });
    </script>
</body>
</html>