/*By: Pedro Hernández - Mailtycon 14-01-22*/
//funciones generales
function CancelEnter() {
    var key = event.keyCode;
    if (key === 13) {
        event.preventDefault();
    }
}
$("textarea[maxlength]").on("propertychange input", function() {
    if (this.value.length > this.maxlength) {
        this.value = this.value.substring(0, this.maxlength);
    }
});

function Message(title, text, icon) {
    swal({
        title: title,
        text: text,
        icon: icon,
        buttons: {
            cancel: {
                text: 'Cerrar',
                value: true,
                visible: true,
                className: 'btn btn-primary',
                closeModal: true
            }
        }
    });
}

function OnlyNumber(div) {
    $("#" + div).on("input", function(evt) {
        var self = $(this);
        self.val(self.val().replace(/\D/g, ""));
        if ((evt.which < 48 || evt.which > 57)) {
            evt.preventDefault();
        }
    });
}
//fin funciones generales
// funcion que carga cada módulo en el index
function ViewOpcion(opcion) {
    $("#content").html('')
    switch (opcion) {
        case 'HOME':
            url = "modulos/home/index.php";
            break;
        case 'CLIENTES':
            url = "modulos/clientes/index.php";
            break;
        case 'USUARIOS':
            url = "opciones/preguntas/index.php";
            break;
        case 'TIPO PRESTAMO':
            url = "modulos/tipo_prestamo/index.php";
            break;
        case 'REGISTRO PRESTAMO':
            url = "modulos/registrar_prestamo/index.php";
            break;
        case 'REPORTES':
            url = "modulos/reportes/index.php";
            break;
    } //end switch
    $("#content").html(' <span class="text-center"> <div class="fa-3x"> <i class="fas fa-spinner fa-pulse"></i> </div> <span class="text-warning"><h2> Cargando módulo ' + opcion + '.... Espere.</h2> </span> </span>');
    $.ajax({
        type: "POST",
        url: url,
        contentType: "application/x-www-form-urlencoded",
        data: "opcion=" + opcion,
        processData: true,
        success: function(msg) {
            $("#content").html(msg);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor. No se encontró el módulo " + opcion, "error")
            $("#content").html("");
        }
    });
}
//función de los módulos
// --> MODULO: CLIENTES
function CLIENTES_SaveInfo() {
    var CLIENTES_id = $("#CLIENTES_id").val()
    var CLIENTES_nombre = $("#CLIENTES_nombre").val()
    if (CLIENTES_nombre == '') {
        Message("Atención!", "Por favor, digite el nombre del cliente.", "warning");
        return false;
    }
    $("#BTN_Guardar").attr("disabled", true);
    $("#BTN_Cancelar").attr("disabled", true);
    $("#rpta").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
    $.ajax({
        type: "POST",
        url: "modulos/clientes/guardar.php",
        contentType: "application/x-www-form-urlencoded",
        data: "id=" + CLIENTES_id + "&nombre=" + CLIENTES_nombre,
        processData: true,
        success: function(msg) {
            if (msg == 0) {
                Message("Error!", "Algunos datos no se pudieron procesar. Por favor, revise.", "error")
            } else {
                Message("Información registrada correctamente", "", "success")
                $("#CLIENTES_id").val(msg);
                CLIENTES_ConsultarClientes()
                CLIENTES_ClearForm()
            }
            $("#rpta").html('');
            $("#BTN_Guardar").removeAttr("disabled", true);
            $("#BTN_Cancelar").removeAttr("disabled", true);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor.", "error")
            $("#BTN_Guardar").removeAttr("disabled", true);
            $("#BTN_Cancelar").removeAttr("disabled", true);
            $("#rpta").html('');
        }
    });
}

function CLIENTES_ClearForm() {
    $("#CLIENTES_id").val('-1')
    $("#CLIENTES_nombre").val('')
}

function CLIENTES_ConsultarClientes() {
    $.ajax({
        type: "POST",
        url: "modulos/clientes/consultar.php",
        contentType: "application/x-www-form-urlencoded",
        processData: true,
        success: function(msg) {
            $("#rpta").html('');
            $("#consulta").html(msg);
            $("#BTN_Guardar").removeAttr("disabled", true);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor.", "error")
            $("#BTN_Guardar").removeAttr("disabled", true);
            $("#rpta").html('');
        }
    });
}

function CLIENTES_eliminar(id_cliente, valor) {
    swal({
        title: "¿Seguro de eliminar este cliente?",
        text: valor,
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((isConfirm) => {
        if (isConfirm) {
            $("#BTN_Guardar").attr("disabled", true);
            $("#BTN_Cancelar").attr("disabled", true);
            $("#rpta").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
            $.ajax({
                type: "POST",
                url: "modulos/clientes/eliminar.php",
                contentType: "application/x-www-form-urlencoded",
                processData: true,
                data: "id_cliente=" + id_cliente,
                success: function(msg) {
                    if (msg == 0) {
                        Message("Error!", "Algunos datos no se pudieron procesar. Por favor, revise.", "error")
                    } else {
                        if (msg == 1) {
                            Message("Información eliminada correctamente", "", "success")
                            CLIENTES_ConsultarClientes();
                        } else {
                            Message("Atención!", "No puede eliminar un cliente con prestamo", "warning")
                            CLIENTES_ConsultarClientes();
                        }
                    }
                    $("#BTN_Guardar").removeAttr("disabled", true);
                    $("#BTN_Cancelar").removeAttr("disabled", true);
                    $("#rpta").html('')
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    Message("UPS!", "Error en el servidor. " + thrownError, "error")
                    $("#BTN_Guardar").removeAttr("disabled", true);
                    $("#BTN_Cancelar").removeAttr("disabled", true);
                    $("#rpta").html('')
                }
            });
        } else {
            return false;
        }
    });
}

function CLIENTES_editar(id_cliente, nombre) {
    $("#CLIENTES_id").val(id_cliente)
    $("#CLIENTES_nombre").val(nombre)
    $("#CLIENTES_nombre").focus()
}
//función de los módulos
// --> MODULO: TIPO DE PRESTAMOS
function TIPO_PRESTAMO_SaveInfo() {
    var TIPO_PRESTAMO_id = $("#TIPO_PRESTAMO_id").val()
    var TIPO_PRESTAMO_nombre = $("#TIPO_PRESTAMO_nombre").val()
    if (TIPO_PRESTAMO_nombre == '') {
        Message("Atención!", "Por favor, digite el nombre del tipo de prestamo.", "warning");
        return false;
    }
    $("#BTN_Guardar").attr("disabled", true);
    $("#BTN_Cancelar").attr("disabled", true);
    $("#rpta").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
    $.ajax({
        type: "POST",
        url: "modulos/tipo_prestamo/guardar.php",
        contentType: "application/x-www-form-urlencoded",
        data: "id=" + TIPO_PRESTAMO_id + "&nombre=" + TIPO_PRESTAMO_nombre,
        processData: true,
        success: function(msg) {
            if (msg == 0) {
                Message("Error!", "Algunos datos no se pudieron procesar. Por favor, revise.", "error")
            } else {
                if (msg == 1) {
                    Message("Información registrada correctamente", "", "success")
                    $("#TIPO_PRESTAMO_id").val(msg);
                    TIPO_PRESTAMO_ConsultarTipoPrestamo()
                    TIPO_PRESTAMO_ClearForm()
                }
            }
            $("#rpta").html('');
            $("#BTN_Guardar").removeAttr("disabled", true);
            $("#BTN_Cancelar").removeAttr("disabled", true);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor.", "error")
            $("#BTN_Guardar").removeAttr("disabled", true);
            $("#BTN_Cancelar").removeAttr("disabled", true);
            $("#rpta").html('');
        }
    });
}

function TIPO_PRESTAMO_ClearForm() {
    $("#TIPO_PRESTAMO_id").val('-1')
    $("#TIPO_PRESTAMO_nombre").val('')
}

function TIPO_PRESTAMO_ConsultarTipoPrestamo() {
    $.ajax({
        type: "POST",
        url: "modulos/tipo_prestamo/consultar.php",
        contentType: "application/x-www-form-urlencoded",
        processData: true,
        success: function(msg) {
            $("#rpta").html('');
            $("#consulta").html(msg);
            $("#BTN_Guardar").removeAttr("disabled", true);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor.", "error")
            $("#BTN_Guardar").removeAttr("disabled", true);
            $("#rpta").html('');
        }
    });
}

function TIPO_PRESTAMO_eliminar(id_tipo_prestamo, valor) {
    swal({
        title: "¿Seguro de eliminar este cliente?",
        text: valor,
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((isConfirm) => {
        if (isConfirm) {
            $("#BTN_Guardar").attr("disabled", true);
            $("#BTN_Cancelar").attr("disabled", true);
            $("#rpta").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
            $.ajax({
                type: "POST",
                url: "modulos/tipo_prestamo/eliminar.php",
                contentType: "application/x-www-form-urlencoded",
                processData: true,
                data: "id_tipo_prestamo=" + id_tipo_prestamo,
                success: function(msg) {
                    if (msg == 0) {
                        Message("Error!", "Algunos datos no se pudieron procesar. Por favor, revise.", "error")
                    } else {
                        Message("Información eliminada correctamente", "", "success")
                        TIPO_PRESTAMO_ConsultarTipoPrestamo();
                    }
                    $("#BTN_Guardar").removeAttr("disabled", true);
                    $("#BTN_Cancelar").removeAttr("disabled", true);
                    $("#rpta").html('')
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    Message("UPS!", "Error en el servidor. " + thrownError, "error")
                    $("#BTN_Guardar").removeAttr("disabled", true);
                    $("#BTN_Cancelar").removeAttr("disabled", true);
                    $("#rpta").html('')
                }
            });
        } else {
            return false;
        }
    });
}

function TIPO_PRESTAMO_editar(id_tipo_prestamo, nombre) {
    $("#TIPO_PRESTAMO_id").val(id_tipo_prestamo)
    $("#TIPO_PRESTAMO_nombre").val(nombre)
    $("#TIPO_PRESTAMO_nombre").focus()
}
/*modulo prestamos*/
function PRESTAMO_SaveInfo() {
    var PRESTAMO_id = $("#PRESTAMO_id").val()
    var PRESTAMO_id_cliente = $("#PRESTAMO_id_cliente").val()
    var PRESTAMO_id_tipo_prestamo = $("#PRESTAMO_id_tipo_prestamo").val()
    var PRESTAMO_fecha = $("#PRESTAMO_fecha").val()
    var PRESTAMO_valor_prestamo = $("#PRESTAMO_valor_prestamo").val()
    var PRESTAMO_score = $("#PRESTAMO_score").val()
    var PRESTAMO_porcentaje = $("#PRESTAMO_porcentaje").val()
    var PRESTAMO_valor_proteccion = $("#PRESTAMO_valor_proteccion").val()
    var PRESTAMO_valor_donacion = $("#PRESTAMO_valor_donacion").val()
    var PRESTAMO_dias_prestamo = $("#PRESTAMO_dias_prestamo").val()
    var PRESTAMO_total_prestamo = $("#PRESTAMO_total_prestamo").val()
    var PRESTAMO_fecha_final_prestamo = $("#PRESTAMO_fecha_final_prestamo").val()
    var PRESTAMO_valor_interes_prestamo = $("#PRESTAMO_valor_interes_prestamo").val()
    var PRESTAMO_costo_prestamo = $("#PRESTAMO_costo_prestamo").val()
    if (PRESTAMO_id_cliente == '') {
        Message("Atención!", "Por favor, seleccione un cliente.", "warning");
        return false;
    }
    if (PRESTAMO_id_tipo_prestamo == '') {
        Message("Atención!", "Por favor, seleccione un tipo de prestamo.", "warning");
        return false;
    }
    if ((PRESTAMO_valor_prestamo == '') || (PRESTAMO_score == 0)) {
        Message("Atención!", "Por favor, digite el valor del prestamo.", "warning");
        return false;
    }
    if ((PRESTAMO_score == '') || (PRESTAMO_score == 0)) {
        Message("Atención!", "Por favor, digite el score del cliente.", "warning");
        return false;
    }
    if ((PRESTAMO_porcentaje == '') || (PRESTAMO_porcentaje == 0)) {
        Message("Atención!", "Por favor, digite el porcentaje de interés del prestamo.", "warning");
        return false;
    }
    if (PRESTAMO_id_tipo_prestamo == 1) {
        if ((PRESTAMO_valor_proteccion == 0) || (PRESTAMO_valor_proteccion == '')) {
            Message("Atención!", "Por favor, digite el valor de protección.", "warning");
            return false;
        }
    }
    if (PRESTAMO_valor_donacion == '') {
        Message("Atención!", "Por favor, digite el valor de donación.", "warning");
        return false;
    }
    if ((PRESTAMO_dias_prestamo == '') || (PRESTAMO_dias_prestamo == 0)) {
        Message("Atención!", "Por favor, digite los días que durará el prestamo.", "warning");
        return false;
    }
    $("#BTN_Guardar").attr("disabled", true);
    $("#BTN_Cancelar").attr("disabled", true);
    $("#rpta").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
    $.ajax({
        type: "POST",
        url: "modulos/registrar_prestamo/guardar.php",
        contentType: "application/x-www-form-urlencoded",
        data: "PRESTAMO_id=" + PRESTAMO_id + "&PRESTAMO_id_cliente=" + PRESTAMO_id_cliente + "&PRESTAMO_id_tipo_prestamo=" + PRESTAMO_id_tipo_prestamo + "&PRESTAMO_fecha=" + PRESTAMO_fecha + "&PRESTAMO_valor_prestamo=" + PRESTAMO_valor_prestamo + "&PRESTAMO_score=" + PRESTAMO_score + "&PRESTAMO_porcentaje=" + PRESTAMO_porcentaje + "&PRESTAMO_valor_proteccion=" + PRESTAMO_valor_proteccion + "&PRESTAMO_valor_donacion=" + PRESTAMO_valor_donacion + "&PRESTAMO_dias_prestamo=" + PRESTAMO_dias_prestamo + "&PRESTAMO_total_prestamo=" + PRESTAMO_total_prestamo + "&PRESTAMO_fecha_final_prestamo=" + PRESTAMO_fecha_final_prestamo + "&PRESTAMO_valor_interes_prestamo=" + PRESTAMO_valor_interes_prestamo + "&PRESTAMO_costo_prestamo=" + PRESTAMO_costo_prestamo,
        processData: true,
        success: function(msg) {
            if (msg == 0) {
                Message("Error!", "Algunos datos no se pudieron procesar. Por favor, revise.", "error")
            }
            if (msg >= 1) {
                Message("Información registrada correctamente", "", "success")
                //$("#TIPO_PRESTAMO_id").val(msg);
                PRESTAMO_ConsultarPrestamo(PRESTAMO_id_cliente)
                PRESTAMO_ClearFormSave();
            }
            if (msg == 'mora') {
                Message("Atención!", "El cliente presenta prestamos sin abonar, por lo tanto el sistema no le puede realizar esta solicitud. Por favor, revise.", "warning")
            }
            $("#rpta").html('');
            $("#BTN_Guardar").removeAttr("disabled", true);
            $("#BTN_Cancelar").removeAttr("disabled", true);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor.", "error")
            $("#BTN_Guardar").removeAttr("disabled", true);
            $("#BTN_Cancelar").removeAttr("disabled", true);
            $("#rpta").html('');
        }
    });
}
var d = new Date();
var month = d.getMonth() + 1;
var day = d.getDate();
var fechaActual = d.getFullYear() + '-' + (month < 10 ? '0' : '') + month + '-' + (day < 10 ? '0' : '') + day;

function PRESTAMO_ClearFormSave() {
    $("#PRESTAMO_id").val('');
    $("#PRESTAMO_id_cliente").attr('disabled', true);
    $("#PRESTAMO_id_tipo_prestamo").val('').trigger('change');
    $("#PRESTAMO_fecha").val(fechaActual);
    $("#PRESTAMO_valor_prestamo").val('0');
    $("#PRESTAMO_score").val('0');
    $("#PRESTAMO_porcentaje").val('0');
    $("#PRESTAMO_valor_proteccion").val('0');
    $("#PRESTAMO_valor_proteccion").attr("disabled", true)
    $("#PRESTAMO_valor_donacion").val('0');
    $("#PRESTAMO_dias_prestamo").val('0');
    $("#PRESTAMO_total_prestamo").val('');
    $("#PRESTAMO_fecha_final_prestamo").val('');
    $("#PRESTAMO_valor_interes_prestamo").val('');
    $("#PRESTAMO_costo_prestamo").val('');
}

function PRESTAMO_ClearForm() {
    $("#PRESTAMO_id_cliente").removeAttr('disabled', true);
    $("#PRESTAMO_id_cliente").val('').trigger('change');
    $("#PRESTAMO_id_tipo_prestamo").val('').trigger('change');
    $("#PRESTAMO_id").val('');
    $("#PRESTAMO_fecha").val(fechaActual);
    $("#PRESTAMO_valor_prestamo").val('0');
    $("#PRESTAMO_score").val('0');
    $("#PRESTAMO_porcentaje").val('0');
    $("#PRESTAMO_valor_proteccion").val('0');
    $("#PRESTAMO_valor_donacion").val('0');
    $("#PRESTAMO_dias_prestamo").val('0');
    $("#PRESTAMO_total_prestamo").val('');
    $("#PRESTAMO_fecha_final_prestamo").val('');
    $("#PRESTAMO_valor_interes_prestamo").val('');
    $("#PRESTAMO_costo_prestamo").val('');
}

function PRESTAMO_ConsultarPrestamo(id_cliente) {
    if (id_cliente == '') {
        $("#rpta").html('');
        $("#consulta").html('');
        return false;
    }
    $("#consulta").html('');
    $("#consulta").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
    $.ajax({
        type: "POST",
        url: "modulos/registrar_prestamo/consultar.php",
        contentType: "application/x-www-form-urlencoded",
        data: "id_cliente=" + id_cliente,
        processData: true,
        success: function(msg) {
            $("#rpta").html('');
            $("#consulta").html(msg);
            $("#BTN_Guardar").removeAttr("disabled", true);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor.", "error")
            $("#BTN_Guardar").removeAttr("disabled", true);
            $("#rpta").html('');
        }
    });
}

function PRESTAMO_eliminar(id_prestamo, id_cliente) {
    swal({
        title: "¿Seguro de eliminar este prestamo?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((isConfirm) => {
        if (isConfirm) {
            $("#BTN_Guardar").attr("disabled", true);
            $("#BTN_Cancelar").attr("disabled", true);
            $("#rpta").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
            $.ajax({
                type: "POST",
                url: "modulos/registrar_prestamo/eliminar_prestamo_activo.php",
                contentType: "application/x-www-form-urlencoded",
                processData: true,
                data: "id_prestamo=" + id_prestamo,
                success: function(msg) {
                    if (msg == 0) {
                        Message("Error!", "Algunos datos no se pudieron procesar. Por favor, revise.", "error")
                    } else {
                        Message("Información eliminada correctamente", "", "success")
                        PRESTAMO_ConsultarPrestamoActivo(id_cliente)
                    }
                    $("#BTN_Guardar").removeAttr("disabled", true);
                    $("#BTN_Cancelar").removeAttr("disabled", true);
                    $("#rpta").html('')
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    Message("UPS!", "Error en el servidor. " + thrownError, "error")
                    $("#BTN_Guardar").removeAttr("disabled", true);
                    $("#BTN_Cancelar").removeAttr("disabled", true);
                    $("#rpta").html('')
                }
            });
        } else {
            return false;
        }
    });
}

function PRESTAMO_ValidaTipoPrestamo(id_tipo_prestamo) {
    if (id_tipo_prestamo == 2) { //credito directo
        $("#PRESTAMO_valor_proteccion").attr("readonly", true);
        $("#PRESTAMO_valor_proteccion").val("0")
    } else {
        if (id_tipo_prestamo == 1) {
            $("#PRESTAMO_valor_proteccion").removeAttr("readonly", false);
            $("#PRESTAMO_valor_proteccion").val("0");
        } else {
            $("#PRESTAMO_valor_proteccion").attr("readonly", true);
            $("#PRESTAMO_valor_proteccion").val("0");
        }
    }
}

function PRESTAMO_CalculaTotalPrestamo() {
    var PRESTAMO_valor_prestamo = $("#PRESTAMO_valor_prestamo").val();
    var PRESTAMO_valor_proteccion = $("#PRESTAMO_valor_proteccion").val();
    var PRESTAMO_valor_donacion = $("#PRESTAMO_valor_donacion").val();
    var PRESTAMO_porcentaje = $("#PRESTAMO_porcentaje").val();
    if (PRESTAMO_valor_prestamo == '') {
        Message("Atención!", "Seleccione el valor del prestamo para realizar las validaciones.", "warning");
        $("#PRESTAMO_valor_proteccion").val(0);
        $("#PRESTAMO_valor_donacion").val(0);
        PRESTAMO_valor_prestamo = 0;
        return false;
    }
    if (PRESTAMO_valor_proteccion == '') PRESTAMO_valor_proteccion = 0;
    if (PRESTAMO_valor_donacion == '') PRESTAMO_valor_donacion = 0;
    if (PRESTAMO_porcentaje == '') PRESTAMO_porcentaje = 0;
    $.ajax({
        type: "POST",
        url: "modulos/registrar_prestamo/calcula_total_prestamo.php",
        contentType: "application/x-www-form-urlencoded",
        data: "PRESTAMO_valor_prestamo=" + PRESTAMO_valor_prestamo + "&PRESTAMO_valor_proteccion=" + PRESTAMO_valor_proteccion + "&PRESTAMO_valor_donacion=" + PRESTAMO_valor_donacion + "&PRESTAMO_porcentaje=" + PRESTAMO_porcentaje,
        processData: true,
        success: function(msg) {
            msg = msg.split(',');
            var valor_totalPrestamo = msg[0];
            var mensajeValidacion = msg[1];
            var porcentaje_valido = msg[2];
            var valorInteres = msg[3];
            var CostoPrestamo = msg[4];
            if (mensajeValidacion == 0) { //valor de proteccion
                Message("Atención!", "El valor de protección supera el " + porcentaje_valido + "% del valor del prestamo.", "warning");
                $("#PRESTAMO_valor_proteccion").val(0);
            }
            if (mensajeValidacion == 1) { //valor de donacion
                Message("Atención!", "El valor de la donación supera el " + porcentaje_valido + "% del valor del prestamo.", "warning");
                $("#PRESTAMO_valor_donacion").val(0);
            }
            $("#PRESTAMO_valor_interes_prestamo").val(valorInteres);
            $("#PRESTAMO_costo_prestamo").val(CostoPrestamo);
            $("#PRESTAMO_total_prestamo").val(valor_totalPrestamo);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor. " + thrownError, "error")
        }
    });
}

function PRESTAMO_FechaFinalPrestamo(dias_prestamo) {
    var fecha_prestamo = $("#PRESTAMO_fecha").val();
    $.ajax({
        type: "POST",
        url: "modulos/registrar_prestamo/calcula_fecha_fin_credito.php",
        contentType: "application/x-www-form-urlencoded",
        data: "dias_prestamo=" + dias_prestamo + "&fecha_prestamo=" + fecha_prestamo,
        processData: true,
        success: function(msg) {
            $("#PRESTAMO_fecha_final_prestamo").val(msg);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor. " + thrownError, "error")
        }
    });
}

function PRESTAMO_AsignaValoresDecimales(campo) {
    $("#" + campo).on({
        "focus": function(event) {
            $(event.target).select();
        },
        "keyup": function(event) {
            $(event.target).val(function(index, value) {
                return value.replace(/\D/g, "").replace(/([0-9])([0-9]{2})$/, '$1.$2').replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
            });
        }
    });
}

function PRESTAMO_editar(id_prestamo, id_cliente, id_tipo_prestamo, fecha_prestamo, valor_prestamo, score_cliente, porcentaje_prestamo, valor_proteccion, valor_donacion, dias_prestamo, total_prestamo, fecha_fin_prestamo, valor_interes, costo_prestamo) {
    $("#PRESTAMO_id_cliente").focus()
    $("#PRESTAMO_id").val(id_prestamo)
    $("#PRESTAMO_id_cliente").attr('disabled', true)
    $("#PRESTAMO_id_tipo_prestamo").val(id_tipo_prestamo).trigger('change');
    $("#PRESTAMO_valor_proteccion").val(valor_proteccion)
    $("#PRESTAMO_fecha").val(fecha_prestamo)
    $("#PRESTAMO_valor_prestamo").val(valor_prestamo)
    $("#PRESTAMO_score").val(score_cliente)
    $("#PRESTAMO_porcentaje").val(porcentaje_prestamo)
    $("#PRESTAMO_valor_donacion").val(valor_donacion)
    $("#PRESTAMO_dias_prestamo").val(dias_prestamo)
    $("#PRESTAMO_total_prestamo").val(total_prestamo)
    $("#PRESTAMO_fecha_final_prestamo").val(fecha_fin_prestamo)
    $("#PRESTAMO_valor_interes_prestamo").val(valor_interes)
    $("#PRESTAMO_costo_prestamo").val(costo_prestamo)
}

function PRESTAMO_ConsultarPrestamoActivo(id_cliente) {
    $("#div_prestamosActivos").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
    $.ajax({
        type: "POST",
        url: "modulos/registrar_prestamo/creditos_activos.php",
        contentType: "application/x-www-form-urlencoded",
        processData: true,
        data: "id_cliente=" + id_cliente,
        success: function(msg) {
            $("#div_prestamosActivos").html(msg)
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor. " + thrownError, "error")
            $("#div_prestamosActivos").html('')
        }
    });
}

function PRESTAMO_ConsultarPrestamoFinalizado(id_cliente) {
    $("#div_prestamosFinalizados").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
    $.ajax({
        type: "POST",
        url: "modulos/registrar_prestamo/creditos_finalizados.php",
        contentType: "application/x-www-form-urlencoded",
        processData: true,
        data: "id_cliente=" + id_cliente,
        success: function(msg) {
            $("#div_prestamosFinalizados").html(msg)
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor. " + thrownError, "error")
            $("#div_prestamosFinalizados").html('')
        }
    });
}

function PRESTAMO_ConsultarPrestamoPerdida(id_cliente) {
    $("#div_prestamosPerdida").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
    $.ajax({
        type: "POST",
        url: "modulos/registrar_prestamo/creditos_perdidos.php",
        contentType: "application/x-www-form-urlencoded",
        processData: true,
        data: "id_cliente=" + id_cliente,
        success: function(msg) {
            $("#div_prestamosPerdida").html(msg)
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor. " + thrownError, "error")
            $("#div_prestamosPerdida").html('')
        }
    });
}

function PRESTAMO_BuscarClientes() {
    $('#myModal_forms').modal('show');
    $('#body_ModalClientes').html('');
    $.ajax({
        type: "POST",
        url: "modulos/registrar_prestamo/buscar_clientes.php",
        contentType: "application/x-www-form-urlencoded",
        processData: true,
        success: function(msg) {
            $('#body_ModalClientes').html(msg);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor.", "error")
            $('#myModal_forms').modal('hide');
            $('#body_ModalClientes').html('');
        }
    });
}

function PRESTAMO_eliminarCliente(id_cliente) {
    swal({
        title: "¿Seguro de eliminar este cliente?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((isConfirm) => {
        if (isConfirm) {
            $("#BTN_Guardar").attr("disabled", true);
            $("#BTN_Cancelar").attr("disabled", true);
            $("#body_ModalClientes").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
            $.ajax({
                type: "POST",
                url: "modulos/registrar_prestamo/eliminar_cliente.php",
                contentType: "application/x-www-form-urlencoded",
                processData: true,
                data: "id_cliente=" + id_cliente,
                success: function(msg) {
                    if (msg == 0) {
                        Message("Error!", "Algunos datos no se pudieron procesar. Por favor, revise.", "error")
                    } else {
                        if (msg == 1) {
                            Message("Información eliminada correctamente", "", "success")
                            $.ajax({
                                type: "POST",
                                url: "modulos/registrar_prestamo/buscar_clientes.php",
                                contentType: "application/x-www-form-urlencoded",
                                processData: true,
                                success: function(msg) {
                                    $('#body_ModalClientes').html(msg);
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    Message("UPS!", "Error en el servidor.", "error")
                                    $('#myModal_forms').modal('hide');
                                    $('#body_ModalClientes').html('');
                                }
                            });
                        } else {
                            Message("Atención!", "No se puede eliminar un cliente con un prestamo.", "warning")
                            $.ajax({
                                type: "POST",
                                url: "modulos/registrar_prestamo/buscar_clientes.php",
                                contentType: "application/x-www-form-urlencoded",
                                processData: true,
                                success: function(msg) {
                                    $('#body_ModalClientes').html(msg);
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    Message("UPS!", "Error en el servidor.", "error")
                                    $('#myModal_forms').modal('hide');
                                    $('#body_ModalClientes').html('');
                                }
                            });
                        }
                    }
                    $("#BTN_Guardar").removeAttr("disabled", true);
                    $("#BTN_Cancelar").removeAttr("disabled", true);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    Message("UPS!", "Error en el servidor. " + thrownError, "error")
                    $("#BTN_Guardar").removeAttr("disabled", true);
                    $("#BTN_Cancelar").removeAttr("disabled", true);
                }
            });
        } else {
            return false;
        }
    });
}

function PRESTAMO_BuscarPrestamosCliente(id_cliente) {
    $("#PRESTAMO_id_cliente").attr('disabled', true)
    $("#PRESTAMO_id_cliente").val(id_cliente).trigger('change');
    $('#myModal_forms').modal('hide');
    $("#consulta").html('');
    $("#consulta").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
    $.ajax({
        type: "POST",
        url: "modulos/registrar_prestamo/consultar.php",
        contentType: "application/x-www-form-urlencoded",
        data: "id_cliente=" + id_cliente,
        processData: true,
        success: function(msg) {
            $("#rpta").html('');
            $("#consulta").html(msg);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor.", "error")
            $("#rpta").html('');
        }
    });
}

function PRESTAMO_abono(id_prestamo, id_cliente, cliente, tipo_prestamo, total_prestamo) {
    $('#myModal_abonos').modal('show');
    $('#body_ModalAbonos').html('');
    $.ajax({
        type: "POST",
        url: "modulos/registrar_prestamo/form_abonos.php",
        contentType: "application/x-www-form-urlencoded",
        data: "id_prestamo=" + id_prestamo + "&id_cliente=" + id_cliente + "&cliente=" + cliente + "&tipo_prestamo=" + tipo_prestamo + "&total_prestamo=" + total_prestamo,
        processData: true,
        success: function(msg) {
            $('#body_ModalAbonos').html(msg);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor.", "error")
            $('#myModal_abonos').modal('hide');
            $('#body_ModalAbonos').html('');
        }
    });
}

function PRESTAMO_ValidaMaxScore(valor, max_score, mensaje, campo) {
    if (valor > max_score) {
        Message("Atención!", mensaje + " " + max_score, "warning")
        $("#" + campo).val('0')
        return false;
    }
}

function ABONOS_ConsultarAbono(id_cliente, id_prestamo, total_prestamo) {
    $("#div_abonos").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
    $.ajax({
        type: "POST",
        url: "modulos/registrar_prestamo/consultar_abonos.php",
        contentType: "application/x-www-form-urlencoded",
        data: "id_cliente=" + id_cliente + "&id_prestamo=" + id_prestamo + "&total_prestamo=" + total_prestamo,
        processData: true,
        success: function(msg) {
            $("#div_abonos").html(msg);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor.", "error")
            $("#div_abonos").html('');
        }
    });
}

function ABONO_SaveInfo(id_cliente, id_prestamo, total_prestamo) {
    var ABONOS_fecha_abono = $("#ABONOS_fecha_abono").val();
    var ABONOS_valor_abono = $("#ABONOS_valor_abono").val();
    var ABONOS_deudaFinal = $("#ABONOS_deudaFinal").val();
    var PRESTAMO_tipo_prestamo = $("#PRESTAMO_tipo_prestamo").val();
    if ((ABONOS_valor_abono == 0) || (ABONOS_valor_abono == '')) {
        Message("Atención!", "Digite el valor del abono.", "warning")
        return false;
    }
    if (parseFloat(ABONOS_valor_abono) > parseFloat(ABONOS_deudaFinal)) {
        Message("Atención!", "El valor del abono no puede superar el valor del prestamo.", "warning")
        return false;
    }
    if (PRESTAMO_tipo_prestamo == '') {
        Message("Atención!", "Por favor, seleccione el tipo de pago. PAID o FUNDED", "warning")
        return false;
    }
    $("#div_abonos").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
    $.ajax({
        type: "POST",
        url: "modulos/registrar_prestamo/guardar_abono.php",
        contentType: "application/x-www-form-urlencoded",
        data: "id_cliente=" + id_cliente + "&id_prestamo=" + id_prestamo + "&fecha_abono=" + ABONOS_fecha_abono + "&valor_abono=" + ABONOS_valor_abono + "&tipo_prestamo=" + PRESTAMO_tipo_prestamo,
        processData: true,
        success: function(msg) {
            if (msg == 0) {
                Message("Error!", "Algunos datos no se pudieron procesar. Por favor, revise.", "error")
            } else {
                Message("Abono registrado correctamente", "", "success")
                ABONOS_ConsultarAbono(id_cliente, id_prestamo, total_prestamo, total_prestamo)
                $("#ABONOS_valor_abono").val(0)
                $("#ABONOS_fecha_abono").val(fechaActual)
                $("#PRESTAMO_tipo_prestamo").val('')
                //valido para finalizar el prestamo
                PRESTAMO_ConsultaFinPrestamo(id_cliente, id_prestamo, total_prestamo, PRESTAMO_tipo_prestamo);
            }
            $("#div_validaAbonosPrestamo").html('');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor.", "error")
            $("#div_abonos").html('');
        }
    });
}

function ABONO_eliminar(id_abono, id_prestamo, id_cliente, total_prestamo) {
    swal({
        title: "¿Seguro de eliminar este abono?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((isConfirm) => {
        if (isConfirm) {
            $("#div_abonos").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
            $.ajax({
                type: "POST",
                url: "modulos/registrar_prestamo/eliminar_abonos.php",
                contentType: "application/x-www-form-urlencoded",
                processData: true,
                data: "id_abono=" + id_abono,
                success: function(msg) {
                    if (msg == 0) {
                        Message("Error!", "Algunos datos no se pudieron procesar. Por favor, revise.", "error")
                    } else {
                        Message("Información eliminada correctamente", "", "success")
                        ABONOS_ConsultarAbono(id_cliente, id_prestamo, total_prestamo)
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    Message("UPS!", "Error en el servidor. " + thrownError, "error")
                }
            });
        } else {
            return false;
        }
    });
}

function PRESTAMO_ConsultaFinPrestamo(id_cliente, id_prestamo, total_prestamo, PRESTAMO_tipo_prestamo) {
    $("#div_validaAbonosPrestamo").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Consultado abonos del prestamo... Espere </div> </div> </div>');
    $.ajax({
        type: "POST",
        url: "modulos/registrar_prestamo/valida_abonos_prestamo.php",
        contentType: "application/x-www-form-urlencoded",
        processData: true,
        data: "id_cliente=" + id_cliente + "&id_prestamo=" + id_prestamo + "&total_prestamo=" + total_prestamo + "&PRESTAMO_tipo_prestamo=" + PRESTAMO_tipo_prestamo,
        success: function(msg) {
            if (msg == 1) {
                $("#div_validaAbonosPrestamo").html('');
                swal({
                    title: "Los abonos registrados suman el total del prestamo. ¿Desea finalizar este prestamo?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((isConfirm) => {
                    if (isConfirm) {
                        $("#div_validaAbonosPrestamo").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
                        $.ajax({
                            type: "POST",
                            url: "modulos/registrar_prestamo/fin_prestamo.php",
                            contentType: "application/x-www-form-urlencoded",
                            processData: true,
                            data: "id_cliente=" + id_cliente + "&id_prestamo=" + id_prestamo,
                            success: function(msg) {
                                if (msg == 0) {
                                    Message("Error!", "No se pudo actualizar el estado final del prestamo. Por favor, revise.", "error")
                                } else {
                                    Message("Correcto!", "Prestamo finalizado correctamente", "success")
                                    //cierro modal prestamo
                                    $('#myModal_abonos').modal('hide');
                                    //consulto los prestmos activos y finalizados
                                    PRESTAMO_ConsultarPrestamo(id_cliente);
                                }
                                $("#div_validaAbonosPrestamo").html('');
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                Message("UPS!", "Error en el servidor. " + thrownError, "error")
                            }
                        });
                    } else {
                        return false;
                    }
                });
            } else {
                if (msg == 2) {
                    $("#div_validaAbonosPrestamo").html('');
                    swal({
                        title: "Se dispone a finalizar este prestamo en modo FUNDED. Este modo indica que el prestamo queda en perdida. ¿Desea continuar con el proceso?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    }).then((isConfirm) => {
                        if (isConfirm) {
                            $("#div_validaAbonosPrestamo").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
                            $.ajax({
                                type: "POST",
                                url: "modulos/registrar_prestamo/fin_prestamo.php",
                                contentType: "application/x-www-form-urlencoded",
                                processData: true,
                                data: "id_cliente=" + id_cliente + "&id_prestamo=" + id_prestamo + "&PRESTAMO_tipo_prestamo=" + PRESTAMO_tipo_prestamo,
                                success: function(msg) {
                                    if (msg == 0) {
                                        Message("Error!", "No se pudo actualizar el estado final del prestamo. Por favor, revise.", "error")
                                    } else {
                                        Message("Correcto!", "Prestamo finalizado correctamente", "success")
                                        //cierro modal prestamo
                                        $('#myModal_abonos').modal('hide');
                                        //consulto los prestmos activos y finalizados
                                        PRESTAMO_ConsultarPrestamo(id_cliente);
                                    }
                                    $("#div_validaAbonosPrestamo").html('');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    Message("UPS!", "Error en el servidor. " + thrownError, "error")
                                }
                            });
                        } else {
                            return false;
                        }
                    });
                }
            }
            $("#div_validaAbonosPrestamo").html('');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor. " + thrownError, "error")
        }
    });
}

function PRESTAMO_CalculosTipoPrestamo(tipo_prestamo, id_cliente, id_prestamo, total_prestamo) {
    if (tipo_prestamo == '') {
        $("#ABONOS_valor_abono").removeAttr('disabled', true)
        $("#ABONOS_valor_abono").val('0')
    } else {
        if (tipo_prestamo == 'PAID') {
            $("#ABONOS_valor_abono").removeAttr('disabled', true)
            $("#ABONOS_valor_abono").val('0')
        } else {
            if (tipo_prestamo == 'FUNDED') {
                $.ajax({
                    type: "POST",
                    url: "modulos/registrar_prestamo/calcular_90_prestamo.php",
                    contentType: "application/x-www-form-urlencoded",
                    processData: true,
                    data: "tipo_prestamo=" + tipo_prestamo + "&id_cliente=" + id_cliente + "&id_prestamo=" + id_prestamo + "&total_prestamo=" + total_prestamo,
                    success: function(msg) {
                        $("#ABONOS_valor_abono").attr('disabled', true)
                        $("#ABONOS_valor_abono").val(msg)
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        Message("UPS!", "Error en el servidor. " + thrownError, "error")
                    }
                });
            }
        }
    }
}
//MODULO REPORTES
function REPORTES_GenerarInformes() {
    var REPORTES_tipo_informe = $("#REPORTES_tipo_informe").val();
    var REPORTES_id_cliente = $("#REPORTES_id_cliente").val();
    var REPORTES_id_tipo_prestamo = $("#REPORTES_id_tipo_prestamo").val();
    var REPORTES_estado_prestamo = $("#REPORTES_estado_prestamo").val();
    var REPORTES_fecha_inicial = $("#REPORTES_fecha_inicial").val();
    var REPORTES_fecha_final = $("#REPORTES_fecha_final").val();
    var REPORTES_rangoFecha = $("#REPORTES_rangoFecha").val();
    switch (REPORTES_tipo_informe) {
        case '1':
            url = "1_detallado.php";
            break;
        case '2':
            url = "2_prestamos_activos.php";
            break;
    }
    $("#consulta_informes").html('<div class="col-md-12"><div class = "progress rounded-pill mb-2" > <div class = "progress-bar bg-red progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style = "width: 100%" > Procesando informacion...Espere </div> </div> </div>');
    $.ajax({
        type: "POST",
        url: "modulos/reportes/" + url,
        contentType: "application/x-www-form-urlencoded",
        processData: true,
        data: "REPORTES_tipo_informe=" + REPORTES_tipo_informe + "&REPORTES_id_cliente=" + REPORTES_id_cliente + "&REPORTES_id_tipo_prestamo=" + REPORTES_id_tipo_prestamo + "&REPORTES_estado_prestamo=" + REPORTES_estado_prestamo + "&REPORTES_fecha_inicial=" + REPORTES_fecha_inicial + "&REPORTES_fecha_final=" + REPORTES_fecha_final + "&REPORTES_rangoFecha=" + REPORTES_rangoFecha,
        success: function(msg) {
            $("#consulta_informes").html(msg);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            Message("UPS!", "Error en el servidor. " + thrownError, "error")
        }
    });
}

function REPORTES_ValidaFechas(valor_fecha) {
    if (valor_fecha == '') {
        $("#divFechaIncial").hide();
        $("#divFechaFinal").hide();
    } else {
        if (valor_fecha == 'BETWEEN') {
            $("#divFechaIncial").show();
            $("#divFechaFinal").show();
        } else {
            $("#divFechaIncial").show();
            $("#divFechaFinal").hide();
        }
    }
}

function REPORTES_ClearForm() {
    $("#consulta_informes").html('');
    $("#REPORTES_id_cliente").val('').trigger('change');;
    $("#REPORTES_id_tipo_prestamo").val('');
    $("#REPORTES_estado_prestamo").val('');
    $("#REPORTES_rangoFecha").val('');
    $("#divFechaIncial").hide();
    $("#divFechaFinal").hide();
}