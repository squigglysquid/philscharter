@extends('layouts.blank')

@section('content')
    <div class="w-full max-w-md md:mx-auto p-4">
        <div class="font-medium text-3xl text-grey-darker pb-8 text-center">
            Login to your website dashboard
        </div>
        <div class="bg-white p-3">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="flex items-stretch mb-3">
                    <label for="email"
                           class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">E-Mail
                        Address</label>
                    <div class="flex flex-col w-3/4">
                        <input id="email" type="email"
                               class="flex-grow h-8 px-2 border rounded {{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}"
                               name="email" value="{{ old('email') }}" required autofocus>
                        {!! $errors->first('email', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                    </div>
                </div>

                <div class="flex items-stretch mb-4">
                    <label for="password"
                           class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">Password</label>
                    <div class="flex flex-col w-3/4">
                        <input id="password" type="password"
                               class="flex-grow h-8 px-2 rounded border {{ $errors->has('password') ? 'border-red-dark' : 'border-grey-light' }}"
                               name="password" required>
                        {!! $errors->first('password', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                    </div>
                </div>

                <div class="flex mb-4">
                    <label class="w-3/4 ml-auto">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span
                                class="text-sm text-grey-dark"> Remember Me</span>
                    </label>
                </div>

                <div class="flex">
                    <div class="w-3/4 ml-auto">
                        <p>
                            <button type="submit"
                                    class="bg-grey-darker hover:bg-grey-darkest text-white text-sm font-semibold py-2 px-4 rounded mr-3">
                                Login
                            </button>
                            <a class="no-underline hover:underline text-brand-dark text-sm"
                               href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a></p>
                        <p class="mt-4"><a class="text-xs text-grey" href="/">Go Back</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
