@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center">

    <div class="staff-security-pass">
        <form action="/staff/dashboard" method="post" class="pass-form">
            @csrf
            <div class="input-group mb-3">
                <input type="password" class="form-control" id="showPassInput" placeholder="Staff | Unique Code.............">
                <div class="input-group-append">
                    <button type="button" class="btn btn-outline-success" id="showPass">Show</button>
                </div>
            </div>
            <div>
                <p class="errorCode" id="errorMsg"></p>
            </div>
            <div class="passCodeBtn-div">
                <button type="submit" id="passCodeBtn" class="btn btn-lg btn-primary">login</button>
            </div>
        </form>
    </div>
</div>
<script>
    const btnShowPass = document.querySelector("#showPass");
    const showPassInput = document.querySelector("#showPassInput");
    const btnPassCode = document.querySelector("#passCodeBtn");
    let errorMsg = document.querySelector("#errorMsg");

    /* btnShowPass.onclick = () => {
        showPassInput.value = to;
    } */

    showPassInput.onfocus = () => {
        errorMsg.innerHTML = "";
    }

    btnPassCode.addEventListener("click", (e) => {
        loginSecurity(e);
    });

    function loginSecurity(e) {
        const authChanCode = 123;

        if (showPassInput.value === "") {
            e.preventDefault();
            errorMsg.textContent = "....Input Field Is Empty....";
            return false;
        } else if (showPassInput.value !== authChanCode.toLocaleString()) {
            e.preventDefault();
            errorMsg.textContent = "# Wrong Pass Code #";
            return false;
        } else {
            return true;
        }
    }
</script>
@endsection