<h1>Lista de contatos</h1>



<table class="table table-hover table-striped">
    <thead class="table-dark">

        <tr>


            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>

        </tr>
  </thead>

<tbody>

<?php
       foreach($contatos as $posicao => $cadaContato){
             $partes = explode(';', $cadaContato);//quebra a string em varias partes

          echo '<tr>';
           
           echo '<td>'.$partes[0].'</td>';
           echo '<td>'.$partes[1].'</td>';
           echo '<td>'.$partes[2].'</td>';
           echo "<td>
                  <a href= '/excluir?id={$posicao}' class='btn btn-danger btn-sm'> Excluir </a>
                  <a href= '/editar?id={$posicao}' class='btn btn-warning btn-sm'> Editar </a>
           
           </td>";
       
            echo '</tr>';
        }

?>
</tbody>
</table>