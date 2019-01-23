window.Vue = require('vue');

const app = new Vue({
	el: '#app',
	data: {
		modal: false,
	},
	methods: {
		toggleModal() {
			document.body.className += 'has-modal';
			this.modal = !this.modal;
			
		}
	}
})

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {   
    document.cookie = name+'=; Max-Age=-99999999;';  
}

var toggleMenu = document.getElementById('toggle-mobile-nav');
var navItems = document.getElementById('nav-items');
toggleMenu.onclick = function() {
	navItems.classList.toggle('is-toggled');
}

window.addEventListener('click', function(e){   
  if ( ! document.getElementById('page-header').contains(e.target) )
  {
    navItems.classList.remove("is-toggled");
  }
});
