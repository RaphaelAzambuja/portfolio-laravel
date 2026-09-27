<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'tag' => 'Presença digital',
                'title' => 'Sites institucionais',
                'explanation' => 'Apresente sua empresa na internet com um site profissional, claro e pensado para transmitir credibilidade.',
            ],
            [
                'tag' => 'Captação',
                'title' => 'Landing pages',
                'explanation' => 'Páginas criadas para campanhas, lançamentos e captação de clientes, com foco em uma ação específica.',
            ],
            [
                'tag' => 'Vendas',
                'title' => 'Lojas online',
                'explanation' => 'Venda seus produtos pela internet com uma loja completa, organizada e preparada para facilitar a experiência de compra.',
            ],
            [
                'tag' => 'Experiência',
                'title' => 'Aplicativos mobile',
                'explanation' => 'Aplicativos para celular que colocam sua solução na palma da mão e criam novas formas de atender seus clientes.',
            ],
            [
                'tag' => 'Processos',
                'title' => 'Sistemas web',
                'explanation' => 'Softwares sob medida para organizar processos, automatizar tarefas e resolver necessidades específicas do seu negócio.',
            ],
            [
                'tag' => 'Automação',
                'title' => 'Integrações',
                'explanation' => 'Conecte suas ferramentas e faça seus sistemas trabalharem juntos, reduzindo tarefas manuais e melhorando seus processos.',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
