<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // $project = Project::create([
        //     'title' => 'Mipe Crew',
        //     'slug' => 'mipe-crew',
        //     'description' => 'Site institucional desenvolvido para apresentar os serviços de produção de conteúdo automotivo, valorizar o estoque de concessionárias e gerar oportunidades comerciais por meio de um portfólio visual de produções e chamadas para contato.',
        //     'category' => 'Presença digital',
        //     'year' => 2026,
        //     'image' => 'images/projects/mipecrew.jpg',
        //     'image_alt' => 'Mipe Crew',
        //     'application_url' => 'https://mipecrew.com',
        //     'featured' => true,
        // ]);

        // $project->partners()->attach([
        //     $nicolas->id,
        //     $mipe->id,
        // ]);

        $project = Project::create([
            'title' => 'MipeHub',
            'slug' => 'mipehub',
            'description' => 'Plataforma de gestão agnóstica de produtos, desenvolvida para facilitar a criação e manutenção de sites institucionais e sistemas para os clientes da Mipe Crew. Centraliza o gerenciamento de catálogos, estoques, integrações externas e emissão de notas fiscais em um único painel administrativo, permitindo atender diferentes empresas sem a necessidade de desenvolver e manter um painel separado para cada cliente.',
            'category' => 'Sistema de gestão',
            'year' => 2026,
            'image' => 'images/projects/mipehub.jpg',
            'image_alt' => 'MipeHub',
            'application_url' => null,
            'featured' => true,
        ]);

        $project = Project::create([
            'title' => 'Carros e Naves',
            'slug' => 'carros-e-naves',
            'description' => 'Plataforma de catálogo automotivo desenvolvida para apresentar veículos disponíveis para venda de forma organizada e intuitiva. Conta com formulário para avaliação de veículos, opções de financiamento e chamadas estratégicas para contato direto via WhatsApp, facilitando a comunicação com a equipe comercial e a conversão de visitantes em potenciais clientes.',
            'category' => 'Presença digital',
            'year' => 2026,
            'image' => 'images/projects/carrosenaves.jpg',
            'image_alt' => 'Carros e Naves',
            'application_url' => null,
            'featured' => true,
        ]);
    }
}
