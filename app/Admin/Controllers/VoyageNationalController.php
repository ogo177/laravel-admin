<?php

namespace App\Admin\Controllers;

use App\Models\VoyageNational;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VoyageNationalController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Voyage National';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new VoyageNational());
        $grid->column('id', __('ID'));
        $grid->column('nom_voyage', __('Nom voyage') );
        $grid->column('nombre_personne',  __('Nombre personne'));
        $grid->column('date_voyage', __('Date voyage'))->date();
        $grid->column('description', __('Description'))->display(function($description){
            return $description;
        });
        $grid->column('prix',  __('Prix'));
        $grid->column('photo',  __('Photo'))->display(function($photo){
            return "<img src='".asset('uploads/'.$photo)."' width = '100'>";
        });
        $grid->column('programme_detaille', __('Programme detaille'));
        $grid->column('info_pratique', __('Info pratique'));
        $grid->column('nombre_jours', __('Nombre jours'));
        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('nom_voyage');
        });
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(VoyageNational::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('nom_voyage', __('Nom voyage'));
        $show->field('nombre_personne', __('Nombre personne'));
        $show->field('date_voyage', __('Date voyage'));
        $show->field('description', __('Description'))->unescape();
        $show->field('prix', __('Prix'));
        $show->field('photo', __('Photo'))->image();
        $show->field('programme_detaille', __('Programme detaille'))->unescape();
        $show->field('info_pratique', __('Info pratique'))->unescape();
        $show->field('nombre_jours', __('Nombre jours'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new VoyageNational());
        $form->text('nom_voyage','Nom voyage')->required();
        $form->number('nombre_personne', 'Nombre personne')->default(0)->required();

        $form->date('date_voyage','Date voyage')->format('YYYY-MM-DD')->required();
        $form->ckeditor('description', 'Description')->rows(10)->required();
        $form->currency('prix','Prix')->symbol('Dhs')->required();
        $form->image('photo','Photo')->required();
        $form->ckeditor('programme_detaille', 'Programme detaille')->rows(10)->required();
        $form->ckeditor('info_pratique', 'Info pratique')->rows(10)->required();
        $form->number('nombre_jours', 'Nombre jours')->default(0)->required();
        return $form;
    }
}
