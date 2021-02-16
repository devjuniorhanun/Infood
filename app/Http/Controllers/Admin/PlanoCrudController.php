<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PlanoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PlanoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PlanoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Plano::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/plano');
        CRUD::setEntityNameStrings('Plano', 'Planos');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('nome')
            ->label('Plano')
            ->size(6);
        CRUD::column('url')
            ->label('Endereço');
        CRUD::column('valor')
            ->label('Valor')
            ->type('number')
            ->decimals(2)
            ->prefix('R$ ')
            ->dec_point(',')
            ->thousands_sep('.');
        CRUD::column('descricao')
            ->label('Descrição');
        CRUD::column('status')
            ->label('Status');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PlanoRequest::class);

        CRUD::field('nome')
            ->label('Plano.:')
            ->size(2);
        CRUD::field('valor')
            ->label('Valor Plano.:')
            ->size(2)
            ->attributes(['class' => 'form-control valores']);
        CRUD::field('descricao')
            ->label('Descrição.:')
            ->size(3);
        CRUD::field('status')
            ->label('Status.:')
            ->size(2)
            ->type('enum');
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        // no longer set up columns automatically for all db columns
        $this->crud->set('show.setFromDb', false);

        // Option 1: add whatever columns you were using in the List operation
        $this->setupListOperation();
    }
}
