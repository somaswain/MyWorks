
var result = document.getElementById('result')

var value = document.getElementById('result').value

var clear = document.getElementById('clear')


// ========
//  clear
// ========

clear.addEventListener('click', function(e){

	document.getElementById('result').value = '';

});

// =========
//  Numbers
// =========

var numbers = document.querySelectorAll('.sign')

var arr = Array.from(numbers)

for(let i = 0; i < arr.length; i++){

	arr[i].addEventListener('click', function(e){

		// console.log(arr[i].value)

		var val = arr[i].value

		var res = (document.getElementById('result').value += val )

	})


};

// ==========
//  Evaluate
// ==========

var evaluate = document.querySelector('.equal')

evaluate.addEventListener('click', function(e){

	let x = document.getElementById('result').value

	let y = eval(x)

	document.getElementById('result').value = y

});




