<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Preview-Upload</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <br/>

        <div class="container bootstrap snippet">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img src="avatar.png"
                                 class="avatar img-circle img-thumbnail"
                                 alt="avatar">
                            <input type="file"
                                   name="user_avatar"
                                   class="btn-file text-center center-block file-upload">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="col-xs-3">
                                <label for="user_name">Nome</label>
                                <input type="text"
                                       class="form-control"
                                       name="user_name"
                                       id="user_name"
                                       placeholder="Nome Completo"
                                       title="Seu nome aqui!">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-success">Enviar</button>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    </body>
</html>
