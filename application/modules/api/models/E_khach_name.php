<?php
/**
 * Created by PhpStorm.
 * User: ngoct
 * Date: 8/5/2016
 * Time: 10:20 PM
 */

class E_khach_name extends BF_Model
{
    protected $table_name = 'khach_name';
    protected $key = 'id';
    protected $return_insert_id = true;
    protected $date_format = 'datetime';
    protected $set_created = true;
    protected $created_field = 'created_on';

    public function __construct()
    {
        parent::__construct();
    }
}