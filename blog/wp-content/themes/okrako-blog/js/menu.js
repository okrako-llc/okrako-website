// スマホ用ハンバーガーメニューの開閉（静的サイトの js/script.js と同じ挙動）
// ブログ(WordPress)では静的サイトのscript.jsを読み込んでいないため、開閉部分だけをここで担う。
document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("menu-toggle");
  const menu = document.getElementById("nav-menu");
  if (toggle && menu) {
    toggle.addEventListener("click", function () {
      menu.classList.toggle("open");
    });
  }
});
