let cookie;
let i = 0;
let new_id = document.cookie.split(";").length;
if (new_id) {
for (j = 0; j < 100; j++) {
	if (cookie = getCookie(j)) {
		id = cookie.split("=");
		recreate_to_do(j, id[1]);
		if (i < id[0])
		i = id[0];
	}
}
i++;
}

function start() {

	let txt;
	let thing = prompt("Please enter to do thing:", "Wash dishes");
	if (thing == null || thing == "") {
		txt = "User cancelled the prompt.";
	} else {
		txt = thing;
		recreate_to_do(i, txt);
		i++;
	}
}

function del_to_do(id) {
	if (confirm("Are you sure you want to delete this task?")) {
		let element = document.getElementById(id);
		element.parentNode.removeChild(element);
		eraseCookie(id);
	}
}

	function recreate_to_do(id, txt) {
		// create new elments

		let newParagraph = document.createElement('p');
		newParagraph.setAttribute("id", id);
		newParagraph.setAttribute("onclick","del_to_do(id);");
		setCookie(id, txt, 1);
		let pText= document.createTextNode(txt);

		newParagraph.appendChild(pText);

		let task = document.getElementById('bla');
		let parent = task.parentNode;

		parent.insertBefore(newParagraph, parent.firstChild);
	}

function create_to_do(txt) {
    // create new elments
	let newParagraph = document.createElement('p');
	newParagraph.setAttribute("id", i);

	newParagraph.setAttribute("onclick","del_to_do(id);");
	setCookie(i, txt, 1);
	i++;

    let pText= document.createTextNode(txt);
    newParagraph.appendChild(pText);

    // elements are now created and ready to be added to the DOM.

    // grab element on page you want to add stuff to
    let task = document.getElementById('ft_list');

	// add both new elements to the page as children to the element we stored in firstHeading.

    // get parent node of firstHeading
    let parent = task.parentNode;

    // insert newHeading before FirstHeading
    parent.insertBefore(newParagraph, task);
}

function setCookie(name,value) {
	document.cookie = name + "=" + value;
}

function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for(let i=0;i < ca.length;i++) {
        let c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c;
    }
    return null;
}

function eraseCookie(id) {
    document.cookie = id + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
}
