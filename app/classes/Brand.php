<?php


namespace App\classes;
class Brand
{
    public $brands;
    public function getAllBrand()
    {
        return[
            0=>[
                'id'=>1,
                'name'=>'SONY',
            ],
            1=>[
                'id'=>2,
                'name'=>'YELLOW',
            ],
            2=>[
                'id'=>3,
                'name'=>'APEX',
            ],
            3=>[
                'id'=>4,
                'name'=>'ISHO ',
            ],
            4=>[
                'id'=>5,
                'name'=>'SG',
            ],
        ];
    }
    public function getBrandInfo($id)
    {
        $this->brands = $this->getAllBrand();
        foreach ($this->brands as $brand)
        {
            if ($brand['id'] == $id)
            {
                return $brand;
            }
        }

    }
}