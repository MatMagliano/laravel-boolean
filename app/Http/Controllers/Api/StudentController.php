<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;


    // public function all() 
    // {
    //     $students = config('students.students');
    //     return response()->json($students);
    // }  


    // public function getForAge($age) 
    // {
    //     $students = config('students.students');

    //     $ageFiltered = [];

    //     foreach ($students as $student) {
    //         if($student['age'] == $age) {
    //             $ageFiltered[] = $student;
    //         }
    //     }
    //     return response()->json($ageFiltered);
    // }  
    // public function filter(Request $request) 
    // {
    //     $students = config('students.students');
    //     $data = $request->all();
    //     // se age non è vuoto mi crea la variabile
    //     if(!empty($data['age'])) {
    //         $age = $data['age'];
    //     }
    //     // se role non è vuoto mi crea la variabile
    //     if(!empty($data['role'])) {
    //         $role = $data['role'];
    //     }
        

    //     $studentsFiltered = [];

    //     // controllo che il campo age non sia vuoto, se è pieno lo pusho nell' array filtered
    //     if (!empty($age)) {
    //         foreach ($students as $student) {
    //                 if($student['age'] == $age) {
    //                     $studentsFiltered[] = $student;
    //                 }
    //             }
    //     }

    //     // controllo che l' array filtered non sia vuoto  e che esista role, quindi creo un' altro array per pushare dentro  role/ di conseguenza l'array filtered è uguale all' array role in alternativa vado a lavorare su student
    //     if (count($studentsFiltered) > 0 && !empty($role)) {
    //         $studentsFilteredRole = [];
    //         foreach ($studentsFiltered as $student) {
    //             if($student['role'] == $role) {
    //                 $studentsFilteredRole[] = $student;
    //             }
    //         }
    //         $studentsFiltered = $studentsFilteredRole;
    //     } elseif(count($studentsFiltered) == 0 && !empty($role)) {
    //         $studentsFilteredRole = [];
    //         foreach ($students as $student) {
    //             if($student['role'] == $role) {
    //                 $studentsFilteredRole[] = $student;
    //             }
    //         }
    //         $studentsFiltered = $studentsFilteredRole;
    //     }
        
    //     return response()->json($studentsFiltered);
    // } 

    public function filter(Request $request) {
        $students = config('students.students');

        // creo un array con i dati che voglio passare
        $typeRequest = [
            'age',
            'role'
        ];
        // creo una variabile che contenga tutti i dati
        $data = $request->all();
        // faccio un ciclo per controillare se la chiave che passo  è dentro data
        foreach($data as $key => $value) {
            // se non è in data la cancello
            if(!in_array($key, $typeRequest)) {
                //unset controlla se la chiave è in data, se non lo è  elimina l'elemento
                unset($data[$key]);
            }
        }
        // dd($data);
        // i data sono filtrati e richiamo la funzione
        foreach($data as $key => $value) {
            // se siamo al primo (array_key_first)giro uso students, i tutti gli altri casi usi studentsFiltered perche devo passare ciò che ho gia filtrato
            if (array_key_first($data) == $key) {
                $studentFiltered = $this->filterFor($key, $value, $students);
            } else {
                //una volta passata la prima chiave, richiamo la mia funzione passando la variabile contenente gia la prima chiave
                $studentFiltered = $this->filterFor($key, $value, $studentFiltered);
            }
        }
        return response()->json($studentFiltered);
    }

    // -------------- FUNZIONE --------------
    // creo una funzione privata per filtrre tramite type(il tipo di elemento che voglio trovare) il valore(che voglio cercare nell'array) e l'array in cui cui cercare
    private function filterFor($type, $value, $array) {
        $filtered = [];
        foreach ($array as $element) {
            if($element[$type] == $value) {
                $filtered[] = $element;
            }
        }

    return $filtered;
    }

}
