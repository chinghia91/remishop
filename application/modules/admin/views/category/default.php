
    <ul class="shortcut-buttons-set">

        <li><a class="shortcut-button new-article" href="<?php echo base_url() . 'admin/category/edit' ?>"><span class="png_bg">
					Thêm danh mục
				</span></a></li>

    </ul><!-- End .shortcut-buttons-set -->

    <div class="clear"></div> <!-- End .clear -->

<?php if (isset($list_category)): ?>
    <div class="content-box"><!-- Start Content Box -->

    <div class="content-box-header">

        <h3>Danh sách danh mục</h3>
        <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

    <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->

        <table>

            <thead>
            <tr>
                <th><input class="check-all" type="checkbox" /></th>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
            </tr>

            </thead>

            <tfoot>
            <tr>
                <td colspan="6">
                    <div class="bulk-actions align-left">
                        <select name="dropdown">
                            <option value="option1">Choose an action...</option>
                            <option value="option2">Edit</option>
                            <option value="option3">Delete</option>
                        </select>
                        <a class="button" href="#">Apply to selected</a>
                    </div>

                    <div class="pagination">
                        <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                        <a href="#" class="number" title="1">1</a>
                        <a href="#" class="number" title="2">2</a>
                        <a href="#" class="number current" title="3">3</a>
                        <a href="#" class="number" title="4">4</a>
                        <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                    </div> <!-- End .pagination -->
                    <div class="clear"></div>
                </td>
            </tr>
            </tfoot>

            <tbody>
            <?php foreach ($list_category as $category) { ?>
            <tr>
                <td><input type="checkbox" /></td>
                <td><?php echo $category['cate_id'] ?></td>
                <td><?php echo $category['cate_name'] ?></td>
                <td>
                    <!-- Icons -->
                    <a href="<?php echo base_url() . 'admin/category/edit/' . $category['cate_id'] ?>" title="Edit"><img src="/public/admin/images/icons/pencil.png" alt="Edit" /></a>
                    <a href="<?php echo base_url() . 'admin/category/delete/' . $category['cate_id'] ?>" title="Delete"><img src="/public/admin/images/icons/cross.png" alt="Delete" /></a>
                </td>
            </tr>
            <?php } ?>

            </tbody>

        </table>

    </div> <!-- End #tab1 -->
    </div> <!-- End .content-box-content -->

</div> <!-- End .content-box -->
<?php endif; ?>

