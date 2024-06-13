<?php

namespace App\Helpers;

use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class Helper
{
    public static function get_data_query($table, $where, $orderBy1, $orderBy2, $all)
    {
        if (!empty($all)) {
            return $data = DB::table($table)->where($where)->orderBy($orderBy1, $orderBy2)->get();
        } else {
            return $data = DB::table($table)->where($where)->orderBy($orderBy1, $orderBy2)->first();
        }
    }

    public static function get_all_data_query($table, $orderBy1, $orderBy2, $all)
    {
        if (!empty($all)) {
            return $data = DB::table($table)->orderBy($orderBy1, $orderBy2)->get();
        } else {
            return $data = DB::table($table)->orderBy($orderBy1, $orderBy2)->first();
        }
    }

    public static function delete_query($table, $where)
    {
        return $result = DB::table($table)->where($where)->delete();
    }

    public static function insert_query($table, $data)
    {
        DB::table($table)->insert($data);
        return $result = DB::getPdo()->lastInsertId();
    }

    public static function update_query($table, $data, $where)
    {
        return $result = DB::table($table)->where($where)->update($data);
    }

    public static function get_count($table, $where)
    {
        if (!empty($where)) {
            return $result = DB::table($table)->where($where)->count();
        } else {
            return $result = DB::table($table)->count();
        }
    }

    public static function send_email($email,$subject,$html_template,$comp_id){
        if(!empty($comp)){
            $smtp_details = Helper::get_data_query('settings', array('company_id' => $comp_id, 'type' => 2), 'id', 'DESC', null);
        }else{
            $smtp_details = Helper::get_data_query('admin_setting', array('admin_id' => 1, 'type' => 1), 'id', 'DESC', null);
        }
       
        if (empty($smtp_details)) {
            return 3;         //smtp config fail
        }else{
            $smtp_details = json_decode($smtp_details->data);
            $mail_success = Helper::send_mail($email, $subject, $html_template, $smtp_details->username, $smtp_details->sender_name, $smtp_details->host, $smtp_details->port, $smtp_details->encryption_type, $smtp_details->username, $smtp_details->password);
            if ($mail_success == 1) {
                return 1;         //success
            } else {
                return 4;        ///mail not sent
            }
        }
    }

    public static function send_mail($emailto,$subject, $html, $sender_email, $sender_name,$host,$port,$encryption_type,$username,$password)
    {
        $fields = array(
            'emailto' => $emailto,
            'sender_email' => $sender_email,
            'sender_name' => $sender_name,
            'subject' => $subject,
            'body' => $html,
            'host' => $host,
            'port' => $port,
            'encryption_type' => $encryption_type,
            'username' => $username,
            'password' => $password,
        );
        $url = 'http://development81.shrinkcom.com/water-billing/smtp_mailsss/index.php';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USE_SSL, CURLUSESSL_ALL);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        $server_output = curl_exec($ch);
        if($server_output == 1){
            return $server_output;
        }else{
            return 2;
        }
    }
}
