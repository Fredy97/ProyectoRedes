$(document).ready(function(){

	$("#loginForm").bind("submit", function(){

		$.ajax({
			type:$(this).attr("method"),
			url:$(this).attr("action"),
			data:$(this).serialize(),
			success: function( response){

				console.log(response);

				if(response.estado == "true"){

					$("body").overhang({
					type: "success",
					message: "Acceso Correcto",
					callback: function(){
						window.location.href="admin.php";
					}
				});

				} else{

					$("body").overhang({
					type: "error",
					message: "Error! Matricula o Contraseña incorrectos"
				});
				}
				
			},

			error: function() {
				$("body").overhang({
					type: "error",
					message: "Error! Matricula o Contraseña incorrectos"
				});
			}

		})

		return false;
	});

});