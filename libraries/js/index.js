import { handler } from "./hamburger.js";

(() => {
  window.addEventListener("DOMContentLoaded", (e) => {
    handler();
  });
})(window, document, undefined);
