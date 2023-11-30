<form action="{{ route('user.quick.subscribe',$id) }}" method="POST">
    {{ csrf_field() }}
    <label class="switch">
        <input class="subscribe {{$is_subscribe}}" type="checkbox" data-id="{{$id}}"
            name="is_subscribe" {{ $is_subscribe == '1' ? 'checked' : '' }}>
        <span class="knob"></span>
    </label>
</form>