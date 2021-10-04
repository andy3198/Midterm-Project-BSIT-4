<div class="cotainer">
    <h2 style="padding: 10px; text-align: center; color:#FFFFFF; background-color:#000000">Midter Project</h2>

    <p>Please verify Your Account<strong> {{ $user->name }}</strong></p>

    <p>You can received this email from admin</p>

    <p>To verify your account please click <a href="{{ url('/verification/' . $user->id . "/" . $user->remember_token) }}"> here</a></p>
</div>
