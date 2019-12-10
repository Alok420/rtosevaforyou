<script>
    $(document).ready(function () {
        $('#selectId').on('change', function () {
            var selectVal = $("#selectId option:selected").val();
            var locationVal = $("#locationid option:selected").val();
            getData(selectVal,locationVal);
        });
    });

    function getData(id,locationid) {
        $.post("controller/api1/common/selectOneByColumnLocation.php",
                {
                    id: "" + id,
                    column: "service_category_id",
                    location:locationid,
                    tbname: "services",
                    info: "data saved"

                },
                function (data, status) {
                    if (status == "success") {
                        $('#subservices').empty();
                        var data2 = $.parseJSON(data);
                        for (var i = 0; i <= data2.length; i++) {
                            $('#subservices').append(new Option(data2[i].title, data2[i].id));
                        }

                    }
                });
    }
</script>
<div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200" style="background-color: rgba(201,201,201,.8);" style="position:fixed;">
    <form method="get" action="listings-single.php">
        <div class="row align-items-center">

            <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                <div class="wrap-icon">
                    <span class="icon icon-room"></span>
                    <select name="location_id" id="locationid" class="form-control">
                        <option value="0" selected>Any City</option>
                        <?php $db->select_option("location", "title") ?>
                        
                    </select>
                </div>

            </div>
            <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                <div class="select-wrap">
                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                    <select name="service_category_id" id="selectId" class="form-control">
                        <option value="">Service category</option>

                        <?php $db->select_option("service_category", "title") ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                <div class="select-wrap">
                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                    <select class="form-control rounded" name="service_id" id="subservices">
                        <option value="">Sub-services</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 col-xl-3 ml-auto text-right">
                <input type="submit" class="btn btn-primary btn-block rounded" value="Get Started">
            </div>

        </div>  
    </form>
</div>
