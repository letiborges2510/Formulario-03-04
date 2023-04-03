<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="background-color: rgb(202, 202, 202);">
    <div class="container" style="background-color: white; padding: 0;">
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SISTEMA WEB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Consultar</a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>


        <br>

        <div class=" container text-center table ">
            <div class="row">
                <div class="col">
                    <h4 class="text-start"> Consultar - Contatos Agendados </h4>
                    <div class=" table-2">

                        <div class=" bg-primary ">
                            <h5>Nome</h5>

                            <?php
                                require_once("pessoa.class.php");
                                $pessoa = new Pessoa();
                                $pessoa->setNome($_POST['nome']);
                                echo $pessoa->getNome();
                                ?>
                        </div>
                        <div class="bg-primary ">
                            <h5>Telefone</h5>

                            <?php
                                require_once("pessoa.class.php");
                                $pessoa = new Pessoa();
                                $pessoa->setTelefone($_POST['telefone']);
                                echo $pessoa->getTelefone();
                                ?>
                        </div class="bg-primary ">
                        <div class="bg-primary ">

                            <h5>Origem</h5>

                            <?php
                                require_once("pessoa.class.php");
                                $pessoa = new Pessoa();
                                $pessoa->setOrigem($_POST['origem']);
                                echo $pessoa->getOrigem();
                                ?>
                        </div>
                        <div class="bg-primary ">

                            <h5>Contato</h5>

                            <?php
                                require_once("pessoa.class.php");
                                $pessoa = new Pessoa();
                                $pessoa->setData($_POST['data']);
                                echo $pessoa->getData();
                                ?>
                        </div>
                        <div class="bg-primary ">

                            <h5>Observação</h5>

                            <?php
                                require_once("pessoa.class.php");
                                $pessoa = new Pessoa();
                                $pessoa->setObservacao($_POST['observacao']);
                                echo $pessoa->getObservacao();
                                ?>
                        </div>
                        <div class="bg-primary ">

                            <h5>Ação</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</body>

</html>