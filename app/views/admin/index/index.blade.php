@extends('admin/admin')

@section('content')

  <h2 class="ui dividing header">Home</h2>

	<div class="twelve wide column">
    <div class="ui fluid form segment">
        <div class="field">
          <label>Username</label>
          <div class="ui left labeled icon input">
            <input type="text" placeholder="Username">
            <i class="user icon"></i>
            <div class="ui corner label">
              <i class="icon asterisk"></i>
            </div>
          </div>
        </div>
        <div class="field">
          <label>Password</label>
          <div class="ui left labeled icon input">
            <input type="password">
            <i class="lock icon"></i>
            <div class="ui corner label">
              <i class="icon asterisk"></i>
            </div>
          </div>
        </div>
        <div class="ui error message">
          <div class="header">We noticed some issues</div>
        </div>
        <div class="ui blue submit button">Login</div>
    </div>
  </div>
@stop