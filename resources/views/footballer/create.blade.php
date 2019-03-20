<html lang="en">
<head>
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Laravel Ajax Validation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body>


<div class="container">
        <h3 class="jumbotron">Laravel Ajax Validation</h3>
        <div class="alert alert-danger" style="display:none">
          <ul></ul>
        </div>
        <div class="alert alert-success" style="display:none">
          <ul></ul>
        </div>
    <form>
        <div class="form-group">
            <label>Footballer Name</label>
            <input type="text" name="footballername" class="form-control" placeholder="Enter Footballer Name" id="footballername">
        </div>


        <div class="form-group">
            <label>Club</label>
            <input type="text" name="club" class="form-control" placeholder="Enter Club" id="club">
        </div>


        <div class="form-group">
            <strong>Country</strong>
            <input type="text" name="country" class="form-control" placeholder="Enter Country" id="country">
        </div>


        <div class="form-group">
            <button class="btn btn-success" id="submit">Submit</button>
        </div>
    </form>
</div>

<script type="text/javascript">

         $(document).ready(function(){
            $('#submit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{ url('/footballers') }}",
                  method: 'post',
                  data: {
                     footballername: $('#footballername').val(),
                     club: $('#club').val(),
                     country: $('#country').val()
                  },
                  success: function(data){
                      $.each(data.errors, function(key, value){
                        $('.alert-danger').show();
                        $('.alert-danger').find("ul").append('<li>'+value+'</li>');
                      });
                      if(data.success){
                        window.location.href = "{{ url('/footballers') }}";
                        // $('.alert-success').show();
                        // $('.alert-success').find("ul").append('<li>'+data.success+'</li>');
                      }
                  }
                    
                  });
               });
            });
</script>

</body>
</html>