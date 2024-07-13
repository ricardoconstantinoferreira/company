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

    <div id="cliente_conteudo">
        <h1 class="title">Sistema Company</h1>

        <div id="formulario">
            <form name="form_cliente" action="{{ route('customers.store') }}" method="POST">
                @csrf
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
                        <button type="submit" class="salvar">Salvar</button>
                        <button type="button" class="limpar">Limpar</button>
                    </label>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>
