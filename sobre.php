<?php
include_once 'class/header.class.php';
include_once 'class/menu.class.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php new Header('Sobre'); ?>
    </head>
    <body>
        <?php new Menu('sobre'); ?>
        <div class="ui container">
            <div class="ui icon attached message">
                <i class="file text outline icon"></i>
                <div class="content">
                    <div class="header">
                        Sobre
                    </div>
                    <p>Sobre a ideia da aplicação</p>
                </div>
            </div>
            <div class="ui message">
                <p>
                    Na empresa Softers | AgênciaSys, todo ano é feito um Arraial corporativo, onde todos ajudam comprando os itens que compôem esta festa junina.
                    Funcionava com uma lista de papel sendo passada por cada funcionário alguns dias antes. Visando a facilidade da visualização e com base na ideia do 
                    <a href="https://github.com/JeanGoncalves/coffeeList">CoffeeList</a>, foi criado o ArraialList.
                </p>
            </div>
            <div>
                <div class="ui message">
                    <div class="header">Iniciativa de:</div>
                    <p>
                        <div class="ui cards">
                            <div class="card">
                                <div class="content">
                                    <img class="left floated tiny ui rounded image" src="https://pt.gravatar.com/userimage/103143658/abe48e41565d01795c10af6fba65d29c.jpg?size=200">
                                    <div class="header">Otávio Augusto</div>
                                    <div class="meta">Softers | Agênciasys</div>
                                    <div class="description">
                                        Desenvolvedor Back-end
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a href="https://www.facebook.com/otaavioo" class="ui circular facebook icon button">
                                        <i class="facebook icon"></i>
                                    </a>
                                    <a href="https://github.com/otaavioo" class="ui circular black icon button">
                                        <i class="github alternate icon"></i>
                                    </a>
                                    <a href="https://br.linkedin.com/in/otaviobpinto" class="ui circular linkedin icon button">
                                        <i class="linkedin icon"></i>
                                    </a>
                                    <a href="https://bitbucket.org/otaavioo" class="ui circular blue icon button">
                                        <i class="bitbucket icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
