<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 上传文件配置信息
// +----------------------------------------------------------------------

return [
    //图片大小限制
    'img_size' => 1024*1024*100,
    //文件大小限制
    'file_size'=> 1024*1024*100,
    //保存路径
    'save_path' => './uploads',
    //图片压缩尺寸比例0-1之间
    'compression_size' => 0.4,
];