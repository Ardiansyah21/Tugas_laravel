@extends('layout')

@section('content')
<div class="container content">  
  <form method="POST" action="/todo/store" id="create-form" class="card py-4 px-4" >
    @csrf
    <h3>Create Todo</h3>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <fieldset>
        <label for="">Title</label>
        <input name="title" placeholder="title of todo" type="text">
    </fieldset>
    <fieldset>
        <label for="">Target Date</label>
        <input name="date" placeholder="Target Date" type="date">
    </fieldset>
    <fieldset>
        <label for="">Description</label>
        <textarea name="description" placeholder="Type your descriptions here..." tabindex="5"></textarea>
    </fieldset>
    <fieldset>
        <button type="submit" id="contactus-submit">Submit</button>
    </fieldset>
    <fieldset>
        <a href="/todo/" class="btn-cancel btn-lg btn">Cancel</a>
    </fieldset>
  
  </form>
</div>
@endsection