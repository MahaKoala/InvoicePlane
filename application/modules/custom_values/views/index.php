<div id="headerbar">
    <h1><?php echo trans('custom_values'); ?></h1>

    <div class="pull-right">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('custom_fields/form'); ?>">
            <i class="fa fa-plus"></i> <?php echo trans('new'); ?>
        </a>
    </div>

    <div class="pull-right">
        <?php echo pager(site_url('custom_values/index'), 'mdl_custom_values'); ?>
    </div>
</div>

<div id="content" class="table-content">

    <?php echo $this->layout->load_view('layout/alerts'); ?>

    <table class="table table-striped">

        <thead>
        <tr>
            <th><?php echo trans('id'); ?></th>
            <th><?php echo trans('field'); ?></th>
            <th><?php echo trans('elements'); ?></th>
            <th><?php echo trans('type'); ?></th>
            <th><?php echo trans('options'); ?></th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($custom_values as $custom_values) { ?>
          <?php $alpha = str_replace("-","_",strtolower($custom_values->custom_field_type));  ?>
            <tr>
                <td><?php echo $custom_values->custom_field_id; ?></td>
                <td><?php echo $custom_values->custom_field_label; ?></td>
                <td><?php echo $custom_values->count; ?></td>
                <td><?php echo trans($alpha); ?></td>
                <td>
                    <div class="options btn-group">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-cog"></i> <?php echo trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('custom_values/field/' . $custom_values->custom_field_id); ?>">
                                    <i class="fa fa-edit fa-margin"></i> <?php echo trans('edit'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('custom_fields/delete/' . $custom_values->custom_field_id); ?>"
                                   onclick="return confirm('<?php echo trans('delete_record_warning'); ?>');">
                                    <i class="fa fa-trash-o fa-margin"></i> <?php echo trans('delete'); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>

    </table>

</div>