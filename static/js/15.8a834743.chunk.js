webpackJsonp([15],{596:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o,a=n(0),p=(n.n(a),n(890)),r=(n.n(p),n(10)),i=n(4),c=n(9),s=this&&this.__extends||(o=function(e,t){return(o=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(e,t){e.__proto__=t}||function(e,t){for(var n in t)t.hasOwnProperty(n)&&(e[n]=t[n])})(e,t)},function(e,t){function n(){this.constructor=e}o(e,t),e.prototype=null===t?Object.create(t):(n.prototype=t.prototype,new n)}),l=function(e){function t(t){var n=e.call(this,t)||this;return n.handleDone=function(){var e=n.props.popupManager.data.handleDone;"function"===typeof e?e():n.props.closePopup()},n.handleCancel=function(){var e=n.props.popupManager.data.handleCancel;clearTimeout(n.timer),"function"===typeof e?e():n.props.closePopup()},n}return s(t,e),t.prototype.componentDidMount=function(){window.App.resizeWindow()},t.prototype.render=function(){var e=this.props.intl,t=this.props.popupManager.data,n=t.content,o=t.textDone,p=t.textCancel;return a.createElement("div",{className:"app not-bg"},a.createElement("div",{className:"popup-small show"},a.createElement("p",{className:"tit"},e.formatMessage({id:"lb15"})),a.createElement("div",{className:"fit-content"},a.createElement("p",{dangerouslySetInnerHTML:{__html:n}})),a.createElement("div",{className:"confirm"},a.createElement("span",{className:"button button-confirm",onClick:this.handleDone},o),p&&p.length>0&&a.createElement("span",{className:"button button-confirm",onClick:this.handleCancel},p))))},t}(a.PureComponent),u={closePopup:r.d};t.default=Object(c.b)(function(e){return{popupManager:e.popup}},u)(Object(i.e)(l))},890:function(e,t,n){var o=n(891);"string"===typeof o&&(o=[[e.i,o,""]]);var a={hmr:!1,transform:void 0};n(584)(o,a);o.locals&&(e.exports=o.locals)},891:function(e,t,n){(e.exports=n(583)(!1)).push([e.i,".popupingame-section{width:100%;zoom:1;position:absolute;top:0;left:200px;z-index:51}.popupingame-section .done.large{width:154px!important;background:url("+n(892)+") no-repeat 50%!important}",""])},892:function(e,t){e.exports="data:image/png;base64,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"}});