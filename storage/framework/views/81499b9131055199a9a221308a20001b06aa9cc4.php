<?php $__env->startSection('title', 'Product'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Products</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                </li>
                <li class="active">
                    <strong>Product</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Product Table</h5>
                        <div class="ibox-tools">
                        <span id="createRecord" title="Click here to create new product">
                            <a href="<?php echo e(route('product.create')); ?>" class="text-primary create">Create New</a>
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">

                            <table class="table table-striped table-bordered table-hover" id="dtProduct">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td width="25%"><?php echo e($product->title); ?></td>
                                        <td width="25%"><?php echo e($product->quantity); ?></td>
                                        <td width="25%"><?php echo e($product->selling_price); ?></td>
                                        <td width="25%"><a href="<?php echo e(route('product.edit',['id' => $product->id])); ?>"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit</a>&nbsp;<strong>|</strong>&nbsp;<a
                                                    href="<?php echo e(route('product.delete',['id' => $product->id])); ?>"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#dtProduct').DataTable({
                //"ajax": ,
                "pageLength": 5,
                "responsive": true,
                "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]],
                "dom": '<"html5buttons"B>lTfgitp',
                "buttons": [
                    {extend: 'copy'},
                    {extend: 'csv', title: 'Product_File'},
                    {extend: 'excel', title: 'Product_File'},
                    {extend: 'pdf', title: 'Product_File'},
                    {
                        extend: 'print',
                        customize: function (win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ],
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>