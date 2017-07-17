<div id="askMe-{{$transport->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
        <h4 class="modal-title" id="myModalLabel">Uwaga</h4>
      </div>
      <div class="modal-body">
        Chciałbyś edytować wyjazd czy dopisać kierowce?
      </div>
      <div class="modal-footer">
        <button type="button" onclick="location.href=`/Transport/edit/{{$transport->id}}`" class="btn btn-default" data-dismiss="modal">Edytować wyjazd</button>
        <button type="button" onclick="location.href=`/Transport/assign/{{$transport->delivry_date}}`" class="btn btn-primary">Dopisać kierowce</button>


      </div>
    </div>
  </div>
</div>