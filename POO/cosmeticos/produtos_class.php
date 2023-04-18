<?php
require_once('product_color_class.php');
class Product {
    public $id;
    public $brand;
    public $name;
    public $price;
    public $price_sign;
    public $currency;
    public $image_link;
    public $product_link;
    public $website_link;
    public $description;
    public $rating;
    public $category;
    public $product_type;
    public $tag_list;
    public $created_at;
    public $updated_at;
    public $product_api_url;
    public $api_featured_image;
    public  $product_colors = []; // array of ProductColor objects


    function fromJson($json_data){
        $this->id = $json_data['id'];
        $this->brand = $json_data['brand'];
        $this->name = $json_data['name'];
        $this->price = $json_data['price'];
        $this->price_sign = $json_data['price_sign'];
        $this->currency = $json_data['currency'];
        $this->image_link = $json_data['image_link'];
        $this->product_link = $json_data['product_link'];
        $this->website_link = $json_data['website_link'];
        $this->description = $json_data['description'];
        $this->rating = $json_data['rating'];
        $this->category = $json_data['category'];
        $this->product_type = $json_data['product_type'];
        $this->tag_list = $json_data['tag_list'];
        $this->created_at = $json_data['created_at'];
        $this->updated_at = $json_data['updated_at'];
        $this->product_api_url = $json_data['product_api_url'];
        $this->api_featured_image = $json_data['api_featured_image'];
        foreach($json_data['product_colors'] as $product_color) {
           $product_color = new ProductColor();
           array_push($this->product_colors,$product_color);
        }
    }
}

?>
