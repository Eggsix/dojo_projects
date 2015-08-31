for(var i = 0; i <= 255; i++) {
	console.log(i);
}

for(var i = 0; i <= 255; i++) {
	if(i%2!==0) {
		console.log(i);
	}
}

var sum = 0;
for(var i = 0; i <= 255; i++) {
	sum += i;
	console.log('New number:' + i + 'Sum:' + sum)
}

var x = [1, 3, 5, 7, 9, 13];
function arrloop(arr) {
	for(var i = 0; i < arr.length; i++) {
		console.log(arr[i]);
	}
}
arrloop(x);

function max(arr) {
	var max = arr[0];
	for(var i = 0; i < arr.length; i++) {
		if(arr[i] > max) {
			max = arr[i];
		}
	}
	return max
}

var x = [1, 3, 5, 7, 9, 13],
    sum = 0,
    avg;
for(var i = 0; i < x.length; i++) {
    sum += x[i];
}
avg = sum/x.length;
console.log(avg)

var odd = [];
for(var i = 0; i <=255; i++) {
	if (i%2!==0) {
		odd.push(i);
	}
}
console.log(odd)