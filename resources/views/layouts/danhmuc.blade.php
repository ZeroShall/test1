<h2>Danh Mục</h2>
<div class="panel-group category-products" id="accordian"><!--category-productsr-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    Linh Kiện Máy Tính
                </a>
            </h4>
        </div>
        <div id="sportswear" class="panel-collapse collapse">
            <div class="panel-body">
                <ul>
                    @foreach($lkmt as $lk)
                        <li><a href="#">{{ $lk->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordian" href="#laptop">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    Máy Tính Xách Tay
                </a>
            </h4>
        </div>
        <div id="laptop" class="panel-collapse collapse">
            <div class="panel-body">
                <ul>
                    @foreach($laptop as $lt)
                        <li><a href="#">{{ $lt->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    GAMEGEAR-COOLING
                </a>
            </h4>
        </div>
        <div id="mens" class="panel-collapse collapse">
            <div class="panel-body">
                <ul>
                    @foreach($game as $g)
                        <li><a href="#">{{ $g->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    Thiết Bị Nghe Nhìn
                </a>
            </h4>
        </div>
        <div id="womens" class="panel-collapse collapse">
            <div class="panel-body">
                <ul>
                    @foreach($tbnghenhin as $nn)
                        <li><a href="#">{{ $nn->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordian" href="#thietbivanphong">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    Thiết Bị Lưu Trữ
                </a>
            </h4>
        </div>
        <div id="thietbivanphong" class="panel-collapse collapse">
            <div class="panel-body">
                <ul>
                    @foreach($tbluutru as $ss)
                        <li><a href="#">{{ $ss->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordian" href="#server">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    Thiết Bị Văn Phòng
                </a>
            </h4>
        </div>
        <div id="server" class="panel-collapse collapse">
            <div class="panel-body">
                <ul>
                    @foreach($tbvanphong as $vp)
                        <li><a href="#">{{ $vp->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


</div><!--/category-products-->