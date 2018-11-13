($(function(){



	$(".excluir_medico").click(function(){


		id_medico = $(this).attr('data-medico');

		confexluir = confirm("Deseja realmente excluir o medico selecionado?");
		if(confexluir){
			$.ajax({
				headers: {
					'X-CSRF-Token': $('input[name="_token"]').val()
				},
				type: "DELETE",
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



	$(".excluir_especialidade").click(function(){


		id_especialidade = $(this).attr('data-especialidade');

		confexluir = confirm("Deseja realmente excluir a especialidade selecionada?");
		if(confexluir){
			$.ajax({
				headers: {
					'X-CSRF-Token': $('input[name="_token"]').val()
				},
				type: "DELETE",
				url: 'especialidades/excluir',
				data: {especialidade:id_especialidade},
				success: function(res){

					if(res.status == 0){
						alert(res.msg)
					}else{
						document.location.href="especialidades";
					}
				},
				error: function(res){
					console.log(res);
				}
			});
			
		}
	})
}))