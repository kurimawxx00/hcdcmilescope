<?php
session_start();

$json_request = json_decode(json_encode($_POST["data"]));
$json_instruction = json_decode('{
  "table1": {
    "cc11": {
      "category": "Mand 5",
      "activity": null,
      "autoscore": "0",
      "instruction": "Emits 10 mands w/o prompts except item and/or “What do you want?”.  1 point : If he emits 9-10 different mands 1/2 point : If he emits 1-8 different mands "
    },
    "cc13": {
      "category": "Tact 5",
      "activity": "activities/tact/tact.php",
      "autoscore": "0",
      "instruction": "Tacts 10 items (common objects, body parts, pictures, or people). 1 point : If he tacts 9-10 items 1/2 point : If he tacts 1-8 items "
    },
    "cc15": {
      "category": "Listerner 5",
      "activity": "activities/listener05/index.php",
      "autoscore": "1",
      "instruction": "Selects the correct item from an array of 4, for 20 different objects or picture (e.g., Show me cat. Touch shoe) 1 point : If he correctly identifies 16-20 different items 1/2 point : If he correctly identifies 1-15 different items "
    },
    "cc17": {
      "category": "VP/MTS 5",
      "activity": "activities/vpmts05/index.php",
      "autoscore": "1",
      "instruction": "Matches any 10 identical items (e.g. inset puzzles, toys, objects, or pictures). 1 point : If he successfully matches 6-10 items 1/2 point : If he successfully matches 1-5 items  "
    },
    "cc19": {
      "category": "Play 5",
      "activity": null,
      "autoscore": "0",
      "instruction": "Independently engages in causeand –effect play for 2 minutes  (e.g., dumping containers, playing with pop-up toys, pulling toys, etc.) (timed observation 30 mins  1 point : 2 minutes during 30 minute observation  1/2 point : 1 minute during 30 minute observation "
    },
    "cc21": {
      "category": "Social 5",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneously follows peers or imitates their motor behavior 2 times (e.g., follows a peer into a playhouse. (timed observation 30 minutes) 1 point : if he spontaneously follows peers or imitates their motor behavior 2 times1/2 point : if he spontaneously follows peers or imitates their motor behavior 1 time "
    },
    "cc23": {
      "category": "Imitation 5",
      "activity": null,
      "autoscore": "0",
      "instruction": "Imitates 20 motor movements of any type  (e.g., fine motor, gross motor, imitation with objects)  1 point : If he imitates 16-20 motor behaviors of any type  1/2 point : If he imitates 1-15 motor behaviors of any type "
    },
    "cc25": {
      "category": "Echoic 5",
      "activity": null,
      "autoscore": "0",
      "instruction": "Scores at least 25 on the EESA subtest (at least 20 from group I)  1 point : If he scores atleast 25 or more w  1/2 point : If he imitates 1-15 motor behaviors of any type "
    },
    "cc27": {
      "category": "Vocal 5",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneously vocalizes 15 whole words or phrases with appropriate  intonation and rhythm. (timed observation 60 minutes)  1 point : 15 different identifiable word approximations during a 1-hour observation  1/2 point : 8 different identifiable word approximations during a 1hour observation "
    },
    "cc47": {
      "category": "Mand 4",
      "activity": null,
      "autoscore": "0",
      "instruction": "Emits 5 mands in 1 hour (item can be present).  (e.g., If the child wants to go outside)  1 point : If he spontaneously mands 4-5 times during a 1-hour observation.  1/2 point : If he spontaneously mands 1-2 times during a 1-hour observation. "
    },
    "cc49": {
      "category": "Tact 4",
      "activity": "/tact/tact.php",
      "autoscore": "0",
      "instruction": "Spontaneously tacts 2 items during an observation for 60 minutes  e.g. The child sees a picture of spiderman and says “spiderman” not as mand but because he likes seeing and saying “spiderman” 1 point : If he tacts 2 different items 1/2 point : If he tacts 1 item"
    },
    "cc51": {
      "category": "Listener 4",
      "activity": null,
      "autoscore": "0",
      "instruction": "Performs 4 different motor actions on command without a visual prompt  (e.g., Can you jump? Show me clapping)  1 point : If emits the correct motor behavior 2 times during testing for 4 different actions.  1/2 point : If emits the correct motor behavior 2 times during testing for 2 different actions. "
    },
    "cc53": {
      "category": "VP/MTS 4",
      "activity": null,
      "autoscore": "0",
      "instruction": "Places 3 items in a container, stacks 3 blocks or places 3 rings on a peg  for 2 of these or similar activities.  (e.g., Placing books or shapes in an open container or in formed holes, stacking blocks, putting rings on pegs, or putting items in a Tupperware container)  1 point : if he places 3 items in a container, stacks 3 blocks, places 3 rings on a peg, etc.,  for any 2 activities during observation.  1/2 point : if he places 2 items in a container, stacks blocks, places 2 rings on a peg, etc.  for any single activity during observation or testing."
    },
    "cc55": {
      "category": "Play 4",
      "activity": null,
      "autoscore": "0",
      "instruction": "Independently engages in movement play for 2 minutes  (e.g., swinging, dancing, rocking, jumping, climbing) (timed observation 30 minutes)  1 point : if he independently engages for 2 minutes  1/2 point : if he independently engages for 1 minute "
    },
    "cc57": {
      "category": "Social 4",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneously engages in parallel play near other children for a total of 2 minutes (e.g., sits in the sandbox near other children). (timed observation 30 minutes)  1 point : if he engages in parallel play by other children for 2 minutes  1/2 point : if he engages in parallel play by other children for 1 minute  "
    },
    "cc59": {
      "category": "Imitation 4",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneously imitates the motor behaviors of others on 5 occasions.  (e.g., An adult pulls a wind up car backwards and it shoots forward fast, and the child spontaneously  attempts to imitate the behaviour of the car.  1 point : if he spontaneously imitates the motor behaviors of others on 3-5 occasions  1/2 point : if he spontaneously imitates the motor behaviors of others on 1-2 occasions"
    },
    "cc61": {
      "category": "echoic 4",
      "activity": null,
      "autoscore": "0",
      "instruction": "Scores at least 15 on the EESA subtest. (e.g., The child emits “uh-oh” “puppy “ and “oh Boy” when tested.) 1 point : if he scores 15 or more on the EESA subtest 1/2 point : If he scores 12 on the EESA subtest "
    },
    "cc63": {
      "category": "Vocal 4",
      "activity": null,
      "autoscore": "0",
      "instruction": "4. Spontaneously emits 5 different whole word approximations for 60 minutes  (e.g., The Child emits “mama”,”dada” “ eat”,”uh-oh” but not necessarily in the appropriate context) 1 point : if he emits 5 word approximations during observation.  1/2 point : if he emits 2 word approximations during observation. "
    },
    "cc83": {
      "category": "Mand 3",
      "activity": null,
      "autoscore": "0",
      "instruction": "Generalizes 6 mands across 2 people, 2 settings, and 2 different examples  1 point : If he generalizes 4-6 mands across 2 people, 2 settings, and 2 examples 1/2 point : If he generalizes 1-3 mands across 2 people, 2 settings, and 2 examples  "
    },
    "cc85": {
      "category": "Tact 3",
      "activity": "/tact/tact.php",
      "autoscore": "0",
      "instruction": "Tacts 6 non-reinforcing items  (e.g., shoe,hat, spoon, car, cup, bed.)  1 point : If he tacts 6 items  1/2 point : If he tacts 1-5 items"
    },
    "cc87": {
      "category": "Listerner 3",
      "activity": null,
      "autoscore": "0",
      "instruction": "Looks at, touches, or points to the correct family member, pet, or other  reinforcer when presented in an array of 2, for 5 different reinforcers  e.g., A dora doll may be on the chair, and the adults says “wheres dora” and the child looks right at dora.  1 point : If he identifies 3-5 family members,pets etc.  1/2 point : If he identifies 1-2 family members,pets etc. "
    },
    "cc89": {
      "category": "VP/MTS 3",
      "activity": null,
      "autoscore": "0",
      "instruction": "Visually attends to a toy or book for 30 seconds. (Not a self stim item)  1 point : if he visually attends to a toy/book for 15 seconds  1/2 point : if he visually attends to a toy/book for 30 seconds "
    },
    "cc91": {
      "category": "Play 3",
      "activity": null,
      "autoscore": "0",
      "instruction": "Demonstrates generalization by engaging in exploratory movement and playing with the toys  in a novel environment for 2 minutes (e.g., in a new playroom) (timed observation 30 minutes)  1 point : if he independently engages for 2 minutes  1/2 point : if he independently engages for 1 minute "
    },
    "cc93": {
      "category": "Social3",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneously makes eye contact with other children 5 times (TO: 60 min.) ,  (e.g., When another child comes in the room the target child looks at him)  1 point : if he spontaneously looks at other children 3-5 times  1/2 point : if he spontaneously looks at other children 1-2 times"
    },
    "cc95": {
      "category": "Imitaion 3",
      "activity": null,
      "autoscore": "0",
      "instruction": "Imitates 8 motor movements, 2 of which involve objects  (e.g., shaking a maraca, tapping sticks together)  1 point : if he imitates 7-8 motor movements w/ objects  1/2 point : if he imitates 1-6 motor movements w/o objects "
    },
    "cc97": {
      "category": "Echoic 3",
      "activity": null,
      "autoscore": "0",
      "instruction": "Scores at least 10 on the EESA subtest. (e.g., The child emits “boy”, “pipe” or  “wow” when tested)  1 point : if he scores 10 or more on the EESA subtest  1/2 point : If he scores 7 on the EESA subtest "
    },
    "cc99": {
      "category": "Vocal 3",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneously emits 10 different sounds with varying intonations,  averaging 25 total sounds each hour. (timed observation 60 minutes)  (e.g., The child emits “ee” ,“ba”, “da”, “ih”, “pa” and “ta” several times in an hour.)  1 point : if he emits 5 different sounds, averaging 10 total sounds each hour.  1/2 point : if he emits 3 different sounds, averaging 10 total sounds each hour"
    },
    "cc119": {
      "category": "Mand 2",
      "activity": null,
      "autoscore": "0",
      "instruction": "Emits 4 mands w/o prompts (except, “What do you want?”)  the desired item can be present (e.g. toy, ball, food) 1 point : If he emits 4 different mands  1/2 point : If he emits 1-3 different mands "
    },
    "cc121": {
      "category": "Tact 2",
      "activity": "/tact/tact.php",
      "autoscore": "0",
      "instruction": "Tacts any 4 items (may be part mand)  (e.g., car, doll, juice, book, etc.)  1 point : If he tacts 9-10 items  1/2 point : If he tacts 1-8 items"
    },
    "cc123": {
      "category": "Listener 2",
      "activity": null,
      "autoscore": "0",
      "instruction": "Responds to hearing his own name 5 times  1 point : If he attends to adults by making eye contact  1/2 point : there is no 1/2 point score for this skill.  "
    },
    "cc125": {
      "category": "VP/MTS 2",
      "activity": null,
      "autoscore": "0",
      "instruction": "Grasps small objects with thumb, index finger, and middle finger (pincer grasp) 5 times  (e.g., The Child sees a crayon and reaches for it and picks it up with his thumb,  index finger, and middle finger)  1 point : if he visually tracks moving stimuli for 2 seconds, 5 times  1/2 point : if he visually tracks moving stimuli for 2 seconds, 2 times "
    },
    "cc127": {
      "category": "Play 2",
      "activity": null,
      "autoscore": "0",
      "instruction": "Shows variation in play by independently interacting with 5 different items(e.g., plays with rings, then a ball, then a block) (timed observation 30 minutes)  1 point : if he independently plays with 5 different items 1/2 point : if he independently plays with 3 different items "
    },
    "cc129": {
      "category": "Social 2",
      "activity": null,
      "autoscore": "0",
      "instruction": "Indicates that he wants to be held or physically played with 2 times  (e.g.. climbs up on his mom’s lap) (timed observation 60 minutes)  1 point : if he indicates that he wants to be held or physically played with 2 times  1/2 point : if he indicates that he wants to be held or physically played with 1 time "
    },
    "cc131": {
      "category": "Imitaion 2",
      "activity": null,
      "autoscore": "0",
      "instruction": "Imitates 4 gross motor movements when prompted with , Do this  (e.g., Clapping ,stomping feet, arms up and etc.)  1 point : if he imitates 3-4 gross motor movements  1/2 point : if he imitates only 1-2 motor action "
    },
    "cc133": {
      "category ": "Echoic 2",
      "activity": null,
      "autoscore": "0",
      "instruction": "Scores at least 5 on the EESA subtest.  (e.g., The child emits “boy”, “pipe” or  “wow” when tested)  1 point : If he scores 5 or more on the EESA subtest  1/2 point : If he scores 3 on the EESA subtest "
    },
    "cc135": {
      "category": "Vocal 2",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneously emits 5 different sounds, averaging 10 total sounds each hour.  (timed observation 60 minutes) The child emits “ah”, “ba”, “ma”, “oh”, “ga” a few times in an hour.  (e.g., The child emits “ah”, “ba”, “ma”, “oh”, “ga” a few times in an hour.)  1 point : if he emits 5 different sounds, averaging 10 total sounds each hour.  1/2 point : if he emits 3 different sounds, averaging 10 total sounds each hour"
    },
    "cc155": {
      "category": "Mand 1",
      "activity": null,
      "autoscore": "0",
      "instruction": "Emits 2 mands with echoic or imitative prompt (no physical prompts)  (e.g say cookie)  1 point : If he respond when an adult provides an echoic/imitative prompt for 2 items  1/2 point : if he only respond to 1 item "
    },
    "cc157": {
      "category": "Tact 1",
      "activity": "/tact/tact.php",
      "autoscore": "0",
      "instruction": "Tacts any two items (people, pet, character, or object) (may be part mand) (e.g., “doggie”, “mama”,  “dada”, “elmo”, etc.) 1 point : if he names 2 items 1/2 point : if he names 1 item "
    },
    "cc159": {
      "category": "Listener 1",
      "activity": null,
      "autoscore": "0",
      "instruction": "Attends to a speaker’s voice by making eye contact with the speaker 5 times.  1 point : If he attends 4-5 times  1/2 point : If he attends 3-5 times "
    },
    "cc161": {
      "category": "VP/MTS 1",
      "activity": null,
      "autoscore": "0",
      "instruction": "Manipulates and explores objects for 1 min  (e.g., looks at a toy, turns it over, presses buttons) (timed observation 30 minutes)  1 point : if he visually tracks moving stimuli for 2 seconds, 5 times  1/2 point : if he visually tracks moving stimuli for 2 seconds, 2 times "
    },
    "cc163": {
      "category": "Play 1",
      "activity": null,
      "autoscore": "0",
      "instruction": "Independently engages in causeand –effect play for 2 minutes  (e.g., dumping containers, playing with pop-up toys, pulling toys, etc.) (timed observation 30 minutes)  1 point : 2 minutes during 30 minute observation  1/2 point : 1 minute during 30 minute observation "
    },
    "cc165": {
      "category": "Socal 1",
      "activity": null,
      "autoscore": "0",
      "instruction": "Makes eye contact as a type of mand 5 times  (e.g., A parent enters the room and the child watches the parent for a few seconds and smiles)  1 point : if he visualy tracks and shows interest in peoples movement atleast 3-5 times  1/2 point : if he visualy tracks and shows interest in peoples movement atleast 1-2 times "
    },
    "cc167": {
      "category": "Imitaion 1",
      "activity": null,
      "autoscore": "0",
      "instruction": "Imitates 2 gross motor movements when prompted with, Do this  (e.g., clapping, raising arms)  1 point : if he imitates 2 gross motor movements  1/2 point : if he imitates only one motor action "
    },
    "cc169": {
      "category": "Echoic 1",
      "activity": null,
      "autoscore": "0",
      "instruction": "Scores at least 2 on the EESA subtest.  (e.g., The child emits “moo” and “ah” when tested   1 point : If he scores 2 or more on the EESA subtest  1/2 point : If he scores 1 on the EESA subtest "
    },
    "cc171": {
      "category": "Vocal 1",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneous emits an average of 5 sounds each hour. (timed observation 60 minutes)(e.g., The child emits “ah” a few times an hour.)  1 point : if he emits an average of 5 speech sounds each hour.  1/2 point : if he emits an average of 2 speech sounds each hour. "
    }
  },
  "table2": {
    "cc14": {
      "category": "Mand 10",
      "activity": null,
      "autoscore": "0",
      "instruction": "Emits 10 new mands without specific training (can be for items trained as  tacts or LD but not as mands).  Ex. When another child picks up a pinwheel and blowns on it, the target  child says,”I want to spin” without ever having a training on manding for spinning a pinwheel.  1 point: if he learns 6-10 new mands without formal training.  1/2 point: if he learns 1-5 new mands without formal training. "
    },
    "cc16": {
      "category": "Tact 10",
      "activity": null,
      "autoscore": "0",
      "instruction": "Tacts a total of 200 nouns and/or verbs.”  (E.g., When another child picks up a pinwheel and blowns on it, the target)  child says,”I want to spin” without ever having a training on manding for spinning a pinwheel.  1 point: if he tacts 200 items and/or actions when tested.  1/2 point: if he provides the name og 150 items and/or actions. "
    },
    "cc18": {
      "category": "listener 10",
      "activity": null,
      "autoscore": "0",
      "instruction": "Selects the correct item in a book, picture scene, or natural environment when named,  for 250 items (Tested or from an accumulated list of known words)  1 point: if he selects 175-250 items  1/2 point: if he selects 25-150 item "
    },
    "cc20": {
      "category": "VP/MTS 10",
      "activity": null,
      "autoscore": "0",
      "instruction": "Matches non-identical objects (3D) to pictures (2D) and/or vice versa,  in a messy array of 10 containing 3 similar stimuli, for 25 items.  1 point: if he matches 16-25  1/2 point: if he matches 1-15 "
    },
    "cc22": {
      "category": "Play 10",
      "activity": null,
      "autoscore": "0",
      "instruction": "Assembles toys that have multiple parts for 5 different sets of materials  (e.g., Mr. Potato head, Little People sets, Cootie Bugs, Kind K’ Next).  1 point: if he assembles, constructs, etc., for different 5 sets of matrials  1/2 point:  if he assembles, constructs, etc., for different 2 sets of matrials   "
    },
    "cc24": {
      "category": "Social 10",
      "activity": null,
      "autoscore": "0",
      "instruction": " Spontaneously mands to peers to participate in games, social play, etc., 2 times (e.g., Come on you guys, Let’s dig a hole.) (timed observation 60 minutes)  1 point: if he mands to peers 2 times during observation  1/2 point:  if he mands to peers 1 time during observatioin   "
    },
    "cc26": {
      "category": "Imitaion 10",
      "activity": null,
      "autoscore": "0",
      "instruction": "Imitates (or attempts to with approximations) any novel motor action modeled by an adult with and without objects  (i.e., a “generalized imitative repertoire”)  1 point: if he imitates maany novel motor actions w/ or w/o objects  1/2 point: none "
    },
    "cc28": {
      "category": "Echoic 10",
      "activity": null,
      "autoscore": "0",
      "instruction": "Scores at least 80 on the EESA subtest. (at least from groups 4 and 5)  (e.g., The child echoes whispering, and echoes a continous warble when tested)  1 point: if he scores 90 on the EESA subtest  1/2 point: if he scores 85 on the EESA subtest "
    },
    "cc30": {
      "category": "LRFFC 10",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneously tacts the item on 50% of the LRFFC trials  (e.g., says dog given the verbal statement, find an animal, and a visual array containing a picture of a dog) 1 point: 50% of the LRFFC trials…OR if he tacts on 50% of the trials, but always requires one prompt at the beginning of the LRFFC session. 1/2 point: 25% of LRFFC trials OR if he tacts on 50% of the trials but always requires a prompt at the beginning of the session for LRFFC’s. "
    },
    "cc32": {
      "category": "Intraverbal 10",
      "activity": null,
      "autoscore": "0",
      "instruction": "Answers 25 different who or where questions  (e.g., Whose your friend? Where is your pillow?)  1 point: if he answers 13-25 different who and where questions  1/2 point: if he answers 1-12 questions"
    },
    "cc34": {
      "category": "Group 10",
      "activity": null,
      "autoscore": "0",
      "instruction": "Sits in a small group of 3 or more children for 10 minutes, attends to teacher or materials for 50% of the period,  and responds to 5 of teacher’s SDs (using a time sample recording system)  1 point: if he sits in a circle group of 3 or more children for 10 minutes and attends  to the teacher or presented material for 50% of the period  1/2 point: if he sits in a circle group of 3 or more children for 2 minutes and attends  to the teacher or presented material for 30% of the period "
    },
    "cc36": {
      "category": "Linguistic 10",
      "activity": null,
      "autoscore": "0",
      "instruction": "Has a total speaker vocabulary size of 300 words  (all verbal operants, except echoic)  1 point:As shown…  1/2 point: 200 words…"
    },
    "cc62": {
      "category": "Mand 9",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneously emits diffrent mands for 30 mins (e.g., lets play. Open. I want book.)  1 point: if he emits 9-15 different mands (no adults delivered prompts)  1/2 point: if he spontaneously mands (no adult delivered propmts) 1-8 times."
    },
    "cc64": {
      "category": "Tact 9",
      "activity": null,
      "autoscore": "0",
      "instruction": "Tacts 50 two-component verb-noun or noun verb combinations”(E.g., When presented with the jumping stuffed monkey and a verbal stimulus such as, “what do you see?” , the child says “jumping monkey” or the “monkey is jumping”.)  1 point: if he tacts 26-50 .  1/2 point: if he tats 1-125 "
    },
    "cc66": {
      "category": " Listener 9",
      "activity": null,
      "autoscore": "0",
      "instruction": "Follows 50 two - component noun - verb and/or verb - noun instructions  (e.g., Show me the baby sleeping. Push the swing.  1 point: if he follows 175-250 items  1/2 point: if he follows 25-150 item "
    },
    "cc68": {
      "category": "VP/MTS 9",
      "activity": "activities/vpmts09/index.php",
      "autoscore": "1",
      "instruction": "Matches non-identical objects or non-identical pictures in a messy array of 10, for 25 items  (e.g., matches a Ford truck to a Toyota truck)  1 point: if he matches 16-25  1/2 point: if he matches 1-15 "
    },
    "cc70": {
      "category": "Play 9",
      "activity": null,
      "autoscore": "0",
      "instruction": "Independently engages in play on structures and playground equipment for a total of 5 minutes  (e.g. going down a slide, swinging)  .  1 point: if he engages in play on play structures and playground equipment equipment for a total of 5 minutes.  1/2 point: if he engages in play on play structures and playground equipment equipment for a total of 2 minutes.  "
    },
    "cc72": {
      "category": "Social 9",
      "activity": null,
      "autoscore": "0",
      "instruction": " Spontaneously responds to the mands from peers 5 times  (e.g., Pull me in the wagon, I want the train.)  1 point: if he responds to the mands from the peers 3-5 times during observatioin  1/2 point:  if he responds to the mands from the peers 1-2 times during observatioin   "
    },
    "cc74": {
      "category": "Imitaion 9",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneously imitates 5 functional skills in the natural environment  (e.g., eating with a spoon, putting on a coat, removing shoes)  1 point: if he imitates 5 functional skills in the natural environment 1/2 point: if he imitates 2 functional skills in the natural environment "
    },
    "cc76": {
      "category": "Echoic 9",
      "activity": null,
      "autoscore": "0",
      "instruction": "Scores at least 80 on the EESA subtest.  (e.g., The child echoes win a toy, funny king, one cookie when tested)  1 point: if he scores 80 on the EESA subtest  1/2 point: if he scores 75 on the EESA subtest "
    },
    "cc78": {
      "category": "LRFFC 9",
      "activity": null,
      "autoscore": "0",
      "instruction": "Selects the correct item from an array of 10 (or from a book), for 25 different verb-noun LRFFC what,  which, or who questions (e.g., What do you ride? Which one barks? Who can help?) 1 point: if he correctly selects the item from an array of 10 or from a book for 13-25 different LRFFC WH questions 1/2 point: if he correctly selects 1-12 items "
    },
    "cc80": {
      "category": "Intraverbal 9",
      "activity": null,
      "autoscore": "0",
      "instruction": "Answers 25 different what questions  (e.g., What do you like to eat?)  1 point: if he answers 13-25 different what questions  1/2 point: if he fills in 1-12 phrases"
    },
    "cc82": {
      "category": "Group 9",
      "activity": null,
      "autoscore": "0",
      "instruction": "Sits in a small group or 3 or more children for 5 minutes without disruptive behavior or attempting  to leave the group.  1 point: if he sits in a circle group of 3 or more children for 5 minutes  1/2 point: if he sits in a circle group of 3 or more children for 2 minutes "
    },
    "cc84": {
      "category": "Linguistic 9",
      "activity": null,
      "autoscore": "0",
      "instruction": "Emits functional prosody (i.e., rhythm, stress, intonation) on 5 occasions in one day  (i.e., puts emphasis or stress on certain words such as, It’s MINE!)  1 point: As shown…  1/2 point: 2 occasions on one day"
    },
    "cc110": {
      "category": "Mand 8",
      "activity": null,
      "autoscore": "0",
      "instruction": "Emits 5 different 2 word mands for 60 minutes (not including “I want”).  (E.g., The child says “open door” “no shoe” or “go night night”)  1 point: if he emits 3-5 different mands that contain 2 or more words  1/2 point: if he emits 1-2 different mands that contain 2 or more words  "
    },
    "cc112": {
      "category": "Tact 8",
      "activity": null,
      "autoscore": "0",
      "instruction": "Tacts 10 ongoing actions when asked, for example, what am i doing  (E.g., jumping, sleeping. eating)  1 point: if he tacts 26-50 .  1/2 point: if he tats 1-125 "
    },
    "cc114": {
      "category": "Listener8",
      "activity": null,
      "instruction": "Performs 10 specific motor actions on command  (e.g., Show me clapping. Can you hop?)  1 point: if he demonstrates 6-10 actions on command.  1/2 point: if he demonstrates 1-5 actions on command. "
    },
    "cc116": {
      "category": "VP/MTS 8",
      "activity": "activities/vpmts08/index.php",
      "autoscore": "1",
      "instruction": "Matches identical objects or pictures in a messy array of 8 containing 3 similar stimuli, for 25 items  (e.g., matches a dog to a dog in an array that also contains a cat, pig, and pony)  1 point: if he matches 16-25  1/2 point: if he matches 1-15 "
    },
    "cc118": {
      "category": "Play 8",
      "activity": null,
      "autoscore": "0",
      "instruction": "Plays with every day items in creative ways 2 times  (e.g., uses a bowl as a drum or a box as a n imaginary car)  1 point: if he plays with 2 different everyday items in creative ways  1/2 point: if he plays with 1 item in a creative ways "
    },
    "cc120": {
      "category": "Social 8",
      "activity": null,
      "autoscore": "0",
      "instruction": " Engages in sustained social play with peers for 3 minutes without adult prompts or reinforcement  (e.g., cooperatively setting up a play set, water play) (timed observation 30 minutes)  1 point: if he engages to peers 5 minutes during a 1-hour observation  1/2 point: if he mands to peers 2 minutes during a 1-hour observation  "
    },
    "cc122": {
      "category": "Imitaion 8",
      "activity": null,
      "autoscore": "0",
      "instruction": "Imitates 10 different three-component sequences of actions when prompted. Do this (e.g., clapping, jumping, touching toes, pick up a doll, place her in a crib, and rock the crib)  1 point: if he imitates 6-10 three component actions  1/2 point: if he imitates 1-5 two-component actions "
    },
    "cc124": {
      "category": "Echoic 8",
      "activity": null,
      "autoscore": "0",
      "instruction": "Scores at least 70 on the EESA subtest.(e.g., The child echoes hey me too, teddy bear, do high five when tested)  1 point: if he scores 70 on the EESA subtest  1/2 point: if he scores 65 on the EESA subtest "
    },
    "cc126": {
      "category": "LRFFC 8",
      "activity": null,
      "autoscore": "0",
      "instruction": "Selects the correct item from an array of 8, for 25 different LRFFC fill-instatements of any type  (e.g., You sit on a …)  1 point: if he correctly selects 13-25 items  1/2 point: if he correctly selects 1-12 items"
    },
    "cc128": {
      "category": "Intraverbal 8",
      "activity": null,
      "autoscore": "0",
      "instruction": "Completes 25 different fill-in-blank phrases (not including songs)  (e.g., You eat…You sleep in a …Shoes and…)  1 point: if he fills in th missing words for 25 different phrases, associations, common sayings, etc.  1/2 point: if he fills in 12 phrases"
    },
    "cc130": {
      "category": "Group 8",
      "activity": null,
      "autoscore": "0",
      "instruction": "Transitions between classroom activities with no more than 1 gestural or verbal prompt  1 point: if he requires only one prompt  1/2 point: if he requires 2 or more prompts "
    },
    "cc132": {
      "category": "Linguistic 8",
      "activity": null,
      "autoscore": "0",
      "instruction": "Emits 10 different 2-word utterances per day of any type except echoic  (e.g., mand, tact)br>  1 point: As shown…can involve verbal prompts…(i.e., What is that?)  1/2 point: 5 – different 2-word…except echoic "
    },
    "cc158": {
      "category": "Mand 7",
      "activity": null,
      "autoscore": "0",
      "instruction": "Tacts 25 items (1 exemplar)  (E.g., After a child learns to tact a small yellow plastic bus, test to see if the response has generalized to other items that would be called a bus, but look different in some way.)  1 point: if he emits 3-5 different mands that contain 2 or more words  1/2 point: if he emits 1-2 different mands that contain 2 or more words  "
    },
    "cc160": {
      "category": "Tact 7",
      "activity": null,
      "autoscore": "0",
      "instruction": "Tacts 10 ongoing actions when asked, for example, what am i doing  (E.g., jumping, sleeping. eating)  1 point: if he tacts 26-50 .  1/2 point: if he tats 1-25 "
    },
    "cc162": {
      "category": "Listener 7",
      "activity": "activities/listener07/index.php",
      "autoscore": "1",
      "instruction": "Generalizes listener discriminations (LDs) in a messy array of 8, for three different examples of 50 items  (e.g., The child can find three examples of a train.  1 point: if he gets 36-50  1/2 point: if he gets 1-35 "
    },
    "cc164": {
      "category": "VP/MTS 7",
      "activity": null,
      "autoscore": "0",
      "instruction": " Sorts similar colors and shapes for 10 different colors or shapes given models  (e.g., given red, blue, and green bowls and a pile of red, blue, and green bears the child sorts the items by color)  1 point: if he sorts 6-10  1/2 point: if he matches 1-5 "
    },
    "cc166": {
      "category": "Play 7",
      "activity": null,
      "autoscore": "0",
      "instruction": "Independently demonstrates the use of toys or objects according to their function for 5 items  (e.g. placing a train on a track, pulling a wagon, holding a telephone to the ear)  1 point: if he demonstrates the use of toys or objects according to their function for 3-5 items  1/2 point: if he demonstrates the use of toys or objects according to their function for 1-2 items  "
    },
    "cc168": {
      "category": "Social 7",
      "activity": null,
      "autoscore": "0",
      "instruction": " Spontaneously mands to peers 5 times  (e.g., My turn, Push me, Look! Come On.), (timed observation 60 minutes)  1 point: if he mands to peers 3-5 times during a 1-hour observation  1/2 point: if he mands to peers 1-2 times during a 1-hour observation  "
    },
    "cc170": {
      "category": "Imitation 7",
      "activity": null,
      "autoscore": "0",
      "instruction": "Imitates 20 different fine motor actions when prompted, Do this  (e.g., wiggling fingers, pinching, making a fist, making a butterfly)  1 point: if he imitates 11-20 different fine motor actions.  1/2 point: if he imitates 1-10 different fine motor actions "
    },
    "cc172": {
      "category": "Echoic 7",
      "activity": "activities/lrffc06/index.php",
      "autoscore": "1",
      "instruction": "Scores at least 60 on the EESA subtest.  (e.g., The child echoes banana, yucky, go bye bye when tested)  1 point: if he scores 60 on the EESA subtest  1/2 point: if he scores 55 on the EESA subtest "
    },
    "cc174": {
      "category": "LRFFC 7",
      "activity": "activities/lrffc07/index.php",
      "autoscore": "1",
      "instruction": "Selects 5 different foods or drinks when each is presented in an array of 5 (along with 4 non-food or non-drink items)  and asked the verbal fill-ins…You eat…and You drink…  1 point: if he correctly selects the food or drinks for 3-5 items  1/2 point: if he correctly selects the food or drinks for 1-2 items "
    },
    "cc176": {
      "category": "Intrverbal",
      "activity": null,
      "autoscore": "0",
      "instruction": "Provides first name when asked, What is your name? 1 point: if he can say his name  1/2 point: none "
    },
    "cc178": {
      "category": "Group 7",
      "activity": null,
      "autoscore": "0",
      "instruction": "Puts away personal items, lines up, or comes to a table with only 1 verbal prompt  1 point: if he requires only one prompt  1/2 point: if he requires 2 or more prompts "
    },
    "cc180": {
      "category": "Linguistic 7",
      "activity": null,
      "autoscore": "0",
      "instruction": "Has a total listener vocabulary of 100 words(e.g., Touch nose, Jump, Find keys, etc..)  1 point: as shown...  1/2 point: as shown.. but 50 words"
    },
    "cc206": {
      "category": "Mand 6",
      "activity": null,
      "autoscore": "0",
      "instruction": "Mands for 20 different missing items w/o prompts.  (E.g., A Child is playing Play doh and wants to make star shapes, but the star form has been removed.When asked,” what’s missing” does the child ask for the missing star form?”)  1 point: if he tacts 21-25  1/2 point: if he tacts 1-20 items "
    },
    "cc208": {
      "category": "Tact 6",
      "activity": null,
      "autoscore": "0",
      "instruction": "Tacts 25 items when asked “what’s that?”  (E.g., Upon holding up a toycar  and asking the child “what’s This?” he says “car”)  1 point: if he tacts 21-25  1/2 point: if he tats 1-20 "
    },
    "cc210": {
      "category": "Listener 6",
      "activity": "activities/listener06/index.php",
      "autoscore": "1",
      "instruction": "Selects the correct item from a messy array of 6 for 40 different objects or pictures  (e.g.,Find cat. Touch ball.)  1 point: if he identifies 26-40  1/2 point: if he identifies  1-25 "
    },
    "cc212": {
      "category": "VP/MTS 6",
      "activity": "activities/vpmts06",
      "autoscore": "1",
      "instruction": "Matches identical objects or pictures in a messy array of 6 for 25 items.1 point: if he matches 16-25  1/2 point: if he matches 1-15 "
    },
    "cc214": {
      "category": "Play 6",
      "activity": null,
      "autoscore": "0",
      "instruction": "Searches for a missing or corresponding toy or part of a set for 5 items or sets  (e.g., a puzzle piece, a ball for a dropin toy, a bottle for a baby doll).  1 point: if he  searches for a missing or corresponding toy or part of a sets for 3-5 items.  1/2 point: if he  searches for a missing or corresponding toy or part of a sets for 1-2 items.  "
    },
    "cc216": {
      "category": "Social 6",
      "activity": null,
      "autoscore": "0",
      "instruction": "Initiates a physical interaction with a peer 2 times (timed observation 30 minutes) (e.g., a push in a wagon, hand holding, Ring Around the Rosy).  1 point: if he initiates an interaction with a peer 2 times 30-minute observation  1/2 point:  if he initiates an interaction with a peer 1 time 30-minute observation  "
    },
    "cc218": {
      "category": "Imitaion 6",
      "activity": null,
      "autoscore": "0",
      "instruction": "Imitates 10 actions that require selecting a specific object from m an array  (e.g., selects a drum-stick from an array also containing a horn and a bell, and imitates an adult’s drumming)  1 point: if he imitates 6-10 actions.  1/2 point:   if he imitates 1-5 actions. "
    },
    "cc220": {
      "category": "Echoi 6",
      "activity": null,
      "autoscore": "0",
      "instruction": "Scores at least 50 on the EESA subtest (at least 20 from Group 2)  (e.g., The child echoes monkey, window, and open when tested)  1 point: if he scores 60 on the EESA subtest  1/2 point: if he scores 55 on the EESA subtest "
    },
    "cc222": {
      "category": "LRFFC 6",
      "activity": "activities/lrffc06/index.php",
      "autoscore": "1",
      "instruction": "Selects 5 different foods or drinks when each is presented in an array of 3 (along with 2 non-food or non-drink items)  and asked the verbal fill-ins…You eat…and You drink…  1 point: if he correctly selects the food or drinks for 3-5 items  1/2 point: if he correctly selects the food or drinks for 1-2 items "
    },
    "cc224": {
      "category": "Intrverbal 6",
      "activity": null,
      "autoscore": "0",
      "instruction": "Completes 10 different fill-in-blank phrases of any type(e.g., song fill-ins, social games and fun full-in, animal or object sounds)  1 point: if he fills in th missing words for 10 different songs, fun activities, animal sounds, etc.  1/2 point: if he fills in 5 phrases "
    },
    "cc226": {
      "category": "Group 6",
      "activity": null,
      "autoscore": "0",
      "instruction": "Sits at group snack or lunch table without negative behaviors for 3 minutes  1 point: if he sits at a group with gestural and verbal without negative behaviors for 3 minutes  1/2 point: if he sits at a group with gestural and verbal without negative behaviors for 1 minute "
    },
    "cc228": {
      "category": "Linguistic 6",
      "activity": null,
      "autoscore": "0",
      "instruction": "The child’s articulation of 10 tacts can be understood by familiar adults who cannot see the item tacted.  1 point: if he tacts 10  1/2 point: if he tacts 5 "
    }
  },
  "table3": {
    "cc15": {
      "category": "Mand 15",
      "activity": null,
      "autoscore": "0",
      "instruction": "Mands for others to attend to his own  verbal behavior at least 5 times.  1 point : if he mands for 3-5 times  1/2 point : if he mands for 1-2 times "
    },
    "cc17": {
      "category": "Tact 15",
      "activity": null,
      "autoscore": "0",
      "instruction": "  1 point : Tacts at least 1000 non-verbal stimuli 1/2 point :Tacts at least 750 non-verbal stimuli  "
    },
    "cc19": {
      "category": "Listener 15",
      "activity": null,
      "autoscore": "0",
      "instruction": " Has a total listener repertoire of 1200 words (nouns, verbs, adjectives, etc.)  tested or from an accumulated list of known words  1 point : if he identifies 1200 nonverbal stimuli (noun,verbs, adjectives)  1/2 point :  if he identifies 800 nonverbal stimuli (noun,verbs, adjectives) "
    },
    "cc21": {
      "category": "VP/MTS 15",
      "activity": null,
      "autoscore": "0",
      "instruction": "\tContinues 20 three-step patterns, sequences, or seriation tasks  (e.g., star, triangle, heart, star, triangle…)  1 point : if he continues 20 three-step patterns, sequence, or seriation tasks.  1/2 point : if he continues 20 two-step patterns, sequence, or seriation tasks. "
    },
    "cc23": {
      "category": "Play 15",
      "activity": null,
      "autoscore": "0",
      "instruction": "\tIndependently draws or writes in pre-academic activity books for 5 minutes  (e.g., to-to-dot, matching games, mazes, tracing letters and numbers) 1 point : if he independently draws or writes in activity books for 5 minutes.    1/2 point : if he independently draws or writes in activity books for 2 minutes."
    },
    "cc25": {
      "category": "Social 15",
      "activity": null,
      "autoscore": "0",
      "instruction": "Engages in 4 verbal exchanges on 1 topic with peers for 5 topics (e.g. the children go back and forth talking about making a creek in a sandbox) 1 point :  if he initiates a verbal instruction, or spontaneously respondsto the verbal behavior of the peer with addtional and relevant verbal behavior, and has a reciprocal verbal interactions that lasts for 4 exchanges  during 1 hr observation.  1/2 point :  if he initiates a verbal instruction, or spontaneously respond to the verbal behavior of the peer with addtional and relevant verbal  behavior, and has a reciprocal verbal interactions that lasts for 2 exchanges  during 1 hr observation."
    },
    "cc27": {
      "category": "Reading 15",
      "activity": null,
      "autoscore": "0",
      "instruction": "Matches 5 words to the corresponding pictures or items in an array of 5, and  vice versa (e.g., matches the written word bird to a picture of a bird)  1 point : if he matches 5 words on the corresponding pictues on items in an array of 5, and vice versa   1/2 point : if he matches 3 words on the corresponding pictues on items in an array of 3, and vice versa"
    },
    "cc29": {
      "category": "Writing 15",
      "activity": null,
      "autoscore": "0",
      "instruction": "Independently copies all 26 uppercase and lowercase letters legibly.  1 point : if he independently copies all uppercase and lowercase letters with legible facsimile.   1/2 point : if he approximate the letters, but they are not clear enough to read."
    },
    "cc31": {
      "category": "LRFFC 15",
      "activity": null,
      "instruction": "Demonstrates 1000 different LRFFC responses, tested or obtained from an  accumulated list of known responses.  1 point : if he correctly demonstrates 1000 different LRFFC responses, tested or obtained  from an accumulated lists of known responses.  1/2 point : if he correctly demonstrates 750 different LRFFC responses, tested or obtained  from an accumulated lists of known responses. "
    },
    "cc33": {
      "category": "IV 15",
      "activity": null,
      "autoscore": "0",
      "instruction": "Answers 4 different rotating WH questions about a single topic for 10 topics (e.g., Who takes you to school? Where do you go to school? What do you take to school?)  1 point : if he answers 4 different WH questions about a single topic for 10 topics   1/2 point : if he answers 2 different WH questions about a single topic for 5 topics"
    },
    "cc35": {
      "category": "Group15",
      "activity": null,
      "autoscore": "0",
      "instruction": "\tSits in a 20-minute group session involving 5 children without disruptive  behaviors and answers 5 intraverbal questions.  1 point : if he sits appropriately, and answers 5 intraverbal questions presented in a 20-minute  group-teaching format involving 5 or more children.  1/2 point :if he sits appropriately, and answers 2 intraverbal questions presented in a 20-minute  group-teaching format involving 5 or more children. "
    },
    "cc37": {
      "category": "Linguistic 15",
      "activity": null,
      "autoscore": "0",
      "instruction": " Combines noun and verb phrases to produce 10 different syntactically correct  clauses or sentences containing a least 5 words (e.g., The dog licked my face.)  1 point : if he combines noun and verb phrases in any of the verbal operants except echoic  to produce 10 diffrent syntactically correct clauses and sentences.  1/2 point :if he combines noun and verb phrases in any of the verbal operants except echoic to produce 5 diffrent syntactically correct clauses and sentences. "
    },
    "cc39": {
      "category": "Math 15",
      "activity": null,
      "autoscore": "0",
      "instruction": "Correctly matches a written number to a quantity and a quantity to a written  number for the numbers 1-5 (e.g., matches the number 3 to a picture of 3 trucks)  1 point : if he matches a written number to a quantity and a quantity to a written number for the numbers 1-5 presented in random order.  1/2 point :if he matches a written number to a quantity and a quantity to a written number  for the numbers 1-3 presented in random order. "
    },
    "cc67": {
      "category": "Mand 14",
      "activity": null,
      "autoscore": "0",
      "instruction": "Gives directions, instructions, or explanations as to how to do something  or participate in an activity 5 times. 1 point : if he gives directions, instructions, or explanations as to how to do something or participate in an activity 5 times as measured daily tracking sheet.  1/2 point : if he gives directions, instructions, or explanations as to how to do something or  participate in an activity 2 times as measured daily tracking sheet. "
    },
    "cc69": {
      "category": "Tact 14",
      "activity": null,
      "autoscore": "0",
      "instruction": "  1 point : Tacts using 4 or more words 20 times 1/2 point : Tacts using at least 3 words 20 times  "
    },
    "cc71": {
      "category": "Listener 14",
      "activity": null,
      "autoscore": "0",
      "instruction": "\tFollows 3-step directions for 10 different directions  (e.g., Get your coat, hang it up, and sit down)  1 point : if he follows ten 3-step directions 1/2 point :if he follows five 3-step directions  "
    },
    "cc73": {
      "category": "VP/MTS 14",
      "activity": null,
      "autoscore": "0",
      "instruction": "Sorts 5 items from 5 different categories without a model  (e.g., star, triangle, heart, star, triangle….)  1 point : if sorts at least 5 items from 5 different categories without a model 1/2 point : if sorts at least 3 items from 3 different categories without a model "
    },
    "cc75": {
      "category": "Play 14",
      "activity": null,
      "autoscore": "0",
      "instruction": "Independently engages in sustained play activities for 10 minutes  without adult prompts or reinforcement (e.g., playing with a Etch-a-sketch, playing dress up)  1 point : if he independently draws or writes in activity books for 5 mins 1/2 point : if he independently draws or writes in activity books for 2 mins"
    },
    "cc77": {
      "category": "Social 14",
      "activity": null,
      "autoscore": "0",
      "instruction": "Engages in pretend social play activities with peers for 5 minutes  without adult prompts (e.g., dress up play, acting out videos, playing house)  1 point :if he engages with peers in a pretend or social play activity for 5 mins   1/2 point :if he engages with peers in a pretend or social play activity for 2 mins  "
    },
    "cc79": {
      "category": "Reading 14",
      "activity": null,
      "autoscore": "0",
      "instruction": "Reads his own name. 1 point : if he reads his own name when shown his name and given the verbal prompt,What does this say? 1/2 point :none "
    },
    "cc81": {
      "category": "Writing 14",
      "activity": null,
      "autoscore": "0",
      "instruction": "Legibly spells and writes his own name without copying.  1 point : if he independently and legibly writes and correctly spells his own name  1/2 point :  if he approximates the letters in his name, but they are not clear enough to read, and/or he misspells his name "
    },
    "cc83": {
      "category": "LRFFC 14",
      "activity": null,
      "autoscore": "0",
      "instruction": " Selects the correct items from a book or the natural environment given 4 different rotating LRFFC questions about a single topic (where does the cow live? What does the cow eat? Who milks the cow?) for 25 different topics.  (Continued) Selects the correct items from a book or the natural environment given 4 different rotating LRFFC questions about a single topic (where does the  cow live? What does the cow eat? Who milks the cow?) for 25 different topics. 1 point : if he correctly selects 4 items for 25 different topics presented in this type of LRFFC tasks, Note that the child may also verbalize the correct answer instead of pointing to it, which would make it part of intraverbal and part of tact(if he looked at the non verbal item), if this occurs give him credit for this LRFFC milestone because the intraverbal-tact skill is more avdvanced LRFFC skill  1/2 point : if he selects 4 itens for 15 diffrent topics presented in this typ of LRFFC task "
    },
    "cc85": {
      "category": "IV 14",
      "activity": null,
      "autoscore": "0",
      "instruction": " Describes 25 different events, videos, stories, etc. with 8+ words  (e.g., Tell me what happened…. The big monster scared everybody and they all ran into the house.) 1 point : if he describes 25 diffrent events, videos, stories and etc. with at least 8 words   1/2 point :if he describes at least 12 diffrent events, videos, stories , etc., with atleast 5 words. "
    },
    "cc87": {
      "category": "Group 14",
      "activity": null,
      "autoscore": "0",
      "instruction": "Acquires 2 new behaviours during a 15-minute group-teaching format involving 5 or more children.  1 point : if he Acquires 2 new behavior in a 15-minute group teaching format involving 5 or more children as measured by an individual post-test   1/2 point : if he Acquires 1 new behavior in a 15 minute group format involving 5 or more children as measured by an individual post test"
    },
    "cc89": {
      "category": "Linguistic 14",
      "activity": null,
      "autoscore": "0",
      "instruction": " Emits 10 different verb phrases containing at least 3 words with 2 modifiers  (e.g., adverbs, prepositions, pronouns) (e.g., Push me hard. Go up the steps.)  1 point : if he emits 10 different 3-word verb phrases in any of the verbal operants except echoic with two modifiers  1/2 point :if he emits 5 different 3-word verb phrases in any of the verbal operants except echoic with two modifiers "
    },
    "cc91": {
      "category": "Math 14",
      "activity": null,
      "autoscore": "0",
      "instruction": "Identifies as a listener 8 different comparisons involving measurement  (e.g., show me more or less, big or little, long or short, full or empty, loud or quiet)  1 point : if he identifies as a listener 8 different comparisons involving measurement  1/2 point : if he identifies as a listener 6 different comparisons involving measurement"
    },
    "cc119": {
      "category": "Mand 13",
      "activity": null,
      "autoscore": "0",
      "instruction": "Mands with 10 different adjectives, prepositions, or adverbs in 60 minutes.  1 point : if he mands with 10 diffrent adjectives, prepositions or adverbs in an 1-hr observation and testing. There should be at least 2 from each group in order  in order to get a full credit.  1/2 point : if he mands with 5 diffrent adjectives, prepositions or adverbs in an  1-hr observation and testing. "
    },
    "cc121": {
      "category": "Tact 13",
      "activity": null,
      "autoscore": "0",
      "instruction": "Tact 4 different adjectives excluding colors and shapes and 4 adverbs  1 point : if he tacts 4 different adjectives and 4 diffrent adverbs when tested   1/2 point :if he tacts a total of adjectives or adverbs, but has some form each category  if he tacts 4 different adjectives , but not adverbs, or vice versa "
    },
    "cc123": {
      "category": "Listener 13",
      "activity": null,
      "autoscore": "0",
      "instruction": "Selects items from and array of similar stimuli based on 4 pairs of relative adjectives  (e.g., biglittle, long-short) and demonstrates actions based on 4 pairs of relative adverbs (e.g., Quiet-loud, fast-slow)  1 point : if he selects items from an array of similar stimuli based on 4-pairs of relative adjectives , and follows instructions involving 4 pairs of relative adverbs when tested  1/2 point : if he selects items from an array of similar stimuli based on 2-pairs of relative adjectives  , and follows instructions involving 2 pairs of relative adverbs when tested"
    },
    "cc125": {
      "category": "VP/MTS 13",
      "activity": null,
      "autoscore": "0",
      "instruction": "Completes 20 different block designs, parquetry shape puzzles, or similar tasks with at  least 8 different pieces  1 point :  if he completes 20 diffrent block designs, shape puzzles or similar tasks with atleas 8 diffrent parts.  1/2 point :if he completes 20 diffrent block designs, shape puzzles or similar tasks with atleas 4 diffrent parts. "
    },
    "cc127": {
      "category": "Play 13",
      "activity": null,
      "autoscore": "0",
      "instruction": "Independently engages in arts and crafts type activities for 5 minutes  (e.g., drawing, coloring, painting, cutting, pasting)  1 point :if he independently engages in arts and crafts type for activities for 5 mins  1/2 point : if he independently engages in arts and crafts type for activities for 2 mins"
    },
    "cc129": {
      "category": "Social 13",
      "activity": null,
      "autoscore": "0",
      "instruction": "Intraverbally responds to 5 different questions or statements from peers  (e.g. verbally responds to What do you want to play?)  1 point : if he Intraverbally responds to 5 different questions or statements from peers without adult prompting or reinforcement during 1 hour observation or testing period.  1/2 point : if he Intraverbally responds to 2 different questions or statements from peers without adult prompting or reinforcement during 1 hour observation or  testing period."
    },
    "cc131": {
      "category": "Reading 13",
      "activity": null,
      "autoscore": "0",
      "instruction": "Tacts 10 uppercase letters on command.  1 point :if he tacts 10 uppercase letters  1/2 point : if he tacts 5 uppercase letters"
    },
    "cc133": {
      "category": "Writing 13",
      "activity": null,
      "autoscore": "0",
      "instruction": "Copies 10 letters or numbers legibly.  1 point if he copies 10 letters or numbers of any size lelgibly:  1/2 point : he copies 5 letters or numbers of any size legibly"
    },
    "cc135": {
      "category": "LRRFC 13",
      "activity": null,
      "autoscore": "0",
      "instruction": " Selects items from a page in a book or in the natural environment  based on 3 verbal components (e.g., verb, adjective, preposition, pronoun), for 25 WH question LRFFC tasks (e.g., Which milks the cow?) for 25 different topics  1 point : correctly selects 25 items given this type of LRFFC task  1/2 point : correctly selects 15 items given this type of LRFFC task"
    },
    "cc137": {
      "category": "Intraverbal 13",
      "activity": null,
      "autoscore": "0",
      "instruction": " Answers 2 questions after being read short passages (15 + words) from books, for 25 passages  (e.g., Who blew the house down?)  1 point : if he answers 2 questions for each 25 short passages from books or other written materials  1/2 point  :if he answers 1 questions for each 25 short passages from books or other written materials "
    },
    "cc139": {
      "category": "Group 13",
      "activity": null,
      "autoscore": "0",
      "instruction": "Works independently for 5 minutes in a group, and stays on task for 50 % of the period.  1 point : if he works independently for 5 minutes in a group activity/session involving 3 or more children, and stays on tasks for 50% of the period   1/2 point  :if he works independently for 2 minutes in a group activity/session involving 3 or more children, and stays on tasks for 50% of the period "
    },
    "cc142": {
      "category": "Linguistic 13",
      "activity": null,
      "autoscore": "0",
      "instruction": " Emits 10 different noun phrases containing at least 3 words with 2 modifiers (e.g., adjectives, prepositions, pronouns) (e.g., He’s my puppet. I want chocolate ice cream.)  1 point : if he emits 10 different 3-word noun phrases in any of the verbal operants except echoic with 2 modifiers  1/2 point : if he emits 5 different 3-word noun phrases in any of the verbal operants except echoic with 2 modifiers "
    },
    "cc144": {
      "category": "Math 13",
      "activity": null,
      "autoscore": "0",
      "instruction": "Counts out 1-5 from a larger set of items with 1 to 1 correspondence (e.g., Giveme 4 cars. Now give me 2 cars.)  1 point :if he counts 1-5 from a larger set of items with 1 to 1 correspondence when verbally asked.  1/2 point : if he counts 1-3 from a larger set of items with 1 to 1 correspondence when verbally asked."
    },
    "cc173": {
      "category": "Mand 12",
      "activity": null,
      "autoscore": "0",
      "instruction": "Politely mands for removal of aversive/stop an activity for 5 different circumstances.  1 point : if he appropriately(i.e., without negative behavior) Mands without echoic prompts to stop an undesirable activity, not participate in an activity, or otherwise remove  an aversive under 5 diffrent circumstances.  1/2 point :  if he appropriately(i.e., without negative behavior) Mands without echoic prompts to stop an undesirable activity, not participate in an activity, or otherwise remove an aversive under 2 diffrent circumstances."
    },
    "cc175": {
      "category": "Tact 12",
      "activity": null,
      "autoscore": "0",
      "instruction": "Tact 4 prepositions and 4 pronouns  Score 1 if student labels at least 4 prepositions  and 4 pronouns.  1 point : if he tacts 4 diffrent prepositions and different pronouns when tested  1/2 point : if he tacts a total of 4 preposition or pronouns, but has some from each category  if he tacts 4 diffrent prepositions,but not pronouns, or vice versa"
    },
    "cc177": {
      "category": "Listener 12",
      "activity": null,
      "autoscore": "0",
      "instruction": "Follows 2 instructions involving 6 different prepositions (e.g., Stand behind the chair) and 4 different pronouns (e.g., Touch my ear)  1 point : if he follows 2 instruction for each of 6 different prepositions and 4 diffrent  pronouns when tested.  1/2 point :if he follows 2 instruction for each of 3 different prepositions and 2 diffrent pronouns when tested. "
    },
    "cc179": {
      "category": "VP/MTS 12",
      "activity": null,
      "autoscore": "0",
      "instruction": "Demonstrates generalized non-identical matching in a messy array of 10 with 3 similar stimuli,  for 25 items (i.e., matches new items on the first trial)  1 point : if he demonstrates generalized non-identical matching with a novel item in a messy array  of 10 with 3 similar stimuli, for 25 itmes  1/2 point : if he demonstrates generalized non-identical matching with a novel item in a messy array of 10 with 3 similar stimuli, for 15 itmes"
    },
    "cc181": {
      "category": "Play 12",
      "activity": null,
      "autoscore": "0",
      "instruction": " Repeats a gross motor behavior to obtain a better effect for 2 activities (e.g., throwing a ball in a basket, swinging a bat at a T-ball, foot stomping to launch a rocket, pumping a swing)  1 point : if he will repeat a gross motor play behavior in an attempt to obtain a desired effect for 2 activities  1/2 point : if he will repeat a gross motor play behavior in an attempt to obtain a desired effect for 1 activity"
    },
    "cc183": {
      "category": "Soical 12",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneously mands to peers with WH question 5 times (e.g., Where are you going? What’s that? Who are you being? (timed observation 60 minutes)  1 point : emits 5 diffrent Spontaneous mands in an 1-hr period that involves asking peers questions, or for other mands seeking information  1/2 point :emits 2 diffrent Spontaneous mands in an 1-hr period that involves asking peers questions, or for other mands seeking information "
    },
    "cc185": {
      "category": "Reading 12",
      "activity": null,
      "autoscore": "0",
      "instruction": "Selects (LD’s) the correct uppercase letter from an array of 5 letters, for 10 different letters.  1 point : if he selects the correct uppercase letter from an array of 5 letters for 10 different letters  1/2 point : if he selects the correct uppercase letter from an array of 5 letters for 5 different letters"
    },
    "cc187": {
      "category": "Writing 12",
      "activity": null,
      "autoscore": "0",
      "instruction": "Independently traces within ¼ of the lines of 5 different geometrical shapes  (e.g., circle, square, triangle, rectangle, star).  1 point : if he independently traces within 1/4 inch of 5 different geometrical shapes.  1/2 point : if he independently traces within 1/2 inch of 5 different geometrical shapes."
    },
    "cc189": {
      "category": "LRFFC 12",
      "activity": null,
      "autoscore": "0",
      "instruction": "Selects items from a book based on 2 verbal components: either a feature (e.g., color), function (e.g., draw with), or class (e.g., clothing) for 25 LRFFC tasks. (e.g.. Do you see a brown animal? Can you find some clothing with buttons?)  Selects items from a book based on 2 verbal components: either a feature (e.g., color), function (e.g., draw with), or class (e.g., clothing) for 25 LRFFC tasks.  (e.g.. Do you see a brown animal? Can you find some clothing buttons?)  1 point : if he correctly selects 25 items given this type of LRFFC task  1/2 point : if he correctly selects 15 itmes given this type of LRFFC task"
    },
    "cc191": {
      "category": "Intraverbal 12",
      "activity": null,
      "autoscore": "0",
      "instruction": "Demonstrates 300 different intraverbal responses, tested or obtained from an accumulated list of known intraverbals. (200 Responses = ½ point) (300 Responses = 1 point)  1 point :300 Responses  1/2 point :200 Responses "
    },
    "cc193": {
      "category": "Group 12",
      "activity": null,
      "autoscore": "0",
      "instruction": "Responds to 5 different group instructions or questions without direct prompts in a group of 3 or more children (e.g. , Everybody stand up, Does anyone have a red shirt on?)  1 point : if he responds to 5 different group instructions or questions without prompts in a group of 3 or more children  1/2 point : if he responds to 2 different group instructions or questions without prompts in a group of 3 or more children"
    },
    "cc195": {
      "category": "Linguistic 12",
      "activity": null,
      "autoscore": "0",
      "instruction": " Emits verb inflections by combining 10 root verbs with affixes for regular past tense (e.g., played) and 10 root verbs with affixes for future tense (e.g. will play).  1 point : if he emits verb inflections in any of the verbal operants but echoic by combining 10 root root verbs with suffixes for past tense and 10 root verbs with affixes for future tense  1/2 point :if he emits verb inflections in any of the verbal operants but echoic for 10 past tense verbs, but not for 10 future tense verbs or vice versa "
    },
    "cc197": {
      "category": "Math 12",
      "activity": null,
      "autoscore": "0",
      "instruction": "Tacts numbers 1-5  1 point :if he tacts the numbers 1 to 5 when they are presented in a mixed up order, one at a time  1/2 point : if he tacts any 3 numbers "
    },
    "cc225": {
      "category": "Mand 11",
      "activity": null,
      "instruction": "Spontaneously mands for different verbal information with “Wh” question 5 times in 60 minutes.  1 point : if he spontaneously mands for different verbal information using WH questions  or other question words for 5 times durin a 1-hr observation.  1/2 point : if he spontaneously mands for different verbal information using WH questions  or other question words for 2 times durin a 1-hr observation."
    },
    "cc227": {
      "category": "Tact 11",
      "activity": null,
      "autoscore": "0",
      "instruction": "Tact color, shape, and function of 5 items.  1 point :if he tacts the color, shapes, and function of 5 different objects  when each asked  during a mixed order of testing.  1/2 point :if he tacts 2 feature of 5 different objects  when each asked  during a mixed order of testing. "
    },
    "cc229": {
      "category": "Listener 11",
      "activity": null,
      "autoscore": "0",
      "instruction": "Selects items by color and shape from an array of six similar stimuli, for 4 colors and 4 shapes  (e.g., Find the red car. Find the square cracker)  1 point : if he selects items by color and shape from an array of 6 similar stimuli for 4 colors and 4 shapes  when tested.  1/2 point : if he selects items by color and shape from an array of 6 similar stimuli for 2 colors and 2 shapes "
    },
    "cc231": {
      "category": "VP/MTS 11",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneously matches any part of an arts and crafts activity to another person’s sample 2 times.  (e.g., a peer colors a balloon red and a child copies the peer’s red color for his balloon)  1 point : if he spontaneously matches any part of an arts and crafts activity to an adult or peers sample 2 times  1/2 point : if he spontaneously matches any part of an arts and crafts activity to an adult or peers sample once"
    },
    "cc233": {
      "category": "Play 11",
      "activity": null,
      "autoscore": "0",
      "instruction": "Spontaneously engages in pretend or imaginary play on 5 occasions (e.g., dressing up, a pretend party with stuffed animals, pretends to cook)  1 point if he spontaneously engages in pretend or imaginary play on 5 occasions:  1/2 point : if he spontaneously engages in pretend or imaginary play for 2 occasions"
    },
    "cc235": {
      "category": "Social 11",
      "activity": null,
      "instruction": "Spontaneously engages in pretend or imaginary play on 5 occasions (e.g., dressing up, a pretend party with stuffed animals, pretends to cook)  1 point : if he spontaneously cooperates with a peer to accomplish a specific outcome 5 times during  observation or testing  1/2 point : if he spontaneously cooperates with a peer to accomplish a specific outcome 2 times during observation or testing"
    },
    "cc237": {
      "category": "Reading 11",
      "activity": null,
      "autoscore": "0",
      "instruction": "Attends to a book when a story is being read to him for 75% of the time. (timed observation 3 min)  1 point : if he attends to a book when a story is being read to him for 75% of the time in a 3 minute period, without any prompts to attend to the book  1/2 point : if he attends to a book when a story is being read to him for 50% of the time in a 3 minute period, without any prompts to attend to the book"
    },
    "cc239": {
      "category": "Writing 11",
      "activity": null,
      "autoscore": "0",
      "instruction": "Imitates 5 different writing actions modeled by an adult using a writing instrument and a writing surface.  1 point : if he imitates 5 diffrent writing action actions modeled by an adult  1/2 point : if he imitates 3 diffrent writing action actions modeled by an adult"
    },
    "cc241": {
      "category": "None",
      "activity": null,
      "autoscore": "0",
      "instruction": " Selects the correct item from an array of 10 that contains 3 similar stimuli (e.g., similar color, shape, or class, but they are the wrong choices), for 25 different WH questions LRFFC tasks.  1 point :if he correctly selects the item from an array of 10 or from a book that contains 3 or more similar stimuli, for 25 different LRFFC tasks.  1/2 point : if he correctly selects 15 items given this type of LRRFC task"
    },
    "cc243": {
      "category": "Intraverbal 11",
      "activity": null,
      "autoscore": "0",
      "instruction": " Spontaneously emits 20 intraverbal comments (can be part mand) (e.g., Dad say, I’m going to the car, and the child spontaneously says, I want to go for a ride!)  1 point :if he spontaneously emits 20 intraverbal responses in the natural environment in the course of a single day.  1/2 point : if he spontaneously emits 10 intraverbal responses in the natural environment in the course of a single day."
    },
    "cc245": {
      "category": "Group 11",
      "activity": null,
      "autoscore": "0",
      "instruction": "Uses the toilet and washes hands with only verbal prompts.  1 point : if he uses the toilet and washes hands with verbal prompt  1/2 point : if he uses the toilet and washes hands, but requires physical assistancce"
    },
    "cc247": {
      "category": "Linguistic 11",
      "activity": null,
      "autoscore": "0",
      "instruction": " Emits noun inflections by combining 10 root nouns with suffixes for plurals (e.g., dog vs. dogs) and 10 root nouns with suffixes for possessions (e.g., dog’s collar vs. cat’s collar)  1 point : if he emits nouns eflictions in any of the verbal opearants but echoic by combining 10 root nouns with suffixes for plurals and 10 root nouns with suffixes for possessions  1/2 point : if he emits noun inflections for 10 noun-plural combinaation, but not for 10 noun-possession combination, or vice versa"
    },
    "cc249": {
      "category": "Math 11",
      "activity": null,
      "autoscore": "0",
      "instruction": "Identifies as a listener the numbers 1-5 in an array of 5 different numbers. 1 point :if he discriminates as a listener among 1-5 in an array of 5 different numbers  1/2 point : if he discriminates as a listener among the 1-3 in an array of 3 different numbers"
    }
  }
}');

function cellNC($check, $cid, $mod)
{
    if ($check % 2 == 0)
    {
        $result = $cid - $mod;
    }
    else
    {
        $result = $cid + $mod;
    }

    $result = $result + $cid;
    return "cc" . $result;
}


switch ($json_request->tid)
{
case 'table1':
    $mod = 9;
    break;

case 'table2':
    $mod = 12;
    break;
default:
    $mod = 13;
}

$table = $json_request->tid;
$response = cellNC($json_request->check, $json_request->cid, $mod);


die(json_encode(array(
    "category" => $json_instruction->$table->$response->category,
    "detail" => $json_instruction->$table->$response->instruction,
    "url" => $json_instruction->$table->$response->activity,
    "auto" => $json_instruction->$table->$response->autoscore
))); 