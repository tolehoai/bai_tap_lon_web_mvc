<?php
    class Ajax extends Controller{
        public $sanpham;

        public function __construct(){
            $this->sanpham = $this->model("SanPhamModel");
        }

        function SayHi(){
            echo "Ajax";
        }

        function GetSubMenu(){
            $sanpham = $this->model("SanPhamModel");
            $loaisanpham = $_POST['loaisanpham'];
           $ketqua = $sanpham->GetMenuTheoLoai($loaisanpham);
            $a='';
            while($row_sanpham = mysqli_fetch_array($ketqua)){
                // $a.=$row_sanpham['ten_thuong_hieu'];
                $link= URL."SanPham/".$row_sanpham['nhomhanghoa_slug']."/".$row_sanpham['slug']; 
                echo '<li class="category-sub2-item "> <a href="'.$link.'">'.$row_sanpham['ten_thuong_hieu'].'</a></li>';
            }
            
            // echo '<li class="category-sub2-item ">'.$a.'</li>';
            // echo $a;
        
        
    }


    function LaySanPhamTheoDanhMuc(){
        $sanpham = $this->model("SanPhamModel");
        $danhmuc = $_POST['danhmuc'];
        $tendanhmuc = $_POST['tendanhmuc'];
        $ketqua = $sanpham->GetSanPhamTheoDanhMuc($danhmuc);

        // echo $danhmuc;
        while($row_sanpham = mysqli_fetch_array($ketqua)){
            echo '<a href="./SanPham/ChiTietSanPham/'.$tendanhmuc.'/'.$row_sanpham['MSHS'].'">
            <div class="col-md-3">
                                <div class="sanpham item1">
                                    <img src="./uploads/'.$row_sanpham['HINH'].'"
                                        class="img-fluid" alt="Responsive image">
                                    <div class="product-info text-left m-t-20 new-product-info">
                                        <h6 class="name"><a href="detail.html">'.$row_sanpham['TENHH'].'</a></h6>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price item1">
                                            <h5 class="price text-danger"> '.$row_sanpham['GIA'].' </h5>
                                            <br>
                                            <div class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-warning" type="button">Mua hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </a>
            
            ';
            
        
        }
    }


}
?>