

    <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NOVO AUTOR</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>AUTORES</h2>
    <div class="table-responsive">
      <table class="table">
        <thead>
          
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
          
        </thead>
        <tbody>
          <?php
            foreach(AutorRepository::listAll() as $autor){
  
          ?>

              <tr> 
                <td><?php echo $autor->getId(); ?></td>
                <td><?php echo $autor->getNome(); ?></td>
                <td>
                  <a href="#" class="btn btn-info">Editar</a>
                  <a href="#" class="btn btn-danger">Deletar</a>

                </td>
              </tr>
              <?php
            }
              ?>

            
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>