
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="http://simple-form-bootstrap.plataformatec.com.br/favicon.ico" type="image/x-icon">
    <title>Example application with SimpleForm and Twitter Bootstrap</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="{{ asset('/css/application-style.css')}}" media="screen" rel="stylesheet" />
    <meta content="authenticity_token" name="csrf-param" />

    <style>
        .navbar{
            background-color: #D00000;
            border-color: #D00000;
        }
        .navbar-brand{
            color: #FFFFFF;
        }

        .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus {
            background-color: #B70000;
            color: white;
        }
        .panel-info>.panel-heading{
            background-color: #D00000;
            border-color: #d6d6d6;
        }
        .panel-info>.panel-heading{
            color: #FFFFFF;
        }
        .panel-info{
            border-color: #C7C7C7;
        }
        .btn-yellow{
            color: #F44336;
            background-color: #FFC107;
            border-color: #FFC107;
        }
        .btn-yellow:hover{
            background-color: #FAF834;
        }

    </style>
    <script>
        function removeItemProd(val){
            $('tr#rest'+val).remove();
        }
    </script>
</head>
<body style="background-color: rgba(158, 158, 158, 0.18);">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Itália - Sorveteria</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#" style="background-color: #B70000;">Clientes</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="glyphicon glyphicon-user"></span>
                            Meus dados <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Cadastro</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container master-container">

    <div class='alert alert-info fade in' data-alert='alert'>
        <h3>
                <a href="#">Cadastrado com sucesso!</a>
        </h3>

    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">CADASTRAR NOVO CLIENTE</div>
                <div class="panel-body">
                    <p> <strong>Dados Pessoais</strong></p>
                    <form role="form" method="post">
                        <div class="form-group" style="float: left; margin-right: 20px; width: 70%;">
                            <label class="control-label" for="LabelInputNome">Nome</label>
                            <input type="text" class="form-control" name="InputNome" id="InputNome" placeholder="Nome completo">

                        </div>

                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputCodigoCliente">Código Cliente</label>
                            <input type="text" class="form-control" name="InputCodigoCliente" id="InputCodigoCliente" placeholder="Código Cliente">

                        </div>

                        <div class="form-group" style="clear: both;">
                        </div>

                        <div class="form-group" style="float: left; margin-right: 20px; width: 70%;">
                            <label class="control-label" for="LabelInputEmail">E-mail</label>
                            <input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder="Email">

                        </div>

                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputCPF">CPF</label>
                            <input type="text" class="form-control" name="InputCPF" id="InputCPF" placeholder="">

                        </div>

                        <div class="form-group" style="clear: both;">
                        </div>

                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputCPF">Telefone 1</label>
                            <input type="text" class="form-control" name="InputTelefone1" id="InputTelefone1" placeholder="">

                        </div>
                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputCPF">Telefone 2</label>
                            <input type="text" class="form-control" name="InputTelefone2" id="InputTelefone2" placeholder="">

                        </div>
                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputCPF">Celular</label>
                            <input type="text" class="form-control" name="InputCelular" id="InputCelular" placeholder="">

                        </div>

                        <div class="form-group" style="clear: both;">
                        </div>

                        <p> <strong>Endereço</strong> </p>

                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputCEP">CEP</label>
                            <input type="text" class="form-control" name="InputCEP" id="InputCEP" placeholder="">

                        </div>
                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputRua">Rua</label>
                            <input type="text" class="form-control" name="InputRua" id="InputRua" placeholder="">

                        </div>
                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputNumero">Celular</label>
                            <input type="text" class="form-control" name="InputNumero" id="InputNumero" placeholder="">

                        </div>

                        <div class="form-group" style="clear: both;">
                        </div>

                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputBairro">Bairro</label>
                            <input type="text" class="form-control" name="InputBairro" id="InputBairro" placeholder="">

                        </div>
                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputRua">Cidade</label>
                            <input type="text" class="form-control" name="InputRua" id="InputRua" placeholder="">

                        </div>
                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputUF">Estado</label>

                            <select type="select" name="InputUF" id="InputUF" class="form-control">
                                <option value=""> -- </option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espirito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>

                            </select>

                        </div>

                        <div class="form-group" style="clear: both;">
                        </div>


                        <button type="submit" class="btn btn-yellow">Concluir Cadastro</button>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Área restrita</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
                </div>

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="loginform" class="form-horizontal" role="form">

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Login">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="Senha">
                        </div>



                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar
                                </label>
                            </div>
                        </div>


                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-md-12">

                                <a id="btn-fblogin" href="#" class="btn btn-lg btn-danger col-md-12">Entrar</a>

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                   Esqueceu a senha ou usuário?
                                    <a href="#">
                                        Clique aqui.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>

        <style>
            .entry:not(:first-of-type)
            {
                margin-top: 10px;
            }

            .glyphicon
            {
                font-size: 12px;
            }

            td {
                padding:2px;
            }

        </style>


        <div style="clear: both;"></div>

        <div class="col-md-12">
            <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                <label class="control-label" for="escolhaProduto">Esolha produto</label>
                <input class="form-control" name="size" type="text" placeholder="Size" required />

            </div>
            <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                <label class="control-label" for="quantidade">Quantidade</label>
                <input class="form-control" name="quantity" type="number" placeholder="Quantity" required />

            </div>

            <div class="form-group" style="float: left;">
                <label class="control-label" for="escolhaProduto"> </label>
                <button class="btn btn-success btn-add" style="margin-top: 25px;" type="button">
                    <i class="glyphicon glyphicon-plus gs"></i>
                    <b> Adicionar</b>
                </button>
            </div>

        </div>

        <div style="clear: both;"></div>

        <div id="campos-table" class="col-md-12">

            <table class="table table-striped custab">
                <thead>

                <tr>
                    <th>PRODUTOS ESCOLHIDOS</th>

                    <th>QUANTIDADE</th>
                    <th class="text-center"></th>
                </tr>
                </thead>
                <tbody id="conteudo-ajax">
                    <tr>

                        <td>Produto 01</td>
                        <td>2</td>
                        <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                    </tr>
                </tbody>


            </table>


        </div>


    </div>


</div>

<footer class="footer">
    <div class="container">
        <p>Copyright 2016 <a href="#"> Sorverteria Itália</a></p>

    </div>
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('button.btn-add').click(function(){
                var nome = $('input[name=size]').val();
                var qtd = $('input[name=quantity]').val();
                var id = $("table.custab tr").length + 1;
                $('#conteudo-ajax').append(

                        '<tr id="rest'+(id)+'">'
                        +'<td>'+nome+'</td>'
                        +'<td>'+qtd+'</td>'
                        +'<td class="text-center"><a class="btn btn-info btn-xs" href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <span onclick="removeItemProd('+(id)+')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</span></td>'
                        +'</tr>'
                );
            });


        });
    </script>
</body>
</html>
