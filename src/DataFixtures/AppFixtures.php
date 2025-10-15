<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $carsData = [
            [
                'name' => 'Peugeot 208',
                'description' => 'Citadine agile et économique, parfaite pour la ville. Finition Allure avec écran tactile et aide au stationnement.',
                'dailyPrice' => 55.00,
                'monthlyPrice' => 950.00,
                'seatsNumber' => 5,
                'manual' => true,
            ],
            [
                'name' => 'Volvo C40 Recharge',
                'description' => 'SUV coupé 100% électrique au design scandinave épuré. Performances de premier ordre et intérieur vegan high-tech.',
                'dailyPrice' => 155.00,
                'monthlyPrice' => 2700.00,
                'seatsNumber' => 5,
                'manual' => false,
            ],
            [
                'name' => 'Mini Cooper S',
                'description' => 'La citadine sportive par excellence. Karting-feeling garanti, look unique et finitions de qualité.',
                'dailyPrice' => 70.00,
                'monthlyPrice' => 1350.00,
                'seatsNumber' => 4,
                'manual' => true,
            ],
            [
                'name' => 'Volkswagen Golf 8',
                'description' => 'Berline de référence, alliant technologie, confort et performance. Moteur essence TSI sobre et puissant.',
                'dailyPrice' => 85.00,
                'monthlyPrice' => 1500.00,
                'seatsNumber' => 5,
                'manual' => false,
            ],
            [
                'name' => 'Tesla Model 3',
                'description' => 'Berline 100% électrique avec une grande autonomie. Accélération fulgurante et silence de fonctionnement. Autopilot inclus.',
                'dailyPrice' => 120.00,
                'monthlyPrice' => 2200.00,
                'seatsNumber' => 5,
                'manual' => false,
            ],
            [
                'name' => 'Porsche 911 Carrera S',
                'description' => 'Version S avec plus de puissance et un châssis encore plus affûté. Le summum de la voiture de sport utilisable au quotidien.',
                'dailyPrice' => 420.00,
                'monthlyPrice' => 6500.00,
                'seatsNumber' => 4,
                'manual' => false,
            ],
            [
                'name' => 'BMW Série 1',
                'description' => 'Compacte premium au caractère sportif. Propulsion pour un plaisir de conduite inégalé. Finition M Sport.',
                'dailyPrice' => 95.00,
                'monthlyPrice' => 1800.00,
                'seatsNumber' => 5,
                'manual' => false,
            ],
            [
                'name' => 'Renault Clio V',
                'description' => 'La voiture polyvalente par excellence. Confortable sur route et facile à manœuvrer. Idéale pour les jeunes conducteurs.',
                'dailyPrice' => 52.50,
                'monthlyPrice' => 900.00,
                'seatsNumber' => 5,
                'manual' => false,
            ],
        ];

        foreach ($carsData as $carItem) {
            $car = new Car();
            $car->setName($carItem['name']);
            $car->setDescription($carItem['description']);
            $car->setDailyPrice($carItem['dailyPrice']);
            $car->setMonthlyPrice($carItem['monthlyPrice']);
            $car->setSeatsNumber($carItem['seatsNumber']);
            $car->setManual($carItem['manual']);
            $manager->persist($car);
        }

        $manager->flush();
    }
}
