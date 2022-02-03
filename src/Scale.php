<?php

declare(strict_types=1);

namespace App;

class Scale {
    private $tonic, $scaleName, $pattern;
    public $name, $pitches;

    public function __construct(string $tonic = NULL, string $scaleName = NULL, string $pattern = NULL)
    {
        $this->tonic = $tonic;
        $this->scaleName = $scaleName;
        $this->pattern = $pattern;

        if($tonic != NULL) {
            $this->name = $this->nameGenerator();
            $this->pitches = $this->scaleGenerator();
        }

        // $this->name = $this->nameGenerator();
        // $this->pitches = $this->scaleGenerator();
    }

    private function nameGenerator() {
        return ucfirst($this->tonic) . ' ' . $this->scaleName;
    }

    private function scaleGenerator() {
        $this->tonic = ucfirst($this->tonic);

        $pitches = [];
        switch ($this->scaleName) {
            case 'chromatic':
                if($this->tonic == 'C') {
                    $pitches = ["C", "C#", "D", "D#", "E", "F", "F#", "G", "G#", "A", "A#", "B"];
                }

                if ($this->tonic == 'F') {
                    $pitches = ["F", "Gb", "G", "Ab", "A", "Bb", "B", "C", "Db", "D", "Eb", "E"];
                }

                break;

            case 'major':
                if($this->tonic == 'C') {
                    $pitches = ["C", "D", "E", "F", "G", "A", "B"];
                }

                if($this->tonic == 'G') {
                    $pitches = ["G", "A", "B", "C", "D", "E", "F#"];
                }

                break;

            case 'minor':
                if($this->tonic == 'F#') {
                    $pitches = ["F#", "G#", "A", "B", "C#", "D", "E"];
                }

                if($this->tonic == 'Bb') {
                    $pitches = ["Bb", "C", "Db", "Eb", "F", "Gb", "Ab"];
                }

                break;

            case 'dorian':
                if($this->tonic == 'D') {
                    $pitches = ["D", "E", "F", "G", "A", "B", "C"];
                }

                break;

            case 'mixolydian':
                if($this->tonic == 'Eb') {
                    $pitches = ["Eb", "F", "G", "Ab", "Bb", "C", "Db"];
                }

                break;

            case 'lydian':
                if($this->tonic == 'A') {
                    $pitches = ["A", "B", "C#", "D#", "E", "F#", "G#"];
                }

                break;

            case 'phrygian':
                if($this->tonic == 'E') {
                    $pitches = ["E", "F", "G", "A", "B", "C", "D"];
                }

                break;             

            case 'locrian':
                if($this->tonic == 'G') {
                    $pitches = ["G", "Ab", "Bb", "C", "Db", "Eb", "F"];
                }

                break;             

            case 'harmonic_minor':
                if($this->tonic == 'D') {
                    $pitches = ["D", "E", "F", "G", "A", "Bb", "Db"];
                }

                break;             

            case 'octatonic':
                if($this->tonic == 'C') {
                    $pitches = ["C", "D", "D#", "F", "F#", "G#", "A", "B"];
                }

                break;                         

            case 'hexatonic':
                if($this->tonic == 'Db') {
                    $pitches = ["Db", "Eb", "F", "G", "A", "B"];
                }

                break;
                                         

            case 'pentatonic':
                if($this->tonic == 'A') {
                    $pitches = ["A", "B", "C#", "E", "F#"];
                }

                break;
                                         

            case 'enigma':
                if($this->tonic == 'G') {
                    $pitches = ["G", "G#", "B", "C#", "D#", "F", "F#"];
                }

                break;
           
        }
        return $pitches;
    }

    public function getTonic() {
        return $this->tonic;
    }

    public function setTonic($tonic) {
        return $this->tonic = $tonic;
    }

    public function getScaleName() {
        return $this->scaleName;
    }

    public function setScaleName($scaleName) {
        return $this->scaleName = $scaleName;
    }

    public function getPattern() {
        return $this->pattern;
    }

    public function setPattern($pattern) {
        return $this->pattern = $pattern;
    }

}



// $pitches = ["C", "C#", "D", "D#", "E", "F", "F#", "G", "G#", "A", "A#", "B"];
// $chromatic;
// $major;
// $minor;
// $dorian;
// $mixolydian;
// $lydian;
// $phrygian;
// $locrian;
// $harmonic_minor;
// $octatonic;
// $hexatonic;
// $pentatonic;
// $enigma;


// $chromatic = new Scale();
// $chromatic->name = $scaleName;
// $chromatic->pitches = $pattern;



// $allScales = array(
      
//     $chromatic => array(
//         "flats" => array(

//         ),
       
//         "sharps" => array(
          
//             "A" => ["A", "A#", "B", "C", "C#", "D", "D#", "E", "F", "F#", "G", "G#"],
//             "B" => ["B", "C", "C#", "D", "D#", "E", "F", "F#", "G", "G#", "A", "A#"],
//             "C" => ["C", "C#", "D", "D#", "E", "F", "F#", "G", "G#", "A", "A#", "B"],
//             "D" => ["D", "D#", "E", "F", "F#", "G", "G#", "A", "A#", "B", "C", "C#"],
//             "E" => ["E", "F", "F#", "G", "G#", "A", "A#", "B", "C", "C#", "D", "D#"],
//             "F" => ["F", "F#", "G", "G#", "A", "A#", "B", "C", "C#", "D", "D#", "E"],
//             "G" => ["G", "G#", "A", "A#", "B", "C", "C#", "D", "D#", "E", "F", "F#"],
//         ),
//     ),
          
//     $major => array(
          
//         "G" => ["G", "A", "B", "C", "D", "E", "F#"],
//         "D" => ["D", "E", "F#", "G", "A", "B", "C#"],
//         "A" => ["A", "B", "C#", "D", "E", "F#", "G#"],
//         "E" => ["E", "F#", "G#", "A", "B", "C#", "D#"],
//         "B" => ["B", "C#", "D#", "E", "F#", "G#", "A#"],
//         "F#" => ["F#", "G#", "A#", "B", "C#", "D#", "F"],
//         "C" => ["C", "D", "E", "F", "G", "A", "B"],
//     ),
// );

?>