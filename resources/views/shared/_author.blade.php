<span class="text-muted">{{ $label . " " . $model->created_at }}</span>
<div class="media mt-2">
    <a href="{{ $model->user->url }}">
        <img src="{{ $model->user->avatar }}" alt="">
    </a>
    <div class="media-body mt-1">
        <a class="ml-2" href="{{ $model->user->url }}">{{ $model->user->name }}</a>
    </div>
</div>