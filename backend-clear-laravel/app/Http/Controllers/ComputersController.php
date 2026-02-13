<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ComputersController extends Controller
{
    public function computers()
    {
        $randomProducts = Products::with(['productsCategories', 'photosProducts'])->inRandomOrder()->take(4)->get();

        $komputeryCategoryIds = [1, 2, 3];
        $komputeryAll = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komputeryCategoryIds) {
            $query->whereIn('CATEGORY_ID', $komputeryCategoryIds);
        })->get();

        $komputeryCategoryIds2 = [1];
        $komputeryGaming = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komputeryCategoryIds2) {
            $query->whereIn('CATEGORY_ID', $komputeryCategoryIds2);
        })->get();

        $komputeryCategoryIds3 = [2];
        $komputeryLearning = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komputeryCategoryIds3) {
            $query->whereIn('CATEGORY_ID', $komputeryCategoryIds3);
        })->get();

        $komputeryCategoryIds4 = [3];
        $komputeryOffice = Products::with(['productsCategories', 'photosProducts'])->whereHas('productsCategories', function ($query) use ($komputeryCategoryIds4) {
            $query->whereIn('CATEGORY_ID', $komputeryCategoryIds4);
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
        $iloscGamingLaptops = Products::whereHas('gaminglaptops')->sum('QUANTITIES_AVAILABLE');
        $iloscLearningLaptops = Products::whereHas('learninglaptops')->sum('QUANTITIES_AVAILABLE');
        $iloscOfficeLaptops = Products::whereHas('officelaptops')->sum('QUANTITIES_AVAILABLE');

        return view('computers.index', compact('randomProducts', 'komputeryAll', 'komputeryGaming', 'komputeryLearning', 'komputeryOffice', 'iloscKomputerow', 'iloscLaptopow', 'iloscCases',
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

        return view('computers.show', compact('produkt', 'randomProducts', 'iloscKomputerow', 'iloscLaptopow', 'iloscCases',
        'iloscCooling', 'iloscDisks', 'iloscFans', 'iloscGraphics', 'iloscMemoryRam', 'iloscMotherboards',
        'iloscPowerSupply', 'iloscProcessors', 'iloscGamingComputers', 'iloscLearningComputers', 'iloscOfficeComputers', 
        'iloscGamingLaptops', 'iloscLearningLaptops', 'iloscOfficeLaptops'), [
            'produkt' => Products::findOrFail($id)
        ]);
    }
}
