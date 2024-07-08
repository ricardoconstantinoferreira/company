<html>
<head>
    <title>Treino teste</title>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/app.css')?>" />
</head>

<body>
    @include('topo.topo')
    @include('menu.menu')

    <div id="representante_conteudo">
        <h1 class="title">Sistema Company</h1>

        <div id="formulario">
            <form name="form_representante">
                <label>Representante:</label>
                <span><input type="text" name="name" /></span>
            </form>
        </div>
        <div id="listagem">

        </div>
    </div>
</body>
</html>

