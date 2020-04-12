<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ChaptersTableSeeder extends Seeder
{

  const TABLE_NAME = 'chapters';
  const FIELD_NAME = 'name';
  const FIELD_SLUG = 'slug';
  const FIELD_NATURAL_ID = 'natural_id';
  const FIELD_SEASON = 'season';
  const FIELD_SUMMARY = 'summary';
  const FIELD_IMAGE_URL = 'image_url';
  const FIELD_VIDEO_URL = 'video_url';
  const FIELD_RELEASE_DATE = 'release_date';
  const FIELD_DURATION = 'duration';

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $chapters = array_merge(
      $this->getChapters(1),
      $this->getChapters(2),
      $this->getChapters(3),
      $this->getChapters(4),
      $this->getChapters(5),
    );

    foreach ($chapters as $chapter) {
      DB::table(static::TABLE_NAME)->insert([
        static::FIELD_NAME => $chapter[static::FIELD_NAME],
        static::FIELD_SLUG => $chapter[static::FIELD_SLUG],
        static::FIELD_NATURAL_ID => $chapter[static::FIELD_NATURAL_ID],
        static::FIELD_SEASON => $chapter[static::FIELD_SEASON],
        static::FIELD_SUMMARY => $chapter[static::FIELD_SUMMARY],
        static::FIELD_IMAGE_URL => $chapter[static::FIELD_IMAGE_URL],
        static::FIELD_VIDEO_URL => $chapter[static::FIELD_VIDEO_URL],
        static::FIELD_RELEASE_DATE => isset($chapter[static::FIELD_RELEASE_DATE]) ? $chapter[static::FIELD_RELEASE_DATE] : null,
        static::FIELD_DURATION => isset($chapter[static::FIELD_DURATION]) ? $chapter[static::FIELD_DURATION] : null,
      ]);
    }
  }

  public function getChapters($season)
  {
    if ($season === 1) $funcName = 'getFirstSeasonChapters';
    if ($season === 2) $funcName = 'getSecondSeasonChapters';
    if ($season === 3) $funcName = 'getThirdSeasonChapters';
    if ($season === 4) $funcName = 'getFourthSeasonChapters';
    if ($season === 5) $funcName = 'getFifthSeasonChapters';

    return $this->$funcName();
  }

  public function getFirstSeasonChapters()
  {
    return [
      [
        static::FIELD_NAME => 'Érase una mudanza',
        static::FIELD_SLUG => '1x01-erase-una-mudanza',
        static::FIELD_NATURAL_ID => '1x01',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'Roberto y Lucía, una pareja joven, se está mudando ilusionada a un edificio de clase media de una gran ciudad. En su primer día nada les sale como habían pensado, empezando cuando no encuentran al portero para que les dé la llave de su piso y terminando cuando a Roberto se le cierra la puerta de la casa vestido únicamente con una toalla y habiéndose dejado el grifo de la bañera abierto, lo que provoca humedades en casa de sus vecinos de abajo.
          Por otra parte, Marisa, Vicenta y Concha, tres jubiladas que juegan todos los sábados a las cartas, se hacen por casualidad con las llaves de los vecinos del 1ºB, dos chicos que se han marchado de fin de semana. Deciden salir de dudas sobre si son homosexuales y utilizan las llaves para colarse en el Piso. En medio de la investigación rompen algunos objetos accidentalmente y llegan a la conclusión de que lo mejor es simular un robo… Pero los chicos vuelven antes de tiempo y sorprenden a las señoras.
          Por último, Alicia y Belén, al ser sábado por la noche, se disponen a salir, pero se quedan encerradas en el ascensor con el portero, el único que sabe cómo hacerlo funcionar de nuevo, osea, que va para largo…',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x01.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/ZHROGEt6aTo',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '09', '07'),
        static::FIELD_DURATION => 50,
      ],
      [
        static::FIELD_NAME => 'Érase una reforma',
        static::FIELD_SLUG => '1x02-erase-una-reforma',
        static::FIELD_NATURAL_ID => '1x02',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'Roberto y Lucía ya están instalados en el edificio y se disponen a hacer unas reformas en el piso. Los ruidos que provocan los obreros molestan a todos los vecinos, que deciden poner una queja formal ante Juan, el Presidente. Cuando Juan trata de parar las obras, Lucía amenaza con denunciar a la comunidad por la anomalías que han venido observando esos días.
          Se convoca una reunión extraordinaria de vecinos y Lucía decide presentarse como aspirante a la presidencia, lo que provoca una depresión en Juan. Alicia se ha fijado en Fernando y trata conquistarle. Como es la primera vez que un chico no le hace caso, cree haberse enamorado de él, lo que provoca Celos a Mauri, aunque lo que Alicia no sabe es que es gay.
          Por último, Vicenta y Marisa sufren un robo en su casa, así que deciden instalar una alarma. No consiguen comprender su funcionamiento y salta todas las noches sin motivo, para desesperación del resto de vecinos.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x02.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/myODyGnGUM8',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '09', '14'),
        static::FIELD_DURATION => 49,
      ], [
        static::FIELD_NAME => 'Érase el reciclaje',
        static::FIELD_SLUG => '1x03-erase-el-reciclaje',
        static::FIELD_NATURAL_ID => '1x03',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'Ante las presiones de los vecinos, Juan termina renunciando a su cargo como Presidente de la Comunidad, por lo que automáticamente pasa a ejercer Lucía. En sus primeros días como nueva Presidenta descubre que todo es un desastre y que para arreglar las cosas habría que subir la cuota mensual, algo que no hace ninguna gracia a los vecinos, que empiezan a pensar que Lucía les quiere robar.
          El ayuntamiento inicia una campaña de reciclaje en el barrio y pide a los vecinos que utilicen los diferentes cubos para separar las basuras. Cuando esto llega al Edificio, se montan un lío y no consiguen ponerse de acuerdo sobre nada. Por último, Doña Concha está decidida a echar a Alicia y a Belén del piso y empieza a enseñarlo a posibles Compradores.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x03.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/6fWIkTItWgo',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '09', '21'),
        static::FIELD_DURATION => 53,
      ], [
        static::FIELD_NAME => 'Érase un rumor',
        static::FIELD_SLUG => '1x04-erase-un-rumor',
        static::FIELD_NATURAL_ID => '1x04',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'La Comunidad convive con la rumorología: los vecinos sospechan que Alicia y Belén son prostitutas. Esto provoca diversas reacciones en el vecindario, que se moviliza en masa para comprobar si es cierto.
          Asimismo, Roberto recibe la visita de una ex novia, Nuria, que se ha mudado al edificio para hacerle la vida imposible. Fernando también tiene visita, la de sus padres. El joven abogado intenta hacer pasar a Alicia por su novia para ocultarles que es gay.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x04.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/qt7gYFJLWxk',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '09', '28'),
        static::FIELD_DURATION => 60,
      ], [
        static::FIELD_NAME => 'Érase un niño',
        static::FIELD_SLUG => '1x05-erase-un-nino',
        static::FIELD_NATURAL_ID => '1x05',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'Un Bebé Abandonado aparece en el portal de la comunidad. Alguien lo ha dejado allí, provocando que algunos vecinos con vocación de madre se lo disputen. El sentimiento maternal aparece en los personajes más insospechados. Todos son ahora unas madrazas.
          Entre tanto maternalismo, Roberto empieza a descuidar peligrosamente su relación con Lucía. Roberto traba amistad con José Miguel a pesar de la diferencia de edad, descuidando su relación con su Novia. Por otra parte, el nuevo novio de Alicia se siente también muy atraído por Belén y no le importa mucho jugar a dos bandas.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x05.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/BL2grk6E6bg',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '10', '05'),
        static::FIELD_DURATION => 70,
      ], [
        static::FIELD_NAME => 'Érase un resbalón',
        static::FIELD_SLUG => '1x06-erase-un-resbalon',
        static::FIELD_NATURAL_ID => '1x06',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'Mauri se resbala y cae por la escalera del edificio y acaba con una pierna escayolada. Fernando habla con Juan Cuesta para que informe al seguro pero resulta que llevan sin pagarlo tres años. Los vecinos deciden enviar al padre de Emilio para que se haga pasar por el perito y que les den la indemnización que consideran justa: 187 euros. Fernando descubre el engaño y amenaza con denunciar a la comunidad, pero se presentan todos los vecinos pidiendo disculpas y acaba tranquilizándose.
          Por otra parte, Emilio se acuesta con Belén y termina por enterarse todo el edificio. Como no han usado protección, Emilio se cree que ha ido a pillarle para quedarse embarazada de él.
          Por último, Roberto y Lucía contratan a una asistenta que resulta ser una cotilla e informa a todos los vecinos de lo que pasa en la casa, incluyendo que Lucía tiene un retraso de varias semanas y puede estar embarazada.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x06.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/5N1yaHZ8iwY',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '10', '12'),
        static::FIELD_DURATION => 63,
      ], [
        static::FIELD_NAME => 'Érase una rata',
        static::FIELD_SLUG => '1x07-erase-una-rata',
        static::FIELD_NATURAL_ID => '1x07',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'Emilio y Juan descubren una rata en el portal y deciden cazarla sin decir nada a los vecinos para que no cunda el pánico. Se quedan dormidos esperando sorprenderla por la noche y cuando Juan llega a casa por la mañana, Paloma sospecha que su marido tiene una aventura. La caza de la rata se complica cada vez más y parece que los bichos se van multiplicando. Al final, deciden llamar a un desratizador… pero la empresa resulta ser una tapadera de una banda de delincuentes que se dedican a desvalijar casas.
          Por otra parte, Chema, un amigo de Roberto, se presenta en la casa de la pareja dispuesto a pasar unos días allí. No hace más que causar problemas hasta que Lucía no puede más y les echa a los dos de casa. Roberto vuelve con sus padres.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x07.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/QM04G_tEZr0',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '10', '19'),
        static::FIELD_DURATION => 58,
      ], [
        static::FIELD_NAME => 'Érase un indigente',
        static::FIELD_SLUG => '1x08-erase-un-indigente',
        static::FIELD_NATURAL_ID => '1x08',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'Un mendigo millonario revoluciona a los vecinos. Además, Roberto hará cualquier cosa para recuperar a Lucía.
          Vicenta está muy afectada por un libro que acaba de leer y decide invitar a comer a un pobre que encuentran en el portal. La cosa se le va de las manos y se forman auténticas colas de mendigos en el portal esperando recibir su ración de comida. Al final, resulta que uno de los pobres es en realidad un millonario al que busca su familia y todos los vecinos esperan cobrar la recompensa.
          Roberto vuelve a casa para intentar reconciliarse con Lucía pero se encuentra allí a Carlos, el ex novio de la chica. Vuelven a discutir y decide mudarse definitivamente. Emilio, Carlos y José Miguel quieren ayudarle a recuperar a Lucía pero no hacen mas que meterle en líos y empeorar las cosas. Como última medida, Roberto finge ante Lucía que ha empezado a salir con Natalia, la hija de Juan y Paloma.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x08.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/shjKQ3fqJrM',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '10', '26'),
        static::FIELD_DURATION => 64,
      ], [
        static::FIELD_NAME => 'Érase una de miedo',
        static::FIELD_SLUG => '1x09-erase-una-de-miedo',
        static::FIELD_NATURAL_ID => '1x09',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'Los vecinos, protagonistas de una película de miedo. Además, Roberto y Lucía comienzan con los preparativos de su boda.
          Marisa y Vicenta les cuentan a Paco, Emilio y José Miguel que hace muchos años el portero de la finca se volvió loco y prendió fuego a la casa. La familia que vivía en el ático murió pero nunca se encontraron los cadáveres.
          A Emilio no le hace gracia la historia y menos cuando Paco decide hacer una película de miedo con protagonismo de los vecinos pero sin que ellos lo sepan. Preparan una serie de trampas y todos ellos van cayendo presa del pánico, hasta que llaman a un exorcista para que se libre de los fantasmas. Al final, el exorcista resulta ser un okupa que se queda a vivir en el ático.
          Roberto y Lucía preparan la boda y la chica, por consejo de su padre, cree que lo mejor es hacer separación de bienes. Cuando Roberto se entera piensa que ella cree que sólo va a por su dinero.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x09.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/TVR-mRqSLCA',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '11', '02'),
        static::FIELD_DURATION => 57,
      ], [
        static::FIELD_NAME => 'Érase un dilema',
        static::FIELD_SLUG => '1x10-erase-un-dilema',
        static::FIELD_NATURAL_ID => '1x10',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'Emilio le pide a Belén que se vayan a vivir juntos.Los vecinos sufren una inspección técnica del edificio que les lleva a tener que plantearse hacer obras por valor de 24 millones de pesetas si no quieren que les desalojen.
          La única solución que encuentran es vender los pisos a un constructor y marcharse de allí. Ni Lucía ni Vicenta están dispuestas a ceder y el resto de los vecinos tratan de convencerles con todo tipo de artimañas.
          Al final descubren que el inspector del Ayuntamiento estaba comprado por el constructor.Emilio, temiendo que vendan el edificio, le pide a Belén que se vayan a vivir juntos. Ella se indigna y le dice que no son novios. Más tarde, se lo piensa pero Emilio ya a cambiado de opinión y corta con ella. Alicia decide hacer un último intento de acercamiento a Fernando y utiliza a Mauri para darle celos.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x10.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/QBpA5mHrl2M',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '11', '09'),
        static::FIELD_DURATION => 58,
      ], [
        static::FIELD_NAME => 'Érase un traspaso',
        static::FIELD_SLUG => '1x11-erase-un-traspaso',
        static::FIELD_NATURAL_ID => '1x11',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'El local del videoclub se traspasa y se alquila para poner una funeraria. Los vecinos no están dispuestos a ello y tratan de acabar con el nuevo negocio robando uno de los cuerpos. A punto de ser descubiertos, el muerto acaba en el cubo de la basura y todo apunta a que el camión se lo acabará llevando. Belén, que trabaja de recepcionista en la funeraria, habla con la viuda y la convence para que incinere el cuerpo. Entonces aparecen Emilio y Juan con el cadáver, que Armando había robado.
          Natalia se ha echado un nuevo novio y Paloma y Juan se empeñan en conocerle y se llevan una gran sorpresa al descubrir que es un hombre de 38 años. Tras el disgusto inicial, Paloma descubre que es millonario y cree que le puede ayudar a montar una cadena de tiendas de ropa.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x11.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/WtTb7MEG02s',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '11', '16'),
        static::FIELD_DURATION => 68,
      ], [
        static::FIELD_NAME => 'Érase un sustituto',
        static::FIELD_SLUG => '1x12-erase-un-sustituto',
        static::FIELD_NATURAL_ID => '1x12',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'A Emilio le da un ataque de apendicitis y tiene que ser ingresado, por lo que Juan busca un sustituto para hacerse cargo del edificio. El portero suplente resulta ser Amador, un atractivo y competente hombre del que se enamoran Concha, Vicenta y Marisa. Mauri encuentra una revista porno en un cajón de Fernando. Cuando le pregunta, éste le dice que es de Armando. A cambio de decir que es suya, Armando le pide la casa para quedar con una chica, pero Mauri llega y sorprende a la mujer con su albornoz.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x12.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/n0xaBSfvE_4',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '11', '23'),
        static::FIELD_DURATION => 61,
      ], [
        static::FIELD_NAME => 'Érase una fiesta',
        static::FIELD_SLUG => '1x13-erase-una-fiesta',
        static::FIELD_NATURAL_ID => '1x13',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'Lucía decide hacer una fiesta en su casa pese a las reticencias de los vecinos. Paloma revoluciona a su familia con la noticia de que está embarazada. Juan intenta hacerle entender que se trata de la menopausia. Belén, tras romper con Emilio, conoce a otro hombre, mientras Fernando y Mauri, en pleno proceso de separación, deciden vender su piso.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x13.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/_TL0_6d2-I8',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '11', '30'),
        static::FIELD_DURATION => 65,
      ], [
        static::FIELD_NAME => 'Érase una avería',
        static::FIELD_SLUG => '1x14-erase-una-averia',
        static::FIELD_NATURAL_ID => '1x14',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'La caldera del edificio sufre una avería que deja sin calefacción y sin agua caliente a todos los vecinos. Fernando tiene una cena con sus compañeros de trabajo y decide llevar a Luis y confesarles a todos que es gay. Belén sigue su relación con Carlos y Emilio está cada vez más celoso. Paco está sin dinero y con la ayuda de Emilio idea un plan para sacarse unos euros: colocar cámaras en el piso de Belén y Alicia para grabar unas imágenes y colgarlas en internet.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x14.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/8mmBtJTDUXM',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '12', '07'),
        static::FIELD_DURATION => 65,
      ], [
        static::FIELD_NAME => 'Érase un anillo',
        static::FIELD_SLUG => '1x15-erase-un-anillo',
        static::FIELD_NATURAL_ID => '1x15',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'Juan Cuesta, arrastrado por su espíritu navideño, decide organizar un intercambio de regalos entre los vecinos, para mejorar las relaciones dentro de la comunidad. Esta bonita iniciativa provocará más conflictos que beneficios. Carlos propone a Belén irse a vivir juntos. Alicia, angustiada por la idea de tener que pagar el alquiler sola, comienza a hacer de celestina para intentar reconciliar a Belén con Emilio. La hermana de Lucía llega para ayudarla con los preparativos de la boda y entra en conflicto con Roberto.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x15.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/f6kvnEVsvM8',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '12', '14'),
        static::FIELD_DURATION => 61,
      ], [
        static::FIELD_NAME => 'Érase una Nochebuena',
        static::FIELD_SLUG => '1x16-erase-una-nochebuena',
        static::FIELD_NATURAL_ID => '1x16',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'En el edificio, cada familia prepara la cena de Nochebuena a su manera: Lucía y Roberto deciden celebrarla en su piso con los padres de ambos; Juan y Paloma con la hermana de ella; Marisa y Vicenta con Mariano, el padre de Emilio; Belén en casa de los padres de Carlos; Emilio en la portería… pero nada sale como tenían previsto.
          El vecindario juega un décimo compartido a la lotería de Navidad y resulta que les toca el tercer premio. Ante la presión de Paloma, Juan decide fingir que le han atracado para quedarse con todo el dinero, pero los remordimientos y que existe una grabación del supuesto atraco hacen que haga lo correcto… pero cuando cobra el premio le atracan de verdad.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x16.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/hx2k1GLLNHM',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '12', '21'),
        static::FIELD_DURATION => 64,
      ], [
        static::FIELD_NAME => 'Érase un fin de año',
        static::FIELD_SLUG => '1x17-erase-un-fin-de-ano',
        static::FIELD_NATURAL_ID => '1x17',
        static::FIELD_SEASON => '1',
        static::FIELD_SUMMARY =>
          'La comunidad se prepara para dar la bienvenida al nuevo año. Por diversas circunstancias, varios vecinos se ven privados de las uvas de la suerte, lo que aprovechará el padre de Emilio para especular con tan codiciado fruto. Mientras tanto, Paco y Emilio aprovechan la ausencia de Concha para alquilar su piso para un rodaje de cine. Lo que ignoran es que trata de una película X. Fernando y Mauri, por su parte, empiezan a pagar las consecuencias de salir del armario.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/1x17.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/hUjulga6y4w',
        static::FIELD_RELEASE_DATE => Carbon::create('2003', '12', '31'),
        static::FIELD_DURATION => 44,
      ]
    ];
  }

  public function getSecondSeasonChapters()
  {
    return [
      [
        static::FIELD_NAME => 'Érase una derrama',
        static::FIELD_SLUG => '2x01-erase-una-derrama',
        static::FIELD_NATURAL_ID => '2x01',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'Los vecinos se reúnen para decidir si hacen una derrama para pintar la fachada del edificio, que ya está muy estropeada. Para sorpresa general, por primera vez están todos de acuerdo en algo, incluida doña Concha. El motivo es que acaba de vender el piso y se marcha a un chalet adosado, lo que provoca un ataque de envidia en Paloma.
          Los nuevos inquilinos del edificio resulta ser una familia que han pasado por mejores épocas y que, debido a los turbios negocios del marido, han tenido que vender el lujoso chalet en el que vivían y trasladarse al edificio. La familia se compone de Andrés, el padre, Isabel, la madre, y de Alex y Pablo, hijos de 22 y 17 años respectivamente.
          Los problemas comienzan cuando Juan intenta reclamarle su parte de la derrama a Andrés y éste se niega a pagar. Al final consigue liar a Juan y le dice que lo puede hacer su cuñado por mucho menos dinero. Juan acepta y el cuñado del nuevo inquilino no da señales de vida una vez que Juan ya había dado el dinero a Andrés.
          Fernando recibe una importante oferta de un despacho de abogados en Londres y no duda por un momento en aceptar el trabajo y trasladarse cuanto antes a Inglaterra. Mauri acoge la noticia con sorpresa y acepta irse con él, pero según se acerca el momento le empiezan a entrar dudas. Al final decide quedarse en España.
          Por último, Belén no consigue decidirse entre Carlos y Emilio. Carlos, viendo que a Belén le tira más el portero, le ofrece dinero para que deje de ver a la chica, algo que Emilio acepta encantado. Al final, Belén se entera de todo y decide dejarles a los dos.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x01.jpg',
        static::FIELD_VIDEO_URL => 'https://mega.nz/embed/5ypBFYgC#eSb7qodomilAHxvvngXn1sbkEP6AU3eup89UxK0NeZE',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '03', '24'),
        static::FIELD_DURATION => 66,
      ], [
        static::FIELD_NAME => 'Érase un sueño erótico',
        static::FIELD_SLUG => '2x02-erase-un-sueno-erotico',
        static::FIELD_NATURAL_ID => '2x02',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'Lucía tiene un sueño erótico con Juan Cuesta y pronto se enteran todos los vecinos. Juan se siente halagado y empieza a cuidar su aspecto, mientras que Lucía se agobia cada vez más porque el sueño se vuelve a repetir.
          Al final, también se enteran Roberto y Paloma aunque ésta última está convencida de que Lucía y su marido han ido más allá y tienen una aventura.
          Mauri se siente sólo y desamparado sin Fernando, así que decide adoptar un cachorro y comprarse un coche. El perro se lo traen Marisa y Vicenta y resulta ser un Gran Danés que le ocupa toda la casa. En cuanto al coche, se lo compra a Andrés, el nuevo vecino; un Mini que se cae a pedazos.
          Alicia se siente muy atraída por Álex y termina acostándose con él, sin saber que sólo tiene 21 años. Belén, por su parte, empieza a estar nerviosa porque Emilio no la llama. La culpa la tiene otra mujer; Rocío, la nueva cartera',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x02.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/70bVGY4QDZo',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '03', '31'),
        static::FIELD_DURATION => 66,
      ], [
        static::FIELD_NAME => 'Érase un negocio',
        static::FIELD_SLUG => '2x03-erase-un-negocio',
        static::FIELD_NATURAL_ID => '2x03',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'Paco, José Miguel y Roberto presionan a Emilio para que se acueste de una vez con la cartera o se convertirá únicamente en una amigo para ella. Lucía y Alicia se enfadan con los chicos porque Belén lo está pasando muy mal y les piden que eviten que ocurra nada entre el portero y Rocío.
          Por su parte, Emilio cada vez está más enamorado y planea organizar una cena en su casa con Rocío, pero para ello se tiene que deshacer de su padre. Aprovechando que Mauri busca compañero de piso, hace lo posible para juntarles. Como no consigue estar tranquilo, decide llevarla a un hotel y allí consumar la relación.
          La convivencia entre Mauri y Mariano es un desastre hasta tal punto que el chico trata de echar de su casa al padre de Emilio, pero él, ahora que ha descubierto lo que es la buena comida y todas las comodidades que tiene Mauri, se atrinchera en la habitación y no quiere salir.
          Por último, Andrés le hace pensar a Paloma que sus diseños son lo mejor del mundo y propone a Juan y a su esposa que monten por fin el negocio. A pesar de las reticencias de su marido, Paloma se gasta todo lo que tienen ahorrado en comprar telas y máquinas de coser… pero Andrés no consigue vender nada, así que convence a todos para hacer un desfile ilegal colándose en un ase de modelos para enseñar la firma PUF (Paloma Urban Fashion)',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x03.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/MQaVhkiwsl0',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '04', '14'),
        static::FIELD_DURATION => 61,
      ], [
        static::FIELD_NAME => 'Érase un desafío',
        static::FIELD_SLUG => '2x04-erase-un-desafio',
        static::FIELD_NATURAL_ID => '2x04',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'En el vecindario se enteran de que se organiza un campeonato de baloncesto entre comunidades de vecinos y que el premio es un viaje a Atenas con todos los gastos pagados. Todos se apuntan para formar parte del equipo pero la selección la hace Juan Cuesta… y sólo elige a los chicos, para enfado de las mujeres.
          Las chicas, capitaneadas por Lucía, les retan a otro partido, y el equipo que gane será quien represente a la Comunidad. Cuando llega la hora del encuentro, las chicas llevan como ¿nueva compañera de piso de Alicia y de Belén¿ a una jugadora profesional, que las hace ganar por paliza. Al final, ellas aceptan hacer un equipo mixto pero todo es un desastre por los piques personales entre los vecinos.
          Por otra parte, Belén decide darle celos a Emilio volviendo a salir con Carlos, pero como ve que no surge efecto, cambia de táctica e intenta hacerse amiga de su ex. Organiza una cena de parejitas y consigue que Rocío y Emilio corten, pero como no consigue recuperarle, empieza a tener dudas sobre su manera de actuar.
          Por último, Mauri conoce a Bea y le propone ser su nueva compañera de piso. Ella acepta y las vecinas empiezan a sospechar que Mauri se ha cambiado de acera y creen que su obligación es informar a Fernando.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x04.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/XeykYqEemHs',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '04', '21'),
        static::FIELD_DURATION => 68,
      ], [
        static::FIELD_NAME => 'Érase una patrulla ciudadana',
        static::FIELD_SLUG => '2x05-erase-una-patrulla-ciudadana',
        static::FIELD_NATURAL_ID => '2x05',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'Una serie de robos tienen preocupado al vecindario, así que, en la Comunidad deciden organizar patrullas de vigilancia.
          La primera noche, Juan y Emilio son los elegidos, pero en vez de salvar a Alicia cuando la están atracando, el presidente le da al ladrón todo lo que lleva encima.
          La segunda noche ya forman parte de la patrulla Juan, Emilio, Mariano y Andrés. Ven como un hombre se lleva una bolsa de deportes que no le pertenece y actúan, pero su sorpresa es mayúscula cuando descubren que en su interior hay 600.000 euros, que deciden repartirse en partes iguales entre la mayoría de vecinos pero los dueños de la bolsa tienen intención de recuperarla, así que secuestran a Mariano, el padre de Emilio.
          Por otra parte, Alicia, para animar a Belén, le dice que la acompañe a un casting para un anuncio, pero le sale mal porque a la que seleccionan es a Belén.
          Bea, la nueva compañera de piso de Mauri, se siente muy atraída por Lucía. Mauri quiere echarla una mano y para ello no hace más que quedar con Roberto para quitarle de en medio… pero el chico cree que Mauri se ha enamorado de él.
          Por último, Alex se apuesta con Paco, José Miguel y Emilio a que es capaz de seducir a Natalia en menos de 48 horas. Parece que lo va a conseguir pero Paloma, viendo la posibilidad de librarse de su hija, lo precipita todo y quiere preparar la boda con la ayuda de Isabel. Como lo que pretendía Natalia era fastidiar a su madre liándose con el vecino y no lo consigue, le deja.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x05.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/_jZ8XMp7JlI',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '04', '28'),
        static::FIELD_DURATION => 61,
      ], [
        static::FIELD_NAME => 'Érase un rastrillo',
        static::FIELD_SLUG => '2x06-erase-un-rastrillo',
        static::FIELD_NATURAL_ID => '2x06',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'Emilio está tan enamorado de Rocío que decide pedirla que se case con él. Mariano y José Miguel le ayudan a elegir el anillo de compromiso pero resulta que todos se salen de presupuesto, así que el niño roba uno, pero resulta ser el del Príncipe Felipe. Al final, Emilio consigue lanzarse, pero su sorpresa es mayúscula cuando se entera de que Rocío ya está casada y tiene un hijo de seis años.
          Roberto se empieza a poner celoso de la relación entre Lucía y Bea, ya que piensa que la nueva compañera de piso de Mauri es lesbiana. Lucía se enfada con él argumentando que sólo son amigas… hasta que llega el momento en el que Bea besa a Lucía.
          Por último, debido a la cantidad de trastos acumulados en el trastero del edificio, los vecinos organizan un mercadillo… pero los problemas empiezan cuando creen que uno de los cuadros encontrados, perteneciente a Vicenta, es un Goya.
          Por su parte, Juan, bajando un mueble, le da un ataque de hernia y tiene que ser hospitalizado, pero debido al lío del cuadro nadie se acuerda de él y empieza a sospechar que su mujer y Andrés tienen una aventura.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x06.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/Lq7kJA8zWWI',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '05', '05'),
        static::FIELD_DURATION => 66,
      ], [
        static::FIELD_NAME => 'Érase una huelga',
        static::FIELD_SLUG => '2x07-erase-una-huelga',
        static::FIELD_NATURAL_ID => '2x07',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'Una subida de tensión hace que los vecinos pierdan algunos de sus electrodomésticos. Juan les dice que no deben preocuparse porque les tienen que pagar los desperfectos… lo que aprovechan para romperlo todo y así conseguir una mayor indemnización. Lo malo viene cuando el perito les dice que, debido al mal estado de las instalaciones, la empresa eléctrica no se hace cargo de los desperfectos. Capitaneados por Juan e Isabel, los vecinos deciden hacer una huelga de hambre hasta que les reconozcan sus derechos.
          Emilio cada vez está más agobiado por su relación con Rocío y su hijo. La cartera tiene que dejarle a su cargo al niño mientras ella trabaja… pero él consigue endosárselo a Belén mientras que Rocío busca un piso para que se vayan a vivir los tres juntos. Emilio, presionado por Roberto, Paco y Josemi, empieza a replantearse su relación con la cartera.
          Por último, Mauri decide darle una sorpresa a Fernando y presentarse en Londres sin avisar… pero resulta que es el mismo fin de semana que Fernando había elegido para darle la misma sorpresa, por lo que Mauri está en Londres y Fernando en Madrid.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x07.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/q0z9FZpgRBg',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '05', '12'),
        static::FIELD_DURATION => 71,
      ], [
        static::FIELD_NAME => 'Érase un piso en venta',
        static::FIELD_SLUG => '2x08-erase-un-piso-en-venta',
        static::FIELD_NATURAL_ID => '2x08',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'A Emilio le ha salido un trabajo de portero en una finca de lujo, en donde le pagan el doble, y no duda ni un momento en abandonar a sus queridos vecinos.
          Concha, animada por Marisa, decide poner en venta el piso que tiene alquilado a Alicia y Belén.
          Lucía le plantea a Roberto la posibilidad de tener un hijo y, como la casa se les quedaría pequeña, quiere comprarle el piso a Concha. Paloma no soporta la idea de que la pija se pueda construir un ático y le ofrece a Concha una oferta mejor.
          Por otra parte, Isabel, que necesita su propio espacio, también está interesada en la compra del 3º B para montar una escuela de yoga. La guerra para conseguir el piso estará servida entre las tres vecinas, ante el descontento de sus maridos.
          Belén, que ya se ve sin casa y en la calle, se ofrece como nueva portera del edificio.
          Mauri tiene destrozada la espalda de dormir en el sillón y Bea le propone compartir la cama en plan gay-lesbiana, cada uno en su sitio, pero Mauri sufre una erección y se plantea si es heterosexual',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x08.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/9UFSz68tLPI',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '05', '19'),
        static::FIELD_DURATION => 69,
      ], [
        static::FIELD_NAME => 'Érase una parabólica',
        static::FIELD_SLUG => '2x09-erase-una-parabolica',
        static::FIELD_NATURAL_ID => '2x09',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'Lucía ha instalado, sin consultar con la comunidad, una antena parabólica en su balcón. El hecho provoca la indignación y envidia de Paloma que intenta desviar la dirección de la antena para que no tengan señal. Juan Cuesta convoca una junta de vecinos para tratar del tema y será Belén, como nueva portera del edificio, la que ocupe el puesto de Emilio.
          Emilio está muy agobiado con su trabajo de portero en una finca de lujo. Sufre el acoso de la presidenta y Mariano le dice que es mejor que le echen para que pueda cobrar indemnización.
          Bea quiere dar una segunda oportunidad a Ines, su ex pareja, mientras Mauri, loco por salir de marcha y hacer vida social para recuperarse de su ruptura con Fernando, no consigue concretar una cita con ninguno de sus viejos amigos.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x09.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/QvE9OXqk7KE',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '05', '26'),
        static::FIELD_DURATION => 65,
      ], [
        static::FIELD_NAME => 'Érase un vídeo casero',
        static::FIELD_SLUG => '2x10-erase-un-video-casero',
        static::FIELD_NATURAL_ID => '2x10',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'Paloma pasa una crisis existencial y decide irse a un balneario. A Juan se le presenta, por primera vez en su vida, la oportunidad de dar salida a sus traumas sexuales siendo infiel a su mujer.
          Emilio, Roberto y José Miguel intentan buscar una solución para acabar con la virginidad de Paco, para ello recurren a una prostituta que se hace pasar por una chica que se enamora de él.
          Roberto y Lucía quieren revitalizar su vida sexual y deciden grabarse con una cámara de video mientras hacen el amor.
          A Bea le entra un repentino instinto maternal y solicita la ayuda de Mauri para que la ayude a adoptar un niño.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x10.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/qdUElBJjvuU',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '06', '02'),
        static::FIELD_DURATION => 64,
      ], [
        static::FIELD_NAME => 'Érase unas elecciones',
        static::FIELD_SLUG => '2x11-erase-unas-elecciones',
        static::FIELD_NATURAL_ID => '2x11',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'Paloma comienza su mandato de presidenta de la comunidad haciendo algunos cambios en el portal: coloca una fuente, una alfombra roja.., lo suficiente para que los vecinos convoquen elecciones apresuradamente. En radio patio se celebra el primer debate electoral entre las dos contrincantes: Paloma y la Hierbas.
          Los preparativos para la boda siguen su curso y Alicia, Belén y Lucía acompañan a Rocío a elegir traje de novia a una tienda que conoce Alicia, donde se venden muy baratos los trajes de novia más feos que no ha querido nadie.
          Mauri decide ayudar a Bea a ser madre, se ofrece como donante de semen para la fertilización, y acuden a la clínica.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x11.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/rX_fZofMAtc',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '06', '09'),
        static::FIELD_DURATION => 61,
      ], [
        static::FIELD_NAME => 'Érase una despedida de soltero',
        static::FIELD_SLUG => '2x12-erase-una-despedida-de-soltero',
        static::FIELD_NATURAL_ID => '2x12',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'Rocío y Emilio ya tienen todo organizado para la boda, pero ha surgido un problema: Emilio y Belén han tenido un fortuito encuentro sexual y ambos se sienten culpables, especialmente el portero que pretenderá evitar por todos los medios que Rocío se entere de su infidelidad.
          Mientras tanto Alicia y Lucía organizan la despedida de soltera de Rocío en un Boys a la que, por supuesto, se apuntarán Vicenta, Marisa, Concha y la propia Belén. Para evitar que las chicas hablen más de la cuenta, los chicos se presentan, por sorpresa y vestidos de mujer, en el mismo local provocando una buena trifulca.
          Paloma y Juan, después de un largo tiempo sin hacer el amor, han intentado reconciliarse sexualmente. Juan se queda preocupado porque tiene la sensación de que Paloma no disfruta y le pide consejo a Andrés.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x12.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/HRRhxOLE9nA',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '06', '16'),
        static::FIELD_DURATION => 64,
      ], [
        static::FIELD_NAME => 'Érase una boda',
        static::FIELD_SLUG => '2x13-erase-una-boda',
        static::FIELD_NATURAL_ID => '2x13',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'Emilio y Rocío ya tienen todo preparado para la boda, a la que están invitados todos los vecinos de la comunidad. Casualmente, dos horas antes de casarse, el portero, tiene el examen de ingreso a la Universidad. Vestido de novio y acompañado por Juan Cuesta , que intentará soplarle las respuestas, Emilio se presenta al examen mientras Rocío le espera en la puerta de la iglesia.
          Mauri y Bea reciben la noticia de que la inseminación artificial ha sido un éxito. La sorpresa es mayúscula cuando, recién llegado de Londres, aparece Fernando para reconciliarse con Mauri, quien no sabrá como explicarle que Bea está embarazada y que el bebé es suyo.
          Mientras tanto y después de las últimas crisis vividas en su matrimonio, Juan Cuesta piensa que Paloma le es infiel por lo que decide ponerle un detective privado.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x13.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/WLC8geuwsbY',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '06', '23'),
        static::FIELD_DURATION => 68,
      ], [
        static::FIELD_NAME => 'Érase un apoyo vecinal',
        static::FIELD_SLUG => '2x14-erase-un-apoyo-vecinal',
        static::FIELD_NATURAL_ID => '2x14',
        static::FIELD_SEASON => '2',
        static::FIELD_SUMMARY =>
          'Paloma está ingresada en el hospital en estado muy grave y los vecinos celebran una junta «especial» para apoyar a Juan Cuesta en esos difíciles momentos. En esta junta se recordarán los mejores momentos vividos por lo vecinos a lo largo de la segunda temporada de la serie.
          Por otra parte, Belén no quiere reanudar su relación con Emilio en las mismas condiciones que cuando lo dejaron. Como Emilio, por el momento, no quiere saber nada de otra boda, Belén le propone irse a vivir juntos. Alicia tratará de convencerla para que desista de esa idea.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/2x14.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/LyXTC2dCg0A',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '06', '30'),
        static::FIELD_DURATION => 57,
      ]
    ];
  }

  public function getThirdSeasonChapters()
  {
    return [
      [
        static::FIELD_NAME => 'Érase un caos',
        static::FIELD_SLUG => '3x01-erase-un-caos',
        static::FIELD_NATURAL_ID => '3x01',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'En la comunidad de vecinos reina el caos. Por una parte, Emilio se traslada a vivir con Belén sin la aprobación de Alicia y mucho menos la de Concha, aunque sí la de Mariano que se queda con la portería para él solo.
          Andrés está en busca y captura por fraude fiscal e Isabel, para mantener a la familia, pone un próspero centro de yoga en su piso y da clases a varios alumnos. Marisa, Vicenta y Concha no lo aprueban y acuden al presidente de la comunidad para poner una queja.
          La familia de Juan Cuesta está sumida en la anarquía doméstica. Menos mal que Nieves, la hermana de Juan Cuesta, llega al hogar para organizar la vida de todos, incluida la de la comunidad, ya que ella, al igual que su hermano, también es la presidenta de su bloque. Pero esta comunidad es distinta a todas y Nieves lo comprobará pronto cuando se encuentre con que aparte del Centro de Yoga de Isabel, Marisa y el resto han montado un bingo. Para colmo, Mariano también se apunta y pone un bar con terraza en la portería.
          Por otra parte, Lucía y Roberto vuelven de vacaciones en crisis y deciden separarse: no se aguantan mutuamente. Roberto se traslada a vivir a la buhardilla y allí se encuentra con Andrés, que está provisionalmente escondido de la policía.
          El embarazo sigue su curso pero Mauri, hecho un autentico padrazo y sin Fernando otra vez, desespera a Bea.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x01.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/z8t2B6AZybU',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '10', '06'),
        static::FIELD_DURATION => 65,
      ], [
        static::FIELD_NAME => 'Érase un okupa',
        static::FIELD_SLUG => '3x02-erase-un-okupa',
        static::FIELD_NATURAL_ID => '3x02',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Juan e Isabel comienzan a sentirse atraídos sexualmente. Juan le confiesa a su hermana esa atracción aunque no le da nombres, y Nieves, muy posesiva, se ofende.
          Además, Andrés sale de la cárcel porque Vicenta le ha pagado la fianza. Lo que no sospecha es que Vicenta va a intentar cobrársela y le pide que deje a su mujer. Andrés va a tener que utilizar todas las artimañas posibles para intentar deshacerse de Vicenta.
          La convivencia entre Lucía y Alicia -que no acaba de encontrar piso- se complica, y no solo por las cuestiones domésticas, sino que ambas compiten para ver cual es la que más liga.
          Entretanto, Roberto, que se ha instalado en el ático , empieza a sentir celos de Lucía y él para no ser menos se inventa una novia.
          Pero el problema más grave lo tiene Mariano. La comunidad necesita dinero para cambiar el ascensor y Nieves propone alquilar la portería. Tienen pues, que echar a Mariano de allí, y éste, cómo no, se atrinchera y llegará a límites insospechados para conseguir quedarse.
          Éste causará un incendio en el edificio, todos se iran excepto Juan y Emilio, que intetarán sofocarlo.
          Mauri se compra un monovolumen familiar para cuando nazca el bebé y lo aparca frente a su casa, pero descubre que le han puesto una multa.
          El Ayuntamiento ha hecho la calle zona azul y Belén, que ha conseguido trabajo, es la nueva empleada que pone las multas.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x02.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/2z9PDyUDca0',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '10', '13'),
        static::FIELD_DURATION => 70,
      ], [
        static::FIELD_NAME => 'Érase un matrimonio de conveniencia',
        static::FIELD_SLUG => '3x03-erase-un-matrimonio-de-conveniencia',
        static::FIELD_NATURAL_ID => '3x03',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Vicenta reúne en su casa a todos los vecinos para comunicarles su boda con Néstor, un cubano. Los vecinos creen que Vicenta está siendo engañada, pero cuando ella misma les confiesa que se trata de un matrimonio de conveniencia, por el que va a recibir la nada despreciable cantidad de cinco mil euros, son muchos los que se apuntan, y así, la comunidad de vecinos se prepara para celebrar nada menos que cinco bodas al mismo tiempo.
          Entretanto, Roberto, instalado en el ático y sin dinero, convencido por José Miguel, empieza a atracar por las noches la nevera de Lucía. Cuando Lucía lo descubre piensa que es Alicia que tiene problemas con la comida, pero ésta piensa lo mismo de Lucía a la que ha dicho que está gorda, ambas desconfían una de otra y tratan de convencer a la contraria para acudir a un especialista.
          Carlos, el ex novio de Lucía y también de Belén, decide que su fracaso con las mujeres es debido a que en realidad es gay. Así que acude a Mauri para que le enseñe como ser un gay, pero Mauri está encantado con el cubano de Vicenta, que le echa los tejos, y trata de deshacerse como puede del pesado de Carlos.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x03.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/NJiv22MXT_A',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '10', '20'),
        static::FIELD_DURATION => 74,
      ], [
        static::FIELD_NAME => 'Érase una inauguración',
        static::FIELD_SLUG => '3x04-erase-una-inauguracion',
        static::FIELD_NATURAL_ID => '3x04',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Emilio empieza la universidad y deja a su padre de sustituto en la portería. El primer día de clase se siente desplazado entre los jóvenes y vuelve deprimido a casa, pero en seguida Emilio va a aprender qué hacer para integrarse.
          Lucía quiere montar un restaurante aprovechando un local queda libre al final de la calle. Como no quiere tener que pedir dinero a su padre, consigue que Carlos sea su socio.
          La primera en pedirle trabajo de camarera es Alicia, pero Belén también lo necesita y Lucía se siente obligada. El rumor se expande por el patio, Mauri, chef; Vicenta, cocinera; Mariano, aparcacoches; Marisa, Belén y Alicia, camareras; y Concha en el guardarropa.
          Lucía, en su empeño en demostrarle a su padre que es autosuficiente, se pone manos a la obra para inaugurar el próximo viernes.
          Mauri conoce a Diego, el hermano de Lucía, y se enamora perdidamente de él; está seguro hasta tal punto que ni se cuestiona su identidad sexual.
          La atracción entre Juan Cuesta e Isabel va en aumento, y la situación se complica: de un lado Andrés sigue obsesionado, y de otro, José Miguel, como los ha descubierto, se dedica a chantajear a su padre. Deciden ponerle fin con una noche de pasión en un hotel para desfogarse y poder recobrar así la normalidad.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x04.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/pB3FG9Lde9g',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '10', '27'),
        static::FIELD_DURATION => 74,
      ], [
        static::FIELD_NAME => 'Érase un combate',
        static::FIELD_SLUG => '3x05-erase-un-combate',
        static::FIELD_NATURAL_ID => '3x05',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Un niño nuevo del colegio le pega y le roba las zapatillas a José Miguel. Mientras Juan Cuesta le sugiere dialogar con él, su tía Nieves le aconseja lo contrario, que se defienda y le pegue.
          José Miguel sigue su consejo y el padre del niño se presenta en casa de Juan Cuesta y le desafía a una pelea. Juan Cuesta la rechaza pero la comunidad de vecinos reunida para la ocasión le obliga a aceptar el reto y las apuestas se ponen en marcha.
          Emilio está muy ocupado estudiando con su nueva compañera Arantxa y Belén se cela; entre los estudios y el trabajo casi no se ven y quiere que pase más tiempo con ella.
          Mauri y Diego se reencuentran, pero Diego aún duda de su condición de homosexual y no quiere separarse de su mujer.
          Juan e Isabel deciden dejarlo y volver a la normalidad. Pero Andrés, que sigue preocupado por las sospechas de infidelidad de Isabel, trae un psicólogo a casa para hacer terapia familiar y conocer así el secreto',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x05.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/bYlYxTWh2uU',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '11', '03'),
        static::FIELD_DURATION => 61,
      ],[
        static::FIELD_NAME => 'Érase un canario',
        static::FIELD_SLUG => '3x06-erase-un-canario',
        static::FIELD_NATURAL_ID => '3x06',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Gustavo, el director del colegio, se va de puente y le deja el canario a Juan para que se lo cuide. Juan, que aspira a conseguir el puesto de director de estudios está encantado, y Nieves, su hermana, aún más. Pero no así los vecinos, que con los cánticos del canario no consiguen pegar ojo en toda la noche y convocan una junta especial, sin Juan Cuesta, obviamente, para decidir cómo «deshacerse» del pájaro.
          Arantxa, la compañera de Emilio en la facultad, se pelea con sus padres y Emilio, sin consultar con Belén, le ofrece quedarse con ellos, en casa de Belén, en la habitación que ahora les sobra. Además le pide a Lucía que le de trabajo de camarera en el restaurante. Tanto Belén como Alicia, que ve peligrar su trabajo, no están nada conformes con este nuevo fichaje.
          Los que sí lo están son Roberto, Pablo, Paco y José Miguel, que se van a la facultad de Emilio para ver si ellos también encuentran alguna chica así de guapa para ligar.
          Diego y Alba se presentan en casa de Mauri para acompañar a Bea a la ecografía. Como Alba se va a un congreso, Diego le propone a Mauri pasar los dos días juntos pero encerrados en su casa para que nadie los vea. Así que Mauri envía a Bea a casa de Lucía y los dos se preparan para un fin de semana romántico y solos para conocerse mejor.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x06.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/WZWeqALDN4w',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '11', '10'),
        static::FIELD_DURATION => 64,
      ],[
        static::FIELD_NAME => 'Érase un mal de ojo',
        static::FIELD_SLUG => '3x07-erase-un-mal-de-ojo',
        static::FIELD_NATURAL_ID => '3x07',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Una pitonisa ambulante le echa mal de ojo a Emilio y las desgracias se suceden en la comunidad de vecinos: la caldera se rompe, el ascensor se estropea, Belén cree estar embarazada, y Alicia -que por fin ha conseguido su primer papel con frase en una película-, se cae por la escalera.
          Todos están convencidos de que Emilio es gafe, y para solucionarlo, Juan Cuesta celebra una junta de vecinos extraordinaria donde acuerdan una derrama para curar el mal de ojo.
          Roberto intenta sin éxito vender sus caricaturas a los vecinos y Lucía, a sugerencia de Alicia, le ofrece el restaurante para que exponga allí sus dibujos.
          Bea ya no soporta más el lío en que Mauri y su amante Diego le han metido al decirle a la mujer de Diego que era ella la que estaba enrollada con su marido, y amenaza a Mauri con decir la verdad si ellos no lo hacen antes.
          Por otra parte, Andrés, ya reconciliado con Isabel, se preocupa por Juan y le busca una amiga de yoga de Isabel para una cita: una cena en su casa los cuatro juntos. Juan se ofende porque cree que Isabel está de acuerdo, e Isabel se cela al ver que Juan se pone muy contento con la cita.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x07.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/w3ZOB7EyJUI',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '11', '17'),
        static::FIELD_DURATION => 64,
      ],[
        static::FIELD_NAME => 'Érase un aniversario',
        static::FIELD_SLUG => '3x07b-erase-un-aniversario',
        static::FIELD_NATURAL_ID => '3x07b',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'En este capítulo, el Presidente Juan Cuesta cumple 13 años al frente de la presidencia de esta nuestra comunidad, y decide ir piso por piso recogiendo iniciativas de los vecinos para mejorar la convivencia en el edificio y plasmarlo todo en un libro blanco.
          Al ser domingo, el presi sólo puede contar con la ayuda de Mariano. Los vecinos tienen muchas peticiones que hacer. Mauri cambiaría a los vecinos, las «supernenas» creen que ya es hora de que las cosas funcionen. El «comité de sabios» se reúne y llegan a una conclusión: en los últimos tiempos, ha habido mucho amor en la escalera.
          La conclusión final es clara, esta comunidad es un auténtico manicomio, pero todos ellos son irremplazables. Por eso celebran con una fiesta por todo lo alto el aniversario presidencial de Juan Cuesta.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x07b.jpg',
        static::FIELD_VIDEO_URL => 'https://www.dailymotion.com/embed/video/x5wo6b7',
        static::FIELD_DURATION => 57,
      ],[
        static::FIELD_NAME => 'Érase un famoso',
        static::FIELD_SLUG => '3x08-erase-un-famoso',
        static::FIELD_NATURAL_ID => '3x08',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Un famoso torero va celebrar su boda con una modelo en el restaurante de Lucía para evitar a los fotógrafos de la prensa rosa. Lucía les da el día libre a todos los empleados y contrata personal cualificado para que la celebración sea un éxito.
          Vicenta se va de viaje a visitar a una tía suya enferma y Marisa y Concha, que nunca hacen las tareas de la casa, llaman a un anuncio de jóvenes voluntarios diciendo que están incapacitadas para conseguir que alguien les haga todo gratis durante esos días.
          Mauri está agotado con su nueva relación con Diego. Todas las noches salen de marcha y los días lo pasan haciendo puenting y deportes de riesgo. Pero él no quiere dejar solo a Diego un momento para que no se lo quiten, así que tiene que aguantar como puede.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x08.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/7vWjTlcw9o4',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '11', '24'),
        static::FIELD_DURATION => 69,
      ],[
        static::FIELD_NAME => 'Érase un desalojo',
        static::FIELD_SLUG => '3x09-erase-un-desalojo',
        static::FIELD_NATURAL_ID => '3x09',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'La fachada del edificio aparece una mañana pintada con grafitis firmados por un tal Tornado. La policía sorprende al autor que no es otro que José Miguel. Una asistente social recomienda a Juan Cuesta que pase más tiempo con su hijo y él decide dejar la presidencia de la comunidad para dedicarse de lleno a la familia.
          Vicenta pasa a ser presidenta en funciones, y Andrés consigue convencerla a ella, a Marisa y a Concha para realizar varios estropicios en la comunidad y contratar a unos chapuzas conocidos para realizar los arreglos a cambio de una comisión y engañar así al seguro.
          Tras el fracaso del restaurante, Lucía está deprimida y se encierra en casa a comer helados. Roberto intenta, entonces, la reconciliación.
          A Bea la despiden de la clínica veterinaria por estar embarazada. Mauri comienza una cruzada a favor de los derechos de las embarazadas, pero en medio se cruza Rosa, la abogada de la clínica, que también resultará ser lesbiana.
          Alicia conoce al padre de Carlos y le gusta, así que deja a Carlos que otra vez se vuelca en Lucía.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x09.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/wWVkFfwYNM4',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '12', '01'),
        static::FIELD_DURATION => 64,
      ],[
        static::FIELD_NAME => 'Érase un belén',
        static::FIELD_SLUG => '3x10-erase-un-belen',
        static::FIELD_NATURAL_ID => '3x10',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'La archidiócesis ha convocado un concurso de belenes vivientes y Juan Cuesta celebra una junta especial para proponer a los vecinos «participar e impregnarse así del espíritu navideño tan propio de estas fechas. Además de optar a un premio en metálico de mil quinientos euros para los ganadores.
          Lucía recibe una enorme cesta de Navidad de regalo de su padre por haber decidido volver a trabajar en su empresa. Emilio la deja en la escalera y, por error, Juan Cuesta piensa que es un regalo del director de su colegio que le va a ascender. Cuando Lucía pregunta por la cesta, los Cuesta ya han dado cuenta sobradamente de ella y, además, los vecinos piden su parte por colaborar a ocultárselo a Lucía.
          Roberto, picado por Carlos que le culpa de que Lucía se haya rendido y tenga que volver a trabajar con su padre, decide resucitar el restaurante, y junto con José Miguel, Paco, Alex, Natalia y la inestimable colaboración de Mariano como cómico, ponen en marcha un restaurante de comida rápida.
          Entretanto Mauri está preocupado, de un lado porque Rosa, la nueva novia de Bea, se quiere apropiar de la paternidad de su hijo y, de otro, porque ha sorprendido a Diego mirándole el culo a una chica guapa.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x10.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/U07T8YObV9o',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '12', '15'),
        static::FIELD_DURATION => 60,
      ],[
        static::FIELD_NAME => 'Érase una Nochevieja',
        static::FIELD_SLUG => '3x11-erase-una-nochevieja',
        static::FIELD_NATURAL_ID => '3x11',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Los vecinos se preparan para recibir al nuevo año y todos se han buscado un plan para divertirse a tope.
          En el videoclub, Paco, Alex y Pablo, con José Miguel como dj, preparan una «macrofiesta».
          Belén ha invitado a sus padres a cenar para presentarles oficialmente a Emilio.
          Mauri también prepara una fiesta – a pesar lo avanzado del embarazo de Bea- para que todos sus amigos gays conozcan a Diego. El chico, asustado ante la idea, se refugia en casa de Lucía cuya intención era pasar la noche sola, pero Alicia -que también se ha quedado colgada por la cena de Belén con sus padres- le prepara una fiesta para animarla e invita a todos sus ex.
          Pero no todo son fiestas, ya que tras descubrirse el idilio entre Juan e Isabel, en ambas familias todos están enfadados con todos y la tensión crece cuando Juan convoca una Junta para invitar a los vecinos a cenar y así, reconciliarse.
          Andrés, picado, también los invita a todos a cenar en su casa. Así pues, Marisa, Concha, Vicenta y Mariano (los únicos que no tenían planes para esa noche), sopesan ambas ofertas antes de decidir cual aceptar..',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x11.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/32tSpeiqaFI',
        static::FIELD_RELEASE_DATE => Carbon::create('2004', '12', '31'),
        static::FIELD_DURATION => 63,
      ],[
        static::FIELD_NAME => 'Érase una grieta',
        static::FIELD_SLUG => '3x12-erase-una-grieta',
        static::FIELD_NATURAL_ID => '3x12',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Mauri necesita una habitación para el niño que no para de llorar y así evitar que Bea decida irse a vivir a casa de Rosa que tiene un piso más grande. Andrés convoca su primera Junta como presidente en la que no se aprueba la reforma. Aún así Mauri decide seguir adelante, y Marisa, Vicenta y Concha preparan un plan para boicotear la reforma.
          Entretanto, Andrés se traslada a vivir al ático e Isabel a casa de Juan. Pero Nieves no se va, y la casa se queda pequeña. Deciden tirar el tabique sin comunicárselo a la comunidad y unir las dos casas, la de Isabel y la de Juan. Pero en casa de Lucía sale una enorme grieta que les delata.
          Roberto le deja a Andrés el ático pensando que va a volver con Lucía, pero ella prefiere ir poco a poco, y además Carlos se ha instalado en su casa para esconderse de Alba, que no para de acosarle tras la breve relación que mantuvieron en fin de año.
          Emilio sigue en la portería, con su padre. Belén no quiere saber nada de él, pero Victoria, la madre de Alicia, una actriz de la época del destape, viene a pasar unos días con su hija, y le tira los tejos a Emilio, destapando los celos de Belén a la vez que el deseo de Mariano.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x12.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/kYYq_lQVA38',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '01', '12'),
        static::FIELD_DURATION => 66,
      ],[
        static::FIELD_NAME => 'Érase unos nuevos inquilinos',
        static::FIELD_SLUG => '3x13-erase-unos-nuevos-inquilinos',
        static::FIELD_NATURAL_ID => '3x13',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Isabel vende su piso a una inmobiliaria que lo alquila a un grupo de macarras para que hagan la vida imposible a los vecinos y tengan que vender más barato.
          Andrés, tras recuperarse de la angina de pecho, vuelve a casa, pero Isabel no quiere hacerse cargo de él y es Vicenta quien se ofrece a ayudarle.
          Lo instala en su casa, y cuando Isabel vende la suya, también acoge a sus hijos, Pablo y Alex. Así pues son Concha y Marisa las que acaban en la calle, pero ellas se van a casa de Alicia y Belén.
          Mientras, Mauri y Bea no se ponen de acuerdo con el nombre para el bebé, y además Bea quiere bautizarlo.
          Belén sigue preocupada con el posible embarazo pero no quiere hacerse la prueba.
          Tanto ella como Lucía comienzan a tener celos de Alicia porque ha encontrado al hombre perfecto y deciden seguirle para descubrir qué oculta.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x13.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/BAtShBnYwkI',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '01', '19'),
        static::FIELD_DURATION => 76,
      ],[
        static::FIELD_NAME => 'Érase un bautizo',
        static::FIELD_SLUG => '3x14-erase-un-bautizo',
        static::FIELD_NATURAL_ID => '3x14',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Mauri y Bea se preparan para bautizar a su hijo sin que los vecinos se enteren. Como eso es algo imposible, radio patio enseguida da la noticia. El día anterior al bautizo, Bea se va de viaje y le deja el niño a Mauri, quien recibe una llamada de su revista diciéndole que tiene que ir urgentemente a París a hacer una entrevista. Así pues, es Diego quien se queda al cuidado de Ezequiel.
          Pero Diego no sabe qué hacer con un bebé y se lo deja a Vicenta, Marisa y Concha, que ven la oportunidad de sacar algo de dinero con el niño y lo presentan a un casting para un anuncio.
          Emilio sigue empeñado en que Belén se haga la prueba del embarazo. Belén, ya harta, le pide a Alba que se haga la prueba para enseñarle el predictor con el resultado negativo a Emilio. Pero la prueba da positiva.
          Nieves declara la guerra a Isabel y recluta a Andrés y a sus hijos para que le ayuden a hacer la vida imposible a la nueva pareja.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x14.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/8nLplcMQiFw',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '01', '26'),
        static::FIELD_DURATION => 74,
      ],[
        static::FIELD_NAME => 'Érase una academia',
        static::FIELD_SLUG => '3x15-erase-una-academia',
        static::FIELD_NATURAL_ID => '3x15',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Belén ha decidido dar un vuelco en su vida y recurre a una agencia matrimonial. En su primera cita conoce a su hombre ideal, y como no quiere precipitarse, se despiden con un simple beso. Lucía le aconseja que no pierda el tiempo porque que ya no tiene edad y que se acueste con él.
          El colegio de Juan cierra y se queda en el paro. Nieves le ofrece montar una academia en el segundo B para ayudarle. En realidad se trata de una estrategia para mantener ocupado a Juan y propiciar un acercamiento entre Andrés e Isabel.
          Lucía, con problemas de dinero desde la discusión con su padre, ha encontrado trabajo vendiendo aspiradores. Carlos, para ayudarle, le compra un coche, y Roberto, que no quiere ser menos, también quiere hacerle un regalo. Como él tampoco tiene dinero, se ofrece a dar clases de conducir a Natalia para conseguirlo. Para ello le coge el coche prestado a Lucía y acaban teniendo un accidente.
          Diego va a jugar un partido de fútbol con sus amigos del barrio, que no saben que es gay, y le prohíbe a Mauri que vaya a verle. Pero Mauri hace todo lo contrario y se convierte en la estrella del equipo',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x15.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/0YzrLMEzN84',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '02', '02'),
        static::FIELD_DURATION => 88,
      ],[
        static::FIELD_NAME => 'Érase unos estatutos',
        static::FIELD_SLUG => '3x16-erase-unos-estatutos',
        static::FIELD_NATURAL_ID => '3x16',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Carlos compra el videoclub y asiste a su primera junta de vecinos como propietario, una junta en la que, como es habitual, todos discuten por las cosas más absurdas, y en la que también se descubre que nadie conoce los estatutos.
          Andrés, como presidente, les obliga a leérselos, pero la solución resulta peor, ya que ahora todos saben cuales son sus derechos y los exigen.
          Emilio se vuelca con sus estudios ya que están cerca los exámenes y está decidido a aprobar. Justo antes de un examen, tiene un idilio con una profesora pensando que es lo mejor que puede hacer para aprobar.
          Mauri y Bea no pueden con Ezequiel y se dan cuenta de que necesitan una niñera. Mauri se toma muy en serio la búsqueda de la niñera adecuada.
          Por su parte, Lucía y Alicia están pasando una mala racha. Después de mucho buscar, consiguen trabajo como chicas del telecupón.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x16.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/Fcwp6A7SYMk',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '02', '09'),
        static::FIELD_DURATION => 85,
      ],[
        static::FIELD_NAME => 'Érase unas alumnas',
        static::FIELD_SLUG => '3x17-erase-unas-alumnas',
        static::FIELD_NATURAL_ID => '3x17',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Carlos comienza con éxito su mandato de presidente de la comunidad introduciendo grandes mejoras, como un ascensor, etc, etc. Por su parte, Juan Cuesta se queda sin alumnos en la academia por lo que tiene que pedirle ayuda a Mariano. Al padre de Emilio sólo se le ocurre llenar la academia con unas prostitutas que él conoce.
          Vicenta y Concha deciden vender sus pisos a un banco a cambio de un sueldo fijo al mes durante el resto de sus vidas hasta que se mueran.
          Por su parte, Emilio sigue saliendo con su profesora parece que las cosas van viento en popa. El problema aparece cuando ella le plantea tener una cena en casa de sus padres.
          Lucía necesita dinero y sentirse útil, Carlos está dispuesto a ayudarla una vez más y le ofrece la posibilidad de trabajar como dependienta en el videoclub.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x17.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/YE5vXzE6ics',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '02', '16'),
        static::FIELD_DURATION => 89,
      ],[
        static::FIELD_NAME => 'Érase un juicio',
        static::FIELD_SLUG => '3x18-erase-un-juicio',
        static::FIELD_NATURAL_ID => '3x18',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Emilio decide buscar a su verdadero padre. Para asegurarse de quien es realmente su progenitor, llama a su madre, pero ésta, demasiado ocupada viendo la televisión, no le hace mucho caso.
          Comienzan los juicios de divorcio. De un lado está el de Isabel y Andrés, y de otro, el de Juan y Paloma. Andrés, que ha contratado a Rosa de abogada, le reclama a Isabel la mitad del dinero del piso y una pensión para él y para sus dos hijos. Como Paloma está en coma, se convoca un consejo familiar al que acuden los padres de ésta para representarla.
          Lucía no está segura de que deba volver con Roberto y le sugiere que solamente compartan piso. Por su parte, Belén, que ya no tiene a Alicia en casa, está buscando a otra persona para pagar el alquiler. Se lo pide a Roberto, éste acepta y se traslada a vivir con ella. Como consecuencia, Lucía se ve obligada a buscar a otro inquilino y Mauri le presenta a un amigo suyo gay.
          Entretanto, Mauri continúa con su triángulo amoroso y cree que tanto Diego como Abel están enamorados de él.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x18.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/Pxsm9ToDsWc',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '02', '23'),
        static::FIELD_DURATION => 86,
      ],[
        static::FIELD_NAME => 'Érase un disco-pub videoclub',
        static::FIELD_SLUG => '3x19-erase-un-disco-pub-videoclub',
        static::FIELD_NATURAL_ID => '3x19',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Carlos, debido a la baja rentabilidad del videoclub, decide convertirlo en un espacio multifuncional y monta un bar de copas nocturno. Juan descubre un trapicheo de pastillas en la puerta y tiene un problema con un camello.
          Por otra parte, Belén consigue una nueva compañera de piso. Se trata de una recién divorciada dispuesta a disfrutar de la vida. Belén y Lucía a su lado se sienten viejas y trasnochadas, por lo que deciden apuntarse con ella a ligar «yogurines»
          A Concha le toca un bingo especial pero prefiere ocultárselo a todos. Debe ya cinco meses a la comunidad y están todos sin calefacción por su culpa. Todo esto provoca que Marisa, Vicenta, Mauri, Emilio, y la mayoría de afectados, monten un comando para conseguir que pague lo que debe y así poder volver a tener calefacción.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x19.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/nwWE9zjDkBI',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '03', '02'),
        static::FIELD_DURATION => 74,
      ],[
        static::FIELD_NAME => 'Érase una cobaya',
        static::FIELD_SLUG => '3x20-erase-una-cobaya',
        static::FIELD_NATURAL_ID => '3x20',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Para sacarse algún dinero Juan se ofrece de cobaya a unos laboratorios farmaceuticos y prueba una píldora para el crecimiento del cabello. Isabel, que escucha una conversación en el hospital, está convencida que Juan se va a morir y que le quedan pocos días. Se lo comunica a los vecinos que enseguida convocan una junta extraordinaria para hacerle la vida más fácil y llevadera al ex presidente. La «hierbas», además, decide adelantar la boda.
          Diego y Abel vuelven del viaje con la intención de casarse. Ya tienen fecha para la boda, pero Mauri -quien por supuesto no quiere saber nada de esa boda-, va a recurrir al chantaje psicológico para que le cedan la fecha Isabel y Juan.
          Lucía, Belén y Lola montan una línea erótica en casa para sacar algún dinero.
          Mientras, Emilio y Carmen cumplen un mes juntos y lo van a celebrar. Emilio se obsesiona con el regalo y recurre a Belén.
          Por último, Roberto escucha a una amiga de Bea que también quiere ser madre, como le pide a Mauri que le haga el mismo favor a cambio de dinero. Se lo comunica al «Consejo de Sabios» y enseguida se apuntan a donar esperma.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x20.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/GUZqRwI0DuU',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '03', '09'),
        static::FIELD_DURATION => 87,
      ],[
        static::FIELD_NAME => 'Érase un premio',
        static::FIELD_SLUG => '3x21-erase-un-premio',
        static::FIELD_NATURAL_ID => '3x21',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Lucía y Belén consiguen trabajo de cajeras en un supermercado. Se enteran de que se va a celebrar un sorteo para promocionar una marca de aceitunas y que el premio viene en una de las mil latas que el supermercado va a recibir.
          Convocan una junta de vecinos donde se ponen de acuerdo para comprar todas las latas y ganar el premio.
          Roberto, agobiado por sus problemas de alopecia y esperma de mala calidad, decide ponerse en forma. Mariano le consigue un gimnasio gratis donde lo apunta de sparring.
          Entretanto, Emilio está muy arrepentido de haber dejado a Carmen y trata de recuperarla.
          Y, por último, Mauri le encarga a un becario de su periódico ue investigue la fecha de la boda entre Diego y Abelde su periódico ue investigue la fecha de la boda entre Diego y Abel',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x21.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/GOMo8aTs9bU',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '03', '16'),
        static::FIELD_DURATION => 79,
      ],[
        static::FIELD_NAME => 'Érase unas puertas blindadas',
        static::FIELD_SLUG => '3x22-erase-unas-puertas-blindadas',
        static::FIELD_NATURAL_ID => '3x22',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Aprovechando una ola de robos por la zona, Juan y Andrés fingen un robo en casa de Nieves para convencer a los vecinos de que pongan puertas blindadas en sus casas.Por supuesto, ellos acuerdan una comisión con el amigo de Andrés que instala las puertas.
          Pero los vecinos se enteran y al final, todos terminan sin puertas en sus casas.
          Juan empieza a dar clases a una niña y José Miguel se enamora por primera vez.
          Entretanto, Lucía monta una guardería en casa para sacar dinero, y Belén cambia de agencia matrimonial y conoce a un hombre maravilloso.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x22.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/_5nJzL3E2WE',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '04', '06'),
        static::FIELD_DURATION => 80,
      ],[
        static::FIELD_NAME => 'Érase un vicio',
        static::FIELD_SLUG => '3x23-erase-un-vicio',
        static::FIELD_NATURAL_ID => '3x23',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'A raíz de un conato de incendio por una colilla mal apagada, los vecinos prohíben fumar en el edificio.
          Los no fumadores son en su mayoría no propietarios, como Belén y Emilio. Ambos deciden que es el momento de desengancharse y deciden hacerlo juntos, pero las consecuencias pueden ser imprevisibles.
          Mientras tanto, Roberto, desesperado por recuperar a Lucía, finge estar con Belén. Pero Lucía se lo cree y, ante la sorpresa de su ex, piensa que ambos hacen muy buena pareja.
          Por último, Mauri también tiene problemas, se aproxima la fecha de la boda de Abel y Diego y no tiene con quien acudir, pues Bea no está por la labor.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x23.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/8R6Uz3ZiQ-A',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '04', '14'),
        static::FIELD_DURATION => 85,
      ],[
        static::FIELD_NAME => 'Érase un administrador',
        static::FIELD_SLUG => '3x24-erase-un-administrador',
        static::FIELD_NATURAL_ID => '3x24',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Los vecinos, debido a la situación agónica en que se encuentran las cuentas de la comunidad, deciden recurrir a un administrador. La primera medida que acuerdan para reducir gastos es prescindir del portero y encargarse ellos mismos, por turnos, de las tareas de limpieza y recogida de basura. A Emilio le dan quince días para que abandone la portería y, agobiado por su situación laboral, pero aún más por el acoso sexual al que Belén le tiene sometido ahora que son amantes, sufre un gatillazo con Carmen.
          Por su parte, Mauri empieza a estar preocupado por la edad y se ve lleno de arrugas. Carlos le aconseja que haga igual que su padre y recurra a las nuevas técnicas que la cirugía estética ofrece hoy en día.
          Lucía y Carlos comienzan su relación de convivencia, pero mientras Carlos intenta ir poco a poco para no equivocarse y no quiere aún acostarse con Lucía, ella está desesperada porque no ha vuelto a tener relaciones desde que lo dejó con Roberto.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x24.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/5GSWKXKlUvs',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '04', '20'),
        static::FIELD_DURATION => 84,
      ],[
        static::FIELD_NAME => 'Érase una traición',
        static::FIELD_SLUG => '3x25-erase-una-traicion',
        static::FIELD_NATURAL_ID => '3x25',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'A Emilio le cumple el plazo para abandonar la portería y decide declararle la guerra a la comunidad. Acampa delante de la portería y, aconsejado por Carmen, demanda a la comunidad por los años que ha estado trabajando sin contrato. Comienza una guerra en la que Emilio va a contar con algunos aliados, aunque, al final, siempre lo sean por su propio interés.
          Carlos y Lucía siguen como pareja y descubren los celos mutuos. Lucía, ya harta de ser una mantenida, pone un sitio de masajes en la portería y contrata a un fisioterapeuta, pero, entretanto, en Natalia aflora un repentino interés por Carlos. Mauri, por su parte, va a tener que elegir entre volver con Fernando que se lo ha pedido y parece que ahora va en serio, y Diego, que ya se arrepiente de haberse casado.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x25.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/7eo21F4lEoc',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '04', '27'),
        static::FIELD_DURATION => 78,
      ],[
        static::FIELD_NAME => 'Érase una visita guiada',
        static::FIELD_SLUG => '3x25b-erase-una-visita-guiada',
        static::FIELD_NATURAL_ID => '3x25b',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'El nuevo administrador, Gregorio, realiza una visita a la comunidad para sacar información sobre la vida de los vecinos. La razón es que como ve con su mujer las cintas en las que se graban las juntas, ella se ha enganchado y quiere conocer más a fondo a nuestros protagonistas. Aborda primero a Mariano y a José Miguel, que se ofrecen a hacerle un ‘tour’ por el vecindario y contarle los secretos de ‘esta nuestra comunidad’.
          Pero, como siempre, los vecinos están ocupados con sus propios problemas. A Juan le han rayado el coche y firman la fechoría las Chinchón Kings; Lucía y Carlos vuelven del puente tras pasar el primer atasco en la carretera juntos, como pareja. Y, ya por último, la noticia que mantiene a todos expectantes es que Paco está a punto de llegar y presentar oficialmente a Lourdes, su novia, de la que se enamoró en la boda de Diego y Abel, y a que únicamente han visto en la foto que hizo con el móvil.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x25b.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/1WfUg0MJ7CY',
        static::FIELD_DURATION => 12,
      ],[
        static::FIELD_NAME => 'Érase el primer presidente gay',
        static::FIELD_SLUG => '3x26-erase-el-primer-presidente-gay',
        static::FIELD_NATURAL_ID => '3x26',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'El administrador se hace eco de las peticiones de los vecinos y destituyen a Juan de presidente. Ante la ausencia de candidatos, se hace el pertinente sorteo y sale Mauri. Él intenta escaquearse, pero el administrador le advierte que sin causa justificada es delito. Pero he aquí que el niño tiene sarampión y se lo contagia y, como tener una enfermedad grave es un eximente, se inventa que es un desconocido virus de origen africano que le ha pegado Fernando al volver de unas vacaciones. El problema es que parte de los vecinos no han pasado el sarampión y la cosa empieza a propagarse por la comunidad.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x26.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/XnYNV6pOz3U',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '05', '11'),
        static::FIELD_DURATION => 83,
      ],[
        static::FIELD_NAME => 'Érase unas tragaperras',
        static::FIELD_SLUG => '3x27-erase-unas-tragaperras',
        static::FIELD_NATURAL_ID => '3x27',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'La comunidad obliga a Mauri a seguir siendo presidente y, para cobrar las cuotas pendientes que debe Concha, instala una máquina tragaperras. Efectivamente, Concha, Vicenta y Marisa agotan sus pensiones en la máquina, pero la sorpresa la da Isabel, que se engancha al juego hasta el punto de hacer sospechar a Juan que tiene un amante.
          Por otra parte, Lucía y Carlos siguen con los preparativos de boda; pero reaparece Alba, ya embarazadísima, y le confiesa a Carlos que el niño es fruto del pasional encuentro que tuvieron en Nochevieja.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x27.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/QjwTVidHBec',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '05', '18'),
        static::FIELD_DURATION => 79,
      ],[
        static::FIELD_NAME => 'Érase un desgobierno',
        static::FIELD_SLUG => '3x28-erase-un-desgobierno',
        static::FIELD_NATURAL_ID => '3x28',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Mauri decide adoptar la postura de presidente pasota hasta agotar la legislatura y en el vecindario reina la anarquía: Lucía instala aire acondicionado, las señoras una parabólica y Mariano una piscina en la azotea. Lo que no ha calculado Mariano es que la piscina, unido al peso de Concha, van a hundir el techo de la casa de Lucía.
          Por otra parte, Lucía cancela su boda y su padre, que ya ha hecho los preparativos, le pide que lo reconsidere. Roberto se ofrece voluntario para casarse con ella y Lucía acepta, pero Carlos, arrepentido, le pide perdón y Lucía también acepta.
          Por último, Belén, celosa de que Lucía tenga dos pretendientes y ella ninguno, conoce a un chico que resulta ser un gran aficionado al deporte. Ella, por supuesto, también se declara gran deportista y se van juntos a practicar ciclismo.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x28.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/UQt9fLMsxB0',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '05', '25'),
        static::FIELD_DURATION => 78,
      ],[
        static::FIELD_NAME => 'Érase un regalo de boda',
        static::FIELD_SLUG => '3x29-erase-un-regalo-de-boda',
        static::FIELD_NATURAL_ID => '3x29',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Lucía invita a todos los vecinos a su boda, pero a cambio tienen que hacerle, lógicamente, un regalo. Como ya tiene la casa amueblada, les pasa una lista de bodas llena de caprichos caros y los vecinos deciden unirse para regalarle un sillón relajante. Lo trasladan en secreto a la comunidad donde todos quieren probar los masajes que da el sillón.
          Por otra parte, la comunidad se divide entre chicos y chicas para acudir a las respectivas despedidas de solteros, pero Mauri y Fernando no saben muy bien donde encajar. Mauri, harto de que sea Fernando el que siempre parece que tiene menos pluma, cambia los papeles y le manda a la despedida de las chicas, mientras él se va con loschicos.
          Por último, Juan quiere retomar la vida familiar, pero sus hijos no le hacen caso. Isabel le hace ver que eso es lógico porque ya son mayores, pero a Juan se le ocurre la idea de tener otro hijo, idea que Isabel no comparte en absoluto aunque se dispongan a intentarlo.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x29.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/qgp9zPwF-Y0',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '06', '01'),
        static::FIELD_DURATION => 73,
      ],[
        static::FIELD_NAME => 'Érase otra boda',
        static::FIELD_SLUG => '3x30-erase-otra-boda',
        static::FIELD_NATURAL_ID => '3x30',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Los preparativos para la boda siguen adelante y las de Lucía y Roberto también. Además, justo el día anterior, la comunidad de vecinos se entera de los cuernos que Roberto le puso a Lucía con la azafata.
          Por otra parte, José Miguel tiene otro incidente con la policía por los grafitis y deciden mandarle a un internado a Irlanda. Natalia, con el dinero ahorrado en el videoclub, también se ha independizado y Alex está en Ibiza poniendo copas. Juan e Isabel están, al fin, solos, pero entonces descubren que se aburren.
          Una antigua amante de Mariano a la que hacía ocho años que no veía, reaparece en su vida tras la muerte de su marido. Pero durante los veintiséis años que estuvieron de amantes Mariano le había estado mintiendo sobre su vida y recurre a Juan Cuesta para que le deje su casa y preparar allí una cena romántica.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x30.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/8L4PpqgZbqc',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '06', '08'),
        static::FIELD_DURATION => 82,
      ],[
        static::FIELD_NAME => 'Érase una luna de miel',
        static::FIELD_SLUG => '3x31-erase-una-luna-de-miel',
        static::FIELD_NATURAL_ID => '3x31',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Lucía no quiere saber nada del viaje de novios pero los vecinos sí. Le organizan una fiesta sorpresa y ella, aunque está enfadada con todos, les pasa los billetes del viaje de su luna de miel para que los sorteen.
          Emilio y Belén retoman su relación y, además, Emilio consigue sus primeras vacaciones. No les han tocado los billetes pero Ana, como trabaja de azafata, les consigue unos gratis para Cuba. El problema es que Belén no ha salido nunca de España y Emilio ni siquiera ha montado en avión.
          Por otra parte, Isabel y Juan toman la decisión de adoptar un niño, pero no van a ser ellos solos, ya que Mauri y Fernando también se deciden porque ven que Bea va rehaciendo cada día su vida y disfrutan de Ezequiel cada vez menos.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x31.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/nC9Lm2Y3oZE',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '06', '15'),
        static::FIELD_DURATION => 79,
      ],[
        static::FIELD_NAME => 'Érase un cirujano plástico',
        static::FIELD_SLUG => '3x32-erase-un-cirujano-plastico',
        static::FIELD_NATURAL_ID => '3x32',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Juan Cuesta sigue haciéndoles la vida imposible como casero a Carmen y a Bea y ellas, hartas de que no les deje ni poner un cuadro, deciden buscar otro piso. Juan enseguida encuentra dos nuevos inquilinos, Juan Luis y Rafa, dos cuarentones separados que se instalan temporalmente decididos a disfrutar de la vida. Uno de ellos, Juan Luis, es un reputado cirujano plástico que va a despertar un desmedido interés en la comunidad de vecinos por la estética personal.
          Belén encuentra trabajo de socorrista en la piscina de una urbanización, a pesar de no saber nadar, y Lucía busca la nulidad matrimonial a través del padre Miguel y contrata a Fernando como abogado.
          Por su parte, Mauri y Fernando no saben como desembarazarse del hijo que han adoptado, Chenchu, que además se ha hecho amigo de José Miguel y Juan Cuesta ya empieza a quejarse de la mala influencia que ejerce.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x32.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/kQAbCv6lurQ',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '06', '22'),
        static::FIELD_DURATION => 81,
      ],[
        static::FIELD_NAME => 'Érase unas vacaciones',
        static::FIELD_SLUG => '3x33-erase-unas-vacaciones',
        static::FIELD_NATURAL_ID => '3x33',
        static::FIELD_SEASON => '3',
        static::FIELD_SUMMARY =>
          'Rafael, el padre de Lucía, invita a su hija y a toda la comunidad de vecinos a disfrutar de unas vacaciones en un complejo de bungalows que ha comprado en Benidorm y que piensa derruir para construir un gran hotel.
          Los vecinos se muestran entusiasmados con la idea, se preparan para disfrutar de unas vacaciones gratis.
          Pero no todos aceptan la invitación; Lucía y Carlos prefieren ir a un buen hotel. Mientras, Mauri tiene que trabajar y se queda en Madrid y Belén y Emilio ya se han ido al camping.
          Pero, como es habitual en esta loca comunidad de vecinos, las cosas no van a salir como ellos piensan y las vacaciones van a traer muchas sorpresas a todos.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/3x33.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/irca8N_D9gk',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '06', '29'),
        static::FIELD_DURATION => 69,
      ]
    ];
  }

  public function getFourthSeasonChapters()
  {
    return [
      [
        static::FIELD_NAME => 'Érase un despertar',
        static::FIELD_SLUG => '4x01-erase-un-despertar',
        static::FIELD_NATURAL_ID => '4x01',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'Los vecinos han iniciado las obras en sus pisos, pero el seguro se niega a pagarles el arreglo alegando que el incendio ha sido provocado.
          Pero ése no va a ser el único problema al que se enfrente el presidente de la comunidad. Paloma está despierta en el hospital y aunque está completamente desorientada y no se acuerda de nada, en cualquier momento puede recobrarse y volver a casa. Isabel, por si las moscas, ha desaparecido, y el único consuelo que le queda a Juan Cuesta es que Natalia ha vuelto a casa.
          Lucía vuelve de pasar unos días en Málaga donde ha conocido a Yago, un ecologista activo que le hace cambiar su concepto de la vida.
          Concha le sube el alquiler a Belén y la amenaza con poner el piso en venta. Belén, que ahora tiene trabajo de vendedora de seguros, se decide a comprarlo y pide una hipoteca al banco.
          Fernando está agobiado porque no le gusta su trabajo y Mauri, para ayudarle a que se independice y monte su propio despacho, accede a trabajar de tertuliano en un programa del corazón.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x01.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/Tjan12ollCY',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '11', '09'),
        static::FIELD_DURATION => 88,
      ], [
        static::FIELD_NAME => 'Érase un cultivo',
        static::FIELD_SLUG => '4x02-erase-un-cultivo',
        static::FIELD_NATURAL_ID => '4x02',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'La investigación policial del atropello de Paloma avanza satisfactoriamente para Juan, pero Isabel está cada vez más preocupada.
          Belén, avalada por su madre, está a punto de conseguir la hipoteca. Solamente teme no pasar la prueba de esfuerzo que le hacen en el examen médico para el seguro de vida y decide doparse. Marisa y Vicenta también acuden al médico a hacerse un chequeo, pero al contrario de lo que pensaban, es Vicenta la que tiene un problema y va a tener que operarse. Para relajarse, le pide alguna infusión a Isabel y ella le aconseja, pensando que nunca va a saber como conseguirla, que fume marihuana.
          Lucía ya no sabe qué hacer para atraer a Yago, y cuando él se presenta en su casa y le dice que le ha echado la novia, enseguida le sugiere que se quede a vivir en la suya.
          Fernando no encuentra local para su oficina y atiende en su casa a los clientes. Los primeros en aparecer son un matrimonio gay que quiere divorciarse.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x02.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/ytsa_gCoKqI',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '11', '16'),
        static::FIELD_DURATION => 90,
      ], [
        static::FIELD_NAME => 'Érase un desvío provisional',
        static::FIELD_SLUG => '4x03-erase-un-desvio-provisional',
        static::FIELD_NATURAL_ID => '4x03',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'La calle Desengaño sufre un inusual atasco debido a la construcción de un parking en la plaza que obliga a desviar temporalmente el tráfico. Los vecinos protestan por el ruido y Juan Cuesta inicia una recogida de firmas por el barrio para elevar una queja al Ayuntamiento.
          Roberto regresa de su exilio en Puerto Banús completamente recuperado de su ruptura con Lucía, pero a Carlos no le sucede lo mismo y cada día está peor. Entre los dos alquilan el piso de Nieves que ahora está vacío.
          Fernando contrata a Natalia de secretaria y Mauri se cela. Mientras Vicenta se recupera de la operación, Concha, en cambio, entra en una depresión porque la echan de las juntas al dejar de ser propietaria. Belén, que ahora sí participa en ellas, acude a su primera junta y se entera de la derrama que debe pagar.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x03.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/aP2U1bPUaD4',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '11', '23'),
        static::FIELD_DURATION => 80,
      ], [
        static::FIELD_NAME => 'Érase una sequía',
        static::FIELD_SLUG => '4x04-erase-una-sequia',
        static::FIELD_NATURAL_ID => '4x04',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'Debido a la sequía el Ayuntamiento de la ciudad ha restringido el suministro de agua a sólo cinco horas al día. Los vecinos convocan una junta y deciden excavar un pozo en el patio.
          Emilio consigue trabajo por las noches de agente de seguridad en un centro comercial y lo oculta a los vecinos.
          Por su parte Belén, que está harta de estar sola, ha decidido volver con él. Y es que el idilio entre Bea y Ana cada día se hace más insufrible para Belén y Carmen, ambas sin pareja.
          Entretanto, Lucía sigue sin conseguir que Yago le dedique toda su atención. Por otra parte, el padre de Fernando viene a pasar unos días con su hijo y divertirse en la noche gay.
          Por último, Natalia se ofrece como madre de alquiler a un amigo de Fernando y su esposa que no pueden tener hijos.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x04.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/hSuCxuNyrHg',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '11', '30'),
        static::FIELD_DURATION => 85,
      ], [
        static::FIELD_NAME => 'Érase un banco en la acera',
        static::FIELD_SLUG => '4x05-erase-un-banco-en-la-acera',
        static::FIELD_NATURAL_ID => '4x05',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'El Ayuntamiento coloca un banco en la acera justo delante del telefonillo del portal. Los vecinos protestan y le piden a Juan que consiga que lo retiren. Pero Vicenta, Concha y Marisa cambian de opinión cuando se convierte en el lugar de reunión y confidencias de una extraña pareja: una mujer guardia civil y un joven subsahariano que viven un amor imposible.
          Para Juan Cuesta todo son problemas. De un lado no sabe de donde saca Natalia tanto dinero, y, de otro, Marta, la presidenta de la otra comunidad, no cesa de mandarle mensajes de amor al móvil, y aunque él está enamorado de Isabel, no quiere dejar pasar la que puede ser su última oportunidad.
          Bea necesita tiempo libre para salir con Ana, y Mauri para escribir su libro. Deciden contratar una niñera y es Fernando quien, a través de internet, contrata a una monja que en principio parece ser la candidata perfecta.
          Desde que es propietaria a Belén se le acumulan las deudas. Entre la derrama y el dinero que debe a Lucía su vida es un infierno. Carmen le sugiere que grabe un video de porno casero con Emilio para sacar dinero.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x05.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/dWc9MSkOdn0',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '12', '14'),
        static::FIELD_DURATION => 83,
      ], [
        static::FIELD_NAME => 'Érase una Navidad convulsa',
        static::FIELD_SLUG => '4x06-erase-una-navidad-convulsa',
        static::FIELD_NATURAL_ID => '4x06',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'Los vecinos morosos pagan las derramas y en la comunidad reina la armonía. Como se acerca la Navidad, convocan una cena de confraternización para la Nochebuena en casa de Juan Cuesta.
          A la cena se apuntan todos menos Mauri, que pensaba invitar a sus padres y salir a cenar con Fernando, pero a última hora recibe la noticia de la muerte de su padre.
          Juan intenta recuperar a Isabel, que se ha refugiado en casa de Lucía, y le pide que se case con él. Isabel vuelve a casa, pero Juan tiene que hablar con Marta y dejarla definitivamente, algo con lo que Marta no va a estar de acuerdo ya que sigue decidida a luchar por él.
          Mientras Emilio muestrasignos de arrepentimiento por lo mal que trata a Belén y decide gastarse el dinero del vídeo porno en invitarla a un viaje, ella ha encontrado trabajo en una empresa de moda y conoce a otro hombre.
          Por su parte Lucía, sola y sin Yago, tiene una recaída con Roberto.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x06.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/dzBY5SbOMU4',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '12', '21'),
        static::FIELD_DURATION => 90,
      ], [
        static::FIELD_NAME => 'Érase la tercera Nochevieja',
        static::FIELD_SLUG => '4x07-erase-la-tercera-nochevieja',
        static::FIELD_NATURAL_ID => '4x07',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'Para no repetir el caos de Nochebuena, se celebra una junta y Juan Cuesta prohíbe celebrar más fiestas comunitarias el día de Nochevieja. Así pues, cada uno debe celebrarlo por su cuenta.
          Pedro invita a Belén a cenar y le pide que se case con él. Emilio sigue empeñado en que le acompañe en el viaje a China y que le espera en el aeropuerto.
          Mauri y Fernando se van a una isla perdida en el océano Índico, pero Mauri tiene remordimientos porque Ezequiel va a celebrar su primer cumpleaños con las campanadas y él no va a estar.
          Mariano compra un pavo vivo a unos laboratorios que lo utilizaban para experimentar con animales y se lo vende a Vicenta que ellas sí han decido montar por su cuenta una fiesta en casa.
          Lucía convoca a los tres pretendientes y les comunica que está enamorada de Yago. Le pide dinero a su padre para la derrama y otros gastos y éste se apunta a cenar para conocer a su nuevo novio.
          Los padres de Isabel deciden venir a cenar con ellos. Aún no saben que ha dejado a Andrés y que vive con Juan. Isabel decide no decírselo y le pide a Andrés que haga de marido y a Juan que vaya con sus hijos a cenar a otra parte.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x07.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/6ri4WBMoQOI',
        static::FIELD_RELEASE_DATE => Carbon::create('2005', '12', '31'),
        static::FIELD_DURATION => 89,
      ], [
        static::FIELD_NAME => 'Érase unos propósitos de año nuevo',
        static::FIELD_SLUG => '4x08-erase-unos-propositos-de-ano-nuevo',
        static::FIELD_NATURAL_ID => '4x08',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'Isabel intenta rehacer y estimular su vida sexual con Juan Cuesta y acaba metiéndole en un conflicto político-vecinal. Por otra parte, a Mauri se le acaba el plazo para presentar el libro, pero está bloqueado y Mariano se ofrece a ayudarle.
          La madre de Belén sigue instalada en el piso y va a entrar en conflicto con el resto de las chicas. Mientras tanto, Belén está ocupada con los preparativos de la boda.
          Por último, Marisa empieza a sufrir persecución por fumadora y al final, opta por dejar el tabaco.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x08.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/HEHJaOWxhBY',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '01', '11'),
        static::FIELD_DURATION => 89,
      ], [
        static::FIELD_NAME => 'Érase una presidenta títere',
        static::FIELD_SLUG => '4x09-erase-una-presidenta-titere',
        static::FIELD_NATURAL_ID => '4x09',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'Belén empieza su mandato de presidenta de la comunidad con problemas porque las señoras la presionan para echar a Andrés Guerra del ático.
          Mientras, Juan Cuesta intenta ocupar su tiempo libre aprendiendo a tocar el piano.
          Por otra parte, Roberto se echa novia pero va a tener que soportar los celos de Carlos.
          Y, por último, Ana encuentra trabajo de modelo y se hace muy popular, lo que va a despertar también los celos de Bea, su pareja.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x09.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/O1c0IEB4hBo',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '01', '18'),
        static::FIELD_DURATION => 72,
      ], [
        static::FIELD_NAME => 'Érase un par de bodas',
        static::FIELD_SLUG => '4x10-erase-un-par-de-bodas',
        static::FIELD_NATURAL_ID => '4x10',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'Belén y Paco preparan sus respectivas bodas, Belén con Pedro y Paco con Lourdes. Sin embargo, la noche anterior a la ceremonia, Pedro le pide a Belén que firme la separación de bienes.
          Por otra parte, Juan Cuesta le vende el 2º B a Carlos y se encuentra con 90.000 euros en dinero negro que tiene que esconder en casa.
          Carlos ingresa en una secta extraña y el consejo de sabios se une para intentar que salga de ella lo antes posible.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x10.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/ipoOtixtIqI',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '01', '25'),
        static::FIELD_DURATION => 89,
      ], [
        static::FIELD_NAME => 'Érase una conexión wifi',
        static::FIELD_SLUG => '4x11-erase-una-conexion-wifi',
        static::FIELD_NATURAL_ID => '4x11',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'Juan Cuesta instala una conexión wifi de internet de la que los vecinos van a sacar provecho.
          Mauri descubre un piso que se alquila en el edificio de enfrente y cree que puede se un buen sitio para que Fernando instale su oficina, pero alquilarlo no va a ser fácil ya que otros vecinos también lo quieren, y además el dueño es un señor mayor y para colmo homófobo.
          Belén entra en contacto con el hijo de Pedro, ahora convertido en único heredero, y su madre le incita a que se lo ligue.
          Emilio, por su parte, ve la oportunidad de sacar un dinero extra acudiendo a las televisiones para contar la historia.
          Por último, el ático se ha quedado libre y la comunidad decide alquilarlo.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x11.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/mCMiF39d9CI',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '02', '01'),
        static::FIELD_DURATION => 81,
      ], [
        static::FIELD_NAME => 'Érase un vudú',
        static::FIELD_SLUG => '4x12-erase-un-vudu',
        static::FIELD_NATURAL_ID => '4x12',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'María Jesús cada día tiene más problemas con Belén y empieza a hacerle vudú a Lucía para que le venda su piso.
          Juan ya no aguanta más y quiere irse a vivir a un adosado, pero ahora son los vecinos los que se preocupan su marcha ya que a fin de cuentas es él quien siempre les soluciona los problemas.
          Belén empieza a trabajar de telefonista de asistencia en carretera y Emilio le gasta una broma, pero se le va a ir de las manos.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x12.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/9stkzaZn64o',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '02', '08'),
        static::FIELD_DURATION => 86,
      ], [
        static::FIELD_NAME => 'Érase un día de San Valentín',
        static::FIELD_SLUG => '4x13-erase-un-dia-de-san-valentin',
        static::FIELD_NATURAL_ID => '4x13',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'Las parejas de la comunidad celebran san Valentín y se envían ramos de flores. Emilio intenta recuperar a Belén, Juan a Isabel, Fernando quiere tener un detalle con Mauri y Yago con Lucía. Pero según van llegando los ramos, Emilio se va a hacer un lío con las tarjetas y las cambia todas.
          Mariano alquila el ático de picadero por horas, no sólo a los vecinos sino también a gente de fuera de la comunidad.
          Bea y Ana rompen su relación por culpa de los celos. Ana se refugia en casa de Carlos y Roberto y provoca una crisis entre ambos.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x13.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/4bQoSY9ZMHA',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '02', '15'),
        static::FIELD_DURATION => 79,
      ], [
        static::FIELD_NAME => 'Érase una nueva vida',
        static::FIELD_SLUG => '4x14-erase-una-nueva-vida',
        static::FIELD_NATURAL_ID => '4x14',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'Emilio y Belén consiguen engañar al seguro y cobrar el dinero. Deciden huir y comenzar una nueva vida juntos, lejos de la comunidad de vecinos.
          Manolo ha vuelto con la intención de recuperar a Marisa, pero ella no quiere saber nada de él. En cambio, Vicenta sí, lo que provoca que las hermanas se enfaden, dejen de hablarse y Marisa se vaya a vivir con Mauri y Fernando.
          Mientras tanto, Juan sigue en la pensión Loli, e Isabel, muy arrepentida, intenta hacerle volver.
          Bea está llena de remordimientos porque ha destruido una familia y ahora no sabe cómo deshacerse de esa relación sin que Ana se entere.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x14.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/qruFMagazF8',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '02', '22'),
        static::FIELD_DURATION => 79,
      ], [
        static::FIELD_NAME => 'Érase un consuelo',
        static::FIELD_SLUG => '4x15-erase-un-consuelo',
        static::FIELD_NATURAL_ID => '4x15',
        static::FIELD_SEASON => '4',
        static::FIELD_SUMMARY =>
          'Capítulo especial en el que se muestran escenas inéditas y tomas falsas previas al lanzamiento de la temporada 5.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/4x15.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/bfr_w8e_hJk',
        static::FIELD_DURATION => 23,
      ],
    ];
  }

  public function getFifthSeasonChapters()
  {
    return [
      [
        static::FIELD_NAME => 'Érase una extradición',
        static::FIELD_SLUG => '5x01-erase-una-extradiccion',
        static::FIELD_NATURAL_ID => '5x01',
        static::FIELD_SEASON => '5',
        static::FIELD_SUMMARY =>
          'La policía encuentra a Belén y a Emilio en las Bahamas y los extradita a España, donde pasan a disposición judicial.
          Mientras, en casa de los Cuesta las cosas siguen complicándose, sobre todo para Juan, que no entiende nada de lo que ocurre a su alrededor. Isabel sufre los primeros síntomas de la menopausia y no quiere que Juan se entere, y Natalia, que ya está en su sexto mes de embarazo, ha encontrado novio, pero no cree que Juan lo apruebe y prefiere no decírselo.
          En casa de Lucía y mientras le reforman el chalet, se instala a vivir provisionalmente su padre, Rafael. María Jesús, la madre de Belén, enseguida se interesa por el nuevo inquilino.
          Fernando tiene que viajar a Japón durante un mes para cerrar un acuerdo con una empresa local y Mauri teme que su boda termine por no celebrarse.
          Por último, la crisis de Paco con Lourdes se agrava cada vez más, y para colmo, Paco ve peligrar su empleo porque Carlos ha puesto el videoclub en venta.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/5x01.jpg',
        static::FIELD_VIDEO_URL => 'https://mega.nz/embed/43gRFCiR#6sL7-5-XNHLy7UryjvCwswO65b7-rcpbxt9dwZyOX8Q',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '04', '06'),
        static::FIELD_DURATION => 84,
      ], [
        static::FIELD_NAME => 'Érase un colapso',
        static::FIELD_SLUG => '5x02-erase-un-colapso',
        static::FIELD_NATURAL_ID => '5x02',
        static::FIELD_SEASON => '5',
        static::FIELD_SUMMARY =>
          'A Juan le dan el alta y vuelve a casa. Isabel intenta convencerle para que deje la presidencia y evite los problemas. Pero va a tener que empezar solucionando el más urgente: ahora hay dos porteros, Emilio y Mariano.
          Rafael ha comprado el videoclub y le da a Paco un mes de plazo para que ponga un negocio rentable. Intenta también hacerse con el piso de Carlos pero alguien se le ha adelantado. Es Higinio, que se viene a vivir al centro con su familia: Mamen, su mujer, Candela, la hija pequeña, y Raúl, su cuñado.
          Belén deja a Emilio, pero él le pide que intenten solucionarlo yendo a terapia de pareja con un psicólogo argentino que le ha recomendado Paco.
          Por último, Juan y Rafael se alían para echar a Yago, que no tiene papeles, del país.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/5x02.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/ZawV2nNEBkI',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '04', '20'),
        static::FIELD_DURATION => 77,
      ], [
        static::FIELD_NAME => 'Érase un robot de cocina',
        static::FIELD_SLUG => '5x03-erase-un-robot-de-cocina',
        static::FIELD_NATURAL_ID => '5x03',
        static::FIELD_SEASON => '5',
        static::FIELD_SUMMARY =>
          'Mamen, la mujer de Higinio, invita a todos los vecinos a una cena en su casa para conocerse mejor. Mientras tanto, a Belén, que sigue con el psicólogo, le entran remordimientos por estar engañando a Emilio e intenta romper con él.
          Mauri está completamente deprimido por la ausencia de Fernando. Bea y Ana le convencen para que se apunte con ellas a un gimnasio.
          Yago empieza a trabajar en el colegio de Juan Cuesta y monta una huelga de profesores. Y, por último, José Miguel está cada día más enamorado de Candela, pero ella conoce a Pablo y se enamora de él.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/5x03.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/XzzSsvnaujw',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '04', '27'),
        static::FIELD_DURATION => 88,
      ], [
        static::FIELD_NAME => 'Érase un presidente de vacaciones',
        static::FIELD_SLUG => '5x04-erase-un-presidente-de-vacaciones',
        static::FIELD_NATURAL_ID => '5x04',
        static::FIELD_SEASON => '5',
        static::FIELD_SUMMARY =>
          'Juan e Isabel preparan su viaje a Canarias. Yago y Natalia se apuntan a ir con ellos pero José Miguel consigue quedarse sólo y montar una fiesta para conquistar a Candela.
          Rafael cierra los dos balcones de su piso y el resto de los vecinos, aprovechando que no está Juan, también se apuntan.
          Ana y Bea se reconcilian y deciden tener otro niño. Esta vez es Ana la que se va a quedar embarazada.
          Raúl-Raquel invita a Emilio al cine y él acepta encantado. Es el único del vecindario que no sabe que Raquel es un hombre pero nadie se lo dice.
          Vicenta se venga del puñetazo que le dio María Jesús y le azuza a Valentín para que le muerda. Ella decide poner una denuncia.
          Por último, Paco propone a Rafael montar en el videoclub un local para que los ejecutivos se echen una siesta.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/5x04.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/PzQoe3adRQM',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '05', '04'),
        static::FIELD_DURATION => 83,
      ], [
        static::FIELD_NAME => 'Érase un anuncio',
        static::FIELD_SLUG => '5x05-erase-un-anuncio',
        static::FIELD_NATURAL_ID => '5x05',
        static::FIELD_SEASON => '5',
        static::FIELD_SUMMARY =>
          'En casa de Mamen van a grabar un anuncio, pero a última hora, los de la agencia cambian de idea y deciden que la cocina de los Cuesta es menos artificial y que lo van a grabar allí. Los Cuesta están encantados, porque así consiguen algo de dinero ya que Natalia en Tenerife los ha dejado en números rojos y hasta el día treinta no pueden disponer de dinero alguno. De hecho, su situación es límite y ya les han cortado el agua, pero ellos se niegan a pedir dinero prestado a los vecinos.
          Por otra parte, Bea, Mauri y Fernando no saben cómo decirle a Ana que el padre de su hijo va a ser Mariano.
          Mientras tanto, Emilio continúa su relación con Raúl-Raquel, aunque con muchas dudas. Mamen le invita a cenar a su casa e Higinio está encantado con la idea de deshacerse de su cuñado.
          Belén se percata del interés que despierta Rafael en su madre y está encantada con la idea. Rafael le confiesa a su mayordomo que a pesar de todo el dinero que tiene, se siente sólo.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/5x05.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/gQaRHURB2hI',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '05', '11'),
        static::FIELD_DURATION => 81,
      ], [
        static::FIELD_NAME => 'Érase un billete de cincuenta euros',
        static::FIELD_SLUG => '5x06-erase-un-billete-de-cincuenta-euros',
        static::FIELD_NATURAL_ID => '5x06',
        static::FIELD_SEASON => '5',
        static::FIELD_SUMMARY =>
          'Marisa y Concha deciden abandonar a Vicenta e irse a una residencia, que ahora tienen de todo.
          Mientras tanto, a Vicenta le han colado un billete falso de cincuenta euros. En la peluquería se lo rechazan y cuando llega al banco con la intención de que se lo cambien por otro, Mariano le aconseja que elija entre las dos opciones: “ser buena ciudadana, dárselo al banco y perder cincuenta euros, o encasquetárselo a alguien”.
          Tanto Belén, como Ana y Bea, echan de menos a María Jesús, aunque por distintos motivos. Belén se siente culpable y deciden prepararle una fiesta de cumpleaños.
          Candela quiere una scooter, pero sus padres no se la compran. José Miguel, que escucha la conversación, ve la oportunidad y se ofrece a darle una vuelta en su moto. El problema es que no tiene y tendrá que conseguir una como sea.
          Paco se separa de Lourdes y Pablo se ve obligado a hacerle un sitio en el ático.
          Rafael abandona la comunidad, ya tiene su spa terminado y regresa a su chalet.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/5x06.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/Emxr8Gb-8gg',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '05', '18'),
        static::FIELD_DURATION => 79,
      ], [
        static::FIELD_NAME => 'Érase un escándalo',
        static::FIELD_SLUG => '5x07-erase-un-escandalo',
        static::FIELD_NATURAL_ID => '5x07',
        static::FIELD_SEASON => '5',
        static::FIELD_SUMMARY =>
          'Rafael encarga a Emilio que limpie el piso porque se lo va a dejar a un amigo suyo, un «señor muy importante», para un encuentro con su amante. En cuanto se enteran, los vecinos montan guardia para saber de quién se trata.
          Los Cuesta necesitan otra habitación para José Miguel. Higinio se encargará de la obra, pero para que trabaje con tranquilidad, tienen que dejar el piso vacío. Vicenta, que sigue sola, les ofrece su casa a Juan e Isabel, y Mamen deja a José Miguel que comparta habitación con Candy.
          Fernando vuelve a casa cansado y se queda dormido viendo una película con Mauri. Éste se ofende y se lo echa en cara al día siguiente, pero Fernando decide vengarse',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/5x07.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/wQm9ZqLvA1s',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '05', '25'),
        static::FIELD_DURATION => 72,
      ], [
        static::FIELD_NAME => 'Érase un descubrimiento macabro',
        static::FIELD_SLUG => '5x08-erase-un-descubrimiento-macabro',
        static::FIELD_NATURAL_ID => '5x08',
        static::FIELD_SEASON => '5',
        static::FIELD_SUMMARY =>
          'Los Cuesta siguen con obras en su casa y Mariano decide aprovechar también para hacer algunos arreglos en la portería. Tira un tabique y aparecen los huesos de un esqueleto humano. Se lo comunica a Juan e Isabel y, entre todos, inician una investigación.
          Bea, Ana y Fernando están de acuerdo en que Ezequiel debe ir a una guardería. Mauri es el único que se niega en rotundo porque de pequeño tuvo una mala experiencia con una profesora.
          Paco y Belén continúan su relación a escondidas. Belén quiere hacerlo público pero Paco aún no se atreve.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/5x08.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/rprJBkKwy2g',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '06', '01'),
        static::FIELD_DURATION => 79,
      ], [
        static::FIELD_NAME => 'Érase una emisora pirata',
        static::FIELD_SLUG => '5x09-erase-una-emisora-pirata',
        static::FIELD_NATURAL_ID => '5x09',
        static::FIELD_SEASON => '5',
        static::FIELD_SUMMARY =>
          'El padre Miguel le alquila a Paco la trastienda del videoclub para montar una radio pirata. Marisa, Vicenta y Concha aprovechan para hacer un programa de radio-patio.
          Solo falta un día para la boda de Mauri y Fernando, ambos están nerviosos y surgen las dudas.
          Belén y Paco siguen con su relación. Mariano aconseja a Emilio que se haga la víctima y les haga sentirse culpables para estropearles la relación.
          Por último, Natalia ha decidido dar a luz en casa, pero la obra aún está sin terminar. Los Cuesta le alquilan a Rafael su piso durante un mes.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/5x09.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/Vc6Djz3Zqak',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '06', '08'),
        static::FIELD_DURATION => 75,
      ], [
        static::FIELD_NAME => 'Érase un funeral con sorpresa',
        static::FIELD_SLUG => '5x10-erase-un-funeral-con-sorpresa',        static::FIELD_NATURAL_ID => '5x10',
        static::FIELD_SEASON => '5',
        static::FIELD_SUMMARY =>
          'Los vecinos han pasado la noche en vela porque la nieta de los Cuesta no para de llorar. Natalia está pasando por una depresión post-parto y es Yago el que se tiene que ocupar la niña, a la que ha puesto Yamiley de nombre.
          Ese día es el funeral de Paloma y radio-patio prepara una programación especial para cubrir el evento. Juan, Isabel y José Miguel, más algunos de los vecinos, acuden al tanatorio donde Paloma va a ser incinerada.
          El Consejo de Sabios culpabiliza a Paco por haberle robado la novia a Emilio. Paco se va de la buhardilla de Pablo y se instala en casa de Belén.
          Por último, Mauri al fin le descubre a Fernando el destino de
          su viaje de novios: se van de safari a Kenia. Pero Fernando no se entusiasma tanto como Mauri esperaba.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/5x10.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/Ot8eMGAdNJM',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '06', '15'),
        static::FIELD_DURATION => 89,
      ], [
        static::FIELD_NAME => 'Érase una lista de bodas',
        static::FIELD_SLUG => '5x11-erase-una-lista-de-bodas',
        static::FIELD_NATURAL_ID => '5x11',
        static::FIELD_SEASON => '5',
        static::FIELD_SUMMARY =>
          'Emilio y Belén necesitan dinero inmediatamente para pagar al abogado y reparten las invitaciones de boda entre los vecinos incluyendo una lista de bodas falsa con regalos carísimos.
          El problema es que los habitantes de Desengaño, 21 están sin dinero: los Cuesta tienen que pagar la reforma, Mauri y Fernando a hacienda, Bea y Ana quieren ahorrar para buscarse un sitio donde vivir y las señoras solamente tienen su pensión.
          Mientras tanto, Vicenta sigue sin aparecer y los Cuesta ya están muy preocupados. Para colmo, Rafael se venga de ellos por haberle denunciado por la emisora pirata y los echa de su casa.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/5x11.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/ir9p6ZfxcaI',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '06', '22'),
        static::FIELD_DURATION => 77,
      ], [
        static::FIELD_NAME => 'Érase un paripé',
        static::FIELD_SLUG => '5x12-erase-un-paripe',
        static::FIELD_NATURAL_ID => '5x12',
        static::FIELD_SEASON => '5',
        static::FIELD_SUMMARY =>
          'Emilio y Belén ensayan la discusión que piensan interpretar ante el altar, a última hora, para cancelar la boda. La ceremonia es al día siguiente, a las dos de la tarde en un descampado, pero dos horas antes, ambos tienen que acudir al juicio por estafa que tienen pendiente.
          Rafael y María Jesús le regalan a Belén un todoterreno de lujo y el vestido de novia diseñado por Vittorio y Lucchino. Mientras, Mariano recibe con gran disgusto la noticia de que Emilio ha invitado a su madre a la boda.
          Por otra parte, la obra en casa de los Cuesta sigue parada. Juan ha conseguido los papeles para la licencia y ya sólo le falta la autorización de la comunidad de vecinos.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/5x12.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/OCE0RFXvd74',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '06', '29'),
        static::FIELD_DURATION => 72,
      ], [
        static::FIELD_NAME => 'Érase un adiós',
        static::FIELD_SLUG => '5x13-erase-un-adios',
        static::FIELD_NATURAL_ID => '5x13',
        static::FIELD_SEASON => '5',
        static::FIELD_SUMMARY =>
          'Belén y Emilio se esconden en la pensión Loli una semana porque los vecinos piensan que están de luna de miel en la playa. Pero Paco, cada vez más celoso, descubre el engaño de la boda y se lo cuenta a todos.
          Higinio termina al fin la obra en casa de los Cuesta, pero Mamen ha comprado muebles nuevos para la habitación y, ante la falta de espacio, obliga a su marido a tirar el tabique que separa ambas casas, quitándole unos metros a la habitación de los Cuesta.
          Por último, Mariano también se pone a reformar la portería pero se va a encontrar con una desagradable sorpresa para todo el vecindario: hay termitas.',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/chapters/5x13.jpg',
        static::FIELD_VIDEO_URL => 'https://www.youtube.com/embed/vO00kOK8Lzs',
        static::FIELD_RELEASE_DATE => Carbon::create('2006', '07', '06'),
        static::FIELD_DURATION => 74,
      ],
    ];
  }
}
