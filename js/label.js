class Label extends HTMLElement{
	
	constructor(){
		super();
		this.entrada='<label for=""></label>';
		this.pintado=false;
	}
	connectedCallback(){
		console.log('montado');
		this.innerHTML=this.entrada;
		
	}
	attributeChangedCallback(nombre, viejoValor, nuevoValor){
		if(nombre == 'nombre'){
			this.entrada= `<label for="${nuevoValor}">${nuevoValor}</label>`;
		}
		if(this.pintado){
			this.innerHtml = this.entrada;
		}
		
	}
	static get observedAttributes(){
		return['nombre'];
	}
}
window.customElements.define("crear-label",Label);