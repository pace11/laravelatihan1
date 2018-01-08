<a href="/posts/{{ $post->id }}/edit">Edit</a>
{{ Form::open(array('url' => 'posts/' . $post->id, 'method' => 'delete')) }}
{{ Form::submit('Delete') }}
{{ Form::close() }}
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
