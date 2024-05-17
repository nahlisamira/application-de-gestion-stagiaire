@extends('layouts.app')
@section('title', 'login')

@section('content')
<style>
   /* Container styling */
.container {   
    width: 400px;
    height: 400px;
    background: white;
    margin-top: 7em;
    border-radius: 10px;
    transition: border-radius 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    box-shadow: inset 0 -3em 3em rgba(0,0,0,0.1),
                0 0  0 2px rgb(190, 190, 190),
                0.3em 0.3em 1em rgba(0,0,0,0.3);
    direction: ltr;
}

/* Form elements styling */
.form-control {
    margin-bottom: 15px; /* Space between fields */
    border-radius: 4px; /* Slightly rounded corners */
    border: 1px solid #ced4da; /* Border color */
    text-align: left; /* Align text to the left */
    width: 100%; /* Full width */
    padding: 10px; /* Padding inside input fields */
}

/* Input group styling */
.input-group {
    position: relative;
}

.input-group .form-control {
    padding-left: 40px; /* Space for the icon */
}

.input {
    border: none;
    outline: none;
    border-radius: 100px;
    padding: 1em;
    background-color: #e1e2e3;
    box-shadow: inset 2px 5px 10px rgba(0, 0, 0, 0.3);
    transition: 300ms ease-in-out;
}

.input:focus {
    background-color: #ffffff;
    transform: scale(1.05);
    box-shadow: 13px 13px 100px #969696, -13px -13px 100px #ffffff;
}


/* Button styling */
.btn-align-left {
    display: inline-block; /* Block display for full width */
    text-align: center; /* Center text within button */
    width: 20%; /* Full width button */
    margin-left: 0; /* No margin on the left */
    padding: 10px 0; /* Padding inside the button */
    background-color: #007bff; /* Button background color */
    border: none; /* No border */
    border-radius: 4px; /* Rounded corners */
    color: white; /* Button text color */
    font-size: 1rem; /* Font size */
}

/* Logo styling */
.logo-container {
    display: flex;
    justify-content: center; /* Center the logo */
    margin-bottom: 20px; /* Space below the logo */
}

.logo-container img {
    max-width: 100px; /* Max width of the logo */
    height: auto;
}
</style>

<div class="container">
    <div class="row justify-content-center my-3">
        <div class="text-center mt-4">
            <!-- Logo container -->
            <div class="logo-container">
                <img src="https://th.bing.com/th/id/OIP.zbt-PGVkyHNNDjXD6stztAAAAA?rs=1&pid=ImgDetMain" alt="User Logo">
            </div>
        </div>

        <form method="POST" action="">
            @csrf
            <div class="mb-2">
                <div class="input-group">
                    <input id="email" type="email" class="form-control input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email" autofocus>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <div class="mb-3">
                <div class="input-group">
                    <input id="password" type="password" class="form-control input @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="current-password">
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <div class="mb-0">
                <button type="submit" class="btn btn-primary btn-align-left">
                    {{ __('Submit') }}
                </button>
            </div>
        </form>
        @endsection