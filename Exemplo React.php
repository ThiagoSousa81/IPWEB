<?php
// Gera alguns dados
$nome = "João";
$email = "joao@example.com";
?>

<script src="https://cdn.jsdelivr.net/npm/react@17.0.2/umd/react.development.js"></script>
<script src="https://cdn.jsdelivr.net/npm/react-dom@17.0.2/umd/react-dom.development.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>

<div id="app"></div>

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
