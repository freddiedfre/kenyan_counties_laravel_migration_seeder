<?php

use Illuminate\Database\Seeder

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$kenyan_counties = array(
     	["1","Mombasa","Mombasa  County","Coast","212.5","9,39,370","Mombasa (City)"], 
     	["2","Kwale","Kwale County","Coast","8,270.30","6,49,931","Kwale"],  
     	["3","Kilifi","Kilifi County","Coast","12,245.90","11,09,735","Kilifi"],  
        ["4","TanaRiver","TanaRiver County","Coast","35,375.80","2,40,075","Hola"],  
     	["5","Lamu","Lamu County","Coast","6,497.70","1,01,539","Lamu" ], 
     	["6","Taita-Taveta","Taita-Taveta County","Coast","17,083.90","2,84,657","Voi"],  
     	["7","Garissa","Garissa County","NorthEastern","45,720.20","6,23,060","Garissa" ], 
     	["8","wajir","Wajir County","NorthEastern","55,840.60","6,61,941","Wajir" ], 
     	["9","Mandera","Mandera County","NorthEastern","25,797.70","10,25,756","Mandera"],  
     	["10","Marsabit","Marsabit County","Eastern","66,923.10","2,91,166","Marsabit"],  
     	["11","Isiolo","Isiolo County","Eastern","25,336.10","1,43,294","Isiolo"],  
     	["12","Meru","Meru County","Eastern","6,930.10","13,56,301","Meru"],  
     	["13","Tharaka-Nithi","Tharaka-Nithi County","Eastern","2,409.50","3,65,330","Chuka"],  
     	["14","Embu","Embu County","Eastern","2,555.90","5,16,212","Embu"],  
     	["15","Kitui","Kitui County","Eastern","24,385.10","10,12,709","Kitui"],  
     	["16","Machakos","Machakos County","Eastern","5,952.90","10,98,584","Machakos"],  
     	["17","Makueni","Makueni County","Eastern","8,008.90","8,84,527","Wote"],  
     	["18","Nyandarua","Nyandarua County","Central","3,107.70","5,96,268","OlKalou"],  
     	["19","Nyeri","Nyeri County","Central","2,361.00","6,93,558","Nyeri"],  
     	["20","Kirinyaga","Kirinyaga County","Central","1,205.40","5,28,054","Kerugoya/Kutus"], 
     	["21","Murang'a","Murang'a County","Central","2,325.80,9","42,581","Murang'a"], 
     	["22","Kiambu","Kiambu County","Central","2,449.20","16,23,282","Kiambu"],  
     	["23","Turkana","Turkana County","RiftValley","71,597.80","8,55,399","Lodwar"], 
     	["24","WestPokot","Westpokot County","RiftValley","8,418.20","5,12,690","Kapenguria"], 
     	["25","Samburu","Samburu County","RiftValley","20,182.50","2,23,947","Maralal"],  
     	["26","TransNzoia","TransNzoia County","RiftValley","2,469.90","8,18,757","Kitale"],  
     	["27","UasinGishu","UasinGishu County","RiftValley","2,955.30","8,94,179","Eldoret"],  
     	["28","Elgeyo-Marakwet","Elgeyo-Marakwet County","RiftValley","3,049.70","3,69,998","Iten"],  
     	["29","Nandi","Nandi County","RiftValley","2,884.50","7,52,965","Kapsabet"],  
     	["30","Baringo","Baringo County","RiftValley","11,075.30","5,55,561","Kabarnet"],  
     	["31","Laikipia","Laikipia County","RiftValley","8,696.10","3,99,227","Rumuruti"],  
     	["32","Nakuru","Nakuru County","RiftValley","7,509.50","16,03,325","Nakuru"],  
     	["33","Narok","Narok County","RiftValley","17,921.20","8,50,920","Narok"], 
     	["34","Kajiado","Kajiado County","RiftValley","21,292.70","6,87,312","Kajiado"], 
     	["35","Kericho","Kericho County","RiftValley","2,454.50","7,52,396","Kericho"], 
     	["36","Bomet","Bomet County","RiftValley","1,997.90","7,30,129","Bomet"], 
     	["37","Kakamega","Kakamega County","Western","3,033.80","16,60,651","Kakamega"], 
     	["38","Vihiga","Vihiga County","Western","531.3","5,54,622","Vihiga"], 
     	["39","Bungoma","Bungoma County","Western","2,206.90","13,75,063","Bungoma"], 
     	["40","Busia","Busia County","Western","1,628.40","7,43,946","Busia"], 
     	["41","Siaya","Siaya County","Nyanza","2,496.10","8,42,304","Siaya"], 
     	["42","Kisumu","kisumu County","Nyanza","2,009.50","9,68,909","Kisumu"], 
     	["43","HomaBay","Homabay County","Nyanza","3,154.70","9,63,794","HomaBay"], 
     	["44","Migori","Migori County","Nyanza","2,586.40", "9,17,170","Migori"], 
     	["45","Kisii","Kisii County","Nyanza","1,317.90","11,52,282","Kisii"], 
     	["46","Nyamira","Nyamira County","Nyanza","912.5","5,98,252","Nyamira"], 
     	["47","Nairobi City","Nairobi City County","Nairobi","694.9","31,38,369","Nairobi(City)"]);
     

         foreach ($kenyan_counties as $county){
            DB::table('counties')->insert([
            	'sno' => $county[0],
            	'name' => $county[1],
            	'tour' => $county[2],
	            'former_province' => $county[3],
                'area_km2' => $county[4],
                'population_2009' => $county[5],
                'capital' => $county[6]
               ]);
        }
	
    }
}
