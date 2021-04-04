/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  // Desplegar menu de navegacion
  var btnProductosDisponibles = document.getElementById('btnProductosDisponibles');
  btnProductosDisponibles.addEventListener('click', function () {
    var mainSideBarNavUl = document.getElementById('mainSideBarNavUl');
    mainSideBarNavUl.classList.toggle('d-none');
  }); // Pasar carrusel de productos por su id

  var control = $('.control-icon > .control-icon-link');
  control.on('click', function (e) {
    e.preventDefault();
    e.stopPropagation(); // Direccion del carrusel cliqueado

    var direccion = e.target.dataset.direccion; // Id del carrusel cliqueado

    var idCarrusel = e.target.dataset.idCarrusel; // Carrusel cliqueado

    var carrusel = $('.carrusel-' + idCarrusel); // Posicion de scroll del carrusel cliqueado 

    var position = carrusel.scrollLeft(); // Obtener ancho de la card de producto

    var widthCard = $('.product-card').width();
    console.log(widthCard);

    if (direccion == 'left') {
      carrusel.scrollLeft(position - widthCard - 50);
    } else {
      carrusel.scrollLeft(position + widthCard + 50);
    }
  }); // Abrir modal y obtener datos del producto a pedir 

  var btnSetCantidad = document.querySelectorAll('.btnSetCantidad');
  var producto = {};
  btnSetCantidad.forEach(function (ele) {
    ele.addEventListener('click', function () {
      producto.nombre = ele.dataset.nombre;
      producto.precio = parseFloat(ele.dataset.precio);
      producto.color = ele.dataset.color;
      producto.cantidad = 1;
      console.log(producto);
      formatearUrlWhatsapp();
    });
  }); // Agregar cantidad de productos a pedir en el modal

  var btnMenos = document.getElementById('btnMenos');
  var btnMas = document.getElementById('btnMas');
  var inputCantidadProducto = document.getElementById('inputCantidadProducto');
  var btnHacerPedido = document.getElementById('btnHacerPedido');
  btnMenos.addEventListener('click', function (e) {
    e.preventDefault();

    if (producto.cantidad > 1) {
      producto.cantidad = parseInt(producto.cantidad) - 1;
      inputCantidadProducto.value = producto.cantidad;
      formatearUrlWhatsapp();
    }
  });
  btnMas.addEventListener('click', function (e) {
    e.preventDefault();
    producto.cantidad = parseInt(producto.cantidad) + 1;
    inputCantidadProducto.value = producto.cantidad;
    formatearUrlWhatsapp();
  });
  cardBtnCancelar.addEventListener('click', function (e) {
    inputCantidadProducto.value = 1;
  });

  function formatearUrlWhatsapp() {
    btnHacerPedido.setAttribute('href', "https://api.whatsapp.com/send?phone=573043614864&text=*Producto:*%20".concat(producto.nombre, "%0A*Color:*%20").concat(producto.color, "%0A*Unidades:*%20").concat(producto.cantidad, "%0A*Total:*%20$").concat(producto.precio * producto.cantidad, "%0A%0AHola,%20me%20gustar\xC3\xACa%20comprar%20este%20producto."));
  }
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\brunettege\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\brunettege\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });