<x-app-layout>
    @php
        $members = [
            [
                'name' => 'Devki',
                'role' => 'PhD',
                'image' => asset('assets/images/labMembers/Devki.png'),
                'bio' =>
                    'MSc Zoology, Panjab University I am a final-year PhD student in Dr. Lolitika Mandal\'s lab. I am working on the side effects of the most commonly used hypertension drugs (Angiotensin-converting enzyme inhibitors) on the blood cells both in Drosophila melanogaster and the human blood cell line. Additionally, we are interested in knowing the long-term effect of Angiotensin-converting enzyme inhibitors on immunity. I\'m from Kullu-Manali and I adore mountains, India\'s most picturesque hill station. Beyond my academic pursuits, whenever I find some time, I love to go on long drives with my friends. And listening to my regional folk songs are my go-to happiness.',
                'x_username' => 'devki1007',
                'email' => 'ph19003@iisermohali.ac.in',
                'modal_id' => 'studentModal-Devki',
                'social' => [
                    'facebook' => '#',
                    'twitter' => 'https://twitter.com/devki1007',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Md Kaizer',
                'role' => 'PhD',
                'image' => asset('assets/images/labMembers/Kaizer.png'),
                'bio' =>
                    'I have completed my post-graduation on Zoology from University of Burdwan, West Bengal. My strong passion for stem cell biology and curiosity about developmental biology have driven me to join the Developmental Genetics Laboratory at IISER Mohali. Moving forward, I\'m eager to delve deeper into this field, aiming to give back to the society and the realm of biology that has fueled my passion. I\'m quite the movie enthusiast and love spending my free time expanding my knowledge beyond my field of research.',
                'x_username' => 'MdKaizer1',
                'email' => 'ph20037@iisermohali.ac.in',
                'modal_id' => 'studentModal-MdKaizer',
                'social' => [
                    'facebook' => '#',
                    'twitter' => 'https://twitter.com/MdKaizer1',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Deepak',
                'role' => 'PhD',
                'image' => asset('assets/images/labMembers/Deepak.png'),
                'bio' =>
                    'I did my undergraduate from Kurukshetra University, kurukshetra in Biochemistry majors. Then I went to University of Hyderabad, Hyderabad for M.Sc. in Biochemistry. Currently I am working as doctrate student with Prof. Lolitika Mandal at IISER Mohali, since September 2021. I am interested in studying the metabolic cues that dictates the maintenence and division of Hematopoiesis stem cells in Drosophila melanogaster. I am also a PMRF fellow at IISER Mohali. Poetry is the Science of Virtual Reality!',
                'x_username' => 'Deepak6drl',
                'email' => 'ph21011@iisermohali.ac.in',
                'modal_id' => 'studentModal-Deepak',
                'social' => [
                    'facebook' => '#',
                    'twitter' => 'https://twitter.com/Deepak6drl',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Abhijith P',
                'role' => 'PhD',
                'image' => asset('assets/images/labMembers/Abhijit.png'),
                'bio' =>
                    'I hold a Master\'s degree in Zoology from the University of Kerala and have been a member of the Drosophila Research Lab since 2021. My research focuses on unravelling the molecular networks that govern wound healing and hematopoietic niche maintenance in Drosophila melanogaster. The ultimate goal of my work is to help develop better strategies for tissue repair and regeneration. Outside the lab, you\'ll usually find me playing cricket, football, or diving into video games.',
                'x_username' => 'Abhijith_p98',
                'email' => 'ph21032@iisermohali.ac.in',
                'modal_id' => 'studentModal-AbhijithP',
                'social' => [
                    'facebook' => '#',
                    'twitter' => 'https://twitter.com/Abhijith_p98',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Aiswarya K P',
                'role' => 'PhD',
                'image' => asset('assets/images/labMembers/Aishwarya.png'),
                'bio' =>
                    'I am Aiswarya K. P., a PhD student at the Indian Institute of Science Education and Research (IISER) Mohali, where I joined the Drosophila Research Laboratory in 2022. I hold a Master\'s degree in Integrative Biology from the Inter University Centre for Evolutionary and Integrative Biology in Kariavattom, Trivandrum. My current research focuses on investigating the effects of circadian rhythm disruption on blood cell homeostasis, utilizing Drosophila melanogaster as a model organism. This work aims to enhance our understanding of the intricate relationships between circadian biology and hematopoiesis. Outside of my academic pursuits, I enjoy drawing, singing, and watching films, which provide me with a creative outlet and a refreshing balance to my research endeavors.',
                'x_username' => '',
                'email' => 'ph22020@iisermohali.ac.in',
                'modal_id' => 'studentModal-AiswaryaKP',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Suman Kumar Singh',
                'role' => 'PhD',
                'image' => asset('assets/images/labMembers/Suman.png'),
                'bio' =>
                    'I hold a Master\'s degree in Zoology from Banaras Hindu University, specializing in Cytogenetics, and currently I\'m am pursuing my career as a PhD Scholar. As a PhD scholar, I am passionate about unraveling the cellular and genetic mechanisms governing stem cell regulation and maintenance. My research focuses on understanding the intricate molecular pathways and genetic networks controlling stem cell self-renewal, differentiation, and fate decisions.',
                'x_username' => 'SumankSingh19',
                'email' => 'ph23017@iisermohali.ac.in',
                'modal_id' => 'studentModal-SumanKumarSingh',
                'social' => [
                    'facebook' => '#',
                    'twitter' => 'https://twitter.com/SumankSingh19',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Tamanna',
                'role' => 'PhD',
                'image' => asset('assets/images/labMembers/Tamanna.png'),
                'bio' =>
                    'Hi, I\'m Tamanna, a PhD student working with Dr. Lolitika Mandal. Since joining, I\'ve been working with Drosophila, specifically dissecting larval lymph glands to study hematopoiesis development using various markers. It\'s been an exciting first experience with dissection, especially with such a small organism! Outside the lab, I enjoy trekking and love to explore mountains. In my free time, I love watching science fiction movies, listening to music, and exploring my creative side through art, as it\'s a true passion of mine.',
                'x_username' => '',
                'email' => 'ph24065@iisermohali.ac.in',
                'modal_id' => 'studentModal-Tamanna',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Ayushi Khandelwal',
                'role' => 'PhD',
                'image' => asset('assets/images/labMembers/Ayushi.png'),
                'bio' =>
                    'Hello, I\'m Ayushi Khandelwal, and I recently joined Lolitika Mandal\'s team. Currently, I\'m working on dissecting Drosophila larvae, mounting lymph glands, and studying hematopoiesis in Drosophila. Outside the lab, I enjoy dancing and listening to music in my free time.',
                'x_username' => '',
                'email' => 'ph24074@iisermohali.ac.in',
                'modal_id' => 'studentModal-AyushiKhandelwal',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Pallav Baraya',
                'role' => 'Thesis student',
                'image' => asset('assets/images/labMembers/Pallav.png'),
                'bio' =>
                    'Hi there! To tell you a little bit about myself, it was 2021 when I started exploring the fascinating world of genetics and molecular biology as a summer intern in Professor Mandal\'s lab at IISER Mohali. From then to now, I have grown to love research while working as a part of this amazing team, who have helped me learn and guided me every step of the way, in the last 3 years. My current research project as a final-year student focuses on understanding the cues that dictate the development of Drosophila larval hematopoietic organ, the Lymph gland. The essence of exploration in research is what fuels my passion towards it, and is something I carry with myself wherever I go. When I\'m not in the lab, you might find me clicking pictures around campus, or taking a ride towards the mesmerizing Himalayas!',
                'x_username' => 'pallavbaraya',
                'email' => 'ms20219@iisermohali.ac.in',
                'modal_id' => 'studentModal-PallavBaraya',
                'social' => [
                    'facebook' => '#',
                    'twitter' => 'https://twitter.com/pallavbaraya',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Sapna Krishnakumar',
                'role' => 'Thesis student',
                'image' => asset('assets/images/labMembers/Sapna.png'),
                'bio' =>
                    'Hi, I\'m Sapna and I\'m from Chennai. I have been associated with the lab since late 2021. I\'m a final year BS-MS student and DST-INSPIRE Scholar working with Prof Lolitika Mandal. I am interested in understanding how cells infer different mechanical and biochemical cues to ensure homeostasis during development. My thesis research involves studying the role of receptor tyrosine kinase and its ligand in hematopoietic niche functionality. When I\'m not in the lab having fun with my flies, you can find me singing (Carnatic vocal), dancing (Bharathanatyam dance), binge-watching an old TV series or walking around campus.',
                'x_username' => 'sapnakk09',
                'email' => 'ms20178@iisermohali.ac.in',
                'modal_id' => 'studentModal-SapnaKrishnakumar',
                'social' => [
                    'facebook' => '#',
                    'twitter' => 'https://twitter.com/sapnakk09',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Snigdha',
                'role' => 'Thesis student',
                'image' => asset('assets/images/labMembers/Snigdha_.png'),
                'bio' =>
                    'Hey, I\'m Snigdha, currently pursuing my master\'s at IISER Mohali. My research focuses on understanding the complex molecular and genetic circuitry involved in wound healing in adult Drosophila, which I\'m exploring as part of my master\'s thesis. Outside the lab, I enjoy immersing myself in different genres of movies, from classics to modern hits. I also have a passion for travel and love discovering new places, whether it\'s exploring nature or experiencing different cultures.',
                'x_username' => 'snigdha1114',
                'email' => 'ms20220@iisermohali.ac.in',
                'modal_id' => 'studentModal-Snigdha',
                'social' => [
                    'facebook' => '#',
                    'twitter' => 'https://twitter.com/snigdha1114',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Akshara S Babu',
                'role' => 'Thesis student',
                'image' => asset('assets/images/labMembers/Akshara.png'),
                'bio' =>
                    'I am a BS-MS student at IISER Mohali, working on my MS-thesis. I am exploring the molecular circuitry of blood cell development, using Drosophila as a model organism. My work aims to uncover how genetic and developmental pathways control cell fate decisions, differentiation, and proliferation during hematopoiesis through developmental genetics, molecular biology and imaging. I am interested in stem cells due to its vast potential in regenerative medicine and its importance for society. Stem cells hold the promise of revolutionizing treatments for numerous diseases. This area of research not only offers hope for novel therapeutic approaches but also deepens our understanding of cellular development. In addition to developmental genetics, I am also passionate about neuroscience. Specifically, I am interested in understanding neural circuitry formation, synaptic plasticity, and how these processes may relate to neurodegenerative diseases. Outside the lab, I enjoy dancing, drawing, painting and cooking, activities that allow me to tap into my creativity and maintain balance in life.',
                'x_username' => 'AksharaSur26954',
                'email' => 'ms20148@iisermohali.ac.in',
                'modal_id' => 'studentModal-AksharaSBabu',
                'social' => [
                    'facebook' => '#',
                    'twitter' => 'https://twitter.com/AksharaSur26954',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Sujal Chede',
                'role' => 'Research Intern',
                'image' => asset('assets/images/labMembers/Sujal.png'),
                'bio' =>
                    'I am Sujal Chede, currently pursuing my academic journey as a BS-MS student. I have completed my schooling from Amrita Vidyalayam and St. Xavier\'s College, Mumbai. Currently, I am engaged as a research intern in the Drosophila Research Lab.',
                'x_username' => '',
                'email' => 'ms22154@iisermohali.ac.in',
                'modal_id' => 'studentModal-SujalChede',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Siddhi Aggarwal',
                'role' => 'Research Intern',
                'image' => asset('assets/images/labMembers/Siddhi.png'),
                'bio' =>
                    'Welcome to my corner of the Lab ! I am currently a fourth-year BS-MS student at IISER Mohali, pursuing Biology as my major and Science Society and Studies as my minor. My research centers on Hematopoiesis in Drosophila melanogaster, a model organism that has captivated me since my Day 1 at IISER. Through my work, I aim to uncover the intricacies of blood cell formation and regulation, which could offer insights into broader biological processes. I have a keen research interest in understanding the complexities of Diabetes and its systemic effects, a field I aspire to contribute to in the future. Growing up in Punjab, surrounded by the richness of its natural landscape, I developed a deep connection with nature. This connection has fueled my curiosity about the underlying mechanisms that govern life, from ecosystems to cellular processes. IISER has allowed me to cultivate various skills, from experimental techniques to data analysis and scientific communication. My journey in the lab, started during second year and it has been incredibly rewarding, inspiring me to continue exploring the intersection of biology, nature, and human health.',
                'x_username' => 'SiddhiAgr',
                'email' => 'ms21049@iisermohali.ac.in',
                'modal_id' => 'studentModal-SiddhiAggarwal',
                'social' => [
                    'facebook' => '#',
                    'twitter' => 'https://twitter.com/SiddhiAgr',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Gurvinder Singh',
                'role' => 'Lab Helper',
                'image' => asset('assets/images/labMembers/No_Image_Available.jpg'),
                'bio' => '',
                'x_username' => '',
                'email' => '',
                'modal_id' => 'studentModal-GurvinderSingh',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
        ];
        $postDocAlumni = [
            [
                'name' => 'Joyti Singh',
                'fellow' => 'DBT Welcome Trust IA Early Career Fellow',
            ],
            [
                'name' => 'Sreemoee Chakraborti',
                'fellow' => 'DBT Research Associate',
            ],
        ];
        $AlumniPhD = [
            [
                'name' => 'Nidhi Sharma Dey',
                'fellowship' => 'Institute Fellow',
                'current_position' => 'Research Associate',
                'affiliation' => 'The Hull York Medical School, York University, UK',
            ],
            [
                'name' => 'Saikat Ghosh',
                'fellowship' => 'CSIR Fellow',
                'current_position' => 'Postdoctoral Researcher',
                'affiliation' => 'NICHD, National Institutes of Health (NIH), USA',
            ],
            [
                'name' => 'Satish K Tiwari',
                'fellowship' => 'CSIR Fellow',
                'current_position' => 'Postdoctoral Researcher',
                'affiliation' => 'Singapore Immunology Network (A*STAR), Singapore',
            ],
            [
                'name' => 'Harleen Kaur',
                'fellowship' => 'Inspire Fellow',
                'current_position' => 'Guest Lecturer',
                'affiliation' => 'Department of Human Genetics, Amity University, Mohali, Punjab',
            ],
            [
                'name' => 'Shiv Kumar Sharma',
                'fellowship' => 'CSIR Fellow',
                'current_position' => 'Postdoctoral Fellow',
                'affiliation' => 'UT Southwestern Research Labs, Dallas, USA',
            ],
            [
                'name' => 'Aditya Kanwal',
                'fellowship' => 'DBT Fellow',
                'current_position' => 'Postdoctoral Fellow',
                'affiliation' => 'Jackson Laboratory, USA',
            ],
            [
                'name' => 'Parvathy Rmesh',
                'fellowship' => 'Institute Fellow',
                'current_position' => 'Postdoctoral Fellow',
                'affiliation' => 'University of Glasgow, UK',
            ],
            [
                'name' => 'Sushmit Ghosh',
                'fellowship' => 'CSIR Fellow',
                'current_position' => 'Postdoctoral Fellow',
                'affiliation' => 'Weill Cornell Medicine, Pathology and Laboratory Medicine, New York, USA',
            ],
        ];
        $AlumniMasters = [
            [
                'name' => 'Arashdeep Singh',
                'current_position' => 'Research Associate',
                'affiliation' => 'Postdoctoral fellow at NIH, Bethesda, USA',
            ],
            [
                'name' => 'Mayank Chugh',
                'current_position' => 'Postdoctoral Researcher MBA',
                'affiliation' => 'Harvard Medical School',
            ],
            [
                'name' => 'Jugal Pant',
                'current_position' => 'Assistant Manager at Havells India Ltd',
                'affiliation' => 'Havells India Ltd Noida, Uttar Pradesh',
            ],
            [
                'name' => 'Parvathy Ramesh',
                'current_position' => 'Research Associate',
                'affiliation' => 'School of Cancer Sciences, The University of Glasgow, UK',
            ],
            [
                'name' => 'Aarathy RG',
                'current_position' => 'Postdoctoral Researcher',
                'affiliation' => 'University of Salzburg, Austria',
            ],
            [
                'name' => 'Ashutosh Tiwari',
                'current_position' => 'Doctoral Student',
                'affiliation' => 'ICOB, ACADEMIA SINICA, Taipei, Taiwan',
            ],
            [
                'name' => 'Adhayasha Nayak',
                'current_position' => 'Doctoral Student',
                'affiliation' => 'University of Montana, USA',
            ],
            [
                'name' => 'Vaishnavi Dandavate',
                'current_position' => 'Doctoral Student',
                'affiliation' => 'Weizmann Institute of Science',
            ],
            [
                'name' => 'Sreelekshmi SR',
                'current_position' => 'Senior Research Fellow',
                'affiliation' => 'NCCS, Pune',
            ],
            [
                'name' => 'Aiswarya AS.',
                'current_position' => 'Preparing for Staff Selection Commission and Public Service Commission',
                'affiliation' => '',
            ],
            [
                'name' => 'Harsath Amal',
                'current_position' => 'Doctoral Student',
                'affiliation' => 'Institute of Animal Physiology, Badestr. 9, D-48149 Münster, Germany',
            ],
            [
                'name' => 'Pranav Vijayawada Joshi',
                'current_position' => 'MBA in Data Science',
                'affiliation' => 'Symbiosis, Pune',
            ],
            [
                'name' => 'Saswata Bhattacharyya',
                'current_position' => 'Doctoral Student',
                'affiliation' => 'NCBS',
            ],
            [
                'name' => 'Shivansh Kanojia',
                'current_position' => 'Doctoral Student',
                'affiliation' => 'Philipps University, Marburg',
            ],
            [
                'name' => 'Jennifer John',
                'current_position' => 'Doctoral Student',
                'affiliation' => 'University of Manchester, UK',
            ],
            [
                'name' => 'Rajesh Sahu',
                'current_position' => 'Doctoral Student',
                'affiliation' =>
                    'Institute of Genetics and of Molecular and Cellular Biology (IGBMC), University of Strasbourg',
            ],
            [
                'name' => 'Kriti Attri',
                'current_position' => 'Doctoral Student',
                'affiliation' =>
                    'Max Planck Institute for Heart and Lung Research, Ludwigstr. 43, 61231 Bad Nauheim, Germany',
            ],
            [
                'name' => 'Saurabh Bhatt',
                'current_position' => 'Doctoral Student',
                'affiliation' => 'IISC Bangalore',
            ],
        ];
        $developmentGeneticsLab = [
            [
                'name' => 'Akanksha Singh',
                'role' => 'Post Doc',
                'image' => asset('assets/images/labMembers/Molecular Cell and Development Biology Lab/Akansha.png'),
                'bio' =>
                    'I pursued my B.Sc. (Hons.) and M.Sc. in Zoology from Ramjas College, University of Delhi. Further, I did my doctoral research in the field of neurodegeneration from the Department of Zoology, University of Delhi. Having studied the role of lipid metabolism in the progression of Huntington’s disease during my Ph.D., I could appreciate the dynamic role lipids play in maintaining cellular and physiological homeostasis. At present, I aim to understand how the metabolic status of fatbody regulates female germline stem cell survival and maintenance. Apart from research, I like to read non-fictional books, teach, listen to music, cook, and spend time with my loved ones.',
                'x_username' => 'AkankshaSingh_8',
                'email' => 'akankshasingh81293@gmail.com',
                'modal_id' => 'studentModal-AkankshaSingh',
                'social' => [
                    'facebook' => '#',
                    'twitter' => 'https://twitter.com/AkankshaSingh_8',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Dheeraj Kumar',
                'role' => 'PhD',
                'image' => asset('assets/images/labMembers/Molecular Cell and Development Biology Lab/Dheeraj.png'),
                'bio' =>
                    "Hey everyone, I hold an MSc in Biotechnology from the School of Biotechnology, BHU, and I am currently conducting research at IISER Mohali from Jan 2022. My work focuses on exploring the inter-organ communication network activated by the heart, aiming to understand its role in maintaining systemic homeostasis. Using Drosophila as a model organism, I am uncovering key insights into how the heart influences other organs in the body. When I'm not in the lab, I channel my creativity into painting and sketching, and I stay active by enjoying regular gym workouts.",
                'x_username' => 'kr_dheeraj01',
                'email' => 'ph21088@iisermohali.ac.in',
                'modal_id' => 'studentModal-DheerajKumar',
                'social' => [
                    'facebook' => '#',
                    'twitter' => 'https://twitter.com/kr_dheeraj01',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Sameeksha Verma',
                'role' => 'PhD',
                'image' => asset('assets/images/labMembers/Molecular Cell and Development Biology Lab/Sameeksha.png'),
                'bio' =>
                    "I completed my master’s degree in Stem Cell and Tissue Engineering at Panjab University. In 2023, I began my PhD at IISER Mohali in the Cell and Molecular Developmental Lab. In multicellular organisms, organs, while specialized in their functions, rely on interorgan communication for maintaining homeostasis and adapting to external changes. By using Drosophila as a model organism, I aim to explore how metabolic alterations in one tissue influence stem cell behavior in another, potentially illuminating broader principles relevant to multicellular organisms. In my spare time, I enjoy painting, watching thrillers, and listening to '90s music.",
                'x_username' => 'Sameeksha53563',
                'email' => 'ph22077@iisermohali.ac.in',
                'modal_id' => 'studentModal-SameekshaVerma',
                'social' => [
                    'facebook' => '#',
                    'twitter' => 'https://twitter.com/Sameeksha53563',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Anmol',
                'role' => 'PhD',
                'image' => asset('assets/images/labMembers/Molecular Cell and Development Biology Lab/Anmol.png'),
                'bio' =>
                    'Hey there! I’m Anmol, and I spend most of my time in the lab working with fruit flies—dissecting larvae, setting up crosses, and investigating the role of exosomes in intercellular communication. My research focuses on understanding how these tiny vesicles contribute to molecular signaling in Drosophila. When I’m not peering into a microscope, I’m out exploring the world—whether that’s traveling to new places, leveling up in my favorite games, or geeking out over the latest tech. I also love meeting new people and exchanging ideas, so if you ever want to chat about science, gaming, or the best travel spots, I’m all ears!',
                'x_username' => '',
                'email' => 'ph23063@iisermohali.ac.in',
                'modal_id' => 'studentModal-Anmol',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
            [
                'name' => 'Pooja Chaudhary',
                'role' => 'PhD',
                'image' => asset('assets/images/labMembers/Molecular Cell and Development Biology Lab/Pooja.png'),
                'bio' =>
                    'I completed my Bachelor of Science from Xavier’s College, my Master of Science from Rajasthan University, and I am currently pursuing my PhD at IISER Mohali. My primary research interest lies in understanding how diabetes and high-fat diets influence cardiac health. I am passionate about uncovering the mechanisms through which metabolic changes, inflammation, and lipid accumulation impact the cardiovascular system. This work aims to provide insights that can contribute to better prevention and treatment strategies for heart diseases. Outside of my research, I enjoy hobbies that inspire creativity and balance in my life. Cooking, my favorite pastime, allows me to experiment and think innovatively—skills that often complement my scientific approach. I also appreciate music, movies, and television, which offer moments of relaxation and fresh perspectives. Additionally, as a highly social person, I thrive on engaging in meaningful conversations and connecting with others in a positive way, which enhances my ability to collaborate effectively in research settings.',
                'x_username' => '',
                'email' => 'ph24024@iisermohali.ac.in',
                'modal_id' => 'studentModal-PoojaChaudhary',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#',
                    'youtube' => '#',
                ],
            ],
        ];

        $OnlineResources = [
            [
                'name' => 'FlyBase',
                'link' => 'https://flybase.org/',
            ],
            [
                'name' => 'Bloomington Drosophila Stock Center (BDSC)',
                'link' => 'https://bdsc.indiana.edu/',
            ],
            [
                'name' => 'Interactive Fly',
                'link' => 'https://www.sdbonline.org/sites/fly/aimain/1aahome.htm',
            ],
            [
                'name' => 'SDB Online',
                'link' => 'https://www.sdbonline.org/',
            ],
            [
                'name' => 'Droso 4 Schools',
                'link' => 'https://droso4schools.wordpress.com/',
            ],
            [
                'name' => 'DSHB (Developmental Studies Hybridoma Bank)',
                'link' => 'https://dshb.biology.uiowa.edu/',
            ],
            [
                'name' => 'Kyoto Drosophila Stock Center',
                'link' => 'https://kyotofly.kit.jp/cgi-bin/stocks/index.cgi',
            ],
            [
                'name' => 'Vienna Drosophila Resource Center (VDRC)',
                'link' => 'https://shop.vbc.ac.at/vdrc_store/',
            ],
        ];

    @endphp

    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
        style="background: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url({{ asset('assets/images/HeaderMember.jpeg') }}) center center no-repeat; background-size: cover; height: 400px;">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Members</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Members</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Navigation Tabs Start -->
    <div class="container-fluid mb-5">
        <div class="container">
            <ul class="nav nav-tabs justify-content-center" id="membersTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="current-students-tab" data-bs-toggle="tab"
                        data-bs-target="#current-students" type="button" role="tab">Current Students</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="alumni-postdoc-tab" data-bs-toggle="tab"
                        data-bs-target="#alumni-postdoc" type="button" role="tab">Alumni PostDoc</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="alumni-phd-tab" data-bs-toggle="tab" data-bs-target="#alumni-phd"
                        type="button" role="tab">Alumni PhD</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="alumni-masters-tab" data-bs-toggle="tab"
                        data-bs-target="#alumni-masters" type="button" role="tab">Alumni Masters</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="mcdb-lab-tab" data-bs-toggle="tab" data-bs-target="#dgl-lab"
                        type="button" role="tab">Molecular Cell and Development Biological Lab</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="online-resources-tab" data-bs-toggle="tab"
                        data-bs-target="#online-resources" type="button" role="tab">Online Resources</button>
                </li>

            </ul>
        </div>
    </div>
    <!-- Navigation Tabs End -->

    <div class="tab-content" id="membersTabsContent">
        <!-- Current Students Tab -->
        <!-- Current Students Tab -->
        <div class="tab-pane fade show active" id="current-students" role="tabpanel"
            aria-labelledby="current-students-tab">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    @foreach ($members as $member)
                        <div class="col wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item position-relative overflow-hidden group h-100">
                                <div class="member-image-container position-relative">
                                    <img class="img-fluid w-100 transition-all duration-300 group-hover:scale-110"
                                        src="{{ $member['image'] }}" alt="{{ $member['name'] }}">

                                    <div
                                        class="team-social 
                                absolute inset-0 
                                bg-black bg-opacity-50 
                                flex items-center justify-center 
                                opacity-0 group-hover:opacity-100 
                                transition-opacity duration-300">

                                        <a class="btn btn-square btn-light mx-1"
                                            href="{{ $member['social']['twitter'] ?? '#' }}" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="text-center p-4" data-bs-toggle="modal"
                                    data-bs-target="#{{ $member['modal_id'] }}" style="cursor: pointer;">
                                    <h5 class="mb-1">{{ $member['name'] }}</h5>
                                    <span>{{ $member['role'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        @foreach ($members as $member)
            <div class="modal fade" id="{{ $member['modal_id'] }}" tabindex="-1"
                aria-labelledby="studentModalLabel-{{ $member['name'] }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="studentModalLabel-{{ $member['name'] }}">
                                {{ $member['name'] }} -
                                {{ $member['role'] }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ $member['image'] }}" class="img-fluid rounded"
                                        alt="{{ $member['name'] }}">
                                </div>
                                <div class="col-md-8">
                                    <h4>About Me</h4>
                                    <p>{{ $member['bio'] }}</p>
                                    <div class="contact-info mt-3">
                                        <strong>X Username:</strong> {{ $member['x_username'] }} <br>
                                        <strong>Email:</strong> {{ $member['email'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Alumni PostDoc Tab -->
        <div class="tab-pane fade" id="alumni-postdoc" role="tabpanel" aria-labelledby="alumni-postdoc-tab">
            <div class="container py-5">
                <table class="table  table-hover text-dark">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Fellow</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- PostDoc entries will be added here -->
                        @foreach ($postDocAlumni as $alumnus)
                            <tr class="text-black">
                                <td>{{ $alumnus['name'] }}</td>
                                <td>{{ $alumnus['fellow'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Alumni PhD Tab -->
        <div class="tab-pane fade" id="alumni-phd" role="tabpanel" aria-labelledby="alumni-phd-tab">
            <div class="container py-5">
                <table class="table table-hover text-dark">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Fellowship</th>
                            <th>Current Position</th>
                            <th>Affiliation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- PhD Alumni entries will be added here -->
                        @foreach ($AlumniPhD as $alumnus)
                            <tr class="text-black">
                                <td>{{ $alumnus['name'] }}</td>
                                <td>{{ $alumnus['fellowship'] }}</td>
                                <td>{{ $alumnus['current_position'] }}</td>
                                <td>{{ $alumnus['affiliation'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <!-- Alumni Masters Tab -->

        <div class="tab-pane fade" id="alumni-masters" role="tabpanel" aria-labelledby="alumni-masters-tab">
            <div class="container py-5">
                <table class="table table-hover text-dark">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Current Position</th>
                            <th>Affiliation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Masters Alumni entries will be added here -->
                        @foreach ($AlumniMasters as $alumnus)
                            <tr class="text-black">
                                <td>{{ $alumnus['name'] }}</td>
                                <td>{{ $alumnus['current_position'] }}</td>
                                <td>{{ $alumnus['affiliation'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <!-- Molecular Cell and Development Biological Lab Tab -->
        <!-- Molecular Cell and Development Biological Lab Tab -->
        <div class="tab-pane fade" id="dgl-lab" role="tabpanel" aria-labelledby="mcdb-lab-tab">
            <div class="container">
                <div class="text-end mb-3">
                    <button class="btn btn-primary" id="toggleAlumniBtn">Show Alumni</button>
                </div>

                <!-- Alumni Table Section - Hidden by default -->
                <div id="alumni-table-section" style="display: none;" class="mb-4">
                    <h3 class="mb-3">Alumni</h3>
                    <table class="table table-hover text-dark">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Designation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $alumni = [
                                    [
                                        'email' => 'ph15013@iisermohali.ac.in',
                                        'name' => 'Prerna Budakoti',
                                        'designation' => 'Ex-PhD',
                                    ],
                                    [
                                        'email' => 'jayatigera19@gmail.com',
                                        'name' => 'Jayati Gera',
                                        'designation' => 'Ex-PhD',
                                    ],
                                    ['email' => '', 'name' => 'Gunjan Chauhan', 'designation' => 'Ex-PhD'],
                                ];
                            @endphp
                            @foreach ($alumni as $alum)
                                <tr class="text-black">
                                    <td>{{ $alum['name'] }}</td>
                                    <td>{{ $alum['email'] ?: 'N/A' }}</td>
                                    <td>{{ $alum['designation'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    @foreach ($developmentGeneticsLab as $member)
                        <div class="col wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item position-relative overflow-hidden group h-100">
                                <div class="member-image-container position-relative">
                                    <img class="img-fluid w-100 transition-all duration-300 group-hover:scale-110"
                                        src="{{ $member['image'] }}" alt="{{ $member['name'] }}">

                                    <div
                                        class="team-social absolute inset-0 bg-black bg-opacity-50 
                                flex items-center justify-center opacity-0 group-hover:opacity-100 
                                transition-opacity duration-300">

                                        <a class="btn btn-square btn-light mx-1"
                                            href="{{ $member['social']['twitter'] ?? '#' }}" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>

                                    </div>
                                </div>

                                <div class="text-center p-4" data-bs-toggle="modal"
                                    data-bs-target="#{{ $member['modal_id'] }}" style="cursor: pointer;">
                                    <h5 class="mb-1">{{ $member['name'] }}</h5>
                                    <span>{{ $member['role'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Modals for Each Member -->
        @foreach ($developmentGeneticsLab as $member)
            <div class="modal fade" id="{{ $member['modal_id'] }}" tabindex="-1"
                aria-labelledby="dglModalLabel-{{ $member['name'] }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="dglModalLabel-{{ $member['name'] }}">
                                {{ $member['name'] }} - {{ $member['role'] }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ $member['image'] }}" class="img-fluid rounded"
                                        alt="{{ $member['name'] }}">
                                </div>
                                <div class="col-md-8">
                                    <h4>About Me</h4>
                                    <p>{{ $member['bio'] }}</p>
                                    <div class="contact-info mt-3">
                                        <strong>X Username:</strong> {{ $member['x_username'] }} <br>
                                        <strong>Email:</strong> {{ $member['email'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Get the button and table section
                const toggleBtn = document.getElementById("toggleAlumniBtn");
                const tableSection = document.getElementById("alumni-table-section");

                // Add the click event directly to the button
                if (toggleBtn && tableSection) {
                    toggleBtn.addEventListener("click", function() {
                        // Toggle visibility
                        if (tableSection.style.display === "none") {
                            tableSection.style.display = "block";
                            toggleBtn.textContent = "Hide Alumni";
                        } else {
                            tableSection.style.display = "none";
                            toggleBtn.textContent = "Show Alumni";
                        }
                    });
                }
            });
        </script>


        <!-- Online Resources Tab -->
        <div class="tab-pane fade" id="online-resources" role="tabpanel" aria-labelledby="online-resources-tab">
            <div class="container py-5">
                <table class="table table-hover text-dark">
                    <thead class="table-dark">
                        <tr>
                            <th>Resource Name</th>
                            <th>Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Online Resources entries will be added here -->
                        @foreach ($OnlineResources as $resource)
                            <tr class="text-black">
                                <td>{{ $resource['name'] }}</td>
                                <td><a href="{{ $resource['link'] }}" target="_blank">{{ $resource['link'] }}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tab Content End -->
    </div>
    </div>


</x-app-layout>
