
<ul class="nav container justify-content-between">
    <div class="d-flex content-nav item-h-left">
        <li class="nav-item d-flex align-content-center">
            <a class="nav-link t-color1" href="#">Lo último en &nbsp;<span class="t-bold">IPHONEQUILLA</span></a>
        </li>
    </div>

    <div data-controls="#content-prod-section" data-items=".nav-link" data-action="content-nav-tap" class="d-flex justify-content-around content-nav item-h-rigth">
        @php
            $view_sect=$category->count()>0 ? $category[0]->name:null;
        @endphp
        @foreach ($category as $cat)
            <li class="nav-item">
                <a data-target="#{{$cat->name}}" class="nav-link t-color2
                    {{$view_sect==$cat->name? 'active':''}}" >
                    <i class="{{$cat->icon}}"></i> {{$cat->name}}</a>
            </li>
        @endforeach
    </div>
</ul>
