<h1>Troca de Responsável do Site</h1>

<div>
O site {{ $site->dominio.config('sites.dnszone') }} teve  o reponsável alterado. 
<br>
Confira nossos tutoriais em: http://sti.fflch.usp.br/drupal
</div>

<br>
<div>
<b>Novo Responsável:</b> {{ $name_novo_responsavel }} 
</div>
<br>
<div>
<b>Responsável Anterior:</b>  {{ $name }}
</div>


<br>
Mensagem automática do sistema de gestão de sites: {{ config('app.url') }}
