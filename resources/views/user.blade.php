@if ($username == 1)
    I have one record!
@else
    I don't have any records!
@endif

@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }} <br/>
@endfor
