<script>
    var fields = {};
    function getFieldData(id) {
        var data = $('#' + id).val();
        return data;
    }
    function textType(value) {
        var re = /^[a-zA-Z ]+$/;
        return re.test(value);
    }

    function dateType(value) {
        var re = /^\d{2}([./-])\d{2}\1\d{4}$/;
        return re.test(Date_of_incorporation);
    }
    function numberType(value) {
        var pattern = /^\d+$/;
        return pattern.test(value);
    }
    function textNumType(value) {
        var re = /^(?!\s*$).+/;
        return re.test(value);
    }
    function percentType(value) {
        var re = new RegExp("^[1-9][0-9]?$|^100$");
        return re.test(value);
    }
    function Contact_number(Contact_number) {
        var pattern = new RegExp("^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$");
        return pattern.test(Contact_number);
    }
    function Email_ID(Email_ID) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(Email_ID);
    }

    function ValidatePassword(password) {
        var re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{4,})");
        fields["password"] = re.test(password);
    }

    function confirmpassword(password, confirmpassword) {
        if (password != confirmpassword) {
            return false;
        } else {
            return true;
        }
    }
    function validate(fields) {
        var fields = {
            mobile: Contact_number(getFieldData("mobile")),
            email: Email_ID(getFieldData("email"))
        };
        var finallyreturn = true;
        for (var key in fields) {
            if (fields.hasOwnProperty(key)) {
                console.log(key + "--" + fields[key]);
                if (fields[key] === false) {
                    finallyreturn = false;
                    $(".errormessage").text(key.toString().toUpperCase() + " is invalid").css({"background-color": "red", "color": "white"});
                    $("#" + key.toString()).css("border", "thin solid red");
                    $("#" + key.toString()).css("box-shadow", "1px 1px 10px red");
                    return false;
                } else {
                    finallyreturn = true
                    $("#" + key.toString()).css("border", "thin solid green");
                    $("#" + key.toString()).css("box-shadow", "1px 1px 10px green");
                    $(".errormessage").text(key.toString().toUpperCase() + " is valid ").css({"background-color": "green", "color": "white"});
                }
            }
        }
        return finallyreturn;
    }
</script>
<div class="modal fade text-center py-5"  id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="top-strip"></div>
                <h3 class="pt-5 mb-0 text-secondary">Enquire now?</h3>
                <form method="post" onsubmit="return validate(fields)" action="controller/insert2.php">
                    <div class="input-group mb-3 w-75 mx-auto">
                        <textarea  class="form-control" id="" name="message" placeholder="Your requirement"></textarea>
                    </div>
                    <div class="input-group mb-3 w-75 mx-auto">
                        <input onkeyup="validate(fields)" type="text" class="form-control" id="mobile" name="contact" id="" placeholder="8976110254">
                    </div>
                    <div class="input-group mb-3 w-75 mx-auto">
                        <input onkeyup="validate(fields)" type="email" class="form-control" id="email" name="email" placeholder="info@bitsinfotec.com" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                        <input type="hidden" name="tbname" value="inquiry">
                        <input type="hidden" name="type" value="model-inquiry">
                        <input type="hidden" name="info" value="?info=success">

                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>
                <span class="pb-1 errormessage" style="padding: 10px; border-radius: 10px;"><small></small></span>
                <p class="pb-1 text-muted"><small>Your email is safe with us. We won't spam.</small></p>
                <div class="bottom-strip"></div>
            </div>
        </div>
    </div>
</div>

<!--<div class="modal fade text-center py-5 subscribeModal-lg"  id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="top-strip"></div>
                <h3 class="pt-5 mb-0 text-secondary">Enquire anything ? </h3>
                <form>
                    <div class="input-group mb-3 w-75 mx-auto">
                        <input type="email" class="form-control" placeholder="sunlimetech@gmail.com" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>
                <p class="pb-1 text-muted"><small>Your email is safe with us. We won't spam.</small></p>
                <div class="bottom-strip"></div>
            </div>
        </div>
    </div>-->
<!--</div>-->
<!-- ./subscribe Modal -->