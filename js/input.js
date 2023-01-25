class Input extends HTMLElement{
	
	constructor(){
		super();
		this.entrada='<input typle="text" name="" size="40">';
		this.pintado=false;
	}
	connectedCallback(){
		//console.log('montado');
		this.innerHTML=this.entrada;
		
	}
	attributeChangedCallback(inpu, viejoValor, nuevoValor){
		if(inpu == 'inpu'){
			this.entrada= `<input class="form-control" type="text" name="${nuevoValor}"  size="40" required>`;
		}
		if(this.pintado){
			this.innerHtml = this.entrada;
		}
		//console.log(`${inpu} ha cambiado de ${viejoValor} a ${nuevoValor}`);
	}
	static get observedAttributes(){
		return['inpu'];
	}
}
window.customElements.define("crear-input",Input);