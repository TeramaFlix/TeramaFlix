<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>/swiper-bundle.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/img/Teramalogo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Upload Video</title>
    <style>
        input{
            width: 5px;
        }
        .form-control:focus{
            box-shadow: none;
            display: flex;
        }
        .form-control{
            width: 75%;
        }
        .form-item {
            width: 80%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .modal-body{
            width: 90%;
            margin-left: 5%;
        }
        .button{
            margin-left: 50px;
            margin-bottom: 10px;
        }
        .button-1{
            margin-left: 170px;
            margin-bottom: 10px;
        }
        #viewVideo{
            margin-left: 5px;
        }
    </style>
   </head>
<body>
    <!--  modal start  add new post -->
<div class="modal fade" id="add_post_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add new Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="#" method="POST" enctype="multipart/form-data" id="add_post_form" novalidate>
            <div class="modal-body p-5">
            <div class="mb-3 form-item">
                <label for="">Post title : </label>
                <input type="text" name="title" class="form-control" placeholder="Title" id="" required>
                <div class="invalid-feedback">Post Title is required</div>
            </div>

            <div class="mb-3 form-item">
                <label for="">Post Categorie : </label> 
                <select name="Categorie" class="form-control" >
                    <option value="Films">Films</option>
                    <option value="Series">Series</option>
                    <option value="Animes">Animes</option>
                    <option value="Demande">Demande</option>
                </select>
                <div class="invalid-feedback">Post Categorie is required</div>
            </div>
            <div class="mb-3 form-item">
                <label for="">Post Genre : </label>
                <select name="Genre" class="form-control" >
                    <option value="Action">Action</option>
                    <option value="Art Martiaux">Art Martiaux</option>
                    <option value="Animation">Animation</option>
                    <option value="Aventure">Aventure</option>
                    <option value="Comedie">Comedie</option>
                    <option value="Epouvante Horreur">Epouvante Horreur</option>
                    <option value="Romance">Romance</option>
                    <option value="Historique">Historique</option>
                    <option value="Science Fiction">Science Fiction</option>
                    <option value="Policier">Policier</option>
                    <option value="Guerre">Guerre</option>
                    <option value="Documentaire">Documentaire</option>
                </select>
                <div class="invalid-feedback">Post Genre is required</div>
            </div>
            <div class="mb-3 form-item">
                <label>Post Body : </label>
                <textarea name="body" class="form-control" rows="4" placeholder="Body" required></textarea>
                <div class="invalid-feedback">Post Body is required</div>
            </div>
            <div class="file-item d-flex align-items-center justify-content-between">
                <div class="mb-3 d-flex flex-column">
                    <div class="input-item mt-0">
                        <label class="button bg-primary p-2 rounded-5" for="image">Thumbnails</label>
                        <input type="file" name="file" id="image" class="form-control" accept="image/*" required style="display: none;">
                        <div class="invalid-feedback">Post Image is required</div>
                    </div>
                    <div class="item-value">
                         <img id="img" src="<?= base_url() ?>/img/thumbnail.png" class="img-fluid" alt="preview" style="width: 360px; height: 240px;">
                    </div>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <div class="input-item ">
                        <label class="button-1 mt-3 bg-primary p-2 rounded-5" for="video">Importer</label>
                        <input type="file" name="myfile" id="video" accept="video/*" class="form-control" required style="display: none;">
                        <div class="invalid-feedback">Post Video is required</div>
                    </div>
                    <div class="item-value">
                        <video src="<?= base_url() ?>/img/5.webp" poster="<?= base_url() ?>/img/5.webp" id="viewVideo" alt="preview" style="width: 400px; height: 240px;"  >
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" data-bs-dismiss="modal" class="btn btn-secondary" >Close</button>
            <button  id="add_post_btn" type="submit"  class="btn btn-primary" >Add post</button>
            </div>
      </form>
    </div>
  </div>
</div>
    <!--  modal end add new post -->
    <!--  modal start  edit post -->
<div class="modal fade" id="edit_post_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add new Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="#" method="POST" enctype="multipart/form-data" id="edit_post_form" novalidate>
            <input type="hidden" name="id" id="pid">
            <input type="hidden" name="old_image" id="old_image">
            <div class="modal-body p-5">
            <div class="mb-3">
                <label for="">Post title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" id="title" required>
                <div class="invalid-feedback">Post Title is required</div>
            </div>

            <div class="mb-3">
                <label for="">Post Categorie</label>
                <select name="Categorie" class="form-control" >
                    <option value="Films">Films</option>
                    <option value="Series">Series</option>
                    <option value="Animes">Animes</option>
                    <option value="Demande">Demande</option>
                </select>
                <div class="invalid-feedback">Post Categorie is required</div>
            </div>
            <div class="mb-3">
                <label for="">Post Categorie</label>
                <select name="Genre" class="form-control" >
                    <option value="Action">Action</option>
                    <option value="Art Martiaux">Art Martiaux</option>
                    <option value="Animation">Animation</option>
                    <option value="Aventure">Aventure</option>
                    <option value="Comedie">Comedie</option>
                    <option value="Epouvante Horreur">Epouvante Horreur</option>
                    <option value="Romance">Romance</option>
                    <option value="Historique">Historique</option>
                    <option value="Science Fiction">Science Fiction</option>
                    <option value="Policier">Policier</option>
                    <option value="Guerre">Guerre</option>
                    <option value="Documentaire">Documentaire</option>
                </select>
                <div class="invalid-feedback">Post Categorie is required</div>
            </div>


            <div class="mb-3">
                <label>Post Body</label>
                <textarea name="body" id="body" class="form-control" rows="4" placeholder="Body" required></textarea>
                <div class="invalid-feedback">Post Body is required</div>
            </div>
            <div class="mb-3">
                <input type="file" name="file" id="image" class="form-control">
                <div class="invalid-feedback">Post Image is required</div>
                <div id="post_image"></div>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" data-bs-dismiss="modal" class="btn btn-secondary" >Close</button>
            <button  id="edit_post_btn" type="submit"  class="btn btn-primary" >Edit post</button>
            </div>
      </form>
    </div>
  </div>
</div>
    <!--  modal end edit post -->
       <!--  detail modal start post -->
<div class="modal fade" id="detail_post_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add new Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5">
        <img src="" id="detail_post_image" class="img-fluid">
        <h3 id="detail_post_title" class="mt-3"></h3>
        <h5 id="detail_post_category"></h5>
        <h6 id="detail_post_Genre"></h6>
        <p id="detail_post_body"></p>
        <p id="detail_post_created" class="fst-italic"></p>
      </div>
      <div class="modal-footer">
      <button type="button" data-bs-dismiss="modal" class="btn btn-secondary" >Close</button>
      </div>
    </div>
  </div>
</div>
    <!--  detail modal end post -->
    <div class="container">
        <div class="row my-4">
             <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="text-secondary fw-bold fs-3">All posts</div>
                        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#add_post_modal">Add new post</button>
                    </div>
                    <div class="card-body ">
                        <div class="row" id="show-posts">
                            <h1 class="text-center text-secondary my-5">Post Loading...</h1>
                        </div>
                </div>
             </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
   $(function(){
    //add new post ajax request
   $("#add_post_form").submit(function(e){
    e.preventDefault()
    const formData = new FormData(this);
    if(!this.checkValidity()){
        e.preventDefault()
        $(this).addClass('was-validated');
    }else{
        $("#add_post_btn").text('Adding...')
        $.ajax({
            url: '<?= base_url('post/add') ?>',
            method: 'post',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            //dataType: 'json',
            success:function(response){
                if (response.error) {
                    $("#image").addClass("is-invalid")
                    $("#image").next().text(response.message.image)
                } else {
                    $("#add_post_modal").modal('hide')
                    $("#add_post_form")[0].reset()
                    $("#image").removeClass("is-invalid")
                    $("#image").next().text('')
                    $("#add_post_form").removeClass('was-validated')
                    $('#viewVideo').attr('src', '');
                    $('#img').attr('src', '');
                    Swal.fire(
                        'Added!',
                        response.message,
                        'success'
                    )
                    fetchAllposts()
                }
                    $("#add_post_btn").text("Add post")  
            }

                });
    }
   })
   })

   fetchAllposts()
    function fetchAllposts(){
        //fetch all post ajax request 
        $.ajax({
            url: '<?= base_url('post/fetch') ?>',
            method: 'get',
            success: function(response){
                $("#show-posts").html(response.message)
            }
    });
    }
    //detail of  post ajax request
   $(document).delegate('.post_detail_btn','click', function(e){
        e.preventDefault()
        const id = $(this).attr('id')
        $.ajax({
            url: '<?= base_url('post/detail/') ?>/'+ id,
            method: 'get',
          //  dataType: 'json',
            success: function(response){
                console.log(response);
                $("#detail_post_image").attr('src','<?= base_url('Thumbnails/') ?>/'+ response.message.Image)
                $("#detail_post_title").text(response.message.Title)
                $("#detail_post_category").text(response.message.Categorie)
                $("#detail_post_Genre").text(response.message.Genre)
                $("#detail_post_body").text(response.message.Body)
                $("#detail_post_created").text(response.message.Created_at)
            }
    });
});
//edit post ajax request
   $(document).delegate('.post_edit_btn','click', function(e){
        e.preventDefault()
        const id = $(this).attr('id')
        $.ajax({
            url: '<?= base_url('post/edit/') ?>/'+ id,
            method: 'get',
            success: function(response){
                $("#pid").val(response.message.ID)
                $("#old_image").val(response.message.Image)
                $("#title").val(response.message.Title)
                $("#Categorie").val(response.message.Categorie)
                $("#body").val(response.message.Body)
                $("#post_image").html('<img src="<?= base_url('Thumbnails/')?>/'+ response.message.Image +'"class="img-fluid mt-2 img-thumbnail" width="150">')
            }
    });
});
//delete post ajax request
$(document).delegate('.post_delete_btn','click', function(e){
        e.preventDefault()
        const id = $(this).attr('id')
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?= base_url('post/delete/') ?>/'+ id,
                    method: 'get',
                    success: function(response){
                        Swal.fire(
                            'Deleted!',
                            response.message,
                            'success'
                        )
                        fetchAllposts()
                    }
                })
            }
        })
    });
    $('selector').change(function (e) { 
        e.preventDefault();
        
    });
//update post ajax request
$("#edit_post_form").submit(function(e){
    e.preventDefault()
    const formData = new FormData(this);
    if(!this.checkValidity()){
        e.preventDefault()
        $(this).addClass('was-validated');
    }else{
        $("#edit_post_btn").text('Updating...')
        $.ajax({
            url: '<?= base_url('post/update') ?>',
            method: 'post',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            success:function(response){
                console.log(response)
                    $("#edit_post_modal").modal('hide')
                    Swal.fire(
                        'Updated!',
                        response.message,
                        'success'
                    )
                    fetchAllposts()
                    $("#edit_post_btn").text("Update post") 
            }

        });
    }
   })

   var myFile = document.getElementById("video");
   var  video= document.getElementById("viewVideo");
  myFile.onchange = evt => {
 const [file] = myFile.files;
 if(file){
  video.src = URL.createObjectURL(file);
 }
  }

  var Myimage = document.getElementById("image");
  var img = document.getElementById("img");
  Myimage.onchange = evt => {
 const [file] = Myimage.files;
 if(file){
    img.src = URL.createObjectURL(file);
 }
  }
</script>

</body>
</html>