<form name="webpay" action="{{ $formAction }}" method="post">
    <input type="text" name="token_ws" value="{{ $tokenWs }}" style="display:none"/>
    <input id="regreso" type="submit" value="Continuar" />
</form>

<script>
    // window.onload = function(){
    //     document.webpay.submit();
    // }
</script>