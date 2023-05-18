const settings = {
	async: true,
	crossDomain: true,
	url: 'https://google-translate1.p.rapidapi.com/language/translate/v2/detect',
	method: 'POST',
	headers: {
		'content-type': 'application/x-www-form-urlencoded',
		'Accept-Encoding': 'application/gzip',
		'X-RapidAPI-Key': '5f208352b9mshb46887ed35a532ep1b276bjsndbec3518e6bd',
		'X-RapidAPI-Host': 'google-translate1.p.rapidapi.com'
	},
	data: {
		q: 'English is hard, but detectably so'
	}
};

$.ajax(settings).done(function (response) {
	console.log(response);
});
