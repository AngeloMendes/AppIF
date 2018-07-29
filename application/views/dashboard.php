


<!------ Include the above in your HEAD tag ---------->

<div class="menu">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">APP IF</a>
        </div>

        <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown mega-dropdown">
                    <a href="#" >Cadastrar novas tarefas</a>

                </li>
                <li class="dropdown mega-dropdown">
                    <a href="#" >Praticar nova tarefa </a>

                </li>
                <li class="dropdown mega-dropdown"><a href="#">Sobre</a></li>
            </ul>

        </div><!-- /.nav-collapse -->
    </nav>
</div>

<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
                $(this).toggleClass('open');
            }
        );
    });
</script>

<style>
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
    body {
        font-family: 'Open Sans', 'sans-serif';
    }
    .menu{
        position:absolute !important;
        margin: 0% auto !important;
        width: 100% !important;
        padding: 0px 0;


    }
    .mega-dropdown {
        position: static !important;
    }

    .mega-dropdown-menu > li > ul {
        padding: 0;
        margin: 0;
    }
    .mega-dropdown-menu > li > ul > li {
        list-style: none;
    }
    .mega-dropdown-menu > li > ul > li > a {
        display: block;
        color: #222;
        padding: 3px 5px;
    }
    .mega-dropdown-menu > li ul > li > a:hover,
    .mega-dropdown-menu > li ul > li > a:focus {
        text-decoration: none;
    }


</style>