{{ Form::open(array('url' => 'posts')) }}

{{ Form::text('title') }} <br>
{{ Form::textArea('content') }} <br>
{{ Form::submit('Simpan') }}
<a href="/posts">Back</a>
{{ Form::close() }}
