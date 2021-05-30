<h3>Provider</h3>
{{--
@if(count($providers) > 0 && count($providers) < 10)
    <h3>Exists some providers registred</h3>
@elseif(count($providers) > 10)
    <h3>Exists very much providers</h3>
@else
    <h3>No providers</h3>
@endif
--}}

{{-- @unless execute whe the return is false --}}


{{-- <br/>

@if($providers[0]['status'])
    Provider active
@endif

@unless($providers[0]['status'])
    Provider inactive
@endunless --}}
@isset($providers)
    @forelse ( $providers as $index => $provider)
        Provider: {{$provider['name'] ?? 'Sem nome'}} <br/>
        Status: {{$provider['status'] ? 'Ativo' : 'Inativo'}} <br/>
        @isset($provider['cnpj'])
            Cnpj: {{$provider['cnpj']}}
            @empty($provider['cnpj'])
                -vazio
            @endempty
            <br/>
        @endisset
        Phone: {{$provider['ddd'] ?? ''}} {{$provider['phone'] ?? ''}}
        @switch($provider['ddd'])
            @case('11')
                São paulo - SP
                @break;
            @case('35')
                É nois da roça
                @break;
            @case('85')
                Fortaleza - CE
                @break
            @default
                Cidade desconhecida
                @break
        @endswitch
        @empty
        No providers
    @endforelse
@endisset
