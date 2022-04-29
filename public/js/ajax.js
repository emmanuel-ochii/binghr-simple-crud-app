// Pass csrf token in ajax header
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

//----- [ button click function ] ----------
$("#createBtn").click(function (event) {
    event.preventDefault();
    $(".error").remove();
    $(".alert").remove();

    let employee_id = $("#employee_id").val();
    let first_name = $("#first_name").val();
    let last_name = $("#last_name").val();
    let email_id = $("#email_id").val();
    let mobile_no = $("#mobile_no").val();
    let role_type = $("#role_type").val();
    let username = $("#username").val();
    let password = $("#password").val();
    let permission = $("#permission").val();

    if (employee_id == "") {
        $("#employee_id").after(
            '<span class="text-danger error"> employee_id is required </span>'
        );
    }

    if (first_name == "") {
        $("#first_name").after(
            '<span class="text-danger error"> first_name is required </span>'
        );
        return false;
    }

    if (last_name == "") {
        $("#last_name").after(
            '<span class="text-danger error"> last_name is required </span>'
        );
        return false;
    }

    if (email_id == "") {
        $("#email_id").after(
            '<span class="text-danger error"> email_id is required </span>'
        );
        return false;
    }

    if (mobile_no == "") {
        $("#mobile_no").after(
            '<span class="text-danger error"> mobile_no is required </span>'
        );
        return false;
    }

    if (role_type == "") {
        $("#role_type").after(
            '<span class="text-danger error"> role_type is required </span>'
        );
        return false;
    }

    if (username == "") {
        $("#username").after(
            '<span class="text-danger error"> username is required </span>'
        );
        return false;
    }

    if (password == "") {
        $("#password").after(
            '<span class="text-danger error"> password is required </span>'
        );
        return false;
    }

    if (permission == "") {
        $("#permission").after(
            '<span class="text-danger error"> permission is required </span>'
        );
        return false;
    }

    var form_data = $("#postForm").serialize();

    // if user id exist
    if ($("#id_hidden").val() != "") {
        updatePost(form_data);
    }

    // else create post
    else {
        createPost(form_data);
    }
});

// create new user
function createPost(form_data) {
    $.ajax({
        url: "user",
        method: "POST",
        data: form_data,
        dataType: "json",

        beforeSend: function () {
            $("#createBtn").addClass("disabled");
            $("#createBtn").text("Processing..");
        },

        success: function (res) {
            $("#createBtn").removeClass("disabled");
            $("#createBtn").text("Save");

            if (res.status == "success") {
                $(".result").html(
                    "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>×</button>" +
                        res.message +
                        "</div>"
                );
            } else if (res.status == "failed") {
                $(".result").html(
                    "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>×</button>" +
                        res.message +
                        "</div>"
                );
            }
        },
    });
}

// update post
function updatePost(form_data) {
    $.ajax({
        url: "user",
        method: "PUT",
        data: form_data,
        dataType: "json",

        beforeSend: function () {
            $("#createBtn").addClass("disabled");
            $("#createBtn").text("Processing..");
        },

        success: function (res) {
            $("#createBtn").removeClass("disabled");
            $("#createBtn").text("Update");

            if (res.status == "success") {
                $(".result").html(
                    "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>×</button>" +
                        res.message +
                        "</div>"
                );
            } else if (res.status == "failed") {
                $(".result").html(
                    "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>×</button>" +
                        res.message +
                        "</div>"
                );
            }
        },
    });
}

// ---------- [ Delete post ] ----------------
function deletePost(user_id) {
    var status = confirm("Do you want to delete this post?");
    if (status == true) {
        $.ajax({
            url: "user/" + user_id,
            method: "DELETE",
            dataType: "json",

            success: function (res) {
                if (res.status == "success") {
                    $("#result").html(
                        "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>×</button>" +
                            res.message +
                            "</div>"
                    );
                } else if (res.status == "failed") {
                    $("#result").html(
                        "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>×</button>" +
                            res.message +
                            "</div>"
                    );
                }
            },
        });
    }
}

$("#addPostModal").on("shown.bs.modal", function (e) {
    var id = $(e.relatedTarget).data("id");
    var employee_id = $(e.relatedTarget).data("employee_id");
    var first_name = $(e.relatedTarget).data("first_name");
    var action = $(e.relatedTarget).data("action");
    

    console.log(employee_id, "id");

    if (action !== undefined) {
        if (action === "view") {
            // set modal title
            $(".modal-title").html("View User Details");

            // pass data to input fields
            $("#employee_id").attr("readonly", true);
            $("#employee_id").val(employee_id);

            $("#first_name").attr("readonly", "true");
            $("#first_name").val(first_name);

            // hide button
            $("#createBtn").addClass("d-none");
        }

        if (action === "edit") {
            $("#employee_id").removeAttr("readonly");
            $("#first_name").removeAttr("readonly");

            // set modal title
            $(".modal-title").html("Update Post");

            $("#createBtn").text("Update User");

            // pass data to input fields
            $("#id_hidden").val(id);
            $("#employee_id").val(employee_id);
            $("#first_name").val(first_name);

            // hide button
            $("#createBtn").removeClass("d-none");
        }
    } else {
        $(".modal-title").html("Add User");

        // pass data to input fields
        $("#employee_id").removeAttr("readonly");
        $("#employee_id").val("");

        $("#first_name").removeAttr("readonly");
        $("#first_name").val("");

        // hide button
        $("#createBtn").removeClass("d-none");
    }
});
