<?php

?>
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    
	<div class="main-content">
        
		<div class="container-fluid">
            <!-- OVERVIEW -->
            <?php
                if(isset($_SESSION["thanhcong"])){
                    echo'
                    <div class="alert alert-success" role="alert">
                  Thêm danh mục thành công
                  </div>
                    ';
                    session_destroy ();
                }
                if(isset($_SESSION["thatbai"])){
                    echo'
                    <div class="alert alert-danger" role="alert">
  Thêm danh mục không thành công
</div>
                    ';
                    session_destroy ();
                }
            ?>
            
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Thêm danh mục</h3>
                    
				</div>
            
			</div>
            <!-- END OVERVIEW -->
            
            <p class="panel-subtitle">Tên danh mục</p>
            <form action="<?php echo URL;?>Admin/AddDanhMuc" method="POST" name="frmThemDanhMuc" id="frmThemDanhMuc">
                <div class="form-group">
                        <input type="text" class="form-control" name="txtTenDanhMuc" placeholder="Nhập tên danh mục cần thêm">
                        <button type="submit" name="btnThemDanhMuc" class="btn btn-primary">Thêm danh mục</button>
                    </div>
            </form>
            
		</div>
    </div>
    
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
<div class="clearfix"></div>

</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="<?php echo URL;?>mvc/views/pages/admin/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo URL;?>mvc/views/pages/admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo URL;?>mvc/views/pages/admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script
	src="<?php echo URL;?>mvc/views/pages/admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?php echo URL;?>mvc/views/pages/admin/assets/vendor/chartist/js/chartist.min.js"></script>
<script src="<?php echo URL;?>mvc/views/pages/admin/assets/scripts/klorofil-common.js"></script>

</body>

</html>