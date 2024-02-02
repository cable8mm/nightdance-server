<?php

class MonthSalesController extends AppController
{
    public $name = 'MonthSales';

    public $helpers = ['Html', 'Form'];

    public $paginate = [
        'limit' => 30,
    ];

    public function index()
    {
        $this->MonthSale->recursive = 0;
        $this->set('monthSales', $this->paginate());
    }

    public function view($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid MonthSale', true));
            $this->redirect(['action' => 'index']);
        }
        $this->set('monthSale', $this->MonthSale->read(null, $id));
    }

    public function add()
    {
        if (! empty($this->data)) {
            $this->MonthSale->create();
            if ($this->MonthSale->save($this->data)) {
                $this->Session->setFlash(__('The MonthSale has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The MonthSale could not be saved. Please, try again.', true));
            }
        }
    }

    public function edit($id = null)
    {
        if (! $id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid MonthSale', true));
            $this->redirect(['action' => 'index']);
        }
        if (! empty($this->data)) {
            if ($this->MonthSale->save($this->data)) {
                $this->Session->setFlash(__('The MonthSale has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The MonthSale could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->MonthSale->read(null, $id);
        }
    }

    public function delete($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid id for MonthSale', true));
            $this->redirect(['action' => 'index']);
        }
        if ($this->MonthSale->del($id)) {
            $this->Session->setFlash(__('MonthSale deleted', true));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('The MonthSale could not be deleted. Please, try again.', true));
        $this->redirect(['action' => 'index']);
    }
}
