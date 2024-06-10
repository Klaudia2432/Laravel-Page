<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternalEventsAttachments extends Model
{
    use HasFactory;
    public function Attachment() {
        return $this->belongsTo(Attachment::class, "AttachmentId");
    }
    public function InternalEvent() {
        return $this->belongsTo(InternalEvent::class, "InternalEventId");
    }
    public function InternalEventsAttachments() {
        return $this->hasMany(InternalEventsAttachments::class, "InternalEventId");
    }
}
