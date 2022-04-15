







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Àrea de Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4117b8be6f.js" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" >

    
			function fMasc(objeto,mascara) {
				obj=objeto
				masc=mascara
				setTimeout("fMascEx()",1)
			}
			function fMascEx() {
				obj.value=masc(obj.value)
			}
			function mTel(tel) {
				tel=tel.replace(/\D/g,"")
				tel=tel.replace(/^(\d)/,"($1")
				tel=tel.replace(/(.{3})(\d)/,"$1)$2")
				if(tel.length == 9) {
					tel=tel.replace(/(.{1})$/,"-$1")
				} else if (tel.length == 10) {
					tel=tel.replace(/(.{2})$/,"-$1")
				} else if (tel.length == 11) {
					tel=tel.replace(/(.{3})$/,"-$1")
				} else if (tel.length == 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				} else if (tel.length > 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				}
				return tel;
			}
			function mCNPJ(cnpj){
				cnpj=cnpj.replace(/\D/g,"")
				cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
				cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
				cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
				cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
				return cnpj
			}
			function mCPF(cpf){
				cpf=cpf.replace(/\D/g,"")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
				return cpf
			}
			function mCEP(cep){
				cep=cep.replace(/\D/g,"")
				cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
				cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
				return cep
			}
			function mNum(num){
				num=num.replace(/\D/g,"")
				return num
			}
	
    


    </script>


    <style>


    html *
    {
      
      font-family: 'Oxygen', sans-serif;
    }

    .principal{

    width:100%;
    height:auto;



    }

    .title{

        width:100%;
        height:5vh;
        text-align:center;
        

    }

    body{margin:0;padding:0;}

    

    .marg{

      width:80%;
      margin:0 auto;

    }

    @media screen and (max-width: 900px) {
            .marg {
                width:95%;
            }

        }


    </style>

</head>
<body>
    
<div class="principal">

      <div class="marg">
        <br>

        <div class="title "><h4 class="font">Dados da Empresa</h4></div>
        <br>

        <form name="cadastrar" action="functions.php"  method="POST">
        <div class="input-group mb-3">
        <span class="input-group-text font bg-dark text-white" >CNPJ</span>
        <input type="text" name="cnpj" class="form-control  font" onkeydown="javascript: fMasc( this, mCNPJ );" placeholder="CNPJ">
      </div>



      <div class="mb-3">
        <label for="pwd" class="form-label font">Nome</label>
        <input type="text" class="form-control" id="pwd" placeholder="Nome" name="nome">
      </div>

      <hr>

      <div class="mb-3">
        <label for="pwd" class="form-label font">Optante pelo Simples?</label>
        <select class="form-control font" name="simples">
        <option value=””></option>
        <option value=””>Sim</option>
        <option value=””>Não</option>
       
        </select>
        
      </div>


      <div class="mb-3">
        <label for="pwd" class="form-label font">Empregados</label>
        <select class="form-control font" name="empregados">
        <option value=””></option>
        <option value=””>0 a 5</option>
        <option value=””>6 a 10</option>
        <option value=””>11 a 25</option>
        <option value=””>26 a 50</option>
        <option value=””>51 a 100</option>
        <option value=””>101 a 250</option>
        <option value=””>251 a 500</option>
        <option value=””>Acima de 500</option>
        <option value=””>Não sei informar</option>
        
       
        </select>
        <br/>
        <p>O sistema será utilizado por quantas pessoas?</p>
        <select class="form-control font" name="sistema">
        <option value=””></option>
        <option value=””>Até 2</option>
        <option value=””>3 a 5</option>
        <option value=””>6 a 10</option>
        <option value=””>11 a 15</option>
        <option value=””>16 a 25</option>
        <option value=””>26 a 35</option>
        <option value=””>36 a 50</option>
        <option value=””>51 a 75</option>
        <option value=””>76 a 100</option>
        <option value=””>Acima de 100</option>
        <option value=””>Não sei Informar</option>
        
       
        </select>
        
      </div>

      <hr>


      <div class="mb-3 font">
        <label for="pwd" class="form-label font"><h5 class="font">Porte Fiscal</h5></label>
        <br/>
        <br/>
        
        <select class="form-control font" name="portefiscal">
        <option value=””></option>
        <option value=””>Microempresa</option>
        <option value=””>Empresa de Pequeno Porte</option>
        <option value=””>Empresa de Médio Porte</option>
        <option value=””>Empresa de Grande Porte</option>
       
        </select>
        <br/>
        <p>Principal Atividade:</p>
        <select class="form-control font" name="atividade" > 
        <option value=””></option>
        <option value=””>Academia</option>
        <option value=””>Treinamento</option>
        <option value=””>Pesquisa</option>
        <option value=””>ONG</option>
        <option value=””>Comércio</option>
        <option value=””>Educação</option>
        <option value=””>Saúde</option>
        <option value=””>Outros</option>
        <option value=””>Não sabe/Não pode informar</option>
        </select>
        
      </div>

      <hr>

      <div class="mb-3 font">
        <label for="pwd" class="form-label">Site</label>
        <input type="text" class="form-control font" id="pwd" placeholder="Site" name="site">
      </div>

      <hr>
      <br/>
      <div class="title "><h4 class="font">Endereço</h4></div>
      <br/>
      <hr>


      <div class="input-group mb-3 row " style="width:99.8%; margin:0 auto;">
      <span class="input-group-text col-md-2 font" style="border-radius:0px; background-color: #996633; color:white;">CEP/Cidade</span>
      <input type="text" class="form-control col-md-4 font" name="cep" placeholder="CEP" onkeydown="javascript: fMasc( this, mCEP );">
      <input type="text" class="form-control col-md-4 font" name="cidade" placeholder="Cidade">
      <button class="btn btn-dark col-md-2 font" style="border-radius:0px;" type="submit">  <i class="fa-solid fa-magnifying-glass-location fa-xl"></i> </button>
      </div>
      
      <hr/>
      <div class="mb-3">
        <label for="pwd" class="form-label font">Rua:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Rua" name="rua">
      </div>

      
      <hr/>
      <div class="mb-3">
        <label for="pwd" class="form-label font">Bairro:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Bairro" name="bairro">
      </div>

      
      <hr/>
      <div class="mb-3">
        <label for="pwd" class="form-label">Numero:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Numero " name="numero">
      </div>

      
      <hr/>
      <div class="mb-3">
        <label for="pwd" class="form-label">Complemento:</label>
        <input type="text" class="form-control" id="pwd" placeholder="complemento" name="complemento">
      </div>

      
      <hr/>
      <br/>
      <div class="title "><h4 class="font">Dados do Usuário</h4></div>
      <br/>
      <hr/>
      

      <div class="mb-3">
        <label for="pwd" class="form-label">Nome de Usuário <mark style="color:red;">(login)</mark>:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Nome (login) " name="pswd">
        
      </div>


      <hr/>

      <div class="mb-3">
        <label for="pwd" class="form-label">Nome Completo:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Nome Completo " name="pswd">
        
      </div>

      <hr/>

      <div class="mb-3">
        <label for="pwd" class="form-label"> Whatsapp:</label>
        <input type="tel" onkeydown="javascript: fMasc( this, mTel );" class="form-control" id="pwd" placeholder="(DDD)XXXX-XXXX" name="pswd">
        
        <p style="color:red; margin-top:10px;">(informações poderão ser enviadas)</p>
      </div>


      <div class="mb-3">
        <label for="pwd" class="form-label"> Email: </mark>:</label>
        <input type="email" class="form-control" id="pwd" placeholder="Email" name="pswd">
        
      </div>


      <hr/>

      <div class="mb-3">
        <label for="pwd" class="form-label"> Confirme o Email:</label>
        <input type="email" class="form-control" id="pwd" placeholder="Confirme o email" name="pswd">
        
      </div>


      <div class="form-check">
      <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
      <label class="form-check-label">Li e concordo com o <a href="">termo de adesão</a></label>
    </div>
        <br/>
       <button type="submit" name="botao2" class="btn btn-outline-dark">Cadastrar</button>
      <br/>
      <br/>
      </div>
      </form>

</div>

</body>
</html>