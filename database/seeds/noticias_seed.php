<?php

use Illuminate\Database\Seeder;

class noticias_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Noticias::create(['tipo' =>'Del estado','imagen'=>'http://imgfz.com/i/8vK7ejq.png', 'fuente'=>'GESTION','descripcion'=>'Farmacias serán multadas por no informar a autoridad, precios de medicamentos contra COVID-19.','url'=>'https://gestion.pe/economia/farmacias-seran-multadas-con-s-8600-por-no-informar-de-precios-de-medicamentos-contra-covid-19-medicinas-farmacos-coronavirus-peru-nndc-noticia/']);
        App\Noticias::create(['tipo' =>'Del estado','imagen'=>'http://imgfz.com/i/hVLMnWx.png', 'fuente'=>'GESTION','descripcion'=>'Laboratorios podrán vender medicamentos para tratamiento del COVID-19 directamente a usuarios.','url'=>'https://gestion.pe/economia/farmacias-seran-multadas-con-s-8600-por-no-informar-de-precios-de-medicamentos-contra-covid-19-medicinas-farmacos-coronavirus-peru-nndc-noticia/']);
        App\Noticias::create(['tipo' =>'Del estado','imagen'=>'http://imgfz.com/i/i9ZGvsz.png', 'fuente'=>'EL COMERCIO','descripcion'=>'Pueblo Libre: Clausuran almacén clandestino que vendian productos farmacéuticos en Pueblo Libre.','url'=>'https://gestion.pe/economia/farmacias-seran-multadas-con-s-8600-por-no-informar-de-precios-de-medicamentos-contra-covid-19-medicinas-farmacos-coronavirus-peru-nndc-noticia/']);
        App\Noticias::create(['tipo' =>'Farmacias y boticas','imagen'=>'http://imgfz.com/i/suqAHZ0.png', 'fuente'=>'INKAFARMA','descripcion'=>'Demanda de medicinas para tratar síntomas de COVID-19 aumentó en cinco veces. ¿cuál es la respuesta de Inkafarma?','url'=>'https://gestion.pe/economia/farmacias-seran-multadas-con-s-8600-por-no-informar-de-precios-de-medicamentos-contra-covid-19-medicinas-farmacos-coronavirus-peru-nndc-noticia/']);
        App\Noticias::create(['tipo' =>'Farmacias y boticas','imagen'=>'http://imgfz.com/i/6XgK8O1.png', 'fuente'=>'BOTICAS ARCANGEL','descripcion'=>'¿Qué pasó con Boticas Arcángel, ahora parte de InRetail Pharma?. La cadena mantiene su presencia en el sur del país.','url'=>'https://gestion.pe/economia/farmacias-seran-multadas-con-s-8600-por-no-informar-de-precios-de-medicamentos-contra-covid-19-medicinas-farmacos-coronavirus-peru-nndc-noticia/']);
        App\Noticias::create(['tipo' =>'Farmacias y boticas','imagen'=>'http://imgfz.com/i/1PNcztU.png', 'fuente'=>'INKAFARMA','descripcion'=>'Inkafarma: 48 de sus locales atenderán al público las 24 horas durante la emergencia sanitaria.','url'=>'https://gestion.pe/economia/farmacias-seran-multadas-con-s-8600-por-no-informar-de-precios-de-medicamentos-contra-covid-19-medicinas-farmacos-coronavirus-peru-nndc-noticia/']);
        App\Noticias::create(['tipo' =>'Del estado','imagen'=>'http://imgfz.com/i/D4Ealsy.png', 'fuente'=>'FARMACIA UNIVERSAL','descripcion'=>'Digemid otorgó la primera licencia para comercializar cannabis medicinal en Perú. Khiron es la empresa...','url'=>'https://gestion.pe/economia/farmacias-seran-multadas-con-s-8600-por-no-informar-de-precios-de-medicamentos-contra-covid-19-medicinas-farmacos-coronavirus-peru-nndc-noticia/']);
        App\Noticias::create(['tipo' =>'Del estado','imagen'=>'http://imgfz.com/i/6r9BT0x.png', 'fuente'=>'RPP','descripcion'=>'Coronavirus: ¿Cuánto le costaría la vacuna al Perú?. El primer Ministro Walter Martos informó ...','url'=>'https://gestion.pe/economia/farmacias-seran-multadas-con-s-8600-por-no-informar-de-precios-de-medicamentos-contra-covid-19-medicinas-farmacos-coronavirus-peru-nndc-noticia/']);
        App\Noticias::create(['tipo' =>'Del estado','imagen'=>'http://imgfz.com/i/tPAO5m9.png', 'fuente'=>'GESTION','descripcion'=>'Ensayos clínicos de vacunas candidatas contra COVID-19 empezarían a finales de octubre en Perú.','url'=>'https://gestion.pe/economia/farmacias-seran-multadas-con-s-8600-por-no-informar-de-precios-de-medicamentos-contra-covid-19-medicinas-farmacos-coronavirus-peru-nndc-noticia/']);
    }
}
