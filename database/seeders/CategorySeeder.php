<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Categorías principales
            [
                'name' => 'Refrigeradores Comerciales',
                'slug' => 'refrigeradores-comerciales',
                'description' => 'Equipos de refrigeración para uso comercial e industrial',
                'parent_id' => null,
                'is_active' => true,
                'sort_order' => 1,
                'children' => [
                    [
                        'name' => 'Vitrinas Refrigeradas',
                        'slug' => 'vitrinas-refrigeradas',
                        'description' => 'Vitrinas para exhibición de productos refrigerados',
                        'is_active' => true,
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Refrigeradores Verticales',
                        'slug' => 'refrigeradores-verticales',
                        'description' => 'Refrigeradores de puerta vertical para comercios',
                        'is_active' => true,
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'Refrigeradores Horizontales',
                        'slug' => 'refrigeradores-horizontales',
                        'description' => 'Refrigeradores de tapa superior tipo mostrador',
                        'is_active' => true,
                        'sort_order' => 3,
                    ],
                    [
                        'name' => 'Cámaras Frías',
                        'slug' => 'camaras-frias',
                        'description' => 'Cámaras frigoríficas para almacenamiento',
                        'is_active' => true,
                        'sort_order' => 4,
                    ],
                ],
            ],
            [
                'name' => 'Congeladores',
                'slug' => 'congeladores',
                'description' => 'Equipos de congelación comercial y doméstica',
                'parent_id' => null,
                'is_active' => true,
                'sort_order' => 2,
                'children' => [
                    [
                        'name' => 'Congeladores Verticales',
                        'slug' => 'congeladores-verticales',
                        'description' => 'Congeladores de puerta vertical',
                        'is_active' => true,
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Congeladores Horizontales',
                        'slug' => 'congeladores-horizontales',
                        'description' => 'Congeladores tipo cofre',
                        'is_active' => true,
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'Túneles de Congelación',
                        'slug' => 'tuneles-congelacion',
                        'description' => 'Equipos de congelación rápida tipo túnel',
                        'is_active' => true,
                        'sort_order' => 3,
                    ],
                ],
            ],
            [
                'name' => 'Refrigeradores Domésticos',
                'slug' => 'refrigeradores-domesticos',
                'description' => 'Equipos de refrigeración para uso doméstico',
                'parent_id' => null,
                'is_active' => true,
                'sort_order' => 3,
                'children' => [
                    [
                        'name' => 'Refrigeradores de Una Puerta',
                        'slug' => 'refrigeradores-una-puerta',
                        'description' => 'Refrigeradores compactos de una puerta',
                        'is_active' => true,
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Refrigeradores de Dos Puertas',
                        'slug' => 'refrigeradores-dos-puertas',
                        'description' => 'Refrigeradores con compartimento separado',
                        'is_active' => true,
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'Refrigeradores Side by Side',
                        'slug' => 'refrigeradores-side-by-side',
                        'description' => 'Refrigeradores de dos puertas laterales',
                        'is_active' => true,
                        'sort_order' => 3,
                    ],
                    [
                        'name' => 'Refrigeradores French Door',
                        'slug' => 'refrigeradores-french-door',
                        'description' => 'Refrigeradores con puertas francesas',
                        'is_active' => true,
                        'sort_order' => 4,
                    ],
                ],
            ],
            [
                'name' => 'Aire Acondicionado',
                'slug' => 'aire-acondicionado',
                'description' => 'Sistemas de climatización y aire acondicionado',
                'parent_id' => null,
                'is_active' => true,
                'sort_order' => 4,
                'children' => [
                    [
                        'name' => 'Aires Split',
                        'slug' => 'aires-split',
                        'description' => 'Sistemas de aire acondicionado tipo split',
                        'is_active' => true,
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Aires de Ventana',
                        'slug' => 'aires-ventana',
                        'description' => 'Aires acondicionados de ventana',
                        'is_active' => true,
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'Aires Portátiles',
                        'slug' => 'aires-portatiles',
                        'description' => 'Equipos de aire acondicionado portátiles',
                        'is_active' => true,
                        'sort_order' => 3,
                    ],
                    [
                        'name' => 'Sistemas Centrales',
                        'slug' => 'sistemas-centrales',
                        'description' => 'Sistemas de climatización central',
                        'is_active' => true,
                        'sort_order' => 4,
                    ],
                ],
            ],
            [
                'name' => 'Partes y Repuestos',
                'slug' => 'partes-repuestos',
                'description' => 'Componentes y repuestos para equipos de refrigeración',
                'parent_id' => null,
                'is_active' => true,
                'sort_order' => 5,
                'children' => [
                    [
                        'name' => 'Compresores',
                        'slug' => 'compresores',
                        'description' => 'Compresores para sistemas de refrigeración',
                        'is_active' => true,
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Evaporadores',
                        'slug' => 'evaporadores',
                        'description' => 'Evaporadores y serpentines',
                        'is_active' => true,
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'Condensadores',
                        'slug' => 'condensadores',
                        'description' => 'Condensadores para sistemas de refrigeración',
                        'is_active' => true,
                        'sort_order' => 3,
                    ],
                    [
                        'name' => 'Válvulas y Reguladores',
                        'slug' => 'valvulas-reguladores',
                        'description' => 'Válvulas de expansión y reguladores de presión',
                        'is_active' => true,
                        'sort_order' => 4,
                    ],
                    [
                        'name' => 'Filtros y Secadores',
                        'slug' => 'filtros-secadores',
                        'description' => 'Filtros deshidratadores y secadores',
                        'is_active' => true,
                        'sort_order' => 5,
                    ],
                    [
                        'name' => 'Termostatos y Controles',
                        'slug' => 'termostatos-controles',
                        'description' => 'Termostatos y sistemas de control',
                        'is_active' => true,
                        'sort_order' => 6,
                    ],
                ],
            ],
            [
                'name' => 'Refrigerantes y Fluidos',
                'slug' => 'refrigerantes-fluidos',
                'description' => 'Gases refrigerantes y fluidos para sistemas de refrigeración',
                'parent_id' => null,
                'is_active' => true,
                'sort_order' => 6,
                'children' => [
                    [
                        'name' => 'R-134a',
                        'slug' => 'r-134a',
                        'description' => 'Refrigerante R-134a',
                        'is_active' => true,
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'R-404A',
                        'slug' => 'r-404a',
                        'description' => 'Refrigerante R-404A',
                        'is_active' => true,
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'R-410A',
                        'slug' => 'r-410a',
                        'description' => 'Refrigerante R-410A',
                        'is_active' => true,
                        'sort_order' => 3,
                    ],
                    [
                        'name' => 'R-22',
                        'slug' => 'r-22',
                        'description' => 'Refrigerante R-22',
                        'is_active' => true,
                        'sort_order' => 4,
                    ],
                ],
            ],
            [
                'name' => 'Accesorios y Herramientas',
                'slug' => 'accesorios-herramientas',
                'description' => 'Accesorios y herramientas para instalación y mantenimiento',
                'parent_id' => null,
                'is_active' => true,
                'sort_order' => 7,
                'children' => [
                    [
                        'name' => 'Herramientas de Refrigeración',
                        'slug' => 'herramientas-refrigeracion',
                        'description' => 'Herramientas especializadas para refrigeración',
                        'is_active' => true,
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Mangueras y Conexiones',
                        'slug' => 'mangueras-conexiones',
                        'description' => 'Mangueras y conexiones para sistemas de refrigeración',
                        'is_active' => true,
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'Aislantes Térmicos',
                        'slug' => 'aislantes-termicos',
                        'description' => 'Materiales aislantes para tuberías y equipos',
                        'is_active' => true,
                        'sort_order' => 3,
                    ],
                    [
                        'name' => 'Bandejas y Estantes',
                        'slug' => 'bandejas-estantes',
                        'description' => 'Bandejas y estantes para refrigeradores',
                        'is_active' => true,
                        'sort_order' => 4,
                    ],
                ],
            ],
            [
                'name' => 'Equipos de Cocina Comercial',
                'slug' => 'equipos-cocina-comercial',
                'description' => 'Equipos de refrigeración para cocinas comerciales',
                'parent_id' => null,
                'is_active' => true,
                'sort_order' => 8,
                'children' => [
                    [
                        'name' => 'Máquinas de Hielo',
                        'slug' => 'maquinas-hielo',
                        'description' => 'Fabricadoras de hielo comercial',
                        'is_active' => true,
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Dispensadores de Bebidas',
                        'slug' => 'dispensadores-bebidas',
                        'description' => 'Dispensadores de bebidas frías',
                        'is_active' => true,
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'Muebles Refrigerados',
                        'slug' => 'muebles-refrigerados',
                        'description' => 'Muebles con sistema de refrigeración integrado',
                        'is_active' => true,
                        'sort_order' => 3,
                    ],
                ],
            ],
            [
                'name' => 'Sistemas de Ventilación',
                'slug' => 'sistemas-ventilacion',
                'description' => 'Equipos de ventilación y extracción',
                'parent_id' => null,
                'is_active' => true,
                'sort_order' => 9,
                'children' => [
                    [
                        'name' => 'Ventiladores Industriales',
                        'slug' => 'ventiladores-industriales',
                        'description' => 'Ventiladores para uso industrial',
                        'is_active' => true,
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Extractores de Aire',
                        'slug' => 'extractores-aire',
                        'description' => 'Sistemas de extracción de aire',
                        'is_active' => true,
                        'sort_order' => 2,
                    ],
                ],
            ],
            [
                'name' => 'Equipos de Frío Industrial',
                'slug' => 'equipos-frio-industrial',
                'description' => 'Equipos de refrigeración para uso industrial',
                'parent_id' => null,
                'is_active' => true,
                'sort_order' => 10,
                'children' => [
                    [
                        'name' => 'Torres de Enfriamiento',
                        'slug' => 'torres-enfriamiento',
                        'description' => 'Torres de enfriamiento industrial',
                        'is_active' => true,
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Chillers',
                        'slug' => 'chillers',
                        'description' => 'Enfriadores de agua tipo chiller',
                        'is_active' => true,
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'Sistemas de Refrigeración por Amoníaco',
                        'slug' => 'sistemas-refrigeracion-amoniaco',
                        'description' => 'Sistemas de refrigeración con amoníaco',
                        'is_active' => true,
                        'sort_order' => 3,
                    ],
                ],
            ],
        ];

        foreach ($categories as $categoryData) {
            $children = $categoryData['children'] ?? [];
            unset($categoryData['children']);

            // Crear categoría principal
            $parentCategory = Category::create([
                'name' => $categoryData['name'],
                'slug' => $categoryData['slug'],
                'description' => $categoryData['description'],
                'parent_id' => $categoryData['parent_id'],
                'is_active' => $categoryData['is_active'],
                'sort_order' => $categoryData['sort_order'],
            ]);

            // Crear subcategorías
            foreach ($children as $childData) {
                Category::create([
                    'name' => $childData['name'],
                    'slug' => $childData['slug'],
                    'description' => $childData['description'],
                    'parent_id' => $parentCategory->id,
                    'is_active' => $childData['is_active'],
                    'sort_order' => $childData['sort_order'],
                ]);
            }
        }
    }
}

