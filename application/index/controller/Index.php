<?php
namespace app\index\controller;
use think\Db;
class Index extends common
{
    public function index()
    {
        $sql = Db::query(" SELECT * FROM tb_admin");
        return json($sql);
    }


    public function orderdfk()
    {
        $status_bit = self::pInt('status_bit');
        $sql = Db::query(" SELECT * FROM tb_orderdetails WHERE status_bit = $status_bit");

        foreach($sql as $key => &$vo){
            $vo['total_price'] = $vo['order_money'] + $vo['order_freight'];
        }

        return json($sql);
    }

    public function commodity()
    {
        $sql = Db::query(" SELECT * FROM tb_commodity ");
        return json($sql);
    }

    public function commoditycs()
    {
        $sql = Db::query(" SELECT * FROM tb_commodity LIMIT 3 ");
        return json($sql);
    }

    public function commodityselect()
    {
        $id = self::pInt('id');
        $sql = Db::query(" SELECT * FROM tb_commodity WHERE id = '$id' ");
        return json($sql);
    }

    public function commodityselecttype()
    {
        $type = self::pInt('type');
        $sql = Db::query(" SELECT * FROM tb_commodity WHERE status_bit = '$type' ");
        return json($sql);
    }

    public function commoditysearch()
    {
        $shopname = self::pStr('shopname');
        $type = self::pInt('type');
        $sql = Db::query(" SELECT * FROM tb_commodity WHERE status_bit = '$type' AND commodity_name LIKE '%$shopname%' ");
        return json($sql);
    }

    public function orderdsh()
    {
        $status_bit = self::pInt('status_bit');
        $sql = Db::query(" SELECT * FROM tb_orderdetails WHERE status_bit = $status_bit");

        foreach($sql as $key => &$vo){
            $vo['total_price'] = $vo['order_money'] + $vo['order_freight'];
        }

        return json($sql);
    }

    public function orderyqx()
    {
        $status_bit = self::pInt('status_bit');
        $sql = Db::query(" SELECT * FROM tb_orderdetails WHERE status_bit = $status_bit");

        foreach($sql as $key => &$vo){
            $vo['total_price'] = $vo['order_money'] + $vo['order_freight'];
        }

        return json($sql);
    }

    public function orderysh()
    {
        $status_bit = self::pInt('status_bit');
        $sql = Db::query(" SELECT * FROM tb_orderdetails WHERE status_bit = $status_bit");

        foreach($sql as $key => &$vo){
            $vo['total_price'] = $vo['order_money'] + $vo['order_freight'];
        }

        return json($sql);
    }

    public  function address()
    {
        $sql = Db::query(" SELECT * FROM tb_user");
        return json($sql);
    }

    public function addressupdate()
    {
        $user_name = self::pStr('user_name');
        $user_phone = self::pStr('user_phone');
        $user_time = self::pStr('user_time');
        $user_region = self::pStr('user_region');
        $detailed_address = self::pStr('detailed_address');
        $sql = Db::query(" UPDATE tb_user SET user_name = '$user_name', user_phone = '$user_phone', user_time = '$user_time', user_region = '$user_region', detailed_address = '$detailed_address' WHERE id = '1' ");

        if (!$sql){
            return json(1);
        }else{
            return json(0);
        }
    }

    public function udateadrs()
    {
        $user_name = self::pStr('user_name');
        $user_phone = self::pStr('user_phone');
        $user_region = self::pStr('user_region');
        $detailed_address = self::pStr('detailed_address');
        $sql = Db::query(" UPDATE tb_user SET user_name = '$user_name', user_phone = '$user_phone', user_region = '$user_region', detailed_address = '$detailed_address' WHERE id = '1' ");

        if (!$sql){
            return json(1);
        }else{
            return json(0);
        }
    }

    public function deleteaddress()
    {
        $sql = Db::query("DELETE FROM tb_user WHERE id = '1' ");
        if (!$sql){
            return json(1);
        }else{
            return json(0);
        }
    }

}
