<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/logotipo/LogoMarca-4.png') }}" >
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Candidato Agora</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('plugins/slick-1.8.1/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
</head>

<body>

    <section class='bannerIndex'>
        <h1>Quer conhecer seu <strong>próximo emprego</strong> em ti?</h1>
        <img src="{{ asset('img/bannerCandidato.jpeg') }}" alt="">
    </section>
  
    <section class='Simplifique'>
        <div class='simplifiqueBanner'>
            <img class='player' src="{{ asset('img/Vбdeo.png') }}" alt="">
            <h2>Assista e Conheça Mais!</h2>
            <img class='logoplayer' src="{{ asset('img/CandidatoAgora-marca2.jpg') }}" alt="">
        </div>
        <div class='simplifiqueText'>
            <p><strong>SIMPLIFIQUE</strong> e <strong>OTIMIZE</strong> o seu processo de aplicação para as vagas. <br/> <br/> A plataforma Candidato Agora, através de algoritmos, prioriza e direciona o seu perfil para as vagas de maior adequação e interesse, além de deixar o seu CV disponível para consulta de outros potenciais recrutadores.</p>
        </div>
    </section>

    <section class='form'>
        <h2>100% Gratuito. <strong>Candidatura rápida e fácil</strong></h2>
        <h3>Aumente suas chances para um novo trabalho. <strong>Cadastre-se agora!</strong></h3>

        <form action="">
            <label for="nome">Nome *</label>
            <input type="text" id='nome' placeholder='Digite seu nome'>

            <label for="email">E-mail *</label>
            <input type="email" id='email' placeholder='Digite o seu e-mail'>

            <label for="celular">Celular *</label>
            <input type="text" id='celular' placeholder='Digite o seu número de celular'>
        
            <label for="linkedin">Endereço do Linkedin *</label>
            <input type="text" id='linkedin' placeholder='Cole seu endereço do Linkedin'>
        
            <div  class='checkbox'>
                <input hidden type="checkbox" id='whatsapp' name='whatsapp'>
                <label for="whatsapp">
                </label>    
                <p>Autorizo receber mensagens no WhatsApp ou SMS sobre oportunidades de carreira.</p>    
            </div>

            <div class='checkbox'>
                <input hidden type="checkbox" id='politica' name='politica'>
                <label for="politica">
                </label>
                <p>Li e aceito Política de Privacidade de Informação e Termo de Consentimento Responsável.</p>
            </div>

            <button id='enviar' type='button'>Enviar</button>
        </form>
    </section>
    <div class='empresas-curva1'></div>
    <section class='empresas'>
        <h2>Empresas com vagas de TI no mercado</h2>
        <div class='galeria'>
            <div class='galeria-box'>
                <img src="{{ asset('img/Logos/smiles-logo.png') }}" alt="">
            </div>
            <div class='galeria-box'>
                <img src="{{ asset('img/Logos/smiles-logo.png') }}" alt="">
            </div>
            <div class='galeria-box'>
                <img src="{{ asset('img/Logos/smiles-logo.png') }}" alt="">
            </div>
            <div class='galeria-box'>
                <img src="{{ asset('img/Logos/smiles-logo.png') }}" alt="">
            </div>
            <div class='galeria-box'>
                <img src="{{ asset('img/Logos/smiles-logo.png') }}" alt="">
            </div>
            <div class='galeria-box'>
                <img src="{{ asset('img/Logos/smiles-logo.png') }}" alt="">
            </div>
            <div class='galeria-box'>
                <img src="{{ asset('img/Logos/smiles-logo.png') }}" alt="">
            </div>
            <div class='galeria-box'>
                <img src="{{ asset('img/Logos/smiles-logo.png') }}" alt="">
            </div>
        </div>
    </section>
    
    <footer>
        <div class='empresas-curva2'></div>
        <main>
        <div class='container'>
            <img  class='candidatoAgoraImg' src="{{ asset('img/CandidatoAgora-marca2.jpg') }}" alt="">
            <span class='dev'>
                <img src="{{ asset('img/cone_LGPD.png') }}" alt="">
                <p>Desenvolvimento em conformidade com a LGPD</p>
            </span>
            <div class='container-redes'>
                <p>ACOMPANHE</p>
                <span>
                    <a href=""><img src="{{ asset('img/Нcone_Facebook.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset('img/cone_LinkedIn.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset('img/cone_Instagram.png') }}" alt=""></a>
                </span>
            </div>
            <div class='alertas'>
                <p>RECEBA ALERTAS DE VAGAS</p>
                <input type="text" id='alerts'>
                <button type='button' id='buttonAlerts'><span class="material-icons"> navigate_next </span></button>
            </div>
        </div>
        <div class='cnpj'>
            <p>Política de Privacidade de informação e termo de Consentimento Responsável</p>
            <p>CNPJ: 33899.659/0001-80 | Av. das Nações Unidas, 12901 – 25 andar | CEP 04578-000 – São Paulo</p>
        </div>
        </main>
    </footer>
    
    <script src="{{ asset('plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/slick-1.8.1/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>