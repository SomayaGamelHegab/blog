<div class="column col-xs-offset-9">
  <h3> About Us</h3>
  <p>we are ibtdi company for software development our company located in mansoura city </p>
@if(Auth::check())
  <h3> Archives</h3>
  <div>
    <ol class="list-unstyled">
      @foreach($archives as $stats)
      <li>
        <a href="/posts?month={{$stats['month']}}&year={{$stats['year']}}">{{$stats['month'].' '.$stats['year']}}</a>
      </li>
      @endforeach
    </ol>
    </ol>
  </div>
  @endif
  <h3> Tags</h3>
  <div>
    <ol class="list-unstyled">
      @foreach($tags as $tag)
      <li>
        <a href="/posts/tags/{{$tag}}">
          {{$tag}}
        </a>
      </li>
      @endforeach
    </ol>
    </ol>
  </div>
</div>
