
@extends ( ' templates.main ' , [ ' titulo '  =>  " Clientes " , ' rota '  =>  " clientes.create " ] )

@section ( ' titulo ' ) Clientes @endsection

@section ( ' conteudo ' )

    < classe div  = " linha " >
        < classe div  = " coluna " >
            
            
            < x-datalist 
                :header = " ['ID', 'NOME', 'E-MAIL', 'AÇÕES'] " 
                :dados = " $dados "
                :hide = " [verdadeiro, falso, verdadeiro, falso] " 
            />

        </ div >
    </ div >
@endsection