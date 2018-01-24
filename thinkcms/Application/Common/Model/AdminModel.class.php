<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/27 0027
 * Time: 上午 8:20
 */
namespace Common\Model;
use Think\Model;

class AdminModel extends Model{
    private $_db='';
    public function __construct(){
        return $this->_db=M('admin');
    }
    public function getAdminByUsername($username='') {
        $res = $this->_db->where('username="'.$username.'"')->find();
        return $res;
    }
}