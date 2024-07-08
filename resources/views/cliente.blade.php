<html>
    <head>
        <title>Treino teste</title>
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/app.css')?>" />
    </head>

<body>
    @include('topo.topo')
    @include('menu.menu')

    <div id="cliente_conteudo">
        <h1 class="title">Sistema Company</h1>

        <div id="formulario">
            <form name="form_cliente">
                <fieldset class="cliente">
                    <label>CPF:</label>
                    <span><input type="text" name="document" /></span>
                    <label>Nome:</label>
                    <span><input type="text" name="name" /></span>
                    <label>Data de Nascimento:</label>
                    <span><input type="text" name="date_birth" /></span>
                    <label>Sexo:</label>
                    <span><input type="radio" name="gender" value="M" /> Masculino</span>
                    <span><input type="radio" name="gender" value="F" /> Feminino</span>
                    <label>Endereço:</label>
                    <span>
                        <input type="text" name="address" />
                    </span>
                    <label>Estado:</label>
                    <span>
                        <select name="estado">
                            <option value="">Selecione</option>
                            @foreach($states as $k => $state)
                            <option value="{{$k+1}}">{{$state}}</option>
                            @endforeach
                        </select>
                    </span>
                    <label>Cidade:</label>
                    <span>
                        <select name="cidade">
                            <option value="">Selecione</option>
                        </select>
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
