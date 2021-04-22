<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
    <title>Product spec sheet</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">HCFMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbar" class="collapse navbar-collapse">
        <div class="navbar-nav">
           <a class="nav-link nav-link active" href="">Home</a>
           <a class="nav-item nav-link" href="">Products</a>
           <a class="nav-item nav-link" href="">Puchase Order</a>
           <a class="nav-item nav-link" href="">Employees</a>
           <a class="nav-item nav-link" href="">Warehouse</a>
           <a class="nav-item nav-link" href="">Tools</a>
        </div>
        <span class="navbar-text">导航条文本</span>
        <form action="#" class="form-inline">
            <input type="text" name="" class="form-control-sm" placeholder="输入查找内容">
            <button class="btn btn-light btn-sm btn-outeline" type="button">search</button>
        </form>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="display-4 m-2"><small>Product specification Sheet</small></div>
        </div>
        <div class="col-sm-3">
           <span class="badge badge-info">Created:{{ date('Y-m-d') }}</span>
           <span class="badge badge-warning">Updated:{{ date('Y-m-d') }}</span>
        </div>
    </div>
</div>

<div class="container">
    <div class="card mt-3 shadow">
        <div class="card-header h5">- Product Information</div>
        <div class="crad-body p-2">
            <table class="table table-striped table-sm">
                <tr>
                    <td width="160px">Item#</td>
                    <td class="h6">5912412-200SK</td>
                </tr>
                <tr>
                    <td width="160px">Item name</td>
                    <td class="h6">LOT 4 HOUSSE RANGEMENT</td>
                </tr>
                <tr>
                    <td width="160px">Description 1</td>
                    <td class=""><quoteblock>四件套无纺布袋+真空袋
2件玫红色手提袋40x40x25cm
2件真空袋80x60x32cm,
2件紫色手提袋：65x50x27cm,
2件立体真空袋110x80x40cm,
无纺布袋面料克重：120g，
真空袋材质厚度：<kbd>PA</kbd>+<kbd>PE</kbd> 0.07mm,透明拉链/白色阀扣
1pc manual pump（手工抽气泵）</quoteblock></td>
                </tr>
                <tr>
                    <td width="160px">Description 2</td>
                    <td class="h6"></td>
                </tr>
                <tr>
                    <td width="160px">Features</td>
                    <td class="">四件套无纺布袋+真空袋
2件玫红色手提袋40x40x25cm
2件真空袋80x60x32cm,
2件紫色手提袋：65x50x27cm,
2件立体真空袋110x80x40cm,
无纺布袋面料克重：120g，
真空袋材质厚度：<kbd>PA</kbd>+<kbd>PE</kbd> 0.07mm,透明拉链/白色阀扣
1pc manual pump（手工抽气泵</td>
                </tr>
                <tr>
                    <td width="160px">Gross weight</td>
                    <td class="h6">0.20 kg</td>
                </tr>
                <tr>
                    <td width="160px">Net Content</td>
                    <td class="h6">0.18 kg</td>
                </tr>
                <tr>
                    <td width="160px">Packpage Size:</td>
                    <td class="h6">270x149x36</td>
                </tr>
                <tr>
                    <td width="160px">Gross Weight<br>(carton)</td>
                    <td class="h6"> kg</td>
                </tr>
                <tr>
                    <td width="160px">Net Content<br>(Carton)</td>
                    <td class="h6">0.18 kg</td>
                </tr>
                <tr>
                    <td width="160px">Carton Size:</td>
                    <td class="h6">270x149x36</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="card mt-2 shadow">
        <div class="card-header"><h5>- Custom Information</h5></div>
        <div class="crad-body p-2">
            <table class="table table-bordered table-sm">
                <tr>
                    <td width="120px">Custom</td>
                    <td class="">PMI</td>
                    <td width="120px">Sales Region</td>
                    <td width="">US</td>
                </tr>
                <tr>
                    <td width="120px">Custom</td>
                    <td class="">PMI</td>
                    <td width="120px">Sales Region</td>
                    <td width="">US</td>
                </tr>
                <tr>
                    <td width="120px">Custom</td>
                    <td class="">PMI</td>
                    <td width="120px">Sales Region</td>
                    <td width="">US</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="card mt-2 shadow">
        <div class="card-header h5">- 产品组成</div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th width="20px">#</th>
                        <th width="105px">名称</th>
                        <th width="90px">袋型</th>
                        <th width="90px">装配数</th>
                        <th width="120px">印色</th>
                        <th width="80px">材质</th>
                        <th width="80px">厚度</th>
                        <th width="160px">工艺</th>
                        <th width="auto">备注</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>70x100x32</td>
                        <td><span class="badge badge-warning">cube</span></td>
                        <td><span class="h6">3</span></td>
                        <td>Magicbag®</td>
                        <td><kbd>PA</kbd>+<kbd>PE</kbd></td>
                        <td>0.07mm</td>
                        <td>拉链圆角</td>
                        <td>其他一些说明</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>45x60</td>
                        <td><span class="badge badge-info">travel</span></td>
                        <td>3</td>
                        <td>SpacePlus©</td>
                        <td><kbd>PA</kbd>+<kbd>PE</kbd></td>
                        <td>0.07mm</td>
                        <td>拉链圆角</td>
                        <td>其他一些说明</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>45x60</td>
                        <td><span class="badge badge-primary">flat</span></td>
                        <td>3</td>
                        <td>Smartbag™</td>
                        <td><kbd>PA</kbd>+<kbd>PE</kbd></td>
                        <td>0.07mm</td>
                        <td>拉链圆角</td>
                        <td>其他一些说明</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>70x100x32</td>
                        <td><span class="badge badge-warning">cube</span></td>
                        <td><span class="h6">3</span></td>
                        <td>Magicbag®</td>
                        <td><kbd>PA</kbd>+<kbd>PE</kbd></td>
                        <td>0.07mm</td>
                        <td>拉链圆角</td>
                        <td>其他一些说明</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>45x60</td>
                        <td><span class="badge badge-info">travel</span></td>
                        <td>3</td>
                        <td>SpacePlus©</td>
                        <td><kbd>PA</kbd>+<kbd>PE</kbd></td>
                        <td>0.07mm</td>
                        <td>拉链圆角</td>
                        <td>其他一些说明</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>45x60</td>
                        <td><span class="badge badge-primary">flat</span></td>
                        <td>3</td>
                        <td>Smartbag™</td>
                        <td><kbd>PA</kbd>+<kbd>PE</kbd></td>
                        <td>0.07mm</td>
                        <td>拉链圆角</td>
                        <td>其他一些说明</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>70x100x32</td>
                        <td><span class="badge badge-warning">立体</span></td>
                        <td><span class="h6">3</span></td>
                        <td>Magicbag®</td>
                        <td><kbd>PA</kbd>+<kbd>PE</kbd></td>
                        <td>0.07mm</td>
                        <td>拉链圆角</td>
                        <td>其他一些说明</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>45x60</td>
                        <td><span class="badge badge-info">手卷</span></td>
                        <td>3</td>
                        <td>SpacePlus©</td>
                        <td><kbd>PA</kbd>+<kbd>PE</kbd></td>
                        <td>0.07mm</td>
                        <td>拉链圆角</td>
                        <td>其他一些说明</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>80x120</td>
                        <td><span class="badge badge-primary">平口</span></td>
                        <td>3</td>
                        <td>Smartbag™</td>
                        <td><kbd>PA</kbd>+<kbd>PE</kbd></td>
                        <td>0.07mm</td>
                        <td>拉链圆角</td>
                        <td>其他一些说明</td>
                    </tr>
                     <tr>
                        <td>1</td>
                        <td>145x70</td>
                        <td><span class="badge badge-danger">挂钩</span></td>
                        <td>3</td>
                        <td>Smartbag™</td>
                        <td><kbd>PA</kbd>+<kbd>PE</kbd></td>
                        <td>0.07mm</td>
                        <td>拉链圆角</td>
                        <td>其他一些说明</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>240x250</td>
                        <td><span class="badge badge-success">拼接平口</span></td>
                        <td>1</td>
                        <td>StorageLogic™</td>
                        <td><kbd>PA</kbd>+<kbd>PE</kbd></td>
                        <td>0.07mm</td>
                        <td>拉链圆角</td>
                        <td>其他一些说明</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <p class="mt-2">安装了不少的拼音输入法，比较中意的只有华宇和谷歌拼音两种，其他输入法多少要夹带一些私活在里面，比如莫名其妙的给你安装个软件，或者不时的跳几个广告窗口。</p>
</div>
<div class="m-5 btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-success active">
        <input name="select-language" type="radio">PHP
    </label>
    <label class="btn btn-success">
        <input name="select-language" type="radio">Python
    </label>
    <label class="btn btn-success">
        <input name="select-language" type="radio">Goland
    </label>
</div>
<div class="m-5 btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-success active">
        <input name="select-language" type="checkbox">PHP
    </label>
    <label class="btn btn-success">
        <input name="select-language" type="checkbox">Python
    </label>
    <label class="btn btn-success">
        <input name="select-language" type="checkbox">Goland
    </label>
</div>
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
