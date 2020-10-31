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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/sns.js":
/*!*****************************!*\
  !*** ./resources/js/sns.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

// SNSボタンを追加するエリア
var snsArea = document.getElementById('sns-area'); // シェア時に使用する値

var shareUrl = 'http://cly7796.net/wp/'; // 現在のページURLを使用する場合 location.href;

var shareText = 'cly7796.netのトップページです。'; // 現在のページタイトルを使用する場合 document.title;

generate_share_button(snsArea, shareUrl, shareText); // シェアボタンを生成する関数

function generate_share_button(area, url, text) {
  // シェアボタンの作成
  var twBtn = document.createElement('div');
  twBtn.className = 'twitter-btn';
  var fbBtn = document.createElement('div');
  fbBtn.className = 'facebook-btn';
  var liBtn = document.createElement('div');
  liBtn.className = 'line-btn'; // 各シェアボタンのリンク先

  var twHref = 'https://twitter.com/share?text=' + encodeURIComponent(text) + '&url=' + encodeURIComponent(url);
  var fbHref = 'http://www.facebook.com/share.php?u=' + encodeURIComponent(url);
  var liHref = 'https://line.me/R/msg/text/?' + encodeURIComponent(text) + ' ' + encodeURIComponent(url); // シェアボタンにリンクを追加

  var clickEv = 'onclick="popupWindow(this.href); return false;"';
  var twLink = '<a href="' + twHref + '" ' + clickEv + '><img src="/images/Twitter_Social_Icon_Circle_Color.png" width="10%" class="img-fluid" alt="ツイッターロゴ"></a>';
  var fbLink = '<a href="' + fbHref + '" ' + clickEv + '>facebook</a>';
  var liLink = '<a href="' + liHref + '" target="_blank">line</a>';
  twBtn.innerHTML = twLink;
  fbBtn.innerHTML = fbLink;
  liBtn.innerHTML = liLink; // シェアボタンを表示

  area.appendChild(twBtn);
  area.appendChild(fbBtn);
  area.appendChild(liBtn);
} // クリック時にポップアップで表示させる関数


function popupWindow(url) {
  window.open(url, '', 'width=580,height=400,menubar=no,toolbar=no,scrollbars=yes');
}

/***/ }),

/***/ 1:
/*!***********************************!*\
  !*** multi ./resources/js/sns.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\mks09\mynews2\resources\js\sns.js */"./resources/js/sns.js");


/***/ })

/******/ });