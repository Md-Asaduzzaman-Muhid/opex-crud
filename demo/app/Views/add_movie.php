<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<title>Add Movie</title>
</head>
<body>
    <div class="container pt-5">
        <?php
        $validation = \Config\Services::validation();
        ?>
        <form action="<?php echo base_url('crud/add'); ?>" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control mb-3" name="name" placeholder="Name">
                    <?php if(!empty($validation->getError('name'))): echo $validation->getError('name'); endif; ?>
                </div>
                <div class="col">
                    <input type="text" class="form-control mb-3" name= "author" placeholder="Author">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control mb-3" name="price" placeholder="Price">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Save Movie</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>