<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            'animal_code' => 'CHM',
            'name' => 'Chimpanzee',
            'latin_name' => 'Pan troglodytes',
            'species' => 'Apes',
            'habitat_name' => 'RF',
            'class' => 'Mammal',
            'description' => 'Chimpanzees inhabit tropical forests and savannas of equatorial Africa from Senegal in the west to Lake Albert and northwestern Tanzania in the east. Individuals vary considerably in size and appearance, but chimpanzees stand approximately 1–1.7 metres (3–5.5 feet) tall when erect and weigh about 32–60 kg (70–130 pounds).'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'BKN',
            'name' => 'Bekantan',
            'latin_name' => 'Nasalis larvatus',
            'species' => 'Monkeys',
            'habitat_name' => 'RF',
            'class' => 'Mammal',
            'description' => 'Bekantan is included in the herbivore animals that like the food in the form of leaves such as leaves from some other anatar tree species ketiau, lenggadai, piai, padada and so forth. They not only eat the foliage but also eat the fruits or grains available in the garden. With the ability of vision in the morning, they will be busy looking for food, when they feel hungry and tired then they will choose a place a bit dark / dark as a place to take shelter. '
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'ECL',
            'name' => 'Ecletus Parrot',
            'latin_name' => 'Ecletus',
            'species' => 'Parrots',
            'habitat_name' => 'RF',
            'class' => 'Bird',
            'description' => 'The Eclectus Parrot is a large parrot (430-450mm including tail) with marked sexual dimorphism (the male and female are different). The male: is emerald green, with bend of wing blue, primaries deep blue, underwing coverts and sides of belly rich scarlet.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'ANC',
            'name' => 'Anaconda',
            'latin_name' => 'Eunectes murinus',
            'species' => 'Snakes',
            'habitat_name' => 'RF',
            'class' => 'Reptilian',
            'description' => 'Anacondas are stocky, muscular snakes that are thicker than other boas. They have thick necks and narrow but large heads. All anacondas have nostrils and eyes on the tops of their heads, which allow them to see above the water while remaining mostly submerged. Anacondas coloring and size depends on the species.'
        ]);





        DB::table('animals')->insert([
            'animal_code' => 'RCK',
            'name' => 'Rockhopper Penguin',
            'latin_name' => 'Eudyptes chrysocome',
            'species' => 'Penguins',
            'habitat_name' => 'POL',
            'class' => 'Bird',
            'description' => 'Rockhopper penguins are among the smaller species of penguin. After reaching full growth, they are about 20 inches or 50 centimetres in height. Males and females cannot be distinguished visually, so a DNA test is conducted by taking a feather from the bird to determine its gender. Like many penguins, rockhopper penguins have a white belly and the rest of their body is black.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'PLR',
            'name' => 'Polar Bear',
            'latin_name' => 'Ursus maritimus',
            'species' => 'Bears',
            'habitat_name' => 'POL',
            'class' => 'Mammal',
            'description' => 'Polar bears are stocky, with a long neck, relatively small head, short, rounded ears, and a short tail. The male, which is much larger than the female, weighs 410 to 720 kg (900 to 1,600 pounds). It grows to about 1.6 metres (5.3 feet) tall at the shoulder and 2.2–2.5 metres in length.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'MSK',
            'name' => 'Muskox',
            'latin_name' => 'Ovibos moschatus',
            'species' => 'Oxens',
            'habitat_name' => 'POL',
            'class' => 'Mammal',
            'description' => 'Musk oxen are herd animals, and groups of two or three dozen animals are sometimes led by a single female. Herds use cooperation to deal with predation by wolves or dogs. When threatened, they “circle the wagons” and array themselves with their young in the middle and their sharp horns facing outward toward their foes.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'WAL',
            'name' => 'Walrus',
            'latin_name' => 'Odobenus rosmarus',
            'species' => 'Pinniped',
            'habitat_name' => 'POL',
            'class' => 'Mammal',
            'description' => 'Walruses have large, flabby bodies covered in brown or pink skin. Short fur covers most of their bodies except for their fins. Their faces feature two small eyes, a mustache and two long tusks. Walruses weigh from 600 to 1,500 kilograms (1,320 to 3,300 lbs.)'
        ]);



        DB::table('animals')->insert([
            'animal_code' => 'MAL',
            'name' => 'Mallard Duck',
            'latin_name' => 'Anas platyrhynchos',
            'species' => 'Ducks',
            'habitat_name' => 'WET',
            'class' => 'Bird',
            'description' => 'The mallard is a large and heavy looking duck. It has a long body, and a long and broad bill. The male has a dark green head, a yellow bill, is mainly purple-brown on the breast and grey on the body. The female is mainly brown with an orange bill.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'NIL',
            'name' => 'Nile Crocodile',
            'latin_name' => 'Crocodylus niloticus',
            'species' => 'Crocodiles',
            'habitat_name' => 'WET',
            'class' => 'Reptilian',
            'description' => 'The Nile crocodile is one of the largest crocodilian species. This reptile is a highly adapted aquatic predator. Females of this species are noticeably smaller than males. The body is streamlined, the tail is long and sturdy, and the hind feet of the animal are webbed. The reptile has long and powerful jaws, which perfectly fit catching and holding the prey.'
        ]);


        DB::table('animals')->insert([
            'animal_code' => 'BFG',
            'name' => 'Bullfrog',
            'latin_name' => 'Lithobates catesbeianus',
            'species' => 'Frogs',
            'habitat_name' => 'WET',
            'class' => 'Amphibian',
            'description' => 'Bullfrogs are the largest real frog found in North America, weighing up to 0.5 kg and measuring 460 mm in length. Their average length is 100-175 mm. Their color varies from brownish to shades of green, often with spots or blotches of a darker color around their backs. Their back feet are fully webbed.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'BVR',
            'name' => 'Beaver',
            'latin_name' => 'Castor',
            'species' => 'Rats',
            'habitat_name' => 'WET',
            'class' => 'Mammal',
            'description' => 'Beavers measure up to 1.3 m from snout to paddled tail and weigh 16–35 kg. The thickset body of the beaver is covered with dark, reddish brown fur consisting of coarse guard hairs over dense, insulating under-fur. '
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'LLA',
            'name' => 'Llama',
            'latin_name' => 'Lama glama',
            'species' => 'Camels',
            'habitat_name' => 'DES',
            'class' => 'Mammal',
            'description' => 'The llama is a long-necked mammal with thick fur and a stubby tail. Its face resembles that of a camel, with a rounded muzzle and a split upper lip. The llamas wool can come in a variety of colors including gray, beige, brown, and red, and can be patterned or a uniform color.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'LIZ',
            'name' => 'Lizard',
            'latin_name' => 'Lacertilia',
            'species' => 'Lizards',
            'habitat_name' => 'DES',
            'class' => 'Reptilian',
            'description' => 'A lizard is a type of reptile that has scales for skin, a long body, a pointy tail, and usually four legs. And they breathe fire. ... Lizards can be smaller than an inch long, or massive in size and weight — like the Komodo dragon, which can grow over ten feet in length.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'SOM',
            'name' => 'Somali Ostrich',
            'latin_name' => 'Struthio molybdophanes',
            'species' => 'Ostriches',
            'habitat_name' => 'DES',
            'class' => 'Bird',
            'description' => 'A long-legged and long-necked flightless bird. Males have a blue-gray neck and legs, but the bill and front of the legs become pink when breeding. Females have dull flesh-colored legs and neck. Found in a variety of dry habitats, including grassland, thornscrub, and semi-desert. Often in small groups.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'BLS',
            'name' => 'Black Scorpion',
            'latin_name' => 'Androctonus crassicauda',
            'species' => 'Scorpions',
            'habitat_name' => 'DES',
            'class' => 'Arthropod',
            'description' => 'A black scorpion is large, averaging over 10 cm in length, is known to have a medium to long lifespan (estimated up to 8 years) and is quite hardy. ... Additionally, black scorpions are known to be territorial, but they may also exhibit aggression towards members of their own species.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'KIW',
            'name' => 'Killer Whale',
            'latin_name' => 'Orcinus orca',
            'species' => 'Dolphins',
            'habitat_name' => 'MAR',
            'class' => 'Mammal',
            'description' => 'The orca (killer whale) is a toothed whale and is the largest member of the Dolphin family. These large marine mammals are easily distinguished by their black-and-white coloration, large dorsal fin and a sleek, streamlined body.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'BUW',
            'name' => 'Blue Whale',
            'latin_name' => 'Balaenoptera musculus',
            'species' => 'Whales',
            'habitat_name' => 'MAR',
            'class' => 'Mammal',
            'description' => 'The blue whale is an extremely large marine mammal, with a long, torpedo-shaped body. They have blue-gray colored skin, with a slightly lighter colored underside; they have two pectoral fins, a small dorsal fin on their backs, and a large fluke.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'KIC',
            'name' => 'King Crab',
            'latin_name' => 'Lithodidae',
            'species' => 'Crabs',
            'habitat_name' => 'MAR',
            'class' => 'Arthropod',
            'description' => 'This edible crab is found in the shallow waters off Japan, along the coast of Alaska, and in the Bering Sea. The king crab is one of the largest crabs, weighing 5 kg (11 pounds) or more. Its size and tasty flesh make it a valued food, and large numbers are commercially fished each year.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'SET',
            'name' => 'Sea turtle',
            'latin_name' => 'Chelonioidea',
            'species' => 'Turtles',
            'habitat_name' => 'MAR',
            'class' => 'Reptilian',
            'description' => 'Sea turtles are characterized by a long, streamlined shell. Depending on the species, sea turtles color range can be olive-green, yellow, greenish-brown, reddish-brown, or black. Limbs and flippers are adapted for swimming.'
        ]);



        DB::table('animals')->insert([
            'animal_code' => 'LIO',
            'name' => 'Lion',
            'latin_name' => 'Panthera leo',
            'species' => 'Cats',
            'habitat_name' => 'GRS',
            'class' => 'Mammal',
            'description' => 'Lions have strong, compact bodies and powerful forelegs, teeth and jaws for pulling down and killing prey. Their coats are yellow-gold, and adult males have shaggy manes that range in color from blond to reddish-brown to black.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'BIN',
            'name' => 'Bison',
            'latin_name' => 'Bison',
            'species' => 'Oxens',
            'habitat_name' => 'GRS',
            'class' => 'Mammal',
            'description' => 'Bison are huge animals, ranging in length from 3.6 m to 3.8 m in males to 2.13 m to 3.18 m in females. They are also tall animals, with the height at the shoulder ranging from 1.67 m to 1.86 m for males and 1.52 m to 1.57 m in females.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'BRR',
            'name' => 'Brush Rabbit',
            'latin_name' => 'Sylvilagus bachmani',
            'species' => 'Rabbits',
            'habitat_name' => 'GRS',
            'class' => 'Mammal',
            'description' => 'Marsh rabbits have reddish brown or dark brown fur and dark bellies. Their small, grayish tails are dark underneath. They have short, rounded ears. Their feet are small, with long toenails on the hind feet.'
        ]);

        DB::table('animals')->insert([
            'animal_code' => 'AFE',
            'name' => 'African Elephant',
            'latin_name' => 'Loxodonta africana',
            'species' => 'Elephants',
            'habitat_name' => 'GRS',
            'class' => 'Mammal',
            'description' => 'African elephants are the largest animals walking the Earth. Their herds wander through 37 countries in Africa. They are easily recognized by their trunk that is used for communication and handling objects. And their large ears allow them to radiate excess heat.'
        ]);









        


        



        
    }
}
