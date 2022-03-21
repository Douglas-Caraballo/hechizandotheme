/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/fullscreen-search.js":
/*!*************************************!*\
  !*** ./src/js/fullscreen-search.js ***!
  \*************************************/
/***/ (() => {

eval("function openSearch(){\n    document.getElementById(\"my-search\").style.display=\"block\";\n    document.body.classList.toggle('scroll-desactivate');\n}\n\nfunction closeSearch(){\n    document.getElementById(\"my-search\").style.display=\"none\";\n    document.body.classList.toggle('scroll-desactivate');\n}\n\ndocument.querySelector('.open-btn').addEventListener( 'click',()=>{\n    openSearch();\n});\n\ndocument.querySelector('.overlay__close-btn').addEventListener('click', ()=>{\n    closeSearch();\n});\n\n\n//# sourceURL=webpack://underscores/./src/js/fullscreen-search.js?");

/***/ }),

/***/ "./src/js/hamburger.js":
/*!*****************************!*\
  !*** ./src/js/hamburger.js ***!
  \*****************************/
/***/ (() => {

eval("const hamburger =document.querySelector('#hamburger'),\n    menu = document.querySelector('#menu'),\n    close = document.querySelector('#close');\n\nhamburger.addEventListener('click', (e)=>{\n    menu.classList.toggle('aside-activate');\n});\n\nclose.addEventListener('click', (e)=>{\n    menu.classList.toggle('aside-activate');\n});\n\n//# sourceURL=webpack://underscores/./src/js/hamburger.js?");

/***/ }),

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _fullscreen_search__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./fullscreen-search */ \"./src/js/fullscreen-search.js\");\n/* harmony import */ var _fullscreen_search__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_fullscreen_search__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _hamburger__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./hamburger */ \"./src/js/hamburger.js\");\n/* harmony import */ var _hamburger__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_hamburger__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _slider__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./slider */ \"./src/js/slider.js\");\n/* harmony import */ var _slider__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_slider__WEBPACK_IMPORTED_MODULE_2__);\n\n\n\n\n//# sourceURL=webpack://underscores/./src/js/index.js?");

/***/ }),

/***/ "./src/js/slider.js":
/*!**************************!*\
  !*** ./src/js/slider.js ***!
  \**************************/
/***/ (() => {

eval("const slider = document.querySelector('#slider');\nlet sliderSection = document.querySelectorAll('.featured-item');\nlet sliderSectionLast = sliderSection[sliderSection.length-1];\nconst btnLeft = document.querySelector('#button-left');\nconst btnRight = document.querySelector('#button-right');\n\nslider.insertAdjacentElement(\"afterbegin\", sliderSectionLast);\n\nfunction next(){\n    let sliderSectionFirst = document.querySelectorAll('.featured-item')[0];\n    slider.classList.add('move-right');\n    setTimeout(function(){\n        slider.classList.remove('move-right');\n        slider.insertAdjacentElement(\"beforeend\",sliderSectionFirst);\n    },700);\n}\n\nfunction prev(){\n    let sliderSection = document.querySelectorAll('.featured-item');\n    let sliderSectionLast = sliderSection[sliderSection.length-1];\n    slider.classList.add('move-left');\n    setTimeout(function(){\n        slider.classList.remove('move-left');\n        slider.insertAdjacentElement(\"afterbegin\", sliderSectionLast);\n    },700);\n}\n\nbtnRight.addEventListener('click',(e)=>{\n    next();\n});\nbtnLeft.addEventListener('click',(e)=>{\n    prev();\n});\n\nsetInterval((e)=>{\n    next();\n},4000);\n\n//# sourceURL=webpack://underscores/./src/js/slider.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/index.js");
/******/ 	
/******/ })()
;