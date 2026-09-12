<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PDO;
use DB;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = ['NAME', 'PRICE', 'QUANTITIES_AVAILABLE', 'SALE_ID', 'OLD_PRICE', 'DESCRIPTION'];

    public function opinions()
    {
        return $this->hasMany(Opinions::class);
    }

    public static function getProductDetails()
    {
        return DB::table('vw_product_details')->get();
    }

    public static function addProduct($name, $price, $quantitiesAvailable, $saleId, $oldPrice, $description)
    {
        $pdo = DB::getPdo();
        $stmt = $pdo->prepare("BEGIN pkg_products.add_product(:name, :price, :quantities_available, :sale_id, :old_price, :description); END;");
        
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_INT);
        $stmt->bindParam(':quantities_available', $quantitiesAvailable, PDO::PARAM_INT);
        $stmt->bindParam(':sale_id', $saleId, PDO::PARAM_INT);
        $stmt->bindParam(':old_price', $oldPrice, PDO::PARAM_INT);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        
        $stmt->execute();
    }

    public static function updateProductPrice($productId, $price)
    {
        $pdo = DB::getPdo();
        $stmt = $pdo->prepare("BEGIN pkg_products.update_product_price(:product_id, :price); END;");
        
        $stmt->bindParam(':product_id', $productId, PDO::PARAM_INT);
        $stmt->bindParam(':price', $price, PDO::PARAM_INT);
        
        $stmt->execute();
    }
    
    public static function getTopRatedProducts()
    {
        $pdo = DB::getPdo();
        $stmt = $pdo->prepare("BEGIN :cursor := fn_get_top_rated_products; END;");
        
        $stmt->bindParam(':cursor', $cursor, PDO::PARAM_STMT);
        $stmt->execute();
        
        oci_execute($cursor, OCI_DEFAULT);
        
        $products = [];
        while ($row = oci_fetch_assoc($cursor)) {
            $products[] = $row;
        }
        
        oci_free_statement($cursor);
        
        return $products;
    }

    public static function getPromotionalProducts()
    {
        $pdo = DB::getPdo();
        $stmt = $pdo->prepare("BEGIN sp_get_promotional_products(:p_products); END;");
        
        $stmt->bindParam(':p_products', $cursor, PDO::PARAM_STMT);
        $stmt->execute();
        
        oci_execute($cursor, OCI_DEFAULT);
        
        $products = [];
        while ($row = oci_fetch_assoc($cursor)) {
            $products[] = $row;
        }
        
        oci_free_statement($cursor);
        
        foreach ($products as &$product) {
            $productId = $product['ID'];
            $product['productsCategories'] = DB::table('products_categories')
                ->join('categories', 'categories.id', '=', 'products_categories.category_id')
                ->where('products_categories.products_id', $productId)
                ->select('categories.CATEGORY_NAME', 'categories.DESCRIPTION')
                ->get()->toArray();

            $product['photosProducts'] = DB::table('photos_products')
                ->where('products_id', $productId)
                ->select('path')
                ->get()->toArray();

            $product['sale'] = DB::table('sale')
                ->where('id', $product['SALE_ID'])
                ->select('DISCOUNT_AMOUNT')
                ->first();
        }

        return $products;
    }

    public static function getProductOpinions($productId)
    {
        $pdo = DB::getPdo();
        $stmt = $pdo->prepare("BEGIN :result := get_product_opinions(:product_id); END;");

        $stmt->bindParam(':product_id', $productId, PDO::PARAM_INT);
        $stmt->bindParam(':result', $cursor, PDO::PARAM_STMT);

        $stmt->execute();

        oci_execute($cursor, OCI_DEFAULT);

        $opinions = [];
        while ($row = oci_fetch_assoc($cursor)) {
            $opinions[] = $row;
        }

        oci_free_statement($cursor);

        return $opinions;
    }

    // Klucz trzeba podac jawnie. Eloquent zgadlby `sale_id`, a potem szukalby
    // tej nazwy w tablicy atrybutow modelu — ta trzyma klucz `SALE_ID`, wiec
    // relacja zawsze wychodzila pusta, mimo ze `whereHas('sale')` (czysty SQL,
    // nieczuly na wielkosc liter) produkt przepuszczal.
    public function sale()
    {
        return $this->belongsTo(Sale::class, 'SALE_ID');
    }

    public function products()
    {
        return $this->belongsToMany(Orders::class, 'order_product', 'PRODUCT_ID', 'ORDER_ID')
                    ->withPivot('QUANTITY');
    }

    public function specifications()
    {
        return $this->hasMany(Specifications::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'products_categories', 'products_id', 'category_id');
    }

    public function photosProducts()
    {
        return $this->hasMany(PhotosProducts::class);
    }

    public function productsCategories()
    {
        return $this->belongsToMany(Categories::class, 'products_categories', 'PRODUCTS_ID', 'CATEGORY_ID');
    }

    public function computerCategories()
    {
        return $this->productsCategories()->whereIn('CATEGORY_ID', [1, 2, 3]);
    }

    public function laptopCategories()
    {
        return $this->productsCategories()->whereIn('CATEGORY_ID', [13, 14, 15]);
    }

    public function caseCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 4);
    }

    public function coolingCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 5);
    }

    public function diskCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 6);
    }

    public function fanCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 7);
    }

    public function graphicsCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 8);
    }

    public function memoryRamCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 9);
    }

    public function motherboardCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 10);
    }

    public function powerSupplyCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 11);
    }

    public function processorCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 12);
    }

    public function gamingComputers() 
    {
        return $this->productsCategories()->where('CATEGORY_ID', 1);
    }

    public function learningComputers() 
    {
        return $this->productsCategories()->where('CATEGORY_ID', 2);
    }

    public function officeComputers() 
    {
        return $this->productsCategories()->where('CATEGORY_ID', 3);
    }

    public function gamingLaptops() 
    {
        return $this->productsCategories()->where('CATEGORY_ID', 13);
    }

    public function learningLaptops() 
    {
        return $this->productsCategories()->where('CATEGORY_ID', 14);
    }

    public function officeLaptops()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 15);
    }
}
