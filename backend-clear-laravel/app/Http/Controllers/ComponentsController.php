<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function components()
    {
        $randomProducts = Products::with(['productsCategories', 'photosProducts'])->inRandomOrder()->take(4)->get();

        $komponentyCategoryIds = [4, 5, 6, 7, 8, 9, 10, 11, 12];
        $komponentyAll = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komponentyCategoryIds) {
            $query->whereIn('CATEGORY_ID', $komponentyCategoryIds);
        })->get();

        $komponentyCategoryIds4 = [4];
        $komponentyCases = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komponentyCategoryIds4) {
            $query->whereIn('CATEGORY_ID', $komponentyCategoryIds4);
        })->get();

        $komponentyCategoryIds5 = [5];
        $komponentyCooling = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komponentyCategoryIds5) {
            $query->whereIn('CATEGORY_ID', $komponentyCategoryIds5);
        })->get();

        $komponentyCategoryIds6 = [6];
        $komponentyDisks = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komponentyCategoryIds6) {
            $query->whereIn('CATEGORY_ID', $komponentyCategoryIds6);
        })->get();

        $komponentyCategoryIds7 = [7];
        $komponentyFans = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komponentyCategoryIds7) {
            $query->whereIn('CATEGORY_ID', $komponentyCategoryIds7);
        })->get();

        $komponentyCategoryIds8 = [8];
        $komponentyGraphics = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komponentyCategoryIds8) {
            $query->whereIn('CATEGORY_ID', $komponentyCategoryIds8);
        })->get();

        $komponentyCategoryIds9 = [9];
        $komponentyMemoryRam = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komponentyCategoryIds9) {
            $query->whereIn('CATEGORY_ID', $komponentyCategoryIds9);
        })->get();

        $komponentyCategoryIds10 = [10];
        $komponentyMotherboards = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komponentyCategoryIds10) {
            $query->whereIn('CATEGORY_ID', $komponentyCategoryIds10);
        })->get();

        $komponentyCategoryIds11 = [11];
        $komponentyPowerSupply = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komponentyCategoryIds11) {
            $query->whereIn('CATEGORY_ID', $komponentyCategoryIds11);
        })->get();

        $komponentyCategoryIds12 = [12];
        $komponentyProccesors = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komponentyCategoryIds12) {
            $query->whereIn('CATEGORY_ID', $komponentyCategoryIds12);
        })->get();

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

        return view('components.index', compact('randomProducts','komponentyAll', 'komponentyCases', 'komponentyCooling', 'komponentyDisks', 'komponentyFans', 
        'komponentyGraphics', 'komponentyMemoryRam', 'komponentyMotherboards', 'komponentyPowerSupply', 'komponentyProccesors', 
        'iloscKomputerow', 'iloscLaptopow', 'iloscCases',
        'iloscCooling', 'iloscDisks', 'iloscFans', 'iloscGraphics', 'iloscMemoryRam', 'iloscMotherboards',
        'iloscPowerSupply', 'iloscProcessors', 'iloscGamingComputers', 'iloscLearningComputers', 'iloscOfficeComputers', 
        'iloscGamingLaptops', 'iloscLearningLaptops', 'iloscOfficeLaptops'));
    }

    public function show($id)
    {
        $randomProducts = Products::inRandomOrder()->take(4)->get();

        $produkt = Products::with('photosProducts', 'specifications')->findOrFail($id);

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

        return view('components.show', compact('produkt', 'randomProducts', 'iloscKomputerow', 'iloscLaptopow', 'iloscCases',
        'iloscCooling', 'iloscDisks', 'iloscFans', 'iloscGraphics', 'iloscMemoryRam', 'iloscMotherboards',
        'iloscPowerSupply', 'iloscProcessors', 'iloscGamingComputers', 'iloscLearningComputers', 'iloscOfficeComputers', 
        'iloscGamingLaptops', 'iloscLearningLaptops', 'iloscOfficeLaptops'), [
            'produkt' => Products::findOrFail($id)
        ]);
    }
}
