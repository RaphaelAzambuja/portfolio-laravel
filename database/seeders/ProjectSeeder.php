<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Partner;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $raphael = Partner::where('name', 'Raphael Azambuja')->first();
        $nicolas = Partner::where('name', 'Nicolas Pereira')->first();
        $mipe = Partner::where('name', 'Mipe Crew')->first();
        $bite = Partner::where('name', 'Bite')->first();

        $project = Project::create([
            'title' => 'Mipe Crew',
            'slug' => 'mipe-crew',
            'description' => 'Plataforma digital criada para apresentar soluções e serviços voltados ao setor automotivo.',
            'category' => 'Presença digital',
            'year' => 2026,
            'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png',
            'image_alt' => 'Mipe Crew',
            'application_url' => 'https://mipecrew.com',
            'featured' => true,
        ]);

        $project->partners()->attach([
            $raphael->id,
            $nicolas->id,
            $mipe->id,
        ]);

        $project = Project::create([
            'title' => 'Sistema de gestão',
            'slug' => 'sistema-de-gestao',
            'description' => 'Sistema web desenvolvido para organizar produtos, estoque, pedidos e processos internos.',
            'category' => 'Sistemas web',
            'year' => 2026,
            'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png',
            'image_alt' => 'Sistema de gestão',
            'application_url' => null,
            'featured' => true,
        ]);

        $project->partners()->attach([
            $raphael->id,
        ]);

        $project = Project::create([
            'title' => 'Landing Page Comercial',
            'slug' => 'landing-page-comercial',
            'description' => 'Landing page desenvolvida para apresentar uma solução comercial e gerar novos contatos.',
            'category' => 'Landing pages',
            'year' => 2026,
            'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png',
            'image_alt' => 'Landing page comercial',
            'application_url' => 'https://example.com',
            'featured' => false,
        ]);

        $project->partners()->attach([
            $raphael->id,
            $bite->id,
        ]);

        $project = Project::create([
            'title' => 'Aplicativo mobile',
            'slug' => 'aplicativo-mobile',
            'description' => 'Aplicativo mobile desenvolvido para facilitar o acesso dos clientes aos serviços da empresa.',
            'category' => 'Aplicativos mobile',
            'year' => 2025,
            'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png',
            'image_alt' => 'Aplicativo mobile',
            'application_url' => null,
            'featured' => false,
        ]);

        $project->partners()->attach([
            $raphael->id,
            $nicolas->id,
        ]);
    }
}
