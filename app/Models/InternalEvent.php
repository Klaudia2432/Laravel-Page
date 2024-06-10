<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternalEvent extends Model
{
    use HasFactory;
    const CREATED_AT = "CreationDateTime";
    const UPDATED_AT = "EditDateTime";
    protected $table = "InternalEvents";
    protected $primaryKey = "Id";

//    public $Id;
//    public $Title;
//    public $Link;
//    public $IsPublic;
//    public $IsCancelled;
//    public $EventDateTime;
//    public $CreationDateTime;
//    public $EditDateTime;
//    public $PublishDateTime;
//    public $ShortDescription;
//    public $ContentHTML;
//    public $MetaDescription;
//    public $MetaTags;
//    public $Notes;
//    public $IsActive;
}
