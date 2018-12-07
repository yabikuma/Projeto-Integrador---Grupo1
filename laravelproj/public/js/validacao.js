
window.addEventListener('load', function(){
    $.ajax({
    url:'https://servicodados.ibge.gov.br/api/v1/localidades/estados/',
    type: 'GET',
    success: function(data){
    let option = document.createElement('option');
    option.value='';
    option.disabled=true;
    option.selected=true;
    option.innerHTML = 'Selecione';
    document.getElementById('estado').appendChild(option);
    for(let estado of data){
    let option = document.createElement('option');
    option.setAttribute('id_estado', estado.id);
    option.value=estado.sigla;
    option.innerHTML = estado.nome;
    document.getElementById('estado').appendChild(option);
    }
    },
    error: function(err){
    console.log(err);
    }
    })
    document.getElementById('estado').addEventListener('change', carregaCidades);
    });
    function carregaCidades(){
    let id = this.options[this.selectedIndex].getAttribute('id_estado');
    document.getElementById('cidade').innerHTML='';
    $.ajax({
    url:'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+id+'/municipios/',
    type: 'GET',
    success:function(data){
    let option = document.createElement('option');
    option.value='';
    option.disabled=true;
    option.selected=true;
    option.innerHTML = 'Selecione';
    document.getElementById('cidade').appendChild(option);
    for(let cidade of data){
    let option = document.createElement('option');
    option.value=cidade.nome;
    option.innerHTML = cidade.nome;
    document.getElementById('cidade').appendChild(option);
    }
    },
    error:function(err){
    console.log(err);
    }
    });
    }

//selecionou os campos
let btnSubmit = document.querySelector('.btn-submit');
let name = document.getElementById('name');
let email = document.getElementById('email');
let CPF_CNPJ = document.getElementById('CPF_CNPJ');
let telefone1 = document.getElementById('telefone1');
let celular = document.getElementById('celular');
let foto = document.getElementById('foto');
let senha = document.getElementById('password');
let confirmaSenha = document.getElementById('password-confirm');

let exibeErros = document.querySelector('.exibirErros')


//validacao de campo numerico
function soNumericos (){
    this.value = this.value.replace(/\D/g,"");
}

btnSubmit.onclick = function(){
//campos obrigatórios
    exibeErros.innerHTML = "";
    let erros = [];

    if(name.value == ""){
        erros.push('Preencha o campo Nome');
    }

    if(CPF_CNPJ.value == ""){
        erros.push('Preencha o campo CPF_CNPJ');
    }

    if(foto.value == ""){
        erros.push('Adicione a Foto');
    }


    if(senha.value != confirmaSenha.value){
        erros.push('Senhas estão diferentes');
    }

    if(erros.length>0){
        exibeErros.classList.add('alert');
        //exibeErros.classList.add('alert-danger');
    } else {
        document.querySelector("form[name='cadastro']").submit()
    }

    erros.forEach(erro =>{
        exibeErros.innerHTML += erro +"<br>";
    });
}

//valid campos selecionados
CPF_CNPJ.oninput = soNumericos;
telefone1.oninput = soNumericos;
celular.oninput = soNumericos;

