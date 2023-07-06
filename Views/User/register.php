<div class="container p-4">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card text-center">
                    <output id="imageUser">
                        <img src="<?php echo URL . RS ?>img/default.png" alt="" class="imageUser">
                    </output>
                    <div class="card-body">
                        <div class="caption text-center">
                            <label for="files" class="btn btn-primary">Cargar foto</label>
                            <input accept="image/*" type="file" id="files">
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-xs-6 col-md-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title rg">Registrar usuarios</h3>
                    </div>
                    <div class="panel-body">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <div id="header" class="bg-info">
                                        <h2 class="mb-0 t">
                                            <button class="btn btn-info text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Ingresar información
                                            </button>
                                        </h2>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <input type="text" placeholder="NID" name="nid" class="form-control" autofocus>
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" placeholder="Name" name="name" class="form-control">
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" placeholder="Lastname" name="lastname" class="form-control">
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" placeholder="Phone" name="phone" class="form-control">
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="email" placeholder="Email" name="email" class="form-control">
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="password" placeholder="Password" name="pass" class="form-control">
                                            <span class="text-danger"></span>
                                        </div>

                                        <div class="form-group mb-3">
                                            <select class="form-select" name="" id="">
                                                <option value="">Dafult Select</option>
                                                <option value="">One</option>
                                                <option value="">Two</option>
                                            </select>
                                            <!-- <span class="text-danger"></span> -->
                                        </div>
                                        <div class="form-group mb-3">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                Register
                                            </button>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="" class="text-danger"></label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>