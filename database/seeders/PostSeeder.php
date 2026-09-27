<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Por que sua empresa precisa de uma presença digital?',
                'excerpt' => 'Ter uma presença digital bem estruturada pode aproximar sua empresa dos clientes e fortalecer sua marca.',
                'content' => <<<'HTML'
<h2>Uma presença digital vai além de ter um site</h2>

<p>
    Hoje, quando alguém conhece uma empresa, é comum procurar informações sobre ela na internet antes de entrar em contato.
    Por isso, ter uma presença digital bem estruturada pode fazer diferença na forma como sua empresa é percebida.
</p>

<p>
    Um bom site ajuda a apresentar seus serviços, produtos e diferenciais de maneira clara,
    além de funcionar como um ponto de contato permanente com seus clientes.
</p>

<h2>O objetivo é facilitar a decisão</h2>

<p>
    Uma presença digital eficiente não precisa ser complicada.
    O importante é entregar as informações certas para que o visitante entenda
    quem você é, o que oferece e como pode entrar em contato.
</p>

<ul>
    <li>Apresentação clara da empresa</li>
    <li>Serviços e produtos bem organizados</li>
    <li>Informações de contato acessíveis</li>
    <li>Conteúdo que gere confiança</li>
</ul>

<p>
    Tecnologia deve servir ao negócio. Quando isso acontece, o site deixa de ser apenas uma vitrine
    e passa a fazer parte da estratégia comercial.
</p>
HTML,
                'image' => null,
                'image_alt' => null,
                'published_at' => now()->subDays(2),
            ],

            [
                'title' => 'Quando um sistema sob medida faz sentido?',
                'excerpt' => 'Nem toda empresa precisa de um sistema próprio. Mas existem situações em que uma solução personalizada pode simplificar bastante a operação.',
                'content' => <<<'HTML'
<h2>Nem sempre a melhor solução é a mais complexa</h2>

<p>
    Sistemas prontos podem resolver muitos problemas. Eles são rápidos de implementar
    e normalmente possuem recursos suficientes para operações mais comuns.
</p>

<p>
    O problema aparece quando o processo da empresa começa a fugir do padrão esperado pela ferramenta.
    Nesse momento, adaptações, planilhas e processos manuais podem começar a se acumular.
</p>

<h2>Quando personalizar pode valer a pena?</h2>

<p>
    Uma solução sob medida pode fazer sentido quando a empresa possui processos específicos,
    regras próprias ou uma operação que não consegue ser bem atendida por ferramentas genéricas.
</p>

<blockquote>
    <p>
        O objetivo de um sistema não é substituir o processo da empresa,
        mas tornar o processo mais simples, organizado e eficiente.
    </p>
</blockquote>

<p>
    Antes de desenvolver qualquer coisa, é importante entender o problema.
    Muitas vezes uma pequena automação resolve o que parecia exigir um sistema inteiro.
</p>
HTML,
                'image' => null,
                'image_alt' => null,
                'published_at' => now()->subDays(5),
            ],

            [
                'title' => 'Tecnologia como ferramenta para vender melhor',
                'excerpt' => 'Ferramentas digitais podem ajudar equipes comerciais a organizar informações, acompanhar oportunidades e melhorar o relacionamento com clientes.',
                'content' => <<<'HTML'
<h2>Vender também é organizar informação</h2>

<p>
    Uma boa operação comercial depende de informação.
    Saber quem é o cliente, o que ele procura, quais produtos já foram apresentados
    e em que momento da negociação ele está pode mudar completamente o processo de venda.
</p>

<p>
    É nesse ponto que a tecnologia pode ajudar.
    Sistemas de atendimento, CRM, catálogos digitais e automações podem reduzir tarefas repetitivas
    e deixar o vendedor mais focado na conversa com o cliente.
</p>

<h2>Menos operação, mais relacionamento</h2>

<p>
    A tecnologia não precisa tornar o processo comercial mais complicado.
    Quando bem aplicada, ela faz justamente o contrário:
    reduz o trabalho operacional e deixa as informações disponíveis quando são necessárias.
</p>

<p>
    Uma ferramenta bem construída deve acompanhar a rotina da equipe,
    e não obrigar a equipe a trabalhar contra a ferramenta.
</p>
HTML,
                'image' => null,
                'image_alt' => null,
                'published_at' => now()->subDays(8),
            ],

            [
                'title' => 'O que considerar antes de criar um site para sua empresa',
                'excerpt' => 'Antes de pensar em tecnologia, é importante entender o objetivo do site e qual papel ele terá dentro do negócio.',
                'content' => <<<'HTML'
<h2>Comece pelo objetivo</h2>

<p>
    Antes de escolher tecnologia, layout ou hospedagem, existe uma pergunta mais importante:
    <strong>o que esse site precisa fazer pelo negócio?</strong>
</p>

<p>
    Um site pode ter diferentes objetivos.
    Pode apresentar serviços, gerar contatos, vender produtos, receber pedidos,
    fortalecer uma marca ou simplesmente centralizar informações importantes.
</p>

<h2>Alguns pontos importantes</h2>

<ul>
    <li>Quem é o público?</li>
    <li>Qual problema o site precisa resolver?</li>
    <li>Qual ação você espera do visitante?</li>
    <li>Quais informações precisam estar disponíveis?</li>
    <li>Como os resultados serão acompanhados?</li>
</ul>

<p>
    Definir essas respostas antes do desenvolvimento ajuda a evitar um problema comum:
    construir um site bonito que não possui uma função clara dentro da estratégia da empresa.
</p>
HTML,
                'image' => null,
                'image_alt' => null,
                'published_at' => now()->subDays(12),
            ],

            [
                'title' => 'Construindo produtos digitais que resolvem problemas reais',
                'excerpt' => 'Um produto digital eficiente começa entendendo o problema antes de escolher a tecnologia.',
                'content' => <<<'HTML'
<h2>O problema vem antes da tecnologia</h2>

<p>
    É fácil começar um projeto pensando em frameworks, bancos de dados e funcionalidades.
    Mas um produto digital realmente útil começa em outro lugar: no problema que precisa ser resolvido.
</p>

<p>
    Entender a rotina das pessoas que vão utilizar o sistema ajuda a identificar
    quais funcionalidades realmente importam e quais apenas adicionam complexidade.
</p>

<h2>Construir, testar e melhorar</h2>

<p>
    Um produto não precisa nascer perfeito.
    Uma primeira versão bem definida permite colocar a solução em uso,
    observar o comportamento dos usuários e evoluir a partir de dados reais.
</p>

<p>
    No final, tecnologia é apenas uma ferramenta.
    O resultado importante é resolver um problema de forma simples e sustentável.
</p>
HTML,
                'image' => null,
                'image_alt' => null,
                'published_at' => now()->subDays(18),
            ],
        ];

        foreach ($posts as $post) {
            Post::create([
                ...$post,
                'slug' => Str::slug($post['title']),
            ]);
        }
    }
}
