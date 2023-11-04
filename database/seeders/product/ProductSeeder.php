<?php

namespace Database\Seeders\Product;

use App\Models\products\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Product::truncate();

        $products = [
            [
                "product_name" => "Golpo Somorgo-1",
                "selected_categories" => 4,
                "image" =>"asset/frontend/products/notebook/golpo somorga 1/01.jpg"

            ],

            [
                "product_name" => "Golpo somorgo-3",
                "selected_categories" => 4,
                "image" =>"asset/frontend/products/notebook/golpo somorga 3/01.jpg"

            ],

            [
                "product_name" => "KK Kye Ring",
                "selected_categories" => 6,
                "image" =>"asset/frontend/products/key_ring/kk/updatKeyRing/01.jpg"

            ],

            [
                "product_name" =>"কলম কি ক",
                "selected_categories" => 2,
                "image" =>"asset/frontend/products/pen/01.png"

            ],

            [
                "product_name" => "কলমদানি",
                "selected_categories" => 2,
                "image" =>"asset/frontend/products/pen_holder/01.png"

            ],

            [
                "product_name" => "কি ক পত্রিকা",
                "selected_categories" => 4,
                "image" =>"asset/frontend/products/newspaper/01.png"

            ],

            [
                "product_name" => "কিশোরকণ্ঠ কলম-2",
                "selected_categories" => 2,
                "image" =>"asset/frontend/products/kisorkantho_pen/01.png"

            ],

            [
                "product_name" => "কিশোরকণ্ঠ ঘড়ি",
                "selected_categories" => 3,
                "image" =>"asset/frontend/products/watch/03.png"

            ],
            [
                "product_name" => "কিশোরকন্ঠ নোটবুক",
                "selected_categories" => 4,
                "image" =>"asset/frontend/products/notebook/3.png"

            ],

            [
                "product_name" => "ক্যালেন্ডার",
                "selected_categories" => 7,
                "image" =>"asset/frontend/products/watch/03.png"

            ],

            [
                "product_name" => "মগ কি ক",
                "selected_categories" => 1,
                "image" =>"asset/frontend/products/mug/01.png"

            ],
        ];


        foreach($products as $product){
               Product::create([
                "product_name" => $product['product_name'],
                "product_url" => $product['product_name'],
                "is_top_product" => '1',
                "selected_categories" => $product['selected_categories'],
                "short_description" => "Benny Bates, a poor boy from the Liverpol slums, is ten years old when the story begins. He scrapes a living running errands in the streets; his beloved but frail sister Nelly, a year younger, sells matches. Their mother is dead, their father a drink-sodden brute, who dies later on in the story, becomes violent towards Nelly and the two children run away from home. Helped by their friend the night-watchman Joe Wrag, and 'Granny' Betty Barker, manage to retain their independence and learn to lead Christian lives. Nelly, a child of great natural spiritual insight, acts as Benny's moral conscience; when she dies after a street accident, he is in despair.",
                "description" => "Benny Bates, a poor boy from the Liverpool slums, is ten years old when the story begins. He scrapes a living running errands in the streets; his beloved but frail sister Nelly, a year younger, sells matches. Their mother is dead, their father a drink-sodden brute, who dies later on in the story, becomes violent towards Nelly and the two children run away from home. Helped by their friend the night-watchman Joe Wrag, and 'Granny' Betty Barker, manage to retain their independence and learn to lead Christian lives. Nelly, a child of great natural spiritual insight, acts as Benny's moral conscience; when she dies after a street accident, he is in despair. A lucky encounter with Eva Lawrence, the little girl he will come to call his 'angel', leads to a job as office-boy to her father, a rich Liverpool businessman. Benny works hard, hoping to educate and better himself, but loses both job and reputation when Mr. Lawrence wrongly accuses him of stealing a five-pound note. Abandoning Liverpool, he nearly dies of starvation and heat-stroke, but is rescued and nursed back to health by a kindly farming family. He remains with them, working on the farm and studying in night school. Six years later, and by now grown up, he bravely stops a runaway carriage in a nearby lane; only afterwards does he discover that one of its occupants was Eva Lawrence. Benny has saved his 'angel's' life; now she reveals that she and her father have long known that he was innocent of the theft. The grateful Mr. Lawrence offers Benny a new job, this time as his clerk; he returns to Liverpool, to work his way up into partnership with Mr. Lawrence, and marriage with Eva, who gave him the shilling in his greatest hour of need, which he kept and never dared spend.",
                "image" => $product['image'],
                "cost" => 300,
                "sales_price" => 600,
                "stock" => 20,
                "low_stock" => 5,
                "meta_title" => 'Her benny',
                "meta_description" => 'meta description of the product',
                "schema_tag" => "['title' => 'hello']",
                "video_url" => "",
                "status" => "active",
                ]
               );
         
           
        }
       
    }
}
