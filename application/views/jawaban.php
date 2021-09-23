<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title_page ?></title>
  <link rel="icon" href="<?= $favicon ?>">
	<link href="<?= $bootstrap_theme ?>" rel="stylesheet">
	<link href="<?= $bootstrap_css ?>" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row" style="margin-top: 50px">
      <h1 class="text-center"><?= $heading ?></h1>
      <div class="col-xs-4 col-xs-offset-4">
        <!-- form search -->
        <form autocomplete="off">
          <div class="input-group">
            <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Masukan ID pelanggan..." value="">
            <span class="input-group-btn">
                <button class="btn btn-default" id="submit" type="submit">Cari</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="<?= $jquery ?>"></script>
	<script src="<?= $bootstrap_js ?>"></script>
  <script>
    $('#submit').click(function(){
      const keyword = $('#keyword').val()
      if(!keyword) {
        alert('Tolong mengisi ID pelanggan anda')
      }else{
        $.ajax({
          url: '<?= (base_url()); ?>index.php/provideDataCustomer',
          type: 'GET',
          contentType : 'application/json',
          data: {keyword: keyword},
          success: function(res) {
            alert(res !== "kosong" ? `Customer terverikasi! Selamat datang, tn/ny ${res}.` : "Data customer tidak ditemukan!")
            $('#keyword').val("")
          }
        })
        return false
      }
    })
  </script>
</body>
</html>