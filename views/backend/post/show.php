<?php
use App\Models\Post;
$dk = [
   ['status','!=',0],
   ['status','!=',0]
];
$id=$_REQUEST['id'];
$post = Post::find($id);
if($post==null)
{
    header("location:index.php?option=post");
}
?>
<?php require_once "../views/backend/header.php"; ?>
<?php require_once "../views/backend/header.php"; ?>
      <!-- CONTENT -->
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Chi tiết thương hiệu</h1>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="row">
                     <div class="col-md-12 text-right">
                        <a href="index.php?option=post" class="btn btn-sm btn-info">
                           <i class="fa fa-arrow-left" aria-hidden="true"></i>
                           Về danh sách
                        </a>
                     </div>
                  </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12">
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th>Tên trường</th>
                                 <th>Giá trị</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>ID</td>
                                 <td><?=$post->id;?></td>
                              </tr>
                              <tr>
                                 <td>topic_id</td>
                                 <td><?=$post->topic_id;?></td>
                              </tr>
                              <tr>
                                 <td>Title</td>
                                 <td><?=$post->title;?></td>
                              </tr>
                              <tr>
                                 <td>SLUG</td>
                                 <td><?=$post->slug;?></td>
                              </tr>
                              <tr>
                                 <td>Detail</td>
                                 <td><?=$post->detail;?></td>
                              </tr>
                              <tr>
                                 <td>IMAGE</td>
                                 <td><img src="../public/images/post/<?= $post->image;?>" 
                                          alt="<?= $post->image;?>"></td>
                              </tr>
                              <tr>
                                 <td>Type</td>
                                 <td><?=$post->type;?></td>
                              </tr>
                              <tr>
                                 <td>DESCRIPTION</td>
                                 <td><?=$post->description;?></td>
                              </tr>
                              <tr>
                                 <td>Created_at</td>
                                 <td><?=$post->created_at;?></td>
                              </tr>
                              <tr>
                                 <td>Created_by</td>
                                 <td><?=$post->created_by;?></td>
                              </tr>
                              <tr>
                                 <td>Updated_at</td>
                                 <td><?=$post->updated_at;?></td>
                              </tr>
                              <tr>
                                 <td>UPDATED_BY</td>
                                 <td><?=$post->updated_by;?></td>
                              </tr>
                              <tr>
                                 <td>STATUS</td>
                                 <td><?=$post->status;?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>