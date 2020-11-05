<?php require("includes/header.php"); ?>
<?php require("conexao.php"); ?>






<main>
    <div class="gradiente">

        <div class="text-center p-5">

            <div class="text-center mb-5">
                <img src="assets/img/logo.png" alt="">
            </div>
            <!--fim da div logo-->
            <h1 class="text-center p-5">Cadastro</h1>
            <form class="bg-white p-5 m-5" method="POST" action="">
                <?php
                if (isset($_POST['cadastrar'])) {
                    $nome =    $_POST['nome'];
                    $email =    $_POST['email'];
                    $senha =   md5($_POST['senha']);
                    $telefone =    $_POST['telefone'];
                    $endereco =    $_POST['endereco'];
                    $sql = "select * from usuario where email =  '$email'";
                    $result = $conexao->query($sql);
                    $total_registro = mysqli_num_rows($result);

                    if ($total_registro > 0) {
                        echo '<span style="color: red; text-align: center;">Esse registro já existe</span>';
                    } else {

                        $sql = "insert into usuario (nome,  email, senha, telefone, endereco) values ('$nome', '$email', '$senha','$telefone', '$endereco')";
                        $insert = $conexao->query($sql);
                        echo '<span style="color: red; text-align: center;">Cadastro realizado com sucesso!</span>';
                    }
                }

                ?>



                <div class="col-auto">
                    <div class="input-group my-2">
                        <input type="text" name="nome" class="form-control" placeholder="Seu nome ">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> <i class="far fa-user"></i> </div>
                        </div>

                    </div>
                </div>



                <div class="col-auto">
                    <div class="input-group my-2">
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> <i class="far fa-envelope"></i> </div>
                        </div>

                    </div>
                </div>


                <div class="col-auto">
                    <div class="input-group my-2">
                        <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-eye"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="input-group my-2">
                        <input type="text" name="telefone" class="form-control" placeholder="Seu telefone ">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> <i class="far fa-phone"></i> </div>
                        </div>

                    </div>
                </div>
                <div class="col-auto">
                    <div class="input-group my-2">
                        <input type="text" name="endereco" class="form-control" placeholder="Seu endereço ">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> <i class="fas fa-map-marked-alt"></i></i> </div>
                        </div>

                    </div>
                </div>


                <div class="text-center p-3">

                    <div>
                        <button type="submit" name="cadastrar" class="btn btn-outline-primary mb-3  px-4 rounded-pill ">Cadastrar</button>
                    </div>
                </div>
                <!--criar página de recuperação de senha-->
                <p>Esquecir a senha: <a href="#"> Clique aqui</a></p>

            </form>
            <!--fim do formulário-->
            <!--fim do formulário-->

        </div>
    </div>
</main>


<?php require("includes/footer.php"); ?>