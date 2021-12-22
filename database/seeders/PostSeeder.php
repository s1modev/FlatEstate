<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'id'=>1,
                'user_id'=>5,
                'title'=>'Curabitur aliquet quam id dui posuere blandit',
                'slug'=>'curabitur-aliquet-quam-id-dui-posuere-blandit',
                'deal'=>'sale',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Morocco',
                'city'=>'Rabat',
                'address'=>'hay el amal rue sidi yahya g05 n17',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'3',
                'bathrooms_number'=>'3',
                'surface'=>'600',
                'price'=>'500000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>0,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'house',
                'condition'=>'good',
                'avatar'=>'01.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>2,
                'user_id'=>5,
                'title'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim',
                'slug'=>'quisque-velit-nisi-pretium-ut-lacinia-in-elementum-id-enim',
                'deal'=>'sale',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Algeria',
                'city'=>'jazari',
                'address'=>'rue jamal merkawi g05 n17',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'3',
                'bathrooms_number'=>'3',
                'surface'=>'450',
                'price'=>'300000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>0,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'farm',
                'condition'=>'good',
                'avatar'=>'02.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>3,
                'user_id'=>5,
                'title'=>'Praesent sapien massa, convallis a pellentesque nec',
                'slug'=>'Praesent sapien massa, convallis a pellentesque nec',
                'deal'=>'sale',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Albania',
                'city'=>'Rabat',
                'address'=>'motawakil eec vero n101',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'5',
                'bathrooms_number'=>'3',
                'surface'=>'650',
                'price'=>'700000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>0,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'house',
                'condition'=>'good',
                'avatar'=>'03.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>4,
                'user_id'=>5,
                'title'=>'Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada',
                'slug'=>'pellentesque-in-ipsum-id-orci-porta-dapibus-donec-sollicitudin-molestie-malesuada-1',
                'deal'=>'sale',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Mexico',
                'city'=>'Meran',
                'address'=>'jawaz nec vero num 104',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'4',
                'bathrooms_number'=>'2',
                'surface'=>'120',
                'price'=>'200000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>0,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'office',
                'condition'=>'good',
                'avatar'=>'04.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>5,
                'user_id'=>5,
                'title'=>'Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit',
                'slug'=>'curabitur-aliquet-quam-id-dui-posuere-blandit-curabitur-aliquet-quam-id-dui-posuere-blandit-1',
                'deal'=>'sale',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Tunisia',
                'city'=>'Jamame',
                'address'=>'choka eec vero n 023',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'2',
                'bathrooms_number'=>'1',
                'surface'=>'90',
                'price'=>'350000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>1,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'apartment',
                'condition'=>'good',
                'avatar'=>'05.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>6,
                'user_id'=>5,
                'title'=>'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus',
                'slug'=>'curabitur-non-nulla-sit-amet-nisl-tempus-convallis-quis-ac-lectus',
                'deal'=>'sale',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Sweden',
                'city'=>'jomba',
                'address'=>'okera mora eec vero n101',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'5',
                'bathrooms_number'=>'3',
                'surface'=>'620',
                'price'=>'760000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>1,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'villa',
                'condition'=>'good',
                'avatar'=>'06.png',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>7,
                'user_id'=>5,
                'title'=>'Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada',
                'slug'=>'pellentesque-in-ipsum-id-orci-porta-dapibus-donec-sollicitudin-molestie-malesuada',
                'deal'=>'sale',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Oman',
                'city'=>'Alhimass',
                'address'=>'mojora eec vero n101',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'0',
                'bathrooms_number'=>'0',
                'surface'=>'36000',
                'price'=>'700000',
                'garage'=>0,
                'security'=>1,
                'parking'=>0,
                'balcony'=>0,
                'swimming_pool'=>0,
                'garden'=>0,
                'terrace'=>0,
                'category'=>'land',
                'condition'=>'good',
                'avatar'=>'07.jpeg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>9,
                'user_id'=>5,
                'title'=>'Cras ultricies ligula sed magna dictum porta. Quisque velit nisi',
                'slug'=>'cras-ultricies-ligula-sed-magna-dictum-porta-quisque-velit-nisi',
                'deal'=>'sale',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Norway',
                'city'=>'accusa',
                'address'=>'morani eec vero n 023',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'3',
                'bathrooms_number'=>'2',
                'surface'=>'90',
                'price'=>'350000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>1,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'house',
                'condition'=>'good',
                'avatar'=>'09.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>10,
                'user_id'=>5,
                'title'=>'Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit',
                'slug'=>'curabitur-aliquet-quam-id-dui-posuere-blandit-curabitur-aliquet-quam-id-dui-posuere-blandit',
                'deal'=>'sale',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Greece',
                'city'=>'onka',
                'address'=>'bomia eec vero n 023',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'3',
                'bathrooms_number'=>'2',
                'surface'=>'110',
                'price'=>'460000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>1,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'apartment',
                'condition'=>'good',
                'avatar'=>'010.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>11,
                'user_id'=>5,
                'title'=>'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere',
                'slug'=>'vestibulum-ante-ipsum-primis-in-faucibus-orci-luctus-et-ultrices-posuere',
                'deal'=>'sale',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Finland',
                'city'=>'Velit',
                'address'=>'Lacinia eec vero n 023',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'4',
                'bathrooms_number'=>'3',
                'surface'=>'200',
                'price'=>'750000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>1,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'house',
                'condition'=>'good',
                'avatar'=>'011.jpeg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],


            /* ---- for rent ---- */


            [
                'id'=>12,
                'user_id'=>5,
                'title'=>'Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit',
                'slug'=>'curabitur-aliquet-quam-id-dui-posuere-blandit-curabitur-aliquet-quam-id-dui-posuere-blandit-1',
                'deal'=>'rent',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Tunisia',
                'city'=>'Jamame',
                'address'=>'choka eec vero n 023',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'2',
                'bathrooms_number'=>'1',
                'surface'=>'90',
                'price'=>'350000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>1,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'apartment',
                'condition'=>'good',
                'avatar'=>'05.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>13,
                'user_id'=>5,
                'title'=>'Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada',
                'slug'=>'pellentesque-in-ipsum-id-orci-porta-dapibus-donec-sollicitudin-molestie-malesuada',
                'deal'=>'rent',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Oman',
                'city'=>'Alhimass',
                'address'=>'mojora eec vero n101',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'0',
                'bathrooms_number'=>'0',
                'surface'=>'36000',
                'price'=>'700000',
                'garage'=>0,
                'security'=>1,
                'parking'=>0,
                'balcony'=>0,
                'swimming_pool'=>0,
                'garden'=>0,
                'terrace'=>0,
                'category'=>'land',
                'condition'=>'good',
                'avatar'=>'07.jpeg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>14,
                'user_id'=>5,
                'title'=>'Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit',
                'slug'=>'curabitur-aliquet-quam-id-dui-posuere-blandit-curabitur-aliquet-quam-id-dui-posuere-blandit',
                'deal'=>'rent',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Greece',
                'city'=>'onka',
                'address'=>'bomia eec vero n 023',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'3',
                'bathrooms_number'=>'2',
                'surface'=>'110',
                'price'=>'460000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>1,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'apartment',
                'condition'=>'good',
                'avatar'=>'010.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>15,
                'user_id'=>5,
                'title'=>'Praesent sapien massa, convallis a pellentesque nec',
                'slug'=>'Praesent sapien massa, convallis a pellentesque nec',
                'deal'=>'rent',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Albania',
                'city'=>'Rabat',
                'address'=>'motawakil eec vero n101',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'5',
                'bathrooms_number'=>'3',
                'surface'=>'650',
                'price'=>'700000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>0,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'house',
                'condition'=>'good',
                'avatar'=>'03.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>16,
                'user_id'=>5,
                'title'=>'Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada',
                'slug'=>'pellentesque-in-ipsum-id-orci-porta-dapibus-donec-sollicitudin-molestie-malesuada-1',
                'deal'=>'rent',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Mexico',
                'city'=>'Meran',
                'address'=>'jawaz nec vero num 104',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'4',
                'bathrooms_number'=>'2',
                'surface'=>'120',
                'price'=>'200000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>0,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'office',
                'condition'=>'good',
                'avatar'=>'04.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>17,
                'user_id'=>5,
                'title'=>'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus',
                'slug'=>'curabitur-non-nulla-sit-amet-nisl-tempus-convallis-quis-ac-lectus',
                'deal'=>'rent',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Sweden',
                'city'=>'jomba',
                'address'=>'okera mora eec vero n101',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'5',
                'bathrooms_number'=>'3',
                'surface'=>'620',
                'price'=>'760000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>1,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'villa',
                'condition'=>'good',
                'avatar'=>'06.png',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            
            [
                'id'=>18,
                'user_id'=>5,
                'title'=>'Curabitur aliquet quam id dui posuere blandit',
                'slug'=>'curabitur-aliquet-quam-id-dui-posuere-blandit',
                'deal'=>'rent',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Morocco',
                'city'=>'Rabat',
                'address'=>'hay el amal rue sidi yahya g05 n17',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'3',
                'bathrooms_number'=>'3',
                'surface'=>'600',
                'price'=>'500000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>0,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'house',
                'condition'=>'good',
                'avatar'=>'01.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>19,
                'user_id'=>5,
                'title'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim',
                'slug'=>'quisque-velit-nisi-pretium-ut-lacinia-in-elementum-id-enim',
                'deal'=>'rent',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Algeria',
                'city'=>'jazari',
                'address'=>'rue jamal merkawi g05 n17',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'3',
                'bathrooms_number'=>'3',
                'surface'=>'450',
                'price'=>'300000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>0,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'farm',
                'condition'=>'good',
                'avatar'=>'02.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>20,
                'user_id'=>5,
                'title'=>'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere',
                'slug'=>'vestibulum-ante-ipsum-primis-in-faucibus-orci-luctus-et-ultrices-posuere',
                'deal'=>'rent',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Finland',
                'city'=>'Velit',
                'address'=>'Lacinia eec vero n 023',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'4',
                'bathrooms_number'=>'3',
                'surface'=>'200',
                'price'=>'750000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>1,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'house',
                'condition'=>'good',
                'avatar'=>'011.jpeg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=>21,
                'user_id'=>5,
                'title'=>'Cras ultricies ligula sed magna dictum porta. Quisque velit nisi',
                'slug'=>'cras-ultricies-ligula-sed-magna-dictum-porta-quisque-velit-nisi',
                'deal'=>'rent',
                'description'=>'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. 
                
                Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.',
                'country'=>'Norway',
                'city'=>'accusa',
                'address'=>'morani eec vero n 023',
                'lat'=>'33.88568016418972',
                'lng'=>'-6.79941654374999',
                'bedrooms_number'=>'3',
                'bathrooms_number'=>'2',
                'surface'=>'90',
                'price'=>'350000',
                'garage'=>1,
                'security'=>1,
                'parking'=>1,
                'balcony'=>1,
                'swimming_pool'=>1,
                'garden'=>1,
                'terrace'=>1,
                'category'=>'house',
                'condition'=>'good',
                'avatar'=>'09.jpg',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            
            
            
        ];

        $post_images = [
            [
                'post_id'=>'1',
                'name'=>'01.jpg',
            ],
            [
                'post_id'=>'1',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'1',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'1',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'1',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'1',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'1',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */

            [
                'post_id'=>'2',
                'name'=>'02.jpg',
            ],
            [
                'post_id'=>'2',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'2',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'2',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'2',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'2',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'2',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */

            [
                'post_id'=>'3',
                'name'=>'03.jpg',
            ],
            [
                'post_id'=>'3',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'3',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'3',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'3',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'3',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'3',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */
            [
                'post_id'=>'4',
                'name'=>'04.jpg',
            ],
            [
                'post_id'=>'4',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'4',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'4',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'4',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'4',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'4',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */

            [
                'post_id'=>'5',
                'name'=>'05.jpg',
            ],
            [
                'post_id'=>'5',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'5',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'5',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'5',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'5',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'5',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */

            [
                'post_id'=>'6',
                'name'=>'06.png',
            ],
            [
                'post_id'=>'6',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'6',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'6',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'6',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'6',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'6',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */
            
            [
                'post_id'=>'7',
                'name'=>'07.jpeg',
            ],
            [
                'post_id'=>'7',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'7',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'7',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'7',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'7',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'7',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */
            
            [
                'post_id'=>'9',
                'name'=>'09.jpg',
            ],
            [
                'post_id'=>'9',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'9',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'9',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'9',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'9',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'9',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */
            
            [
                'post_id'=>'10',
                'name'=>'010.jpg',
            ],
            [
                'post_id'=>'10',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'10',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'10',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'10',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'10',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'10',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */
            
            [
                'post_id'=>'11',
                'name'=>'011.jpeg',
            ],
            [
                'post_id'=>'11',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'11',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'11',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'11',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'11',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'11',
                'name'=>'106.jpg',
            ],



            /* ****************************************** */
            /* ****************************************** */
            /* ****************************************** */
            /* ****************************************** */




            [
                'post_id'=>'12',
                'name'=>'01.jpg',
            ],
            [
                'post_id'=>'12',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'12',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'12',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'12',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'12',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'12',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */

            [
                'post_id'=>'13',
                'name'=>'02.jpg',
            ],
            [
                'post_id'=>'13',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'13',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'13',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'13',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'13',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'13',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */

            [
                'post_id'=>'14',
                'name'=>'03.jpg',
            ],
            [
                'post_id'=>'14',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'14',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'14',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'14',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'14',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'14',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */
            [
                'post_id'=>'15',
                'name'=>'04.jpg',
            ],
            [
                'post_id'=>'15',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'15',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'15',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'15',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'15',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'15',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */

            [
                'post_id'=>'16',
                'name'=>'05.jpg',
            ],
            [
                'post_id'=>'16',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'16',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'16',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'16',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'16',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'16',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */

            [
                'post_id'=>'17',
                'name'=>'06.png',
            ],
            [
                'post_id'=>'17',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'17',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'17',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'17',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'17',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'17',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */
            
            [
                'post_id'=>'18',
                'name'=>'07.jpeg',
            ],
            [
                'post_id'=>'18',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'18',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'18',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'18',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'18',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'18',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */
            
            [
                'post_id'=>'19',
                'name'=>'09.jpg',
            ],
            [
                'post_id'=>'19',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'19',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'19',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'19',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'19',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'19',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */
            
            [
                'post_id'=>'20',
                'name'=>'010.jpg',
            ],
            [
                'post_id'=>'20',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'20',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'20',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'20',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'20',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'20',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */
            
            [
                'post_id'=>'21',
                'name'=>'011.jpeg',
            ],
            [
                'post_id'=>'21',
                'name'=>'101.jpg',
            ],
            [
                'post_id'=>'21',
                'name'=>'102.jpg',
            ],
            [
                'post_id'=>'21',
                'name'=>'103.jpg',
            ],
            [
                'post_id'=>'21',
                'name'=>'104.jpg',
            ],
            [
                'post_id'=>'21',
                'name'=>'105.jpg',
            ],
            [
                'post_id'=>'21',
                'name'=>'106.jpg',
            ],
            /* ****************************************** */
            
        ];

        Post::insert($posts);
        Image::insert($post_images);
    }
}
