$(document).ready(function() {

    //Monitorar todos os cliques em cima do elemento "a" do nosso documento HTML

    $('#li3').click(function(e) {
        e.preventDefault()

        //Criar uma variável local que receba o atributo href do link
        let page = $(this).attr('href')

        $('.modal-title').empty()
        $('.modal-body').empty()

        //Verificar qual conteúdo eu devo carregar
        switch (page) {
            //Se for para abria a página sobre mim...
            case 'About':
                $('.modal-title').append('<h4 class="bg-texttitle text-center mt-4">About Us</h4>')
                $('.modal-body').append(`<img class="img-fluid" id="bmw" src="imagens/bmw.jpg" alt=""></br> <br>
                <p> A empresa Natan Vehicles foi criada em outubro de 2021 com o intuito de ajudar as pessoas a terem uma grande facilidade na locação de carros por um preço muito favorável e econômico.</p>
                <p> Trabalhamos com todos os tipos de veículos, desde os mais acessíveis e econômicos até os mais luxuosos e cheios de tecnologia pra você se divertir e ostentar para os seus amigos e para a namorada ou namorado.</p>
                <p>Levamos o nosso trabalho muito a sério e queremos sempre trazer o máximo de segurança e de ótimo relacionamento com os nossos clientes! A partir do momento em que você entra em nosso site e faz o seu login, você vira parte da família Natan Vehicles e vira um mebro super importante para nós.</p>
                <p>Conte conosco sempre e seja muito bem vindo!!!</p>`)
                $('#modal-info').modal('show')
                break
            default:
                alert('link não encontrado')
        }

    })

    $('#li2').click(function(e) {
        e.preventDefault()

        //Criar uma variável local que receba o atributo href do link
        let page = $(this).attr('href')

        $('.modal-title').empty()
        $('.modal-body').empty()

        //Verificar qual conteúdo eu devo carregar
        switch (page) {
            //Se for para abria a página sobre mim...
            case 'Login':
                $('.modal-title').append('<h4 class="bg-texttitle text-center mt-4">Cliente ou Funcionário</h4>')
                $('.modal-body').append(`<form action="cliente_login.html" method="POST" class="form-horizontal">
                            <button class="btn btn-personal">Cliente</button> 
                    </form> <br>
                    <form action="func_login.html" method="POST" class="form-horizontal">
                            <button class="btn btn-personal">Funcionário</button> 
                    </form>
                `)
                $('#modal-info').modal('show')
                break
            default:
                alert('link não encontrado')
        }

    })

    $('.li2').click(function(e) {
        e.preventDefault()

        //Criar uma variável local que receba o atributo href do link
        let page = $(this).attr('href')

        $('.modal-title').empty()
        $('.modal-body').empty()

        //Verificar qual conteúdo eu devo carregar
        switch (page) {
            //Se for para abria a página sobre mim...
            case 'Login':
                $('.modal-title').append('<h4 class="bg-texttitle text-center mt-4">Cliente ou Funcionário</h4>')
                $('.modal-body').append(`<form action="cliente_login.html" method="POST" class="form-horizontal">
                            <button class="btn btn-personal">Cliente</button> 
                    </form> <br>
                    <form action="func_login.html" method="POST" class="form-horizontal">
                            <button class="btn btn-personal">Funcionário</button> 
                    </form>
                `)
                $('#modal-info').modal('show')
                break
            default:
                alert('link não encontrado')
        }

    })
})