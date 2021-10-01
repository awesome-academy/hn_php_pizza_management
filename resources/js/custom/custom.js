function update(status, id) {
    const urlHome = route('admin.order.index');
    $.ajax({
        method: 'patch',
        url: route('admin.order.update', {id: id}),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            status: status,
        },
        success: function(response) {
            window.location = urlHome;
        }
    });
}
$(document).ready(function() {
    $('.btn-accept, .btn-reject').click(function(e) {
        e.preventDefault();
        var status = $(this).data('status');
        var id = $(this).data('id');
        update(status, id);
    });
});
