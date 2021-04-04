$(document).ready(() => {
	// Desplegar menu de navegacion
	const btnProductosDisponibles = document.getElementById('btnProductosDisponibles')
	btnProductosDisponibles.addEventListener('click', function() {
		const mainSideBarNavUl = document.getElementById('mainSideBarNavUl')
		mainSideBarNavUl.classList.toggle('d-none')
	})

	// Pasar carrusel de productos por su id
	const control = $('.control-icon > .control-icon-link')

	control.on('click', function(e) {
		e.preventDefault()
		e.stopPropagation()
		// Direccion del carrusel cliqueado
		const direccion = e.target.dataset.direccion
		// Id del carrusel cliqueado
		const idCarrusel = e.target.dataset.idCarrusel
		// Carrusel cliqueado
		const carrusel = $('.carrusel-' + idCarrusel)
		// Posicion de scroll del carrusel cliqueado 
		const position = carrusel.scrollLeft()
		// Obtener ancho de la card de producto
		const widthCard = $('.product-card').width()
		console.log(widthCard)

		if (direccion == 'left') {
			carrusel.scrollLeft((position - widthCard) - 50)
		}
		else {
			carrusel.scrollLeft((position + widthCard) + 50)			
		}
    })

    // Abrir modal y obtener datos del producto a pedir 
    let btnSetCantidad = document.querySelectorAll('.btnSetCantidad')
    let producto = {}

    btnSetCantidad.forEach(ele => {
	    ele.addEventListener('click', function() {
    		producto.nombre = ele.dataset.nombre
    		producto.precio = parseFloat(ele.dataset.precio)
    		producto.color = ele.dataset.color
    		producto.cantidad = 1	    	
            console.log(producto)
            formatearUrlWhatsapp()
	    })
    })

    // Agregar cantidad de productos a pedir en el modal
    let btnMenos = document.getElementById('btnMenos')
    let btnMas = document.getElementById('btnMas')
    let inputCantidadProducto = document.getElementById('inputCantidadProducto')
    let btnHacerPedido = document.getElementById('btnHacerPedido')


    btnMenos.addEventListener('click', function(e) {
    	e.preventDefault()
    	if(producto.cantidad > 1) {
    		producto.cantidad = parseInt(producto.cantidad) - 1 
    		inputCantidadProducto.value = producto.cantidad
	    	formatearUrlWhatsapp()
    	}
    })
    btnMas.addEventListener('click', function(e) {
    	e.preventDefault()
        producto.cantidad = parseInt(producto.cantidad) + 1
    	inputCantidadProducto.value = producto.cantidad
    	formatearUrlWhatsapp()	
    })
    cardBtnCancelar.addEventListener('click', function(e) {
    	inputCantidadProducto.value = 1
    })

    function formatearUrlWhatsapp() {
    	btnHacerPedido.setAttribute('href', `https://api.whatsapp.com/send?phone=573043614864&text=*Producto:*%20${producto.nombre}%0A*Color:*%20${producto.color}%0A*Unidades:*%20${producto.cantidad}%0A*Total:*%20$${producto.precio * producto.cantidad}%0A%0AHola,%20me%20gustarÃ¬a%20comprar%20este%20producto.`)
    }
})
