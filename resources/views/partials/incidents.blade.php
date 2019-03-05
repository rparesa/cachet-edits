
@forelse($incidents as $incidentID => $incident)
<div class="timeline">
    <div class="content-wrapper">
        <h4>{{ formatted_date($date) }}</h4>
        <div class="moment {{ $incidentID === 0 ? 'first' : null }}">
            <div class="row event clearfix">
                <div class="col-sm-1">
                    <div class="status-icon status-{{ $incident->status }}" data-toggle="tooltip" title="{{ $incident->human_status }}" data-placement="left">
                        <i class="{{ $incident->icon }}"></i>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-2 col-sm-11 col-sm-offset-0">
                    @include('partials.incident', ['incident' => $incident, 'with_link' => true])
                </div>
            </div>
        </div>

    </div>
</div>
@empty
@endforelse