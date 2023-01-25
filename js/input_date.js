class Inputd extends HTMLElement{
	
	constructor(){
		super();
		this.entrada='<input typle="date" name="fecha" size="40">';
		this.pintado=false;
	}
	connectedCallback(){
		console.log('montado');
		this.innerHTML=this.entrada;
		
	}
	attributeChangedCallback(inpu, viejoValor, nuevoValor){
		if(inpu == 'inpu'){
			this.entrada= `<input class="form-control" type="date" name="${nuevoValor}"  size="40" required>`;
		}
		if(this.pintado){
			this.innerHtml = this.entrada;
		}
		
	}
	static get observedAttributes(){
		return['inpu'];
	}
}
window.customElements.define("crear-inputdate",Inputd);