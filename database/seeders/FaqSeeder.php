<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Que tipo de projeto você desenvolve?',
                'answer' => 'Desenvolvo sites institucionais, landing pages, lojas online, sistemas web, aplicativos mobile e integrações entre sistemas, sempre de acordo com a necessidade do projeto.',
            ],
            [
                'question' => 'Você trabalha com projetos sob medida?',
                'answer' => 'Sim. Cada projeto é desenvolvido considerando o objetivo, as necessidades e os processos do negócio, evitando soluções genéricas quando elas não fazem sentido.',
            ],
            [
                'question' => 'Quanto custa um projeto?',
                'answer' => 'O valor depende do tipo de solução, da complexidade e das funcionalidades necessárias. Depois de entender o projeto, é possível definir o escopo e apresentar um orçamento.',
            ],
            [
                'question' => 'Quanto tempo leva para desenvolver?',
                'answer' => 'O prazo varia de acordo com o escopo do projeto. Projetos mais simples podem ser entregues rapidamente, enquanto sistemas maiores precisam de mais etapas de desenvolvimento e validação.',
            ],
            [
                'question' => 'Posso solicitar alterações durante o projeto?',
                'answer' => 'Sim. O projeto é desenvolvido de forma alinhada com o cliente, permitindo validar as etapas e ajustar o que for necessário dentro do escopo definido.',
            ],
            [
                'question' => 'Você também faz manutenção depois da entrega?',
                'answer' => 'Sim. Dependendo do projeto, é possível continuar com suporte, manutenção, melhorias e novas funcionalidades após a entrega.',
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
