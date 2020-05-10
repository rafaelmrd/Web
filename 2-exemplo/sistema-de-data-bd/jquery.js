
// MASCARAS
// https://www.blogson.com.br/como-formatar-campos-de-cpf-cep-telefone-e-moeda-com-jquery-jmask/


// https://cercal.io/jquery-mask-mascaras-para-campos-de-formularios/
// a – Representa um caractere alfabético (A-Z, a-z)
// 9 – Representa um carácter numérico (0-9)
// * – Representa um caractere alfanumérico (A-Z, a-z ,0-9)

jQuery("#cpf").mask("999.999.999-99");
jQuery("#cep").mask("99999-999");
jQuery("#data").mask("99/99/9999");
jQuery("#dinheiro").mask("R$ 000,00");
jQuery("#telefone").mask("(99) 9999-9999");
jQuery("#rg").mask("99.999.999");
jQuery("#hora").mask("99:99");

jQuery("#alfa_bet").mask(a-z);
jQuery("#alfa_num").mask(alfanumérico);

// FUNÇÃO - Máscara para CPF e CNPJ no mesmo campo
function maskCpfCnpj2() {
	var cnpjcpf2 = IMask(document.getElementById('cpfcnpj'), {
			mask:[
				{
					mask: '000.000.000-00',
					maxLength: 11
				},
				{
					mask: '00.000.000/0000-00'
				}
			]
		});

}

// Máscara para CPF e CNPJ no mesmo campo
// https://pt.stackoverflow.com/questions/94956/m%C3%A1scara-para-cpf-e-cnpj-no-mesmo-campo

// https://cursos.alura.com.br/forum/topico-formulario-mask-de-cpf-e-cnpj-91414












