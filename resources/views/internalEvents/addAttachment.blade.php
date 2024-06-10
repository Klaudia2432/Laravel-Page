@extends('main')

@section('menu')
<a href="/internal-events/create" class="btn btn-primary">Create new</a>
<a href="/internal-events" class="btn btn-primary">All</a>
@endsection

@section('content')
<div class="container">
    <form method="POST" action="/internal-events/add-attachment/{{$model->InternalEventId}}">
        @csrf
        <div class="row gy-3">
            <div class="col-md-12 col-lg-6 col-xxl-4">
                <div class="input-group">
                    <label class="input-group-text">
                        <i class="material-icons-round align-middle">label</i>
                        Title
                    </label>
                    <input name="Title" class="form-control validate" value="{{$model->Title}}">
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xxl-4">
                <div class="row">
                    <div class="col-auto">
                        <label class="form-check-label">
                            Standard
                            <i class="material-icons-round align-middle">public</i>
                        </label>
                        <input name="Title" class="form-control validate" value="{{$model->Title}}">
                    </div>
                    <div class="form-switch form-check col-auto">
                        <input name="IsPinned" class="form-control validate" type="checkbox" value="{{$model->IsPinned}}">
                        <label class="form-check-label">
                            <i class="material-icons-round align-middle">block</i>
                            IsPinned
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xxl-4">
                <select class="form-select" name="AttachmentId">
                    @foreach($attachments as $item)
                        <option {{$item->Id == $model->AttachmentId ? "selected" : ""}}
                        value="{{$item->Id}}">{{$item->Title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-12">
                <label class="form-label">
                    <i class="material-icons-round palette-accent-text-color align-middle">notes</i>
                    Notes
                </label>
                <textarea name="Notes" class="form-control validate">{{$model->Notes}}</textarea>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection
