<?php

use Illuminate\Database\Seeder;
use App\Repositories\EmployeeRepository;
use App\Repositories\DepartmentRepository;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param EmployeeRepository $employeeRepo
     * @param DepartmentRepository $departmentRepo
     * @return void
     */
    public function run(EmployeeRepository $employeeRepo, DepartmentRepository $departmentRepo)
    {
        $employees = [
            [
                'first_name'	=>	'Salina',
                'last_name'	=>	'Keithley',
                'department'	=>	'Sales',
                'profile'	=>	'Lorem ipsum dolor sit amet, usu ut feugiat propriae vituperatoribus. No nec numquam appellantur, qui populo persius offendit eu, ne sed solum fugit. Te his feugiat omittantur, at eam noster voluptaria inciderint. At doming eirmod labitur usu, eam option vidisse diceret te. Etiam inimicus an vix, nostro maiestatis vix et. Vel ut quis error causae.'
            ],

            [
                'first_name'	=>	'Brianne',
                'last_name'	=>	'Farago',
                'department'	=>	'Sales',
                'profile'	=>	'Nec ex augue labore, id possit omittam ullamcorper his. No vix ridens scaevola, ut laboramus argumentum vim. Ut singulis periculis scriptorem vix, volutpat ullamcorper sit te. Ex quod partem per. Eius deleniti at sit, regione phaedrum eu qui, at vocent pericula mea. Sale pertinacia ad vis, volumus omittam an mel, constituto mediocritatem sea ei.'
            ],

            [
                'first_name'	=>	'Denyse',
                'last_name'	=>	'Polich',
                'department'	=>	'Sales',
                'profile'	=>	'Cum ei salutatus honestatis, enim minim eirmod mel ei. His nostro inermis persecuti eu. Est id cetero contentiones, ius et veri meis. Id ipsum definiebas nam, epicurei pertinax ad mea, vim reque placerat ut.'
            ],

            [
                'first_name'	=>	'Amada',
                'last_name'	=>	'Afanador',
                'department'	=>	'Sales',
                'profile'	=>	'Fabellas euripidis pro no. Nam legere eloquentiam ei, mei quod fabulas pertinacia at. Duo no latine vidisse pericula, illud animal accusam mea no. Mazim sadipscing ad vis, pro et graeci intellegam. Id vim utinam docendi legendos, has in soleat suavitate. Mei ne unum omnium aliquam.'
            ],

            [
                'first_name'	=>	'Jason',
                'last_name'	=>	'Lamotte',
                'department'	=>	'Sales',
                'profile'	=>	'Nec ex augue labore, id possit omittam ullamcorper his. No vix ridens scaevola, ut laboramus argumentum vim. Ut singulis periculis scriptorem vix, volutpat ullamcorper sit te. Ex quod partem per. Eius deleniti at sit, regione phaedrum eu qui, at vocent pericula mea. Sale pertinacia ad vis, volumus omittam an mel, constituto mediocritatem sea ei.'
            ],

            [
                'first_name'	=>	'Sara',
                'last_name'	=>	'Jefferson',
                'department'	=>	'Sales',
                'profile'	=>	'Idque doming percipitur eu mei. Everti consequat ei ius. Ut mel alia eirmod eripuit, ex vel omnis voluptatibus, omittam mentitum maluisset et eum. An quo delenit legimus menandri, pri ad brute ubique noluisse. Cu mei quot interpretaris. Mel cu prima soluta.'
            ],

            [
                'first_name'	=>	'Aretha',
                'last_name'	=>	'Hagopian',
                'department'	=>	'Sales',
                'profile'	=>	'Pro dicta sonet definitionem te. Et munere malorum nam, pri id cibo illud, ius no vituperata ullamcorper. Lorem scribentur liberavisse quo ei, elit consetetur id usu. Suas adipiscing an mel, ea per graecis postulant, ad modus dicit elaboraret usu. Sed eirmod iriure patrioque ei. Et prompta accusata aliquando sed, ferri summo iudicabit ut his.'
            ],

            [
                'first_name'	=>	'Molly',
                'last_name'	=>	'Angelos',
                'department'	=>	'Sales',
                'profile'	=>	'Idque doming percipitur eu mei. Everti consequat ei ius. Ut mel alia eirmod eripuit, ex vel omnis voluptatibus, omittam mentitum maluisset et eum. An quo delenit legimus menandri, pri ad brute ubique noluisse. Cu mei quot interpretaris. Mel cu prima soluta.'
            ],

            [
                'first_name'	=>	'Meta',
                'last_name'	=>	'Thorpe',
                'department'	=>	'Accounts',
                'profile'	=>	'Ut per adhuc mentitum voluptatum, quas mollis inimicus ne cum. Nec at animal fabellas, at eum mutat hendrerit. Et vim petentium referrentur, tempor abhorreant sed no. Nulla quodsi nec ei. Et apeirian perfecto pri, ad nulla vituperata usu. Voluptua lucilius repudiandae ex nam, alia brute convenire nec eu.'
            ],

            [
                'first_name'	=>	'Vernetta',
                'last_name'	=>	'Pence',
                'department'	=>	'Accounts',
                'profile'	=>	'Vel at vidit dicit, legere persecuti vix ne. Cum movet scaevola ut, nemore equidem democritum quo te. An idque ubique facilis vix. Te veri oblique pertinax has.'
            ],

            [
                'first_name'	=>	'Gerry',
                'last_name'	=>	'Darville',
                'department'	=>	'Accounts',
                'profile'	=>	'Eu lorem postea eleifend usu. Elit inani dignissim cu pri. Te viderer eruditi forensibus eam, mel vidit mandamus te. Quis omnes consequuntur his ei, habeo exerci altera te mei, probo aperiri habemus et quo. Eius tritani dissentias ea pri, ex mundi instructior sed, eum eruditi meliore te. Iudicabit accommodare ea mei, te harum suscipit platonem sea.'
            ],

            [
                'first_name'	=>	'Jack',
                'last_name'	=>	'Joyce',
                'department'	=>	'IT Support',
                'profile'	=>	'Nec ex augue labore, id possit omittam ullamcorper his. No vix ridens scaevola, ut laboramus argumentum vim. Ut singulis periculis scriptorem vix, volutpat ullamcorper sit te. Ex quod partem per. Eius deleniti at sit, regione phaedrum eu qui, at vocent pericula mea. Sale pertinacia ad vis, volumus omittam an mel, constituto mediocritatem sea ei.'
            ],

            [
                'first_name'	=>	'Hermila',
                'last_name'	=>	'Buntin',
                'department'	=>	'IT Support',
                'profile'	=>	'Illum consetetur per ea. Vel an amet lorem, ex eos aperiri dissentiet liberavisse. Viris postea eu pri, nam falli officiis no. Cu duis definiebas ullamcorper mea. Ad duo feugait consulatu, et vim iudico lobortis. Ne civibus constituam scripserit has, ea affert doctus est. Harum everti facilisi vim id.'
            ],

            [
                'first_name'	=>	'Charlsie',
                'last_name'	=>	'Filice',
                'department'	=>	'IT Support',
                'profile'	=>	'Fabellas euripidis pro no. Nam legere eloquentiam ei, mei quod fabulas pertinacia at. Duo no latine vidisse pericula, illud animal accusam mea no. Mazim sadipscing ad vis, pro et graeci intellegam. Id vim utinam docendi legendos, has in soleat suavitate. Mei ne unum omnium aliquam.'
            ],

            [
                'first_name'	=>	'Vivienne',
                'last_name'	=>	'Chambless',
                'department'	=>	'IT Support',
                'profile'	=>	'No summo evertitur has. Ut simul scripserit usu. Cum id atomorum suscipiantur, vis eu tation aliquam officiis, nam ne solum singulis interpretaris. Has ne graeci dictas partiendo, has tation putant sanctus et, per ne melius qualisque. Mel vitae mandamus no, est an omnium accusam. In ferri atqui recusabo cum.'
            ],

            [
                'first_name'	=>	'Mauro',
                'last_name'	=>	'Noguera',
                'department'	=>	'IT Support',
                'profile'	=>	'Nec ex augue labore, id possit omittam ullamcorper his. No vix ridens scaevola, ut laboramus argumentum vim. Ut singulis periculis scriptorem vix, volutpat ullamcorper sit te. Ex quod partem per. Eius deleniti at sit, regione phaedrum eu qui, at vocent pericula mea. Sale pertinacia ad vis, volumus omittam an mel, constituto mediocritatem sea ei.'
            ],

            [
                'first_name'	=>	'Hyman',
                'last_name'	=>	'Gagne',
                'department'	=>	'IT Support',
                'profile'	=>	'Idque doming percipitur eu mei. Everti consequat ei ius. Ut mel alia eirmod eripuit, ex vel omnis voluptatibus, omittam mentitum maluisset et eum. An quo delenit legimus menandri, pri ad brute ubique noluisse. Cu mei quot interpretaris. Mel cu prima soluta.'
            ],

            [
                'first_name'	=>	'Melodee',
                'last_name'	=>	'Siemens',
                'department'	=>	'Marketing',
                'profile'	=>	'Vel at vidit dicit, legere persecuti vix ne. Cum movet scaevola ut, nemore equidem democritum quo te. An idque ubique facilis vix. Te veri oblique pertinax has.'
            ],

            [
                'first_name'	=>	'Santa',
                'last_name'	=>	'Partridge',
                'department'	=>	'Marketing',
                'profile'	=>	'Vix ad melius liberavisse disputationi. Ea his quod putent, vel ea verear adolescens. Has quod docendi deterruisset ne, sumo luptatum an cum, pri et accusata interesset. Aperiri fierent instructior ad his, mei eu ceteros mnesarchum. At mucius complectitur pro. Tamquam recteque voluptaria ut vel, ad his dolore audiam.'
            ],

            [
                'first_name'	=>	'Randal',
                'last_name'	=>	'Duffie',
                'department'	=>	'Marketing',
                'profile'	=>	'Vel at vidit dicit, legere persecuti vix ne. Cum movet scaevola ut, nemore equidem democritum quo te. An idque ubique facilis vix. Te veri oblique pertinax has.'
            ],

            [
                'first_name'	=>	'Alison',
                'last_name'	=>	'Veazey',
                'department'	=>	'Marketing',
                'profile'	=>	'Admodum ponderum sed ea, persecuti cotidieque ea vel. In sea placerat petentium aliquando, ullum appetere placerat an eos. Eos ad dicant oblique erroribus. Cu duis debet mea, idque mundi instructior in sea, te iriure dissentiunt sit.'
            ],

            [
                'first_name'	=>	'Elva',
                'last_name'	=>	'Korn',
                'department'	=>	'Marketing',
                'profile'	=>	'Vix ad melius liberavisse disputationi. Ea his quod putent, vel ea verear adolescens. Has quod docendi deterruisset ne, sumo luptatum an cum, pri et accusata interesset. Aperiri fierent instructior ad his, mei eu ceteros mnesarchum. At mucius complectitur pro. Tamquam recteque voluptaria ut vel, ad his dolore audiam.'
            ],

            [
                'first_name'	=>	'Faviola',
                'last_name'	=>	'Horrigan',
                'department'	=>	'Research',
                'profile'	=>	'Vel at vidit dicit, legere persecuti vix ne. Cum movet scaevola ut, nemore equidem democritum quo te. An idque ubique facilis vix. Te veri oblique pertinax has.'
            ],

            [
                'first_name'	=>	'Tynisha',
                'last_name'	=>	'Weinstock',
                'department'	=>	'Research',
                'profile'	=>	'Nisl choro utinam per ne, munere ridens oblique no pri. Inani atomorum reformidans mel ne, nec ne equidem philosophia. Eius movet audiam eos cu, vel te quot duis tritani. Id alterum copiosae vix. Mea in diceret minimum tacimates. Sea eu inani commune tractatos.'
            ],

            [
                'first_name'	=>	'Jessenia',
                'last_name'	=>	'Gribble',
                'department'	=>	'Research',
                'profile'	=>	'Fabellas euripidis pro no. Nam legere eloquentiam ei, mei quod fabulas pertinacia at. Duo no latine vidisse pericula, illud animal accusam mea no. Mazim sadipscing ad vis, pro et graeci intellegam. Id vim utinam docendi legendos, has in soleat suavitate. Mei ne unum omnium aliquam.'
            ],

            [
                'first_name'	=>	'Benton',
                'last_name'	=>	'Light',
                'department'	=>	'Research',
                'profile'	=>	'Has cu duis tibique probatus, his et aperiri phaedrum scriptorem, summo platonem ut mea. Eam ne nonumes eligendi. Libris minimum in pro, usu modo labitur diceret ad. No sed option ancillae, et periculis tincidunt ius.'
            ],

            [
                'first_name'	=>	'Piper',
                'last_name'	=>	'Mundo',
                'department'	=>	'Research',
                'profile'	=>	'Mea tota inani et, ad nam perfecto consulatu, pri semper fabulas officiis ut. Audiam admodum nominati eum eu, eam omnis debet suavitate ut, usu docendi recteque posidonium et. Te ius quaestio appellantur, nec in vide dicam scripta, has ex reque accumsan voluptatibus. Atqui explicari usu id. Ad nec quando dictas deleniti, nam amet utamur tincidunt ex, tale error nec id. Modus quidam veritus cu duo.'
            ],

            [
                'first_name'	=>	'Jenifer',
                'last_name'	=>	'Groth',
                'department'	=>	'Engineering',
                'profile'	=>	'Idque doming percipitur eu mei. Everti consequat ei ius. Ut mel alia eirmod eripuit, ex vel omnis voluptatibus, omittam mentitum maluisset et eum. An quo delenit legimus menandri, pri ad brute ubique noluisse. Cu mei quot interpretaris. Mel cu prima soluta.'
            ],

            [
                'first_name'	=>	'Dominga',
                'last_name'	=>	'Maharaj',
                'department'	=>	'Engineering',
                'profile'	=>	'Nec an soleat definitionem, usu lobortis conceptam et. Qualisque expetendis pri ex. Te mea solet epicuri convenire, etiam falli dicam eum no. Falli torquatos id has, duo id timeam persequeris. Pri ne laudem dissentias. Essent mollis pri et, ius elitr primis efficiantur ea.'
            ],

            [
                'first_name'	=>	'Rudolf',
                'last_name'	=>	'Alexander',
                'department'	=>	'Engineering',
                'profile'	=>	'Idque doming percipitur eu mei. Everti consequat ei ius. Ut mel alia eirmod eripuit, ex vel omnis voluptatibus, omittam mentitum maluisset et eum. An quo delenit legimus menandri, pri ad brute ubique noluisse. Cu mei quot interpretaris. Mel cu prima soluta.'
            ],

            [
                'first_name'	=>	'Ilene',
                'last_name'	=>	'Tyner',
                'department'	=>	'Engineering',
                'profile'	=>	'Atqui euripidis eos ad, in est meliore nominavi indoctum. Ignota quaeque fierent quo ei, ad ius audire habemus. Odio facer te mei, nec no eruditi petentium disputando. Et his probo quaeque splendide. Duo ad semper scripta commune, justo populo no mea, ei vero falli quo.'
            ],

            [
                'first_name'	=>	'Marvel',
                'last_name'	=>	'Overby',
                'department'	=>	'Engineering',
                'profile'	=>	'Vix ad melius liberavisse disputationi. Ea his quod putent, vel ea verear adolescens. Has quod docendi deterruisset ne, sumo luptatum an cum, pri et accusata interesset. Aperiri fierent instructior ad his, mei eu ceteros mnesarchum. At mucius complectitur pro. Tamquam recteque voluptaria ut vel, ad his dolore audiam.'
            ],

            [
                'first_name'	=>	'Shenita',
                'last_name'	=>	'Pouncey',
                'department'	=>	'Engineering',
                'profile'	=>	'Nisl choro utinam per ne, munere ridens oblique no pri. Inani atomorum reformidans mel ne, nec ne equidem philosophia. Eius movet audiam eos cu, vel te quot duis tritani. Id alterum copiosae vix. Mea in diceret minimum tacimates. Sea eu inani commune tractatos.'
            ],

            [
                'first_name'	=>	'Mikki',
                'last_name'	=>	'Laing',
                'department'	=>	'Engineering',
                'profile'	=>	'Has cu duis tibique probatus, his et aperiri phaedrum scriptorem, summo platonem ut mea. Eam ne nonumes eligendi. Libris minimum in pro, usu modo labitur diceret ad. No sed option ancillae, et periculis tincidunt ius.'
            ],

            [
                'first_name'	=>	'Josefa',
                'last_name'	=>	'Purcell',
                'department'	=>	'Engineering',
                'profile'	=>	'Has cu duis tibique probatus, his et aperiri phaedrum scriptorem, summo platonem ut mea. Eam ne nonumes eligendi. Libris minimum in pro, usu modo labitur diceret ad. No sed option ancillae, et periculis tincidunt ius.'
            ],

            [
                'first_name'	=>	'Gayle',
                'last_name'	=>	'Cash',
                'department'	=>	'Engineering',
                'profile'	=>	'Fabellas euripidis pro no. Nam legere eloquentiam ei, mei quod fabulas pertinacia at. Duo no latine vidisse pericula, illud animal accusam mea no. Mazim sadipscing ad vis, pro et graeci intellegam. Id vim utinam docendi legendos, has in soleat suavitate. Mei ne unum omnium aliquam.'
            ],

            [
                'first_name'	=>	'Mitzie',
                'last_name'	=>	'Cleek',
                'department'	=>	'Engineering',
                'profile'	=>	'Prompta labores no his. Vix tritani scaevola disputando et, vix dicat vulputate sadipscing ea. His mundi invidunt an, summo lucilius suavitate vis ut. Cu vidit munere repudiandae sea. Pro ad iusto graecis, ei vis epicuri intellegat.'
            ],

            [
                'first_name'	=>	'Walton',
                'last_name'	=>	'Andress',
                'department'	=>	'Engineering',
                'profile'	=>	'Nisl choro utinam per ne, munere ridens oblique no pri. Inani atomorum reformidans mel ne, nec ne equidem philosophia. Eius movet audiam eos cu, vel te quot duis tritani. Id alterum copiosae vix. Mea in diceret minimum tacimates. Sea eu inani commune tractatos.'
            ],

            [
                'first_name'	=>	'Cinthia',
                'last_name'	=>	'Rusher',
                'department'	=>	'Engineering',
                'profile'	=>	'Duo diam movet te, facer democritum ex ius. Dignissim consectetuer eam ne. No audire accusata lobortis duo, ei stet aeterno has, adhuc labores te sed. Mei in invenire efficiantur, prima malorum in eos, tale vero no pro. Suas corrumpit te pri, te cum tation mollis laoreet, at agam probatus sit. Case iusto euismod nam ex, vero nulla errem eu sea.'
            ],

            [
                'first_name'	=>	'Lois',
                'last_name'	=>	'Garner',
                'department'	=>	'Engineering',
                'profile'	=>	'Nisl choro utinam per ne, munere ridens oblique no pri. Inani atomorum reformidans mel ne, nec ne equidem philosophia. Eius movet audiam eos cu, vel te quot duis tritani. Id alterum copiosae vix. Mea in diceret minimum tacimates. Sea eu inani commune tractatos.'
            ],

            [
                'first_name'	=>	'Clay',
                'last_name'	=>	'Igoe',
                'department'	=>	'Engineering',
                'profile'	=>	'Nec ex augue labore, id possit omittam ullamcorper his. No vix ridens scaevola, ut laboramus argumentum vim. Ut singulis periculis scriptorem vix, volutpat ullamcorper sit te. Ex quod partem per. Eius deleniti at sit, regione phaedrum eu qui, at vocent pericula mea. Sale pertinacia ad vis, volumus omittam an mel, constituto mediocritatem sea ei.'
            ],

            [
                'first_name'	=>	'Dania',
                'last_name'	=>	'Corona',
                'department'	=>	'Legal',
                'profile'	=>	'Nisl choro utinam per ne, munere ridens oblique no pri. Inani atomorum reformidans mel ne, nec ne equidem philosophia. Eius movet audiam eos cu, vel te quot duis tritani. Id alterum copiosae vix. Mea in diceret minimum tacimates. Sea eu inani commune tractatos.'
            ],

            [
                'first_name'	=>	'Magali',
                'last_name'	=>	'Six',
                'department'	=>	'Legal',
                'profile'	=>	'Atqui euripidis eos ad, in est meliore nominavi indoctum. Ignota quaeque fierent quo ei, ad ius audire habemus. Odio facer te mei, nec no eruditi petentium disputando. Et his probo quaeque splendide. Duo ad semper scripta commune, justo populo no mea, ei vero falli quo.'
            ],

            [
                'first_name'	=>	'Milly',
                'last_name'	=>	'Caul',
                'department'	=>	'Legal',
                'profile'	=>	'Nisl choro utinam per ne, munere ridens oblique no pri. Inani atomorum reformidans mel ne, nec ne equidem philosophia. Eius movet audiam eos cu, vel te quot duis tritani. Id alterum copiosae vix. Mea in diceret minimum tacimates. Sea eu inani commune tractatos.'
            ],

            [
                'first_name'	=>	'Shirl',
                'last_name'	=>	'Ludwig',
                'department'	=>	'Legal',
                'profile'	=>	'Nec ex augue labore, id possit omittam ullamcorper his. No vix ridens scaevola, ut laboramus argumentum vim. Ut singulis periculis scriptorem vix, volutpat ullamcorper sit te. Ex quod partem per. Eius deleniti at sit, regione phaedrum eu qui, at vocent pericula mea. Sale pertinacia ad vis, volumus omittam an mel, constituto mediocritatem sea ei.'
            ],

            [
                'first_name'	=>	'Maude',
                'last_name'	=>	'Mcconville',
                'department'	=>	'Legal',
                'profile'	=>	'Atqui euripidis eos ad, in est meliore nominavi indoctum. Ignota quaeque fierent quo ei, ad ius audire habemus. Odio facer te mei, nec no eruditi petentium disputando. Et his probo quaeque splendide. Duo ad semper scripta commune, justo populo no mea, ei vero falli quo.'
            ],

            [
                'first_name'	=>	'Jesenia',
                'last_name'	=>	'Cardello',
                'department'	=>	'Human Resources',
                'profile'	=>	'Idque doming percipitur eu mei. Everti consequat ei ius. Ut mel alia eirmod eripuit, ex vel omnis voluptatibus, omittam mentitum maluisset et eum. An quo delenit legimus menandri, pri ad brute ubique noluisse. Cu mei quot interpretaris. Mel cu prima soluta.'
            ],

            [
                'first_name'	=>	'Myesha',
                'last_name'	=>	'Mulcahy',
                'department'	=>	'Human Resources',
                'profile'	=>	'Nec ex augue labore, id possit omittam ullamcorper his. No vix ridens scaevola, ut laboramus argumentum vim. Ut singulis periculis scriptorem vix, volutpat ullamcorper sit te. Ex quod partem per. Eius deleniti at sit, regione phaedrum eu qui, at vocent pericula mea. Sale pertinacia ad vis, volumus omittam an mel, constituto mediocritatem sea ei.'
            ],

            [
                'first_name'	=>	'Tanner',
                'last_name'	=>	'Alling',
                'department'	=>	'Human Resources',
                'profile'	=>	'Atqui euripidis eos ad, in est meliore nominavi indoctum. Ignota quaeque fierent quo ei, ad ius audire habemus. Odio facer te mei, nec no eruditi petentium disputando. Et his probo quaeque splendide. Duo ad semper scripta commune, justo populo no mea, ei vero falli quo.'
            ],

            [
                'first_name'	=>	'Kandice',
                'last_name'	=>	'Frenz',
                'department'	=>	'Human Resources',
                'profile'	=>	'Nisl choro utinam per ne, munere ridens oblique no pri. Inani atomorum reformidans mel ne, nec ne equidem philosophia. Eius movet audiam eos cu, vel te quot duis tritani. Id alterum copiosae vix. Mea in diceret minimum tacimates. Sea eu inani commune tractatos.'
            ],
        ];

        // loop each employee record
        foreach ($employees as $employee) {
            $department = $departmentRepo->search(['name' => $employee['department']])->first();

            // make sure that department exist
            if (! empty($department)) {
                $employee['department_id'] = $department->id;

                $employeeRepo->create($employee);
            }
        }
    }
}
