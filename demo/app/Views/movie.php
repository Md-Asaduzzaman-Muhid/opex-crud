<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
     content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Movie CRUD</title>
    <!--  -->
</head>
<body>
    <div class="container">
        <?php 
    //     $session = \Config\Services::session();
    //     if($session->getFlashdata('success')):
    //     echo '
    //   success
    //     ';
    //     endif;
        ?>
        <h2 class="text-center mt-4 mb-4">Movie CRUD</h2>
        <a class="btn btn-success mb-3" href="<?php echo base_url("/crud/add")?>">Add New Movie</a>
        <?php  if(isset($movies) && !empty($movies)): ?>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
            <?php foreach($movies as $movie):
                    echo'
                    <tr>
                        <td>'.$movie['id'].'</td>
                        <td>'.$movie['name'].'</td>
                        <td>'.$movie['author'].'</td>
                        <td>'.$movie['price'].'</td>
                        <td></td>
                        <td></td>
                    </tr>
                    ';
            endforeach; ?>
        </table>
       <?php endif; ?>
       <?php if(isset($pagination_link) && !empty($pagination_link)): 
            $pagination_link->setPath('movie');
            echo $pagination_link->links();
        endif;?>
    </div>
 
</body>
</html>
<style>
.pagination li a
{
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6;movies
    z-index: 1;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
</style>