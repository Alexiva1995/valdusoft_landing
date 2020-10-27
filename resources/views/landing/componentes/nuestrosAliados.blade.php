
@php
    for ($i=0; $i < 5; $i++) {
        $data [] = [
            'img' => asset('assets/img/sistema/Grupo-106.png'),
            'imgC' => asset('assets/img/sistema/Logo-2.png'),
            'title' => 'ValduSoft '.$i,
            'meta' => 'Lorem ipsum dolor',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi deleniti illum esse sapiente eius odit, distinctio architecto fugiat facere cum tempora odio rerum, aperiam doloremque ullam! Delectus corrupti vel iste?',
            'datatap' => 'tab'.$i
        ];
    }
@endphp

<div id="aliados" class="p-start-end">
    <div class="ui container mt-5">
        <h3 class="text-aliados">Aliados</h3>
        <h2><strong>Éstos son nuestros aliados y clientes</strong></h2>
    </div>

    <div class="ui grid tab_aliado">

        <div class="four wide column">
          <div class="ui vertical fluid tabular menu">
              @foreach ($data as $item)
              <a class="item @if($item['datatap'] == 'tab0') active @endif" data-tab="{{$item['datatap']}}">
                <img class="ui middle aligned mini circular image" src="{{$item['img']}}">
                <span>
                    <h5 class="">
                        {{$item['title']}}
                        <br>
                        <small class="">{{$item['meta']}}</small>
                    </h5>
                </span>

              </a>
              @endforeach
          </div>
        </div>
        <div class="twelve wide stretched column">
            @foreach ($data as $item)
            <div class="ui bottom attached tab segment @if($item['datatap'] == 'tab0') active @endif" data-tab="{{$item['datatap']}}">
                <div class="header_tap">
                    <img class="ui middle aligned tiny circular image" src="{{$item['img']}}">
                    <h2 class="ui header text-purple-dark">{{$item['title']}}</h2>
                </div>
                <p>{{$item['content']}}</p>
                <div class="relative">
                    {{-- boton derecho --}}
                    <button class="btn-carrusel-aliado btn-left">
                        <i class="angle left icon"></i>
                    </button>
                    {{-- carrusel --}}
                    <div class="aliados">
                        @for ($i = 0; $i < 10; $i++)
                        <div class="relative">
                            <img class="ui image" src="{{$item['imgC']}}" alt="">
                            <div class="info">
                                <div>
                                    <h2 class="ui header text-white">{{$item['title']}} - {{$i}}</h2>
                                    <a href="http://" class="text-white">Visitar</a>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    <button class="btn-carrusel-aliado btn-right">
                        <i class="angle right icon"></i>
                    </button>
                    {{-- boton izquierdo --}}
                </div>
            </div>
            @endforeach
        </div>
      </div>
</div>
