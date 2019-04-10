<?php

// 定义日期时间类
class DateTime2
{
    // 返回当前日期数据
    public function getDate()
    {
        return date("Y-m-d");
    }

    public function getTime()
    {
        return date("H:i:s");
    }

    public function getDateTime()
    {
        return date("Y-m-d H:i:s");
    }
}



