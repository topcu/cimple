@if($errors->has())
    @foreach ($errors->all() as $message)
    <div class="alert alert-danger"><strong>{{ $message }}</strong></div>
    @endforeach
@endif

@if(Session::has('success'))
    <?php $messages = Session::get('success'); if(!array($messages)){$messages = [$messages];} ?>
    @foreach ($messages as $message)
        <div class="alert alert-success">{{ $message }}</div>
    @endforeach
@endif

@if(Session::has('info'))
    <?php $messages = Session::get('info'); if(!array($messages)){$messages = [$messages];} ?>
    @foreach ($messages as $message)
        <div class="alert alert-success">{{ $message }}</div>
    @endforeach
@endif