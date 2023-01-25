class Formulario extends HTMLElement{
	constructor(){
		super();
		this.template=document.getElementById("form").content;
		this.formulario=document.importNode(this.template,true);
	}
	connectedCallback(){
		this.appendChild(this.formulario);
	}
	attributeChangedCallback(nombre,anterior,nuevo){
		if(nombre=="nombre"){
			this.formulario.querySelector("h1").innterText=nuevo;
		}
	}
	static get observedAtttributes(){
		return ['nombre'];
	}
}
window.customElements.define("formulario-persona",Formulario);