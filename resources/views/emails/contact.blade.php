
<x-mail::message>
<div>
Hello {{$contactData['name']}},
<br><br>



</div>

<div>
    {{$contactData['theMessage']}}
</div>

Thanks,<br>
{{config('app.name')}}
</x-mail::message>