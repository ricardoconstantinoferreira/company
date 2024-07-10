<html>
<head>
    <title>Treino teste</title>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/app.css')?>" />
    <script type="text/javascript" src="<?php echo asset('js/lib/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/cliente/view/state.js')?>"></script>
</head>

<body>
    @include('topo.topo')
    @include('menu.menu')

    <div id="representante_conteudo">
        <h1 class="title">Sistema Company</h1>

        <div id="formulario">
            <form name="form_representante">
                <fieldset class="representante">
                    <label>Nome:</label>
                    <span><input type="text" name="name" /></span>
                    <label>Estado:</label>
                    <span>
                        <select name="estado">
                            <option value="">Selecione</option>
                            @foreach($states as $state)
                                <option value="{{$state}}">{{$state}}</option>
                            @endforeach
                        </select>
                    </span>
                    <label>Cidade:</label>
                    <span>
                        <select name="cidade"></select>
                    </span>
                    <label class="buttons">
                        <button type="button" class="salvar">Salvar</button>
                        <button type="button" class="limpar">Limpar</button>
                    </label>
                </fieldset>
            </form>
        </div>
        <div id="listagem">

        </div>
    </div>
</body>
</html>

