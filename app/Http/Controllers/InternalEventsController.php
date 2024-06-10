<?php

namespace App\Http\Controllers;

use App\Models\InternalEvent;
use App\Models\InternalEventsAttachments;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Mail\Attachment;
use Illuminate\View\View;
use function Psy\debug;

class InternalEventsController extends Controller
{
    public function index() : View {
        $models = InternalEvent::where("IsActive", "=", true) ->get();
        return view("internalEvents.index", ["models" => $models]);
    }
    public function create() : View {
        $model = new InternalEvent();
        $model -> PublishDateTime = date("Y-m-d");
        $model -> EventDateTime = date("Y-m-d");
        return view("internalEvents.create", ["model" => $model]);
    }
    public function addToDb(Request $request) : RedirectResponse {
        $model = new InternalEvent();
        //uzupełniamy model danymi
        $model->Title = $request->input("Title");
        $model->Link = $request->input("Link");
        $model->ShortDescription = $request->input("ShortDescription");
        $model->ContentHTML = $request->input("ContentHTML");
        $model->MetaTags = $request->input("MetaTags");
        $model->MetaDescription = $request->input("MetaDescription");
        $model->Notes = $request->input("Notes");
        $model->EventDateTime = $request->input("EventDateTime");
        $model->PublishDateTime = $request->input("PublishDateTime");
        $model->IsPublic = $request->input("IsPublic") ? true : false;
        $model->IsCancelled = $request->input("IsCancelled") ? true : false;;
        $model->IsActive = true;
        $model -> save();
        return redirect("internal-events");
    }
    public function edit($id) : View {
        $model = InternalEvent::find($id);
        return view("internalEvents.edit", ["model" => $model]);
    }
    public function update(Request $request, $id) : RedirectResponse {
        $model = InternalEvent::find($id);
        //uzupełniamy model danymi
        $model->Title = $request->input("Title");
        $model->Link = $request->input("Link");
        $model->ShortDescription = $request->input("ShortDescription");
        $model->ContentHTML = $request->input("ContentHTML");
        $model->MetaTags = $request->input("MetaTags");
        $model->MetaDescription = $request->input("MetaDescription");
        $model->Notes = $request->input("Notes");
        $model->EventDateTime = $request->input("EventDateTime");
        $model->PublishDateTime = $request->input("PublishDateTime");
        $model->IsPublic = $request->input("IsPublic") ? true : false;
        $model->IsCancelled = $request->input("IsCancelled") ? true : false;;
        $model -> save();
        return redirect("/internal-events");
    }
    public function delete($id) : RedirectResponse {
        $model = InternalEvent::find($id);
        $model -> IsActive = false;
        $model -> save();
        return redirect("/internal-events");
    }
    public function addAttachment($id) {
        $model = new InternalEventsAttachments();
        $model->InternalEventId->$Id;
        $attachments = Attachment::all();
        return view("InternalEvents.addAttachment", ["model" => $model, "attachments" => $attachments]);
    }
    public function addAttachmentToDB($id, Request $request) {
        $model = new InternalEventsAttachments();
        $model->InternalEventId->$Id;
        $model->InternalEventId = $id;
        $model->Title = $request->input("Title");
        $model->AttachmentId = $request->input("AttachmentId");
        $model->IsPinned = $request->input("IsPinned") ? true : false;
        $model->IsActive = true;
        $model -> save();
        return redirect("internal-events");
    }
}
