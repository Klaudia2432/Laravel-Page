<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternalEventsAttachments extends Model
{
    use HasFactory;
    const CREATED_AT = "CreationDateTime";
    const UPDATED_AT = "EditDateTime";

    protected $table = "InternalEventsAttachments";
    protected $primaryKey = "Id";
    public function Attachment() {
        return $this->belongsTo(Attachment::class, "AttachmentId");
    }
    public function InternalEvent() {
        return $this->belongsTo(InternalEvent::class, "InternalEventId");
    }
}
