<div class="form-group {{ $errors->has('nickname') ? 'has-error' : ''}}">
    <label for="nickname" class="control-label">{{ 'Nickname' }}</label>
    <input class="form-control" name="nickname" type="text" id="nickname" value="{{ $staff->nickname}}" >
    {!! $errors->first('nickname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
    <label for="number" class="control-label">{{ 'Number' }}</label>
    <input class="form-control" name="number" type="text" id="number" value="{{ $staff->number}}" >
    {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ $staff->email}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fullname') ? 'has-error' : ''}}">
    <label for="fullname" class="control-label">{{ 'Fullname' }}</label>
    <input class="form-control" name="fullname" type="text" id="fullname" value="{{ $staff->fullname}}" >
    {!! $errors->first('fullname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('taxcode') ? 'has-error' : ''}}">
    <label for="taxcode" class="control-label">{{ 'Taxcode' }}</label>
    <input class="form-control" name="taxcode" type="text" id="taxcode" value="{{ $staff->taxcode}}" >
    {!! $errors->first('taxcode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kiwisaver') ? 'has-error' : ''}}">
    <label for="kiwisaver" class="control-label">{{ 'Kiwisaver' }}</label>
    <input class="form-control" name="kiwisaver" type="text" id="kiwisaver" value="{{ $staff->kiwisaver}}" >
    {!! $errors->first('kiwisaver', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('studentloan') ? 'has-error' : ''}}">
    <label for="studentloan" class="control-label">{{ 'Studentloan' }}</label>
    <input class="form-control" name="studentloan" type="text" id="studentloan" value="{{ $staff->studentloan}}" >
    {!! $errors->first('studentloan', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
