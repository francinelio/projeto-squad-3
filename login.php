<?php require("includes/header.php"); ?>


<main>
    <div class="gradiente">

        <div class="text-center p-5">

            <div class="text-center mb-5">
                <img src="assets/img/logo.png" alt="">
            </div>
            <!--fim da div logo-->

            <form class="bg-white p-5 m-5">

                <div class="col-auto">
                    <div class="input-group my-2">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> <i class="far fa-envelope"></i> </div>
                        </div>

                    </div>
                </div>

                <div class="col-auto">
                    <div class="input-group my-2">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Senha">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-eye"></i></div>
                        </div>
                    </div>
                </div>

                <div class="text-center p-3">
                    <div>
                        <button type="submit" class="btn btn-primary mb-3  px-5 rounded-pill">Entrar</button>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-primary mb-3  px-4 rounded-pill ">Cadastrar</button>
                    </div>
                </div>
                <!--criar página de recuperação de senha-->
                <p>Esquecir a senha: <a href="#"> Clique aqui</a></p>

            </form>
            <!--fim do formulário-->

        </div>
    </div>
</main>


<?php require("includes/footer.php"); ?>