$('#catEdit').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) ;
  var catname = button.data('cat') ;
  var catslug = button.data('catslug');
  var catid=button.data('catid');
  var modal = $(this)

  modal.find('.modal-body #name').val(catname);
  modal.find('.modal-body #slug').val(catslug);
  modal.find('.modal-body #catid').val(catid);
});

$('#tagEdit').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) ;
  var tagname = button.data('tagname') ;
  var tagslug = button.data('tagslug');
  var tagid=button.data('tagid');
  var modal = $(this)

  modal.find('.modal-body #tagnameid').val(tagname);
  modal.find('.modal-body #tagslugid').val(tagslug);
  modal.find('.modal-body #tagid').val(tagid);
});