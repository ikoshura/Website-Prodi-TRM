!function(){var t=document.querySelectorAll(".rishi-posts-tabs .nav-tabs > li");document.querySelector(".rishi-posts-tabs .posts-tab-content .grid"),t.forEach((function(t){t.addEventListener("click",(function(){t.closest(".rishi-posts-tabs").querySelectorAll(".nav-tabs > li").forEach((function(t){t.classList.remove("active")}));var s=t.getAttribute("data-tab");t.classList.add("active");var e=t.closest(".rishi-posts-tabs").querySelector("#".concat(s));t.closest(".rishi-posts-tabs").querySelectorAll(".posts-tab-content .grid").forEach((function(t){t.classList.remove("active")})),e.classList.add("active")}))}))}();