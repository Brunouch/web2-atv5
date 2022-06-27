<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends ( ' templates.main ' , [ ' titulo '  =>  " Novo Cliente " ] )

@section ( ' titulo ' ) Clientes @endsection

@section ( ' conteudo ' )

    < form  action = " {{ route ( ' clientes.store ' ) } } "   method = " POST " >
        @csrf
        < classe div  = " linha " >
            < classe div  = " coluna " >
                < div  class = " form-floating mb-3 " >
                    < entrada 
                        tipo = " texto " 
                        class = " controle de formulário " 
                        nome = " nome " 
                        espaço reservado = " Nome "
                        valor = " {{ antigo ( ' nome ' ) } } "
                    />
                    < label  for = " nome " >Nome do Cliente</ label >
                </ div >
            </ div >
        </ div >
        < classe div  = " linha " >
            < classe div  = " coluna " >
                < div  class = " form-floating mb-3 " >
                    < entrada 
                        tipo = " e- mail " 
                        class = " controle de formulário " 
                        nome = " e- mail " 
                        placeholder = " E-mail "
                        value = " {{ old ( ' email ' ) } } "
                    />
                    < label  for = " email " >E-mail do Cliente</ label >
                </ div >
            </ div >
        </ div >
        < classe div  = " linha " >
            < classe div  = " coluna " >
                < a  href = " {{ route ( ' clientes.index ' ) } } "  class = " btn btn-secondary btn-block align-content-center " >
                    < svg  xmlns = " http://www.w3.org/2000/svg "  largura = " 24 "  altura = " 24 "  fill = " currentColor "  class = " bi-seta-esquerda-preenchimento "  viewBox = " 0 0 16 16 " >
                        < caminho  d = " M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z " />
                    </ svg >
                    & nbsp ; Voltar
                </a> _ _
                < a  href = " javascript:document.querySelector('form').submit(); "  class = " btn btn-sucesso btn-block align-content-center " >
                    Confirmar & nbsp ;
                    < svg  xmlns = " http://www.w3.org/2000/svg "  largura = " 24 "  altura = " 24 "  fill = " currentColor "  class = " bi bi-check-circle-fill "  viewBox = " 0 0 16 16 " >
                        < caminho  d = " M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z " />
                    </ svg >
                </a> _ _
            </ div >
        </ div >
    </ formulário >

@endsection