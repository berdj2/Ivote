<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Voter;

class VoterController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Voter';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Voter());

        $grid->column('id', __('Id'));
        $grid->column('candidate', __('Candidate'));
        $grid->column('BSN', __('BSN'));
        $grid->column('Voter_code', __('Voter code'));
        $grid->column('description', __('Description'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Voter::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('candidate', __('Candidate'));
        $show->field('BSN', __('BSN'));
        $show->field('Voter_code', __('Voter code'));
        $show->field('description', __('Description'));
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
        $form = new Form(new Voter());

        $form->text('candidate', __('Candidate'));
        $form->text('BSN', __('BSN'));
        $form->text('Voter_code', __('Voter code'));
        $form->text('description', __('Description'));

        return $form;
    }
}
