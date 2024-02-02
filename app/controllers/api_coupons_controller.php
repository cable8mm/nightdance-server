<?php

class ApiCouponsController extends AppController
{
    public $name = 'ApiCoupons';

    public $helpers = ['Html', 'Form'];

    public function index()
    {
        $this->ApiCoupon->recursive = 0;
        $this->set('apiCoupons', $this->paginate());
    }

    public function view($id = null)
    {
        if (! $id) {
            $this->flash(__('Invalid ApiCoupon', true), ['action' => 'index']);
        }
        $this->set('apiCoupon', $this->ApiCoupon->read(null, $id));
    }

    public function add()
    {
        if (! empty($this->data)) {
            for ($i = 0; $i < $this->data['ApiCoupon']['count']; $i++) {
                $this->data['ApiCoupon']['serial'] = $this->generateSerial();
                $this->ApiCoupon->create();
                $this->ApiCoupon->save($this->data);
            }

            $this->flash(__('ApiCoupon generated', true), ['action' => 'index']);
        }
        $apiCouponGroups = $this->ApiCoupon->ApiCouponGroup->find('list');
        $apiUsers = $this->ApiCoupon->ApiUser->find('list');
        $this->set(compact('apiCouponGroups', 'apiUsers'));
    }

    public function generateSerial()
    {
        $chars = '0123456789';
        $res = '';
        for ($i = 0; $i < 16; $i++) {
            $res .= $chars[mt_rand(0, strlen($chars) - 1)];
            if (($i + 1) % 4 == 0 && $i != 15) {
                $res .= '-';
            }
        }

        return $res;
    }

    public function delete($id = null)
    {
        if (! $id) {
            $this->flash(__('Invalid ApiCoupon', true), ['action' => 'index']);
        }
        if ($this->ApiCoupon->del($id)) {
            $this->flash(__('ApiCoupon deleted', true), ['action' => 'index']);
        }
        $this->flash(__('The ApiCoupon could not be deleted. Please, try again.', true), ['action' => 'index']);
    }
}
