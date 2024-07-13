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
    <h1 class="title">Sistema Company - Busca de Customers</h1>

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
    <div id="listagem">
        <table class="customers_search">
            <thead>
                <tr>
                    <th>Editar</th>
                    <th>Excluir</th>
                    <th>Cliente</th>
                    <th>Documento</th>
                    <th>Data Nasc.</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>Sexo</th>
                </tr>
            </thead>

            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>
                            <button id="editar" class="editar">Editar</button>
                        </td>
                        <td>
                            <button id="excluir" class="editar">Excluir</button>
                        </td>
                        <td>
                            {{ $customer['name'] }}
                        </td>
                        <td>
                            {{ $customer['document'] }}
                        </td>
                        <td>
                            {{ $customer['date_birth'] }}
                        </td>
                        <td>
                            {{ $customer['state'] }}
                        </td>
                        <td>
                            {{ $customer['city'] }}
                        </td>
                        <td>
                            {{ $customer['gender'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
