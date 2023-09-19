<?php

include_once '../Include/_db.php';
include_once '_head.php';

$sql = "SELECT * FROM usuários";
$resultado = mysqli_query($conn,$sql);
$total = mysqli_num_rows($resultado);

include_once '_menu.php';
?>

    <main>
        <h2>Administração dos Usuarios</h2>

        <a href="usuario-salvar.php">Inserir</a>
        <hr>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome Completo</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Ações</th>
            </tr>

            <?php

            if ($resultado) {
                while ($dado = mysqli_fetch_array($resultado)){
            ?>
            <tr>
                <td><?php echo $dado['UsuarioID'];?></td>
                <td><a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['UsuarioID'];?>"><?php echo $dado['NomeCompleto'];?></a></td>
                <td><a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['Email'];?>"><?php echo $dado['Email'];?></a></td>
                <td><a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['Senha'];?>"><?php echo $dado['Senha'];?></a></td>
                <td><a href="categoria-processa.php?acao=excluir&id=<?php echo $dado['UsuarioID']; ?>">Excluir</a></td>
            </tr>
            <?php

                }
            }else{
            ?>
            <tr>
                <td colspan="5">Resultados não encontrados</td>
            </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="5">Total de Registros: <?php echo $total;?></td>
            </tr>
        </table>
    </main>

<?php
include_once '_footer.php';
?>
