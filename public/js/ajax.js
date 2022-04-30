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
    let permission_admin = $("#permission_admin").val();
    let permission_employee = $("#permission_employee").val();
    let permission_hr = $("#permission_hr").val();

    if (employee_id == "") {
        $("#employee_id").after(
            '<span class="text-danger error"> Employee ID is required </span>'
        );
    }

    if (first_name == "") {
        $("#first_name").after(
            '<span class="text-danger error"> First Name is required </span>'
        );
    }

    if (last_name == "") {
        $("#last_name").after(
            '<span class="text-danger error"> last_name is required </span>'
        );
    }

    if (email_id == "") {
        $("#email_id").after(
            '<span class="text-danger error"> email_id is required </span>'
        );
    }

    if (mobile_no == "") {
        $("#mobile_no").after(
            '<span class="text-danger error"> mobile_no is required </span>'
        );
    }

    if (role_type == "") {
        $("#role_type").after(
            '<span class="text-danger error"> role_type is required </span>'
        );
    }

    if (username == "") {
        $("#username").after(
            '<span class="text-danger error"> username is required </span>'
        );
    }

    if (password == "") {
        $("#password").after(
            '<span class="text-danger error"> password is required </span>'
        );
    }

    if (permission == "") {
        $("#permission").after(
            '<span class="text-danger error"> Permission is required </span>'
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
function timeout() {
    timeout = setTimeout(function(){console.log('Success!!!')}, 3000);
}
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
                    `<div class="message is-success">
                        <div class="message-body">
                          ${res.message}
                        </div>
                    </div>`
                );
                timeout();
                window.location.href = "/user";
            } else if (res.status == "failed") {
                $(".result").html(
                    `<div class="message is-danger">
                        <div class="message-body">
                          ${res.message}

                        </div>
                    </div>`
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
                    `<div class="message is-success">
                        <div class="message-body">
                          ${res.message}

                        </div>
                    </div>`
                );
            } else if (res.status == "failed") {
                $(".result").html(
                    `<div class="message is-danger">
                        <div class="message-body">
                          ${res.message}

                        </div>
                    </div>`
                );
            }
        },
    });
}

// ---------- [ Delete post ] ----------------
function deletePost(user_id) {
    var status = confirm("Do you want to delete this user?");

    if (status == true) {
        $.ajax({
            url: "user/" + user_id,
            method: "delete",
            dataType: "json",

            success: function (res) {
                if (res.status == "success") {
                    // Create an instance of Notyf
                    let notyf = new Notyf();

                    notyf.error({
                        message: res.message,
                        duration: 9000,
                        icon: false,
                    });
                    window.location.href = "/user";
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

$("#add-user-form-modal").on("shown.bs.modal", function (e) {
    var id = $(e.relatedTarget).data("id");
    var employee_id = $(e.relatedTarget).data("employee_id");
    var first_name = $(e.relatedTarget).data("first_name");
    var last_name = $(e.relatedTarget).data("last_name");
    var email_id = $(e.relatedTarget).data("email_id");
    var mobile_no = $(e.relatedTarget).data("mobile_no");
    var role_type = $(e.relatedTarget).data("role_type");
    var username = $(e.relatedTarget).data("username");
    var password = $(e.relatedTarget).data("password");
    var permission = $(e.relatedTarget).data("permission");
    var permission_admin = $(e.relatedTarget).data("permission_admin");
    var permission_employee = $(e.relatedTarget).data("permission_employee");
    var permission_hr = $(e.relatedTarget).data("permission_hr");
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

            $("#last_name").attr("readonly", "true");
            $("#last_name").val(last_name);

            $("#email_id").attr("readonly", "true");
            $("#email_id").val(email_id);

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
