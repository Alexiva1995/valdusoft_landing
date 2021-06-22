<div class="footer p-start-end" id="contactanos">
    <!--<div class="ui container mt-5 contacto">
        <div class="ui inverted bg-blue-dark segment">
            <div class="ui stackable grid">
                <div class="six wide column">
                    <div class="ui basic segment">
                        <h3 class="ui header text-white">Contáctanos</h3>
                        <div class="ui inverted bg-blue-dark  list">
                            <div class="item text-white">
                                <i class="users icon"></i>
                                <div class="content">
                                    <a class="header text-white">Teléfono</a>
                                    <div class="description text-white">+58 (426) 931-57-24</div>
                                </div>
                            </div>
                            <div class="item text-white">
                                <i class="mail icon"></i>
                                <div class="content">
                                    <a class="header text-white">Email</a>
                                    <div class="description text-white">info@valdusoft.com</div>
                                </div>
                            </div>
                            <div class="item text-white">
                                <i class="marker icon"></i>
                                <div class="content">
                                    <a class="header text-white">Dirección</a>
                                    <div class="description text-white">San Cristóbal - Edo. Táchira <br> Venezuela
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ten wide column">
                    <div class="ui basic segment">
                    @if(Session::has('success'))
                    <div class="ui blue message">
                    <i class="close icon"></i>
                    <div class="header">
                        {{ Session::get('success') }}
                    </div>
                    </div>                   
                    @endif
                        <form class="ui form" method="POST" action="{{ route ('contact')}}">
                            @csrf
                            <div class="equal width fields">
                                <div class="field">
                                    <input name="name" class="placeholder-color" type="text" placeholder="Nombre" value="{{ old('name')}}" required>
                                    {!! $errors->first('name', '<small class="text-white">:message</small><br>') !!}
                                </div>
                                <div class="field">
                                    <input name="email" class="placeholder-color" type="email" placeholder="Email" value="{{ old('email')}}" required>
                                    {!! $errors->first('email', '<small class="text-white">:message</small><br>') !!}
                                </div>
                            </div>
                            <div class="equal width fields">
                                <div class="field">
                                    <input name="subject" class="placeholder-color" type="text" placeholder="Asunto" value="{{ old('subject')}}" minlength="7" required>
                                    {!! $errors->first('subject', '<small class="text-white">:message</small><br>') !!}
                                </div>
                                <div class="field">
                                    <input name="phone" class="placeholder-color" type="text" placeholder="Teléfono" value="{{ old('phone')}}" minlength="11" required>
                                    {!! $errors->first('phone', '<small class="text-white">:message</small><br>') !!}
                                </div>
                            </div>
                            <div class="equal width fields">
                                <div class="field">
                                    <textarea name="message" class="placeholder-color" rows="2" placeholder="Mensaje" minlength="26" required>{{ old('message')}}</textarea>
                                    {!! $errors->first('message', '<small class="text-white">:message</small><br>') !!}
                                </div>
                            </div>
                            
                            <div class="g-recaptcha" data-sitekey="6LdTkKAaAAAAAFDeD3XBngiRW3qVAusWf91s6diz"></div>
                            {!! $errors->first('g-recaptcha-response', '<small class="text-white">El campo del captcha es obligatorio</small><br>') !!}

                            <button class="ui btn-rounder right floated button bg-blue-light text-white" type="submit">Contáctanos</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="container mt-5 contacto bg-blue-dark">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-12 p-xl-5 p-lg-5 p-md-5 p-3 contact-section-left">
                <h3 class="header text-white">Contáctanos</h3>
                <div class="ui inverted bg-blue-dark  list">
                    <div class="item text-white">
                        <i class="users icon"></i>
                        <div class="content">
                            <a class="header text-white">Teléfono</a>
                            <div class="description text-white">+58 (426) 931-57-24</div>
                        </div>
                    </div>
                    <div class="item text-white mt-2">
                        <i class="mail icon"></i>
                        <div class="content">
                            <a class="header text-white">Email</a>
                            <div class="description text-white">info@valdusoft.com</div>
                        </div>
                    </div>
                    <div class="item text-white mt-2">
                        <i class="marker icon"></i>
                        <div class="content">
                            <a class="header text-white">Dirección</a>
                            <div class="description text-white">San Cristóbal - Edo. Táchira <br> Venezuela</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-12 p-xl-5 p-lg-5 p-md-5 p-2 contact-section-right">
                @if(Session::has('success'))
                    <div class="ui blue message">
                        <i class="close icon"></i>
                        <div class="header">
                            {{ Session::get('success') }}
                        </div>
                    </div>                   
                @endif
                <form class="ui form" method="POST" action="{{ route ('contact')}}">
                    @csrf
                    <div class="equal width fields">
                        <div class="field">
                            <input name="name" class="placeholder-color" type="text" placeholder="Nombre" value="{{ old('name')}}" required>
                            {!! $errors->first('name', '<small class="text-white">:message</small><br>') !!}
                        </div>
                        <div class="field">
                            <input name="email" class="placeholder-color" type="email" placeholder="Email" value="{{ old('email')}}" required>
                            {!! $errors->first('email', '<small class="text-white">:message</small><br>') !!}
                        </div>
                    </div>
                    <div class="equal width fields">
                        <div class="field">
                            <input name="subject" class="placeholder-color" type="text" placeholder="Asunto" value="{{ old('subject')}}" minlength="7" required>
                            {!! $errors->first('subject', '<small class="text-white">:message</small><br>') !!}
                        </div>
                        <div class="field">
                            <input name="phone" class="placeholder-color" type="text" placeholder="Teléfono" value="{{ old('phone')}}" minlength="11" required>
                            {!! $errors->first('phone', '<small class="text-white">:message</small><br>') !!}
                        </div>
                    </div>
                    <div class="equal width fields">
                        <div class="field">
                            <textarea name="message" class="placeholder-color" rows="2" placeholder="Mensaje" minlength="26" required>{{ old('message')}}</textarea>
                            {!! $errors->first('message', '<small class="text-white">:message</small><br>') !!}
                        </div>
                    </div>

                    <div class="contact-section-captcha">
                        <div class="g-recaptcha" data-sitekey="6LdTkKAaAAAAAFDeD3XBngiRW3qVAusWf91s6diz"></div>
                        {!! $errors->first('g-recaptcha-response', '<small class="text-white">El campo del captcha es obligatorio</small><br>') !!}
                    </div>

                    <div class="mt-3 contact-section-button">
                        <button class="ui btn-rounder floated button bg-blue-light text-white" type="submit" >Contáctanos</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="ui middle aligned grid">
        <div class="four wide column icons">
            <div class="ui container">
                <div class="ui left aligned basic segment">
                    <h1 class="btn-social">
                        <a href="https://www.facebook.com/Valdusoft-100400218791444" target="_blank" class="btn"><i class="facebook f icon text-white"></i></a>
                        <a href="https://www.instagram.com/valdusoft_/" target="_blank" class="btn"><i class="instagram icon text-white"></i></a>
                    </h1>
                </div>
            </div>
        </div>
        <div class="eight wide column">
            <div class="ui center aligned basic segment">
                <h3 class="text-white">&copy; 2020 Valdusoft All rights reserved</h3>
            </div>
        </div>
        <div class="four wide column">
            <div class="ui right aligned basic segment">
                <a href="#" onclick="moveSection('#inicio')"><img src="{{asset('assets/img/sistema/Logo.png')}}" class="img-logo"></a>
            </div>
        </div>
    </div>

</div>
