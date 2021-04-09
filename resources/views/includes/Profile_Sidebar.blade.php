<!--START SIDEBAR-->
<div class="col-md-3">
    <div class="card">
        <div class="card-header">{{ __('PROFILE') }}</div>
        <img src="/img/avatar/{{Auth::user()->avatar}}" alt="profilePicture" style="width: 250px; height: 200px;">
     </div>
     <br>
    <div class="card">

        <div class="card-header">{{ __('SIDEBAR') }}</div>
        <a href="{!!route('home')!!}" class="btn btn-primary btn-block">Dashboard</a>
        <a href="{!!route('profile')!!}" class="btn btn-primary btn-block">Profile settings</a>
        <a href="{!!route('changePassword')!!}" class="btn btn-primary btn-block">Change password</a>
        <a href="{!!route('profileAvatar')!!}" class="btn btn-primary btn-block">Upload Profile Picture</a>

     </div>
     <br>

</div>
