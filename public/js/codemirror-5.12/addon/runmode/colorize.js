// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: http://codemirror.net/LICENSE

(function(mod) {
  if (typeof exports == "object" && typeof module == "object") // CommonJS
    mod(require("../../lib/codemirror"), require("./runmode"));
  else if (typeof define == "function" && define.amd) // AMD
    define(["../../lib/codemirror", "./runmode"], mod);
  else // Plain browser env
    mod(CodeMirror);
})(function(CodeMirror) {
  "use strict";

  var isBlock = /^(p|li|div|h\\d|pre|blockquote|td)$/;

  function textContent(node, out) {
    if (node.nodeType == 3) return out.push(node.nodeValue);
    for (var ch = node.firstChild; ch; ch = ch.nextSibling) {
      textContent(ch, out);
      if (isBlock.test(node.nodeType)) out.push("\n");
    }
  }

  CodeMirror.colorize = function(collection, defaultMode) {
     console.log("collection: " + !collection);
    if (!collection) collection = document.body.getElementsByTagName("pre");

    console.log("collection length: " + collection.length);
    for (var i = 0; i < collection.length; ++i) {
        console.log("i: " + i);
      var node = collection[i];
      var mode = node.getAttribute("data-lang") || defaultMode;
      console.log("attr: " + node.getAttribute("data-lang"));
      console.log("mode " + mode);
      console.log("!mode " + !mode);
      if (!mode) continue;

      var text = [];
      textContent(node, text);
      node.innerHTML = "";
      console.log("reset");
      CodeMirror.runMode(text.join(""), mode, node);
      console.log("runmode set");

      node.className += " cm-s-default";
      console.log("done");
    }
  };
});
