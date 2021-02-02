@component('mail::message')
    @if($data['type']=='contact')
        <p>name - {{htmlspecialchars_decode($data['name'])}}</p>
        <p>email - {{$data['email']}}</p>
        <p>message - {{htmlspecialchars_decode($data['message'])}}</p>
    @else
        <p>name - {{htmlspecialchars_decode($data['name'])}}</p>
        <p>country - {{htmlspecialchars_decode($data['country'])}}</p>
        <p>company - {{htmlspecialchars_decode($data['company'])}}</p>
        <p>phone - {{$data['phone']}}</p>
        <p>email - {{$data['email']}}</p>
        <p>message - {{htmlspecialchars_decode($data['message'])}}</p>
    @endif
@endcomponent
