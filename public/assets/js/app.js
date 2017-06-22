/**
 * Created by kienpham on 6/21/17.
 */
/**
 * Init TinyMCE editor
 */
tinymce.init({
    selector: 'textarea',
    menubar: false,
    theme: "modern",
    skin: "lightgray",
    plugins: [
        "advlist autolink lists link image preview",
        "code media contextmenu codesample imagetools",
        "save table directionality emoticons template paste textcolor"
    ],
    toolbar: "styleselect | table codesample | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | forecolor backcolor emoticons | preview"
});
/**
 * Init Autocompele tag
 */
var tags = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('title'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    prefetch: {
        url: window.tagsUrl,
        filter: function (list) {
            return $.map(list, function (title) {
                return {title: title};
            });
        }
    }
});
tags.initialize();
var elt = $('select#tagsinput');
elt.tagsinput({
    typeaheadjs: {
        name: 'tags',
        displayKey: 'title',
        valueKey: 'title',
        source: tags.ttAdapter()
    }
});

app = {

    /**
     * remove post by id
     * @param id
     */
    removePost: function (id) {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            confirmButtonText: 'Yes, delete it!',
            buttonsStyling: false
        }).then(function () {
            $('#post-data').loading('toggle');
            $.ajax({
                url: 'post/delete/'+id,
                data: {"_token": window.csrf_token },
                type: 'DELETE',
                success: function () {
                    swal({
                        title: 'Deleted!',
                        text: 'Your file has been deleted.',
                        type: 'success',
                        confirmButtonClass: "btn btn-success",
                        buttonsStyling: false
                    }).then(function () {
                        setTimeout(function () {
                            document.getElementById('tr_'+id).remove();
                            $('#post-data').loading('stop');
                        },600);
                    });
                }
            });

        });

    },

    /**
     * change status of post by id(is_public:true|false)
     * @param id
     */
    changePostStatus: function (id) {
        $('#post-data').loading('toggle');
        $.ajax({
            url: 'post/change_status/'+id,
            data: {"_token": window.csrf_token },
            type: 'POST',
            success: function () {
                setTimeout(function () {},800);
            }
        });
        $('#post-data').loading('stop');
    }
};