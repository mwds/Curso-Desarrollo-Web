/* Author:

*/

$(function () {
  $('.custom-checkbox input[type="checkbox"]').on('change', function() {
    var checkboxID = $(this).attr('id').substr(9,3);
    var trashID = 'a#trash-' + checkboxID
    var trID = 'tr#item-' + checkboxID

    if($(this).attr('checked') == 'checked') {
      $(trashID).addClass('show')
      $(trID).addClass('selected')
      $('#table-footer-1').css('display','none')
      $('#table-footer-2').css('display','block')
    } else {
      $(trashID).removeClass('show')
      $(trID).removeClass('selected')
      $('#table-footer-1').css('display','block')
      $('#table-footer-2').css('display','none')
    }
  });

  $(".table-box tr td").hover(
    function () {
      var trID = $(this).parent().attr('id').substr(5,3);
      var trashID = 'a#trash-' + trID
      var trashIDhas = $(trashID).hasClass('show')

      if(!trashIDhas)
      {
        $(trashID).addClass('show')
      }
    },
    function () {
      var trID = $(this).parent().attr('id').substr(5,3);
      var checkboxID = '#checkbox-' + trID;

      if($(checkboxID).attr('checked') == undefined) {
        var trashID = 'a#trash-' + trID
        $(trashID).removeClass('show')
      }
    }
  );

  $('.table-box .list a').on('click', function(event) {
    event.preventDefault();

    var listID = $(this).attr('id').substr(18,3);
    var trID = '#item-' + listID;
    var detailID = '#item-detail-' + listID;

    if($(this).hasClass('list-active')) {
      $(this).removeClass('list-active')
      $(trID).removeClass('open')
      $(detailID).attr("style", "display:none;")
    } else {
      $(this).addClass('list-active')
      $(trID).addClass('open')
      $(detailID).removeAttr("style")
    }

    event.stopPropagation;
    return false;
  });

  $("#select-all").live("click", function() {
    $("table tbody tr td input:checkbox").each(function() {
      this.checked = "checked";
      var checkboxID = $(this).attr('id').substr(9,3);
      var trashID = 'a#trash-' + checkboxID
      var trID = 'tr#item-' + checkboxID

      if($(this).attr('checked') == 'checked') {
        $(trashID).addClass('show')
        $(trID).addClass('selected')
        $('#table-footer-1').css('display','none')
        $('#table-footer-2').css('display','block')
      } else {
        $(trashID).removeClass('show')
        $(trID).removeClass('selected')
        $('#table-footer-1').css('display','block')
        $('#table-footer-2').css('display','none')
      }
    });
  });
});





