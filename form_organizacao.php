          
        <!-- Bootstrap core JavaScript
         ================================================== -->

            <script src="assets/js/jquery-1.11.1.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <!--<script src="assets/js/bootstrap.min.js"></script>-->
            <script src="assets/js/jquery.backstretch.min.js"></script>
            <script src="assets/js/retina-1.1.0.min.js"></script>
            <!--<script src="assets/js/validator.min.js"></script>-->
            <script src="assets/js/scripts.js"></script>
          
            <script type="text/javascript" src="assets/js/jquery.mask.min.js"></script>

        
        <script>
        $(document).ready(function(){
         $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
         $('.phone_with_ddd').mask('(00) 0000-0000');
         $('.phone_with_dddcel').mask('(00) 00000-0000');
         $('.cep').mask('00000-000');
         $('.money').mask('000.000.000.000.000,00', {reverse: true});
        });
        </script>
    


<div class="row form_inicial">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
        <form role="form" action="classes/prepare_cadastro.php" method="post" class="f1">

            <h3>Cadastro UNA Ecossistema<br>Organizaçāo</h3>
            <p>Preencha os campos obrigatórios *</p>
            <div class="f1-steps">
                <div class="f1-progress">
                    <div class="f1-progress-line" data-now-value="8" data-number-of-steps="5" style="width: 8%;"></div>
                </div>
                <div class="f1-step step-5 active">
                    <div class="f1-step-icon"><i class="fa fa-address-card-o"></i></div>
                    <p>Dados Pessoais</p>
                </div>
                <div class="f1-step step-5">
                    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    <p>Organizaçāo</p>
                </div>   
                <div class="f1-step step-5">
                    <div class="f1-step-icon"><i class="fa fa-map-marker"></i></div>
                    <p>Endereço</p>
                </div>
                <div class="f1-step step-5">
                    <div class="f1-step-icon"><i class="fa fa-desktop"></i></div>
                    <p>Redes Sociais</p>
                </div>
                <div class="f1-step step-5">
                    <div class="f1-step-icon"><i class="fa fa-hand-o-right"></i></div>
                    <p>Indicação</p>
                </div>              
            </div>



        <!-- Formulário: Tipo Organizaçāo -->


          <fieldset>
                <h4>Dados Pessoais Contato 1:</h4>

                <h5>Nome*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" name="nome1" placeholder="responsável pelo preenchimento do cadastro" class="f1-last-name form-control" id="inputNome1" required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>
                 <h5>Cargo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" name="cargo_1" placeholder="Cargo" class="f1-last-name form-control" id="inputCargo1" >
                    <div class="help-block with-errors"></div>
                </div>

                <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" name="email_1" placeholder="E-mail" value="<?php echo $_SESSION['usuario_email']; ?>" class="f1-last-name form-control" id="f1-last-name">
                    <div class="help-block with-errors"></div>
                </div>

                 <h5>Telefone*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="telefone_1" placeholder="Telefone (xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel1" required data-error = "Por favor, preencha corretamente o campo (xx) xxxx-xxxx.">
 
                    <div class="help-block with-errors"></div>
                </div>

                 <h5>Celular*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="tel" name="celular_1" placeholder="Celular (xx) xxxxx-xxxx" class="f1-last-name form-control phone_with_dddcel" id="inputCel1"required data-error = "Por favor, preencha corretamente o campo (xx) xxxxx-xxxx.">
 
                    <div class="help-block with-errors"></div>
                </div>

                 <h4>Dados Pessoais Contato 2:</h4>
                 <h5>Nome*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" name="nome2" placeholder="responsável pela organização ou suplente" class="f1-last-name form-control" id="inputNome2" required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>
                  <h5>Cargo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" name="cargo_2" placeholder="Cargo" class="f1-last-name form-control" id="inputCargo2" required data-error = "Campo está em branco, favor preencher.">
                </div>

                <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" name="email_2" placeholder="E-mail" class="f1-last-name form-control" id="email2" required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>                    
                </div>

                 <h5>Telefone*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="telefone_2" placeholder="Telefone (xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel2"required data-error = "Por favor, preencha corretamente o campo (xx) xxxx-xxxx.">
                    <div class="help-block with-errors"></div>
                </div>

                <h5>Celular*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="tel" name="celular_2" placeholder="Celular (xx) xxxxx-xxxx" class="f1-last-name form-control phone_with_dddcel" id="inputCel2"required data-error = "Por favor, preencha corretamente o campo (xx) xxxxx-xxxx.">
                    <div class="help-block with-errors"></div>
                </div>

                <div class="f1-buttons">
                <button type="button" class="btn btn-next">Próximo</button>
                </div>
            </fieldset><!--Dados Pessoais-->


          
             <!--Etapa 2 Formulário: Organizaçāo -->

        <fieldset>
                <h5>A sua organização está juridicamente constituída?*</h5>
                <h6><em>se sim, digite o CNPJ no campo abaixo</em></h5>
             
                  
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" name="cnpj"id="organizacao-cnpj"required>
                        <option value=""></option>
                        <option value="sim">sim</option>
                        <option value="nao">nao</option>
                    </select>    

                <input type="text" id="inputcnpj" maxlength="18" name="inputcnpj" class="f1-last-name form-control cnpj" placeholder="xx.xxx.xxxx/xxxx-xx, a inserção deste número é opcional" style='display: none'/>
                    <script>

                        var dropdownCnpj = document.getElementById('organizacao-cnpj');
                            
                            function onDropdownChangedCNPJ()
                            {
                                console.log(dropdownCnpj.selectedIndex);
                                //pegando valor do select na variável dropdownCnpj
                                var meuInput = document.getElementById('inputcnpj');
                                if(dropdownCnpj.options[dropdownCnpj.selectedIndex].value === "sim") {
                                    //faz algo quando o valor selecionado for sim
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for sim, tem cnpj
                                    
                                    meuInput.style.display = 'block';
                                }else{
                                    meuInput.style.display = 'none';
                                }
                            }
                            
                            if (dropdownCnpj.addEventListener)
                            {
                                dropdownCnpj.addEventListener('change', onDropdownChangedCNPJ, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdownCnpj.attachEvent('onchange', onDropdownChangedCNPJ, false);
                            }

                    </script>
                </div>
                    

                <h5>A sua Organizaçāo está localizada na…*</h5>
                <div class="form-group">
                    <label class="radio-inline">
                       <input type="radio" name="zona" value="rural" class="form-control-radio" >Zona Rural
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="zona" value="urbana" class="form-control-radio">Zona Urbana
                    </label>
                </div>

                <h5>Nome da Organizaçāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Nome</label>
                    <input type="text" name="nome" maxlength="50" class="f1-last-name form-control" required>
                </div>


                <h5>Sigla da Organizaçāo:</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Sigla</label>
                    <input type="text" name="sigla" class="f1-last-name form-control">
                </div>

                <h5>Telefone da Organizaçāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Telefone</label>
                    <input type="tel" id="telefone" name="organizacao-telefone" placeholder="(xx) xxxx-xxxx"class="f1-last-name form-control phone_with_ddd"required>
                </div>

                <h5>E-mail da Organizaçāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Email</label>
                    <input type="email" name="email" class="f1-last-name form-control"class="f1-last-name form-control" required>
                </div>

                 <h5>Como sua organizaçāo se identifica*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus" ></label>
                    <select class="f1-last-name form-control" id="organizacao-tipo" name="tipo" required>
                        <option value=""></option>
                        <option value="academica">Academia</option>
                        <option value="coletivo">Coletivo</option>
                        <option value="cooperativa">Cooperativa</option>
                        <option value="empresa_privada">Empresa Privada</option>
                        <option value="investimento_social_privado">Investimento Social Privado</option>
                        <option value="fundos">Fundos</option>
                        <option value="governo">Governo</option>
                        <option value="grupos_produtivos">Grupos Produtivos</option>
                        <option value="movimento">Movimento</option>
                        <option value="negocio_social">Negócio Social</option>
                        <option value="ong_sociedade_civil">Organização da Sociedade Civil (ex: associação, ong, oscip, etc)
                        <option value="redes">Redes</option> 
                        <option value="outros">Outros</option>
                    </select> 
                    <!-- <input type="text" id="inputoutros" name="inputoutros" class="f1-last-name form-control" placeholder="descreva outro tipo"style='display: none' /> -->
                    <script>

                        var dropdownIdentifica = document.getElementById('organizacao-tipo');
                            
                            function onDropdownChangedIDENTIFICA()
                            {
                                console.log(dropdownIdentifica.selectedIndex);
                                //pegando valor do select na variável dropdownCnpj
                                var meuInput2 = document.getElementById('inputoutros');
                                if(dropdownIdentifica.options[dropdownIdentifica.selectedIndex].value === "outros") {
                                    //faz algo quando o valor selecionado for sim
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for sim, tem cnpj
                                    
                                    meuInput2.style.display = 'block';
                                }else{
                                    meuInput2.style.display = 'none';
                                }
                            }
                            
                            if (dropdownIdentifica.addEventListener)
                            {
                                dropdownIdentifica.addEventListener('change', onDropdownChangedIDENTIFICA, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdownNatureza.attachEvent('onchange', onDropdownChangedIDENTIFICA, false);
                            }

                    </script>
                </div>


                 <h5> Quando sua Organizaçāo iniciou as atividades?*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="year_organizacao" name="anoatividade" required>
                        <script>
                          var myDate = new Date();
                          var year = myDate.getFullYear();
                          for(var i = 1900; i < year+1; i++){
                              $('#year_organizacao')
                                .append($('<option>', { value : i })
                                .text(i));
                          }
                          </script>
                    </select>


                <h5>Quantos colaboradores,funcionários ou voluntários estão envolvidos neste trabalho?*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="pessoas_envolvidas" name="pessoas_envolvidas" required>
                        <option value=""></option>
                        <option value="1-5">1-5</option>
                        <option value="6-10">6-10</option>
                        <option value="11-20">11-20</option>
                        <option value="21-50">21-50</option>
                        <option value="51-100">51-100</option>
                        <option value="101-500">101-500</option>
                        <option value="251-1000">251-1000</option>
                        <option value="501-1000">501-1000</option>
                        <option value="1001+">1001+</option>     
                    </select>
                </div>


                <h5> Qual é o número de pessoas que a sua organização beneficia diretamente?*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="pessoas_beneficiadas" name="pessoas_beneficiadas">
                        <option value=""></option>
                        <option value="até 50">1-5</option>
                        <option value="51-250">51-250</option>
                        <option value="251-500">251-500</option>
                        <option value="1001-2500">1001-2500</option>
                        <option value="2501-5000">2501-5000</option>
                        <option value="5001-10000">5001-10000</option>
                        <option value="10001-50000">10001-50000</option>
                        <option value="50001-100000">50001-100000</option>
                        <option value="100000-500000">100000-500000</option>
                        <option value="500000-1000000">500000-1000000</option> 
                        <option value="1000000+">1000000+</option>           
                    </select>
                  </div>

                <h5>Qual foi seu orçamento bruto em:?*</h5>
                 <h5>2014</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2014</label>
                    <input type="text" name="orcamento_2014" placeholder="R$ xxxxxx" class="f1-last-name form-control money" id="organizacao_orcamento2014" required>

                </div>
                <h5>2015</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2015</label>
                    <input type="text" name="orcamento_2015"  placeholder="R$ xxxxxx" class="f1-last-name form-control money" id="organizacao_orcamento2015" required>
                </div>
                <h5>2016</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2016</label>
                    <input type="text" name="orcamento_2016"  placeholder="R$ xxxxxx" class="f1-last-name form-control money" id="organizacao_orcamento2016"required>
                </div>

                <!--novo item -->
                <h5>Não tenho orçamento</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name"></label>
                    <input type="text" name="justificativa_orcamento" placeholder=" caso não tem orçamento,descreva o motivo..."class="f1-last-name form-control">
                </div>

                <h5>Sua Organizaçāo recebe recursos financeiros?</h5>
                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="recursos" value="sim" class="form-control-radio"> Sim
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="recursos" value="nao" class="form-control-radio"> Nāo
                    </label>
                </div>


               <h5>Quais são as principais fontes de recursos para a realização dos projetos?</h5>
                <div class="form-group">
                    <input type="checkbox" name="recursos_origem[]" value="doação pessoa física">doação pessoa física</br>
                    <input type="checkbox" name="recursos_origem[]" value="edital público governo federal">edital público governo federal</br>
                    <input type="checkbox" name="recursos_origem[]" value="edital público governo estadual">edital público governo estadual</br>
                    <input type="checkbox" name="recursos_origem[]" value="edital público municipal">edital público municipal</br>
                    <input type="checkbox" name="recursos_origem[]" value="empresas">empresas</br>
                    <input type="checkbox" name="recursos_origem[]" value="endowment/fundo patrimonial">endowment/fundo patrimonial</br>
                    <input type="checkbox" name="recursos_origem[]" value="fomento à pesquisa">fomento à pesquisa</br>
                    <input type="checkbox" name="recursos_origem[]" value="institutos ou fundações empresariais">institutos ou fundações empresariais</br>
                    <input type="checkbox" name="recursos_origem[]" value="investimento direto/patrocínio">investimento direto/patrocínio</br>
                    <input type="checkbox" name="recursos_origem[]" value="investimento de impacto">investimento de impacto</br>
                    <input type="checkbox" name="recursos_origem[]" value="leis de incentivo">leis de incentivo><br>
                    <input type="checkbox" name="recursos_origem[]" value="organizações do sistema ONU">organizações do sistema ONU<br>
                    <input type="checkbox" name="recursos_origem[]" value="organizações não governamentais brasileiras ou internacionais">organizações não governamentais brasileiras ou internacionais<br>
                    <input type="checkbox" name="recursos_origem[]" value="subvenções públicas ">subvenções públicas<br>
                    <input type="checkbox" name="recursos_origem[]" value="venda de produtos/prestação de serviços">venda de produtos/prestação de serviços<br>
                    <input type="checkbox" name="recursos_origem[]" value="outros">outros<br>
                    <!-- <input type="text"     name="outrosprojetos" placeholder=" outros..." style="display:block;" class="f1-last-name form-control"> -->
               </div> 



            <!--Tabela Temas-->

            <h5>Áreas de atuação da organização: escolha até 5 Temas e até 5 Subtemas abaixo*:</h5>
            <div class="form-group" style="border: 1px solid #ddd">
            <div class="table-responsive">
            <table id="form1" name="table_temas"class="table table-hover col-sm-12" >

             <thead>
                <tr>
                    <th></th>
                    <th>Temas</th>
                    <th>Descriçāo</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" name="temas[ ]" value="arte_cultura" class="no-margin" onclick="verificar()"></td>
                    <td>Arte e Cultura.</td>
                    <td>Promoção do acesso de mulheres à cultura e/ou incentivo à produção das várias expressões artísticas e valorização de práticas culturais e tradicionais.</td>
                     
                </tr>
                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="ciencia_tecnologia"class="no-margin" onclick="verificar()"></td>
                    <td>Ciência e Tecnologia.</td>
                    <td>Promoção do acesso a linguagens, equipamentos e/ou à produção de ciência e tecnologia por mulheres.</td>
                   
                </tr>
                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="democracia_participação_politica"class="no-margin" onclick="verificar()"></td>
                    <td> Democracia e Participação Política.</td>
                    <td>Ações de incentivo à participação de mulheres na vida política e democrática institucional (partidos, conselhos, órgãos e instâncias dos poderes executivo, legislativo e judiciário).</td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="educacao_formacao"class="no-margin" onclick="verificar()"></td>
                    <td>Educação e Formação.</td>
                    <td>Oferta de educação formal (escolar ou acadêmica), incentivo à escolaridade; formação de atores sociais, ações de educação popular e informal.</td>
                  
                </tr>

                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="empreendedorismo_feminino_autonomia_economica"class="no-margin" onclick="verificar()"></td>
                    <td>Empreendedorismo feminino e autonomia econômica.</td>
                    <td>Ações de incentivo ao empreendedorismo feminino e à autonomia econômica, por meio de capacitação e/ou financiamento, tais como capacitações, cooperativismo, microcrédito, etc.</td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="enfrentamento_violencia"class="no-margin" onclick="verificar()"></td>
                    <td>Enfrentamento à Violência.</td>
                    <td>Trabalho de enfrentamento às mais variadas formas de violência, destinado a mulheres e homens.</td>
                  

                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="equidade_Condições_trabalho"class="no-margin" onclick="verificar()"></td>
                    <td>Equidade e Condições de Trabalho.</td>
                    <td>Oportunidades iguais para mulheres e homens, divisão justa entre ambos os sexos, mesmas 
    possibilidades de desenvolvimento profissional e equiparação salarial; participação em cargos de liderança e conselho.</td>    
                </tr>

                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="esporte"class="no-margin" onclick="verificar()"></td>
                    <td>Esportes.</td>
                    <td>Oferta, promoção e incentivo à realização de práticas esportivas por meninas e mulheres, sobretudo em modalidades tradicionalmente dominadas por homens.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="indigenas"class="no-margin" onclick="verificar()"></td>
                    <td>Indígenas.</td>
                    <td>Ações destinadas à valorização das mulheres indígenas; ao enfrentamento de seus problemas específicos, a geração de renda e ao emponderamento político.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="LGBTT"class="no-margin" onclick="verificar()"></td>
                    <td>LGBTT (Lésbicas, Gays, Bissexuais, Travestis, Transexuais e Transgêneros).</td>
                    <td>Projetos que atuam pela valorização e afirmação de pessoas LGBTT e combatem a violência e a discriminação contra esses públicos.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="masculinidade"class="no-margin" onclick="verificar()"></td>
                    <td>Masculinidades.</td>
                    <td>Ações voltadas para questões relativas à revisão do conceito hegemônico de masculinidade, a partir da perspectiva das relações de gênero.</td>
                </tr>
                <tr>
                     <td><input type="checkbox" name="temas[ ]"value="meio ambiente,seguranca,agricultura"class="no-margin" onclick="verificar()"></td>
                    <td>Meio Ambiente,Segurança Alimentar e Agricultura.</td>
                    <td>Trabalhos que relacionam questões de gênero, feminismo e meio ambiente. 
    Direito e acesso a alimentos de qualidade, em quantidade suficiente, saudáveis e ambientalmente sustentáveis.</td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="midia_comunicacao"class="no-margin" onclick="verificar()"></td>
                    <td>Mídia e Comunicação.</td>
                    <td>Promoção do acesso de mulheres aos meios de comunicação pelo domínio de técnicas, equipamentos e linguagens; monitoramento da presença da mulher nas mídias e da cobertura de temas sobre as questões das mulheres.</td>
               </tr>

                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="moradia"class="no-margin" onclick="verificar()"></td>
                    <td>Moradia.</td>
                    <td>Ações que visam contribuir para o direito das mulheres à moradia e desenvolvimento de habilidades para a construção ou reformas de casas.</td>
               </tr>

               <tr>
                    <td><input type="checkbox" name="temas[ ]"value="negritude"class="no-margin" onclick="verificar()"></td>
                    <td>Negritude.</td>
                    <td>Ações de valorização da estética e da identidade das mulheres negras e de combate ao racismo.</td>
               </tr>

               <tr> <td><input type="checkbox" name="temas[ ]"value="paz_seguranca_publica"class="no-margin" onclick="verificar()"></td>
                    <td>Paz e Segurança Pública.</td>
                    <td>Projetos que tratam da interface entre gênero e sistema de segurança pública, sobretudo questões da violência armada.</td>
               </tr>

               <tr> <td><input type="checkbox" name="temas[ ]"value="saude_bemestar"class="no-margin" onclick="verificar()"></td>
                    <td>Saúde e Bem-estar.</td>
                    <td>Iniciativas que tratam de questões de autoestima, qualidade de vida, saúde e bem-estar das mulheres.</td>
               </tr>

                  </tbody>
                </table>
             </div>
        </div> 

             <script>
            var CheckMaximo = 5;

            function verificar() {
            var Marcados = 1;
            var objCheck = $("input[name='temas[ ]']");
            //Percorrendo os checks para ver quantos foram selecionados:
            for (var iLoop=0; iLoop<objCheck.length; iLoop++) {
            //Se o número máximo de checkboxes ainda não tiver sido atingido, continua a verificação:
                if (objCheck[iLoop].checked) {
                    Marcados++;
                }
                
                if (Marcados <= CheckMaximo) {
                //Habilitando todos os checkboxes, pois o máximo ainda não foi alcançado.
                for (var i=0; i<objCheck.length; i++) {
                    objCheck[i].disabled = false;
                }       
                //Caso contrário, desabilitar o checkbox;
                //Nesse caso, é necessário percorrer todas as opções novamente, desabilitando as não checadas;
                
                } else {
                    for (var i=0; i<objCheck.length; i++) {
                        if(objCheck[i].checked == false) {
                            objCheck[i].disabled = true;
                        }       
                    }
                }
              }
           }
</script>

<!--subtemas-->


<h5> Clique e escolha até 5 Subtemas abaixo*</h5>
 <h6><em>Mantenha pressionado o botão Ctrl (windows) / Comando (Mac) para selecionar os subtemas.</em></h6>
<div class="form-group">
<label for="subtemas" for="f1-google-plus">Subtemas</label>
        <select class="f1-last-name form-control"id="subtemas" class="selectpicker" name="subtemas[ ]" data-style="default" multiple>
            <option value="Aborto">Aborto</option>
            <option value="Advocacy">Advocacy</option>
            <option value="Água e saneamento básico">Água e saneamento básico</option>
            <option value="Artes plásticas">Artes plásticas</option>
            <option value="Cadeia produtiva responsável">Cadeia produtiva responsável</option>
            <option value="Cinema">Cinema</option>
            <option value="Conselhos e outras instâncias">Conselhos e outras instâncias</option>
            <option value="Consumo">Consumo</option>
            <option value="Cooperativismo">Cooperativismo</option>
            <option value="Dança">Dança</option>
            <option value="Desenvolvimento e Programação">Desenvolvimento e Programação</option>
            <option value="Ecofeminismo">Ecofeminismo</option>
            <option value="Economia criativa">Economia criativa</option>
            <option value="Educomunicação">Educomunicação</option>
            <option value="Envelhecimento">Envelhecimento</option>
            <option value="Estudo e pesquisa">Estudo e pesquisa</option>
            <option value="Finanças sociais">Finanças sociais</option>
            <option value="Fotografia">Fotografia</option>
            <option value="Incentivo à leitura">Incentivo à leitura</option>
            <option value="Inclusão Digital">Inclusão Digital</option>
            <option value="Inserção de mulheres na política">Inserção de mulheres na política</option>
            <option value="Liderança">Liderança</option>
            <option value="Marketing">Marketing</option>
            <option value="Microcrédito">Microcrédito</option>
            <option value="Mobilização">Mobilização</option>
            <option value="Mudanças climáticas">Mudanças climáticas</option>
            <option value="Mulheres no mundo da ciências">Mulheres no mundo da ciências</option>
            <option value="Obesidade infantil">Obesidade infantil</option>
            <option value="Parto Humano">Parto Humano</option>
            <option value="Paternidade">Paternidade</option>
            <option value="Pessoa com deficiência">Pessoa com deficiência</option>
            <option value="Povos tradicionais">Povos tradicionais</option>
            <option value="Preconceito e discriminação">Preconceito e discriminação</option>
            <option value="Promoção à cargos de liderança">Promoção à cargos de liderança</option>
            <option value="Questão presidiária">Questão presidiária</option>
            <option value="Reciclagem e logísitca diversa">Reciclagem e logística reversa</option>
            <option value="Redes Sociais">Redes Sociais</option>
            <option value="Refugiados">Refugiados</option>
            <option value="Reparação-reconstrução">Reparação-reconstrução</option>
            <option value="Saúde sexual e reprodutiva">Saúde sexual e reprodutiva</option>
            <option value="Sustentabilidade">Sustentabilidade</option>
            <option value="Teatro">Teatro</option>
            <option value="Tecnologia social e/ou alternativas">Tecnologia social e/ou alternativas</option>
            <option value="Tecnologia">Tecnologia</option>
            <option value="Trabalho digno">Trabalho digno</option>
            <option value="Tráfico de pessoas">Tráfico de pessoas</option>
            <option value="Outros">Outros</option>

        </select>

     </div>

<script>
     $(document).ready(function() {

          var last_valid_selection = null;

          $('#subtemas').change(function(event) {

            if ($(this).val().length > 5) {

              $(this).val(last_valid_selection);
            } else {
              last_valid_selection = $(this).val();
            }
          });
        });
    </script> 

                <h5>O que faz sua organização?*(até 500 caracteres)</h5>                                  
                <div class="form-group">
                    <label class="sr-only" for="f1-about-yourself"></label>
                    <textarea name="sobre" maxlength="500" placeholder="campo com capacidade para 500 caracteres...." 
                    class="f1-about-yourself form-control" id="sobre" required></textarea>
                </div>

                 <h5>Qual é a sua função no ecossistema?*</h5>

                 <div class="form-group">
                 <input type="checkbox" name="funcao[ ]" value="Advocacy">Advocacy<br>
                 <input type="checkbox" name="funcao[ ]" value="Atuação direta com mulheres, homens, LGBTT, etc" class="form-control-radio">Atuação direta com mulheres, homens, LGBTT, etc<br>

                 <input type="numeric"  name="numero_beneficiarios" placeholder="número de beneficiários diretos" style="margin-left: 20px" class="f1-last-name form-control"><br>
                 <input type="checkbox" name="funcao[ ]" value="Financiadores"class="form-control-radio">Financiadores<br>
                 <input type="checkbox" name="funcao[ ]" value="Fortalecedor institucional"class="form-control-radio">Fortalecedor institucional<br>
                 <input type="checkbox" name="funcao[ ]" value="público" style="margin-left: 20px"class="form-control-radio">público
                 <input type="checkbox" name="funcao[ ]" value="privado" style="margin-left: 20px"class="form-control-radio">privado
                 <input type="checkbox" name="funcao[ ]" value="social"  style="margin-left: 20px"class="form-control-radio">social⁠⁠⁠⁠   
                 </div>   


                 <h5>Qual o público direto atendido pela sua Organizaçāo?*</h5>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="publico_alvo" name="publico_alvo" required>
                        <option value=""></option>
                        <option value="Empresas">Empresas</option>
                        <option value="Organizações Sociais">Organizações Sociais</option>
                        <option value="Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher">Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher</option><br>
                        <option value="Movimentos, coletivos, redes, fóruns">Movimentos, coletivos, redes, fóruns</option>
                        <option value="Adolescentes e jovens">Adolescentes e jovens</option>
                        <option value="Homens">Homens</option>
                        <option value="Mulheres">Mulheres</option>
                           
                    </select>

                 <h5>Nomeie e descreva as iniciativas da sua organização que trabalham com empoderamento das mulheres*?</h5>
                 <h5>Iniciativa 1</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona1"  class="f1-last-name form-control">
                    <textarea name="sobre_iniciativas1" maxlength="500" placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong1"   data-error = "Campo está em branco, favor preencher."></textarea>
                </div>
                <h5>Iniciativa 2</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona2"  class="f1-last-name form-control">
                    <textarea name="sobre_iniciativas2" maxlength="500" placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong2"  data-error = "Campo está em branco, favor preencher."></textarea>
                </div>
                <h5>Iniciativa 3</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona3" class="f1-last-name form-control">
                    <textarea name="sobre_iniciativas3" maxlength="500" placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong3"  data-error = "Campo está em branco, favor preencher."></textarea>
                </div>

                <h5>Clique nos Estados que sua iniciativa tem atuação direta*</h5>
                    <h6><em>Mantenha pressionado o botão Ctrl (windows) / Comando (Mac) para selecionar várias opções.</em></h6>
                    <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" name="organizacao_estado[ ]" multiple  required>
                        <div class="help-block with-errors"></div>
                        <option value="Acre">Acre</option>
                        <option value="Alagoas">Alagoas</option>
                        <option value="Amapá">Amapá</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Bahia">Bahia</option>
                        <option value="Ceará">Ceará</option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Espírito Santo">Espírito Santo</option>
                        <option value="Goiás">Goiás</option>
                        <option value="Maranhão">Maranhão</option>
                        <option value="Mato Grosso">Mato Grosso</option>
                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                        <option value="Minas Gerais">Minas Gerais</option>
                        <option value="Pará">Pará</option>
                        <option value="Paraíba">Paraíba</option>
                        <option value="Paraná">Paraná</option>
                        <option value="Pernambuco">Pernambuco</option>
                        <option value="Piauí">Piauí</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                        <option value="Rondônia">Rondônia</option>
                        <option value="Roraima">Roraima</option>
                        <option value="Santa Catarina">Santa Catarina</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Sergipe">Sergipe</option>
                        <option value="Tocantins">Tocantins</option>
                    </select>


                    <h5>Sua Organizaçāo influenciou políticas públicas?*</h5>

                <div class="form-group" required>
                   <label class="radio-inline">
                        <input type="radio" name="politicas_publicas" value="nao" class="form-control-radio"> Nāo
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="politicas_publicas" value="sim" class="form-control-radio"> Sim
                    </label>
                </div>
                
              
                <div class="form-group">
                   <label class="checkbox-inline">
                        <input type="checkbox" name="politicas_publicas_lista[]" value="municipal" class="form-control-radio">municipal
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" name="politicas_publicas_lista[]" value="estadual" class="form-control-radio">estadual
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="politicas_publicas_lista[]" value="nacional" class="form-control-radio">nacional
                    </label>
                    <textarea name="organizaçāo_politica_publica" placeholder="Descreva como se deu essa influência em políticas públicas(em 500 caracteres)"

                    class="f1-about-yourself form-control" id="organizaçāo_politica_publica"></textarea>
                </div>


                <!-- Organizacao 27-->


<h5>Você realiza monitoramento e avaliação sistematizada das atividades da Organizaçāo?*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" name="monitoramento_atv" id="avaliacao" required>
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim</option>
                    </select>
                    <textarea type="text" id="inputAvaliacaoOng" name= "inputAvaliacaoOng" class="f1-last-name form-control" maxlength="500" placeholder="quais foram os resultados comprovados alcançados até hoje? 500 caracteres..
                        "style='display: none'/></textarea>
                    <script>

                        var dropdownAvaliacao = document.getElementById('avaliacao');
                            
                            function onDropdownChangedAvaliacao()
                            {
                                console.log(dropdownAvaliacao.selectedIndex);
                                var meuInput1 = document.getElementById('inputAvaliacaoOng');
                                //pegando valor do select na variável dropdownAvaliacao

                                
                                if(dropdownAvaliacao.options[dropdownAvaliacao.selectedIndex].value == "1") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    
                                    meuInput1.style.display = 'block';
                                }else{
                                    meuInput1.style.display = 'none';
                                }
                            }
                            
                            if (dropdownAvaliacao.addEventListener)
                            {
                                dropdownAvaliacao.addEventListener('change', onDropdownChangedAvaliacao, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdownAvaliacao.attachEvent('onchange', onDropdownChangedAvaliacao, false);
                            }

                    </script>
                </div><!--27/Organizacao-->

<!-- 28 Organizacao-->

<h5>Sua Organizaçāo tem uma estratégia de comunicação própria?*</h5>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="organizacao-comunicacao" name="comunicacao"required>
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim, qual?</option>
                    </select>
                    <textarea type="text" id="inputComunicacaoOng" name="inputComunicacaoOng" class="f1-last-name form-control" maxlength="500" placeholder="Descreva estratégia de comunicação..
"style='display: none'/></textarea>
                    <script>

                        var dropdownComun = document.getElementById('organizacao-comunicacao');
                            
                            function onDropdownChangedComun()
                            {
                                console.log(dropdownComun.selectedIndex);
                                //pegando valor do select na variável dropdown
                                var meuInput1 = document.getElementById('inputComunicacaoOng');
                                if(dropdownComun.options[dropdownComun.selectedIndex].value == "1") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    
                                    meuInput1.style.display = 'block';
                                }else{
                                    meuInput1.style.display = 'none';
                                }
                            }
                            
                            if (dropdownComun.addEventListener)
                            {
                                dropdownComun.addEventListener('change', onDropdownChangedComun, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdownComun.attachEvent('onchange', onDropdownChangedComun, false);
                            }

                    </script>
                </div><!--28/Organizacao-->



      <!-- 29 Organizacao-->

<h5>A sua Organizaçāo recebeu premiações, certificações etc.?*</h5>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="premiacao" name="premiacao"required>
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim, quais?</option> 
                        
                    </select>
                    <textarea type="text" id="inputPremiacaoOng" name="inputPremiacaoOng" class="f1-last-name form-control" maxlength="500"placeholder="Premiações/Certificações..
"style='display: none'/></textarea>
                    <script>

                    var dropdown = document.getElementById('premiacao');
                            
                            function onDropdownChangedPremiacao()
                            {
                                console.log(dropdown.selectedIndex);
                                //pegando valor do select na variável dropdown
                                var meuInput = document.getElementById('inputPremiacaoOng');
                                if(dropdown.options[dropdown.selectedIndex].value == "1") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    
                                    meuInput.style.display = 'block';
                                }else{
                                    meuInput.style.display = 'none';
                                }
                            }
                            
                            if (dropdown.addEventListener)
                            {
                                dropdown.addEventListener('change', onDropdownChangedPremiacao, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdown.attachEvent('onchange', onDropdownChangedPremiacao, false);
                            }

                    </script>
                </div><!--29/Organizacao-->


                <h5>Quais são as organizações com atuação na temática da mulher com que sua organizaçāo se relaciona diretamente?</h5>
                 <h5>Organização 1</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                <input type="text" name="relaciona1"  class="f1-last-name form-control">
                </div>
                <h5>Organização 2</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="relaciona2"  class="f1-last-name form-control">
                </div>
                <h5>Organização 3</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="relaciona3" class="f1-last-name form-control">
                </div> 

                
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next">Próximo</button>
                </div>

</fieldset>

           
            <!--Etapa 3 Formulário: Endereço/Organizaçāo -->


            <fieldset>
                <h5>Regiāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Região</label>
                    <select class="f1-last-name form-control" name="regiao" id="regiao"required>
                        <option value="escolha uma regiāo"></option>
                        <option value="norte">Norte</option>
                        <option value="nordeste">Nordeste</option>
                        <option value="centro-oeste">Centro-Oeste</option>
                        <option value="sul">Sul</option>
                        <option value="sudeste">Sudeste</option>
                    </select> 
                </div>
                <h5>Estado*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Estado</label>
                    <select class="f1-last-name form-control" name="estado" id="estados" required>
                        <option value="escolha um estado"></option>
                        
                    </select> 
                </div>
                <h5>Cidade*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cidade</label>
                    <select class="f1-last-name form-control" name="cidade" id="cidades"required> 
                        <option value="escolha uma cidade"></option>
                    </select> 
                </div>

                <h5>Bairro*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Bairro</label>
                <input type="text" name="bairro" placeholder="Bairro..." class="f1-last-name form-control"required>
                </div>
                <h5>Rua*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-facebook">Rua</label>
                    <input type="text" name="rua" placeholder="Rua/Av...*" class="f1-last-name form-control"required>
                </div>
                <h5>Número*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-twitter">Número</label>
                    <input type="text" name="numero" placeholder="Número...*" class="f1-last-name form-control"required>
                </div>
                <h5>Complemento</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Complemento</label>
                    <input type="text" name="complemento" placeholder="Complemento..." class="f1-last-name form-control"required>
                </div>
                 <h5>Cep</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cep</label>
                    <input type="text" name="cep" id="inputCep" placeholder="Cep xx-xxx-xxx*" class="f1-last-name form-control cep"required>
                </div> 

               <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next">Próximo</button>
                </div>

            </fieldset>
 
          <!--Etapa 4 Formulário: Mídia Social-->

            <fieldset>
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-mouse-pointer"></i></span>
                    <input class="form-control" type="text" name="site" placeholder="Site">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-facebook-official"></i></span>
                        <input class="form-control" type="text" name="facebook" placeholder="Facebook">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-twitter-square"></i></span>
                        <input class="form-control" type="text" name="twitter" placeholder="Twitter">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                        <input class="form-control" type="text" name="instagram" placeholder="Instagram">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-linkedin-square"></i></span>
                        <input class="form-control" type="text" name="linkedin" placeholder="Linkedin">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-ellipsis-h"></i></span>
                        <input class="form-control" type="text" name="outros" placeholder="Outros">
                    </div>
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next">Próximo</button>
                </div>
            </fieldset>

            <fieldset>
                <h4>Indique até três iniciativas que na sua opinião devem participar do processo de mapeamento:</h4>
                <h5>Organizaçāo 1</h5>
                 <h5>Nome</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" name="indica_nome_1" placeholder="Nome" class="f1-last-name form-control" id="f1-last-name">
                </div>
                <h5>E-mail</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                <input type="email" name="indica_email_1" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name">     
                </div>
                <h5>Telefone</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                <input type="tel" name="indica_telefone_1" placeholder="Telefone (xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel3">
                </div>
                <h5>Nome</h5>
                <h5>Organizaçāo 2</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                <input type="text" name="indica_nome_2" placeholder="Nome" class="f1-last-name form-control" id="f1-last-name">
                </div>
                <h5>E-mail</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                <input type="email" name="indica_email_2" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name">                    
                </div>
                <h5>Telefone</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="indica_telefone_2" placeholder="Telefone (xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel4">
                </div>
                <h5>Nome</h5>
                <h5>Organizaçāo 3</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                <input type="text" name="indica_nome_3" placeholder="Nome" class="f1-last-name form-control" id="f1-last-name">
                </div>
                <h5>E-mail</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" name="indica_email_3" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name">
                </div>
                <h5>Telefone</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="indica_telefone_3" placeholder="Telefone (xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel5">
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="submit" class="btn btn-submit">Enviar</button>
                </div>
            </fieldset>
        </form>
    </div>

</div>
    
