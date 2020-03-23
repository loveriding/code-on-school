<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Add product example</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://image.winudf.com/v2/image/Y29tLm13Zy50aGVnaW9pZGlkb25nX2ljb25fdDB4d29jMGI/icon.png?w=170&fakeurl=1" alt="" width="72" height="72">
        <h2>Add Product</h2>
      </div>

      <div class="row">
        <div class="col-md order-md-1">
          <form action="addproduct.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
              <label for="name">Name</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="name">Category</label>
              <div class="input-group">
                <select class="input-group" name="category">
					<option value="apple">Apple</option>
					<option value="samsung">Samsung</option>
					<option value="oppo">Oppo</option>
					<option value="nokia">Nokia</option>
				</select>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="price">Price</label>
              <div class="input-group">
                <input type="text" class="form-control" id="price" name="price" required>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="description">Description</label>
              <div class="input-group">
                <textarea class="form-control" id="description" name="description" required></textarea>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="fileUpload">Image</label>
              <div class="input-group">
                <input type="file" id="fileUpload" name="fileUpload" required>
              </div>
            </div>
			
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2019 MOBILE WORLD</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

  </body>
</html>