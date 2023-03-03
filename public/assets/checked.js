let idDelete = [];

let Otable;
$(document).on('click', '.delete-all', function (e) {
    var msg = document.getElementById('del_msg').value;
    var confirm = document.getElementById('confirmation').value;
    var cancel = document.getElementById('cancel_it').value;
    var product_Status = "Addresses deleted successfully";
    let blukDelete = { ...Otable }

    let url = $(this).data('url');
    swal({
        title: msg,
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#07be6e',
        cancelButtonColor: '#d57171',
        cancelButtonText: cancel,
        confirmButtonText: confirm
    }, function () {
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                _method: 'DELETE',
                id: idDelete,
            },
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success: function (data) {
                myalert("success", product_Status, 1000);
                idDelete = [];
                console.log(blukDelete)
                window.location.reload();
                // blukDelete.draw();
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
});




$(document).on('change', '.checkboks', function (e) {
    let id = $(this).val();
    if ($(this).is(':checked')) {
        checkBoxChange(id);
    }
    else {
        removeA(idDelete, id);
        uncheckedContent();
    }
    DeleteAll();
    GetData();
});


$(document).on('click', '.checkall', function (e) {
    var ischecked = $(this).is(':checked');
    if (ischecked) {
        $('input[type=checkbox]').prop('checked', 'checked');
        checkAll();
    } else {
        $('input[type=checkbox]').prop('checked', '');
        uncheckAll();
    }
    DeleteAll();
});

function removeA(arr) {
    var what, a = arguments,
        L = a.length,
        ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax = arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}

function checkedContent() {
    $.each(idDelete, function (index, value) {
        $('#select' + value).prop("checked", true);
    });

    var numberOfChecked = $('input:checkbox[name=check_data]:checked').length;
    var numberChecked = $('input:checkbox[name=check_data]').length;


    if (numberOfChecked > 0 && numberOfChecked < numberChecked) {
        $('#checkAll').html('<span id="unchecked" style="cursor: pointer;"><i class="fa fa-minus-square text-primary"></i></span>');
    }
    if (numberOfChecked === 0) {
        $('#checkAll').html('');
    }

    if (numberChecked > 0 && numberOfChecked <= 0) {
        $('#checkAll').html(`<input type="checkbox" class="checkall" id="emailCheck">`);
    }
    if (numberOfChecked === numberChecked) {
        if (numberOfChecked === 0 && numberChecked === 0) {
            $('#checkAll').html(``);
        } else {
            $('#checkAll').html(`<input type="checkbox" class="checkall" id="emailCheck" checked>`);
        }

    }
}

function uncheckedContent() {
    var numberOfChecked = $('input:checkbox[name=check_data]:checked').length;

    var numberChecked = $('input:checkbox[name=check_data]').length;
    if (numberOfChecked === 0) {
        $('#checkAll').html(`<input type="checkbox" class="checkall"/>`);
    }
    if (numberOfChecked > 0) {
        $('#checkAll').html(`<span id="unchecked" style="cursor: pointer;"><i class="fa fa-minus-square text-primary"></i></span>`);
    }
}

function checkAll() {
    $("input:checkbox[name=check_data]:checked").each(function () {
        idDelete.push($(this).val());
    });
}

function uncheckAll() {
    $("input:checkbox[name=check_data]").each(function () {
        var val = $(this).val();
        idDelete.splice(idDelete.indexOf(val), 1);
    });
}

function DeleteAll() {
    if (idDelete.length > 0) {
        $('.delete-all').show();
        $('#lengthcek').html(' ' + idDelete.length);
        return false;
    } else {
        $('.delete-all').hide();
        return true

    }

}
function GetData() {
    if (idDelete.length > 0) {
        console.log('idDelete: ', idDelete);
        localStorage.setItem("checkedIds", idDelete);

        $('.selected_id').show();
        $('#lengthcek').html(' ' + idDelete.length);
        return false;
    } else {
        $('.selected_id').hide();
        return true

    }

}
const checkBoxChange = (id) => {

    idDelete.push(id);
    checkedContent();

}
function emptyArray() {
    idDelete = []
    $('.delete-all').hide();
    // $('#select-all').prop("checked", false);
    return true;
    // document.getElementsByClassName('delete-all-checkBox')[0].checked = !document.getElementsByClassName('delete-all-checkBox')[0].checked;

}
