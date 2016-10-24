onmessage = function (evt) {
	for (var i = evt.data, t = 10000; i < t; i++) {
		postMessage(i);
	};
};