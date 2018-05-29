<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $fillable=[
        'title',
        'meta_description_1',
        'meta_description_2',
        'address',
        'call_1',
        'call_2',
        'email_1',
        'email_2'
    ];
    public function setTitleAttribute($value){
        if($value==''){
            $this->attributes['title']='عنوان اصلی سایت را تنظیم نمایید';
        }else{
            $this->attributes['title'] = $value;
        }
    }
    public function setMetaDescription1Attribute($value){
        if($value==''){
            $this->attributes['meta_description_1']='تنظیمات متای صفحه اصلی را تنظیم نمایید';
        }else{
            $this->attributes['meta_description_1'] = $value;
        }
    }
    public function setMetaDescription2Attribute($value){
        if($value==''){
            $this->attributes['meta_description_2']='توضیحات ثانویه سایت رو تنظیم نمایید';
        }else{
            $this->attributes['meta_description_2'] = $value;
        }
    }
    public function setCall1Attribute($value){
        if($value==''){
            $this->attributes['call_1']='';
        }else{
            $this->attributes['call_1'] = $value;
        }
    }
    public function setCall2Attribute($value){
        if($value==''){
            $this->attributes['call_2']='';
        }else{
            $this->attributes['call_2'] = $value;
        }
    }
    public function setEmail1Attribute($value){
        if($value==''){
            $this->attributes['email_1']='';
        }else{
            $this->attributes['email_1'] = $value;
        }
    }
    public function setEmail2Attribute($value){
        if($value==''){
            $this->attributes['email_2']='';
        }else{
            $this->attributes['email_2'] = $value;
        }
    }
    public function setAddressAttribute($value){
        if($value==''){
            $this->attributes['address']='لطفا ادرس شرکت را از طریق پنل مدیریتی وارد نمایید';
        }else{
            $this->attributes['address'] = $value;
        }
    }

}
