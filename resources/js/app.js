jQuery(document).ready(function ($) {
    function openForm(isForm) {
        $(isForm).show();
    }
    function closeForm(isForm) {
        $(isForm).hide();
    }
    $("#btn_add_post").click(function (e) {
        e.preventDefault();
        openForm("#form_create_post");
    });
    $("#btn_add_category").click(function (e) {
        e.preventDefault();
        openForm("#form_create_category");
    });
    $("#btn_cancel_form_create_post").click(function (e) {
        e.preventDefault();
        closeForm("#form_create_post");
    });
    $("#btn_cancel_form_create_category").click(function (e) {
        e.preventDefault();
        closeForm("#form_create_category");
    });
    $(".btn_delete_post").click((e) => {
        if (!confirm("Delete post?")) {
            e.preventDefault();
        }
    });
    $(".btn_delete_category").click((e) => {
        if (!confirm("Delete category?")) {
            e.preventDefault();
        }
    });
});
