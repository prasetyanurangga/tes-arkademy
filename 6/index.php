<?php include("koneksi.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
      .card{
        margin: 10px;
      }
      .jumlah,.nama
      {
        height: 50%;
        padding: 20px;
      }
      .nama{
        border-bottom:solid 1px #dddd;
      }

#parent {
    padding: 5% 0;
}
#child {
    padding: 6% 0;
}
.judul{
  width: 100%;
  padding: 20px;
  text-align: center;
}

    </style>
    <title>Aplikasi Quick Count</title>
  </head>
  <body>

    <div class="container" style="padding : 10px">

      <div class="judul">
        <h1>Aplikasi Quick Count</h1>
      </div>

<?php 

$query = mysqli_query($kon,"SELECT * FROM candidates");
while($fetch = mysqli_fetch_array($query))
{
?>

      <div class="card">
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-md" style="border: solid 1px #dddd">
                <div class="nama">
                  <?php echo $fetch["name"]; ?>
                </div>
                <div class="jumlah" id="jumlah-<?php echo $fetch["id"]; ?>">
                  <?php echo $fetch["earned_vote"]; ?>
                </div>
              </div>
              <div class="col-md"  style="border: solid 1px #dddd">
                  <div id="parent">
                    <div id="child">
                      <center>
                        <button type="button" class="btn btn-primary" onclick="tambah(<?php echo $fetch["id"] ?>)">Tambah Suara</button>
                      </center>
                    </div>
                  </div>
              </center>
              </div>
            </div>
          </div>
          
        </div>
      </div>
<?php
}

?>      
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript">
      function tambah(idnya)
      {
        $.ajax({
          url: "tambah_data.php",
          type : 'post',
          data: "id="+idnya, 
          success: function(result){
            var json = JSON.parse(result)
            $("#jumlah-"+idnya).html(json.id);
          }
        });
      }
    </script>
  </body>
</html>