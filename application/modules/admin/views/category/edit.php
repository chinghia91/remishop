<?php
$url = base_url() . 'admin/category/edit';
if (isset($category)) {
    $url .= '/' . $category['cate_id'];
}
?>
<div class="content-box"><!-- Start Content Box -->

    <div class="content-box-header">

        <h3>Thêm danh mục</h3>
        <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

        <div class="clear"></div> <!-- End .clear -->
<!--        <div class="tab-content" id="tab2">-->

            <form action="<?php echo $url ?>" method="post">

                <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

                    <p>
                        <label>Tên danh mục</label>
                        <input class="text-input small-input" type="text" id="cate_name" name="cate_name" value="<?php echo isset($category) ? $category['cate_name'] : '' ?>"/> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                        <br /><small>tên danh mục phải là duy nhất</small>
                    </p>

                    <p>
                        <input class="button" type="submit" value="Submit" />
                    </p>

                </fieldset>

                <div class="clear"></div><!-- End .clear -->

            </form>

<!--        </div> <!-- End #tab2 -->

    </div> <!-- End .content-box-content -->

</div> <!-- End .content-box -->