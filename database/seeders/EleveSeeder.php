<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Eleve;
class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eleves = [
            [
                'nom'=>'tatang',
                'prenom'=>'brole',
                'email'=>'tatang@brole',
                'classe'=>'M1',
                'prenom'=>'brole',
                'sexe'=>'M',
                'specialite'=>'informatique',





            ]
            ];
            foreach ($eleves as  $elevesData) {
                $eleves = new Eleve;
                $eleves->nom=$elevesData['nom'];
                $eleves->prenom=$elevesData['prenom'];
                $eleves->email=$elevesData['email'];
                $eleves->classe=$elevesData['classe'];
                $eleves->sexe=$elevesData['sexe'];
                $eleves->specialite=$elevesData['specialite'];
                $eleves->save();
            }
    }
}
