<?php $tb = json_decode($table); ?>
<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0 align-items-center">
                        <li class="breadcrumb-item"><a href="javascript:;">
                                <ion-icon name="home-outline"></ion-icon>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="breadcrumb-title pe-3"> table</div>
        </div>
        <!--end breadcrumb-->


        <div class="row row-cols-1 row-cols-lg-1 row-cols-xxl-1">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <div class="ms-auto">Users</div>
                            </div>
                            <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                                <ion-icon name="people-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div>
                                <?php if($tb->status):?>
                                <?php $total = count($tb->data);?>
                                <?php else:?>
                                <?php $total = 0;?>
                                <?php endif;?>
                                <h4 class="mb-0"><?= $total?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="card radius-10 w-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">Employee</h6>
                    <div class="fs-5 ms-auto dropdown">
                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i
                                class="bi bi-three-dots"></i></div>
                    </div>
                </div>
                <div class="table-responsive mt-2">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#ID</th>
                                <th>FullName</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($tb->status):?>
                            <?php foreach ($tb->data as $key):?>
                            <tr>
                                <td>#<?= $key->id?></td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="product-box border">
                                            <ion-icon name="people-outline"></ion-icon>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-name mb-1"><?= $key->fullname?></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><?= $key->email?></td>
                                <td><?= $key->username?></td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#exampleScrollableModal<?= $key->id?>" class="text-warning"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Edit info" aria-label="Edit">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <div class="modal fade" id="exampleScrollableModal<?= $key->id?>" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="<?= site_url('updatetable')?>" enctype="multipart/form-data" method="post"
                                                        class="form-body row g-3">
                                                        <div class="modal-body">
                                                            <input type="hidden" name="id" value="<?= $key->id?>">
                                                            <div class="col-12">
                                                                <label for="inputEmail" class="form-label">Email</label>
                                                                <input type="email" class="form-control" name="email" value="<?= $key->email?>"
                                                                    placeholder="abc@example.com">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="inputEmail"
                                                                    class="form-label">Username</label>
                                                                <input type="text" class="form-control" name="username" value="<?= $key->username?>"
                                                                    placeholder="abc">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="inputEmail" class="form-label">Photo</label>
                                                                <input type="file" class="form-control" name="photo" value="<?= $key->photo?>"
                                                                    placeholder="png, jpg">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="inputEmail"
                                                                    class="form-label">FullName</label>
                                                                <input type="text" class="form-control" name="fullname" value="<?= $key->fullname?>"
                                                                    placeholder="abc example">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="inputPassword"
                                                                    class="form-label">Password</label>
                                                                <input type="password" class="form-control" value="<?= $key->password?>"
                                                                    name="password" placeholder="Your password">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <a href="<?= site_url('deletetable/'.$key->id.'')?>" class="text-danger"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Delete" aria-label="Delete">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content-->
</div>
<!--end page content wrapper-->