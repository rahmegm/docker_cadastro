<!-- ./php/index.php -->

<html>
    <head>
        <title>Cadastro Aluno</title>
    </head>
    <body>
        
        <!-- início php -->
        <?php
            // echo "Inicio";
            $con = mysqli_connect("db","root","root","test_db");
            // echo "<br>Conectei ...";

            // Check connection
            if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
            }

            // echo "<br>Verificando método ...<br>";
            if( $_GET )
            {
                // echo "Indo pelo GET";
                $nome =  $_GET['nome'];
                $RA = $_GET['RA'];
                $password =  $_GET['senha'];

                $sql = "INSERT INTO cadastro (nome, RA, password) VALUES ('$nome', '$RA', '$password')";
                mysqli_query($con, $sql);
            }
            elseif( $_POST )
            {
                // echo "Indo pelo POST";
                $nome =  $_POST['nome'];
                $RA = $_POST['RA'];
                $password =  $_POST['senha'];

                $sql = "INSERT INTO cadastro (nome, RA, password) VALUES ('$nome', '$RA', '$password')";
                mysqli_query($con, $sql);
            }
            else 
            // echo "<br>Nenhum método escolhido ... <br>"-->;
            mysqli_close($con);
            // echo "<br>Fechei conexão ... <br>"
        ?>
        <!-- fim php -->

        <h2>Cadastro Aluno</h2>
        <form action="index.php" method="post"> <!-- form e tudo que vem dentro dele (cria o formulário) -->
            <label for="nome">Nome:</label> <!-- rótulo de nome chamado: NOME -->
            <input type="text" id="nome" name="nome" required><br><br> <!-- entrada do dado, contento o tipo do mesmo, id  e nome, no caso é obrigatório o preenchimento (required) -->
            <!-- <br> serve para pular linha -->

            <label for="RA">RA:</label>
            <input type="number" id="RA" name="RA" required><br><br>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br><br>

            <input type="submit" value="Cadastrar">
        </form> 
    </body>
</html>