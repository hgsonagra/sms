public function login(Request $request)
    {
        return view("login");
    }

    public function registration(Request $request)
    {
        return view("register");
    }

    public function logout()
    {
        if (Session::has('loginID')) {

            Session::forget('loginID');

            return redirect('/welcome');
        }
    }


    public function welcome()
    {
        // Check if the user is authenticated
        $authenticated = Session::has('loginID');

        return view('welcome', compact('authenticated'));
    }
    <!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <?php

                if ($authenticated) {
                 ?>
                        <li class="nav-item">
                             <form action="/logout" method="post">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>

                        </li>
                 <?php
                } else {
                 ?>
                         <li class="nav-item">
                            <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register"><i class="fas fa-user-plus"></i> Register</a>
                        </li>
                <?php
                    }
        ?>
    </ul>
</nav> -->