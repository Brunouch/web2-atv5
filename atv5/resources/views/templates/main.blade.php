<!DOCTYPEhtml>
< html  lang = " pt-br " >
    < cabeça >
        < meta  charset = " UTF-8 " >
        < meta  http-equiv = "  Conteúdo compatível com X-UA " = " IE=edge " >
        < meta  name = " viewport "  content = " largura = largura do dispositivo, escala inicial = 1,0 " >
        
        <!-- Definir uma seção "título" -->
        < title >VetClin - @yield ( ' titulo ' )</ title >
        
        <!-- Bootstrap 5 / CSS -->
        < link  href = " https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css "  rel = " stylesheet "  integridade = " sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC "  crossorigin = " anônimo " >

    </ cabeça >
    < corpo >
        < nav  class = " navbar sticky-top navbar-expand-md navbar-dark bg-secondary " >
            < classe div  = " contêiner-fluido " >
                < a  href = " {{ route ( ' index ' ) } } } "  class = " navbar-brand ms-sm-3 " >
                      < svg  xmlns = " http://www.w3.org/2000/svg "  largura = " 36 "  altura = " 36 "  fill = " currentColor "  class = " bi bi-clipboard2-pulse-fill "  viewBox = " 0 0 16 16 " >
                        < caminho  d = " M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z " />
                        < caminho  d = " M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-. 585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM9.98 5.356 11.372 10h.128a 0 1 0 1H11a.5,5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h- .5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1.926.08l.94 3.135 1.092-5.096a.5.5 0 0 1.968-.039Z " />
                      </ svg >
                        < span  class = " ms-3 fs-5 " >VetClin</ span >
                </a> _ _
                < button  class = " navbar-toggler "  data-bs-toggle = " recolher "  data-bs-target = " #itens " >
                    < svg  xmlns = " http://www.w3.org/2000/svg "  largura = " 32 "  altura = " 32 "  fill = " currentColor "  class = " bi bi-menu-button-wide "  viewBox = " 0 0 16 16 " >
                        < caminho  d = " M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a. 5,5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z " />
                        < caminho  d = " M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 2 0 0 1-2 2H2a2 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1.5-.5h9a .5,5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-. 5z " />
                    </ svg >
                </ botão >
                < div  class = " recolher navbar-collapse "  id = " itens " >
                    < ul  class = " navbar-nav ms-auto " >
                        < li  class = " menu suspenso do item de navegação ps-2 " >
                            < a  class = " nav-link dropdown-toggle "  data-bs-toggle = " dropdown "  href = " # " >
                                < svg  xmlns = " http://www.w3.org/2000/svg "  largura = " 24 "  altura = " 24 "  preenchimento = " #FFF "  classe = " bi bi-house-fill "  viewBox = " 0 0 16 16 " >
                                    < regra de preenchimento de caminho  = " evenodd " d = " m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2 .5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z " /> 
                                    < regra de preenchimento de caminho  = " evenodd " d = " M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-. 708L7.293 1.5z " /> 
                                </ svg >
                                < span  class = " ps-1 text-white " >Organização</ span >
                            </a> _ _
                            < ul  class = " menu suspenso " >
                                < li >< a  href = " {{ route ( ' clientes.index ' ) } } } "  class = " dropdown-item " >Clientes</ a ></ li >
                                < li >< a  href = " "  class = " dropdown-item " >Veterinários</ a ></ li >
                                < li >< a  href = " "  class = " dropdown-item " >Animais de estimação</ a ></ li >
                            </ ul >
                        </ li >
                        < li  class = " nav-item ps-2 me-3 " >
                            < a  class = " nav-link "  href = " # " >
                                < svg  xmlns = " http://www.w3.org/2000/svg "  largura = " 24 "  altura = " 24 "  preenchimento = " #FFF "  class = " bi-porta-fechada-preenchimento "  viewBox = " 0 0 16 16 " >
                                    < caminho  d = " M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z " />
                                </ svg >
                                < span  class = " ps-1 text-white " >Sair</ span >
                            </a> _ _
                        </ li >
                    </ ul >
                </ div >
            </ div >
        </ nav >
        < div  class = " contêiner py-4 " >
            < classe div  = " linha " >
                < classe div  = " coluna " >
                    < h3  class = " display-7 text-secondary d-none d-md-block " >< b > {{ $titulo } } </ b ></ h3 >  
                </ div >
                @if ( isset ( $rota ) )
                    < div  class = " col d-flex justifique-content-end " >
                        < a  href = " {{ route ( $ rota ) } } "   class = " btn btn-secondary " >
                            < svg  xmlns = " http://www.w3.org/2000/svg "  largura = " 24 "  altura = " 24 "  preenchimento = " #FFF "  class = " bi bi-plus-circle-fill "  viewBox = " 0 0 16 16 " >
                                < caminho  d = " M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a. 5,5 0 0 0 0-1h-3v-3z " />
                            </ svg >
                        </a> _ _
                    </ div >
                @fim se
            </ div >
            < h >
            @yield ( ' conteudo ' )
        </ div >
        < nav  class = " navbar fundo fixo navbar-dark bg-secondary " >
            < classe div  = " contêiner-fluido " >
                < span  class = " text-white fw-light " > & copy ; Gil Eduardo de Andrade</ span >
            </ div >
        </ nav >
    </ corpo >

    < div  class = " modal fade "  tabindex = " -1 "  id = " infoModal " >
        < div  class = " modal-dialog " >
            < classe div  = " conteúdo modal " >
                < div  class = " modal-header " >
                    < h5  class = " modal-title text-primary " >Mais Informações</ h5 >
                    < button  type = " button "  class = " btn-close "  data-bs-dismiss = " infoModal "  onclick = " closeInfoModal() "  aria-label = " Fechar " ></ button >
                </ div >
                < div  class = " modal-body text-secondary " >
                </ div >
                < classe div  = " rodapé modal " >
                    < tipo de botão  = " botão " class = " btn btn-primary btn-block align-content-center " onclick = " closeInfoModal() " >  
                        OK
                    </ botão >
                </ div >
            </ div >
        </ div >
    </ div >
    
    < div  class = " modal fade "  tabindex = " -1 "  id = " removeModal " >
        < div  class = " modal-dialog " >
          < classe div  = " conteúdo modal " >
            < div  class = " modal-header " >
              < h5  class = " modal-title text-danger " >Operação de Remoção</ h5 >
              < button  type = " button "  class = " btn-close "  data-bs-dismiss = " removeModal "  onclick = " closeRemoveModal() "  aria-label = " Fechar " ></ button >
            </ div >
            < tipo de entrada  = " oculto " id = " id_remove " > 
            < div  class = " modal-body text-secondary " >
            </ div >
            < classe div  = " rodapé modal " >
                < button  type = " button "  class = " btn btn-secondary btn-block align-content-center "  onclick = " closeRemoveModal() " >
                    < svg  xmlns = " http://www.w3.org/2000/svg "  largura = " 24 "  altura = " 24 "  fill = " currentColor "  class = " bi-seta-esquerda-preenchimento "  viewBox = " 0 0 16 16 " >
                        < caminho  d = " M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z " />
                    </ svg >
                    & nbsp ; Não
                </ botão >
              < tipo de botão  = " botão " class = " btn btn-danger " onclick = " remove() " >  
                    Sim & nbsp ;
                    < svg  xmlns = " http://www.w3.org/2000/svg "  largura = " 24 "  altura = " 24 "  fill = " currentColor "  class = " bi bi-check-circle-fill "  viewBox = " 0 0 16 16 " >
                        < caminho  d = " M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z " />
                    </ svg >
              </ botão >
            </ div >
          </ div >
        </ div >
    </ div >

    <!-- Bootstrap 5 / JS -->
    < script  src = " https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js "  integridade = " sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM "  crossorigin = " anônimo " ></ script >
    <!-- JQuery / JS -->
    < script  src = " {{ ativo ( ' js/jquery-3.6.0.min.js ' ) } } "  ></ script >

    < tipo de script  = " texto/javascript " >
        function  showInfoModal () {
            $ ( ' #infoModal ' ). moda (). find ( ' . modal-body ' ). html ( " " );
            for ( deixe a = 0 ; a <  argumentos . comprimento ; a ++ ) {
                $ ( ' #infoModal ' ). moda (). find ( ' . modal-body ' ). append ( " <b> "  +  argumentos [a] +  " </b><br> " );
            }
            $ ( " #infoModal " ). modal ( ' mostrar ' );
        }
        função  closeInfoModal () {
            $ ( " #infoModal " ). modal ( ' esconder ' );
        }
        function  showRemoveModal ( id , nome ) {
            $ ( ' #id_remove ' ). valor (id);
            $ ( ' #removeModal ' ). moda (). find ( ' . modal-body ' ). html ( " " );
            $ ( ' #removeModal ' ). moda (). find ( ' . modal-body ' ). append ( " Deseja remover o registro <b class='text-danger'>' " + nome + " '</b> ? " );
            $ ( " #removeModal " ). modal ( ' mostrar ' );
        }
        function  closeRemoveModal () {
            $ ( " #removeModal " ). modal ( ' esconder ' );
        }
        função  remover () {
            let id =  $ ( ' #id_remove ' ). valor ();
            let form =  " form_ "  +  $ ( ' #id_remove ' ). valor ();
            documento . getElementById (formulário). enviar ();
            $ ( " #removeModal " ). modal ( ' esconder ' )
        }
    </ script >

    @yield ( ' script ' )
</ html >