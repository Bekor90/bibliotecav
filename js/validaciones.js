$(document).ready(function(){


		$( "#formRegistrarCatalogacion" ).validate( {
				rules: {
					tipoMaterial: "required",
					tituloPrincipal: "required",
					tituloSecundario: "required",
					fechaCreacion: "required",
					fechaPublicacion: "required",
					fechaCatalogacion: "required",
					editorial: "required",
					descripcion: "required",
					tipoMaterial: {
						required: true,
						minlength: 2,
						maxlength: 30
					},
					tituloPrincipal: {
						required: true,
						minlength: 2,
						maxlength: 200
					},
					tituloSecundario: {
						required: true,
						minlength: 2,
						maxlength: 100
					},
					fechaCreacion: {
						required: true,
						date: true
					},
					fechaPublicacion: {
						required: true,
						date: true
					},
					fechaCatalogacion: {
						required: true,
						date: true
					},
					editorial: {
						required: true,
						minlength: 2,
						maxlength: 50
					},
					descripcion: {
						required: true,
						minlength: 2,
						maxlength: 200
					}
				},
				submitHandler: function (formRegistrarCatalogacion) {
					 $(formRegistrarCatalogacion).submit();
				
				},
				messages: {
					tipoMaterial: {
						required: "Por favor ingrese el tipo de material",
						minlength: "El nombre de tipo de material debe ser minimo 2 caracteres",
						maxlength: "El nombre de tipo de material debe ser maximo 30 caracteres"
					},
					tituloPrincipal: {
						required: "Por favor ingrese el titulo principal",
						minlength: "El titulo principal debe ser minimo 2 caracteres",
						maxlength: "El titulo principal debe ser maximo 200 caracteres"
					},	
					tituloSecundario: {
						required: "Por favor ingrese el titulo secundario",
						minlength: "El titulo secundario debe ser minimo 2 caracteres",
						maxlength: "El titulo secundario debe ser maximo 100 caracteres"
					},	
					fechaCreacion: {
						required: "Por favor ingrese la fecha de creacion",
						date: "Fecha incorrecta"
					},	
					fechaPublicacion: {
						required: "Por favor ingrese la fecha de publicacion",
						date: "Fecha incorrecta"
					},
					fechaCatalogacion: {
						required: "Por favor ingrese la fecha de catalogacion",
						date: "Fecha incorrecta"
					},		
					editorial: {
						required: "Por favor ingrese el nombre del editorial",
						minlength: "El nombre del editorial debe ser minimo 2 caracteres",
						maxlength: "El nombre del editorial debe ser maximo 50 caracteres"
					},
					descripcion: {
						required: "Por favor ingrese el nombre del editorial",
						minlength: "La descripcion debe ser minimo 2 caracteres",
						maxlength: "La descripcion debe ser maximo 200 caracteres"
					}							
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".controls" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			});

		$( "#formRegistrarAutor" ).validate( {
				rules: {
					nombre: "required",
					apellido: "required",
					correo: "required",
					acronimo: "required",
					nombre: {
						required: true,
						minlength: 2,
						maxlength: 50
					},
					apellido: {
						required: true,
						minlength: 2,
						maxlength: 50
					},
					correo: {
						required: true,
						email: true
					},
					acronimo: {
						required: true,
						minlength: 2,
						maxlength: 30
					}
				},
				submitHandler: function (formRegistrarAutor) {
					 $(formRegistrarAutor).submit();
					},
				messages: {
					nombre: {
						required: "Por favor ingrese el nombre de autor",
						minlength: "El nombre del autor debe ser minimo 2 caracteres",
						maxlength: "El nombre del autor debe ser maximo 50 caracteres"
					},
					apellido: {
						required: "Por favor ingrese el titulo principal",
						minlength: "El titulo principal debe ser minimo 2 caracteres",
						maxlength: "El titulo principal debe ser maximo 50 caracteres"
					},	
					correo: "Por favor ingrese una direccion de correo valida",
					acronimo: {
						required: "Por favor ingrese el acronimo",
						minlength: "El acronimo debe ser minimo 2 caracteres",
						maxlength: "El acronimo debe ser maximo 30 caracteres"
					}							
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".controls" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			});

		$( "#formRegistrarArea" ).validate( {
				rules: {
					nombreArea: "required",
					nombreArea: {
						required: true,
						minlength: 2,
						maxlength: 50
					}
				},
				submitHandler: function (formRegistrarArea) {
					 $(formRegistrarArea).submit();
					},
				messages: {
					nombreArea: {
						required: "Por favor ingrese el nombre de area",
						minlength: "El nombre de area debe ser minimo 2 caracteres",
						maxlength: "El nombre de area debe ser maximo 50 caracteres"
					}						
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".controls" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				},
				submitHandler: function (formRegistrarArea) {
					$(formRegistrarArea).submit();
				
				}
			});

		$( "#formRegistrarPalabra" ).validate( {
				rules: {
					palabraClave: "required",
					palabraClave: {
						required: true,
						minlength: 2,
						maxlength: 50
					}
				},
				submitHandler: function (formRegistrarCatalogacion) {
					 $(formRegistrarCatalogacion).submit();
				},
				messages: {
					palabraClave: {
						required: "Por favor ingrese el nombre de palabra clave",
						minlength: "El nombre de area debe ser minimo 2 caracteres",
						maxlength: "El nombre de area debe ser maximo 50 caracteres"
					}						
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".controls" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			});

		$( "#formEditarArea" ).validate( {
				rules: {
					nombreArea: "required",
					nombreArea: {
						required: true,
						minlength: 2,
						maxlength: 50
					}
				},
				submitHandler: function (formEditarArea) {
					 $(formEditarArea).submit();
				},
				messages: {
					nombreArea: {
						required: "Por favor ingrese el nombre de area",
						minlength: "El nombre de area debe ser minimo 2 caracteres",
						maxlength: "El nombre de area debe ser maximo 50 caracteres"
					}						
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".controls" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			});

		$( "#formEditarAutor" ).validate( {
				rules: {
					nombre: "required",
					apellido: "required",
					correo: "required",
					acronimo: "required",
					nombre: {
						required: true,
						minlength: 2,
						maxlength: 50
					},
					apellido: {
						required: true,
						minlength: 2,
						maxlength: 50
					},
					correo: {
						required: true,
						email: true
					},
					acronimo: {
						required: true,
						minlength: 2,
						maxlength: 30
					}
				},
				submitHandler: function (formEditarAutor) {
					 $(formEditarAutor).submit();
				},
				messages: {
					nombre: {
						required: "Por favor ingrese el nombre de autor",
						minlength: "El nombre del autor debe ser minimo 2 caracteres",
						maxlength: "El nombre del autor debe ser maximo 50 caracteres"
					},
					apellido: {
						required: "Por favor ingrese el titulo principal",
						minlength: "El titulo principal debe ser minimo 2 caracteres",
						maxlength: "El titulo principal debe ser maximo 50 caracteres"
					},	
					correo: "Por favor ingrese una direccion de correo valida",
					acronimo: {
						required: "Por favor ingrese el acronimo",
						minlength: "El acronimo debe ser minimo 2 caracteres",
						maxlength: "El acronimo debe ser maximo 30 caracteres"
					}							
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".controls" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			});

		$( "#formEditarCatalogacion" ).validate( {
				rules: {
					tipoMaterial: "required",
					tituloPrincipal: "required",
					tituloSecundario: "required",
					fechaCreacion: "required",
					fechaPublicacion: "required",
					fechaCatalogacion: "required",
					editorial: "required",
					descripcion: "required",
					tipoMaterial: {
						required: true,
						minlength: 2,
						maxlength: 30
					},
					tituloPrincipal: {
						required: true,
						minlength: 2,
						maxlength: 200
					},
					tituloSecundario: {
						required: true,
						minlength: 2,
						maxlength: 100
					},
					fechaCreacion: {
						required: true,
						date: true
					},
					fechaPublicacion: {
						required: true,
						date: true
					},
					fechaCatalogacion: {
						required: true,
						date: true
					},
					editorial: {
						required: true,
						minlength: 2,
						maxlength: 50
					},
					descripcion: {
						required: true,
						minlength: 2,
						maxlength: 200
					}
				},
				submitHandler: function (formEditarCatalogacion) {
					 $(formEditarCatalogacion).submit();
				},
				messages: {
					tipoMaterial: {
						required: "Por favor ingrese el tipo de material",
						minlength: "El nombre de tipo de material debe ser minimo 2 caracteres",
						maxlength: "El nombre de tipo de material debe ser maximo 30 caracteres"
					},
					tituloPrincipal: {
						required: "Por favor ingrese el titulo principal",
						minlength: "El titulo principal debe ser minimo 2 caracteres",
						maxlength: "El titulo principal debe ser maximo 200 caracteres"
					},	
					tituloSecundario: {
						required: "Por favor ingrese el titulo secundario",
						minlength: "El titulo secundario debe ser minimo 2 caracteres",
						maxlength: "El titulo secundario debe ser maximo 100 caracteres"
					},	
					fechaCreacion: {
						required: "Por favor ingrese la fecha de creacion",
						date: "Fecha incorrecta"
					},	
					fechaPublicacion: {
						required: "Por favor ingrese la fecha de publicacion",
						date: "Fecha incorrecta"
					},
					fechaCatalogacion: {
						required: "Por favor ingrese la fecha de catalogacion",
						date: "Fecha incorrecta"
					},		
					editorial: {
						required: "Por favor ingrese el nombre del editorial",
						minlength: "El nombre del editorial debe ser minimo 2 caracteres",
						maxlength: "El nombre del editorial debe ser maximo 50 caracteres"
					},
					descripcion: {
						required: "Por favor ingrese el nombre del editorial",
						minlength: "La descripcion debe ser minimo 2 caracteres",
						maxlength: "La descripcion debe ser maximo 200 caracteres"
					}							
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".controls" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			});

		$( "#formEditarPalabra" ).validate( {
				rules: {
					palabraClave: "required",
					palabraClave: {
						required: true,
						minlength: 2,
						maxlength: 50
					}
				},
				submitHandler: function (formEditarPalabra) {
					 $(formEditarPalabra).submit();
				},
				messages: {
					palabraClave: {
						required: "Por favor ingrese el nombre de palabra clave",
						minlength: "El nombre de area debe ser minimo 2 caracteres",
						maxlength: "El nombre de area debe ser maximo 50 caracteres"
					}						
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".controls" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".controls" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			});
});
