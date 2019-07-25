  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" ng-controller="itinerarioController">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Términos y Condiciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li ng-repeat="termino in terminosDelEste">{{termino.texto}}</li>
                    <li>
                        Agencia de viajes y tour operador turístico Omtour SpA. estipula los siguientes plazos de pago:
                        <ul>
                            <li>Pago de inscripción equivalente a 500 Dolares en moneda nacional según valor cambio del día.</li>
                            <li>Según viaje “ESPAÑA MARRUECOS MAGIA Y CULTURA las politicas de anulación o Reembolso, y fechas estipuladas de pagos son:</li>
                            <li>
                            -Calendario de  pagos :<br>
                           Valor cuota por persona en Hab doble<br>
                           1°  Pago   	: 1.665  Al 15 Junio 2019<br>
                           2° Pago	:  1.665  Al 15 Julio  2019 <br>
                           3° Pago	: 1.665	Al  15 Agosto 2019<br>
                            Valor cuota por persona en Hab Single<br>
                            1°  Pago   	: 2.037  Al 15 Junio 2019 <br> 
                            2° Pago	: 2.037  Al 15 Julio  2019 <br>
                            3° Pago	: 2.036	Al  15 Agosto 2019<br>

                            Se solicita  el pago  total  hasta el 15 de  Agosto  2019.
                            </li>
                        </ul>
                    </li>
                </ul>
                <h5 class="bold">GASTOS Y PENALIDADES EN CASO DE ANULACIÓN</h5>
                <ul>
                    <ul>
                    <li> Anulación desde  la Inscripción  hasta el 20 de Junio , pierde 50%  del abono </li>
                    <li>Anulación desde el 21 de Junio al 20 de Julio, pierde 80%  del abono </li>
                    <li> Anulación del  21  Julio al  20 	Agosto,  existirá  cargo  del 20%</li>
                     <li> Anulación del  21  Agosto  al 20 Septiembre, existirá  cargo  del 60%</li>
                     <li> Anulación del  21  Septiembre hasta la fecha de viaje  , existirá  cargo  del 90%.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>