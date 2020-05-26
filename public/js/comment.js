$(function () {
  function buildHTML(comment) {
    var html = `<p>
                  <strong>
                    <a href=/user/${comment.comment.user_id}>${comment.user.name}</a >:
                  </strong >
    ${ comment.comment.text}
                </p > `
    return html;
  }
  $('#comment-form').on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    var url = $(this).attr('action');
    $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
    $.ajax({
      url: url,
      type: 'POST',
      data: formData,
      datatype: 'JSON',
      processData: false,
      contentType: false,
    })
      // Ajaxリクエストが成功した場合
      .done(function (data) {
        console.log(data);
        var html = buildHTML(data);
        $('.comments').append(html);
        $('.form-control').val('');
        $('.form__submit').prop('disabled', false);
      })
      // Ajaxリクエストが失敗した場合
      .fail(function (data) {
        alert('何か入力してください');
      });
  });
});
