{{--@component('mail::message')--}}

    {{--Name: <h4>{{$data['name']}}</h4>--}}
    {{--Subject: <strong>{{$data['subject']}}</strong>--}}
    {{--This is new Message from Contact Form:--}}
    {{--<p>{{$data['message']}}</p>--}}
    {{--@component('mail::button', ['url' => ''])--}}
        {{--Button Text--}}
    {{--@endcomponent--}}
    {{--Thanks,<br>--}}
{{--@endcomponent--}}

@component('mail::message')
Name: <h4>{{$data['name']}}</h4>
Subject: <strong>{{$data['subject']}}</strong>
This is new Message from Contact Form:
<p>{{$data['message']}}</p>

Thanks,<br>
@endcomponent