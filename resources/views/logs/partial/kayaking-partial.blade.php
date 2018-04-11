<div class="panel panel-default">
    <div class="panel-heading" style="text-align: center; background-color: #54B2C7">
        <h3 class="panel-title">
            {{ $activity_name }} Section
        </h3>
    </div>

    <div class="panel-body">
        <div class="row" style="margin-top: 1em">
            <div class="col-sm-2 ">
                {{ Form::label('kayaking-rapid_class', 'Rapid Class') }}
                {{ Form::select('kayaking-rapid_class',
                    [ 'Class I' => "Class I", 'Class II' => "Class II", 'Class III' => "Class III", 'Class IV' => "Class IV", 'Class V' => "Class V", 'Class VI' => "Class VI" ],
                    isset($activity_log) ? $activity_log->rapid_class : null,
                    ['id' => 'kayaking-rapid_class','class' => 'form-control'])
                }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('kayaking-flow_level', 'Flow Level') }}
                {{ Form::text('kayaking-flow_level',
                    isset($activity_log) ? $activity_log->rapid_class : null,
                    array('id' => 'kayaking-flow_level','class' => 'form-control'))
                }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('kayaking-launch_site', 'Launch Site') }}
                {{ Form::text('kayaking-launch_site',
                    isset($activity_log) ? $activity_log->launch_site : null,
                    array('id' => 'kayaking-launch_site','class' => 'form-control'))
                }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('rafting-takeout_site', 'Takeout Site') }}
                {{ Form::text('rafting-takeout_site',
                    isset($activity_log) ? $activity_log->takeout_site : null,
                    array('id' => 'kayaking-takeout_site','class' => 'form-control'))
                }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('kayaking-distance', 'Distance') }}
                {{ Form::text('kayaking-distance',
                    isset($activity_log) ? $activity_log->distance : null,
                    array('id' => 'kayaking-distance','class' => 'form-control'))
                }}
            </div>            <div class="col-sm-2 ">
                {{ Form::label('kayaking-boat_used', 'Boat Used') }}
                {{ Form::text('kayaking-boat_used',
                    isset($activity_log) ? $activity_log->boat_used : null,
                    array('id' => 'kayaking-boat_used','class' => 'form-control'))
                }}
            </div>
        </div>

             <!-- Notes -->
        <div class="row"  style="margin-top: 1em">
            <div class="col-sm-12 ">
                <div class="form-group">
                    <label for="kayaking-notes" class="col-form-label">Additional Notes</label>
                    {{ Form::textarea('kayaking-notes',
                        isset($activity_log) ? $activity_log->notes : null,
                        array('id' => 'kayaking-notes','class' => 'form-control'))
                    }}
                </div>
            </div>
        </div>
    </div>
</div>