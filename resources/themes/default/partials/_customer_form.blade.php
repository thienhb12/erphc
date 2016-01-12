<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_details" data-toggle="tab" aria-expanded="true">{!! trans('general.tabs.details') !!}</a></li>
    </ul>
    <div class="tab-content">
		<div class="tab-pane active" id="tab_details">
            <div class="form-group">
                {!! Form::label('gender', trans('admin/custommer/general.columns.gender')) !!}
                {!! Form::select('gender', ['1' =>  trans('admin/custommer/general.columns.male'),'2' => trans('admin/custommer/general.columns.female')], null, ['class' => 'form-control', 'id' => 'gender',  'style' => "width: 100%"]) !!}
            </div>

			<div class="form-group">
                {!! Form::label('name', trans('admin/custommer/general.columns.name')) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
			
            <div class="form-group">
                {!! Form::label('address', trans('admin/custommer/general.columns.address')) !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>
			
            <div class="form-group">
                {!! Form::label('phone', trans('admin/custommer/general.columns.phone')) !!}
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('zalo', trans('admin/custommer/general.columns.zalo')) !!}
                {!! Form::text('zalo', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('viber', trans('admin/custommer/general.columns.viber')) !!}
                {!! Form::text('viber', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('skyper', trans('admin/custommer/general.columns.skyper')) !!}
                {!! Form::text('skyper', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('email', trans('admin/custommer/general.columns.email')) !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('company', trans('admin/custommer/general.columns.company')) !!}
                {!! Form::text('company', null, ['class' => 'form-control']) !!}
            </div>
		</div>
	</div>
</div>