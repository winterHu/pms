<?php
date_default_timezone_set('Asia/Shanghai');
$data = array(
    array('高级大床房', 10, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15),
    array('高级双床房', 10, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15),
    array('豪华景观复式大床房', 10, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15),
    array('精品景观双大床套房', 10, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15),
);

$hotel_name = '广州保利世贸';
$ctrip_hotel_id = 30150;

$time_data = array('06-28', '06-29', '06-30', '07-01', '07-02');
$avg_data = array('预计均价', '300.95', '111.11', '299.12', '0', '0');
$rate_data = array('预计出租率', '11.11%', '99.11%', '0', '0', '0');

get_png($ctrip_hotel_id, $hotel_name, $data, $rate_date, $avg_data, $time_data);

function get_png ($ctrip_hotel_id, $hotel_name, $data, $rate_data, $avg_data, $time_data)
{
    $row_number = count($data) + 4;
    $params = [
        'row' => $row_number,//数据的行数
        'file_name' => $ctrip_hotel_id .'_'. date('YmdHis') . '.png',
        'title' => '远期房量['  . $hotel_name . ']',
        'table_time' => '2018-4-29 22:50:43',
        'data' => $data
    ];

    $base = [
        'border' => 10,//图片外边框
        'file_path' => '/home/winter/',//图片保存路径
        'title_height' => 30,//报表名称高度
        'title_font_size' => 16,//报表名称字体大小
        'font_ulr' => '/home/winter/MSYHL.TTC',//字体文件路径
        'text_size' => 12,//正文字体大小
        'row_hight' => 30,//每行数据行高
        'filed_id_width' => 100,//序号列的宽度
        'filed_name_width' => 50,//玩家名称的宽度
        'filed_data_width' => 50,//数据列的宽度
        'table_header' => ['房型','总房量','可售','预订','入住','可售','预订','入住','可售','预订','入住','可售','预订','入住','可售','预订','入住'],//表头文字
        'column_text_offset_arr' => [100,50,45,50,50,50,50,50,50,50,50,50,50,50,50,50,50],//表头文字左偏移量
        'row_text_offset_arr' => [150,70,70,70,70,70,70,70,70,70,70,70,70,70,70,70,70],//数据列文字左偏移量
        'table_date' => $time_data,//表头文字
        'column_date_offset_arr' => [100,100,100,100,100],//表头文字左偏移量
        'rate_date' => $rate_data,//表头文字
        'rate_date_offset_arr' => [150,100,100,100,100,100],//表头文字左偏移量
        'avg_date' => $avg_data,//表头文字
        'avg_date_offset_arr' => [150,100,100,100,100,100],//表头文字左偏移量
        ];

    $base['img_width'] = $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 15 + $base['border'] * 2;//图片宽度
    $base['img_height'] = $params['row'] * $base['row_hight'] + $base['border'] * 2 + $base['title_height'];//图片高度
    $border_top = $base['border'] + $base['title_height'];//表格顶部高度
    $border_bottom = $base['img_height'] - $base['border'];//表格底部高度
    $base['column_x_arr'] = [
        $base['border'] + $base['filed_id_width'],//第一列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'],//第二列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 1,//第三列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 2,//第四列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 3,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 4,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 5,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 6,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 7,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 8,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 9,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 10,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 11,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 12,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 13,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 14,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 15,//第五列边框线x轴像素
        ];

    $img = imagecreatetruecolor($base['img_width'], $base['img_height']);
    $bg_color = imagecolorallocate($img, 151, 196, 255);
    $text_coler = imagecolorallocate($img, 0, 0, 0);
    $border_coler = imagecolorallocate($img, 0, 0, 0);
    $white_coler = imagecolorallocate($img, 255, 255, 255);
    imagefill($img, 0, 0, $bg_color);
    imagefilledrectangle($img, $base['border'], $base['border'] + $base['title_height'], $base['img_width'] - $base['border'], $base['img_height'] - $base['border'], $border_coler);
    imagefilledrectangle($img, $base['border'] + 2, $base['border'] + $base['title_height'] + 2, $base['img_width'] - $base['border'] - 2, $base['img_height'] - $base['border'] - 2, $bg_color);

    $base['column_x_arr_date'] = [
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 3,//第三列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 6,//第四列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 9,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 12,//第四列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 15,//第五列边框线x轴像素
    ];
    foreach($base['column_x_arr_date'] as $key => $x){
        imageline($img, $x, $border_top, $x, $border_bottom,$border_coler);//画纵线
        imagettftext($img, $base['text_size'], 0, $x - $base['column_text_offset_arr'][$key] + 1, $border_top + $base['row_hight'] - 8, $text_coler, $base['font_ulr'], $base['table_date'][$key]);//写入表头文字
    }
    $border_top = $border_top + 30;
    imageline($img, $base['border'], $border_top, $base['img_width'] - $base['border'], $border_top, $border_coler);
    //画表格纵线 及 写入表头文字
    foreach($base['column_x_arr'] as $key => $x){
        imageline($img, $x, $border_top, $x, $border_bottom,$border_coler);//画纵线
        imagettftext($img, $base['text_size'], 0, $x - $base['column_text_offset_arr'][$key] + 1, $border_top + $base['row_hight'] - 10, $text_coler, $base['font_ulr'], $base['table_header'][$key]);//写入表头文字
    }
    //画表格横线
    foreach($params['data'] as $key => $item){
        $border_top += $base['row_hight'];
        imageline($img, $base['border'], $border_top, $base['img_width'] - $base['border'], $border_top, $border_coler);
        $sub = 0;
        foreach ($item as $value){
            imagettftext($img, $base['text_size'], 0, $base['column_x_arr'][$sub] - $base['row_text_offset_arr'][$sub], $border_top + $base['row_hight'] - 10, $text_coler, $base['font_ulr'], $value);//写入data数据
            $sub++;
        }
    }

    $base['rate_dates'] = [
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'],//第三列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 3,//第三列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 6,//第四列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 9,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 12,//第四列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 15,//第五列边框线x轴像素
        ];
    $border_top = $border_top + 30;
    foreach($base['rate_dates'] as $key => $y){
        //$border_top += $base['row_hight'];
        //imageline($img, $y, $border_top, $y, $border_bottom,$border_coler);//画纵线
        imageline($img, $base['border'], $border_top, $base['img_width'] - $base['border'], $border_top, $border_coler);
        imagettftext($img, $base['text_size'], 0, $y - $base['rate_date_offset_arr'][$key] + 1, $border_top + $base['row_hight'] - 10, $text_coler, $base['font_ulr'], $base['rate_date'][$key]);//写入表头文字
    }
    $base['avg_dates'] = [
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'],//第三列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 3,//第三列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 6,//第四列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 9,//第五列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 12,//第四列边框线x轴像素
        $base['border'] + $base['filed_id_width'] + $base['filed_name_width'] + $base['filed_data_width'] * 15,//第五列边框线x轴像素
        ];
    $border_top = $border_top + 30;
    foreach($base['avg_dates'] as $key => $x){
        imageline($img, $base['border'], $border_top, $base['img_width'] - $base['border'], $border_top, $border_coler);
        imagettftext($img, $base['text_size'], 0, $x - $base['avg_date_offset_arr'][$key] + 1, $border_top + $base['row_hight'] - 8, $text_coler, $base['font_ulr'], $base['avg_date'][$key]);//写入表头文字
    }
    //计算标题写入起始位置
    $title_fout_box = imagettfbbox($base['title_font_size'], 0, $base['font_ulr'], $params['title']);//imagettfbbox() 返回一个含有 8 个单元的数组表示了文本外框的四个角：
    $title_fout_width = $title_fout_box[2] - $title_fout_box[0];//右下角 X 位置 - 左下角 X 位置 为文字宽度
    $title_fout_height = $title_fout_box[1] - $title_fout_box[7];//左下角 Y 位置- 左上角 Y 位置 为文字高度
    //居中写入标题
    imagettftext($img, $base['title_font_size'], 0, ($base['img_width'] - $title_fout_width)/2, $base['title_height'], $text_coler, $base['font_ulr'], $params['title']);
    //写入制表时间
    imagettftext($img, $base['text_size'], 0, $base['border'], $base['title_height'], $text_coler, $base['font_ulr'], '时间：' . $params['table_time']);

    $save_path = $base['file_path'] . $params['file_name'];

    if(!is_dir($base['file_path']))//判断存储路径是否存在，不存在则创建
    {
        mkdir($base['file_path'],0777,true);//可创建多级目录
    }

    imagepng($img, $save_path);//输出图片，输出png使用imagepng方法，输出gif使用imagegif方法
    return $save_path;
}
