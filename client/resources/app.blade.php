<!doctype html>
<html>
<head>

  <meta charset="utf-8">
  <meta id="token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

  <title>Here I Go Killing Again</title>
  <link rel="stylesheet" href="{{ url('assets/app.css') }}">
  <link href="{{ url('assets/favicon.ico?v=3') }}" rel="icon" type="image/x-icon">

</head>
<body
  data-env="{{ config('app.env') }}"
  data-url="{{ url('/') }}"
  data-uri="{{ config('app.CLIENT_URI') }}"
  data-poster-tmdb="{{ config('services.tmdb.poster') }}"
  data-poster-subpage-tmdb="{{ config('services.tmdb.poster_subpage') }}"
  data-backdrop-tmdb="{{ config('services.tmdb.backdrop') }}"
  data-auth="{{ Auth::check() }}"
  data-language="{{ $lang }}"
  class="{{ Auth::check() ? 'logged' : 'guest' }}"
>

  <div id="app">
    @if(Request::is('login'))
      <login></login>
    @else
      <modal></modal>
      <site-header></site-header>
      <router-view></router-view>
      <site-footer></site-footer>
    @endif
  </div>

  <script src="{{ url('assets/vendor.js') }}"></script>
  <script src="{{ url('assets/app.js') }}"></script>
  <script>
window['_fs_debug'] = false;
window['_fs_host'] = 'fullstory.com';
window['_fs_script'] = 'edge.fullstory.com/s/fs.js';
window['_fs_org'] = '14HNBW';
window['_fs_namespace'] = 'FS';
(function(m,n,e,t,l,o,g,y){
    if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
    g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s);};g.q=[];
    o=n.createElement(t);o.async=1;o.crossOrigin='anonymous';o.src='https://'+_fs_script;
    y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
    g.identify=function(i,v,s){g(l,{uid:i},s);if(v)g(l,v,s)};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};
    g.anonymize=function(){g.identify(!!0)};
    g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};
    g.log = function(a,b){g("log",[a,b])};
    g.consent=function(a){g("consent",!arguments.length||a)};
    g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
    g.clearUserCookie=function(){};
    g.setVars=function(n, p){g('setVars',[n,p]);};
    g._w={};y='XMLHttpRequest';g._w[y]=m[y];y='fetch';g._w[y]=m[y];
    if(m[y])m[y]=function(){return g._w[y].apply(this,arguments)};
    g._v="1.3.0";
})(window,document,window['_fs_namespace'],'script','user');
</script>
</body>
</html>
