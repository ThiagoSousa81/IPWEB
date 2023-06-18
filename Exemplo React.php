<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Exemplo React</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>  
  <body>    
    <?php
// Gera alguns dados
$nome = "Thiago";
$email = "thiagosousa81@gmail.com";
?>

<script src="https://cdn.jsdelivr.net/npm/react@17.0.2/umd/react.development.js"></script>
<script src="https://cdn.jsdelivr.net/npm/react-dom@17.0.2/umd/react-dom.development.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>



<script type="text/babel">
  // Define um componente React
  function Usuario(props) {
    return (
      <div>
        <h1>{props.nome}</h1>
        <p>{props.email}</p>
      </div>
    );
  }

  // Renderiza o componente com os dados do PHP
  const nome = "<?php echo $nome; ?>";
  const email = "<?php echo $email; ?>";
  
  ReactDOM.render(
    <Usuario nome={nome} email={email} />,
    document.getElementById('app')
  );
</script>

    <!--A aplicação será mostrada aqui-->
    <section id="app" class="container"></section>
  </body>
</html>  
