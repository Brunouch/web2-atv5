< div >
    
    < table  class = " table align-middle caption-top table-striped " >
        < caption >Tabela de < b >Clientes</ b ></ caption >
        < cabeça >
        < tr >
            @php $cont = 0 ; @endphp 
            @foreach ( $header  como  $item )

                @if ( $hide [ $ cont ] )
                    < th  scope = " col "  class = " d-none d-md-table-cell " > {{ $item } } </ th >  
                @senão
                    < th  scope = " col " > {{ $item } } </ th >  
                @fim se
                @php $cont ++ ; @endphp 

            @endforeach
        </ tr >
        </ cabeça >
        < corpo >
            @foreach ( $dados  como  $item )
                < tr >
                    < td  class = " d-none d-md-table-cell " > {{ $item [ ' id ' ] } } </ td > 
                    < td > {{ $item [ ' nome ' ] } } </ td > 
                    < td  class = " d-none d-md-table-cell " > {{ $item [ ' email ' ] } } </ td > 
                    < td >
                        < a  href = " {{ route ( ' clientes.edit ' , $item [ ' id ' ]) } } "   class = " btn btn-success " >
                            < svg  xmlns = " http://www.w3.org/2000/svg "  largura = " 24 "  altura = " 24 "  preenchimento = " #FFF "  class = " bi-seta-anti-horário "  viewBox = " 0 0 16 16 " >
                                < regra de preenchimento de caminho  = " evenodd " d = " M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z " /> 
                                < caminho  d = " M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z " />
                            </ svg >
                        </a> _ _
                        < a  nohref  style = " cursor : pointer "  onclick = " showInfoModal(' {{ $item [ ' nome ' ] } } ', ' {{ $item [ ' email ' ] } } ') "    class = " btn btn- primário " >
                            < svg  xmlns = " http://www.w3.org/2000/svg "  largura = " 24 "  altura = " 24 "  preenchimento = " #FFF "  class = " bi bi-info-circle-fill "  viewBox = " 0 0 16 16 " >
                                < caminho  d = " M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0.487-.07.686-.246l-.088.416c- .287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082- .381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z " />
                            </ svg >
                        </a> _ _
                        < a  nohref  style = " cursor : pointer "  onclick = " showRemoveModal(' {{ $item [ ' id ' ] } } ', ' {{ $item [ ' nome ' ] } } ') "    class = " btn btn- perigo " >
                            < svg  xmlns = " http://www.w3.org/2000/svg "  largura = " 24 "  altura = " 24 "  preenchimento = " #FFF "  classe = " bi bi-trash-fill "  viewBox = " 0 0 16 16 " >
                                < caminho  d = " M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1 -1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a. 5,5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z " />
                            </ svg >
                        </a> _ _
                    </ td >
                    < form  action = " {{ route ( ' clientes.destroy ' , $item [ ' id ' ]) } } "   method = " POST "  id = " form_ {{ $item [ ' id ' ] } } " >
                        @csrf
                        @method ( ' EXCLUIR ' )
                    </ formulário >
                </ tr >
            @endforeach
        </ tbody >
    </ tabela >

</ div >