<?php


namespace App\classes;
class Category
{
    public $categories;
    public function getAllCategory()
    {
        return[
            0=>[
                'id'=>1,
                'name'=>'Electronic',
            ],
            1=>[
                'id'=>2,
                'name'=>'Man Fashion',
            ],
            2=>[
                'id'=>3,
                'name'=>'Woman Fashion',
            ],
            3=>[
                'id'=>4,
                'name'=>'Home & Lifestyle',
            ],
            4=>[
                'id'=>5,
                'name'=>'Sports',
            ],
        ];
    }
    public function getCategoryInfo($id)
    {
        $this->categories = $this->getAllCategory();
        foreach ($this->categories as $category)
        {
            if ($category['id'] == $id)
            {
                return $category;
            }
        }
    }
}