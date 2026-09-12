<?php

namespace App\Http\Controllers;
use App\Models\Products;


class MainController extends Controller
{
    public function index()
    {
        // `whereHas('productsCategories')` nie jest ozdobnikiem: widok buduje
        // odnosnik przez `route($produkt->productsCategories->first()->category_name)`,
        // wiec produkt promocyjny bez kategorii konczyl sie bledem 500.
        $produktyPromocyjne = Products::whereHas('sale')
            ->whereHas('productsCategories')
            ->with(['sale', 'photosProducts', 'productsCategories'])
            ->get();
        
        $iloscKomputerow = Products::whereHas('computerCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscLaptopow = Products::whereHas('laptopCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscCases = Products::whereHas('caseCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscCooling = Products::whereHas('coolingCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscDisks = Products::whereHas('diskCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscFans = Products::whereHas('fanCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscGraphics = Products::whereHas('graphicsCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscMemoryRam = Products::whereHas('memoryRamCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscMotherboards = Products::whereHas('motherboardCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscPowerSupply = Products::whereHas('powerSupplyCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscProcessors = Products::whereHas('processorCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscGamingComputers = Products::whereHas('gamingComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscLearningComputers = Products::whereHas('learningComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscOfficeComputers = Products::whereHas('officeComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscGamingLaptops = Products::whereHas('gamingLaptops')->sum('QUANTITIES_AVAILABLE');
        $iloscLearningLaptops = Products::whereHas('learningLaptops')->sum('QUANTITIES_AVAILABLE');
        $iloscOfficeLaptops = Products::whereHas('officeLaptops')->sum('QUANTITIES_AVAILABLE');

        $randomProducts = Products::inRandomOrder()->take(4)->get();

        $computerProducts = Products::whereHas('productsCategories', function ($query) {
            $query->whereIn('CATEGORY_ID', [1, 2, 3]);
        })->take(8)->get();

        $laptopProducts = Products::whereHas('productsCategories', function ($query) {
            $query->whereIn('CATEGORY_ID', [13, 14, 15]);
        })->take(8)->get();

        $componentProducts = Products::whereHas('productsCategories', function ($query) {
            $query->whereIn('CATEGORY_ID', [4, 5, 6, 7, 8, 9, 10, 11, 12]);
        })->inRandomOrder()->take(8)->get();

        $selectedLaptop = Products::where('id', 19)->with('photosProducts')->first();
        $soldCount = 2; 
        $availableCount = $selectedLaptop ? $selectedLaptop->quantities_available : 0;     
        
        $selectedComputer = Products::where('id', 5)->with('photosProducts')->first();
        $soldCount2 = 1; 
        $availableCount2 = $selectedComputer ? $selectedComputer->quantities_available : 0;

        return view('index', compact('produktyPromocyjne', 'iloscKomputerow', 'iloscLaptopow', 'iloscCases',
         'iloscCooling', 'iloscDisks', 'iloscFans', 'iloscGraphics', 'iloscMemoryRam', 'iloscMotherboards',
         'iloscPowerSupply', 'iloscProcessors', 'iloscGamingComputers', 'iloscLearningComputers', 'iloscOfficeComputers', 
         'iloscGamingLaptops', 'iloscLearningLaptops', 'iloscOfficeLaptops', 'randomProducts',
         'computerProducts', 'laptopProducts', 'componentProducts', 'selectedLaptop', 'soldCount', 'availableCount',
         'selectedComputer', 'soldCount2', 'availableCount2'));
    }


    public function faq()
    {
        $iloscKomputerow = Products::whereHas('computerCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscLaptopow = Products::whereHas('laptopCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscCases = Products::whereHas('caseCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscCooling = Products::whereHas('coolingCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscDisks = Products::whereHas('diskCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscFans = Products::whereHas('fanCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscGraphics = Products::whereHas('graphicsCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscMemoryRam = Products::whereHas('memoryRamCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscMotherboards = Products::whereHas('motherboardCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscPowerSupply = Products::whereHas('powerSupplyCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscProcessors = Products::whereHas('processorCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscGamingComputers = Products::whereHas('gamingComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscLearningComputers = Products::whereHas('learningComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscOfficeComputers = Products::whereHas('officeComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscGamingLaptops = Products::whereHas('gamingLaptops')->sum('QUANTITIES_AVAILABLE');
        $iloscLearningLaptops = Products::whereHas('learningLaptops')->sum('QUANTITIES_AVAILABLE');
        $iloscOfficeLaptops = Products::whereHas('officeLaptops')->sum('QUANTITIES_AVAILABLE');
        
        return view('faq', compact('iloscKomputerow', 'iloscLaptopow', 'iloscCases',
        'iloscCooling', 'iloscDisks', 'iloscFans', 'iloscGraphics', 'iloscMemoryRam', 'iloscMotherboards',
        'iloscPowerSupply', 'iloscProcessors', 'iloscGamingComputers', 'iloscLearningComputers', 'iloscOfficeComputers', 
        'iloscGamingLaptops', 'iloscLearningLaptops', 'iloscOfficeLaptops'));
    }

    public function contact()
    {
        $iloscKomputerow = Products::whereHas('computerCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscLaptopow = Products::whereHas('laptopCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscCases = Products::whereHas('caseCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscCooling = Products::whereHas('coolingCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscDisks = Products::whereHas('diskCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscFans = Products::whereHas('fanCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscGraphics = Products::whereHas('graphicsCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscMemoryRam = Products::whereHas('memoryRamCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscMotherboards = Products::whereHas('motherboardCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscPowerSupply = Products::whereHas('powerSupplyCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscProcessors = Products::whereHas('processorCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscGamingComputers = Products::whereHas('gamingComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscLearningComputers = Products::whereHas('learningComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscOfficeComputers = Products::whereHas('officeComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscGamingLaptops = Products::whereHas('gamingLaptops')->sum('QUANTITIES_AVAILABLE');
        $iloscLearningLaptops = Products::whereHas('learningLaptops')->sum('QUANTITIES_AVAILABLE');
        $iloscOfficeLaptops = Products::whereHas('officeLaptops')->sum('QUANTITIES_AVAILABLE');

        return view('contact', compact('iloscKomputerow', 'iloscLaptopow', 'iloscCases',
        'iloscCooling', 'iloscDisks', 'iloscFans', 'iloscGraphics', 'iloscMemoryRam', 'iloscMotherboards',
        'iloscPowerSupply', 'iloscProcessors', 'iloscGamingComputers', 'iloscLearningComputers', 'iloscOfficeComputers', 
        'iloscGamingLaptops', 'iloscLearningLaptops', 'iloscOfficeLaptops'));
    }

    public function sales()
    {
        $promotionalProducts = Products::getPromotionalProducts();
        
        $iloscKomputerow = Products::whereHas('computerCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscLaptopow = Products::whereHas('laptopCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscCases = Products::whereHas('caseCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscCooling = Products::whereHas('coolingCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscDisks = Products::whereHas('diskCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscFans = Products::whereHas('fanCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscGraphics = Products::whereHas('graphicsCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscMemoryRam = Products::whereHas('memoryRamCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscMotherboards = Products::whereHas('motherboardCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscPowerSupply = Products::whereHas('powerSupplyCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscProcessors = Products::whereHas('processorCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscGamingComputers = Products::whereHas('gamingComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscLearningComputers = Products::whereHas('learningComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscOfficeComputers = Products::whereHas('officeComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscGamingLaptops = Products::whereHas('gamingLaptops')->sum('QUANTITIES_AVAILABLE');
        $iloscLearningLaptops = Products::whereHas('learningLaptops')->sum('QUANTITIES_AVAILABLE');
        $iloscOfficeLaptops = Products::whereHas('officeLaptops')->sum('QUANTITIES_AVAILABLE');

        return view('sales', compact('promotionalProducts', 'iloscKomputerow', 'iloscLaptopow', 'iloscCases',
        'iloscCooling', 'iloscDisks', 'iloscFans', 'iloscGraphics', 'iloscMemoryRam', 'iloscMotherboards',
        'iloscPowerSupply', 'iloscProcessors', 'iloscGamingComputers', 'iloscLearningComputers', 'iloscOfficeComputers', 
        'iloscGamingLaptops', 'iloscLearningLaptops', 'iloscOfficeLaptops'));
    }

    public function privacy()
    {
        $iloscKomputerow = Products::whereHas('computerCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscLaptopow = Products::whereHas('laptopCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscCases = Products::whereHas('caseCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscCooling = Products::whereHas('coolingCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscDisks = Products::whereHas('diskCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscFans = Products::whereHas('fanCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscGraphics = Products::whereHas('graphicsCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscMemoryRam = Products::whereHas('memoryRamCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscMotherboards = Products::whereHas('motherboardCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscPowerSupply = Products::whereHas('powerSupplyCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscProcessors = Products::whereHas('processorCategories')->sum('QUANTITIES_AVAILABLE');
        $iloscGamingComputers = Products::whereHas('gamingComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscLearningComputers = Products::whereHas('learningComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscOfficeComputers = Products::whereHas('officeComputers')->sum('QUANTITIES_AVAILABLE');
        $iloscGamingLaptops = Products::whereHas('gamingLaptops')->sum('QUANTITIES_AVAILABLE');
        $iloscLearningLaptops = Products::whereHas('learningLaptops')->sum('QUANTITIES_AVAILABLE');
        $iloscOfficeLaptops = Products::whereHas('officeLaptops')->sum('QUANTITIES_AVAILABLE');

        return view('privacy', compact('iloscKomputerow', 'iloscLaptopow', 'iloscCases',
        'iloscCooling', 'iloscDisks', 'iloscFans', 'iloscGraphics', 'iloscMemoryRam', 'iloscMotherboards',
        'iloscPowerSupply', 'iloscProcessors', 'iloscGamingComputers', 'iloscLearningComputers', 'iloscOfficeComputers', 
        'iloscGamingLaptops', 'iloscLearningLaptops', 'iloscOfficeLaptops'));
    }
}
