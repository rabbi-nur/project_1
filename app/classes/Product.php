<?php

namespace App\classes;
use App\classes\Category;
use App\classes\Brand;

class Product
{
    public $products,$category,$categoryById,$brand,$brandId,$result= [];
    public function getAllProduct()
    {
        return[
            0=>[
                'id'=>1,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=>'Curve Monitor',
                'price'=>'100000',
                'image'=>'6.png',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, aspernatur.'
            ],
            1=>[
                'id'=>2,
                'category_id'=>2,
                'brand_id'=>2,
                'name'=>'Shirt',
                'price'=>'1000',
                'image'=>'2.png',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, aspernatur.'
            ],
            2=>[
                'id'=>3,
                'category_id'=>3,
                'brand_id'=>3,
                'name'=>'Shoes',
                'price'=>'10000',
                'image'=>'7.png',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, aspernatur.'
            ],
            3=>[
                'id'=>4,
                'category_id'=>4,
                'brand_id'=>4,
                'name'=>'Sofaset',
                'price'=>'50000',
                'image'=>'4.png',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, aspernatur.'
            ],
            4=>[
                'id'=>5,
                'category_id'=>5,
                'brand_id'=>5,
                'name'=>'Cricket Bat',
                'price'=>'70000',
                'image'=>'5.png',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, aspernatur.'
            ],
        ];

    }
    public function getAllProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                $this->category = new Category();
                $this->categoryById = $this->category->getCategoryInfo($product['category_id']);
                $product['category_name'] = $this->categoryById['name'];
                //[category_name new index create kore name k print kora hoise ]

                $this->brand = new Brand();
                $this->brandId = $this->brand->getBrandInfo($product['brand_id']);
                $product['brand_name'] = $this->brandId['name']; //[brand_name new index]

                return $product;
            }
        }
    }

    public function getCategoryProduct($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['category_id'] == $id)
            {
                array_push($this->result, $product);
            }
        }
        return $this->result;
    }
}