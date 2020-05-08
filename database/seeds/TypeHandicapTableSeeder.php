<?php

use Illuminate\Database\Seeder;
use App\TypeHandicap;

class TypeHandicapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
            TypeHandicap::create([
                'libelle'=>'Handicap auditif',
                'description'=>"Le handicap auditif atteint des personnes atteintes de surdité, qui est un état pathologique caractérisé par une perte partielle ou totale du sens de l’ouïe. Ce handicap peut être présent dès la naissance ou acquis durant la vie de la personne. Les causes de la surdité peuvent être génétiques, virales ou parasitaires (pendant la grossesse), dues à des maladies comme la méningite, otoxicité médicamenteuse, accidentelles ou par un traumatisme sonore.Les déficiences auditives ne sont pas visibles, mais souvent stigmatisantes. Les aides techniques, même très perfectionnées, ne font pas disparaître le handicap, et sont utiles lorsqu’il existe une zone d’audition résiduelle suffisante chez la personne sourde. Plus de 4 millions de personnes sont atteintes de handicap auditif en France, dont près de 300 000 sont malentendantes profondes à sourdes. Focus : Oralisme vs. Langue des Signes Française (LSF) La langue des signes française (LSF) est une langue visuelle qui est la langue des signes utilisée par les sourds français et certains malentendants pour traduire leur pensée. La LSF est une langue à part entière et un des piliers de l’identité de la culture sourde. La LSF est signée par 100 000 à 200 000 personnes sourdes.L’oralisation est la capacité de la personne sourde à s’exprimer verbalement. Elle est souvent associée au langage parlé complété (LPC). Elle sert à communiquer avec les entendants.En France, l’oralisme est un courant qui prend le pas sur l’enseignement de la LSF (langue des signes française) au XIXe siècle. Après le congrès de Milan en 1880, et ceci durant 100 ans, ce fut la seule méthode employée dans les écoles afin de mieux intégrer les sourds au monde des entendants français."]);
            
             TypeHandicap::create([
                    'libelle'=>'Handicap visuel',
                    'description'=>"Les personnes en situation de handicap visuel sont atteintes de cécité (personnes aveugles), ou de malvoyance. Les causes peuvent être des maladies comme la cataracte (opacification d’une lentille interne) ou le glaucome (touchant le nerf optique), ou héréditaires.La plupart des personnes atteintes de la cécité développent plus profondément leurs autres sens comme celui du toucher par exemple. Le toucher qui va servir pour l’apprentissage et la maîtrise de l’alphabet Braille. Cet alphabet permet à ces personnes de déchiffrer les lettres, les chiffres… grâce à l’assemblage de points en relief. Il existe aussi d’autres sortes d’aides mises en place pour les personnes aveugles. La plus souvent utilisée est la canne blanche, ou le chien-guide. On estime le nombre de malvoyants en France à 1,7 millions, dont plus de 300 000 malvoyants profonds à aveugles. "]);
             
             TypeHandicap::create([
                        'libelle'=>'Autisme et Troubles Envahissants du Développement',
                        'description'=>"L’autisme est un trouble envahissant du développement (TED) caractérisé par un développement anormal ou déficient, manifesté avant l’âge de trois ans, avec une perturbation caractéristique du fonctionnement dans chacun des trois domaines suivants : interactions sociales réciproques, communication, comportements au caractère restreint et répétitif.Les troubles du spectre autistique (TSA) comprennent ainsi trois grandes catégories de diagnostics :• le trouble autistique en tant que diagnostic clinique distinct (parfois encore appelé autisme infantile, voire autisme de Kanner) ;• le syndrome d’Asperger, avec des délais marqués dans le développement cognitif et du langage mais des îlots de compétences. Ces compétences peuvent impressionner grandement et conduire parfois à la réussite professionnelle en mathématiques, physique, informatique etc ;• le diagnostic de trouble envahissant du développement non spécifié, lorsque tous les critères diagnostics du syndrome d’Asperger ou de l’autisme ne sont pas observés.Les caractéristiques de l’autisme sont variables. Les manifestations peuvent aller du mutisme partiel ou total à l’hyperactivité à l’hypoactivité, de l’agressivité à l’automutilation, voire de l’insensibilité à la douleur. Ces syndromes peuvent aussi être associés à des mouvements stéréotypés, des problèmes métaboliques et des difficultés à s’adapter aux changements de l’environnement. Les signes apparaissent généralement avant l’âge de trois ans. Les origines de cette pathologie et les mécanismes biologiques, génétiques, psychiatriques pouvant être responsables de l’autisme sont à ce jour encore méconnus. La grande diversité des troubles du spectre autistique demande des accompagnements variés. Toutes auront besoin d’un diagnostic et d’une évaluation, d’un accompagnement éducatif, rééducatif et social et/ou de soins médicaux spécialisés. Selon les différentes sources, le nombre d’autistes en France est estimé entre 60 000 et 120 000 personnes, avec une proportion de 3 ou 4 garçons pour une fille. Plusieurs méthodes d’accompagnement parfois controversées existent. Le MAKATON (aide à la communication et au langage), la méthode TEACCH (structuration de l’espace et du temps), la méthode ABA (structuration du comportement) et le PECS (communication par l’échange d’images) sont les plus courantes. "]);
    
              TypeHandicap::create([
                            'libelle'=>'Handicap Psychique',
                            'description'=>"La notion de handicap psychique a été retenue dans la loi du 11 février 2005 dite loi sur le handicap. Il se distingue du handicap mental de la façon suivante : le handicap psychique, secondaire à la maladie psychique, reste de cause inconnue à ce jour (alors que le handicap mental a des causes identifiables). Il apparaît souvent à l’âge adulte alors que le handicap mental apparaît lui à la naissance. Les capacités intellectuelles sont indemnes et peuvent évoluer de manière satisfaisante. C’est la possibilité de les utiliser qui est déficiente. La symptomatologie est instable, imprévisible. La prise de médicaments est souvent indispensable, associée à des techniques de soins visant à pallier, voire à réadapter, les capacités à penser et à décider. Le handicap psychique est la conséquence de diverses maladies :• les psychoses, et en particulier la schizophrénie (désorganisation ou dissociation -perte de l’unité psychique-, délire paranoïde -perception éronnée de la réalité-, symptômes déficitaires ou négatifs avec une diminution des réactions émotionnelles et apparition de troubles cognitifs) ;• le trouble bipolaire (trouble maniaco-dépressif) ;• les troubles graves de la personnalité (personnalité « borderline », par exemple) ;• certains troubles névrotiques graves comme les TOC (troubles obsessionnels compulsifs). "]);
                           
                TypeHandicap::create([
                                'libelle'=>'Plurihandicap',
                                'description'=>" Le plurihandicap est l’association d’atteintes motrices et/ou sensorielles de même degré, ce qui ne permet pas de déceler l’une plutôt que l’autre en déficience principale. La surdi-cécité (sourds-aveugles) tient une place particulière dans ce type de handicap. "]);
        
                TypeHandicap::create([
                               'libelle'=>'Polyhandicap',
                                'description'=>"  Le polyhandicap est un handicap grave à expressions multiples, dans lequel une déficience mentale sévère et une déficience motrice sont associées à la même cause, entraînant une restriction extrême de l’autonomie. Souvent les personnes polyhandicapées souffrent aussi d’insuffisance respiratoire chronique, de troubles nutritionnels, de troubles de l’élimination et de fragilité cutanée. Les personnes polyhandicapées ne peuvent rien faire par elles-mêmes et ont besoin de l’assistance constante d’une tierce personne pour tous les actes de la vie quotidienne. Elles ne marchent pas, ne parlent pas et donc ne communiquent pas. Elles sont sujettes à des crises d’épilepsie (dans la moitié des cas) ; parfois, elles ne peuvent pas avaler les aliments et doivent être alimentées par sonde gastrique. Cependant, les personnes polyhandicapées comprennent sûrement beaucoup plus de choses qu’elles ne peuvent en dire et il n’est pas toujours facile de saisir ce qu’elles voudraient exprimer. Le polyhandicap est dû à différentes causes : 30% de causes inconnues, 15% de causes périnatales (dont un nombre très réduit de souffrances obstétricales par rapport aux souffrances fœtales ou grandes prématurités – dysmaturités), 5% de causes postnatales (traumatismes, arrêts cardiaques), et 50% de causes prénatales (malformations, accidents vasculaires cérébraux prénataux, embryopathies dont le CMV (cytomégalovirus) et le HIV (virus du SIDA)). "]);
                                
                TypeHandicap::create([
                                'libelle'=>'Traumatismes crâniens',
                                'description'=>"   La notion de traumatisme crânien ou traumatisme crânio-cérébral (TCC) couvre les traumatismes du neurocrâne (partie haute du crâne contenant le cerveau) et du cerveau. Les séquelles immédiates et à distance des traumatismes cranio-cérébraux sont souvent la conséquence des lésions engendrées sur le système nerveux central (cerveau et moëlle épinière cervicale). Elles grèvent l’avenir des victimes et de leurs familles et leur coût social et financier est élevé.Sur le plan clinique il existe trois catégories principales de traumatismes crâniens : légers (sans perte de connaissance et sans fracture de crâne), moyens (avec une perte de connaissance initiale excédant quelques minutes ou avec fractures de crâne) et graves (avec coma d’emblée — sans ou avec fractures du crâne associées). Les traumatismes crâniens sont la principale cause de mortalité et de handicap sévère avant 45 ans. Les causes principales sont : les accidents de la voie publique (environ 50 %), les accidents sportifs, les accidents de travail, les accidents domestiques, les agressions. "]);
     
                TypeHandicap::create([
                                    'libelle'=>'Maladies dégénératives',
                                    'description'=>"Les maladies dégénératives sont des maladies souvent génétiques au cours desquelles un ou plusieurs organes sont progressivement dégradés. Les causes peuvent être l’accumulation de produits biologiques ou de toxines aussi bien que l’absence prolongée d’une substance biologique qui entraîne alors la dégénérescence progressive des organes concernés. Cette caractéristique en fait souvent des maladies particulièrement difficiles pour le patient et son entourage parce que les symptômes évoluent lentement mais sûrement vers un handicap important. Traitées à temps, les maladies dégénératives peuvent être réduites, mais non guéries. Quelques exemples :MyopathieMucovicidoseMaladie d’AlzheimerSclérose en plaques  "]);
                 TypeHandicap::create([
                                     'libelle'=>'Les troubles dys',
                                        'description'=>"On regroupe sous “troubles Dys” les troubles cognitifs spécifiques et les troubles des apprentissages qu’ils induisent. Les troubles cognitifs spécifiques apparaissent au cours du développement de l’enfant, avant ou lors des premiers apprentissages, et persistent à l’âge adulte. Ils ont des répercussions sur la vie scolaire, professionnelle et sociale, et peuvent provoquer un déséquilibre psycho-affectif. Ils sont innés pour la plupart.On regroupe ces troubles en 6 catégories :• Les troubles spécifiques de l’acquisition du langage écrit, communément appelés dyslexieet dysorthographie ;• Les troubles spécifiques du développement du langage oral, communément appelés dysphasie ;• Les troubles spécifiques du développement moteur et/ou des fonctions visuo-spatiales,communément appelé dyspraxie ;• Les troubles spécifiques du développement des processus attentionnels et/ou des fonctions exécutives, communément appelés troubles d’attention avec ou sans hyperactivité ;• Les troubles spécifiques du développement des processus mnésiques ;• Les troubles spécifiques des activités numériques, communément appelés dyscalculie"]);
    
    

    }
}
