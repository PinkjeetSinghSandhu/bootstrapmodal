<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>

  <body>
    <section class="container pt-5 text-center">
      <button type="reset" class="btn btn-info" data-toggle="modal" data-target="#myModal">
        Open Modal
      </button>
    </section>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Modal Header</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            <form method="POST" id="login">
              <div class="pb-3">
                <input type="text" name="username" placeholder="Enter username" class="btn-block">
              </div>

              <div class="pb-3">
                <input type="password" name="password" placeholder="Enter password" class="btn-block">
              </div>
              
              <div id="errorBox"></div>

              <button type="submit" class="btn btn-info">Submit</button>
              
            </form>
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        //Login
        $('#login').submit(function(e){
          e.preventDefault();
          $.ajax({
            url: './handleRequest.php?task=adminLogin',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize()
          })
          .done(function(response){
            if (response.status){
              // If response status gotten from the handleRequest is = 1
              $("#errorBox").removeClass('alert alert-danger');
              $("#errorBox").addClass('alert alert-success');
              $("#errorBox").html(response.message);
            }else{
              // If response status gotten from the handleRequest is = 0
              $("#errorBox").removeClass('alert alert-danger');
              $("#errorBox").addClass('alert alert-danger');
              $("#errorBox").html(response.message);
            }
          });
        });
      });
    </script>
  </body>
</html>