// var empty = document.getElementById('empty');

var list = document.getElementById('list');

var add = document.getElementById('addItem');

var input = document.getElementById('add');


// =========
//  SUBMIT
// =========

add.addEventListener('click', function(eve){
		
		var item = document.getElementById('add').value;

		// create element

		var addElement = document.createElement('li');

		list.appendChild(addElement);


		// add input
		var addInput = document.createElement('input');
			
			// add checkbox and id
			var att = document.createAttribute('type');

			att.value = 'checkbox';

			addInput.setAttributeNode(att);

			var id = document.createAttribute('id');

			id.value = 'check4';

			addInput.setAttributeNode(id);
			// end

		// add label
		var addLabel = document.createElement('label');

			// var att1 = document.createAttribute('for');

			// att1.value = id.value;

			// addLabel.setAttributeNode(att1);

			// create Text node
			var textNode = document.createTextNode(item);

			addLabel.appendChild(textNode);
			// end

		// create deleteBtn
		var dlt = document.createElement('input');

			// add attr
			var att2 = document.createAttribute('type');

			att2.value = 'button';

			dlt.setAttributeNode(att2);

			var subattr2 = document.createAttribute('value');

			subattr2.value = 'delete';

			dlt.setAttributeNode(subattr2);

			var dltClass = document.createAttribute('class');

			dltClass.value = 'delete';

			dlt.setAttributeNode(dltClass);


		// appendChild

		addElement.appendChild(addInput);

		addElement.appendChild(addLabel);

		addElement.appendChild(dlt);

		// console.log(addElement);

		document.getElementById('add').value = '';

});

// ===========
//  Enter key
// ===========

input.addEventListener('keyup', function(e){
	if (e.keyCode === 13){
		e.preventDefault();
		var item = document.getElementById('add').value;

		// create element

		var addElement = document.createElement('li');

		list.appendChild(addElement);


		// add input
		var addInput = document.createElement('input');
			
			// add checkbox and id
			var att = document.createAttribute('type');

			att.value = 'checkbox';

			addInput.setAttributeNode(att);

			var id = document.createAttribute('id');

			id.value = 'check4';

			addInput.setAttributeNode(id);
			// end

		// add label
		var addLabel = document.createElement('label');

			// var att1 = document.createAttribute('for');

			// att1.value = id.value;

			// addLabel.setAttributeNode(att1);

			// create Text node
			var textNode = document.createTextNode(item);

			addLabel.appendChild(textNode);
			// end

		// create deleteBtn
		var dlt = document.createElement('input');

			// add attr
			var att2 = document.createAttribute('type');

			att2.value = 'button';

			dlt.setAttributeNode(att2);

			var subattr2 = document.createAttribute('value');

			subattr2.value = 'delete';

			dlt.setAttributeNode(subattr2);

			var dltClass = document.createAttribute('class');

			dltClass.value = 'delete';

			dlt.setAttributeNode(dltClass);


		// appendChild

		addElement.appendChild(addInput);

		addElement.appendChild(addLabel);

		addElement.appendChild(dlt);

		// console.log(addElement);

		document.getElementById('add').value = '';
	}
});

// ==========
//  delete
// ==========
list.addEventListener('click', removeItem);

function removeItem(e){

	if(e.target.classList.contains('delete')){

		var li = e.target.parentElement;

		list.removeChild(li);

	}
	
}



