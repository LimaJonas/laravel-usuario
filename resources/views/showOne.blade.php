<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Usuario</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->
<style>
label {
    font-family: Arial, Helvetica, sans-serif;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
button[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
table, td, th {  
  font-family: Arial, Helvetica, sans-serif;
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}

.editar {
  background-color: #ffeb3b;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.remover {
  background-color: #f44336;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
</head>
<body class="antialiased">
  <form action="{{ route('pesquisar', ['search' => '1'])}}" method="GET">
    <label>Buscar: </label>
      <input
        id="search"
        type="text"
        placeholder="Ex: João"
        required
      />
      <button type="submit">Buscar</button>
  </form>
    <div style="overflow-x:auto;">
        <table>
            <thead>
                <tr>
                    <td>Nome completo</td>
                    <td>Email</td>
                    <td>Telefone</td>
                    <td>Pessoa Jurídica?</td>
                    <td>CPF/CNPJ</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $usuario->nome }} {{ $usuario->sobrenome }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->telefone }}</td>
                    <td>
                      <?php if($usuario->pj == 1){
                          echo "Sim";
                      }  else{
                          echo "Não";
                      }
                      ?>
                    </td>
                    <td>
                      <?php if($usuario->pj == 1){
                        echo $usuario->cnpj;
                      }  else{
                          echo $usuario->cpf;
                      }
                      ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>