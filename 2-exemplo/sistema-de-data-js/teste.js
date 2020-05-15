

function dataAtualFormatada(){
    var data = new Date(),
        dia  = data.getDate().toString().padStart(2, '0'),
        mes  = (data.getMonth()+1).toString().padStart(2, '0'), //+1 pois no getMonth Janeiro começa com zero.
        ano  = data.getFullYear();

        tudo = dia+"/"+mes+"/"+ano
        tt.innerHTML = tudo
    return tt.innerHTML
}

function teste(){
	var algo_nu = document.getElementById('algo_num')
	var algo_value = Number(algo_nu.value)

	impri_num.innerHTML = `${algo_value}`
	// impri_string.innerText = 'teste'

	var algo_stg = document.getElementById('algo_string').value
	impri_string.innerHTML = `${algo_stg}`

	nn = algo_stg

}

function data(){
	var dateControl = document.querySelector('input[type="date"]')
	// dateControl.value = '2017-06-01';

	// var valu = dateControl.value
	console.log(dateControl.value); // prints "2017-06-01"
	console.log(dateControl.valueAsNumber); // prints 1496275200000, a UNIX timestamp

	impri_data.innerHTML = `${dateControl.valueAsDate}`
	impri_data_out.innerHTML = `Formato: yyyy-mm-dd > ${dateControl.value}`



	const date = new Date(Date.UTC(dateControl.value));
	// Results below assume UTC timezone - your results may vary

	var tt = new Intl.DateTimeFormat('en-US').format(date)
	// expected output: "12/20/2012

	impri_data_br.innerHTML = `Formato-BR: > ${tt}`

}

function data2(){
	dayName = new Array ("domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado") 
	monName = new Array ("janeiro", "fevereiro", "março", "abril", "Maio", "junho", "agosto", "outubro", "novembro", "dezembro")

	now = new Date

	impri_data_hj.innerHTML = `Hoje é ${now.getDay()}/
	${now.getDate()}/${now.getMonth()}/${now.getFullYear()}`

	// impri_data_hj.innerHTML = `Hoje é ${dayName[now.getDay()]}/
	// ${now.getDate()}/${monName [now.getMonth()]}/${now.getFullYear()}`


}



