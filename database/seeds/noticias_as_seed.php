<?php

use Illuminate\Database\Seeder;

class noticias_as_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\noticias_a::create(['tipo' =>'Del estado','imagen'=>'http://imgfz.com/i/8vK7ejq.png', 'fuente'=>'GESTION','descripcion'=>'Farmacias serán multadas por no informar a autoridad, precios de medicamentos contra COVID-19.','url'=>'https://gestion.pe/economia/farmacias-seran-multadas-con-s-8600-por-no-informar-de-precios-de-medicamentos-contra-covid-19-medicinas-farmacos-coronavirus-peru-nndc-noticia/']);
            App\noticias_a::create(['tipo' =>'Del estado','imagen'=>'http://imgfz.com/i/hVLMnWx.png', 'fuente'=>'GESTION','descripcion'=>'Laboratorios podrán vender medicamentos para tratamiento del COVID-19 directamente a usuarios.','url'=>'https://gestion.pe/economia/coronavirus-peru-laboratorios-podran-vender-medicamentos-para-tratamiento-del-covid-19-directamente-a-usuarios-nndc-noticia/?ref=gesr']);
            App\noticias_a::create(['tipo' =>'Del estado','imagen'=>'http://imgfz.com/i/i9ZGvsz.png', 'fuente'=>'EL COMERCIO','descripcion'=>'Pueblo Libre: Clausuran almacén clandestino que vendian productos farmacéuticos en Pueblo Libre.','url'=>'https://elcomercio.pe/videos/pais/pueblo-libre-clausuran-almacen-clandestino-de-productos-farmaceuticos-videos-nnav-amtv-pais-noticia/']);
            App\noticias_a::create(['tipo' =>'Farmacias y boticas','imagen'=>'http://imgfz.com/i/suqAHZ0.png', 'fuente'=>'INKAFARMA','descripcion'=>'Demanda de medicinas para tratar síntomas de COVID-19 aumentó en cinco veces. ¿cuál es la respuesta de Inkafarma?','url'=>'https://gestion.pe/economia/inkafarma-precios-covid-19-demanda-de-medicinas-para-tratar-sintomas-de-covid-19-aumento-en-cinco-veces-noticia/?ref=gesr']);
            App\noticias_a::create(['tipo' =>'Farmacias y boticas','imagen'=>'http://imgfz.com/i/6XgK8O1.png', 'fuente'=>'BOTICAS ARCANGEL','descripcion'=>'¿Qué pasó con Boticas Arcángel, ahora parte de InRetail Pharma?. La cadena mantiene su presencia en el sur del país.','url'=>'https://elcomercio.pe/economia/dia-1/inkafarma-que-paso-con-boticas-arcangel-ahora-parte-de-inretail-pharma-arcangel-mifarma-cade-2019-noticia/']);
            App\noticias_a::create(['tipo' =>'Farmacias y boticas','imagen'=>'http://imgfz.com/i/1PNcztU.png', 'fuente'=>'INKAFARMA','descripcion'=>'Inkafarma: 48 de sus locales atenderán al público las 24 horas durante la emergencia sanitaria.','url'=>'https://rpp.pe/campanas/publirreportaje/inkafarma-48-de-sus-locales-atenderan-al-publico-las-24-horas-durante-la-emergencia-sanitaria-noticia-1284936']);
            App\noticias_a::create(['tipo' =>'Del estado','imagen'=>'http://imgfz.com/i/D4Ealsy.png', 'fuente'=>'FARMACIA UNIVERSAL','descripcion'=>'Digemid otorgó la primera licencia para comercializar cannabis medicinal en Perú. Khiron es la empresa...','url'=>'https://peru21.pe/economia/cannabis-medicinal-digemid-otorgo-la-primera-licencia-para-importar-y-comercializar-estos-productos-en-peru-nndc-noticia/']);
            App\noticias_a::create(['tipo' =>'Del estado','imagen'=>'http://imgfz.com/i/6r9BT0x.png', 'fuente'=>'RPP','descripcion'=>'Coronavirus: ¿Cuánto le costaría la vacuna al Perú?. El primer Ministro Walter Martos informó ...','url'=>'https://rpp.pe/economia/economia/coronavirus-cuanto-le-costaria-la-vacuna-al-peru-oxford-astrazeneca-covid-19-noticia-1286203']);
            App\noticias_a::create(['tipo' =>'Del estado','imagen'=>'http://imgfz.com/i/tPAO5m9.png', 'fuente'=>'GESTION','descripcion'=>'Ensayos clínicos de vacunas candidatas contra COVID-19 empezarían a finales de octubre en Perú.','url'=>'https://gestion.pe/peru/ensayos-clinicos-de-vacunas-candidatas-contra-covid-19-empezarian-a-finales-de-octubre-en-peru-noticia/']);
           //
    }
}
