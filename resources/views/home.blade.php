@extends('tpl.layout.master')

@section('content')
    <div class="content">
        <div class="title">Welcome Home</div>
        <div id="login_container"></div>
    </div>
@stop
@section('script')
<script src="{{URL::asset('/')}}bower_components/AdminLTE/dist/js/app.min.js"></script>
<script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
<script>
    var obj = new WxLogin({

        id:"login_container",

        appid: "wxc9512ee29f35dbe1",

        scope: "snsapi_login",

        redirect_uri: "http://www.exingdong.com/callback",

    });
</script>
@stop