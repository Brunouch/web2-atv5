<!DOCTYPEhtml>
< html  lang = " pt-br " >
< cabeça >
    < meta  charset = " UTF-8 " >
    < meta  http-equiv = "  Conteúdo compatível com X-UA " = " IE=edge " >
    < meta  name = " viewport "  content = " largura = largura do dispositivo, escala inicial = 1,0 " >
    < title >Cadastrar de Clientes</ title >
</ cabeça >
< corpo >
    < a  href = " {{ route ( ' clientes.index ' ) } } " >Voltar</ a >
<br>     _ _
    < label >ID: </ label > {{ $dados [ ' id ' ] } }
<br>     _ _
    < label >Nome: </ label > {{ $dados [ ' nome ' ] } }
<br>     _ _
    < label >E-mail: </ label > {{ $dados [ ' email ' ] } }
</ corpo >
</ html >