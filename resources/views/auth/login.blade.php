<x-front-layout page-title="Login">
    <div class='cart-login'>
        <div class='loginMain'>
            <div class="row">
                <div class="col-md-6">
                    <div class="ui-element-container">
                        <h5>
                            Return Customer Login
                        </h5>

                        <div class="social-login guest" data-toggle="social-login">
                            <div class="content">
                                <div class="email-option">
                                    <x-front.form form-action="{{ route('front.login') }}">
                                        <x-front.input-field type="text" name="email" id="login-email-address"
                                            place="Enter your email" val="" required="true" label="Email" />

                                        <x-front.input-field type="password" name="password" id="password"
                                            place="**********" val="" required="true" label="Password" />

                                        <div class="form-group row clearfix">
                                            <div class="col-md-3 pull-left">
                                                <x-front.input-button btn-class="" btn-value="Sign in"
                                                    btn-type="submit" />
                                            </div>

                                            @if (Route::has('password.request'))
                                                <div class="col-md-4 pull-right">
                                                    <x-front.href-link link-class=""
                                                        link-value="{{ __('Forgot Your Password?') }}"
                                                        link-href="{{ route('password.request') }}" />
                                                </div>
                                            @endif
                                        </div>
                                    </x-front.form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 checkout-register">
                    <div class="ui-element-container">
                        <h5>New Customer Register</h5>

                        <x-front.form form-action="{{ route('front.register') }}">

                            <div class="two fields">
                                <x-front.input-field type="text" name="first_name" id="first_name"
                                    place="Your First Name" val="" required="true" label="First name" />

                                <x-front.input-field type="text" name="last_name" id="last_name"
                                    place="Your Last Name" val="" required="true" label="Last name" />
                            </div>

                            <x-front.input-field type="text" name="email" id="email" place="Enter your email"
                                val="" required="true" label="Email" />

                            <x-front.input-field type="password" name="password" id="password" place="**********"
                                val="" required="true" label="Password" />

                            <x-front.input-field type="password" name="password_confirmation" id="password_confirmation"
                                place="**********" val="" required="true" label="Confirm Password" />

                            <div class="required inline field">
                                <div class="ui checkbox">
                                    <input id="terms-checkbox" type="checkbox" name='accept_eula' checked='1' />
                                    <label for="terms-checkbox">
                                        I have read and accept the <x-front.href-link link-class=""
                                            link-value="{{ __('Terms and Conditions') }}"
                                            link-href="{{ route('front.terms') }}" />
                                    </label>
                                </div>
                            </div>

                            <x-front.input-button btn-class="" btn-value="Register" btn-type="submit" />
                        </x-front.form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-front-layout>
