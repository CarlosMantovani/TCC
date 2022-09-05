const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}

function FormataCPF(){   

    var cpf = document.getElementById('cpf')
	if(cpf.value.length ==3 || cpf.value.length == 7){
		cpf.value += "."
	}else if(cpf.value.length == 11){
		cpf.value += "-"
	}
    
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

function Formatacpf(Campo, teclapres) {
	
	var tecla = teclapres.keyCode;
	var vr = new String(Campo.value);
	vr = vr.replace(".", "");
	vr = vr.replace(".", "");
	vr = vr.replace(".", "");
	vr = vr.replace(".", "");
	tam = vr.length + 1;
		 
	if (tecla != 8 && tecla != 8) {
		 
	   if (tam > 0 && tam < 2)
		   Campo.value = vr.substr(0, 2) ;
	   if (tam > 2 && tam < 4)
	   Campo.value = vr.substr(0, 2) + '/' + vr.substr(2, 2);
	   if (tam > 4 && tam < 7)
	   Campo.value = vr.substr(0, 2) + '/' + vr.substr(2, 2) + '/' + vr.substr(4, 7);
	}
 
 }


function Formatadata(Campo, teclapres) {
	
	var tecla = teclapres.keyCode;
	var vr = new String(Campo.value);
	vr = vr.replace("/", "");
	vr = vr.replace("/", "");
	vr = vr.replace("/", "");
	tam = vr.length + 1;
		 
	if (tecla != 8 && tecla != 8) {
		 
	   if (tam > 0 && tam < 2)
		   Campo.value = vr.substr(0, 2) ;
	   if (tam > 2 && tam < 4)
	   Campo.value = vr.substr(0, 2) + '/' + vr.substr(2, 2);
	   if (tam > 4 && tam < 7)
	   Campo.value = vr.substr(0, 2) + '/' + vr.substr(2, 2) + '/' + vr.substr(4, 7);
	}
 
 }
 
function FormataCPF(){   

    var telefone = document.getElementById('telefone')
	if(telefone.value.length ==0){
		cpf.value += "("
}else if(cpf.value.length == 3){
	cpf.value += ")"
}else if(cpf.value.length == 11){

		cpf.value += "-"
	}
    
}
