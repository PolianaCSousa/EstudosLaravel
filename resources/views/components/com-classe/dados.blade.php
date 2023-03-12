{{--RESUMINDO: a variável $dadoPHP veio do controller e a variável $dado veio do HTML--}}

<div class="mb-3">
        <label class="form-label">{{$dadoPHP}}</label>
        <input type="text" class="form-control" name="example-text-input" placeholder="{{$dado}}">  {{--agora eu posso acessar a variável dado que tenho na minha classe--}}
</div>