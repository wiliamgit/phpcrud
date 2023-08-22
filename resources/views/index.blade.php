<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="text-center mt-3 mb-4">
    <a>
            <button class= "btn btn-success">Cadastrar</button>
    </div class="text-center">
  <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Livro</th>
      <th scope="col">Autor</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    @foreach($book as $books)<!--chamando a variavel book da constroller e colocando para variavel books-->

    <!--colocando a function na variavel "user" e chamando o metodo relUser-->
    @php 
    $user=$books->find($books->id)->relUser;
    @endphp
    <!--chamando os atributos da tabelas-->
    <tr>
      <th scope="row" >
        {{$books->id}}
      </th>
      <td>
        {{$books->title}}
      </td>
      <td>
        {{$user->name}}
      </td>
      <td>
        {{$books->valorLi}}
      </td>
      <td>
        <a href="{{url("book\$books->id")}}">
            <button class= "btn btn-dark" >Visualizar</button>
          
        </a>
        <a href="">
            <button class= "btn btn-primary">Editar</button>
          
        </a>
        <a href="">
            <button class= "btn btn-danger">Excluir</button>
          
        </a>
      </Td>
    </tr>
    @endforeach
  </tbody>
</table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>