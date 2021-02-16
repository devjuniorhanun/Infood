<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('avaliacao', 'AvaliacaoCrudController');
    Route::crud('categoria', 'CategoriaCrudController');
    Route::crud('cliente', 'ClienteCrudController');
    Route::crud('detalheplano', 'DetalhePlanoCrudController');
    Route::crud('mesa', 'MesaCrudController');
    Route::crud('pedido', 'PedidoCrudController');
    Route::crud('plano', 'PlanoCrudController');
    Route::crud('produto', 'ProdutoCrudController');
    Route::crud('empresa', 'TenantCrudController');
}); // this should be the absolute last line of this file