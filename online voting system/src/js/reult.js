function clicked(element){
	 var buttons = document.getElementsByClassName('clickable-button');
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove('clicked');
    }
    element.classList.add('clicked');
}