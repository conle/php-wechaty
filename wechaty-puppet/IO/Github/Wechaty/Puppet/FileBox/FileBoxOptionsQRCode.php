<?php
/**
 * Created by PhpStorm.
 * User: peterzhang
 * Date: 2020/7/23
 * Time: 11:50 AM
 */

namespace IO\Github\Wechaty\Puppet\FileBox;


class FileBoxOptionsQRCode {
    public $type;
    public $qrCode;
    public $name;

    public function __construct($type, $qrCode, $name) {
        $this->type = $type;
        $this->qrCode = $qrCode;
        $this->name = $name;
    }

    public function __toString() {
        return "FileBoxOptionsQRCode(type=$this->type, buffer=$this->qrCode)";
    }
}