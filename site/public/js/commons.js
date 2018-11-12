($(function(){



	$("#excluir_medico").click(function(){


		id_medico = $(this).attr('data-medico');

		confexluir = confirm("Deseja realmente excluir o medico selecionado?");
		if(confexluir){


			$.ajax({
				  headers: {
        'X-CSRF-Token': $('input[name="_token"]').val()
    },
  type: "POST",
  url: 'medicos/excluir',
  data: {medico:id_medico},
  success: function(res){
  	document.location.href="medicos";
  },
  error: function(res){
  	console.log(res);
  }
});
			
		}
	})
}))