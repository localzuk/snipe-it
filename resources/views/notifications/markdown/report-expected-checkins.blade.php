@component('mail::message')
# {{ trans('mail.hello') }},

The following {{ $assets->count() }} items are due to be checked in soon:

@component('mail::table')
| Asset | Checked Out to | Expected Checkin |
| ------------- | ------------- | ------------- |
@foreach ($assets as $asset)
@php
$checkin = Helper::getFormattedDateObject($asset->expected_checkin, 'date');
@endphp
| [{{ $asset->present()->name }}]({{ route('hardware.show', ['hardware' => $asset->id]) }}) | [{{ $asset->assigned->present()->fullName }}]({{ route('users.show', ['user'=>$asset->assigned->id]) }})  | {{ $checkin['formatted'] }}
@endforeach
@endcomponent

{{ trans('mail.best_regards') }}

{{ $snipeSettings->site_name }}

@endcomponent
