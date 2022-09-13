<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Seeder;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $municipios_json ='
{
    "total": 1814,
    "cantidad": 1814,
    "municipios": [
        {
            "nombre_completo": "Municipio Abra Pampa",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Abra Pampa",
            "id": "380014",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0711122979804305
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -22.8431449411788,
                "lon": -66.0322682108588
            }
        },
        {
            "nombre_completo": "Comisión Municipal Abralaite",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Abralaite",
            "id": "386014",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0127847208411429
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.1358937646647,
                "lon": -65.792209430154
            }
        },
        {
            "nombre_completo": "Municipio Humahuaca",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Humahuaca",
            "id": "380105",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.030198067686917
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.1800320816974,
                "lon": -65.3082961701977
            }
        },
        {
            "nombre_completo": "Comisión Municipal Abdón Castro Tolay",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Abdón Castro Tolay",
            "id": "386007",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0301031967545348
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.3201640640822,
                "lon": -65.9917423948271
            }
        },
        {
            "nombre_completo": "Comisión Municipal Coranzuli",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Coranzuli",
            "id": "386161",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0658896639282888
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.1946260949512,
                "lon": -66.614526284725
            }
        },
        {
            "nombre_completo": "Municipio El Aguilar",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "El Aguilar",
            "id": "380091",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0116147583369531
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.2109438569515,
                "lon": -65.6379141890805
            }
        },
        {
            "nombre_completo": "Comisión Municipal Susques",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Susques",
            "id": "386168",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0857337855575316
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.7054223180767,
                "lon": -66.5588749659573
            }
        },
        {
            "nombre_completo": "Comisión Municipal Caspalá",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Caspalá",
            "id": "386210",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00619780819598875
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.3446317099678,
                "lon": -65.083177753117
            }
        },
        {
            "nombre_completo": "Comisión Municipal Huacalera",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Huacalera",
            "id": "386175",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0108095273247069
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.3977683815659,
                "lon": -65.3946655371627
            }
        },
        {
            "nombre_completo": "Comisión Municipal Catua",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Catua",
            "id": "386154",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0401456586558512
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.6601037261503,
                "lon": -66.9591888909713
            }
        },
        {
            "nombre_completo": "Comisión Municipal Pampichuela",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Pampichuela",
            "id": "386217",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00702213053372575
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.5633995980458,
                "lon": -65.0452232272797
            }
        },
        {
            "nombre_completo": "Comisión Municipal Valle Grande",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Valle Grande",
            "id": "386238",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00330713857918789
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.4986285822548,
                "lon": -64.9305752762516
            }
        },
        {
            "nombre_completo": "Municipio Yuto",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Yuto",
            "id": "380147",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00807061483658957
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.565307635886,
                "lon": -64.6176128701431
            }
        },
        {
            "nombre_completo": "Comisión Municipal Maimará",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Maimará",
            "id": "386182",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00322197133600192
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.6423715717053,
                "lon": -65.4364492243533
            }
        },
        {
            "nombre_completo": "Municipio Calilegua",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Calilegua",
            "id": "380126",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0062697750512564
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.7336839551609,
                "lon": -64.7601461359254
            }
        },
        {
            "nombre_completo": "Comisión Municipal Vinalito",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Vinalito",
            "id": "386126",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0151172183074366
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.7307638894877,
                "lon": -64.3534086128734
            }
        },
        {
            "nombre_completo": "Municipio Libertador General San Martín",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Libertador General San Martín",
            "id": "380140",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0113094146371401
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.8316438581042,
                "lon": -64.8514667116432
            }
        },
        {
            "nombre_completo": "Municipio Fraile Pintado",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Fraile Pintado",
            "id": "380133",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0194932806819195
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.9229619249258,
                "lon": -64.9543223731296
            }
        },
        {
            "nombre_completo": "Municipio Palpalá",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Palpalá",
            "id": "380154",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00921981822271856
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.1949225190466,
                "lon": -65.1264498125423
            }
        },
        {
            "nombre_completo": "Municipio San Salvador de Jujuy",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "San Salvador de Jujuy",
            "id": "380035",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.014058111675757
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.1943902774618,
                "lon": -65.4189887578637
            }
        },
        {
            "nombre_completo": "Comisión Municipal Arrayanal",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Arrayanal",
            "id": "386091",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00249226405969624
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -24.1313201861624,
                "lon": -64.7788900953339
            }
        },
        {
            "nombre_completo": "Municipio La Esperanza",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "La Esperanza",
            "id": "380196",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00207537469590851
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.2041715000581,
                "lon": -64.7720910953121
            }
        },
        {
            "nombre_completo": "Comisión Municipal Rodeíto",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Rodeíto",
            "id": "386105",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00408959901757599
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -24.3084159629544,
                "lon": -64.7978944714527
            }
        },
        {
            "nombre_completo": "Municipio Santa Clara",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Santa Clara",
            "id": "380252",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00514535945939825
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.2734316258699,
                "lon": -64.6096326715894
            }
        },
        {
            "nombre_completo": "Municipio La Mendieta",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "La Mendieta",
            "id": "380203",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00198688198210661
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.2955921038521,
                "lon": -65.0074267062509
            }
        },
        {
            "nombre_completo": "Comisión Municipal San Antonio",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "San Antonio",
            "id": "386084",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0131304717899852
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -24.3467258627678,
                "lon": -65.4468529258409
            }
        },
        {
            "nombre_completo": "Comisión Municipal Rosario de Río Grande",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Rosario de Río Grande",
            "id": "386112",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00358738253830505
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -24.3672726216849,
                "lon": -64.9045281380553
            }
        },
        {
            "nombre_completo": "Municipio El Carmen",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "El Carmen",
            "id": "380056",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00464762635450711
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.4162328438079,
                "lon": -65.2749306821562
            }
        },
        {
            "nombre_completo": "Municipio Perico",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Perico",
            "id": "380077",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0041834522364614
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.391972418633,
                "lon": -65.0852675017876
            }
        },
        {
            "nombre_completo": "Municipio La Merced",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "La Merced",
            "id": "660084",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00204611628185148
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.0395625548901,
                "lon": -65.3904542120284
            }
        },
        {
            "nombre_completo": "Municipio Las Lajitas",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Las Lajitas",
            "id": "660035",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.02538765769719
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.9101681976984,
                "lon": -64.5809409708697
            }
        },
        {
            "nombre_completo": "Municipio Tolar Grande",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Tolar Grande",
            "id": "660252",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0919476121351167
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.6951301961003,
                "lon": -67.7458583264751
            }
        },
        {
            "nombre_completo": "Municipio Cafayate",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Cafayate",
            "id": "660056",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0102435663917782
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.1255058750696,
                "lon": -65.88008457856
            }
        },
        {
            "nombre_completo": "Municipio Cerrillos",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Cerrillos",
            "id": "660077",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00145035886082852
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.9165899415056,
                "lon": -65.4227277758729
            }
        },
        {
            "nombre_completo": "Municipio Embarcación",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Embarcación",
            "id": "660133",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0258613734816801
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.2139456004596,
                "lon": -63.6867474854893
            }
        },
        {
            "nombre_completo": "Municipio Río Piedras",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Río Piedras",
            "id": "660280",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00566403644033659
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.2657044540023,
                "lon": -65.0359297190078
            }
        },
        {
            "nombre_completo": "Municipio General Güemes",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "General Güemes",
            "id": "660119",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0111651721112992
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.8000501678009,
                "lon": -64.9080381225923
            }
        },
        {
            "nombre_completo": "Municipio Santa Victoria Este",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Santa Victoria Este",
            "id": "660343",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.031010958940813
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -22.4176111811168,
                "lon": -62.8122067292647
            }
        },
        {
            "nombre_completo": "Municipio Campo Quijano",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Campo Quijano",
            "id": "660364",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0301624310830474
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.503469017085,
                "lon": -65.8693993163521
            }
        },
        {
            "nombre_completo": "Municipio Angastaco",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Angastaco",
            "id": "660378",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0212346328516374
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.9298333255864,
                "lon": -66.3372867377435
            }
        },
        {
            "nombre_completo": "Municipio Aguaray",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Aguaray",
            "id": "660126",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0169359645933444
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -22.1863764264674,
                "lon": -63.5496991956857
            }
        },
        {
            "nombre_completo": "Municipio Santa Victoria Oeste",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Santa Victoria Oeste",
            "id": "660413",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00963193590215233
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -22.2585509228289,
                "lon": -65.0145224579477
            }
        },
        {
            "nombre_completo": "Municipio Nazareno",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Nazareno",
            "id": "660406",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00690919089898843
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -22.4901350156833,
                "lon": -65.0457893547068
            }
        },
        {
            "nombre_completo": "Municipio Guachipas",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Guachipas",
            "id": "660168",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0181582541400105
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.7029452739388,
                "lon": -65.4445328508854
            }
        },
        {
            "nombre_completo": "Municipio Metán",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Metán",
            "id": "660266",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00729679644950015
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.5135434924208,
                "lon": -64.976719143493
            }
        },
        {
            "nombre_completo": "Municipio San Ramón de la Nueva Orán",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "San Ramón de la Nueva Orán",
            "id": "660315",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0222364756566436
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.0849220134688,
                "lon": -64.6094728862924
            }
        },
        {
            "nombre_completo": "Municipio Apolinario Saravia",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Apolinario Saravia",
            "id": "660007",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00703394113112382
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.5066508305036,
                "lon": -64.146506788237
            }
        },
        {
            "nombre_completo": "Municipio General Mosconi",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "General Mosconi",
            "id": "660147",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0181458085876167
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -22.6055769659415,
                "lon": -63.9782396370587
            }
        },
        {
            "nombre_completo": "Municipio Los Toldos",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Los Toldos",
            "id": "660399",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00916558720739348
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -22.4689957526384,
                "lon": -64.6575099735318
            }
        },
        {
            "nombre_completo": "Municipio Coronel Moldes",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Coronel Moldes",
            "id": "660231",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00475922588160965
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.2941908506985,
                "lon": -65.4144258201107
            }
        },
        {
            "nombre_completo": "Municipio Pichanal",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Pichanal",
            "id": "660308",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0435758622529221
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.728543811028,
                "lon": -63.8504366193731
            }
        },
        {
            "nombre_completo": "Municipio Joaquín V. González",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Joaquín V. González",
            "id": "660028",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.071984669969401
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.792347642004,
                "lon": -63.6538145950214
            }
        },
        {
            "nombre_completo": "Municipio Bahía Blanca",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Bahía Blanca",
            "id": "060056",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00754121273617542
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.5808546732895,
                "lon": -62.1656895327094
            }
        },
        {
            "nombre_completo": "Municipio Belén",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Belén",
            "id": "100063",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0151605671551815
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.7111201189354,
                "lon": -66.847492244729
            }
        },
        {
            "nombre_completo": "Municipio Hualfín",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Hualfín",
            "id": "100077",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00697375946547148
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.2327739205627,
                "lon": -66.6867349793277
            }
        },
        {
            "nombre_completo": "Municipio Cachi",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Cachi",
            "id": "660042",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.012889502984612
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.0590252489353,
                "lon": -66.2878110751075
            }
        },
        {
            "nombre_completo": "Municipio El Jardín",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "El Jardín",
            "id": "660203",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00147689394146536
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.0357145843493,
                "lon": -65.4415593896556
            }
        },
        {
            "nombre_completo": "Municipio San Antonio de los Cobres",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "San Antonio de los Cobres",
            "id": "660245",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0701328624717204
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.5731647705322,
                "lon": -66.8172575823382
            }
        },
        {
            "nombre_completo": "Municipio Molinos",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Molinos",
            "id": "660273",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0210305582336813
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.6051411736222,
                "lon": -66.4900375368787
            }
        },
        {
            "nombre_completo": "Municipio Pozo de Piedra",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Pozo de Piedra",
            "id": "100091",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00478006348453558
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5461401411272,
                "lon": -67.1694075115445
            }
        },
        {
            "nombre_completo": "Municipio San Fernando",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "San Fernando",
            "id": "100112",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00207252332357692
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.3077227595379,
                "lon": -66.8569085255966
            }
        },
        {
            "nombre_completo": "Municipio San José",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "San José",
            "id": "100203",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.042354719664114
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.8778834110203,
                "lon": -66.2971211607982
            }
        },
        {
            "nombre_completo": "Municipio Santa María",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Santa María",
            "id": "100210",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0132976106993203
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.4929339197446,
                "lon": -66.1496524320488
            }
        },
        {
            "nombre_completo": "Municipio Aconquija",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Aconquija",
            "id": "100042",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00853194507215629
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5035405012381,
                "lon": -66.0582983765108
            }
        },
        {
            "nombre_completo": "Municipio Andalgalá",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Andalgalá",
            "id": "100049",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0385303526911644
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5535805469095,
                "lon": -66.4219289567448
            }
        },
        {
            "nombre_completo": "Municipio Saujil",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Saujil",
            "id": "100196",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0314404558600217
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.0574573700851,
                "lon": -66.40241020613
            }
        },
        {
            "nombre_completo": "Municipio Pomán",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Pomán",
            "id": "100189",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0218704827488914
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.411675471996,
                "lon": -66.4313284959768
            }
        },
        {
            "nombre_completo": "Municipio Mutquín",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Mutquín",
            "id": "100185",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00143375132619145
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.3106975214611,
                "lon": -66.1479259632378
            }
        },
        {
            "nombre_completo": "Municipio San Fernando del Valle de Catamarca",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "San Fernando del Valle de Catamarca",
            "id": "100140",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00396530611505024
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.4104559393525,
                "lon": -65.8362002957157
            }
        },
        {
            "nombre_completo": "Municipio Paclín",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Paclín",
            "id": "100182",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00977196821687309
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.1100495534152,
                "lon": -65.6738760474972
            }
        },
        {
            "nombre_completo": "Municipio General Alvarado",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General Alvarado",
            "id": "060280",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00543276666507412
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.2027130466249,
                "lon": -58.0722485722111
            }
        },
        {
            "nombre_completo": "Municipio General Lamadrid",
            "fuente": "IGN",
            "nombre": "General Lamadrid",
            "id": "460077",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0664503583055262
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.7904353562757,
                "lon": -68.6977547342455
            }
        },
        {
            "nombre_completo": "Municipio Vinchina",
            "fuente": "IGN",
            "nombre": "Vinchina",
            "id": "460098",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.123072933417896
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.3164203776533,
                "lon": -68.5253984631142
            }
        },
        {
            "nombre_completo": "Municipio Coronel Felipe Varela",
            "fuente": "IGN",
            "nombre": "Coronel Felipe Varela",
            "id": "460028",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0902197250287155
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.449795605204,
                "lon": -68.3284822964494
            }
        },
        {
            "nombre_completo": "Municipio Castro Barros",
            "fuente": "IGN",
            "nombre": "Castro Barros",
            "id": "460021",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.016563824692652
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.8599829479001,
                "lon": -66.9185847556269
            }
        },
        {
            "nombre_completo": "Municipio Iglesia",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Iglesia",
            "id": "700049",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.21516244196088
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.6066873518889,
                "lon": -69.4379498926956
            }
        },
        {
            "nombre_completo": "Municipio Valle Fértil",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Valle Fértil",
            "id": "700119",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.0589946311427448
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.7122962694162,
                "lon": -67.532303564839
            }
        },
        {
            "nombre_completo": "Municipio Ullum",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Ullum",
            "id": "700112",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.0503459806801266
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.0904647062097,
                "lon": -68.8815821606005
            }
        },
        {
            "nombre_completo": "Municipio Albardón",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Albardón",
            "id": "700007",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.0115231977396303
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.2096344810555,
                "lon": -68.4519807662306
            }
        },
        {
            "nombre_completo": "Municipio Zonda",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Zonda",
            "id": "700133",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.0272428308107438
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6381980593895,
                "lon": -68.9555709233009
            }
        },
        {
            "nombre_completo": "Municipio General Alvear",
            "fuente": "IGN",
            "nombre": "General Alvear",
            "id": "500014",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.0993663751625383
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.2178364156832,
                "lon": -67.0804473289427
            }
        },
        {
            "nombre_completo": "Municipio San Rafael",
            "fuente": "IGN",
            "nombre": "San Rafael",
            "id": "500105",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.211310471554893
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.944544968313,
                "lon": -68.3826783124895
            }
        },
        {
            "nombre_completo": "Municipio Santa Lucía",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Santa Lucía",
            "id": "700098",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.000617293120832176
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.5327173670967,
                "lon": -68.4634116809574
            }
        },
        {
            "nombre_completo": "Municipio Rawson",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Rawson",
            "id": "700077",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.00326511461615207
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6865858135558,
                "lon": -68.4675631318926
            }
        },
        {
            "nombre_completo": "Municipio Jáchal",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Jáchal",
            "id": "700056",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.161947599206547
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.3550759493247,
                "lon": -68.4412683481452
            }
        },
        {
            "nombre_completo": "Municipio Calingasta",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Calingasta",
            "id": "700021",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.25768851293505
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4533652386093,
                "lon": -69.8338001250746
            }
        },
        {
            "nombre_completo": "Municipio 25 de Mayo",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "25 de Mayo",
            "id": "700126",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.0484475600077942
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.9896198488069,
                "lon": -67.8274038980406
            }
        },
        {
            "nombre_completo": "Municipio General Pueyrredón",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General Pueyrredón",
            "id": "060357",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00486483975046215
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.9656760017008,
                "lon": -57.743144039076
            }
        },
        {
            "nombre_completo": "Municipio Mar Chiquita",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Mar Chiquita",
            "id": "060518",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0102133023287361
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.4984341236931,
                "lon": -57.6436183313312
            }
        },
        {
            "nombre_completo": "Municipio San Juan",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "San Juan",
            "id": "700028",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.000304404814290635
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.5330748483572,
                "lon": -68.5342856277406
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Guañacos",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Guañacos",
            "id": "585077",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00620718986179549
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -37.2860435824025,
                "lon": -70.9333362922709
            }
        },
        {
            "nombre_completo": "Municipio Rivadavia",
            "fuente": "IGN",
            "nombre": "Rivadavia",
            "id": "500084",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.014230301993113
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.419707109754,
                "lon": -68.6121759957283
            }
        },
        {
            "nombre_completo": "Municipio San Carlos",
            "fuente": "IGN",
            "nombre": "San Carlos",
            "id": "500091",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.0768118081400139
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.0753663961096,
                "lon": -69.0977010128896
            }
        },
        {
            "nombre_completo": "Municipio Tunuyán",
            "fuente": "IGN",
            "nombre": "Tunuyán",
            "id": "500119",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.0221821485601708
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.6223342938162,
                "lon": -69.507805463383
            }
        },
        {
            "nombre_completo": "Municipio Luján de Cuyo",
            "fuente": "IGN",
            "nombre": "Luján de Cuyo",
            "id": "500063",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.0320525017478883
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.0382520812749,
                "lon": -69.4437142136648
            }
        },
        {
            "nombre_completo": "Municipio Las Heras",
            "fuente": "IGN",
            "nombre": "Las Heras",
            "id": "500049",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.0581153241941827
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.5247668775426,
                "lon": -69.2671757239401
            }
        },
        {
            "nombre_completo": "Municipio Lavalle",
            "fuente": "IGN",
            "nombre": "Lavalle",
            "id": "500056",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.0671471657023154
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.582585367751,
                "lon": -67.8890727049671
            }
        },
        {
            "nombre_completo": "Municipio Malargüe",
            "fuente": "IGN",
            "nombre": "Malargüe",
            "id": "500077",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.277429787816349
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.1572730441954,
                "lon": -69.3135099463235
            }
        },
        {
            "nombre_completo": "Municipio Capital",
            "fuente": "IGN",
            "nombre": "Capital",
            "id": "500007",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.000346397919648896
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.8806541047985,
                "lon": -68.8921657602392
            }
        },
        {
            "nombre_completo": "Comuna Manuel Garcia Fernandez",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Manuel Garcia Fernandez",
            "id": "908322",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.000869815331805669
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.9597071072569,
                "lon": -65.2814079053137
            }
        },
        {
            "nombre_completo": "Municipio Rincón de los Sauces",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Rincón de los Sauces",
            "id": "580210",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.0102410349731191
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.4279286578832,
                "lon": -68.904881950857
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Octavio Pico",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Octavio Pico",
            "id": "585105",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00320637445218676
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -37.6310256208455,
                "lon": -68.3594661614186
            }
        },
        {
            "nombre_completo": "Municipio Buta Ranquil",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Buta Ranquil",
            "id": "580203",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.0227834097544042
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.2421306229288,
                "lon": -69.8210409111221
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Quili Malal",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Quili Malal",
            "id": "585126",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00389326725599612
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -38.4119191438239,
                "lon": -69.7502827574929
            }
        },
        {
            "nombre_completo": "Municipio Mariano Moreno",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Mariano Moreno",
            "id": "580238",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00096785655483942
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.7687927342046,
                "lon": -70.0160273047475
            }
        },
        {
            "nombre_completo": "Municipio Junín de los Andes",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Junín de los Andes",
            "id": "580112",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.0152679325441024
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.9210969926669,
                "lon": -71.0997656206867
            }
        },
        {
            "nombre_completo": "Municipio Aluminé",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Aluminé",
            "id": "580007",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000853395747888524
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.2342734029443,
                "lon": -70.9120954468479
            }
        },
        {
            "nombre_completo": "Municipio Neuquén",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Neuquén",
            "id": "580056",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00136159341561869
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.9446959754993,
                "lon": -68.1001766838423
            }
        },
        {
            "nombre_completo": "Municipio Centenario",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Centenario",
            "id": "580042",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00138970499280536
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.7973834665027,
                "lon": -68.1756656510973
            }
        },
        {
            "nombre_completo": "Municipio Pinamar",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Pinamar",
            "id": "060644",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000218910073013455
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.109945873389,
                "lon": -56.8696753983418
            }
        },
        {
            "nombre_completo": "Municipio Cutral Có",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Cutral Có",
            "id": "580049",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000856855369101051
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.9398936598766,
                "lon": -69.2541458274133
            }
        },
        {
            "nombre_completo": "Municipio Plaza Huincul",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Plaza Huincul",
            "id": "580063",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000837072902335528
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.9406582608027,
                "lon": -69.1598555722786
            }
        },
        {
            "nombre_completo": "Comisión de Fomento El Sauce",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "El Sauce",
            "id": "585112",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00369788660386927
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -39.4816153694996,
                "lon": -69.5258646816178
            }
        },
        {
            "nombre_completo": "Municipio Picún Leufú",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Picún Leufú",
            "id": "580217",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.0014864359869111
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.5272959346432,
                "lon": -69.3041340199497
            }
        },
        {
            "nombre_completo": "Municipio Las Coloradas",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Las Coloradas",
            "id": "580028",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000858165350169015
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.6076912118787,
                "lon": -70.5825186548069
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Santo Tomás",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Santo Tomás",
            "id": "585035",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000942111427012083
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -39.8409265275249,
                "lon": -70.0938182756884
            }
        },
        {
            "nombre_completo": "Municipio Los Miches",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Los Miches",
            "id": "580161",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00511245748214139
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.1472111349999,
                "lon": -70.9641103407799
            }
        },
        {
            "nombre_completo": "Municipio El Huecú",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "El Huecú",
            "id": "580182",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00069146058453011
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.6497782492439,
                "lon": -70.5833484817915
            }
        },
        {
            "nombre_completo": "Municipio Loncopué",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Loncopué",
            "id": "580126",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000840702899682668
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.130763669743,
                "lon": -70.6070114096582
            }
        },
        {
            "nombre_completo": "Municipio Tricao Malal",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Tricao Malal",
            "id": "580105",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000828687049418878
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.0444304664013,
                "lon": -70.3654033463117
            }
        },
        {
            "nombre_completo": "Municipio Isla del Cerrito",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Isla del Cerrito",
            "id": "220042",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00163121115846182
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.304202864253,
                "lon": -58.6805128113911
            }
        },
        {
            "nombre_completo": "Municipio Huinganco",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Huinganco",
            "id": "580147",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00311606698011327
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.0638452103236,
                "lon": -70.5999829263709
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Los Chihuidos",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Los Chihuidos",
            "id": "585021",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.0166606565475242
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -38.0504241884088,
                "lon": -69.5338451224223
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Ramón Castro",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Ramón Castro",
            "id": "585147",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.0091963873567677
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -38.9693906408624,
                "lon": -69.7563648428793
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Covunco Abajo",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Covunco Abajo",
            "id": "585133",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00624171065864409
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -38.6166812663412,
                "lon": -69.6916428096758
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Pilo Lil",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Pilo Lil",
            "id": "585028",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000514108022169065
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -39.6260254161966,
                "lon": -70.898029831876
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Sauzal Bonito",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Sauzal Bonito",
            "id": "585042",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.0019618751030913
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -38.5628864544464,
                "lon": -69.0137527772465
            }
        },
        {
            "nombre_completo": "Municipio San Martín de los Andes",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "San Martín de los Andes",
            "id": "580119",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00155617317118408
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -40.1347992136534,
                "lon": -71.3015414173336
            }
        },
        {
            "nombre_completo": "Municipio Coronel Du Graty",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Coronel Du Graty",
            "id": "220308",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00797423455554611
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.7497326053766,
                "lon": -60.895146198341
            }
        },
        {
            "nombre_completo": "Municipio Samuhú",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Samuhú",
            "id": "220420",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00817904774432432
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.6094738169633,
                "lon": -60.3528866161125
            }
        },
        {
            "nombre_completo": "Municipio Basail",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Basail",
            "id": "220392",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0136709888082691
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.8743070022137,
                "lon": -59.1796870078997
            }
        },
        {
            "nombre_completo": "Municipio Puerto Vilelas",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Puerto Vilelas",
            "id": "220406",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00581235193060324
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.7053948262969,
                "lon": -58.910501963792
            }
        },
        {
            "nombre_completo": "Municipio Barranqueras",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Barranqueras",
            "id": "220385",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.000591017412889553
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4821152611743,
                "lon": -58.9196674519405
            }
        },
        {
            "nombre_completo": "Municipio General Capdevila",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "General Capdevila",
            "id": "220098",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00190563256058187
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.411362360788,
                "lon": -61.4672888167323
            }
        },
        {
            "nombre_completo": "Municipio Magdalena",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Magdalena",
            "id": "060505",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0059332248112231
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.1849498630336,
                "lon": -57.6863916153998
            }
        },
        {
            "nombre_completo": "Municipio Vicente López",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Vicente López",
            "id": "060861",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000109738393696172
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.52651318083,
                "lon": -58.504469589773
            }
        },
        {
            "nombre_completo": "Municipio Mártires",
            "fuente": "Ministerio de Ecología",
            "nombre": "Mártires",
            "id": "540084",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00355767487654828
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4192742863885,
                "lon": -55.3818743554229
            }
        },
        {
            "nombre_completo": "Municipio Santiago de Liniers",
            "fuente": "Ministerio de Ecología",
            "nombre": "Santiago de Liniers",
            "id": "540168",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0128858683039971
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.4059052828746,
                "lon": -54.3574983163211
            }
        },
        {
            "nombre_completo": "Municipio San Pedro",
            "fuente": "Ministerio de Ecología",
            "nombre": "San Pedro",
            "id": "540504",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.105775951040136
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.7112090360395,
                "lon": -53.9412291264285
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Fortín Lugones",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Fortín Lugones",
            "id": "345042",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 1.22889320312158e-05
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -24.2874111689075,
                "lon": -59.8298344316784
            }
        },
        {
            "nombre_completo": "Municipio San Bernardo",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "San Bernardo",
            "id": "220350",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00992315395063279
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.3378730497718,
                "lon": -60.7011479061373
            }
        },
        {
            "nombre_completo": "Delegación Municipal Juan José Castelli",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Juan José Castelli",
            "id": "220182",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0457984922891782
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -25.9166159135438,
                "lon": -60.6640706206378
            }
        },
        {
            "nombre_completo": "Municipio Miraflores",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Miraflores",
            "id": "220189",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0359142190654188
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.4782409210673,
                "lon": -61.0371403012266
            }
        },
        {
            "nombre_completo": "Comuna San Jose de la Cocha",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "San Jose de la Cocha",
            "id": "908259",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00184100090085658
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.7311386048214,
                "lon": -65.5637818950497
            }
        },
        {
            "nombre_completo": "Comuna Rural Yanima",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Yanima",
            "id": "908266",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00151782027450508
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.642361639587,
                "lon": -65.7194897325952
            }
        },
        {
            "nombre_completo": "Municipio Las Palmas",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Las Palmas",
            "id": "220056",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00447400765570014
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.1249377281009,
                "lon": -58.6766006044424
            }
        },
        {
            "nombre_completo": "Municipio Yataytí Calle",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Yataytí Calle",
            "id": "180217",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00718365113796041
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.0601700356195,
                "lon": -58.7974473916707
            }
        },
        {
            "nombre_completo": "Delegación Municipal Puerto Bermejo",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Puerto Bermejo",
            "id": "220063",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00445051074614882
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -26.8872364610762,
                "lon": -58.5220496631663
            }
        },
        {
            "nombre_completo": "Municipio Presidencia de la Plaza",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Presidencia de la Plaza",
            "id": "220357",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0226149383022013
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.0468199731497,
                "lon": -59.7751690486134
            }
        },
        {
            "nombre_completo": "Municipio Pergamino",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Pergamino",
            "id": "060623",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00948447519470007
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.8358155353661,
                "lon": -60.5450748689576
            }
        },
        {
            "nombre_completo": "Municipio Rauch",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Rauch",
            "id": "060672",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0140623511119434
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.5722509524193,
                "lon": -58.9444061302172
            }
        },
        {
            "nombre_completo": "Comisión Municipal Yavi",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Yavi",
            "id": "386273",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0121380401177993
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -22.1949119799291,
                "lon": -65.3412864273208
            }
        },
        {
            "nombre_completo": "Municipio Mercedes",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Mercedes",
            "id": "180245",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0982790444621897
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.0543617301547,
                "lon": -57.7596459149959
            }
        },
        {
            "nombre_completo": "Municipio Las Garcitas",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Las Garcitas",
            "id": "220455",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00299518450990299
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.6232885192826,
                "lon": -59.7788567014564
            }
        },
        {
            "nombre_completo": "Municipio Gral. San Martengeneral San Martín",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Gral. San Martengeneral San Martín",
            "id": "220259",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0262911393403576
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.5221875283042,
                "lon": -59.2755844593318
            }
        },
        {
            "nombre_completo": "Municipio Saladas",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Saladas",
            "id": "180308",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0151109107752789
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.2333428700223,
                "lon": -58.5563693378129
            }
        },
        {
            "nombre_completo": "Municipio Villa Dos Trece",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Villa Dos Trece",
            "id": "340252",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 5.23934041037869e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.184603792573,
                "lon": -59.3642106776359
            }
        },
        {
            "nombre_completo": "Municipio Presidencia Roca",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Presidencia Roca",
            "id": "220294",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0102534050406958
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.1772297025285,
                "lon": -59.6843651883855
            }
        },
        {
            "nombre_completo": "Municipio Pampa del Indio",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Pampa del Indio",
            "id": "220287",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0165126547433943
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.0214403532384,
                "lon": -59.9713281008366
            }
        },
        {
            "nombre_completo": "Municipio Tres Isletas",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Tres Isletas",
            "id": "220301",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.029211965931054
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.3210291409793,
                "lon": -60.455348259001
            }
        },
        {
            "nombre_completo": "Municipio Salliqueló",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Salliqueló",
            "id": "060721",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00259086870837977
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.6710137553167,
                "lon": -63.0491259803334
            }
        },
        {
            "nombre_completo": "Delegación Municipal Villa Río Bermejito",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Villa Río Bermejito",
            "id": "220203",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0312020363291327
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -25.4572628455707,
                "lon": -60.512589546568
            }
        },
        {
            "nombre_completo": "Municipio Misión Nueva Pompeya",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Misión Nueva Pompeya",
            "id": "220169",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0143434723724431
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.9918396458623,
                "lon": -61.5529901499502
            }
        },
        {
            "nombre_completo": "Municipio Fuerte Esperanza",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Fuerte Esperanza",
            "id": "220175",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0683371232580535
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.0435535331707,
                "lon": -61.9982165754166
            }
        },
        {
            "nombre_completo": "Delegación Municipal El Sauzalito",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "El Sauzalito",
            "id": "220168",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0616133630355817
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -24.6544130660635,
                "lon": -61.6482494847739
            }
        },
        {
            "nombre_completo": "Delegación Municipal Colonia Benitez",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Colonia Benitez",
            "id": "220364",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00469295369296885
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -27.3100638470581,
                "lon": -58.8542427774583
            }
        },
        {
            "nombre_completo": "Delegación Municipal Colonias Elisa",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Colonias Elisa",
            "id": "220441",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0068187432107656
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -26.9254012720409,
                "lon": -59.4073885705906
            }
        },
        {
            "nombre_completo": "Municipio Juan Pujol",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Juan Pujol",
            "id": "180259",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0051273486703864
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.3777496827949,
                "lon": -57.8889139828733
            }
        },
        {
            "nombre_completo": "Municipio Pueblo Libertador",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Pueblo Libertador",
            "id": "180091",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00713991993160051
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.2566420474997,
                "lon": -59.3188988449952
            }
        },
        {
            "nombre_completo": "Municipio Monte Caseros",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Monte Caseros",
            "id": "180273",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0148572813635879
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.1816229638282,
                "lon": -57.8245096673467
            }
        },
        {
            "nombre_completo": "Municipio Parada Pucheta",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Parada Pucheta",
            "id": "180287",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00601447150759664
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.8319290490767,
                "lon": -57.5860857472355
            }
        },
        {
            "nombre_completo": "Municipio Sauce",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Sauce",
            "id": "180455",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0283044719295598
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.9995445616683,
                "lon": -58.7950373826115
            }
        },
        {
            "nombre_completo": "Municipio Paso de los Libres",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Paso de los Libres",
            "id": "180294",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0288086388432059
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.510389362518,
                "lon": -57.3046162179262
            }
        },
        {
            "nombre_completo": "Municipio Goya",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Goya",
            "id": "180140",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0358379811957079
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.3387451805435,
                "lon": -59.1814817449753
            }
        },
        {
            "nombre_completo": "Municipio 9 de Julio",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "9 de Julio",
            "id": "180399",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0028249803192506
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.826457496527,
                "lon": -58.8280908377803
            }
        },
        {
            "nombre_completo": "Comisión Municipal El Cóndor",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "El Cóndor",
            "id": "386259",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00796981338079211
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -22.414030404424,
                "lon": -65.3795310298623
            }
        },
        {
            "nombre_completo": "Municipio Felipe Yofré",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Felipe Yofré",
            "id": "180231",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00768162757336191
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.0615191828754,
                "lon": -58.40424074046
            }
        },
        {
            "nombre_completo": "Municipio Tatacuá",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Tatacuá",
            "id": "180056",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00108206591473004
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.3785989810718,
                "lon": -58.3050947683705
            }
        },
        {
            "nombre_completo": "Municipio La Cruz",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "La Cruz",
            "id": "180371",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0531443251204332
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.9102471314715,
                "lon": -56.921169074054
            }
        },
        {
            "nombre_completo": "Municipio Tabay",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Tabay",
            "id": "180049",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00346662533856655
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.2854948392921,
                "lon": -58.287362735518
            }
        },
        {
            "nombre_completo": "Municipio Coronel Pringles",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Coronel Pringles",
            "id": "060196",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0175219905245948
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.1477437843902,
                "lon": -61.2646589620305
            }
        },
        {
            "nombre_completo": "Municipio Bella Vista",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Bella Vista",
            "id": "180007",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0198932759528005
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.4973936042377,
                "lon": -58.9304362711764
            }
        },
        {
            "nombre_completo": "Comuna El Mollar",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "El Mollar",
            "id": "908581",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0144854366764051
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.9510760628619,
                "lon": -65.7637492860761
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Tafi del Valle",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Tafi del Valle",
            "id": "900105",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0174923390053129
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.8032952032499,
                "lon": -65.7691213941268
            }
        },
        {
            "nombre_completo": "Municipio Palmar Grande",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Palmar Grande",
            "id": "180133",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00263742199265066
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.9237583937917,
                "lon": -57.9146651736822
            }
        },
        {
            "nombre_completo": "Municipio Gobernador Ing. Valentín Virasoro",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Gobernador Ing. Valentín Virasoro",
            "id": "180434",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0218594117157208
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.0253723148576,
                "lon": -56.146356903602
            }
        },
        {
            "nombre_completo": "Municipio Empedrado",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Empedrado",
            "id": "180077",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0218409122810331
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.8961218833919,
                "lon": -58.6658439667826
            }
        },
        {
            "nombre_completo": "Municipio San Antonio",
            "fuente": "IGN",
            "nombre": "San Antonio",
            "id": "180175",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00363142846975672
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5138604971911,
                "lon": -56.8539502572227
            }
        },
        {
            "nombre_completo": "Municipio Colonia Liebigs",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Colonia Liebigs",
            "id": "180161",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00768473580814195
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.7796475708551,
                "lon": -56.0569867005655
            }
        },
        {
            "nombre_completo": "Comisión de Fomento San Hilario",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "San Hilario",
            "id": "345028",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 7.98268321098235e-05
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -26.0259038272531,
                "lon": -58.6471275416652
            }
        },
        {
            "nombre_completo": "Municipio Itá Ibaté",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Itá Ibaté",
            "id": "180119",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00392762729330051
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5323131432038,
                "lon": -57.3645741822866
            }
        },
        {
            "nombre_completo": "Municipio Berón de Astrada",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Berón de Astrada",
            "id": "180014",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00944392990823475
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4779720010051,
                "lon": -57.6113792118727
            }
        },
        {
            "nombre_completo": "Municipio Santa Ana",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Santa Ana",
            "id": "180336",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00154156910767931
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4449964561918,
                "lon": -58.6118731255789
            }
        },
        {
            "nombre_completo": "Municipio San Luis del Palmar",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "San Luis del Palmar",
            "id": "180350",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0257207887221875
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.6003413411476,
                "lon": -58.2610507449513
            }
        },
        {
            "nombre_completo": "Municipio Paso de la Patria",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Paso de la Patria",
            "id": "180322",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00155834301721207
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.3449909014868,
                "lon": -58.5797655579126
            }
        },
        {
            "nombre_completo": "Municipio Mocoretá",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Mocoretá",
            "id": "180266",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00482888038429473
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.5488011628987,
                "lon": -57.9576529352177
            }
        },
        {
            "nombre_completo": "Municipio San Isidro",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "San Isidro",
            "id": "180143",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0172253001703073
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.7043266159448,
                "lon": -59.4177431634827
            }
        },
        {
            "nombre_completo": "Municipio Saladillo",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Saladillo",
            "id": "060707",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00874459635950249
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.6765966680226,
                "lon": -59.7037033020054
            }
        },
        {
            "nombre_completo": "Municipio Las Flores",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Las Flores",
            "id": "060455",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0108268174478274
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.0157017377305,
                "lon": -59.1769657671576
            }
        },
        {
            "nombre_completo": "Municipio Rojas",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Rojas",
            "id": "060686",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00653582722801871
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.1926035952586,
                "lon": -60.7879706568364
            }
        },
        {
            "nombre_completo": "Municipio Escobar",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Escobar",
            "id": "060252",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000957795592917025
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.328718150088,
                "lon": -58.7711281467366
            }
        },
        {
            "nombre_completo": "Municipio Bolívar",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Bolívar",
            "id": "060105",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0160307950194283
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.2982217499893,
                "lon": -61.1496836148108
            }
        },
        {
            "nombre_completo": "Municipio Maipú",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Maipú",
            "id": "060511",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00853022528826313
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.8865728370606,
                "lon": -57.5861731541635
            }
        },
        {
            "nombre_completo": "Municipio La Matanza",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "La Matanza",
            "id": "060427",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00104371026686803
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.7701647288425,
                "lon": -58.625448693896
            }
        },
        {
            "nombre_completo": "Municipio San Antonio de Areco",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "San Antonio de Areco",
            "id": "060735",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00274311551860388
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.2206591685119,
                "lon": -59.5193792218302
            }
        },
        {
            "nombre_completo": "Municipio Moreno",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Moreno",
            "id": "060560",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000592772199710743
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.610617117824,
                "lon": -58.8109232680035
            }
        },
        {
            "nombre_completo": "Municipio General Guido",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General Guido",
            "id": "060308",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00760031469511018
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.6659831489807,
                "lon": -57.995784111694
            }
        },
        {
            "nombre_completo": "Municipio General Juan Madariaga",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General Juan Madariaga",
            "id": "060315",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00981205777279269
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.153213652497,
                "lon": -57.2307866338235
            }
        },
        {
            "nombre_completo": "Municipio Tandil",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Tandil",
            "id": "060791",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0159719409591909
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.3356554181577,
                "lon": -59.181805577778
            }
        },
        {
            "nombre_completo": "Municipio Coronel Suárez",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Coronel Suárez",
            "id": "060203",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0197309926967139
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.5325532169014,
                "lon": -61.8893137767698
            }
        },
        {
            "nombre_completo": "Municipio Villa Gesell",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Villa Gesell",
            "id": "060868",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00054251969930011
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.3705193836346,
                "lon": -57.0658445952167
            }
        },
        {
            "nombre_completo": "Municipio General Lavalle",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General Lavalle",
            "id": "060336",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00879432910720873
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.6518890133331,
                "lon": -56.9422695810825
            }
        },
        {
            "nombre_completo": "Municipio La Costa",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "La Costa",
            "id": "060420",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00081360389032007
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.6782018340746,
                "lon": -56.7189105106819
            }
        },
        {
            "nombre_completo": "Municipio Berazategui",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Berazategui",
            "id": "060091",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000703029474416425
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.8179736855799,
                "lon": -58.1552626919147
            }
        },
        {
            "nombre_completo": "Municipio Tornquist",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Tornquist",
            "id": "060819",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0139376732756443
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.255785801668,
                "lon": -62.2904249803924
            }
        },
        {
            "nombre_completo": "Municipio Tigre",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Tigre",
            "id": "060805",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00125438077333213
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.3815893993371,
                "lon": -58.599453988125
            }
        },
        {
            "nombre_completo": "Municipio Villarino",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Villarino",
            "id": "060875",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0351320691679943
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.1296648457138,
                "lon": -62.7268024308416
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de la Cocha",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "La Cocha",
            "id": "900063",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00146318351977878
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.7920684691818,
                "lon": -65.5855256050922
            }
        },
        {
            "nombre_completo": "Comuna Rural El Sacrificio",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "El Sacrificio",
            "id": "908231",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0126484082357407
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.6933818569057,
                "lon": -65.6382073641255
            }
        },
        {
            "nombre_completo": "Municipio Castelli",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Castelli",
            "id": "060168",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00686174760686982
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.0416694003038,
                "lon": -57.6570625693146
            }
        },
        {
            "nombre_completo": "Municipio Brandsen",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Brandsen",
            "id": "060119",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00358662931280689
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.2221104711751,
                "lon": -58.1760719473086
            }
        },
        {
            "nombre_completo": "Municipio Carlos Casares",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Carlos Casares",
            "id": "060147",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00814632674988018
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.7496551260772,
                "lon": -61.3737522686863
            }
        },
        {
            "nombre_completo": "Municipio Trenque Lauquen",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Trenque Lauquen",
            "id": "060826",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0178396515491316
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.0564352739976,
                "lon": -62.6346332497416
            }
        },
        {
            "nombre_completo": "Municipio Roque Pérez",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Roque Pérez",
            "id": "060693",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0049847009922423
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.4811110714388,
                "lon": -59.3595940527063
            }
        },
        {
            "nombre_completo": "Municipio Olavarría",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Olavarría",
            "id": "060595",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.025084268069142
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.8567012129546,
                "lon": -60.6707349373354
            }
        },
        {
            "nombre_completo": "Comuna Pavón",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Pavón",
            "id": "822490",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000326302801950907
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.2423832201545,
                "lon": -60.4124784992033
            }
        },
        {
            "nombre_completo": "Comisión Municipal Zanjitas",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Zanjitas",
            "id": "746280",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00234599196227998
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.8049276377293,
                "lon": -66.4148690167955
            }
        },
        {
            "nombre_completo": "Comisión Municipal Beazley",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Beazley",
            "id": "746252",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00234459018917172
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.7572721991329,
                "lon": -66.6446207562444
            }
        },
        {
            "nombre_completo": "Comuna Rural San Pedro y San Antonio",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "San Pedro y San Antonio",
            "id": "908539",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00406156493835662
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.3642260986441,
                "lon": -65.373326692578
            }
        },
        {
            "nombre_completo": "Comuna Rural Gastona y Belicha",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Gastona y Belicha",
            "id": "908182",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00192439805730181
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.3349592982746,
                "lon": -65.4926684584773
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Concepcion",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Concepcion",
            "id": "900035",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00160831975608601
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.3447468902027,
                "lon": -65.6126988414032
            }
        },
        {
            "nombre_completo": "Comuna Rural Pampa Mayo",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Pampa Mayo",
            "id": "908525",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00386650232702151
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.3165516168518,
                "lon": -65.2910821235805
            }
        },
        {
            "nombre_completo": "Comuna Alpachiri y el Molino",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Alpachiri y el Molino",
            "id": "908161",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0332237788500904
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.2635460272599,
                "lon": -65.9100831838862
            }
        },
        {
            "nombre_completo": "Comuna Arcadia",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Arcadia",
            "id": "908175",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0155657569355478
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.2268966234544,
                "lon": -65.7395231227396
            }
        },
        {
            "nombre_completo": "Comuna Villa Quinteros",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Villa Quinteros",
            "id": "908455",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0109571938023947
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.1087607368787,
                "lon": -65.795415563243
            }
        },
        {
            "nombre_completo": "Comuna Capitan Caceres",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Capitan Caceres",
            "id": "908392",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00527945955600031
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.1346089954425,
                "lon": -65.6997955571369
            }
        },
        {
            "nombre_completo": "Comuna Soldado Maldonado",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Soldado Maldonado",
            "id": "908441",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00771854659806901
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.0713461902157,
                "lon": -65.6660164509312
            }
        },
        {
            "nombre_completo": "Comuna Rural Los Sosa",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Los Sosa",
            "id": "908413",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00798921070498383
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.051330314524,
                "lon": -65.6041994521831
            }
        },
        {
            "nombre_completo": "Municipio Arrecifes",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Arrecifes",
            "id": "060077",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00392478785130677
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.0113151746224,
                "lon": -60.0627625274553
            }
        },
        {
            "nombre_completo": "Municipio Capitán Sarmiento",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Capitán Sarmiento",
            "id": "060140",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00173911361479129
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.1497065018665,
                "lon": -59.8548037960898
            }
        },
        {
            "nombre_completo": "Municipio Carmen de Areco",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Carmen de Areco",
            "id": "060161",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00337092985162865
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.4067983092213,
                "lon": -59.8842434040917
            }
        },
        {
            "nombre_completo": "Municipio Salto",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Salto",
            "id": "060714",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00511980862982856
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.2708350525697,
                "lon": -60.305182566345
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Simoca",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Simoca",
            "id": "900098",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.000574914042937032
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.2583551857273,
                "lon": -65.3619549438073
            }
        },
        {
            "nombre_completo": "Municipio General Güemes",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "General Güemes",
            "id": "340119",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.000438075802079989
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.7572918582755,
                "lon": -59.4860182346937
            }
        },
        {
            "nombre_completo": "Comuna Huanqueros",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Huanqueros",
            "id": "823554",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00856192904851093
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.8578882238486,
                "lon": -61.1090715369418
            }
        },
        {
            "nombre_completo": "Municipio Esteban Echeverría",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Esteban Echeverría",
            "id": "060260",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00038752026449711
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.8312099703342,
                "lon": -58.476969025414
            }
        },
        {
            "nombre_completo": "Municipio Pilar",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Pilar",
            "id": "060638",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00122258442314009
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.4481990221196,
                "lon": -58.9034413925773
            }
        },
        {
            "nombre_completo": "Municipio Luján",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Luján",
            "id": "060497",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00246052711419248
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.5676194636906,
                "lon": -59.1585123543241
            }
        },
        {
            "nombre_completo": "Comuna Arroyo Ceibal",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Arroyo Ceibal",
            "id": "822763",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00308948777824765
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.7149881684665,
                "lon": -59.3815838624303
            }
        },
        {
            "nombre_completo": "Comuna Rural El Timbo",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "El Timbo",
            "id": "908035",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00720492055039205
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -26.6571108877885,
                "lon": -65.1240894061431
            }
        },
        {
            "nombre_completo": "Comuna Rural Ancajuli",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Ancajuli",
            "id": "908595",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0206865985453491
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -26.6237677972485,
                "lon": -65.6319729934296
            }
        },
        {
            "nombre_completo": "Comuna Los Nogales",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Los Nogales",
            "id": "908616",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00340572668605761
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.6961551758077,
                "lon": -65.2072319242308
            }
        },
        {
            "nombre_completo": "Comuna El Naranjo y el Sunchal",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "El Naranjo y el Sunchal",
            "id": "908021",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0106076878085825
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.5960888406862,
                "lon": -65.0681956893794
            }
        },
        {
            "nombre_completo": "Comuna Rural La Esperanza",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "La Esperanza",
            "id": "908609",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00405279928085908
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -26.6643429705533,
                "lon": -65.2961130854135
            }
        },
        {
            "nombre_completo": "Comuna El Cadillal",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "El Cadillal",
            "id": "908602",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00351478878233956
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.6034229704115,
                "lon": -65.2176179099237
            }
        },
        {
            "nombre_completo": "Comuna Rural Tapia",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Tapia",
            "id": "908637",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0137682351895764
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -26.5511006817704,
                "lon": -65.3481681969426
            }
        },
        {
            "nombre_completo": "Municipio Chacabuco",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Chacabuco",
            "id": "060210",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00731481585143269
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.6184039263126,
                "lon": -60.3539279007252
            }
        },
        {
            "nombre_completo": "Municipio Riacho He-He",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Riacho He-He",
            "id": "340210",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.000115951468487157
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.362490161423,
                "lon": -58.2718820640382
            }
        },
        {
            "nombre_completo": "Municipio General Rodríguez",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General Rodríguez",
            "id": "060364",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00116279938210666
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.6503494927057,
                "lon": -58.9879503249052
            }
        },
        {
            "nombre_completo": "Municipio Lincoln",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Lincoln",
            "id": "060469",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0185288348931592
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.070384883326,
                "lon": -61.6827618200122
            }
        },
        {
            "nombre_completo": "Municipio Pozo del Tigre",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Pozo del Tigre",
            "id": "340140",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.000379512816787565
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.8852024120823,
                "lon": -60.3165832566376
            }
        },
        {
            "nombre_completo": "Municipio Ituzaingó",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Ituzaingó",
            "id": "060410",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00012135958861739
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.6360018167543,
                "lon": -58.6887583352667
            }
        },
        {
            "nombre_completo": "Comuna Villa Ana",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Villa Ana",
            "id": "822868",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00863386585518849
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.4145736812912,
                "lon": -59.6366616081518
            }
        },
        {
            "nombre_completo": "Municipio Marcos Paz",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Marcos Paz",
            "id": "060525",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00135512886724467
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.8137199832046,
                "lon": -58.8480634347315
            }
        },
        {
            "nombre_completo": "Comuna Rural Buen Pasto",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Buen Pasto",
            "id": "268119",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 6.04547133711075e-05
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -45.068316569196,
                "lon": -69.4653884108616
            }
        },
        {
            "nombre_completo": "Municipio Tres de Febrero",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Tres de Febrero",
            "id": "060840",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000145526894938059
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.5959797363173,
                "lon": -58.5790926022539
            }
        },
        {
            "nombre_completo": "Municipio Chivilcoy",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Chivilcoy",
            "id": "060224",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00657012987732837
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.9157089757004,
                "lon": -59.9584822196811
            }
        },
        {
            "nombre_completo": "Municipio Bragado",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Bragado",
            "id": "060112",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00705525012515142
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.0610928531071,
                "lon": -60.6042295511118
            }
        },
        {
            "nombre_completo": "Comuna Aguará Grande",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Aguará Grande",
            "id": "823477",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00969055724577074
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.9880288078494,
                "lon": -60.8529461195375
            }
        },
        {
            "nombre_completo": "Comuna Rural Carrenleufú",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Carrenleufú",
            "id": "268056",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000421367205498665
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -43.5775203888784,
                "lon": -71.6561282123594
            }
        },
        {
            "nombre_completo": "Municipio Lomas de Zamora",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Lomas de Zamora",
            "id": "060490",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000279534328943743
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.7554643393452,
                "lon": -58.4240829326534
            }
        },
        {
            "nombre_completo": "Municipio Quilmes",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Quilmes",
            "id": "060658",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000292309021106538
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.7350141996909,
                "lon": -58.2768874201614
            }
        },
        {
            "nombre_completo": "Municipio Pila",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Pila",
            "id": "060630",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0112128437314099
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.2023512628961,
                "lon": -58.3408970254988
            }
        },
        {
            "nombre_completo": "Municipio Benito Juárez",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Benito Juárez",
            "id": "060084",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0176892879319193
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.585278315595,
                "lon": -59.8883008698795
            }
        },
        {
            "nombre_completo": "Municipio Balcarce",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Balcarce",
            "id": "060063",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0136449679386089
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.7142728192546,
                "lon": -58.2720776956148
            }
        },
        {
            "nombre_completo": "Municipio Azul",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Azul",
            "id": "060049",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0213800434738094
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.7857719233293,
                "lon": -59.69665215894
            }
        },
        {
            "nombre_completo": "Municipio Tordillo",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Tordillo",
            "id": "060812",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00433989791299847
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.3908002975692,
                "lon": -57.2746828656255
            }
        },
        {
            "nombre_completo": "Municipio San Isidro",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "San Isidro",
            "id": "060756",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000166314330259371
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.4869499670191,
                "lon": -58.5372648522523
            }
        },
        {
            "nombre_completo": "Municipio Patagones",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Patagones",
            "id": "060602",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0465141580432409
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -40.197325042123,
                "lon": -62.8529085912033
            }
        },
        {
            "nombre_completo": "Municipio Coronel de Marina Leonardo Rosales",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Coronel de Marina Leonardo Rosales",
            "id": "060182",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00434664188119309
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.8488346485235,
                "lon": -61.8360446581448
            }
        },
        {
            "nombre_completo": "Municipio Saavedra",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Saavedra",
            "id": "060700",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0117201108314097
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.7710550160995,
                "lon": -62.4351452974673
            }
        },
        {
            "nombre_completo": "Municipio Monte Hermoso",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Monte Hermoso",
            "id": "060553",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000693471568969936
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.96257223668,
                "lon": -61.2904738793276
            }
        },
        {
            "nombre_completo": "Municipio Lobería",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Lobería",
            "id": "060476",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0157299560653574
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.0897033467581,
                "lon": -58.6939656644915
            }
        },
        {
            "nombre_completo": "Municipio Berisso",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Berisso",
            "id": "060098",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000462021526848698
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.9094634802474,
                "lon": -57.8283887071809
            }
        },
        {
            "nombre_completo": "Municipio San Fernando",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "San Fernando",
            "id": "060749",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00314168017315462
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.151270024948,
                "lon": -58.5459540333815
            }
        },
        {
            "nombre_completo": "Municipio Zárate",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Zárate",
            "id": "060882",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00374224045401154
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.997140182023,
                "lon": -59.128470961009
            }
        },
        {
            "nombre_completo": "Municipio Ramallo",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Ramallo",
            "id": "060665",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00329661727121159
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.587297239001,
                "lon": -60.0574845905694
            }
        },
        {
            "nombre_completo": "Municipio San Nicolás",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "San Nicolás",
            "id": "060763",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00214225132452793
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.4825541340464,
                "lon": -60.2929537316225
            }
        },
        {
            "nombre_completo": "Comuna Angeloni",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Angeloni",
            "id": "823862",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00197241458340991
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.8601855782973,
                "lon": -60.71959729594
            }
        },
        {
            "nombre_completo": "Municipio Florentino Ameghino",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Florentino Ameghino",
            "id": "060277",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00577850741071087
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.8738967496734,
                "lon": -62.4013534701346
            }
        },
        {
            "nombre_completo": "Comuna San Mart",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Mart",
            "id": "823953",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00242096732404212
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.2699724952564,
                "lon": -60.2447290871456
            }
        },
        {
            "nombre_completo": "Municipio San Pedro",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "San Pedro",
            "id": "060770",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0042829856340461
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.7819425849294,
                "lon": -59.7825917634816
            }
        },
        {
            "nombre_completo": "Comuna Videla",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Videla",
            "id": "823974",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00209314622588903
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.9734119057808,
                "lon": -60.7055499014401
            }
        },
        {
            "nombre_completo": "Comuna Helvecia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Helvecia",
            "id": "822553",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00591424784853004
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0642525453231,
                "lon": -60.1186164444114
            }
        },
        {
            "nombre_completo": "Municipio Coronda",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Coronda",
            "id": "820245",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00416514188264965
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.9806759524361,
                "lon": -60.8664313743489
            }
        },
        {
            "nombre_completo": "Comisión Municipal Balde",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Balde",
            "id": "746245",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.0057578746120911
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.4521935892927,
                "lon": -66.6363665748128
            }
        },
        {
            "nombre_completo": "Comuna Casalegno",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Casalegno",
            "id": "823750",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000812414811826396
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.2547015045604,
                "lon": -61.1341439605742
            }
        },
        {
            "nombre_completo": "Comuna Dos Rosas y la Legua",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Dos Rosas y la Legua",
            "id": "823540",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00116287223577534
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.6428436541147,
                "lon": -61.8891582048213
            }
        },
        {
            "nombre_completo": "Comuna Colonia Bossi",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Bossi",
            "id": "823512",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00108594922292763
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.672596230631,
                "lon": -61.787779170748
            }
        },
        {
            "nombre_completo": "Comuna Barrancas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Barrancas",
            "id": "823729",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00274931407051541
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.2528057469076,
                "lon": -60.8994527551702
            }
        },
        {
            "nombre_completo": "Comuna Monje",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Monje",
            "id": "823827",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00190122363803338
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.3305490258157,
                "lon": -60.8606974317873
            }
        },
        {
            "nombre_completo": "Comuna Sauce Viejo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Sauce Viejo",
            "id": "823029",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00391401559127486
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7939652943412,
                "lon": -60.7838926811253
            }
        },
        {
            "nombre_completo": "Municipio Yerba Buena",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Yerba Buena",
            "id": "900133",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00311843924770757
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.2330357482959,
                "lon": -65.4103180460691
            }
        },
        {
            "nombre_completo": "Comuna San Antonio de Obligado",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Antonio de Obligado",
            "id": "822854",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000328033684253395
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.3868266481118,
                "lon": -59.3146559426892
            }
        },
        {
            "nombre_completo": "Comuna Tacuarendí",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Tacuarendí",
            "id": "822861",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000274168309668599
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.4231273428115,
                "lon": -59.2907991786097
            }
        },
        {
            "nombre_completo": "Comuna Colonia Durán",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Durán",
            "id": "823701",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00312642948284841
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.571398543623,
                "lon": -59.9664905411715
            }
        },
        {
            "nombre_completo": "Comuna Florencia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Florencia",
            "id": "822798",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0054049240443892
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.0691596081599,
                "lon": -59.1445499154819
            }
        },
        {
            "nombre_completo": "Comuna Bella Italia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Bella Italia",
            "id": "822140",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00120352954556081
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.2622960932673,
                "lon": -61.3812054149924
            }
        },
        {
            "nombre_completo": "Municipio Montecarlo",
            "fuente": "Ministerio de Ecología",
            "nombre": "Montecarlo",
            "id": "540343",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0314009578802374
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.639779729458,
                "lon": -54.5625759117353
            }
        },
        {
            "nombre_completo": "Comuna Las Palmeras",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Las Palmeras",
            "id": "823596",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00154495576354326
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.6283200044766,
                "lon": -61.6225654624814
            }
        },
        {
            "nombre_completo": "Municipio Venado Tuerto",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Venado Tuerto",
            "id": "820277",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0045154010104725
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.7518202806305,
                "lon": -61.9744594399442
            }
        },
        {
            "nombre_completo": "Municipio Avellaneda",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Avellaneda",
            "id": "820091",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00659341919445181
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.0659341304613,
                "lon": -59.5355066403473
            }
        },
        {
            "nombre_completo": "Comuna Palacios",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Palacios",
            "id": "823631",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00170384730199225
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.7144943295205,
                "lon": -61.6505670679057
            }
        },
        {
            "nombre_completo": "Comuna Monigotes",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Monigotes",
            "id": "823610",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00186519131097384
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.5069495186875,
                "lon": -61.6110098359563
            }
        },
        {
            "nombre_completo": "Comuna Ambrosetti",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Ambrosetti",
            "id": "823484",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00676286037557674
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.9789705588141,
                "lon": -61.5468550660326
            }
        },
        {
            "nombre_completo": "Municipio San Martín Dos",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "San Martín Dos",
            "id": "340147",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.000111131815181938
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.4373909208269,
                "lon": -59.6447340181648
            }
        },
        {
            "nombre_completo": "Comuna La Sarita",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "La Sarita",
            "id": "822819",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00517248559866833
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.9623862902099,
                "lon": -59.8866792710683
            }
        },
        {
            "nombre_completo": "Comuna Tartagal",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Tartagal",
            "id": "824198",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00383720693922984
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.6814695753019,
                "lon": -59.8640442542733
            }
        },
        {
            "nombre_completo": "Municipio Malabrigo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Malabrigo",
            "id": "820105",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00255823687257184
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.3304443850771,
                "lon": -59.9197683451083
            }
        },
        {
            "nombre_completo": "Comuna Berna",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Berna",
            "id": "822770",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00154111004153311
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.2271092112468,
                "lon": -59.9081439943422
            }
        },
        {
            "nombre_completo": "Comuna Nicanor Molinas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Nicanor Molinas",
            "id": "822847",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00116291689977381
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.1516621451376,
                "lon": -59.8239493225464
            }
        },
        {
            "nombre_completo": "Comuna Juan de Garay",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Juan de Garay",
            "id": "823302",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00220965230383274
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.6658869843342,
                "lon": -61.6631398799138
            }
        },
        {
            "nombre_completo": "Comuna La Penca y Caraguatá",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "La Penca y Caraguatá",
            "id": "823911",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00291782892566426
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.3232009328101,
                "lon": -60.5682573680084
            }
        },
        {
            "nombre_completo": "Comuna Villa Saralegui",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Villa Saralegui",
            "id": "823673",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00826498797719931
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.4455258045236,
                "lon": -60.7712567255426
            }
        },
        {
            "nombre_completo": "Municipio Calchaquí",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Calchaquí",
            "id": "820329",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.012813877344555
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.8814121219407,
                "lon": -60.3771331093143
            }
        },
        {
            "nombre_completo": "Comuna La Gallareta",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "La Gallareta",
            "id": "824177",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.019238282969039
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.5313278795499,
                "lon": -60.7347043825011
            }
        },
        {
            "nombre_completo": "Comuna Esther",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Esther",
            "id": "823883",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000461412613910764
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0440868501282,
                "lon": -60.6059052149218
            }
        },
        {
            "nombre_completo": "Comuna Pueblo Marini",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Pueblo Marini",
            "id": "822322",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000547429229354778
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0204426946954,
                "lon": -61.88227929787
            }
        },
        {
            "nombre_completo": "Comuna Tacurales",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Tacurales",
            "id": "822378",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00136196127275359
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.8161716440531,
                "lon": -61.756105625018
            }
        },
        {
            "nombre_completo": "Comuna Eusebia y Carolina",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Eusebia y Carolina",
            "id": "822231",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000633178729615782
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.94155936696,
                "lon": -61.8600693100494
            }
        },
        {
            "nombre_completo": "Comuna Ramona",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Ramona",
            "id": "822329",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000759639816488918
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1014829180855,
                "lon": -61.9052281325664
            }
        },
        {
            "nombre_completo": "Comuna Bauer y Sigel",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Bauer y Sigel",
            "id": "822133",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00101920829829042
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.2647447206286,
                "lon": -61.9502905535617
            }
        },
        {
            "nombre_completo": "Comuna Aurelia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Aurelia",
            "id": "822126",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00104744804456827
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3921074922445,
                "lon": -61.4134539756017
            }
        },
        {
            "nombre_completo": "Comuna María Susana",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "María Susana",
            "id": "824114",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.002530832376729
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.2567152780579,
                "lon": -61.9232689133243
            }
        },
        {
            "nombre_completo": "Comuna Colonia Margarita",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Margarita",
            "id": "822189",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00111244178670933
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6832565715807,
                "lon": -61.6520048498336
            }
        },
        {
            "nombre_completo": "Municipio Sastre",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Sastre",
            "id": "820322",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.002189802354045
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.7712797112139,
                "lon": -61.8336440235563
            }
        },
        {
            "nombre_completo": "Comuna Las Petacas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Las Petacas",
            "id": "824100",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00253148977175948
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8169411699257,
                "lon": -62.1471490403629
            }
        },
        {
            "nombre_completo": "Comuna Fuentes",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Fuentes",
            "id": "823995",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00155911171046822
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.1808907129857,
                "lon": -61.0504190872363
            }
        },
        {
            "nombre_completo": "Comuna Gessler",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Gessler",
            "id": "823785",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00073061198014046
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8890862846595,
                "lon": -61.1281732028102
            }
        },
        {
            "nombre_completo": "Municipio El Soberbio",
            "fuente": "Ministerio de Ecología",
            "nombre": "El Soberbio",
            "id": "540196",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0597835630206426
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.0791879419082,
                "lon": -54.1568795747353
            }
        },
        {
            "nombre_completo": "Comuna San Carlos Sud",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Carlos Sud",
            "id": "823211",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000714815513406448
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7938277427628,
                "lon": -61.1115762777446
            }
        },
        {
            "nombre_completo": "Comuna San Mariano",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Mariano",
            "id": "823232",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00198231033465467
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6830923583522,
                "lon": -61.407434231416
            }
        },
        {
            "nombre_completo": "Municipio Herradura",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Herradura",
            "id": "340056",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.000645519884789415
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.4861755594849,
                "lon": -58.2991974832003
            }
        },
        {
            "nombre_completo": "Municipio General Lucio Victorio Mansilla",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "General Lucio Victorio Mansilla",
            "id": "340049",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 5.16446897030217e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.6536726754651,
                "lon": -58.6341764155735
            }
        },
        {
            "nombre_completo": "Comuna Matilde",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Matilde",
            "id": "823141",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000907323769831923
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7909169859257,
                "lon": -61.0206835646198
            }
        },
        {
            "nombre_completo": "Comuna San Eugenio",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Eugenio",
            "id": "823834",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000389248372722883
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.0796414115587,
                "lon": -61.0968257934086
            }
        },
        {
            "nombre_completo": "Municipio Ballesteros",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Ballesteros",
            "id": "141596",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.98748407473731e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.546237695526,
                "lon": -62.9807310033667
            }
        },
        {
            "nombre_completo": "Municipio Santo Tomé",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Santo Tomé",
            "id": "820154",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000637836447477448
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6486515852289,
                "lon": -60.7890247854108
            }
        },
        {
            "nombre_completo": "Municipio Cipolletti",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Cipolletti",
            "id": "620133",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0249221523372887
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.4535226486066,
                "lon": -68.691867486588
            }
        },
        {
            "nombre_completo": "Comuna Río Bamba",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Río Bamba",
            "id": "142455",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.7907060050776e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.0601407054622,
                "lon": -63.7340063162336
            }
        },
        {
            "nombre_completo": "Municipio Río Grande",
            "fuente": "AREF",
            "nombre": "Río Grande",
            "id": "940007",
            "provincia": {
                "nombre": "Tierra del Fuego",
                "id": "94",
                "interseccion": 0.000224452042010576
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -53.8589019360324,
                "lon": -67.7984341202447
            }
        },
        {
            "nombre_completo": "Comuna Pilar",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Pilar",
            "id": "823155",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00129677597194847
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.425119406857,
                "lon": -61.2815859594875
            }
        },
        {
            "nombre_completo": "Comuna Monte Vera",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Monte Vera",
            "id": "823001",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000568822351389946
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.521606263408,
                "lon": -60.6571879491945
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de las Talitas",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Las Talitas",
            "id": "900112",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00153300150606761
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.7625280421749,
                "lon": -65.1861319590978
            }
        },
        {
            "nombre_completo": "Comuna Lucio V. López",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Lucio V. López",
            "id": "822910",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000735961508931576
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.7559630469566,
                "lon": -61.0737388987249
            }
        },
        {
            "nombre_completo": "Comuna Nuevo Torino",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Nuevo Torino",
            "id": "823148",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00121723301385376
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3321781238899,
                "lon": -61.2599535857301
            }
        },
        {
            "nombre_completo": "Comuna Humboldt",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Humboldt",
            "id": "823099",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00186115925815173
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.4018426247073,
                "lon": -61.1185199212055
            }
        },
        {
            "nombre_completo": "Comuna Fighiera",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Fighiera",
            "id": "823400",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000980843128945861
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.2227947553067,
                "lon": -60.4653854509928
            }
        },
        {
            "nombre_completo": "Municipio Río Ceballos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Río Ceballos",
            "id": "140147",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000735969860394568
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.1729826637303,
                "lon": -64.3191044525332
            }
        },
        {
            "nombre_completo": "Comuna Cululú",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Cululú",
            "id": "823050",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00132315009021943
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.2478117037022,
                "lon": -60.9262185029576
            }
        },
        {
            "nombre_completo": "Comuna Progreso",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Progreso",
            "id": "823162",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000993421352432784
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1450237160009,
                "lon": -60.9900262574151
            }
        },
        {
            "nombre_completo": "Municipio Ing. Jacobacci",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Ing. Jacobacci",
            "id": "620252",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000125270049434719
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -41.3324324077447,
                "lon": -69.5580631515132
            }
        },
        {
            "nombre_completo": "Comuna Romang",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Romang",
            "id": "823715",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00520446227020066
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.4901219915799,
                "lon": -59.8198334757694
            }
        },
        {
            "nombre_completo": "Comuna Desvío Arijón",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Desvío Arijón",
            "id": "823764",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00126007574768011
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8625427633851,
                "lon": -60.8689041844499
            }
        },
        {
            "nombre_completo": "Comuna Hipatía",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Hipatía",
            "id": "823092",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00114875827039139
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0997692458585,
                "lon": -61.0746609329513
            }
        },
        {
            "nombre_completo": "Comuna Soutomayor",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Soutomayor",
            "id": "823274",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00171243292934175
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.9363666742081,
                "lon": -61.1757853570181
            }
        },
        {
            "nombre_completo": "Comuna Tacural",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Tacural",
            "id": "822371",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00101524768935491
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.8033974734616,
                "lon": -61.6144506254622
            }
        },
        {
            "nombre_completo": "Comuna Montes de Oca",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Montes de Oca",
            "id": "822014",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00324992038036216
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.6304057747774,
                "lon": -61.7894896795213
            }
        },
        {
            "nombre_completo": "Comuna Humberto Primo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Humberto Primo",
            "id": "822273",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0024561643565538
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.868882352834,
                "lon": -61.3471968909725
            }
        },
        {
            "nombre_completo": "Comuna Bustinza",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Bustinza",
            "id": "822882",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00244448432052633
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.6894261984962,
                "lon": -61.3524022732471
            }
        },
        {
            "nombre_completo": "Municipio Cerro Corá",
            "fuente": "Ministerio de Ecología",
            "nombre": "Cerro Corá",
            "id": "540070",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0051096394772177
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5269569187276,
                "lon": -55.602078795522
            }
        },
        {
            "nombre_completo": "Municipio Roldán",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Roldán",
            "id": "820294",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000872045102629935
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.8957783490774,
                "lon": -60.9187521819631
            }
        },
        {
            "nombre_completo": "Municipio Posadas",
            "fuente": "Ministerio de Ecología",
            "nombre": "Posadas",
            "id": "540119",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0110160339829297
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4338171392785,
                "lon": -55.9588395478272
            }
        },
        {
            "nombre_completo": "Municipio Panambí",
            "fuente": "Ministerio de Ecología",
            "nombre": "Panambí",
            "id": "540406",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00697875929715793
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.6772283781459,
                "lon": -54.9694390877479
            }
        },
        {
            "nombre_completo": "Municipio Hipólito Irigoyen",
            "fuente": "Ministerio de Ecología",
            "nombre": "Hipólito Irigoyen",
            "id": "540448",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00290853458323095
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.1001832606051,
                "lon": -55.3071982607112
            }
        },
        {
            "nombre_completo": "Comuna Los Puestos",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Los Puestos",
            "id": "908315",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0253635368588126
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.307109503708,
                "lon": -65.0372047995846
            }
        },
        {
            "nombre_completo": "Comuna Pueblo Andino",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Pueblo Andino",
            "id": "822924",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00035637544885553
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.6562575730711,
                "lon": -60.8950897190287
            }
        },
        {
            "nombre_completo": "Comuna Diego de Alvear",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Diego de Alvear",
            "id": "822637",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00190971573512238
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.3109550568,
                "lon": -62.1448112331167
            }
        },
        {
            "nombre_completo": "Comuna Piñero",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Piñero",
            "id": "823421",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000706964153356274
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.0903529206549,
                "lon": -60.7611100951987
            }
        },
        {
            "nombre_completo": "Comuna Villa Eloísa",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Villa Eloísa",
            "id": "822945",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00286807185543268
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.97909764739,
                "lon": -61.5854778267263
            }
        },
        {
            "nombre_completo": "Comuna Juncal",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Juncal",
            "id": "822469",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0021545277531151
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.7131345050997,
                "lon": -61.0938153477268
            }
        },
        {
            "nombre_completo": "Comuna Alcorta",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Alcorta",
            "id": "822413",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00407075655223284
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.5768599189389,
                "lon": -61.1369934634345
            }
        },
        {
            "nombre_completo": "Municipio Azara",
            "fuente": "Ministerio de Ecología",
            "nombre": "Azara",
            "id": "540014",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00614217913395896
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.0544358853964,
                "lon": -55.6663453779073
            }
        },
        {
            "nombre_completo": "Municipio Colonia Aurora",
            "fuente": "Ministerio de Ecología",
            "nombre": "Colonia Aurora",
            "id": "540518",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.018342961367073
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.3576371079952,
                "lon": -54.4485723077611
            }
        },
        {
            "nombre_completo": "Comuna Acebal",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Acebal",
            "id": "823351",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000941252381470341
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.2433836177208,
                "lon": -60.8804688942708
            }
        },
        {
            "nombre_completo": "Comuna Uranga",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Uranga",
            "id": "823449",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000556858684630317
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.2732069574524,
                "lon": -60.7175504486773
            }
        },
        {
            "nombre_completo": "Comuna Villa Mugueta",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Villa Mugueta",
            "id": "824037",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00215776800249432
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.3210672687667,
                "lon": -61.0446821957672
            }
        },
        {
            "nombre_completo": "Comuna Chañar Ladeado",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Chañar Ladeado",
            "id": "822063",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00184942588184901
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.3079861342604,
                "lon": -62.0036810567071
            }
        },
        {
            "nombre_completo": "Comuna Berabevú",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Berabevú",
            "id": "822042",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00173480076693098
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.2950393682508,
                "lon": -61.8668567595637
            }
        },
        {
            "nombre_completo": "Comuna Los Quirquinchos",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Los Quirquinchos",
            "id": "822084",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00169911051628743
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.3121265044986,
                "lon": -61.7157535227622
            }
        },
        {
            "nombre_completo": "Comuna La Chispa",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "La Chispa",
            "id": "822658",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00126565581803241
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.541936744233,
                "lon": -61.9638069432744
            }
        },
        {
            "nombre_completo": "Comuna Chovet",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Chovet",
            "id": "822623",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00276931082282433
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.5498667445692,
                "lon": -61.650449190212
            }
        },
        {
            "nombre_completo": "Comuna Gödeken",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Gödeken",
            "id": "822070",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00182423212614444
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.4139104479583,
                "lon": -61.8824911849558
            }
        },
        {
            "nombre_completo": "Comuna María Teresa",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "María Teresa",
            "id": "822686",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00475074903315845
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.0395665841678,
                "lon": -61.9128668122658
            }
        },
        {
            "nombre_completo": "Comuna Santa Teresa",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Santa Teresa",
            "id": "822518",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00149789652299785
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.4122172296587,
                "lon": -60.8200483661571
            }
        },
        {
            "nombre_completo": "Comuna Coronel Bogado",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Coronel Bogado",
            "id": "823393",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0011755720928593
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.3068723102644,
                "lon": -60.5882071972284
            }
        },
        {
            "nombre_completo": "Municipio Granadero Baigorria",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Granadero Baigorria",
            "id": "820196",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000212223223337388
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.8513187425264,
                "lon": -60.7040059945102
            }
        },
        {
            "nombre_completo": "Municipio Bialet Massé",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Bialet Massé",
            "id": "140665",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000360539684009383
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.3121237322311,
                "lon": -64.5025780020643
            }
        },
        {
            "nombre_completo": "Municipio Capitán Bermúdez",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Capitán Bermúdez",
            "id": "820266",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000229091040755406
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.8201185294457,
                "lon": -60.7155011280834
            }
        },
        {
            "nombre_completo": "Comuna Ibarlucea",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Ibarlucea",
            "id": "823414",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000387217261855922
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.8521392232929,
                "lon": -60.8055572417445
            }
        },
        {
            "nombre_completo": "Comuna Alvear",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Alvear",
            "id": "823372",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000474776489950513
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.0710404515635,
                "lon": -60.6419157603517
            }
        },
        {
            "nombre_completo": "Comuna Alejandra",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Alejandra",
            "id": "823687",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0192773546549296
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.9434037285444,
                "lon": -59.8247012547278
            }
        },
        {
            "nombre_completo": "Municipio Capioví",
            "fuente": "Ministerio de Ecología",
            "nombre": "Capioví",
            "id": "540294",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00357694608700479
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.9170167064855,
                "lon": -55.058944620698
            }
        },
        {
            "nombre_completo": "Comuna Salto Grande",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Salto Grande",
            "id": "822931",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00180287993811424
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.6908912128988,
                "lon": -61.1174499429479
            }
        },
        {
            "nombre_completo": "Comuna Aarón Castellanos",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Aarón Castellanos",
            "id": "822574",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00310406137438533
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.3009579908087,
                "lon": -62.3291867781285
            }
        },
        {
            "nombre_completo": "Municipio El Bolson",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "El Bolson",
            "id": "620070",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00689905019672727
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -41.8628906112854,
                "lon": -71.5292009547547
            }
        },
        {
            "nombre_completo": "Municipio San Carlos de Bariloche",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "San Carlos de Bariloche",
            "id": "620077",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00128149222603562
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -41.1225978897056,
                "lon": -71.3797361980635
            }
        },
        {
            "nombre_completo": "Municipio Luis Beltran",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Luis Beltran",
            "id": "620056",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000569735717414173
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.3096814687974,
                "lon": -65.7874879345286
            }
        },
        {
            "nombre_completo": "Municipio Choele Choel",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Choele Choel",
            "id": "620028",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000897479212690583
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.2954108986731,
                "lon": -65.6496694401313
            }
        },
        {
            "nombre_completo": "Municipio Santo Pipo",
            "fuente": "Ministerio de Ecología",
            "nombre": "Santo Pipo",
            "id": "540469",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0108163747980168
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.2063287575881,
                "lon": -55.279570796595
            }
        },
        {
            "nombre_completo": "Municipio Campo Grande",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Campo Grande",
            "id": "620098",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000280088838354245
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.6833232356604,
                "lon": -68.1813074789279
            }
        },
        {
            "nombre_completo": "Municipio Colonia Polana",
            "fuente": "Ministerio de Ecología",
            "nombre": "Colonia Polana",
            "id": "540420",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00286377637714241
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.0078976283378,
                "lon": -55.3166124203083
            }
        },
        {
            "nombre_completo": "Municipio Mainque",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Mainque",
            "id": "620175",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00462372875955573
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.8398592335241,
                "lon": -67.3191257956811
            }
        },
        {
            "nombre_completo": "Municipio Jesús María",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Jesús María",
            "id": "140112",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000592796494583725
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.9830362325549,
                "lon": -64.1282788962145
            }
        },
        {
            "nombre_completo": "Municipio La Cautiva",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Cautiva",
            "id": "140826",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.84187551746942e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.9820493176756,
                "lon": -64.0855019234334
            }
        },
        {
            "nombre_completo": "Municipio Gobernador López",
            "fuente": "Ministerio de Ecología",
            "nombre": "Gobernador López",
            "id": "540273",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00298484222571172
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.6390377593074,
                "lon": -55.2119796755876
            }
        },
        {
            "nombre_completo": "Municipio Ingeniero Huergo",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Ingeniero Huergo",
            "id": "620168",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00521168990255257
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.8373190542739,
                "lon": -67.2329966686374
            }
        },
        {
            "nombre_completo": "Comisión de Fomento El Manso",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "El Manso",
            "id": "625028",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00688560673907579
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.5877092934517,
                "lon": -71.5461873896747
            }
        },
        {
            "nombre_completo": "Municipio La Granja",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Granja",
            "id": "140126",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00069157902268045
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.0000989874002,
                "lon": -64.2753880432833
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Sierra Paileman",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Sierra Paileman",
            "id": "625189",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0169972445717072
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.2545511067632,
                "lon": -66.4262124862793
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Pichi Huinca",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Pichi Huinca",
            "id": "425112",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00359580009986148
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -35.6486769518977,
                "lon": -64.7947455489824
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Yaminué",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Yaminué",
            "id": "625126",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0026701403947605
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.0317785123533,
                "lon": -67.2289997540711
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Colan Conhué",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Colan Conhué",
            "id": "625203",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0135123456750555
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -40.6523873505042,
                "lon": -69.0264752767975
            }
        },
        {
            "nombre_completo": "Municipio Colazo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colazo",
            "id": "141001",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.23601841700942e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.9618836173473,
                "lon": -63.3815414522131
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Mencuen",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Mencuen",
            "id": "625070",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0223254912626866
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -40.2923882541388,
                "lon": -69.5866017327969
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Clemente Onelli",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Clemente Onelli",
            "id": "625217",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00521623512914816
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.2742447606359,
                "lon": -70.0751620437645
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Pilquiniyeu del Limay",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Pilquiniyeu del Limay",
            "id": "625140",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00379102692331626
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -40.5306782823036,
                "lon": -70.0352483234368
            }
        },
        {
            "nombre_completo": "Municipio Puerto Madryn",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Puerto Madryn",
            "id": "260007",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.00211495105161688
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -42.73147668589,
                "lon": -65.0483377516849
            }
        },
        {
            "nombre_completo": "Municipio Cholila",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Cholila",
            "id": "260014",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.00131113476927878
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -42.482632829529,
                "lon": -71.4218533427071
            }
        },
        {
            "nombre_completo": "Municipio Río Pico",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Río Pico",
            "id": "260161",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.015827271027683
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -44.1813420342195,
                "lon": -71.3431136361393
            }
        },
        {
            "nombre_completo": "Municipio Alto Río Senguer",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Alto Río Senguer",
            "id": "260126",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.0204926965044508
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -44.9493845325169,
                "lon": -71.2117317733664
            }
        },
        {
            "nombre_completo": "Municipio Gobernador Costa",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Gobernador Costa",
            "id": "260147",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.0168658726182828
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -44.2923070734091,
                "lon": -70.7832052068574
            }
        },
        {
            "nombre_completo": "Municipio El Hoyo",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "El Hoyo",
            "id": "260021",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000882832900567701
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -42.1082232091107,
                "lon": -71.4939336193377
            }
        },
        {
            "nombre_completo": "Comuna Rural Cushamen",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Cushamen",
            "id": "268014",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000162506429618246
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -42.1630600944267,
                "lon": -70.6587711745075
            }
        },
        {
            "nombre_completo": "Comuna Rural Dique Florentino Ameghino",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Dique Florentino Ameghino",
            "id": "268028",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000141147598773447
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -43.6946453652295,
                "lon": -66.4938176077616
            }
        },
        {
            "nombre_completo": "Comuna Rural Doctor Ricardo Rojas",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Doctor Ricardo Rojas",
            "id": "268098",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 1.59953997325175e-05
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -45.5777033871546,
                "lon": -71.0372325754432
            }
        },
        {
            "nombre_completo": "Municipio Corcovado",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Corcovado",
            "id": "260070",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000349499999475159
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -43.517929877381,
                "lon": -71.457093661324
            }
        },
        {
            "nombre_completo": "Municipio Sarmiento",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Sarmiento",
            "id": "260140",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.00309332830909642
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -45.6405207802239,
                "lon": -69.0158940631978
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Paso de Indios",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Paso de Indios",
            "id": "265021",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 8.29788467037483e-05
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -43.8683992681332,
                "lon": -69.0483419273241
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Gualjaina",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Gualjaina",
            "id": "265007",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000343313992079377
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -42.7142084594083,
                "lon": -70.5385061881655
            }
        },
        {
            "nombre_completo": "Comuna Rural Aldea Epulef",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Aldea Epulef",
            "id": "268049",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000441842767840628
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -43.3048186911105,
                "lon": -69.6832150363228
            }
        },
        {
            "nombre_completo": "Comuna Rural Facundo",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Facundo",
            "id": "268105",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000158788382200864
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -45.2957790585196,
                "lon": -69.9689190757892
            }
        },
        {
            "nombre_completo": "Comuna Rural Gan Gan",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Gan Gan",
            "id": "268126",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 3.38724646714757e-05
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -42.517453780872,
                "lon": -68.2827116707789
            }
        },
        {
            "nombre_completo": "Comuna Rural Lago Blanco",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Lago Blanco",
            "id": "268112",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 1.15073114634911e-05
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -45.9334874892864,
                "lon": -71.2821431559325
            }
        },
        {
            "nombre_completo": "Comuna Rural Lagunita Salada",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Lagunita Salada",
            "id": "268042",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000438407808652698
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -42.7651335003203,
                "lon": -69.1757884059083
            }
        },
        {
            "nombre_completo": "Comuna Rural Las Plumas",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Las Plumas",
            "id": "268077",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 2.10490156409673e-05
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -43.7137219194695,
                "lon": -67.2925930651808
            }
        },
        {
            "nombre_completo": "Comuna Rural Los Altares",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Los Altares",
            "id": "268084",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000446476536592965
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -43.8915368579323,
                "lon": -68.439661239644
            }
        },
        {
            "nombre_completo": "Comuna Rural Paso del Sapo",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Paso del Sapo",
            "id": "268070",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000164237285633914
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -42.7463204230383,
                "lon": -69.5836276706305
            }
        },
        {
            "nombre_completo": "Municipio Quehué",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Quehué",
            "id": "420294",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0110254345269098
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.1049269830237,
                "lon": -64.7100455299848
            }
        },
        {
            "nombre_completo": "Comuna Rural Telsen",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Telsen",
            "id": "268133",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 2.69718957587489e-05
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -42.4225080787712,
                "lon": -66.9530756416637
            }
        },
        {
            "nombre_completo": "Municipio Arata",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Arata",
            "id": "420035",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00378293021248887
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.6396510640821,
                "lon": -64.371960668905
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Sarah",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Sarah",
            "id": "425140",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0015666239789947
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -35.0689021449121,
                "lon": -63.6874058774599
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Loventué",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Loventué",
            "id": "425091",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0039401846460515
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -36.1713696479035,
                "lon": -65.2508938793726
            }
        },
        {
            "nombre_completo": "Municipio Lonquimay",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Lonquimay",
            "id": "420217",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00416041661265014
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.4918397041486,
                "lon": -63.637667725147
            }
        },
        {
            "nombre_completo": "Municipio Luan Toro",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Luan Toro",
            "id": "420224",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00829796137083432
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.244121325494,
                "lon": -65.0217182225344
            }
        },
        {
            "nombre_completo": "Municipio Carro Quemado",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Carro Quemado",
            "id": "420070",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0240970782425392
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.6770495426264,
                "lon": -65.3294244941345
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Perú",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Perú",
            "id": "425105",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00283622896856824
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -37.6579811945705,
                "lon": -64.0516815451907
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Colonia Santa María",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Santa María",
            "id": "425028",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00421379410834895
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -37.4369062402097,
                "lon": -64.1768424743253
            }
        },
        {
            "nombre_completo": "Municipio Jacinto Arauz",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Jacinto Arauz",
            "id": "420182",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00989606681388529
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.2691742864471,
                "lon": -63.4812273049458
            }
        },
        {
            "nombre_completo": "Municipio Tomás Manuel Anchorena",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Tomás Manuel Anchorena",
            "id": "420364",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00488039335293301
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.8296816826031,
                "lon": -63.4977798993706
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Relmo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Relmo",
            "id": "425126",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.000694609999555921
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -36.2436590954094,
                "lon": -63.4979561556211
            }
        },
        {
            "nombre_completo": "Municipio Santa Rosa",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Santa Rosa",
            "id": "420336",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0101962091072072
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.5322365145791,
                "lon": -64.4089343089286
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Gobernador Duval",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Gobernador Duval",
            "id": "425070",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0490643533403468
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -38.5453661204737,
                "lon": -65.8572271584388
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Falucho",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Falucho",
            "id": "425063",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0018519099781955
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -35.1878951146314,
                "lon": -64.0782858104043
            }
        },
        {
            "nombre_completo": "Comuna Casa de Piedra",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Casa de Piedra",
            "id": "422007",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0116984493759267
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -38.2360587226759,
                "lon": -66.9836778535492
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Cuchillo Có",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cuchillo Có",
            "id": "425042",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0177148503636971
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -38.2880644808571,
                "lon": -64.8154556410667
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Algarrobo del Águila",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Algarrobo del Águila",
            "id": "420011",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0307086004007287
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -36.4002145195534,
                "lon": -67.4087920568523
            }
        },
        {
            "nombre_completo": "Municipio Vértiz",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Vértiz",
            "id": "420392",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00308667944987115
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.4203277421276,
                "lon": -63.9035759107822
            }
        },
        {
            "nombre_completo": "Municipio Achiras",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Achiras",
            "id": "140756",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.10911656366175e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.1696958774564,
                "lon": -64.9783311643432
            }
        },
        {
            "nombre_completo": "Municipio Agua de Oro",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Agua de Oro",
            "id": "140084",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000682466508936099
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.0500245015485,
                "lon": -64.3259937691715
            }
        },
        {
            "nombre_completo": "Comuna Alto de los Quebrachos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Alto de los Quebrachos",
            "id": "142133",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00105460288157235
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.5351780991222,
                "lon": -65.1225465080377
            }
        },
        {
            "nombre_completo": "Comuna Ambul",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Ambul",
            "id": "142833",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000683877161112219
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5186767924263,
                "lon": -65.0780298240083
            }
        },
        {
            "nombre_completo": "Municipio Arias",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Arias",
            "id": "140483",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.50855018425777e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.6394688790659,
                "lon": -62.4028701481866
            }
        },
        {
            "nombre_completo": "Comuna Atahona",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Atahona",
            "id": "142609",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.6927201276173e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.8588942256558,
                "lon": -63.6494965710203
            }
        },
        {
            "nombre_completo": "Municipio Arroyito",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Arroyito",
            "id": "141176",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000124926261143736
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4197877113034,
                "lon": -63.0461064879716
            }
        },
        {
            "nombre_completo": "Municipio Bengolea",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Bengolea",
            "id": "140392",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.17703013843708e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.0277675204366,
                "lon": -63.6714870729591
            }
        },
        {
            "nombre_completo": "Municipio Benjamín Gould",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Benjamín Gould",
            "id": "141617",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.69611172620504e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.5839636595371,
                "lon": -62.7275448917718
            }
        },
        {
            "nombre_completo": "Municipio Cavanagh",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cavanagh",
            "id": "140504",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.3025861402512e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.477401802254,
                "lon": -62.3387928906849
            }
        },
        {
            "nombre_completo": "Municipio Cañada de Luque",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cañada de Luque",
            "id": "141512",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000130356240889257
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.7381485912168,
                "lon": -63.725138408134
            }
        },
        {
            "nombre_completo": "Municipio Villa del Dique",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa del Dique",
            "id": "140042",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00040043127999072
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.1348568466706,
                "lon": -64.4331269585083
            }
        },
        {
            "nombre_completo": "Comuna Casa Grande",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Casa Grande",
            "id": "142476",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.52877438784513e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1582887825211,
                "lon": -64.478139337956
            }
        },
        {
            "nombre_completo": "Municipio Charras",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Charras",
            "id": "140406",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.40872481702327e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.0231292173334,
                "lon": -64.0481926881725
            }
        },
        {
            "nombre_completo": "Comuna Colonia Bremen",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Bremen",
            "id": "143239",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.10494980545856e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.4634143562878,
                "lon": -62.730992323301
            }
        },
        {
            "nombre_completo": "Comuna Colonia las Cuatro Esquinas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia las Cuatro Esquinas",
            "id": "142637",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.15827840361134e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.2036266461889,
                "lon": -63.2243244282166
            }
        },
        {
            "nombre_completo": "Municipio Colonia Marina",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Marina",
            "id": "141197",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.44640154695637e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.2488859057542,
                "lon": -62.3626031807013
            }
        },
        {
            "nombre_completo": "Municipio Colonia Italiana",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Italiana",
            "id": "140511",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.08464510030025e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.3065740201285,
                "lon": -62.1813642349834
            }
        },
        {
            "nombre_completo": "Comuna Colonia Iturraspe",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Iturraspe",
            "id": "142938",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.79755779187688e-07
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.2076433233757,
                "lon": -62.111193657276
            }
        },
        {
            "nombre_completo": "Municipio Colonia Tirolesa",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Tirolesa",
            "id": "140098",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00225842561256202
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.2182550189733,
                "lon": -64.0295107530515
            }
        },
        {
            "nombre_completo": "Comuna Colonia las Pichanas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia las Pichanas",
            "id": "142945",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000133997531751232
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3039964065618,
                "lon": -62.9366942797858
            }
        },
        {
            "nombre_completo": "Municipio Villa Yacanto",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Yacanto",
            "id": "140070",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.0032349812192805
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.122539446147,
                "lon": -64.7855875348449
            }
        },
        {
            "nombre_completo": "Municipio Alba Posse",
            "fuente": "Ministerio de Ecología",
            "nombre": "Alba Posse",
            "id": "540511",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0140208428073959
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4811807319862,
                "lon": -54.7985455372284
            }
        },
        {
            "nombre_completo": "Comuna El Rastreador",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "El Rastreador",
            "id": "142315",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.82037596275865e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.6654575921611,
                "lon": -63.5399472201016
            }
        },
        {
            "nombre_completo": "Municipio Costasacate",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Costasacate",
            "id": "141008",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.71552877842702e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6470824674008,
                "lon": -63.7622771614346
            }
        },
        {
            "nombre_completo": "Municipio Embalse",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Embalse",
            "id": "140007",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000562694763024145
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.2156832682067,
                "lon": -64.3816869058496
            }
        },
        {
            "nombre_completo": "Municipio Colonia San Bartolomé",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia San Bartolomé",
            "id": "141211",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.64885792096944e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.5279808890143,
                "lon": -62.7236406722185
            }
        },
        {
            "nombre_completo": "Municipio Del Campillo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Del Campillo",
            "id": "140217",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.79293502825558e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.3738504142088,
                "lon": -64.5317794477809
            }
        },
        {
            "nombre_completo": "Comuna El Chacho",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "El Chacho",
            "id": "142364",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000353339017430048
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.8087116780106,
                "lon": -65.4590362546606
            }
        },
        {
            "nombre_completo": "Comuna El Crispín",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "El Crispín",
            "id": "142658",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.6651884706613e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0189797076703,
                "lon": -63.6071854343479
            }
        },
        {
            "nombre_completo": "Municipio El Fortín",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "El Fortín",
            "id": "141239",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.18953443831646e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.9696658576857,
                "lon": -62.3017073883342
            }
        },
        {
            "nombre_completo": "Municipio Guatimozín",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Guatimozín",
            "id": "140546",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.78093181353529e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.4605679567117,
                "lon": -62.433942915908
            }
        },
        {
            "nombre_completo": "Comuna El Rodeo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "El Rodeo",
            "id": "143211",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.81899357357913e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.1647579225083,
                "lon": -63.8576472993799
            }
        },
        {
            "nombre_completo": "Comuna Estancia de Guadalupe",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Estancia de Guadalupe",
            "id": "142371",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00130029724947792
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1856303095222,
                "lon": -65.2460012237226
            }
        },
        {
            "nombre_completo": "Municipio General Pinto",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General Pinto",
            "id": "060351",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00813990424457797
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.6683135253941,
                "lon": -62.0397484845501
            }
        },
        {
            "nombre_completo": "Municipio Etruria",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Etruria",
            "id": "140294",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.86376320155755e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.9395872460527,
                "lon": -63.2476339192828
            }
        },
        {
            "nombre_completo": "Municipio General Cabrera",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "General Cabrera",
            "id": "140413",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.53694560719491e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.8126298411653,
                "lon": -63.8707446907222
            }
        },
        {
            "nombre_completo": "Municipio San Cayetano",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "San Cayetano",
            "id": "060742",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.010047085737695
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.3886180658492,
                "lon": -59.5866369475028
            }
        },
        {
            "nombre_completo": "Municipio Tres Arroyos",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Tres Arroyos",
            "id": "060833",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0198482766976844
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.5116665533312,
                "lon": -60.2376664741026
            }
        },
        {
            "nombre_completo": "Municipio Coronel Dorrego",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Coronel Dorrego",
            "id": "060189",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0195949277744605
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.670481146508,
                "lon": -61.0956539726774
            }
        },
        {
            "nombre_completo": "Municipio Necochea",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Necochea",
            "id": "060581",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0152189599449576
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.2555189703716,
                "lon": -59.1673660597249
            }
        },
        {
            "nombre_completo": "Comuna Guasapampa",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Guasapampa",
            "id": "142378",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000865412670237903
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.134641078071,
                "lon": -65.3098829147869
            }
        },
        {
            "nombre_completo": "Municipio Huerta Grande",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Huerta Grande",
            "id": "140686",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.99353215047945e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.072010551809,
                "lon": -64.4965933938749
            }
        },
        {
            "nombre_completo": "Municipio Huinca Renancó",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Huinca Renancó",
            "id": "140224",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.99672905089047e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.8375108995881,
                "lon": -64.3759223052139
            }
        },
        {
            "nombre_completo": "Municipio Idiazabal",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Idiazabal",
            "id": "141652",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.7729292336577e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.8118251859775,
                "lon": -63.0314306796737
            }
        },
        {
            "nombre_completo": "Comuna Impira",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Impira",
            "id": "142812",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.92107779473373e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7968283637741,
                "lon": -63.6502998161586
            }
        },
        {
            "nombre_completo": "Municipio La Cesira",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Cesira",
            "id": "140623",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.99002160435432e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.9522414433712,
                "lon": -62.9759295184544
            }
        },
        {
            "nombre_completo": "Municipio La Francia",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Francia",
            "id": "141260",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.81498903905023e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4046082891522,
                "lon": -62.6361489012367
            }
        },
        {
            "nombre_completo": "Municipio Lezama",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Lezama",
            "id": "060466",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00337013908108334
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.8494190496267,
                "lon": -57.89575256553
            }
        },
        {
            "nombre_completo": "Municipio Chascomús",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Chascomús",
            "id": "060218",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0102065600810841
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.6187689428966,
                "lon": -57.9043202817549
            }
        },
        {
            "nombre_completo": "Municipio La Paquita",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Paquita",
            "id": "141267",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.39742059022664e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.9068096845912,
                "lon": -62.215044195689
            }
        },
        {
            "nombre_completo": "Municipio Punta Indio",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Punta Indio",
            "id": "060655",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00517615652222715
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.4261581088971,
                "lon": -57.3996034517523
            }
        },
        {
            "nombre_completo": "Municipio Campana",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Campana",
            "id": "060126",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00313005308983942
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.1381957287912,
                "lon": -58.8830222693034
            }
        },
        {
            "nombre_completo": "Municipio Laborde",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Laborde",
            "id": "141666",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.90961452576373e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.1508319281254,
                "lon": -62.8591932549994
            }
        },
        {
            "nombre_completo": "Municipio Laboulaye",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Laboulaye",
            "id": "140630",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.7032097274392e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.1281097677491,
                "lon": -63.3878358370211
            }
        },
        {
            "nombre_completo": "Municipio Laguna Larga",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Laguna Larga",
            "id": "141015",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.88835929844616e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.7757220077539,
                "lon": -63.7859839452442
            }
        },
        {
            "nombre_completo": "Municipio San Vicente",
            "fuente": "Ministerio de Ecología",
            "nombre": "San Vicente",
            "id": "540203",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0499214440487393
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.9628192811879,
                "lon": -54.4040788497149
            }
        },
        {
            "nombre_completo": "Comuna Colonia San Pedro",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia San Pedro",
            "id": "142952",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.5147648174062e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.7826893147179,
                "lon": -61.9173543437841
            }
        },
        {
            "nombre_completo": "Comuna La Pampa",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Pampa",
            "id": "143183",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.37207859353458e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.9460219430716,
                "lon": -64.2677377008499
            }
        },
        {
            "nombre_completo": "Comuna La Población",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Población",
            "id": "142896",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000337066898683851
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.0779893265375,
                "lon": -64.9970015769107
            }
        },
        {
            "nombre_completo": "Comuna La Posta",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Posta",
            "id": "142679",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.027892152974e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.5684483421589,
                "lon": -63.5150983800264
            }
        },
        {
            "nombre_completo": "Comuna La Rancherita",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Rancherita",
            "id": "143029",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.74443246421954e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.755784835336,
                "lon": -64.4614102717181
            }
        },
        {
            "nombre_completo": "Comuna La Rinconada",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Rinconada",
            "id": "142763",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.90476482551312e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.1602808580713,
                "lon": -62.9334837181419
            }
        },
        {
            "nombre_completo": "Municipio General Deheza",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "General Deheza",
            "id": "140420",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000108576615879999
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.7619158521806,
                "lon": -63.7924284582828
            }
        },
        {
            "nombre_completo": "Municipio La Tordilla",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Tordilla",
            "id": "141274",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.19344498206046e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.2431510613549,
                "lon": -63.0622120893958
            }
        },
        {
            "nombre_completo": "Municipio Las Acequias",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Acequias",
            "id": "140833",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.2961265431915e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.280100079492,
                "lon": -63.9782972324101
            }
        },
        {
            "nombre_completo": "Comuna General Fotheringham",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "General Fotheringham",
            "id": "143141",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.99662528575102e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.3218044631245,
                "lon": -63.8678208637172
            }
        },
        {
            "nombre_completo": "Municipio Las Higueras",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Higueras",
            "id": "140840",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.67742673910794e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.1041248833881,
                "lon": -64.2944375380398
            }
        },
        {
            "nombre_completo": "Comuna Las Isletillas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Isletillas",
            "id": "143148",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.46377044518718e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.5081704675122,
                "lon": -63.9294208789592
            }
        },
        {
            "nombre_completo": "Municipio Las Junturas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Junturas",
            "id": "141022",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.00534331774914e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.829574096629,
                "lon": -63.4501240234635
            }
        },
        {
            "nombre_completo": "Municipio General Levalle",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "General Levalle",
            "id": "140616",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.75529068301158e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.0132450114982,
                "lon": -63.9268210537681
            }
        },
        {
            "nombre_completo": "Municipio Las Vertientes",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Vertientes",
            "id": "140847",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.02469404647418e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.2821528731581,
                "lon": -64.5798008584753
            }
        },
        {
            "nombre_completo": "Comuna Leguizamón",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Leguizamón",
            "id": "142448",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.2956496731082e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.20479128376,
                "lon": -62.9791788265997
            }
        },
        {
            "nombre_completo": "Comuna Los Cerrillos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Cerrillos",
            "id": "142910",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000533003597760339
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.949964905103,
                "lon": -65.4006487224588
            }
        },
        {
            "nombre_completo": "Comuna Los Chañaritos (C.D. Eje)",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Chañaritos (C.D. Eje)",
            "id": "142196",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.4667838109102e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.4014391052477,
                "lon": -63.3341908709153
            }
        },
        {
            "nombre_completo": "Municipio Catriló",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Catriló",
            "id": "420077",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00504045378904862
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.4566752503384,
                "lon": -63.4792036669961
            }
        },
        {
            "nombre_completo": "Municipio Los Cocos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Cocos",
            "id": "140707",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.07342557980477e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.9267368141278,
                "lon": -64.5025995122289
            }
        },
        {
            "nombre_completo": "Comuna Los Hornillos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Hornillos",
            "id": "142917",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.38639698113311e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8985332069954,
                "lon": -64.9874489410362
            }
        },
        {
            "nombre_completo": "Comuna Los Mistoles",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Mistoles",
            "id": "143190",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.65795142510182e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.626345939801,
                "lon": -63.8831334918174
            }
        },
        {
            "nombre_completo": "Comuna Los Pozos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Pozos",
            "id": "142287",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.21717845985081e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.5184524118584,
                "lon": -64.2649072173164
            }
        },
        {
            "nombre_completo": "Comuna Maquinista Gallini",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Maquinista Gallini",
            "id": "142707",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.03057510859254e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.9181978256885,
                "lon": -63.5346280358157
            }
        },
        {
            "nombre_completo": "Municipio Marull",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Marull",
            "id": "141295",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.03039893851721e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.9962750605161,
                "lon": -62.8244615926655
            }
        },
        {
            "nombre_completo": "Comuna Los Talares",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Talares",
            "id": "142420",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000116200363136771
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.4025933536005,
                "lon": -65.0582614564783
            }
        },
        {
            "nombre_completo": "Municipio Los Zorros",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Zorros",
            "id": "141470",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.21641443315039e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.0450607687749,
                "lon": -63.2063904788812
            }
        },
        {
            "nombre_completo": "Municipio Lucio V. Mansilla",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Lucio V. Mansilla",
            "id": "141554",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.478461863158e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.7949326862785,
                "lon": -64.6680541082337
            }
        },
        {
            "nombre_completo": "Municipio Luque",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Luque",
            "id": "141029",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.72167107360534e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6466335826392,
                "lon": -63.3411184061502
            }
        },
        {
            "nombre_completo": "Comuna Luyaba",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Luyaba",
            "id": "142924",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00119467462067495
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.1482687509277,
                "lon": -65.0741168663064
            }
        },
        {
            "nombre_completo": "Comuna Malena",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Malena",
            "id": "142581",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.73890442253575e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.4904506753776,
                "lon": -64.4317442961675
            }
        },
        {
            "nombre_completo": "Comuna Pampayasta Norte",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Pampayasta Norte",
            "id": "143155",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.67136244635305e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.2379956630961,
                "lon": -63.6569925653938
            }
        },
        {
            "nombre_completo": "Comuna Panaholma",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Panaholma",
            "id": "142861",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000282302393073217
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6204775594048,
                "lon": -65.0686397589954
            }
        },
        {
            "nombre_completo": "Municipio Manfredi",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Manfredi",
            "id": "141036",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.08006489215568e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.8442770336696,
                "lon": -63.7430657929285
            }
        },
        {
            "nombre_completo": "Comuna Potrero de Garay",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Potrero de Garay",
            "id": "143050",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000655316280692244
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8011586456791,
                "lon": -64.5891432550297
            }
        },
        {
            "nombre_completo": "Municipio Matorrales",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Matorrales",
            "id": "141043",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.31923042851213e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.7149605696137,
                "lon": -63.5124530187689
            }
        },
        {
            "nombre_completo": "Municipio Melo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Melo",
            "id": "140637",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.39515300000188e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.3493518732702,
                "lon": -63.4365776529174
            }
        },
        {
            "nombre_completo": "Municipio Río de los Sauces",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Río de los Sauces",
            "id": "140028",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00453252005311875
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.5008531571475,
                "lon": -64.712137834636
            }
        },
        {
            "nombre_completo": "Comuna Mi Granja",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Mi Granja",
            "id": "142119",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000250838941202381
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3275574709174,
                "lon": -63.9790002860052
            }
        },
        {
            "nombre_completo": "Municipio Monte de los Gauchos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Monte de los Gauchos",
            "id": "140854",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.07397893581537e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.636040233796,
                "lon": -63.9021542900956
            }
        },
        {
            "nombre_completo": "Comuna Nicolás Bruzzone",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Nicolás Bruzzone",
            "id": "142224",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.49933911875687e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.4416086343239,
                "lon": -64.3382488459279
            }
        },
        {
            "nombre_completo": "Municipio Nono",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Nono",
            "id": "141099",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.0015068539536003
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.8047247770572,
                "lon": -65.0089907188352
            }
        },
        {
            "nombre_completo": "Comuna Pacheco de Melo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Pacheco de Melo",
            "id": "142322",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.07382509954807e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.7577742616375,
                "lon": -63.4894551789837
            }
        },
        {
            "nombre_completo": "Municipio Pilar",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Pilar",
            "id": "141057",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000167101646158609
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6802864251569,
                "lon": -63.8821893916396
            }
        },
        {
            "nombre_completo": "Comuna Plaza de Mercedes",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Plaza de Mercedes",
            "id": "142714",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.32679677332494e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.977225049207,
                "lon": -63.2611760527181
            }
        },
        {
            "nombre_completo": "Municipio Pozo del Molle",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Pozo del Molle",
            "id": "141064",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.22304375570541e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.0191752758653,
                "lon": -62.9178333970772
            }
        },
        {
            "nombre_completo": "Municipio Pueblo Italiano",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Pueblo Italiano",
            "id": "141715",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.94703585950067e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.8797412509003,
                "lon": -62.841904643319
            }
        },
        {
            "nombre_completo": "Comuna Ranqueles",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Ranqueles",
            "id": "142245",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.31367470979813e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.8429525115099,
                "lon": -64.0999800172126
            }
        },
        {
            "nombre_completo": "Comuna Rayo Cortado",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Rayo Cortado",
            "id": "142784",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.39366694881228e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.0719376972619,
                "lon": -63.828433136014
            }
        },
        {
            "nombre_completo": "Municipio Rosales",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Rosales",
            "id": "140644",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.37975953460808e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.1747592562317,
                "lon": -63.1529797656943
            }
        },
        {
            "nombre_completo": "Comuna Rosario del Saladillo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Rosario del Saladillo",
            "id": "143218",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.71270513588774e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.365342954353,
                "lon": -63.3904225262121
            }
        },
        {
            "nombre_completo": "Comuna Sagrada Familia",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Sagrada Familia",
            "id": "142721",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.04740381820669e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.2879311408046,
                "lon": -63.4453892518836
            }
        },
        {
            "nombre_completo": "Municipio San Antonio de Litín",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Antonio de Litín",
            "id": "141722",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.80369621706231e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.2154566164449,
                "lon": -62.6331396610771
            }
        },
        {
            "nombre_completo": "Municipio Santa Catalina",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Santa Catalina",
            "id": "140882",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.83127501975243e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.2024080778911,
                "lon": -64.4262539399712
            }
        },
        {
            "nombre_completo": "Municipio Santa Eufemia",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Santa Eufemia",
            "id": "140462",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.60238371473081e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.1935446312946,
                "lon": -63.2841258885037
            }
        },
        {
            "nombre_completo": "Municipio Santiago Temple",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Santiago Temple",
            "id": "141078",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.29166876742176e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.389999537335,
                "lon": -63.4185697040229
            }
        },
        {
            "nombre_completo": "Comuna Rural El Puestito",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "El Puestito",
            "id": "908028",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.020686978965868
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -26.3435461844368,
                "lon": -64.7690465238726
            }
        },
        {
            "nombre_completo": "Comuna Atahona",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Atahona",
            "id": "908490",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00574395704074467
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.3981645478568,
                "lon": -65.2924614558123
            }
        },
        {
            "nombre_completo": "Municipio Ruiz de Montoya",
            "fuente": "Ministerio de Ecología",
            "nombre": "Ruiz de Montoya",
            "id": "540329",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00448452942550275
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.0137225461159,
                "lon": -55.041599435926
            }
        },
        {
            "nombre_completo": "Municipio Rolón",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Rolón",
            "id": "420322",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00314325001427805
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.123144146264,
                "lon": -63.4697507510433
            }
        },
        {
            "nombre_completo": "Comuna El Bracho y el Cevilar",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "El Bracho y el Cevilar",
            "id": "908091",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00197240867582372
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.9800428183293,
                "lon": -65.1539697169584
            }
        },
        {
            "nombre_completo": "Comuna Rural El Naranjito",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "El Naranjito",
            "id": "908098",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00305605208518704
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -26.9938642872945,
                "lon": -65.0736277067654
            }
        },
        {
            "nombre_completo": "Municipio San Esteban",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Esteban",
            "id": "140714",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.8228034448609e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.9214339905767,
                "lon": -64.531631091885
            }
        },
        {
            "nombre_completo": "Comuna San Pablo y Villa Nougues",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "San Pablo y Villa Nougues",
            "id": "908371",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0144859997713742
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.822491702587,
                "lon": -65.488399392652
            }
        },
        {
            "nombre_completo": "Comuna Santa Lucia",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Santa Lucia",
            "id": "908427",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0043951419478149
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.0276412732379,
                "lon": -65.5535879427709
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Lules",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Lules",
            "id": "900077",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00477175421649031
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.9539510198961,
                "lon": -65.3408692819985
            }
        },
        {
            "nombre_completo": "Municipio San Javier y Yacanto",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Javier y Yacanto",
            "id": "141134",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000382515805435921
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.0189945410788,
                "lon": -65.035648976824
            }
        },
        {
            "nombre_completo": "Comuna San Joaquín",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Joaquín",
            "id": "142462",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.21206324198383e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.510881493493,
                "lon": -63.7131847442
            }
        },
        {
            "nombre_completo": "Municipio San José de la Dormida",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San José de la Dormida",
            "id": "141561",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.0008729523646e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.3571542328118,
                "lon": -63.947567595877
            }
        },
        {
            "nombre_completo": "Municipio San José de las Salinas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San José de las Salinas",
            "id": "141568",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.32657364225027e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.0065939301358,
                "lon": -64.5964266269363
            }
        },
        {
            "nombre_completo": "Municipio San Marcos Sud",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Marcos Sud",
            "id": "141729",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.47216386243457e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.6262603360861,
                "lon": -62.4804580153711
            }
        },
        {
            "nombre_completo": "Municipio San Pedro Norte",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Pedro Norte",
            "id": "141575",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.43732049699721e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.2554577373609,
                "lon": -64.2146114629847
            }
        },
        {
            "nombre_completo": "Comuna San Roque",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Roque",
            "id": "142518",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.38494804523247e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3514245506072,
                "lon": -64.450467547614
            }
        },
        {
            "nombre_completo": "Municipio Santa María de Punilla",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Santa María de Punilla",
            "id": "140721",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000427540755147797
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.2670502928978,
                "lon": -64.5162902727265
            }
        },
        {
            "nombre_completo": "Municipio Saturnino María Laspiur",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Saturnino María Laspiur",
            "id": "141344",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.08045158201942e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.703457733837,
                "lon": -62.4833254315983
            }
        },
        {
            "nombre_completo": "Municipio Sebastián Elcano",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Sebastián Elcano",
            "id": "140959",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.07827895250946e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.1594216007127,
                "lon": -63.5927415022851
            }
        },
        {
            "nombre_completo": "Municipio Seeber",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Seeber",
            "id": "141351",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.25885910603345e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.9253280210718,
                "lon": -62.0196850759195
            }
        },
        {
            "nombre_completo": "Comuna Segunda Usina",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Segunda Usina",
            "id": "142070",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.88133283682173e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.175259843518,
                "lon": -64.3726926526339
            }
        },
        {
            "nombre_completo": "Municipio Serrano",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Serrano",
            "id": "140651",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.20016272976189e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.4755850792197,
                "lon": -63.5333659644618
            }
        },
        {
            "nombre_completo": "Municipio Villa Concepción del Tío",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Concepción del Tío",
            "id": "141365",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.65741070635748e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.3297975420494,
                "lon": -62.812206116271
            }
        },
        {
            "nombre_completo": "Municipio Silvio Pellico",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Silvio Pellico",
            "id": "140336",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.75155998561815e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.2511789287088,
                "lon": -62.9325509169843
            }
        },
        {
            "nombre_completo": "Comuna Villa del Prado",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa del Prado",
            "id": "143085",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.27684085761035e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6204677227677,
                "lon": -64.3917917466749
            }
        },
        {
            "nombre_completo": "Municipio San Martín",
            "fuente": "Ministerio de Ecología",
            "nombre": "San Martín",
            "id": "540413",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0033344097680476
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4727246661256,
                "lon": -55.2627854314175
            }
        },
        {
            "nombre_completo": "Comuna Talaini",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Talaini",
            "id": "142392",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000279055235842433
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.2400441687223,
                "lon": -65.173844571924
            }
        },
        {
            "nombre_completo": "Comuna Tinoco",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Tinoco",
            "id": "142728",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00146079767079093
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1045315982935,
                "lon": -63.9052535784127
            }
        },
        {
            "nombre_completo": "Municipio Toledo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Toledo",
            "id": "141407",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.2246628621671e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.5526503925745,
                "lon": -64.0108138150316
            }
        },
        {
            "nombre_completo": "Comuna Villa la Bolsa",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa la Bolsa",
            "id": "143092",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.77795065885074e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7320720279432,
                "lon": -64.4294772612583
            }
        },
        {
            "nombre_completo": "Comuna Comuna Villa Belgrano",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Comuna Villa Belgrano",
            "id": "908224",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00208431408739261
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.5393455705576,
                "lon": -65.5967033166023
            }
        },
        {
            "nombre_completo": "Municipio Valle Hermoso",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Valle Hermoso",
            "id": "140735",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000332614016579003
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.132372566268,
                "lon": -64.4920990495328
            }
        },
        {
            "nombre_completo": "Municipio Villa Allende",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Allende",
            "id": "140175",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000591553091685961
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.2723301734498,
                "lon": -64.3361456913081
            }
        },
        {
            "nombre_completo": "Municipio Villa Rossi",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Rossi",
            "id": "140658",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.52108909900864e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.29760379345,
                "lon": -63.2704154896919
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Adolfo Van Praet",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Adolfo Van Praet",
            "id": "425007",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00152324496310763
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -35.0687880041611,
                "lon": -64.0161738244231
            }
        },
        {
            "nombre_completo": "Municipio Villa Ascasubi",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Ascasubi",
            "id": "141505",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000156027979643749
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.1694820041982,
                "lon": -63.8898773171195
            }
        },
        {
            "nombre_completo": "Comuna Villa Candelaria Norte",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Candelaria Norte",
            "id": "142798",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.65450849276245e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.8240610680012,
                "lon": -63.3428315124573
            }
        },
        {
            "nombre_completo": "Comuna Villa San Esteban",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa San Esteban",
            "id": "142980",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.41390472753576e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6455668750732,
                "lon": -62.9033357626936
            }
        },
        {
            "nombre_completo": "Comuna Villa de Pocho",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa de Pocho",
            "id": "142441",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.01035130322865e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.4730827915556,
                "lon": -65.2841808159514
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Dorila",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Dorila",
            "id": "420116",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00257292319207847
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -35.792273298645,
                "lon": -63.7458253289186
            }
        },
        {
            "nombre_completo": "Comuna Paso del Durazno",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Paso del Durazno",
            "id": "142329",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000270899257481966
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.1488335972339,
                "lon": -64.0213925904292
            }
        },
        {
            "nombre_completo": "Municipio Capilla del Monte",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Capilla del Monte",
            "id": "140672",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000612451271482151
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.8478650515881,
                "lon": -64.5261710599971
            }
        },
        {
            "nombre_completo": "Municipio Puerto Esperanza",
            "fuente": "Ministerio de Ecología",
            "nombre": "Puerto Esperanza",
            "id": "540210",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0204952758272666
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.0812488812615,
                "lon": -54.4721723500383
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Maisonnave",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Maisonnave",
            "id": "425098",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00100136108128296
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -35.0449274835385,
                "lon": -64.4002912370171
            }
        },
        {
            "nombre_completo": "Comisión Municipal Fraga",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Fraga",
            "id": "746049",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.000453452691485286
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.4675887566232,
                "lon": -65.8176668186051
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Quetrequén",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Quetrequén",
            "id": "425119",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.000681662167948214
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -35.0450496068839,
                "lon": -64.5365926709592
            }
        },
        {
            "nombre_completo": "Municipio Villa Fontana",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Fontana",
            "id": "140952",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.17143794075902e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.8951889539233,
                "lon": -63.1154326746594
            }
        },
        {
            "nombre_completo": "Municipio Villa Huidobro",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Huidobro",
            "id": "140252",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.87136958152364e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.8396563912,
                "lon": -64.5822038824256
            }
        },
        {
            "nombre_completo": "Comuna Villa los Aromos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa los Aromos",
            "id": "143099",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.49016263522003e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7198998965797,
                "lon": -64.4383564544401
            }
        },
        {
            "nombre_completo": "Comuna Villa los Patos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa los Patos",
            "id": "143246",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.54711659719929e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.7675652636145,
                "lon": -62.7274983332989
            }
        },
        {
            "nombre_completo": "Comisión Municipal P. de los Funes",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "P. de los Funes",
            "id": "746266",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.000564033879530553
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.210106793768,
                "lon": -66.2316846459176
            }
        },
        {
            "nombre_completo": "Comisión Municipal Carolina",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Carolina",
            "id": "746035",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00186516637708311
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.8230037708213,
                "lon": -66.1002883078041
            }
        },
        {
            "nombre_completo": "Municipio San Francisco",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "San Francisco",
            "id": "740028",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00191177084331069
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.5944806749798,
                "lon": -66.1262207074521
            }
        },
        {
            "nombre_completo": "Comisión Municipal Barrios",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Barrios",
            "id": "386245",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00478012795680799
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -22.2821895352065,
                "lon": -65.5258263700186
            }
        },
        {
            "nombre_completo": "Comisión Municipal Rinconada",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Rinconada",
            "id": "386077",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0301179896113105
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -22.4660000653539,
                "lon": -66.1133735661478
            }
        },
        {
            "nombre_completo": "Comuna Delfin Gallo",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Delfin Gallo",
            "id": "908084",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00199922024197559
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.8489596016316,
                "lon": -65.0611283648018
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Alderetes",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Alderetes",
            "id": "900021",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00216360113847383
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.7920185258273,
                "lon": -65.1344798411458
            }
        },
        {
            "nombre_completo": "Municipio Ushuaia",
            "fuente": "AREF",
            "nombre": "Ushuaia",
            "id": "940014",
            "provincia": {
                "nombre": "Tierra del Fuego",
                "id": "94",
                "interseccion": 2.66460794453795e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -54.80395624903,
                "lon": -68.3532508596173
            }
        },
        {
            "nombre_completo": "Comisión Municipal Santa Catalina",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Santa Catalina",
            "id": "386147",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.021717964726431
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -22.0322033691541,
                "lon": -66.1405716072481
            }
        },
        {
            "nombre_completo": "Comisión Municipal Cieneguillas",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Cieneguillas",
            "id": "386133",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0120218133525727
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -22.1254725215271,
                "lon": -65.9419011195485
            }
        },
        {
            "nombre_completo": "Municipio La Quiaca",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "La Quiaca",
            "id": "380406",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00762246776747915
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -22.1475151640073,
                "lon": -65.6497996902659
            }
        },
        {
            "nombre_completo": "Comisión Municipal Cusi Cusi",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Cusi Cusi",
            "id": "386140",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0492407299536562
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -22.4474904125097,
                "lon": -66.6739207590704
            }
        },
        {
            "nombre_completo": "Comisión Municipal Pumahuasi",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Pumahuasi",
            "id": "386266",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0183635051099299
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -22.3191975563463,
                "lon": -65.7808960012593
            }
        },
        {
            "nombre_completo": "Municipio Itacaruaré",
            "fuente": "Ministerio de Ecología",
            "nombre": "Itacaruaré",
            "id": "540483",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00675062177390675
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.8358055260116,
                "lon": -55.2793085457893
            }
        },
        {
            "nombre_completo": "Comisión Municipal Mina Pirquitas",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Mina Pirquitas",
            "id": "386070",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0568154347584656
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -22.719297663966,
                "lon": -66.6315369299641
            }
        },
        {
            "nombre_completo": "Comisión Municipal Puesto del Marqués",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Puesto del Marqués",
            "id": "386021",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0206122645462851
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -22.5922176518711,
                "lon": -65.6032729734536
            }
        },
        {
            "nombre_completo": "Comisión Municipal Hipólito Yrigoyen",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Hipólito Yrigoyen",
            "id": "386056",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0148571864102749
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -22.876197810149,
                "lon": -65.3462154739535
            }
        },
        {
            "nombre_completo": "Municipio Almafuerte",
            "fuente": "Ministerio de Ecología",
            "nombre": "Almafuerte",
            "id": "540238",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00281703489942343
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5255595161851,
                "lon": -55.387471713783
            }
        },
        {
            "nombre_completo": "Comisión Municipal Cangrejillos",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Cangrejillos",
            "id": "386252",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00514355869476523
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -22.4438999595476,
                "lon": -65.5405751330491
            }
        },
        {
            "nombre_completo": "Comisión Municipal Tres Cruces",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Tres Cruces",
            "id": "386063",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00963277130195045
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -22.9377695400232,
                "lon": -65.5450743065682
            }
        },
        {
            "nombre_completo": "Comisión Municipal Santa Ana",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Santa Ana",
            "id": "386231",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00382964536736413
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.3629727372252,
                "lon": -64.9607058736901
            }
        },
        {
            "nombre_completo": "Municipio Caimancito",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Caimancito",
            "id": "380119",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00934109510906863
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.6468833920894,
                "lon": -64.6976261158454
            }
        },
        {
            "nombre_completo": "Comisión Municipal Purmamarca",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Purmamarca",
            "id": "386189",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0481150075826277
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.7073529764015,
                "lon": -65.7590928734087
            }
        },
        {
            "nombre_completo": "Municipio Tilcara",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Tilcara",
            "id": "380329",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.02585702283137
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.6181762353082,
                "lon": -65.2742920000779
            }
        },
        {
            "nombre_completo": "Municipio El Talar",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "El Talar",
            "id": "380238",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00517302353634813
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.5770497484149,
                "lon": -64.2904725263415
            }
        },
        {
            "nombre_completo": "Comisión Municipal San Francisco",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "San Francisco",
            "id": "386224",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00239707781362845
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.6236121126706,
                "lon": -64.9242015066972
            }
        },
        {
            "nombre_completo": "Comisión Municipal Tumbaya",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Tumbaya",
            "id": "386196",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00714657075665864
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.8140533222167,
                "lon": -65.4938002318189
            }
        },
        {
            "nombre_completo": "Comisión Municipal Volcán",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Volcán",
            "id": "386203",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00590182199791698
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -23.8993268381873,
                "lon": -65.4107118105984
            }
        },
        {
            "nombre_completo": "Municipio Palma Sola",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Palma Sola",
            "id": "380245",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0329908705797994
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.0747906107904,
                "lon": -64.3074515630432
            }
        },
        {
            "nombre_completo": "Comisión Municipal Yala",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Yala",
            "id": "386028",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.027782585795533
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -24.0245351929013,
                "lon": -65.4612010689142
            }
        },
        {
            "nombre_completo": "Comisión Municipal El Piquete",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "El Piquete",
            "id": "386119",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0167991973041673
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -24.0318634646701,
                "lon": -64.5780392132909
            }
        },
        {
            "nombre_completo": "Comisión Municipal El Fuerte",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "El Fuerte",
            "id": "386098",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00768800558405368
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -24.3217934967158,
                "lon": -64.4580224346764
            }
        },
        {
            "nombre_completo": "Comisión Municipal Puesto Viejo",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Puesto Viejo",
            "id": "386049",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0037795571865852
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -24.4724198554792,
                "lon": -64.9589333176208
            }
        },
        {
            "nombre_completo": "Municipio Monterrico",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Monterrico",
            "id": "380063",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00204787619641099
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.4592180378992,
                "lon": -65.1355981658048
            }
        },
        {
            "nombre_completo": "Municipio Iruya",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Iruya",
            "id": "660175",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0172574696958099
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -22.7966946998465,
                "lon": -65.0073390630697
            }
        },
        {
            "nombre_completo": "Comisión Municipal Pampa Blanca",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Pampa Blanca",
            "id": "386042",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00145089940243373
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -24.5380294825293,
                "lon": -65.0401221007485
            }
        },
        {
            "nombre_completo": "Municipio Chicoana",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Chicoana",
            "id": "660091",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00511544467200805
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.15962281326,
                "lon": -65.6740171346466
            }
        },
        {
            "nombre_completo": "Comisión Municipal Aguas Calientes",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Aguas Calientes",
            "id": "386035",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.00113451995639994
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -24.5653059933412,
                "lon": -64.9371057987964
            }
        },
        {
            "nombre_completo": "Municipio San Carlos",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "San Carlos",
            "id": "660392",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0117577223097396
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.6101715768953,
                "lon": -65.9299075522857
            }
        },
        {
            "nombre_completo": "Municipio La Poma",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "La Poma",
            "id": "660224",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0257451408491204
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.1468742630428,
                "lon": -66.2073026200224
            }
        },
        {
            "nombre_completo": "Municipio El Bordo",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "El Bordo",
            "id": "660112",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00134170767479188
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.5863532648532,
                "lon": -65.1601375683571
            }
        },
        {
            "nombre_completo": "Municipio San Pedro de Jujuy",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "San Pedro de Jujuy",
            "id": "380224",
            "provincia": {
                "nombre": "Jujuy",
                "id": "38",
                "interseccion": 0.0245141825113116
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.312078357594,
                "lon": -64.7901598595736
            }
        },
        {
            "nombre_completo": "Municipio Animaná",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Animaná",
            "id": "660385",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00297595997504254
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.9582267266097,
                "lon": -65.9762475210556
            }
        },
        {
            "nombre_completo": "Municipio San Lorenzo",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "San Lorenzo",
            "id": "660070",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00130458937675457
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.7507448986605,
                "lon": -65.5329792794034
            }
        },
        {
            "nombre_completo": "Municipio Urundel",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Urundel",
            "id": "660322",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.004972544120209
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.4575886007376,
                "lon": -64.5835385816047
            }
        },
        {
            "nombre_completo": "Municipio Campo Santo",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Campo Santo",
            "id": "660105",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00235915456296353
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.6921051071382,
                "lon": -65.1385711455029
            }
        },
        {
            "nombre_completo": "Municipio Londres",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Londres",
            "id": "100084",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0160345555268111
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.8537703637583,
                "lon": -67.1506538679793
            }
        },
        {
            "nombre_completo": "Municipio La Viña",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "La Viña",
            "id": "660238",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00824260550871587
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.5361582471498,
                "lon": -65.6768022184739
            }
        },
        {
            "nombre_completo": "Municipio El Tala",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "El Tala",
            "id": "660210",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00279142565127461
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.0211681588359,
                "lon": -65.273042370562
            }
        },
        {
            "nombre_completo": "Municipio La Candelaria",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "La Candelaria",
            "id": "660217",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00447387374589069
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.1388785962188,
                "lon": -65.0289418135703
            }
        },
        {
            "nombre_completo": "Municipio Villa Vil",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Villa Vil",
            "id": "100119",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.048815808253472
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.5488558545602,
                "lon": -66.8075755872088
            }
        },
        {
            "nombre_completo": "Municipio Seclantás",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Seclantás",
            "id": "660287",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00313630022920242
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.2908465900777,
                "lon": -66.2193251725653
            }
        },
        {
            "nombre_completo": "Municipio Isla de Cañas",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Isla de Cañas",
            "id": "660182",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00519399679068796
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -22.8751953756977,
                "lon": -64.6309520432882
            }
        },
        {
            "nombre_completo": "Municipio Rosario de la Frontera",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Rosario de la Frontera",
            "id": "660357",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0130543300698495
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.817054447077,
                "lon": -64.9983575611145
            }
        },
        {
            "nombre_completo": "Municipio La Caldera",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "La Caldera",
            "id": "660189",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00447727791248922
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.5621288281222,
                "lon": -65.3618587786935
            }
        },
        {
            "nombre_completo": "Municipio El Galpón",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "El Galpón",
            "id": "660259",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0212129820931057
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.4373334069771,
                "lon": -64.3349384487265
            }
        },
        {
            "nombre_completo": "Municipio Tartagal",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Tartagal",
            "id": "660161",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0178182533582517
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -22.5227285321064,
                "lon": -63.4562279353984
            }
        },
        {
            "nombre_completo": "Municipio General Ballivián",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "General Ballivián",
            "id": "660140",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0197405003713032
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -22.8977332748781,
                "lon": -63.6228257844102
            }
        },
        {
            "nombre_completo": "Municipio General Pizarro",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "General Pizarro",
            "id": "660021",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0122389881215155
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.2794745686322,
                "lon": -63.8534468819852
            }
        },
        {
            "nombre_completo": "Municipio Salta",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Salta",
            "id": "660063",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00911584887828996
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.9216984420798,
                "lon": -65.2407273845384
            }
        },
        {
            "nombre_completo": "Municipio Vaqueros",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Vaqueros",
            "id": "660196",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00260006177579285
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.562795547521,
                "lon": -65.5476759943034
            }
        },
        {
            "nombre_completo": "Municipio El Quebrachal",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "El Quebrachal",
            "id": "660014",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0287524839486959
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.3951182356291,
                "lon": -63.5716971394089
            }
        },
        {
            "nombre_completo": "Municipio Rosario de Lerma",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Rosario de Lerma",
            "id": "660371",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00286474012882631
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.9896500552558,
                "lon": -65.6890576785536
            }
        },
        {
            "nombre_completo": "Municipio El Carril",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "El Carril",
            "id": "660098",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00173040083578726
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.1273759330098,
                "lon": -65.4046412498238
            }
        },
        {
            "nombre_completo": "Municipio Rivadavia Banda Sur",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Rivadavia Banda Sur",
            "id": "660336",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0580766514187509
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.3036351895074,
                "lon": -62.9425949013532
            }
        },
        {
            "nombre_completo": "Municipio Payogasta",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Payogasta",
            "id": "660049",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00550613013891798
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.9895645901528,
                "lon": -66.0045604192247
            }
        },
        {
            "nombre_completo": "Municipio Colonia Santa Rosa",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Colonia Santa Rosa",
            "id": "660294",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00220965546376573
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.3864185280626,
                "lon": -64.3935047544791
            }
        },
        {
            "nombre_completo": "Municipio Rivadavia Banda Norte",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Rivadavia Banda Norte",
            "id": "660329",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0793940386177074
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.3621158597431,
                "lon": -62.7552635995286
            }
        },
        {
            "nombre_completo": "Municipio Profesor Salvador Mazza",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Profesor Salvador Mazza",
            "id": "660154",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00307267705919147
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -22.080694738194,
                "lon": -63.6744916072737
            }
        },
        {
            "nombre_completo": "Municipio El Potrero",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "El Potrero",
            "id": "660350",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.0224257894613367
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.9037792359638,
                "lon": -64.5704612298587
            }
        },
        {
            "nombre_completo": "Municipio Hipólito Yrigoyen",
            "fuente": "Direc. Grl. de Inmuebles",
            "nombre": "Hipólito Yrigoyen",
            "id": "660301",
            "provincia": {
                "nombre": "Salta",
                "id": "66",
                "interseccion": 0.00149906082546731
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.2605117685676,
                "lon": -64.2957534665367
            }
        },
        {
            "nombre_completo": "Municipio Valle Viejo",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Valle Viejo",
            "id": "100238",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0060820654435415
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.59871807716,
                "lon": -65.7071874333265
            }
        },
        {
            "nombre_completo": "Municipio Ancasti",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Ancasti",
            "id": "100035",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0196429463515632
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.9266654118729,
                "lon": -65.5038099239123
            }
        },
        {
            "nombre_completo": "Municipio Antofagasta de la Sierra",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Antofagasta de la Sierra",
            "id": "100056",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.273654739689677
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.9455797002437,
                "lon": -67.6777645029397
            }
        },
        {
            "nombre_completo": "Municipio Fiambalá",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Fiambalá",
            "id": "100224",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.171068297861148
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.3742769412864,
                "lon": -68.0496004163813
            }
        },
        {
            "nombre_completo": "Municipio Tinogasta",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Tinogasta",
            "id": "100231",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0526894838100989
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.0802347313232,
                "lon": -67.5384662106015
            }
        },
        {
            "nombre_completo": "Municipio Puerta de San José",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Puerta de San José",
            "id": "100105",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00620889589884547
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4335053633268,
                "lon": -66.9462225585685
            }
        },
        {
            "nombre_completo": "Municipio Puerta de Corral Quemado",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Puerta de Corral Quemado",
            "id": "100098",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0103933924077685
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.2602279002263,
                "lon": -67.1391373436804
            }
        },
        {
            "nombre_completo": "Municipio Los Varela",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Los Varela",
            "id": "100028",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00800318744254994
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.8547966718317,
                "lon": -65.9246262281669
            }
        },
        {
            "nombre_completo": "Municipio La Puerta",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "La Puerta",
            "id": "100014",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00241686486188682
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.1588888812784,
                "lon": -65.8053978996787
            }
        },
        {
            "nombre_completo": "Municipio Las Juntas",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Las Juntas",
            "id": "100021",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00378994613438764
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.051848407473,
                "lon": -65.9674435724261
            }
        },
        {
            "nombre_completo": "Municipio El Rodeo",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "El Rodeo",
            "id": "100007",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00382692391080741
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.2412100324274,
                "lon": -65.9465483637507
            }
        },
        {
            "nombre_completo": "Municipio Los Altos",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Los Altos",
            "id": "100213",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00708394939191068
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.0392957521347,
                "lon": -65.4509018337532
            }
        },
        {
            "nombre_completo": "Municipio El Alto",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "El Alto",
            "id": "100147",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0132327427227008
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.4229702192834,
                "lon": -65.4303983855819
            }
        },
        {
            "nombre_completo": "Municipio Santa Rosa",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Santa Rosa",
            "id": "100217",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00871790483159482
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.115741687642,
                "lon": -65.2407236956115
            }
        },
        {
            "nombre_completo": "Municipio Huillapima",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Huillapima",
            "id": "100133",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0145251381821321
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.6559829253266,
                "lon": -65.9135566327798
            }
        },
        {
            "nombre_completo": "Municipio Capayán",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Capayán",
            "id": "100126",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0288824023809099
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.0365947800972,
                "lon": -65.8955424431811
            }
        },
        {
            "nombre_completo": "Municipio Fray Mamerto Esquiú",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Fray Mamerto Esquiú",
            "id": "100161",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.00184741644614279
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.3329401551221,
                "lon": -65.7309008581155
            }
        },
        {
            "nombre_completo": "Municipio Recreo",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Recreo",
            "id": "100175",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.06684248270549
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.5256258739344,
                "lon": -65.2019736615272
            }
        },
        {
            "nombre_completo": "Municipio Corral Quemado",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Corral Quemado",
            "id": "100070",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0139055401359504
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.9802628151928,
                "lon": -67.0141675035393
            }
        },
        {
            "nombre_completo": "Municipio Icaño",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Icaño",
            "id": "100168",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0163297371639147
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.8613214720859,
                "lon": -65.150926733957
            }
        },
        {
            "nombre_completo": "Municipio Independencia",
            "fuente": "IGN",
            "nombre": "Independencia",
            "id": "460105",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0770956746933794
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.1144612462884,
                "lon": -67.3355202231145
            }
        },
        {
            "nombre_completo": "Municipio Tapso",
            "fuente": "Adm. Grl. de Catastro",
            "nombre": "Tapso",
            "id": "100154",
            "provincia": {
                "nombre": "Catamarca",
                "id": "10",
                "interseccion": 0.0058220720146424
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.447230708213,
                "lon": -65.1997533479276
            }
        },
        {
            "nombre_completo": "Municipio General Ocampo",
            "fuente": "IGN",
            "nombre": "General Ocampo",
            "id": "460084",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0413913207629041
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.0066417358943,
                "lon": -66.0590548631785
            }
        },
        {
            "nombre_completo": "Municipio Chamical",
            "fuente": "IGN",
            "nombre": "Chamical",
            "id": "460035",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0605219208134638
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.1677065304375,
                "lon": -65.9562869452052
            }
        },
        {
            "nombre_completo": "Municipio Arauco",
            "fuente": "IGN",
            "nombre": "Arauco",
            "id": "460007",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0272887213768803
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.5330735277516,
                "lon": -66.7191515034156
            }
        },
        {
            "nombre_completo": "Municipio General Belgrano",
            "fuente": "IGN",
            "nombre": "General Belgrano",
            "id": "460063",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0311041676427682
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.5776916502152,
                "lon": -65.9316310510947
            }
        },
        {
            "nombre_completo": "Municipio Capital",
            "fuente": "IGN",
            "nombre": "Capital",
            "id": "460014",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.146466106154406
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.4604898579358,
                "lon": -66.3525089002799
            }
        },
        {
            "nombre_completo": "Municipio Sanagasta",
            "fuente": "IGN",
            "nombre": "Sanagasta",
            "id": "460126",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.014179949664446
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.1585269700688,
                "lon": -67.0658836337793
            }
        },
        {
            "nombre_completo": "Municipio Chilecito",
            "fuente": "IGN",
            "nombre": "Chilecito",
            "id": "460042",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0571329788563004
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.3959374753196,
                "lon": -67.4278867892017
            }
        },
        {
            "nombre_completo": "Municipio General Vedia",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "General Vedia",
            "id": "220035",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00631279628068304
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.8225382802059,
                "lon": -58.7281314225757
            }
        },
        {
            "nombre_completo": "Municipio General Ángel Vicente Peñaloza",
            "fuente": "IGN",
            "nombre": "General Ángel Vicente Peñaloza",
            "id": "460056",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0343820373839386
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.3128975389814,
                "lon": -66.6630521188972
            }
        },
        {
            "nombre_completo": "Municipio General Juan Facundo Quiroga",
            "fuente": "IGN",
            "nombre": "General Juan Facundo Quiroga",
            "id": "460070",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0476363138730246
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.800959034536,
                "lon": -66.868104514456
            }
        },
        {
            "nombre_completo": "Municipio Rosario Vera Peñaloza",
            "fuente": "IGN",
            "nombre": "Rosario Vera Peñaloza",
            "id": "460112",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0559033421686679
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4205977732086,
                "lon": -66.6788621651991
            }
        },
        {
            "nombre_completo": "Municipio General San Martín",
            "fuente": "IGN",
            "nombre": "General San Martín",
            "id": "460091",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0498961638527694
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6413069709299,
                "lon": -66.1459756727951
            }
        },
        {
            "nombre_completo": "Municipio Famatina",
            "fuente": "IGN",
            "nombre": "Famatina",
            "id": "460049",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0451429062279942
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.6973037998884,
                "lon": -67.5592920371099
            }
        },
        {
            "nombre_completo": "Municipio San Blas de los Sauces",
            "fuente": "IGN",
            "nombre": "San Blas de los Sauces",
            "id": "460119",
            "provincia": {
                "nombre": "La Rioja",
                "id": "46",
                "interseccion": 0.0155515550763445
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.5433309062699,
                "lon": -67.1581530652485
            }
        },
        {
            "nombre_completo": "Municipio Chimbas",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Chimbas",
            "id": "700042",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.000762904819990603
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4874196948621,
                "lon": -68.5239289662613
            }
        },
        {
            "nombre_completo": "Municipio 9 de Julio",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "9 de Julio",
            "id": "700063",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.00175558192992495
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6458046846082,
                "lon": -68.3890526964703
            }
        },
        {
            "nombre_completo": "Municipio San Martín",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "San Martín",
            "id": "700091",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.00628505286477557
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.5285412012606,
                "lon": -68.2072931248825
            }
        },
        {
            "nombre_completo": "Municipio Rivadavia",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Rivadavia",
            "id": "700084",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.00137345504497465
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.5542325394479,
                "lon": -68.6416232535812
            }
        },
        {
            "nombre_completo": "Municipio Angaco",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Angaco",
            "id": "700014",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.0290270583676856
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.1922192642061,
                "lon": -68.1319625798127
            }
        },
        {
            "nombre_completo": "Municipio Caucete",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Caucete",
            "id": "700035",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.0860331105143201
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.5063817025853,
                "lon": -67.5458594420525
            }
        },
        {
            "nombre_completo": "Municipio Pocito",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Pocito",
            "id": "700070",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.00650025670271133
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.7459555808161,
                "lon": -68.5842081096793
            }
        },
        {
            "nombre_completo": "Municipio Sarmiento",
            "fuente": "Direc. de Geodesia y Catastro",
            "nombre": "Sarmiento",
            "id": "700105",
            "provincia": {
                "nombre": "San Juan",
                "id": "70",
                "interseccion": 0.0327230127200976
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.073542322508,
                "lon": -68.6911356211091
            }
        },
        {
            "nombre_completo": "Municipio Santa Rosa",
            "fuente": "IGN",
            "nombre": "Santa Rosa",
            "id": "500112",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.0584150858403919
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.6177946030973,
                "lon": -67.9636620466005
            }
        },
        {
            "nombre_completo": "Municipio La Paz",
            "fuente": "IGN",
            "nombre": "La Paz",
            "id": "500042",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.0489049193944582
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.7114684971789,
                "lon": -67.2475409227544
            }
        },
        {
            "nombre_completo": "Municipio Tupungato",
            "fuente": "IGN",
            "nombre": "Tupungato",
            "id": "500126",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.0164167234856535
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.291507019145,
                "lon": -69.301966753503
            }
        },
        {
            "nombre_completo": "Municipio Guaymallén",
            "fuente": "IGN",
            "nombre": "Guaymallén",
            "id": "500028",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.00106426939944268
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.8910429154042,
                "lon": -68.7323728513948
            }
        },
        {
            "nombre_completo": "Municipio Maipú",
            "fuente": "IGN",
            "nombre": "Maipú",
            "id": "500070",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.00402800699865528
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.9775099458466,
                "lon": -68.6521739904164
            }
        },
        {
            "nombre_completo": "Municipio Godoy Cruz",
            "fuente": "IGN",
            "nombre": "Godoy Cruz",
            "id": "500021",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.000522024234215165
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.9297600556689,
                "lon": -68.8890844545155
            }
        },
        {
            "nombre_completo": "Municipio Junín",
            "fuente": "IGN",
            "nombre": "Junín",
            "id": "500035",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.00170774208163888
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.1462075241433,
                "lon": -68.4803420038399
            }
        },
        {
            "nombre_completo": "Municipio San Martín",
            "fuente": "IGN",
            "nombre": "San Martín",
            "id": "500098",
            "provincia": {
                "nombre": "Mendoza",
                "id": "50",
                "interseccion": 0.00994894577370873
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.9088785853185,
                "lon": -68.2844229443887
            }
        },
        {
            "nombre_completo": "Municipio Santa Ana",
            "fuente": "Ministerio de Ecología",
            "nombre": "Santa Ana",
            "id": "540098",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00668650280955703
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4093121831825,
                "lon": -55.5975181316591
            }
        },
        {
            "nombre_completo": "Municipio Barrancas",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Barrancas",
            "id": "580196",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00548915204818823
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.8598372922577,
                "lon": -69.9370599267061
            }
        },
        {
            "nombre_completo": "Municipio Añelo",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Añelo",
            "id": "580014",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000905091896938959
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.3598393457539,
                "lon": -68.805219197613
            }
        },
        {
            "nombre_completo": "Municipio Las Lajas",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Las Lajas",
            "id": "580231",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000899444434454524
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.5447244406764,
                "lon": -70.3064166225065
            }
        },
        {
            "nombre_completo": "Municipio Zapala",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Zapala",
            "id": "580245",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00481008646462009
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.9328385901676,
                "lon": -70.1432085906335
            }
        },
        {
            "nombre_completo": "Municipio Senillosa",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Senillosa",
            "id": "580077",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.0152643130930318
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.9122912366411,
                "lon": -68.6767926458881
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Villa Pehuenia",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Villa Pehuenia",
            "id": "580252",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00166747283955464
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -38.9071357687471,
                "lon": -71.1785013312736
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Villa Traful",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Villa Traful",
            "id": "585070",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000777640991740989
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -40.6716922374749,
                "lon": -71.3996881541689
            }
        },
        {
            "nombre_completo": "Municipio Caviahue-Copahue",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Caviahue-Copahue",
            "id": "580168",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 3.25718751353076e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.8563623456879,
                "lon": -71.0450198744787
            }
        },
        {
            "nombre_completo": "Municipio Plottier",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Plottier",
            "id": "580070",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00152407620487611
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.9486355466446,
                "lon": -68.2772667713434
            }
        },
        {
            "nombre_completo": "Municipio Vista Alegre",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Vista Alegre",
            "id": "580091",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00104674896141318
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.7688687995696,
                "lon": -68.2001640971801
            }
        },
        {
            "nombre_completo": "Municipio Corpus",
            "fuente": "Ministerio de Ecología",
            "nombre": "Corpus",
            "id": "540427",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00317569071556201
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.1463492893014,
                "lon": -55.5070851678503
            }
        },
        {
            "nombre_completo": "Municipio San Ignacio",
            "fuente": "Ministerio de Ecología",
            "nombre": "San Ignacio",
            "id": "540462",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0120820095294961
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.2933473519193,
                "lon": -55.4592623960159
            }
        },
        {
            "nombre_completo": "Municipio San Patricio del Chañar",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "San Patricio del Chañar",
            "id": "580021",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00104402419944668
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.5950644241867,
                "lon": -68.3482884923227
            }
        },
        {
            "nombre_completo": "Municipio Gobernador Roca",
            "fuente": "Ministerio de Ecología",
            "nombre": "Gobernador Roca",
            "id": "540441",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00835330952617916
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.2531814207832,
                "lon": -55.3680377708939
            }
        },
        {
            "nombre_completo": "Municipio Villa el Chocón",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Villa el Chocón",
            "id": "580084",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000838323131789778
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.25636888483,
                "lon": -68.8408718852915
            }
        },
        {
            "nombre_completo": "Municipio Piedra del Águila",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Piedra del Águila",
            "id": "580035",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000956284012343312
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -40.0556599804128,
                "lon": -70.0814261575928
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Villa del Nahueve",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Villa del Nahueve",
            "id": "585098",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00762650096218053
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -37.0165803312123,
                "lon": -70.9189370546609
            }
        },
        {
            "nombre_completo": "Municipio Andacollo",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Andacollo",
            "id": "580140",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00351394872906659
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.2626267236257,
                "lon": -70.612978711671
            }
        },
        {
            "nombre_completo": "Municipio El Cholar",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "El Cholar",
            "id": "580175",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000833140039349404
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.4558329459089,
                "lon": -70.6873431812617
            }
        },
        {
            "nombre_completo": "Municipio Taquimilán",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Taquimilán",
            "id": "580189",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000834791759690647
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.5910001035078,
                "lon": -70.3458343954121
            }
        },
        {
            "nombre_completo": "Municipio Bajada del Agrio",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Bajada del Agrio",
            "id": "580224",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000888457988192781
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.4056776856649,
                "lon": -70.0310159232412
            }
        },
        {
            "nombre_completo": "Municipio Chos Malal",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Chos Malal",
            "id": "580098",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000797068749860244
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.3551399423083,
                "lon": -70.2702475118703
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Villa Curi Leuvú",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Villa Curi Leuvú",
            "id": "585056",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00293493147941843
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -37.1709436645892,
                "lon": -70.4296686921956
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Varvarco - Invernada Vieja",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Varvarco - Invernada Vieja",
            "id": "585091",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00710376417688566
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -36.7933760258872,
                "lon": -70.5962736544536
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Manzano Amargo",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Manzano Amargo",
            "id": "585084",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00655648998066429
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -36.6887545268274,
                "lon": -70.8071507874932
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Chorriaca",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Chorriaca",
            "id": "585063",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.019677155964645
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -37.9190485298909,
                "lon": -70.0460883788548
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Villa del Puente Picún Leufú",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Villa del Puente Picún Leufú",
            "id": "585154",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00243512612755463
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -39.207608881814,
                "lon": -70.0822342331812
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Aguada San Roque",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Aguada San Roque",
            "id": "585014",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.0148702741750953
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -37.9738679914896,
                "lon": -68.9371469809988
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Coyuco-Cochico",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Coyuco-Cochico",
            "id": "585049",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00856693886598864
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -36.5418089920472,
                "lon": -70.2492773646575
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Los Catutos",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Los Catutos",
            "id": "585140",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00128499550269577
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -38.8289996373229,
                "lon": -70.1262364173042
            }
        },
        {
            "nombre_completo": "Delegación Municipal Chorotis",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Chorotis",
            "id": "220119",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00955691368372202
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -27.880944092613,
                "lon": -61.5412578288586
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Paso Aguerre",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Paso Aguerre",
            "id": "585119",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.0035099044436854
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -39.3365722197045,
                "lon": -69.7956444882818
            }
        },
        {
            "nombre_completo": "Municipio Las Ovejas",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Las Ovejas",
            "id": "580154",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.00827830000264913
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.8419567404506,
                "lon": -70.9180527399826
            }
        },
        {
            "nombre_completo": "Municipio Villa la Angostura",
            "fuente": "Direc. Pcial. de Catastro e Inf. Territorial",
            "nombre": "Villa la Angostura",
            "id": "580133",
            "provincia": {
                "nombre": "Neuquén",
                "id": "58",
                "interseccion": 0.000865019802883317
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -40.7808534834015,
                "lon": -71.6236786668395
            }
        },
        {
            "nombre_completo": "Delegación Municipal Resistencia",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Resistencia",
            "id": "220413",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0156617359750722
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -27.5954104255766,
                "lon": -59.1446432497471
            }
        },
        {
            "nombre_completo": "Municipio Santa Sylvina",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Santa Sylvina",
            "id": "220126",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0128764748242275
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.8553437327266,
                "lon": -61.1226107564696
            }
        },
        {
            "nombre_completo": "Delegación Municipal Hermoso Campo",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Hermoso Campo",
            "id": "220112",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0161403354091617
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -27.6219112870161,
                "lon": -61.3295201873307
            }
        },
        {
            "nombre_completo": "Municipio Villa Ángela",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Villa Ángela",
            "id": "220322",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0136432954759592
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.6777566756929,
                "lon": -60.7557861498286
            }
        },
        {
            "nombre_completo": "Municipio Fontana",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Fontana",
            "id": "220399",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.000257984793564434
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4240633359421,
                "lon": -59.0468953135975
            }
        },
        {
            "nombre_completo": "Municipio Cote Lai",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Cote Lai",
            "id": "220462",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0203988343629692
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.6903851661283,
                "lon": -59.5673294759141
            }
        },
        {
            "nombre_completo": "Municipio Enrique Urien",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Enrique Urien",
            "id": "220315",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.015762496074433
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.7976804477474,
                "lon": -60.4537324021048
            }
        },
        {
            "nombre_completo": "Municipio Puerto Tirol",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Puerto Tirol",
            "id": "220254",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00776267821085221
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.3809344830458,
                "lon": -59.2976390762252
            }
        },
        {
            "nombre_completo": "Delegación Municipal Charadai",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Charadai",
            "id": "220469",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0399892739907658
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -27.6443129888649,
                "lon": -59.9622820759441
            }
        },
        {
            "nombre_completo": "Municipio Leoni",
            "fuente": "Ministerio de Ecología",
            "nombre": "Leoni",
            "id": "540315",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00346835518219027
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.9961973424163,
                "lon": -55.1380752661386
            }
        },
        {
            "nombre_completo": "Municipio Colonia Popular",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Colonia Popular",
            "id": "220231",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00157556798957978
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.2943327258119,
                "lon": -59.1285309815476
            }
        },
        {
            "nombre_completo": "Municipio Margarita Belén",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Margarita Belén",
            "id": "220371",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00824733562766549
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.0890008584069,
                "lon": -59.019408196902
            }
        },
        {
            "nombre_completo": "Municipio La Leonesa",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "La Leonesa",
            "id": "220049",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00739490918317061
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.9919281600835,
                "lon": -58.8471497244523
            }
        },
        {
            "nombre_completo": "Municipio Makallé",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Makallé",
            "id": "220161",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00681776790935504
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.1135329362586,
                "lon": -59.2318224474402
            }
        },
        {
            "nombre_completo": "Municipio Laguna Blanca",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Laguna Blanca",
            "id": "220238",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00114082302246021
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.226920353194,
                "lon": -59.1912791042958
            }
        },
        {
            "nombre_completo": "Municipio Lapachito",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Lapachito",
            "id": "220147",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00373730234303349
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.2612981499181,
                "lon": -59.4682527193081
            }
        },
        {
            "nombre_completo": "Municipio La Clotilde",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "La Clotilde",
            "id": "220336",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00282713482640491
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.1657262689173,
                "lon": -60.6807380504204
            }
        },
        {
            "nombre_completo": "Municipio Gancedo",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Gancedo",
            "id": "220091",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0105718620436174
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.407198062851,
                "lon": -61.6331625263326
            }
        },
        {
            "nombre_completo": "Municipio Colonia Alberdi",
            "fuente": "Ministerio de Ecología",
            "nombre": "Colonia Alberdi",
            "id": "540371",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00491035375558042
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.3573476620484,
                "lon": -55.2012287052642
            }
        },
        {
            "nombre_completo": "Municipio La Escondida",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "La Escondida",
            "id": "220140",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00272023658746656
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.0965245522956,
                "lon": -59.4870735247903
            }
        },
        {
            "nombre_completo": "Municipio Villa Berthet",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Villa Berthet",
            "id": "220427",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0134936068494507
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.265074813894,
                "lon": -60.3717297735563
            }
        },
        {
            "nombre_completo": "Municipio La Verde",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "La Verde",
            "id": "220154",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00206536375454953
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.0720366577963,
                "lon": -59.3269273302486
            }
        },
        {
            "nombre_completo": "Municipio La Tigra",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "La Tigra",
            "id": "220343",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00308776547902798
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.083494928219,
                "lon": -60.6148397314775
            }
        },
        {
            "nombre_completo": "Delegación Municipal General Pinedo",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "General Pinedo",
            "id": "220105",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0153168748920275
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -27.2779150070409,
                "lon": -61.3663751828745
            }
        },
        {
            "nombre_completo": "Municipio Capitán Solari",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Capitán Solari",
            "id": "220434",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00381509926358517
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.8012560068177,
                "lon": -59.4375309617602
            }
        },
        {
            "nombre_completo": "Municipio Charata",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Charata",
            "id": "220084",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0152602783606318
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.1179308914952,
                "lon": -61.3088910559238
            }
        },
        {
            "nombre_completo": "Delegación Municipal Campo Largo",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Campo Largo",
            "id": "220217",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.010247438766087
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -26.8556252118387,
                "lon": -60.8027099375602
            }
        },
        {
            "nombre_completo": "Municipio Corzuela",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Corzuela",
            "id": "220113",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0131036231059414
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.8495342777104,
                "lon": -61.0719677178405
            }
        },
        {
            "nombre_completo": "Municipio Las Breñas",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Las Breñas",
            "id": "220329",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0218265141371688
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.9455386976542,
                "lon": -61.2652576677459
            }
        },
        {
            "nombre_completo": "Municipio Puerto Eva Perón",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Puerto Eva Perón",
            "id": "220070",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00152736219456355
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.711810306852,
                "lon": -58.6372961529682
            }
        },
        {
            "nombre_completo": "Municipio Napenay",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Napenay",
            "id": "220224",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0020270157038121
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.6788380991751,
                "lon": -60.630377130248
            }
        },
        {
            "nombre_completo": "Municipio 9 de Julio",
            "fuente": "Ministerio de Ecología",
            "nombre": "9 de Julio",
            "id": "540161",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00430069186359841
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.4348876114394,
                "lon": -54.4912136871941
            }
        },
        {
            "nombre_completo": "Delegación Municipal La Eduvigis",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "La Eduvigis",
            "id": "220266",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00619132883237823
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -26.7315607830315,
                "lon": -58.9364657658412
            }
        },
        {
            "nombre_completo": "Municipio Presidencia Roque Sáenz Peña",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Presidencia Roque Sáenz Peña",
            "id": "220077",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0151199613625155
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.7871365617901,
                "lon": -60.4618654285582
            }
        },
        {
            "nombre_completo": "Municipio Pampa Almirón",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Pampa Almirón",
            "id": "220280",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00542654710663252
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.6429399384825,
                "lon": -59.0436721297192
            }
        },
        {
            "nombre_completo": "Municipio Ciervo Petiso",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Ciervo Petiso",
            "id": "220252",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00175377992843894
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.5687607509274,
                "lon": -59.6216044052429
            }
        },
        {
            "nombre_completo": "Municipio Avia Terai",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Avia Terai",
            "id": "220210",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00707475055752793
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.5818308825305,
                "lon": -60.727136621299
            }
        },
        {
            "nombre_completo": "Municipio Laguna Limpia",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Laguna Limpia",
            "id": "220273",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00602014458261122
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.4164829629715,
                "lon": -59.6828098647245
            }
        },
        {
            "nombre_completo": "Delegación Municipal Machagai",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Machagai",
            "id": "220476",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0239093177576813
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -26.8190200565021,
                "lon": -60.0187650882889
            }
        },
        {
            "nombre_completo": "Delegación Municipal Quitilipi",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Quitilipi",
            "id": "220378",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0156792854790504
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -26.6685132261826,
                "lon": -60.1735021531371
            }
        },
        {
            "nombre_completo": "Municipio Concepción del Bermejo",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Concepción del Bermejo",
            "id": "220007",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00967765585688888
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.4390809643573,
                "lon": -60.9150799106616
            }
        },
        {
            "nombre_completo": "Municipio Pampa del Infierno",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Pampa del Infierno",
            "id": "220021",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0189212844203336
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.3996405608476,
                "lon": -61.1419915754834
            }
        },
        {
            "nombre_completo": "Municipio Bonpland",
            "fuente": "Ministerio de Ecología",
            "nombre": "Bonpland",
            "id": "540056",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0034412531609937
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4778638061425,
                "lon": -55.4718692017467
            }
        },
        {
            "nombre_completo": "Delegación Municipal Los Frentones",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Los Frentones",
            "id": "220014",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0598302264773237
            },
            "categoria": "Delegación Municipal",
            "centroide": {
                "lat": -26.037315456976,
                "lon": -61.4747819966242
            }
        },
        {
            "nombre_completo": "Municipio Taco Pozo",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Taco Pozo",
            "id": "220028",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.0870234897088505
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.3302670101216,
                "lon": -62.5887121017356
            }
        },
        {
            "nombre_completo": "Municipio Colonias Unidas",
            "fuente": "Direc. Pcial. de Catastro y Cartografía",
            "nombre": "Colonias Unidas",
            "id": "220448",
            "provincia": {
                "nombre": "Chaco",
                "id": "22",
                "interseccion": 0.00299362646008966
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.6989392938955,
                "lon": -59.6206760397163
            }
        },
        {
            "nombre_completo": "Municipio Colonia Libertad",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Colonia Libertad",
            "id": "180252",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00596140670147679
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.9598593070437,
                "lon": -57.8975786393603
            }
        },
        {
            "nombre_completo": "Municipio Esquina",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Esquina",
            "id": "180084",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0374515615296194
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.9337810438058,
                "lon": -59.2266510868595
            }
        },
        {
            "nombre_completo": "Municipio Curuzú Cuatiá",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Curuzú Cuatiá",
            "id": "180063",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0747798390469124
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.7994001929417,
                "lon": -58.2762864775326
            }
        },
        {
            "nombre_completo": "Municipio Bonpland",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Bonpland",
            "id": "180280",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00941309117444121
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.9449424362472,
                "lon": -57.4609939770631
            }
        },
        {
            "nombre_completo": "Municipio Yapeyú",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Yapeyú",
            "id": "180378",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00162914725524514
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.3892392506455,
                "lon": -56.7895830853807
            }
        },
        {
            "nombre_completo": "Municipio Guaviraví",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Guaviraví",
            "id": "180364",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00107568078535992
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.3247220262724,
                "lon": -56.8201061069556
            }
        },
        {
            "nombre_completo": "Municipio Mariano I. Loza",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Mariano I. Loza",
            "id": "180238",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00366698573567374
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.3427621035549,
                "lon": -58.1655471661198
            }
        },
        {
            "nombre_completo": "Municipio Tapebicuá",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Tapebicuá",
            "id": "180301",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.011094401063865
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.3825487254222,
                "lon": -56.9944982953597
            }
        },
        {
            "nombre_completo": "Municipio Garruchos",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Garruchos",
            "id": "180427",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00291672662616787
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.1045850569418,
                "lon": -55.7418943441842
            }
        },
        {
            "nombre_completo": "Municipio Leandro N. Alem",
            "fuente": "Ministerio de Ecología",
            "nombre": "Leandro N. Alem",
            "id": "540280",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00584609332943594
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.6166283094589,
                "lon": -55.3300134627001
            }
        },
        {
            "nombre_completo": "Municipio Carolina",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Carolina",
            "id": "180137",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.000962133076110078
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.1223982164134,
                "lon": -59.1310526751935
            }
        },
        {
            "nombre_completo": "Municipio Perugorría",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Perugorría",
            "id": "180070",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0193424992721501
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.2938992045437,
                "lon": -58.5125713784409
            }
        },
        {
            "nombre_completo": "Municipio Lavalle",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Lavalle",
            "id": "180203",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.000893433258876212
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.0283437433335,
                "lon": -59.1722758591832
            }
        },
        {
            "nombre_completo": "Municipio Santa Lucía",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Santa Lucía",
            "id": "180210",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00349818559997009
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.9873668184834,
                "lon": -59.0799430726477
            }
        },
        {
            "nombre_completo": "Municipio Gobernador Martínez",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Gobernador Martínez",
            "id": "180196",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00303336772459675
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.9078579201355,
                "lon": -58.9110919001421
            }
        },
        {
            "nombre_completo": "Municipio Cruz de los Milagros",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Cruz de los Milagros",
            "id": "180189",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00217780240597305
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.8460057634336,
                "lon": -59.0819662707521
            }
        },
        {
            "nombre_completo": "Municipio Chavarría",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Chavarría",
            "id": "180413",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00719146726035229
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.8781231135238,
                "lon": -58.5191731993606
            }
        },
        {
            "nombre_completo": "Municipio Estación Torrent",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Estación Torrent",
            "id": "180105",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0032527903541138
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.8169435562937,
                "lon": -56.4216471648691
            }
        },
        {
            "nombre_completo": "Municipio Pedro R. Fernández",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Pedro R. Fernández",
            "id": "180406",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00424242971853268
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.774945096136,
                "lon": -58.6540364666007
            }
        },
        {
            "nombre_completo": "Municipio Alvear",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Alvear",
            "id": "180098",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0186102520137664
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.7678860054041,
                "lon": -56.5272399231192
            }
        },
        {
            "nombre_completo": "Municipio Colonia Pando",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Colonia Pando",
            "id": "180417",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00371011748037858
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.4636196386948,
                "lon": -58.4395314723756
            }
        },
        {
            "nombre_completo": "Municipio San Roque",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "San Roque",
            "id": "180420",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00925472030569131
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.6004493002963,
                "lon": -58.6710414606456
            }
        },
        {
            "nombre_completo": "Municipio Colonia Carlos Pellegrini",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Colonia Carlos Pellegrini",
            "id": "180357",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0188318041184948
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.5228171265396,
                "lon": -56.9796607997166
            }
        },
        {
            "nombre_completo": "Municipio Concepción",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Concepción",
            "id": "180042",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0406280407411867
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.5085585486294,
                "lon": -58.031593308155
            }
        },
        {
            "nombre_completo": "Municipio Itatí",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Itatí",
            "id": "180147",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00880174299722295
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.344044899998,
                "lon": -58.049370460985
            }
        },
        {
            "nombre_completo": "Municipio Jose Rafael Gomez",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Jose Rafael Gomez",
            "id": "180441",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00332406957578155
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.194043372691,
                "lon": -55.8400035689311
            }
        },
        {
            "nombre_completo": "Municipio Ituzaingó",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Ituzaingó",
            "id": "180168",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0872596426508536
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.9679022751887,
                "lon": -56.9170242560003
            }
        },
        {
            "nombre_completo": "Municipio San Lorenzo",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "San Lorenzo",
            "id": "180315",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0063124789211012
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.1625141970226,
                "lon": -58.7720029879244
            }
        },
        {
            "nombre_completo": "Municipio Colonia Santa Rosa",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Colonia Santa Rosa",
            "id": "180035",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0138755595522127
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.1481432959309,
                "lon": -57.9454760162157
            }
        },
        {
            "nombre_completo": "Municipio Santo Tomé",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Santo Tomé",
            "id": "180448",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0501047884238125
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.3306928185425,
                "lon": -56.3086193944442
            }
        },
        {
            "nombre_completo": "Municipio Mburucuyá",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Mburucuyá",
            "id": "180224",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0111250006418801
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.0163816801489,
                "lon": -58.185562449908
            }
        },
        {
            "nombre_completo": "Municipio San Miguel",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "San Miguel",
            "id": "180392",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0192506108162895
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.0380947065895,
                "lon": -57.5417436622559
            }
        },
        {
            "nombre_completo": "Municipio Villa Olivari",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Villa Olivari",
            "id": "180186",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00139027163204988
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.6297448130989,
                "lon": -56.9450354098951
            }
        },
        {
            "nombre_completo": "Municipio Lomas de Vallejos",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Lomas de Vallejos",
            "id": "180126",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00877806836190132
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.7436198256324,
                "lon": -58.0258178848756
            }
        },
        {
            "nombre_completo": "Municipio Riachuelo",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Riachuelo",
            "id": "180028",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00155705657084908
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5959996969932,
                "lon": -58.7470551543684
            }
        },
        {
            "nombre_completo": "Municipio Herlitzka",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Herlitzka",
            "id": "180343",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00289936180627868
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.617182137133,
                "lon": -58.335000997442
            }
        },
        {
            "nombre_completo": "Municipio Caá Catí",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Caá Catí",
            "id": "180112",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0136519519490265
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.7192849474433,
                "lon": -57.7316255330139
            }
        },
        {
            "nombre_completo": "Municipio 25 de Mayo",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "25 de Mayo",
            "id": "060854",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.015400089407453
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.5265113228112,
                "lon": -60.2301576569223
            }
        },
        {
            "nombre_completo": "Municipio General Belgrano",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General Belgrano",
            "id": "060301",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00598271675513779
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.8349745328235,
                "lon": -58.6980461310919
            }
        },
        {
            "nombre_completo": "Municipio Monte",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Monte",
            "id": "060547",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00607613799043296
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.5103702936319,
                "lon": -58.7694635013319
            }
        },
        {
            "nombre_completo": "Municipio Loreto",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Loreto",
            "id": "180385",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0148183771147458
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.665014781303,
                "lon": -57.2388186771618
            }
        },
        {
            "nombre_completo": "Municipio Colonia Delicia",
            "fuente": "Ministerio de Ecología",
            "nombre": "Colonia Delicia",
            "id": "540140",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0223396654919718
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.2054681649102,
                "lon": -54.3968718901781
            }
        },
        {
            "nombre_completo": "Municipio Bernardo de Irigoyen",
            "fuente": "Ministerio de Ecología",
            "nombre": "Bernardo de Irigoyen",
            "id": "540175",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0354232690638189
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.1817820643676,
                "lon": -53.9464480272826
            }
        },
        {
            "nombre_completo": "Municipio Colonia Victoria",
            "fuente": "Ministerio de Ecología",
            "nombre": "Colonia Victoria",
            "id": "540147",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0106540134503222
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.3079117238366,
                "lon": -54.4956399291883
            }
        },
        {
            "nombre_completo": "Municipio San Carlos",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "San Carlos",
            "id": "180182",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00767389756716832
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.6403639638299,
                "lon": -56.0279924895073
            }
        },
        {
            "nombre_completo": "Municipio Corrientes",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Corrientes",
            "id": "180021",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.0043764004436145
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.494777926369,
                "lon": -58.7710352036827
            }
        },
        {
            "nombre_completo": "Municipio Ramada Paso",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "Ramada Paso",
            "id": "180154",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.000847875954714527
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.3669357761627,
                "lon": -58.2998076579154
            }
        },
        {
            "nombre_completo": "Municipio San Cosme",
            "fuente": "Dirección de Estadística y Censos",
            "nombre": "San Cosme",
            "id": "180329",
            "provincia": {
                "nombre": "Corrientes",
                "id": "18",
                "interseccion": 0.00346338047550581
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.3711910798153,
                "lon": -58.447451194805
            }
        },
        {
            "nombre_completo": "Municipio José C. Paz",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "José C. Paz",
            "id": "060412",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000159541555300346
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.5118758903445,
                "lon": -58.7776710941743
            }
        },
        {
            "nombre_completo": "Municipio General Paz",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General Paz",
            "id": "060343",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00385444771253346
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.4662020729313,
                "lon": -58.3900057061752
            }
        },
        {
            "nombre_completo": "Municipio Adolfo Gonzales Chaves",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Adolfo Gonzales Chaves",
            "id": "060014",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0125905088949268
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.9642254145303,
                "lon": -60.2490776485677
            }
        },
        {
            "nombre_completo": "Municipio Adolfo Alsina",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Adolfo Alsina",
            "id": "060007",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0193249578260743
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.1963375143524,
                "lon": -63.0560058448787
            }
        },
        {
            "nombre_completo": "Municipio Pellegrini",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Pellegrini",
            "id": "060616",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0059208956011503
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.2709141317701,
                "lon": -63.2257388675913
            }
        },
        {
            "nombre_completo": "Municipio Puán",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Puán",
            "id": "060651",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0211889371430634
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.0746044476757,
                "lon": -63.0577463401746
            }
        },
        {
            "nombre_completo": "Municipio General Villegas",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General Villegas",
            "id": "060392",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0231909877151107
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.7687371056865,
                "lon": -62.9535454568402
            }
        },
        {
            "nombre_completo": "Municipio Almirante Brown",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Almirante Brown",
            "id": "060028",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000413465514068435
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.8355700988623,
                "lon": -58.3673978494737
            }
        },
        {
            "nombre_completo": "Municipio La Plata",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "La Plata",
            "id": "060441",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.002851545402565
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.0034938071388,
                "lon": -58.0180274991075
            }
        },
        {
            "nombre_completo": "Municipio Presidente Perón",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Presidente Perón",
            "id": "060648",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000385704870895687
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.9298313021932,
                "lon": -58.398091246683
            }
        },
        {
            "nombre_completo": "Municipio Carlos Tejedor",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Carlos Tejedor",
            "id": "060154",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0125715156926696
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.379488920773,
                "lon": -62.4295611893429
            }
        },
        {
            "nombre_completo": "Municipio 9 de Julio",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "9 de Julio",
            "id": "060588",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0138036600026452
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.481190578256,
                "lon": -60.9751157295027
            }
        },
        {
            "nombre_completo": "Municipio Espinillo",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Espinillo",
            "id": "340168",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.00104141440323264
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.0004660450385,
                "lon": -58.5647875858739
            }
        },
        {
            "nombre_completo": "Municipio Pehuajó",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Pehuajó",
            "id": "060609",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0146398498700398
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.8833833438579,
                "lon": -61.9271985156994
            }
        },
        {
            "nombre_completo": "Municipio Campo Grande",
            "fuente": "Ministerio de Ecología",
            "nombre": "Campo Grande",
            "id": "540042",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.016123255255159
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.2318963611694,
                "lon": -54.961413530837
            }
        },
        {
            "nombre_completo": "Municipio Lobos",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Lobos",
            "id": "060483",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00553811444140763
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.2195598528609,
                "lon": -59.1458071242931
            }
        },
        {
            "nombre_completo": "Municipio General Alvear",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General Alvear",
            "id": "060287",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0109176337432274
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.0345220351902,
                "lon": -60.1333612561516
            }
        },
        {
            "nombre_completo": "Municipio 25 de Mayo",
            "fuente": "Ministerio de Ecología",
            "nombre": "25 de Mayo",
            "id": "540525",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0231444505929938
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.3331053109932,
                "lon": -54.6814951271054
            }
        },
        {
            "nombre_completo": "Municipio Puerto Rico",
            "fuente": "Ministerio de Ecología",
            "nombre": "Puerto Rico",
            "id": "540322",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00418802697311047
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.8443110448476,
                "lon": -55.0464275552228
            }
        },
        {
            "nombre_completo": "Municipio General Belgrano",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "General Belgrano",
            "id": "340112",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.000275020312963858
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.9409528971948,
                "lon": -59.0191697358227
            }
        },
        {
            "nombre_completo": "Municipio Misión Taacaglé",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Misión Taacaglé",
            "id": "340175",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 5.71889091300485e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.9729365739169,
                "lon": -58.8239429494864
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Buena Vista",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Buena Vista",
            "id": "345056",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 4.28318835932706e-06
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -25.0710502152579,
                "lon": -58.3852760427268
            }
        },
        {
            "nombre_completo": "Municipio Laguna Blanca",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Laguna Blanca",
            "id": "340169",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.00211238948201477
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.1115621017336,
                "lon": -58.2696808211217
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Siete Palmas",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Siete Palmas",
            "id": "345070",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 1.32966140270832e-05
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -25.2016238617924,
                "lon": -58.3290230085759
            }
        },
        {
            "nombre_completo": "Municipio Laguna Naik Neck",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Laguna Naik Neck",
            "id": "340203",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.000150083360097992
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.2202162074097,
                "lon": -58.1204495394708
            }
        },
        {
            "nombre_completo": "Municipio Clorinda",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Clorinda",
            "id": "340189",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.00432466516158256
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.3365444793712,
                "lon": -57.7505249001674
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Colonia Pastoril",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Colonia Pastoril",
            "id": "345014",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.000135355883418105
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -25.6835261933357,
                "lon": -58.2668101771917
            }
        },
        {
            "nombre_completo": "Municipio General Mosconi",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "General Mosconi",
            "id": "340259",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 2.96363406305879e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.1836667199884,
                "lon": -62.3006586293614
            }
        },
        {
            "nombre_completo": "Municipio Merlo",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Merlo",
            "id": "060539",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000554747950090296
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.7108867791705,
                "lon": -58.7418777656329
            }
        },
        {
            "nombre_completo": "Municipio Ingeniero Guillermo N. Juárez",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Ingeniero Guillermo N. Juárez",
            "id": "340077",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.000836444340156824
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -23.8985673230593,
                "lon": -61.8551751958628
            }
        },
        {
            "nombre_completo": "Municipio Exaltación de la Cruz",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Exaltación de la Cruz",
            "id": "060266",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00201733655642528
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.2951491690699,
                "lon": -59.1559117007684
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Los Chiriguanos",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Los Chiriguanos",
            "id": "345007",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 3.33417558994963e-05
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -24.1062577355998,
                "lon": -61.4734537946001
            }
        },
        {
            "nombre_completo": "Municipio San Miguel",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "San Miguel",
            "id": "060760",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000263558744820331
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.5520919648351,
                "lon": -58.6917055208826
            }
        },
        {
            "nombre_completo": "Municipio Tapalqué",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Tapalqué",
            "id": "060798",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0135671117900601
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.3471383108251,
                "lon": -60.1308804386321
            }
        },
        {
            "nombre_completo": "Municipio Las Lomitas",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Las Lomitas",
            "id": "340133",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.000365635350996831
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.7102155246944,
                "lon": -60.598287756527
            }
        },
        {
            "nombre_completo": "Municipio Estanislao del Campo",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Estanislao del Campo",
            "id": "340098",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.000408071998475391
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.0637553874561,
                "lon": -60.1089966071732
            }
        },
        {
            "nombre_completo": "Municipio Ibarreta",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Ibarreta",
            "id": "340126",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.00138883798372109
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.2135553298659,
                "lon": -59.8647594063236
            }
        },
        {
            "nombre_completo": "Municipio Comandante Fontana",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Comandante Fontana",
            "id": "340091",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.0010615194637787
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.3369590717874,
                "lon": -59.6848536280091
            }
        },
        {
            "nombre_completo": "Municipio Palo Santo",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Palo Santo",
            "id": "340238",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.0010894373315767
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.5654223384209,
                "lon": -59.3429453708891
            }
        },
        {
            "nombre_completo": "Municipio Pirané",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Pirané",
            "id": "340245",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.00107627816342415
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.7484130694871,
                "lon": -59.1208484121304
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Gran Guardia",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Gran Guardia",
            "id": "345021",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 5.69910171506215e-05
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -25.8624689502625,
                "lon": -58.8869102543172
            }
        },
        {
            "nombre_completo": "Municipio Junín",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Junín",
            "id": "060413",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00717020912286574
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.546128336039,
                "lon": -61.0054940705488
            }
        },
        {
            "nombre_completo": "Municipio Tres Lomas",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Tres Lomas",
            "id": "060847",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00409292824505555
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.4973152716526,
                "lon": -62.8634418902354
            }
        },
        {
            "nombre_completo": "Municipio Ayacucho",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Ayacucho",
            "id": "060042",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0221727758963536
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.0347821697162,
                "lon": -58.4425813265357
            }
        },
        {
            "nombre_completo": "Municipio Mercedes",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Mercedes",
            "id": "060532",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0033471476123561
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.6971944325993,
                "lon": -59.42081198401
            }
        },
        {
            "nombre_completo": "Municipio Hurlingham",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Hurlingham",
            "id": "060408",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000112721177090724
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.5992140053733,
                "lon": -58.6496943606349
            }
        },
        {
            "nombre_completo": "Comuna Arocena",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Arocena",
            "id": "823722",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00242193662207118
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.086098208312,
                "lon": -60.8840247197208
            }
        },
        {
            "nombre_completo": "Municipio Morón",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Morón",
            "id": "060568",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00017634944491009
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.6491410653179,
                "lon": -58.6198433488168
            }
        },
        {
            "nombre_completo": "Municipio General San Martín",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General San Martín",
            "id": "060371",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000179302728705417
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.5526490761278,
                "lon": -58.5643145358558
            }
        },
        {
            "nombre_completo": "Municipio Malvinas Argentinas",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Malvinas Argentinas",
            "id": "060515",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000200585089933422
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.4873038284663,
                "lon": -58.7121329971982
            }
        },
        {
            "nombre_completo": "Municipio Suipacha",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Suipacha",
            "id": "060784",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00300618616138163
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.7485629683304,
                "lon": -59.7034737442182
            }
        },
        {
            "nombre_completo": "Municipio Alberti",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Alberti",
            "id": "060021",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00357136702956445
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.0363817959326,
                "lon": -60.2828693081193
            }
        },
        {
            "nombre_completo": "Municipio Lanús",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Lanús",
            "id": "060434",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000163480932877991
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.7057824914421,
                "lon": -58.3954484986823
            }
        },
        {
            "nombre_completo": "Municipio San Andrés de Giles",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "San Andrés de Giles",
            "id": "060728",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00358541171551044
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.4377851586384,
                "lon": -59.4732938848478
            }
        },
        {
            "nombre_completo": "Municipio General las Heras",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General las Heras",
            "id": "060329",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00240562185168829
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.9094258328137,
                "lon": -58.9958733938567
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Subteniente Perín",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Subteniente Perín",
            "id": "345049",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 3.91318349235091e-05
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -25.5318689368593,
                "lon": -60.0174675213044
            }
        },
        {
            "nombre_completo": "Municipio Florencio Varela",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Florencio Varela",
            "id": "060274",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000606849802284925
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.8778729879112,
                "lon": -58.2586377649204
            }
        },
        {
            "nombre_completo": "Municipio Formosa",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Formosa",
            "id": "340028",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.0047195052154612
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.1958636875411,
                "lon": -58.2173444205895
            }
        },
        {
            "nombre_completo": "Municipio Misión San Francisco de Laishí",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Misión San Francisco de Laishí",
            "id": "340063",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 7.04928134116397e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.2415655637697,
                "lon": -58.6312572039416
            }
        },
        {
            "nombre_completo": "Municipio El Colorado",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "El Colorado",
            "id": "340224",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.00114300767011662
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.2786318086378,
                "lon": -59.3525240305938
            }
        },
        {
            "nombre_completo": "Municipio General Viamonte",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General Viamonte",
            "id": "060385",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00686176882880671
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.997569924782,
                "lon": -61.0501968347291
            }
        },
        {
            "nombre_completo": "Municipio Oberá",
            "fuente": "Ministerio de Ecología",
            "nombre": "Oberá",
            "id": "540399",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00518633655597549
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4524533921177,
                "lon": -55.1176353030915
            }
        },
        {
            "nombre_completo": "Municipio Navarro",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Navarro",
            "id": "060574",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0051849074403453
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.0304083582525,
                "lon": -59.429785480408
            }
        },
        {
            "nombre_completo": "Municipio Cañuelas",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Cañuelas",
            "id": "060134",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00381614792158832
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.1450252367714,
                "lon": -58.6907790273655
            }
        },
        {
            "nombre_completo": "Comuna Golondrina",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Golondrina",
            "id": "824163",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0145199100603862
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.4569944696721,
                "lon": -60.3399254443495
            }
        },
        {
            "nombre_completo": "Municipio San Vicente",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "San Vicente",
            "id": "060778",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00210134329284806
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.0704596398936,
                "lon": -58.4319219645129
            }
        },
        {
            "nombre_completo": "Municipio General la Madrid",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General la Madrid",
            "id": "060322",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0158668589746562
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.3557097661663,
                "lon": -61.3442438803068
            }
        },
        {
            "nombre_completo": "Municipio Guaminí",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Guaminí",
            "id": "060399",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0158138991157625
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.8905500665858,
                "lon": -62.4187740896092
            }
        },
        {
            "nombre_completo": "Municipio Villa Escolar",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Villa Escolar",
            "id": "340070",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 9.69623669978051e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.6312935930684,
                "lon": -58.668933325641
            }
        },
        {
            "nombre_completo": "Municipio Daireaux",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Daireaux",
            "id": "060231",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0124805140276193
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.6405459243249,
                "lon": -61.891417127905
            }
        },
        {
            "nombre_completo": "Municipio Ezeiza",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Ezeiza",
            "id": "060270",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000759529300064369
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.8758213531443,
                "lon": -58.5648395364287
            }
        },
        {
            "nombre_completo": "Municipio Avellaneda",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Avellaneda",
            "id": "060035",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000179377277880824
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.6782056572109,
                "lon": -58.3411168921278
            }
        },
        {
            "nombre_completo": "Municipio Colón",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Colón",
            "id": "060175",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00315359685407126
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.8860220920301,
                "lon": -61.063367492517
            }
        },
        {
            "nombre_completo": "Municipio General Arenales",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "General Arenales",
            "id": "060294",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00470990844530891
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.2374596713145,
                "lon": -61.2838006242382
            }
        },
        {
            "nombre_completo": "Municipio Rivadavia",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Rivadavia",
            "id": "060679",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0127515572415981
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.5809627302324,
                "lon": -63.0945777162384
            }
        },
        {
            "nombre_completo": "Comuna San Bernardo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Bernardo",
            "id": "823946",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00075092801320638
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.8743272113348,
                "lon": -60.5572731688325
            }
        },
        {
            "nombre_completo": "Comuna Colonia Dolores",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Dolores",
            "id": "823876",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000430716425159316
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.4046798589182,
                "lon": -60.3043525398223
            }
        },
        {
            "nombre_completo": "Municipio Hipólito Yrigoyen",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Hipólito Yrigoyen",
            "id": "060406",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00535554793166332
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.2593312232241,
                "lon": -61.6600936665535
            }
        },
        {
            "nombre_completo": "Municipio Dolores",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Dolores",
            "id": "060238",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00642093786909153
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.3986615535861,
                "lon": -57.6326112996265
            }
        },
        {
            "nombre_completo": "Comuna Susana",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Susana",
            "id": "822364",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00132834461917471
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3721186116187,
                "lon": -61.5304778599988
            }
        },
        {
            "nombre_completo": "Municipio Ensenada",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Ensenada",
            "id": "060245",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.000362603243975884
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.8422541243278,
                "lon": -57.9789322374943
            }
        },
        {
            "nombre_completo": "Municipio Laprida",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Laprida",
            "id": "060448",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0113987556417078
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.5155525089772,
                "lon": -60.7680626719213
            }
        },
        {
            "nombre_completo": "Comuna Saladero Mariano Cabal",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Saladero Mariano Cabal",
            "id": "822560",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00441724545458634
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.9263607618272,
                "lon": -60.0480533134826
            }
        },
        {
            "nombre_completo": "Comuna Esteban Rams",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Esteban Rams",
            "id": "823281",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00693719002699131
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.6759725227319,
                "lon": -61.4715691081368
            }
        },
        {
            "nombre_completo": "Comuna Colonia Mascias",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Mascias",
            "id": "822546",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00883597703026843
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.7725602238069,
                "lon": -59.9651810585308
            }
        },
        {
            "nombre_completo": "Comuna Pueblo Irigoyen",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Pueblo Irigoyen",
            "id": "823792",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000977038803846535
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.1612356127734,
                "lon": -61.0972685546721
            }
        },
        {
            "nombre_completo": "Municipio Leandro N. Alem",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Leandro N. Alem",
            "id": "060462",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.0051035772439568
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.497956349747,
                "lon": -61.6129309245572
            }
        },
        {
            "nombre_completo": "Comuna Cañada Rosquín",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Cañada Rosquín",
            "id": "824044",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00226648775462564
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.0184866476057,
                "lon": -61.5717382076518
            }
        },
        {
            "nombre_completo": "Comuna Colonia Bigand",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Bigand",
            "id": "822161",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000650579316194824
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0667175033934,
                "lon": -61.7175552473553
            }
        },
        {
            "nombre_completo": "Comuna Pavón Arriba",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Pavón Arriba",
            "id": "822497",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00122969193451342
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.3409315517595,
                "lon": -60.8687429181654
            }
        },
        {
            "nombre_completo": "Comuna Melincué",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Melincué",
            "id": "822693",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00224144759008821
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.6716299274826,
                "lon": -61.4800391616203
            }
        },
        {
            "nombre_completo": "Comuna La Camila",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "La Camila",
            "id": "823897",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00184227579739966
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.0720725812595,
                "lon": -60.6203124846114
            }
        },
        {
            "nombre_completo": "Municipio Baradero",
            "fuente": "ARBA - Gerencia de Servicios Catastrales",
            "nombre": "Baradero",
            "id": "060070",
            "provincia": {
                "nombre": "Buenos Aires",
                "id": "06",
                "interseccion": 0.00483196203113034
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.9321914567436,
                "lon": -59.4929504876902
            }
        },
        {
            "nombre_completo": "Comuna Monte Oscuridad",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Monte Oscuridad",
            "id": "823617",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00157916378182964
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.4620268964847,
                "lon": -62.0529528019119
            }
        },
        {
            "nombre_completo": "Comuna Suardi",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Suardi",
            "id": "823666",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00324981700699676
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.5246425016358,
                "lon": -61.8619386762931
            }
        },
        {
            "nombre_completo": "Comuna La Brava",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "La Brava",
            "id": "823708",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00344050923075833
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.4026156236651,
                "lon": -60.1771440738208
            }
        },
        {
            "nombre_completo": "Comuna Silva",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Silva",
            "id": "823960",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00240730548366601
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.4504539309071,
                "lon": -60.4736444559628
            }
        },
        {
            "nombre_completo": "Comuna Marcelino Escalada",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Marcelino Escalada",
            "id": "823918",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00272512886652245
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.6080397945225,
                "lon": -60.4264245992866
            }
        },
        {
            "nombre_completo": "Comuna Ramayón",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Ramayón",
            "id": "823939",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00267537833325891
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.6120352131514,
                "lon": -60.5619618649171
            }
        },
        {
            "nombre_completo": "Comuna Cacique Ariacaiquín",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Cacique Ariacaiquín",
            "id": "823694",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00210296034303071
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.597043050884,
                "lon": -60.2659296649813
            }
        },
        {
            "nombre_completo": "Municipio San Justo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Justo",
            "id": "820259",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00539387967213458
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.8046074901494,
                "lon": -60.4224495726668
            }
        },
        {
            "nombre_completo": "Municipio Tolhuin",
            "fuente": "AREF",
            "nombre": "Tolhuin",
            "id": "942007",
            "provincia": {
                "nombre": "Tierra del Fuego",
                "id": "94",
                "interseccion": 0.000197171246727739
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -54.57672779911,
                "lon": -67.1957998842656
            }
        },
        {
            "nombre_completo": "Comuna Los Amores",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Los Amores",
            "id": "824184",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0162005159039823
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.1216709408038,
                "lon": -60.2372304630706
            }
        },
        {
            "nombre_completo": "Comuna Las Garzas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Las Garzas",
            "id": "822833",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00438606801258886
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.8485702161712,
                "lon": -59.3466108834929
            }
        },
        {
            "nombre_completo": "Comuna Las Avispas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Las Avispas",
            "id": "823589",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00625998335905061
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.7766332416562,
                "lon": -61.2758383362576
            }
        },
        {
            "nombre_completo": "Municipio Vera",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Vera",
            "id": "820336",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0112795557120298
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.4127008748966,
                "lon": -60.3749387661252
            }
        },
        {
            "nombre_completo": "Comuna Serodino",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Serodino",
            "id": "822938",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00116993214085903
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.6127878713444,
                "lon": -60.9650705458428
            }
        },
        {
            "nombre_completo": "Comuna San Jerónimo Sud",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Jerónimo Sud",
            "id": "824023",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000833207815898683
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.8779609603777,
                "lon": -61.0297454250362
            }
        },
        {
            "nombre_completo": "Comuna Theobald",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Theobald",
            "id": "822532",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000657761758350895
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.3293737516617,
                "lon": -60.3485463027432
            }
        },
        {
            "nombre_completo": "Comuna Gregoria Pérez de Denis",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Gregoria Pérez de Denis",
            "id": "823295",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00678093547468058
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.1279741795842,
                "lon": -61.5595744698347
            }
        },
        {
            "nombre_completo": "Comuna San Fabián",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Fabián",
            "id": "823841",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00214075085890702
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.1678528108475,
                "lon": -60.8750417147766
            }
        },
        {
            "nombre_completo": "Comuna La Vanguardia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "La Vanguardia",
            "id": "822476",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000702186842261849
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.3649961070119,
                "lon": -60.7050628777746
            }
        },
        {
            "nombre_completo": "Comuna Constanza",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Constanza",
            "id": "823526",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00274524327769041
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.6503841416825,
                "lon": -61.3044646745537
            }
        },
        {
            "nombre_completo": "Municipio San Genaro",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Genaro",
            "id": "820256",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00284923243695792
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.3579824255304,
                "lon": -61.2663150946778
            }
        },
        {
            "nombre_completo": "Comuna Santa Margarita",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Santa Margarita",
            "id": "823337",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0080337254977773
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.3394245135772,
                "lon": -61.4560322455386
            }
        },
        {
            "nombre_completo": "Comuna Gato Colorado",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Gato Colorado",
            "id": "823288",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0223141829858516
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.2303338449873,
                "lon": -61.0394020640013
            }
        },
        {
            "nombre_completo": "Municipio Iguazú",
            "fuente": "Ministerio de Ecología",
            "nombre": "Iguazú",
            "id": "540217",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0257787053197406
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.6745733703587,
                "lon": -54.3757510644289
            }
        },
        {
            "nombre_completo": "Comuna Villa Guillermina",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Villa Guillermina",
            "id": "822875",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00921418077298124
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.1380903982548,
                "lon": -59.6015786536188
            }
        },
        {
            "nombre_completo": "Comuna El Rabón",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "El Rabón",
            "id": "822784",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00344073045524704
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.2131623564398,
                "lon": -59.2515639709426
            }
        },
        {
            "nombre_completo": "Municipio Las Toscas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Las Toscas",
            "id": "820098",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00271534713878222
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -28.3336988041536,
                "lon": -59.2487181017623
            }
        },
        {
            "nombre_completo": "Municipio Reconquista",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Reconquista",
            "id": "820112",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00383142788803051
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.2273963710043,
                "lon": -59.6145182688201
            }
        },
        {
            "nombre_completo": "Comuna Cañada Ombú",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Cañada Ombú",
            "id": "824142",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0107807525093164
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.2891586111307,
                "lon": -60.319952562791
            }
        },
        {
            "nombre_completo": "Comuna San Bernardo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Bernardo",
            "id": "823330",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0166189000451409
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.6804992323525,
                "lon": -61.2427589341908
            }
        },
        {
            "nombre_completo": "Comuna Fortín Olmos",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Fortín Olmos",
            "id": "824149",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0294950095625923
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.9886124948497,
                "lon": -60.6679527392561
            }
        },
        {
            "nombre_completo": "Comuna San Guillermo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Guillermo",
            "id": "823645",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00193942619680447
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.3863721375294,
                "lon": -61.8778467201676
            }
        },
        {
            "nombre_completo": "Comuna Curupaity",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Curupaity",
            "id": "823533",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0029902799697781
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.3877590159566,
                "lon": -61.6523661988347
            }
        },
        {
            "nombre_completo": "Comuna Arrufo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Arrufo",
            "id": "823491",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00549017203350029
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.2359984087839,
                "lon": -61.6249034870369
            }
        },
        {
            "nombre_completo": "Comuna La Rubia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "La Rubia",
            "id": "823582",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00167485611866522
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.0973769833224,
                "lon": -61.7593031348436
            }
        },
        {
            "nombre_completo": "Comuna Colonia Ana",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Ana",
            "id": "823505",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00128876394694906
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.1298954613317,
                "lon": -61.9664060985721
            }
        },
        {
            "nombre_completo": "Comuna Villa Trinidad",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Villa Trinidad",
            "id": "823680",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00239806729188053
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.2258084495352,
                "lon": -61.9264658083013
            }
        },
        {
            "nombre_completo": "Comuna Colonia Rosa",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Rosa",
            "id": "823519",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00162800530486504
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.3193186985736,
                "lon": -62.0294040965481
            }
        },
        {
            "nombre_completo": "Comuna Moisés Ville",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Moisés Ville",
            "id": "823603",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00229743599588347
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.631383349572,
                "lon": -61.4705123255217
            }
        },
        {
            "nombre_completo": "Comuna La Lucila",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "La Lucila",
            "id": "823575",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00231352300637036
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.3822950763987,
                "lon": -61.0007033082147
            }
        },
        {
            "nombre_completo": "Comuna Capivara",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Capivara",
            "id": "823498",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00536181570782648
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.474802158899,
                "lon": -61.3146214684996
            }
        },
        {
            "nombre_completo": "Comuna Colonia la Clara",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia la Clara",
            "id": "823568",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00165679220896227
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.5475134914914,
                "lon": -61.0654579387359
            }
        },
        {
            "nombre_completo": "Comuna Montefiore",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Montefiore",
            "id": "823316",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00363785464331364
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.6238914341953,
                "lon": -61.8792620133021
            }
        },
        {
            "nombre_completo": "Comuna Hersilia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Hersilia",
            "id": "823547",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00454464262101357
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.9757890699804,
                "lon": -61.8292420298891
            }
        },
        {
            "nombre_completo": "Comuna Villa Minetti",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Villa Minetti",
            "id": "823344",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00972015953907828
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.5999229836668,
                "lon": -61.6651694963613
            }
        },
        {
            "nombre_completo": "Municipio Ceres",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Ceres",
            "id": "820224",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00442966281068932
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.8518920386987,
                "lon": -61.9210332082824
            }
        },
        {
            "nombre_completo": "Comuna Ñanducita",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Ñanducita",
            "id": "823624",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00161513823106113
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.3688178800785,
                "lon": -61.1338175338174
            }
        },
        {
            "nombre_completo": "Comuna La Cabral",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "La Cabral",
            "id": "823561",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00255669883126744
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.0987794685868,
                "lon": -61.2028509551793
            }
        },
        {
            "nombre_completo": "Municipio San Cristóbal",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Cristóbal",
            "id": "820231",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00424005256608044
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.2369464342856,
                "lon": -61.0979078285954
            }
        },
        {
            "nombre_completo": "Comuna La Criolla",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "La Criolla",
            "id": "823904",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00376435156373149
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.2005196599268,
                "lon": -60.5141584435544
            }
        },
        {
            "nombre_completo": "Municipio Santa Fe",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Santa Fe",
            "id": "820147",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00245673470996514
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6551557199553,
                "lon": -60.6387714501755
            }
        },
        {
            "nombre_completo": "Comuna Santurce",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Santurce",
            "id": "823652",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000776197382666884
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.1612690129714,
                "lon": -61.1598892205566
            }
        },
        {
            "nombre_completo": "Comuna Vera y Pintado",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Vera y Pintado",
            "id": "823967",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00210923342097918
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.128830551068,
                "lon": -60.3434992622195
            }
        },
        {
            "nombre_completo": "Comuna Intiyaco",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Intiyaco",
            "id": "824170",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0144974568493669
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.6594190058826,
                "lon": -60.3442851023737
            }
        },
        {
            "nombre_completo": "Comuna Soledad",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Soledad",
            "id": "823659",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00457190585874374
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.6545005432969,
                "lon": -60.8488658483028
            }
        },
        {
            "nombre_completo": "Comuna Pozo Borrado",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Pozo Borrado",
            "id": "823323",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0142284686865014
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.9395330893008,
                "lon": -61.386286114906
            }
        },
        {
            "nombre_completo": "Municipio Tostado",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Tostado",
            "id": "820175",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.028478822950182
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.2389580395486,
                "lon": -61.445259193411
            }
        },
        {
            "nombre_completo": "Comuna Logroño",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Logroño",
            "id": "823309",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00856358119774116
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.4703549874942,
                "lon": -61.682138557393
            }
        },
        {
            "nombre_completo": "Comuna El Arazá",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "El Arazá",
            "id": "822777",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00134578774973571
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.121376964009,
                "lon": -59.9920127998863
            }
        },
        {
            "nombre_completo": "Comuna Toba",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Toba",
            "id": "824205",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00566971113040485
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.2282240317775,
                "lon": -60.1706890557644
            }
        },
        {
            "nombre_completo": "Municipio Esperanza",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Esperanza",
            "id": "820161",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00216932503824106
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4385590389521,
                "lon": -60.8895310821133
            }
        },
        {
            "nombre_completo": "Comuna Arroyo Leyes",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Arroyo Leyes",
            "id": "822959",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00240752762765684
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5426514767853,
                "lon": -60.4683779918803
            }
        },
        {
            "nombre_completo": "Comuna Portugalete",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Portugalete",
            "id": "823638",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00323566600380314
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.2375293533564,
                "lon": -61.3603180374439
            }
        },
        {
            "nombre_completo": "Comuna Cayastacito",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Cayastacito",
            "id": "823869",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00251347542851755
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1132405530218,
                "lon": -60.4956435325687
            }
        },
        {
            "nombre_completo": "Comuna Naré",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Naré",
            "id": "823925",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00272071719844221
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.9770832772931,
                "lon": -60.4468906702837
            }
        },
        {
            "nombre_completo": "Comuna Gobernador Crespo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Gobernador Crespo",
            "id": "823890",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000855410288910806
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.3421799750288,
                "lon": -60.3853188155488
            }
        },
        {
            "nombre_completo": "Comuna Castellanos",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Castellanos",
            "id": "822168",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000647733886458335
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1589792060729,
                "lon": -61.7393661969737
            }
        },
        {
            "nombre_completo": "Comuna Pedro Gómez Cello",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Pedro Gómez Cello",
            "id": "823932",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00397077356575808
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.0051967598471,
                "lon": -60.4742838680945
            }
        },
        {
            "nombre_completo": "Comuna Hugentobler",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Hugentobler",
            "id": "822266",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000659651742245796
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.9141614845637,
                "lon": -61.757243928205
            }
        },
        {
            "nombre_completo": "Comuna Garabato",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Garabato",
            "id": "824156",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00779997195651121
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.8887646607729,
                "lon": -60.2141789850229
            }
        },
        {
            "nombre_completo": "Comuna Colonia Aldao",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Aldao",
            "id": "822147",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000759918210549005
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.9857555355997,
                "lon": -61.7400552024928
            }
        },
        {
            "nombre_completo": "Comuna Fidela",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Fidela",
            "id": "822245",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000612372892516193
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0524241754991,
                "lon": -61.799859529966
            }
        },
        {
            "nombre_completo": "Comuna Margarita",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Margarita",
            "id": "824191",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00678648850293269
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.7499448234922,
                "lon": -60.1474618870776
            }
        },
        {
            "nombre_completo": "Comuna Lanteri",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Lanteri",
            "id": "822826",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00252455018288874
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.8470500548192,
                "lon": -59.6773729365482
            }
        },
        {
            "nombre_completo": "Comuna Ingeniero Chanourdie",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Ingeniero Chanourdie",
            "id": "822812",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00402467342006847
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.6798978864083,
                "lon": -59.6629245992144
            }
        },
        {
            "nombre_completo": "Comuna Vila",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Vila",
            "id": "822385",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00122307275279132
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1903880171581,
                "lon": -61.8328200400665
            }
        },
        {
            "nombre_completo": "Comuna Coronel Fraga",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Coronel Fraga",
            "id": "822203",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000566836551707345
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1787533398123,
                "lon": -61.9271244055917
            }
        },
        {
            "nombre_completo": "Comuna San Antonio",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Antonio",
            "id": "822343",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00064809760895945
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.25096985834,
                "lon": -61.7611781065705
            }
        },
        {
            "nombre_completo": "Comuna Santa Clara de Saguier",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Santa Clara de Saguier",
            "id": "822357",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0012550734427927
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3362205253631,
                "lon": -61.8191081325282
            }
        },
        {
            "nombre_completo": "Comuna Saguier",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Saguier",
            "id": "822336",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000984926767445118
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3372278156435,
                "lon": -61.6895604627232
            }
        },
        {
            "nombre_completo": "Comuna Villa San José",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Villa San José",
            "id": "822392",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000598994489095953
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3398681543485,
                "lon": -61.6167311160057
            }
        },
        {
            "nombre_completo": "Municipio Rafaela",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Rafaela",
            "id": "820042",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00119197457351691
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.2423283955577,
                "lon": -61.4875615908817
            }
        },
        {
            "nombre_completo": "Comuna Presidente Roca",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Presidente Roca",
            "id": "822315",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00169501273570157
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.2146434131101,
                "lon": -61.6208017366654
            }
        },
        {
            "nombre_completo": "Comuna Plaza Clucellas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Plaza Clucellas",
            "id": "822308",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000938587213007315
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.4377060312837,
                "lon": -61.7223649583064
            }
        },
        {
            "nombre_completo": "Comuna Estación Clucellas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Estación Clucellas",
            "id": "822224",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00119810735764418
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5252590256917,
                "lon": -61.7126891104404
            }
        },
        {
            "nombre_completo": "Comuna Angélica",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Angélica",
            "id": "822112",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00245785979656354
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5216603668339,
                "lon": -61.5042325557349
            }
        },
        {
            "nombre_completo": "Comuna Santa María Centro",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Santa María Centro",
            "id": "823246",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00106523623538989
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.514493653987,
                "lon": -61.3075023174364
            }
        },
        {
            "nombre_completo": "Comuna Colonia Cello",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Cello",
            "id": "822175",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00127566420682698
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.442922092944,
                "lon": -61.8690954995392
            }
        },
        {
            "nombre_completo": "Comuna Josefina",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Josefina",
            "id": "822280",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00151638110637027
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3919642706151,
                "lon": -61.9786523589758
            }
        },
        {
            "nombre_completo": "Municipio Frontera",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Frontera",
            "id": "820035",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000523870986581827
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4736517966507,
                "lon": -62.0388427574186
            }
        },
        {
            "nombre_completo": "Comuna Zenón Pereyra",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Zenón Pereyra",
            "id": "822406",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00183080088379868
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5489943704143,
                "lon": -61.9603711602555
            }
        },
        {
            "nombre_completo": "Comuna Eustolia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Eustolia",
            "id": "822238",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0010577438709275
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5807528856735,
                "lon": -61.7656861272866
            }
        },
        {
            "nombre_completo": "Comuna María Juana",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "María Juana",
            "id": "822294",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000821205124209989
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6755447810504,
                "lon": -61.7508020504526
            }
        },
        {
            "nombre_completo": "Comuna Garibaldi",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Garibaldi",
            "id": "822259",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000826536619691318
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6567052458795,
                "lon": -61.8581121485345
            }
        },
        {
            "nombre_completo": "Comuna Esmeralda",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Esmeralda",
            "id": "822217",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00123354724635369
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6271165743835,
                "lon": -61.9994639017835
            }
        },
        {
            "nombre_completo": "Comuna Los Laureles",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Los Laureles",
            "id": "822840",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00274596730189346
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.3713409435325,
                "lon": -59.6869269518745
            }
        },
        {
            "nombre_completo": "Municipio San Javier",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Javier",
            "id": "820238",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0167643884564823
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.4558826911086,
                "lon": -59.8905516743232
            }
        },
        {
            "nombre_completo": "Comuna Castelar",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Castelar",
            "id": "824065",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0011786188168872
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6768829436233,
                "lon": -62.1125286445482
            }
        },
        {
            "nombre_completo": "Comuna San Vicente",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Vicente",
            "id": "822350",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00103073688773506
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6841527257645,
                "lon": -61.5648309204331
            }
        },
        {
            "nombre_completo": "Comuna San Mart",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Mart",
            "id": "824128",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00228655573740302
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8394537015401,
                "lon": -61.6059946110053
            }
        },
        {
            "nombre_completo": "Comuna Traill",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Traill",
            "id": "824135",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00142625862277361
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.9307594351273,
                "lon": -61.6890101267831
            }
        },
        {
            "nombre_completo": "Municipio San Jorge",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Jorge",
            "id": "820315",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00287181665188837
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.9116126709522,
                "lon": -61.8805263599438
            }
        },
        {
            "nombre_completo": "Comuna Crispi",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Crispi",
            "id": "824079",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00213317107280382
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8051981594588,
                "lon": -62.0117919555162
            }
        },
        {
            "nombre_completo": "Comuna Carlos Pellegrini",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Carlos Pellegrini",
            "id": "824051",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00298153502985657
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.0531376864246,
                "lon": -61.8160903505084
            }
        },
        {
            "nombre_completo": "Comuna Casas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Casas",
            "id": "824058",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0018067073464387
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.1577234516421,
                "lon": -61.571784017754
            }
        },
        {
            "nombre_completo": "Municipio El Trébol",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "El Trébol",
            "id": "820308",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00263109905121561
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.2116390000009,
                "lon": -61.706090454015
            }
        },
        {
            "nombre_completo": "Comuna Piamonte",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Piamonte",
            "id": "824121",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00295042882179543
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.1526754969325,
                "lon": -62.0252761504412
            }
        },
        {
            "nombre_completo": "Comuna Los Cardos",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Los Cardos",
            "id": "824107",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0018549244100655
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.3164649854341,
                "lon": -61.6082113537085
            }
        },
        {
            "nombre_completo": "Comuna Las Bandurrias",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Las Bandurrias",
            "id": "824093",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0018458356762626
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.142287742811,
                "lon": -61.4387670818975
            }
        },
        {
            "nombre_completo": "Comuna Colonia Iturraspe",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Iturraspe",
            "id": "822182",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000662655875227631
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.4872374386429,
                "lon": -61.6182940033775
            }
        },
        {
            "nombre_completo": "Comuna Centeno",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Centeno",
            "id": "823757",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00189834483251402
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.2799048994369,
                "lon": -61.3879286384755
            }
        },
        {
            "nombre_completo": "Municipio Gálvez",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Gálvez",
            "id": "820252",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00223188883822861
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.0411326919865,
                "lon": -61.2351211450964
            }
        },
        {
            "nombre_completo": "Comuna Santa Clara de Buena Vista",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Santa Clara de Buena Vista",
            "id": "823239",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00402111401837628
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7853071266298,
                "lon": -61.344135418342
            }
        },
        {
            "nombre_completo": "Comuna Correa",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Correa",
            "id": "822903",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0023145272382677
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.8661284216727,
                "lon": -61.2556105340175
            }
        },
        {
            "nombre_completo": "Municipio Caraguatay",
            "fuente": "Ministerio de Ecología",
            "nombre": "Caraguatay",
            "id": "540336",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0154057347314052
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.7880792818679,
                "lon": -54.6714739429375
            }
        },
        {
            "nombre_completo": "Comuna López",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "López",
            "id": "823813",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00109283708350848
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8789098537191,
                "lon": -61.2823619602878
            }
        },
        {
            "nombre_completo": "Comuna Campo Piaggio",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Campo Piaggio",
            "id": "823743",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000699521624589458
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.9578774355502,
                "lon": -61.308753641697
            }
        },
        {
            "nombre_completo": "Comuna Loma Alta",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Loma Alta",
            "id": "823806",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000680114380772613
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.94747689208,
                "lon": -61.1810300098937
            }
        },
        {
            "nombre_completo": "Comuna Landeta",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Landeta",
            "id": "824086",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00246338220551139
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.0124482746131,
                "lon": -62.0700498805094
            }
        },
        {
            "nombre_completo": "Comuna Sa Pereyra",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Sa Pereyra",
            "id": "823190",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00157388983766175
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5971313084421,
                "lon": -61.3468277202869
            }
        },
        {
            "nombre_completo": "Comuna San Agustín",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Agustín",
            "id": "823197",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00114179238196762
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6805506670167,
                "lon": -60.9606129125984
            }
        },
        {
            "nombre_completo": "Comuna Díaz",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Díaz",
            "id": "823771",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0015368108072078
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.3772801322417,
                "lon": -61.0760881361809
            }
        },
        {
            "nombre_completo": "Comuna Bernardo de Irigoyen",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Bernardo de Irigoyen",
            "id": "823736",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00230531000828923
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.1672138904681,
                "lon": -61.2655749941586
            }
        },
        {
            "nombre_completo": "Comuna Colonia San José",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia San José",
            "id": "823043",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000495651420522039
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6223065299908,
                "lon": -60.861453091889
            }
        },
        {
            "nombre_completo": "Comuna M9Ximo Paz",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "M9Ximo Paz",
            "id": "822483",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0023540875459636
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.504662902307,
                "lon": -60.9632294864284
            }
        },
        {
            "nombre_completo": "Comuna Maciel",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Maciel",
            "id": "823820",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000536997900881079
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.4308360057879,
                "lon": -60.9354621768291
            }
        },
        {
            "nombre_completo": "Comuna General Gelly",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "General Gelly",
            "id": "822448",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000940697495734918
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.6039733024625,
                "lon": -60.5638509648398
            }
        },
        {
            "nombre_completo": "Comuna Franck",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Franck",
            "id": "823078",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000613601284707213
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5869277209191,
                "lon": -60.9378478799339
            }
        },
        {
            "nombre_completo": "Comuna Las Tunas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Las Tunas",
            "id": "823127",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000542435733275647
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5694628868887,
                "lon": -61.0124260255542
            }
        },
        {
            "nombre_completo": "Comuna Empalme San Carlos",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Empalme San Carlos",
            "id": "823064",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000791592679833156
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.54799878908,
                "lon": -60.8317705318505
            }
        },
        {
            "nombre_completo": "Comuna San Jerónimo del Sauce",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Jerónimo del Sauce",
            "id": "823218",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00103172474154233
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.608230507384,
                "lon": -61.1716574428883
            }
        },
        {
            "nombre_completo": "Municipio San Carlos Centro",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Carlos Centro",
            "id": "820168",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000879866231920344
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.7036916909091,
                "lon": -61.1371667633435
            }
        },
        {
            "nombre_completo": "Comuna San Carlos Norte",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Carlos Norte",
            "id": "823204",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000628470999126105
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6460399066645,
                "lon": -61.0756716878772
            }
        },
        {
            "nombre_completo": "Comuna San José del Rincón",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San José del Rincón",
            "id": "823022",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00121947348666316
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6105210975464,
                "lon": -60.5161613565597
            }
        },
        {
            "nombre_completo": "Municipio Cosquín",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cosquín",
            "id": "140679",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00880622364743796
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.2301247634122,
                "lon": -64.6078303478471
            }
        },
        {
            "nombre_completo": "Municipio Fachinal",
            "fuente": "Ministerio de Ecología",
            "nombre": "Fachinal",
            "id": "540105",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0115563593394392
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.6682436215363,
                "lon": -55.752406330818
            }
        },
        {
            "nombre_completo": "Comuna Larrechea",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Larrechea",
            "id": "823799",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000805631711688335
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.9329952644909,
                "lon": -61.0603813968283
            }
        },
        {
            "nombre_completo": "Municipio El Alcázar",
            "fuente": "Ministerio de Ecología",
            "nombre": "El Alcázar",
            "id": "540301",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.01337261617482
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.8436076435471,
                "lon": -54.7771362135852
            }
        },
        {
            "nombre_completo": "Comuna San Jerónimo Norte",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Jerónimo Norte",
            "id": "823225",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000946950128255516
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5258534091477,
                "lon": -61.0736376747312
            }
        },
        {
            "nombre_completo": "Comuna Santa María Norte",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Santa María Norte",
            "id": "823253",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00061627199651778
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5131510016903,
                "lon": -61.1733958940775
            }
        },
        {
            "nombre_completo": "Comuna Pujato Norte",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Pujato Norte",
            "id": "823176",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000320770682769348
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5161672425739,
                "lon": -60.9497533401639
            }
        },
        {
            "nombre_completo": "Comuna Pueblo Muñoz",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Pueblo Muñoz",
            "id": "823435",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000461181491510711
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.1752792379377,
                "lon": -60.9052927841168
            }
        },
        {
            "nombre_completo": "Municipio Recreo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Recreo",
            "id": "820144",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000935697397664298
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4934750126065,
                "lon": -60.7360555112084
            }
        },
        {
            "nombre_completo": "Comuna Santa Rosa de Calchines",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Santa Rosa de Calchines",
            "id": "822567",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00583914198481286
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.4050911059057,
                "lon": -60.3232768342223
            }
        },
        {
            "nombre_completo": "Comuna Cayastá",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Cayastá",
            "id": "822539",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00554874447358898
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.2269237197361,
                "lon": -60.2433549075188
            }
        },
        {
            "nombre_completo": "Comuna Arroyo Aguiar",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Arroyo Aguiar",
            "id": "822952",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00167593342319233
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.4107990800837,
                "lon": -60.6125961254154
            }
        },
        {
            "nombre_completo": "Comuna Cavour",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Cavour",
            "id": "823036",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000476855412849384
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3872673145398,
                "lon": -60.9954046960922
            }
        },
        {
            "nombre_completo": "Comuna Candioti",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Candioti",
            "id": "822980",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000484150489136586
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3933381338548,
                "lon": -60.7596570635364
            }
        },
        {
            "nombre_completo": "Comuna Campo Andino",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Campo Andino",
            "id": "822973",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00177823282858848
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.2742893672832,
                "lon": -60.5427040269028
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Graneros",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Graneros",
            "id": "900049",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0192380192115154
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.6458539748406,
                "lon": -65.4261125358138
            }
        },
        {
            "nombre_completo": "Comuna Acheral",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Acheral",
            "id": "908378",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00312401793405547
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.1427938708016,
                "lon": -65.4496784464332
            }
        },
        {
            "nombre_completo": "Comuna Rio Colorado",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Rio Colorado",
            "id": "908336",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00327102418989186
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.1425575216567,
                "lon": -65.3585235452036
            }
        },
        {
            "nombre_completo": "Municipio Laguna Paiva",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Laguna Paiva",
            "id": "820140",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00107850698081214
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.3039882761946,
                "lon": -60.6655561130064
            }
        },
        {
            "nombre_completo": "Comuna Nelson",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Nelson",
            "id": "823008",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00208150071399671
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.2949655514905,
                "lon": -60.8134512895268
            }
        },
        {
            "nombre_completo": "Comuna Rivadavia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Rivadavia",
            "id": "823183",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000734320789376106
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3073642314223,
                "lon": -61.0299506997885
            }
        },
        {
            "nombre_completo": "Comuna Grutly",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Grutly",
            "id": "823085",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00126344701140806
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.237688238885,
                "lon": -61.0940311148995
            }
        },
        {
            "nombre_completo": "Comuna Felicia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Felicia",
            "id": "823071",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00181535090373205
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.2182040726477,
                "lon": -61.2319201301032
            }
        },
        {
            "nombre_completo": "Comuna Lehmann",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Lehmann",
            "id": "822287",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00239724470868079
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1262157668969,
                "lon": -61.4334542945861
            }
        },
        {
            "nombre_completo": "Comuna Llambi Campbell",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Llambi Campbell",
            "id": "822994",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00204579559814022
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1753913273892,
                "lon": -60.6962038548563
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de San Miguel De Tucuman",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "San Miguel De Tucuman",
            "id": "900014",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00409749372525764
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.8339544139899,
                "lon": -65.217843658659
            }
        },
        {
            "nombre_completo": "Comuna Cabal",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Cabal",
            "id": "822966",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000531030925283397
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1047189527506,
                "lon": -60.7457774013044
            }
        },
        {
            "nombre_completo": "Comuna Emilia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Emilia",
            "id": "822987",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000696620467633165
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0545059210377,
                "lon": -60.7465206018549
            }
        },
        {
            "nombre_completo": "Comuna Santo Domingo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Santo Domingo",
            "id": "823260",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00130432303055829
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1119041613447,
                "lon": -60.8802849962456
            }
        },
        {
            "nombre_completo": "Comuna María Luisa",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "María Luisa",
            "id": "823134",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000632767646230219
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0187839005544,
                "lon": -60.8916036081998
            }
        },
        {
            "nombre_completo": "Comuna La Pelada",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "La Pelada",
            "id": "823120",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00357326213512167
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.8628913365674,
                "lon": -60.933499697792
            }
        },
        {
            "nombre_completo": "Comuna Providencia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Providencia",
            "id": "823169",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00161342726671727
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.9794167035629,
                "lon": -61.0284594470812
            }
        },
        {
            "nombre_completo": "Comuna Ituzaingó",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Ituzaingó",
            "id": "823106",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00143101259949172
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.8148965134573,
                "lon": -61.1425699547603
            }
        },
        {
            "nombre_completo": "Comuna Jacinto L. Arauz",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Jacinto L. Arauz",
            "id": "823113",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00103558449800682
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.7206002392582,
                "lon": -60.9560890781576
            }
        },
        {
            "nombre_completo": "Comuna Virginia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Virginia",
            "id": "822399",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000736271730047137
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.7574324549798,
                "lon": -61.366914168879
            }
        },
        {
            "nombre_completo": "Comuna Colonia Bicha",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Bicha",
            "id": "822154",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000469101056837206
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.8610047560586,
                "lon": -61.8404933743742
            }
        },
        {
            "nombre_completo": "Municipio Sunchales",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Sunchales",
            "id": "820049",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00285142725049536
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.9512953414673,
                "lon": -61.5830166844307
            }
        },
        {
            "nombre_completo": "Comuna Colonia Belgrano",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Belgrano",
            "id": "824072",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00154092977068704
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.9541122826773,
                "lon": -61.4215393124086
            }
        },
        {
            "nombre_completo": "Comuna Ataliva",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Ataliva",
            "id": "822119",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00121845756127538
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.9962504496126,
                "lon": -61.4318015145206
            }
        },
        {
            "nombre_completo": "Comuna Galisteo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Galisteo",
            "id": "822252",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00121376760089342
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0188302273946,
                "lon": -61.3261640759401
            }
        },
        {
            "nombre_completo": "Comuna Sarmiento",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Sarmiento",
            "id": "823267",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00184178297230262
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0788740540927,
                "lon": -61.2013457069007
            }
        },
        {
            "nombre_completo": "Comuna Bouquet",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Bouquet",
            "id": "822007",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00273955501309013
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.4169834004818,
                "lon": -61.8772106360396
            }
        },
        {
            "nombre_completo": "Comuna Timbúes",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Timbúes",
            "id": "824030",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00143038668906531
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.5743789609184,
                "lon": -60.8022435517042
            }
        },
        {
            "nombre_completo": "Comuna Elisa",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Elisa",
            "id": "823057",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00184852861089112
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.691058394819,
                "lon": -61.1094233967844
            }
        },
        {
            "nombre_completo": "Comuna Maua",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Maua",
            "id": "822301",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000486238527335482
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.775467744443,
                "lon": -61.2600717296399
            }
        },
        {
            "nombre_completo": "Municipio Las Parejas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Las Parejas",
            "id": "820014",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00233549145072328
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.6475570583936,
                "lon": -61.5805144134391
            }
        },
        {
            "nombre_completo": "Municipio Totoras",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Totoras",
            "id": "820133",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00300893008324336
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.5834468055122,
                "lon": -61.2206195299342
            }
        },
        {
            "nombre_completo": "Municipio Las Rosas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Las Rosas",
            "id": "820021",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00546607089721329
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.4624669041901,
                "lon": -61.6293536644398
            }
        },
        {
            "nombre_completo": "Municipio Jardín América",
            "fuente": "Ministerio de Ecología",
            "nombre": "Jardín América",
            "id": "540455",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.011434078975986
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.0873119097214,
                "lon": -55.1946087942069
            }
        },
        {
            "nombre_completo": "Comuna Tortugas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Tortugas",
            "id": "822021",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00249771506179049
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.8223554883576,
                "lon": -61.7391349322219
            }
        },
        {
            "nombre_completo": "Municipio Armstrong",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Armstrong",
            "id": "820007",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00241172136927916
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.8821841927186,
                "lon": -61.6467090866212
            }
        },
        {
            "nombre_completo": "Municipio Rufino",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Rufino",
            "id": "820070",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00646103667279831
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.2413725014123,
                "lon": -62.6421229474986
            }
        },
        {
            "nombre_completo": "Comuna San Gregorio",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Gregorio",
            "id": "822728",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00409191031809105
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.2656010564826,
                "lon": -61.8917105973606
            }
        },
        {
            "nombre_completo": "Comuna Colonia Raquel",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Colonia Raquel",
            "id": "822196",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00102278366441829
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.8228701986045,
                "lon": -61.5053825202058
            }
        },
        {
            "nombre_completo": "Comuna Lazzarino",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Lazzarino",
            "id": "822672",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00187495956858085
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.2381337496838,
                "lon": -62.4179437231131
            }
        },
        {
            "nombre_completo": "Comuna Christophersen",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Christophersen",
            "id": "822630",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00233956064788326
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.1766468939857,
                "lon": -62.0669267336755
            }
        },
        {
            "nombre_completo": "Comuna Amenábar",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Amenábar",
            "id": "822581",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00395046903205224
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.0808111397627,
                "lon": -62.4106609815495
            }
        },
        {
            "nombre_completo": "Comuna Clason",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Clason",
            "id": "822896",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00301708719519787
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.4901170251452,
                "lon": -61.3490127009324
            }
        },
        {
            "nombre_completo": "Municipio Maquinchao",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Maquinchao",
            "id": "620266",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000140021184225252
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -41.2407347869401,
                "lon": -68.686482506314
            }
        },
        {
            "nombre_completo": "Municipio Sierra Grande",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Sierra Grande",
            "id": "620238",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0248567330679291
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -41.6199292450996,
                "lon": -65.3927571583057
            }
        },
        {
            "nombre_completo": "Municipio Pilcaniyeu",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Pilcaniyeu",
            "id": "620224",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.02701618755554
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -41.0859116021639,
                "lon": -70.7859482097355
            }
        },
        {
            "nombre_completo": "Comuna Aldao",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Aldao",
            "id": "823981",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000675133258926064
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.7105750431398,
                "lon": -60.860255031151
            }
        },
        {
            "nombre_completo": "Comuna Peyrano",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Peyrano",
            "id": "822504",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00107057070295943
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.5149086667288,
                "lon": -60.7830705827464
            }
        },
        {
            "nombre_completo": "Municipio San Antonio Oeste",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "San Antonio Oeste",
            "id": "620231",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0266079026296468
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -40.5429230180034,
                "lon": -65.283234710451
            }
        },
        {
            "nombre_completo": "Comuna Cañada Rica",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Cañada Rica",
            "id": "822427",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00102287801172235
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.5345197212102,
                "lon": -60.6433660436222
            }
        },
        {
            "nombre_completo": "Comuna Sargento Cabral",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Sargento Cabral",
            "id": "822525",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00102657798636506
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.4566719887247,
                "lon": -60.6628323941405
            }
        },
        {
            "nombre_completo": "Comuna Cepeda",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Cepeda",
            "id": "822434",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000656427652616097
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.4041900910833,
                "lon": -60.5863509794203
            }
        },
        {
            "nombre_completo": "Comuna Los Molinos",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Los Molinos",
            "id": "822077",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0011984975994194
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.0630760180591,
                "lon": -61.351566112883
            }
        },
        {
            "nombre_completo": "Municipio Casilda",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Casilda",
            "id": "820028",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0029488090097
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.0496734903785,
                "lon": -61.1906668618458
            }
        },
        {
            "nombre_completo": "Municipio Comodoro Rivadavia",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Comodoro Rivadavia",
            "id": "260049",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.00266172548046397
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -45.8393410189072,
                "lon": -67.5913153174428
            }
        },
        {
            "nombre_completo": "Comuna Teodelina",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Teodelina",
            "id": "822749",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00564749096527877
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.1932681090876,
                "lon": -61.6062871353185
            }
        },
        {
            "nombre_completo": "Comuna Wheelwright",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Wheelwright",
            "id": "822756",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00247618964101203
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.8668306170448,
                "lon": -61.2514088693739
            }
        },
        {
            "nombre_completo": "Comuna Rural Amberes",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Amberes",
            "id": "908385",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00119813614528961
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.275680776845,
                "lon": -65.4935457143045
            }
        },
        {
            "nombre_completo": "Comuna Santa Cruz y la Tuna",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Santa Cruz y la Tuna",
            "id": "908546",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00210642843585451
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.3473564761443,
                "lon": -65.444961266605
            }
        },
        {
            "nombre_completo": "Comuna Arequito",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Arequito",
            "id": "822028",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00370434026989662
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.1514565982898,
                "lon": -61.5075643530562
            }
        },
        {
            "nombre_completo": "Comuna Rural Raco",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Raco",
            "id": "908588",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0161258422319952
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -26.6885600831378,
                "lon": -65.4527606691066
            }
        },
        {
            "nombre_completo": "Comuna San José de la Esquina",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San José de la Esquina",
            "id": "822091",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00186287353719005
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.1572759335162,
                "lon": -61.6885050572593
            }
        },
        {
            "nombre_completo": "Comuna Sanford",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Sanford",
            "id": "822098",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00142781092090318
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.1857451820986,
                "lon": -61.2332294502856
            }
        },
        {
            "nombre_completo": "Municipio Funes",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Funes",
            "id": "820189",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000749296132146387
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.9257676944927,
                "lon": -60.8261607949761
            }
        },
        {
            "nombre_completo": "Municipio Pérez",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Pérez",
            "id": "820203",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000523184939096495
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.9982620628378,
                "lon": -60.7969296352689
            }
        },
        {
            "nombre_completo": "Comuna Arteaga",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Arteaga",
            "id": "822035",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00212767779745521
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.1368578390942,
                "lon": -61.8363472412873
            }
        },
        {
            "nombre_completo": "Comuna Álvarez",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Álvarez",
            "id": "823365",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000521771148222995
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.1403539047981,
                "lon": -60.8078469904161
            }
        },
        {
            "nombre_completo": "Comuna Rueda",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Rueda",
            "id": "822511",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000914676796971623
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.3591482860067,
                "lon": -60.4258017183045
            }
        },
        {
            "nombre_completo": "Comuna Juan Bernabé Molina",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Juan Bernabé Molina",
            "id": "822462",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00131346892265718
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.5272345570571,
                "lon": -60.4979236942087
            }
        },
        {
            "nombre_completo": "Comuna Arminda",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Arminda",
            "id": "823379",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000378435145577833
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.2495867421022,
                "lon": -60.961875750524
            }
        },
        {
            "nombre_completo": "Municipio Carcarañá",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Carcarañá",
            "id": "820273",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00109951766369074
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.8981441181936,
                "lon": -61.130992566775
            }
        },
        {
            "nombre_completo": "Comuna Albarellos",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Albarellos",
            "id": "823358",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000552184867082053
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.2386305005586,
                "lon": -60.6273437225375
            }
        },
        {
            "nombre_completo": "Comuna Coronel Domínguez",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Coronel Domínguez",
            "id": "823470",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000465645834419559
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.1910836736566,
                "lon": -60.7384468170916
            }
        },
        {
            "nombre_completo": "Comuna Empalme Villa Constitución",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Empalme Villa Constitución",
            "id": "822441",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00029381737439839
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.2818339398833,
                "lon": -60.4006220966773
            }
        },
        {
            "nombre_completo": "Comuna Godoy",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Godoy",
            "id": "822455",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00122526075796704
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.4159667129409,
                "lon": -60.4723055010023
            }
        },
        {
            "nombre_completo": "Comuna Chabas",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Chabas",
            "id": "822056",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00287412268957741
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.2624921319241,
                "lon": -61.3642886237022
            }
        },
        {
            "nombre_completo": "Comuna Murphy",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Murphy",
            "id": "822707",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00173736886709862
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.5651286316929,
                "lon": -61.8493297977916
            }
        },
        {
            "nombre_completo": "Comuna Villada",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Villada",
            "id": "822105",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00123863596565735
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.3390518480359,
                "lon": -61.4954681918429
            }
        },
        {
            "nombre_completo": "Comuna Cañada del Ucle",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Cañada del Ucle",
            "id": "822595",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00185099359963454
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.3931162937243,
                "lon": -61.6450157292705
            }
        },
        {
            "nombre_completo": "Municipio Firmat",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Firmat",
            "id": "820063",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00180107682764566
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.4467661872122,
                "lon": -61.4845915557249
            }
        },
        {
            "nombre_completo": "Comuna Bombal",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Bombal",
            "id": "822420",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00225910247526798
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.4572041858145,
                "lon": -61.3052277159594
            }
        },
        {
            "nombre_completo": "Comuna Carreras",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Carreras",
            "id": "822609",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00140107463457124
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.6251532592475,
                "lon": -61.3528987414283
            }
        },
        {
            "nombre_completo": "Comuna Labordeboy",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Labordeboy",
            "id": "822665",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000978329830805774
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.7187441454908,
                "lon": -61.2931820872951
            }
        },
        {
            "nombre_completo": "Comuna Hughes",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Hughes",
            "id": "822651",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00184277881063231
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.8289201098464,
                "lon": -61.3698198632529
            }
        },
        {
            "nombre_completo": "Municipio Villa Cañás",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Villa Cañás",
            "id": "820084",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00470527642005668
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.0190906471635,
                "lon": -61.605442904833
            }
        },
        {
            "nombre_completo": "Comuna Elortondo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Elortondo",
            "id": "822644",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00354529185162028
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.7743928763854,
                "lon": -61.5768623551581
            }
        },
        {
            "nombre_completo": "Comuna Santa Isabel",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Santa Isabel",
            "id": "822742",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00294201316335449
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.8999932608857,
                "lon": -61.7327604188632
            }
        },
        {
            "nombre_completo": "Comuna Carmen",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Carmen",
            "id": "822602",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00219096139582415
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.6869903501739,
                "lon": -61.7809193437975
            }
        },
        {
            "nombre_completo": "Comuna Cafferata",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Cafferata",
            "id": "822588",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0023865114381311
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.4800452654042,
                "lon": -62.0868929871934
            }
        },
        {
            "nombre_completo": "Comuna Maggiolo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Maggiolo",
            "id": "822679",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00520601751330736
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.7396897872561,
                "lon": -62.2594730717287
            }
        },
        {
            "nombre_completo": "Comuna San Francisco de Santa Fe",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Francisco de Santa Fe",
            "id": "822721",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00110956442041024
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.5987741853172,
                "lon": -62.141054913404
            }
        },
        {
            "nombre_completo": "Comuna Sancti Spiritu",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Sancti Spiritu",
            "id": "822735",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00536995631094802
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.9895390805555,
                "lon": -62.2912046220744
            }
        },
        {
            "nombre_completo": "Comuna San Eduardo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Eduardo",
            "id": "822714",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00323744888542337
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.9052421066899,
                "lon": -62.1203702108474
            }
        },
        {
            "nombre_completo": "Comuna Miguel Torres",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Miguel Torres",
            "id": "822700",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00092001111767945
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.5358302476391,
                "lon": -61.4455173944434
            }
        },
        {
            "nombre_completo": "Comuna Bigand",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Bigand",
            "id": "822049",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00230725210217786
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.3710199794766,
                "lon": -61.184565773874
            }
        },
        {
            "nombre_completo": "Comuna Chapuy",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Chapuy",
            "id": "822616",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00094009593679179
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.8060370663112,
                "lon": -61.7629859351878
            }
        },
        {
            "nombre_completo": "Comuna Carmen del Sauce",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Carmen del Sauce",
            "id": "823386",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000509711127000134
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.2300039630842,
                "lon": -60.7866248679276
            }
        },
        {
            "nombre_completo": "Comuna Soldini",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Soldini",
            "id": "823442",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000546526535512857
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.0446925470286,
                "lon": -60.7846806052725
            }
        },
        {
            "nombre_completo": "Comuna Luis Palacios",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Luis Palacios",
            "id": "824002",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00190429904522752
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.7771413141655,
                "lon": -60.9575837839017
            }
        },
        {
            "nombre_completo": "Municipio Cañada de Gómez",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Cañada de Gómez",
            "id": "820126",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00409248847233868
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.843409026257,
                "lon": -61.4282037638466
            }
        },
        {
            "nombre_completo": "Comuna Coronel Arnold",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Coronel Arnold",
            "id": "823988",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000986660719542531
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.0973182229218,
                "lon": -60.9718538088051
            }
        },
        {
            "nombre_completo": "Comuna Zavalla",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Zavalla",
            "id": "823463",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00128102268593529
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.0171717856177,
                "lon": -60.912358566845
            }
        },
        {
            "nombre_completo": "Comuna Carrizales",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Carrizales",
            "id": "822889",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0015827979276953
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.5088944503695,
                "lon": -61.0545249334282
            }
        },
        {
            "nombre_completo": "Municipio San Lorenzo",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "San Lorenzo",
            "id": "820301",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000290933065469224
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.7444112324121,
                "lon": -60.7520288999292
            }
        },
        {
            "nombre_completo": "Municipio Fray Luis Beltrán",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Fray Luis Beltrán",
            "id": "820280",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 6.44679088328156e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.7862746028975,
                "lon": -60.7339969495167
            }
        },
        {
            "nombre_completo": "Comuna General Lagos",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "General Lagos",
            "id": "823407",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000339756413760332
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.115379504631,
                "lon": -60.576348305155
            }
        },
        {
            "nombre_completo": "Comuna Villa Amelia",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Villa Amelia",
            "id": "823456",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000646890777294209
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.1570171302267,
                "lon": -60.6704349346796
            }
        },
        {
            "nombre_completo": "Municipio Villa Gobernador Gálvez",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Villa Gobernador Gálvez",
            "id": "820217",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000241579137375066
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.028685994743,
                "lon": -60.6266965797525
            }
        },
        {
            "nombre_completo": "Comuna Oliveros",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Oliveros",
            "id": "822917",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.0012804817159395
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.5308038570063,
                "lon": -60.898479889663
            }
        },
        {
            "nombre_completo": "Comuna Pueblo Esther",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Pueblo Esther",
            "id": "823428",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000205196526603179
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.0799042599849,
                "lon": -60.5719619710023
            }
        },
        {
            "nombre_completo": "Municipio Villa Constitución",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Villa Constitución",
            "id": "820056",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000634986890246303
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.242503514408,
                "lon": -60.3189290088334
            }
        },
        {
            "nombre_completo": "Comuna Gaboto",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Gaboto",
            "id": "823778",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00160373637828333
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.4089489847218,
                "lon": -60.8071360237379
            }
        },
        {
            "nombre_completo": "Comuna El Sombrerito",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "El Sombrerito",
            "id": "822791",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00391001045451883
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.6412656897106,
                "lon": -59.277313770177
            }
        },
        {
            "nombre_completo": "Comuna Guadalupe Norte",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Guadalupe Norte",
            "id": "822805",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00319679750663027
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -28.9633631140973,
                "lon": -59.4143676323245
            }
        },
        {
            "nombre_completo": "Comuna Egusquiza",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Egusquiza",
            "id": "822210",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000963404207710847
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0944039294014,
                "lon": -61.6230238924311
            }
        },
        {
            "nombre_completo": "Comuna Ricardone",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Ricardone",
            "id": "824016",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000722801606330217
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.7891891714523,
                "lon": -60.8059217685627
            }
        },
        {
            "nombre_completo": "Comuna Pujato",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Pujato",
            "id": "824009",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.00136611436009625
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.9970194609738,
                "lon": -61.0482263924062
            }
        },
        {
            "nombre_completo": "Municipio Arroyo Seco",
            "fuente": "Servicio de Catastro e Información Territorial",
            "nombre": "Arroyo Seco",
            "id": "820182",
            "provincia": {
                "nombre": "Santa Fe",
                "id": "82",
                "interseccion": 0.000971632753605031
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.1690763212677,
                "lon": -60.5458497884713
            }
        },
        {
            "nombre_completo": "Municipio Comallo",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Comallo",
            "id": "620217",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000124616991495999
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -41.0251092261411,
                "lon": -70.2710463795789
            }
        },
        {
            "nombre_completo": "Municipio Los Menucos",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Los Menucos",
            "id": "620259",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00040007078142994
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -40.8262504342814,
                "lon": -68.0873726971184
            }
        },
        {
            "nombre_completo": "Municipio Valcheta",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Valcheta",
            "id": "620245",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00037725614726823
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -40.6689477397889,
                "lon": -66.1645106359565
            }
        },
        {
            "nombre_completo": "Municipio Sierra Colorada",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Sierra Colorada",
            "id": "620196",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000368598090516682
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -40.5924390019702,
                "lon": -67.7020241137007
            }
        },
        {
            "nombre_completo": "Municipio Ministro Ramos Mexia",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Ministro Ramos Mexia",
            "id": "620189",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000499341160713396
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -40.4883111469266,
                "lon": -67.256338467348
            }
        },
        {
            "nombre_completo": "Municipio Gral. Fdez. Oro",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Gral. Fdez. Oro",
            "id": "620154",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000184496725879642
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.9627414832882,
                "lon": -67.9228735284277
            }
        },
        {
            "nombre_completo": "Municipio Veinticinco de Mayo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Veinticinco de Mayo",
            "id": "420385",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0534203807335316
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.7967978817517,
                "lon": -67.3033281981441
            }
        },
        {
            "nombre_completo": "Municipio Guardia Mitre",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Guardia Mitre",
            "id": "620007",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000483905771744526
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -40.4374907428096,
                "lon": -63.704869821598
            }
        },
        {
            "nombre_completo": "Municipio Gral. Roca",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Gral. Roca",
            "id": "620161",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0023830728486722
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.0084775603203,
                "lon": -67.6126070896437
            }
        },
        {
            "nombre_completo": "Municipio Gral. Conesa",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Gral. Conesa",
            "id": "620084",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000418117327521277
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -40.1208064756328,
                "lon": -64.3692830696643
            }
        },
        {
            "nombre_completo": "Municipio Campo Viera",
            "fuente": "Ministerio de Ecología",
            "nombre": "Campo Viera",
            "id": "540364",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00700960546752231
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.2823846186064,
                "lon": -55.0718611745211
            }
        },
        {
            "nombre_completo": "Municipio Pomona",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Pomona",
            "id": "620063",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00123263679594977
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.5167601655441,
                "lon": -65.6588412374935
            }
        },
        {
            "nombre_completo": "Municipio Alta Gracia",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Alta Gracia",
            "id": "141372",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000953668854223553
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6506235252463,
                "lon": -64.4436954878587
            }
        },
        {
            "nombre_completo": "Municipio Ñorquinco",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Ñorquinco",
            "id": "620203",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000403531560824211
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -41.8467273376904,
                "lon": -70.8882638485984
            }
        },
        {
            "nombre_completo": "Municipio Lamarque",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Lamarque",
            "id": "620049",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00052984285948417
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.3988847133038,
                "lon": -65.6791011612072
            }
        },
        {
            "nombre_completo": "Municipio Coronel Belisle",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Coronel Belisle",
            "id": "620035",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000499659690463548
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.2017811762867,
                "lon": -65.9758157766285
            }
        },
        {
            "nombre_completo": "Municipio Darwin",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Darwin",
            "id": "620042",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000501358240906856
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.21702853283,
                "lon": -65.765129258773
            }
        },
        {
            "nombre_completo": "Municipio Chimpay",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Chimpay",
            "id": "620021",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000760518305381454
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.1593568616365,
                "lon": -66.1547548307705
            }
        },
        {
            "nombre_completo": "Municipio Chichinales",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Chichinales",
            "id": "620119",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000333542882819001
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.1295006214718,
                "lon": -66.9499547671551
            }
        },
        {
            "nombre_completo": "Municipio Cervantes",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Cervantes",
            "id": "620112",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000351746669799156
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.0497340068548,
                "lon": -67.4340737678692
            }
        },
        {
            "nombre_completo": "Municipio Allen",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Allen",
            "id": "620091",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0166810725896665
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.4548258741817,
                "lon": -68.2367757347548
            }
        },
        {
            "nombre_completo": "Municipio Dos Arroyos",
            "fuente": "Ministerio de Ecología",
            "nombre": "Dos Arroyos",
            "id": "540266",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00336224792517985
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.7059575800021,
                "lon": -55.2673317321973
            }
        },
        {
            "nombre_completo": "Municipio Cinco Saltos",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Cinco Saltos",
            "id": "620126",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000308542059782186
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.8117033664373,
                "lon": -68.0660751980812
            }
        },
        {
            "nombre_completo": "Municipio Contralmirante Cordero",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Contralmirante Cordero",
            "id": "620140",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000247934531454656
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.7203467273618,
                "lon": -68.1230182434354
            }
        },
        {
            "nombre_completo": "Municipio Catriel",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Catriel",
            "id": "620105",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000732023559655134
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.8531255573185,
                "lon": -67.8278538596389
            }
        },
        {
            "nombre_completo": "Municipio Dina Huapi",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Dina Huapi",
            "id": "620273",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 6.46026493972835e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -41.0792931337117,
                "lon": -71.1511346698346
            }
        },
        {
            "nombre_completo": "Municipio Gral. Enrique Godoy",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Gral. Enrique Godoy",
            "id": "620147",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0033338811382944
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.8781596546557,
                "lon": -67.1569924498788
            }
        },
        {
            "nombre_completo": "Municipio Concepción de la Sierra",
            "fuente": "Ministerio de Ecología",
            "nombre": "Concepción de la Sierra",
            "id": "540126",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.012051114099666
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.9975106090559,
                "lon": -55.5161642960258
            }
        },
        {
            "nombre_completo": "Municipio Villa Regina",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Villa Regina",
            "id": "620182",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00574483812691311
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.9398313952735,
                "lon": -67.0685798585156
            }
        },
        {
            "nombre_completo": "Municipio Rìo Colorado",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Rìo Colorado",
            "id": "620210",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.000321165836972411
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -39.0037456216053,
                "lon": -64.0834015612324
            }
        },
        {
            "nombre_completo": "Comuna Colonia Videla",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Videla",
            "id": "142805",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.26792792325317e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.9169547649849,
                "lon": -63.5039908818592
            }
        },
        {
            "nombre_completo": "Comisión de Fomento San Javier",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "San Javier",
            "id": "625014",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0158673532186386
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -40.8543119978496,
                "lon": -63.6849182819527
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Arroyo Ventana",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Arroyo Ventana",
            "id": "625154",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0110757603463355
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.7917583774206,
                "lon": -66.0336562102574
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Laguna Blanca",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Laguna Blanca",
            "id": "625231",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00735982088655066
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -40.7601302402642,
                "lon": -69.7256094720868
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Pilquiniyeu",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Pilquiniyeu",
            "id": "625252",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00568660965486216
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.8669835874348,
                "lon": -68.4383244447555
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Nahuel Niyeu",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Nahuel Niyeu",
            "id": "625182",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0146861950820138
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -40.352019525255,
                "lon": -66.5234520435458
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Chipauquil",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Chipauquil",
            "id": "625175",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0102733097965084
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -40.9951090361059,
                "lon": -66.6618073695211
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Peñas Blancas",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Peñas Blancas",
            "id": "625105",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00223311215220573
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -37.6537990108301,
                "lon": -68.0360307856015
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Paso Flores",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Paso Flores",
            "id": "625035",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00276650845714631
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -40.7194201979154,
                "lon": -70.6386570920085
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Aguada Guzman",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Aguada Guzman",
            "id": "625077",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0103953997246964
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -40.0648502664189,
                "lon": -68.9428325675975
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Valle Azul",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Valle Azul",
            "id": "625112",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00680834619677302
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -39.2976976982115,
                "lon": -66.7691271592177
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Villa Llanquin",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Villa Llanquin",
            "id": "625042",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00054641787941738
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -40.8764816536377,
                "lon": -71.0123491718889
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Arroyo los Berros",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Arroyo los Berros",
            "id": "625147",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0138638321305132
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.4992329032042,
                "lon": -66.3180512632965
            }
        },
        {
            "nombre_completo": "Municipio Freyre",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Freyre",
            "id": "141253",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000101784434903625
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.1656648235175,
                "lon": -62.0979078434039
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Rincon de Treneta",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Rincon de Treneta",
            "id": "625119",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00534193893694123
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.0080872277293,
                "lon": -67.004121998791
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Comico",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Comico",
            "id": "625210",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00750486198526184
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.1358166511192,
                "lon": -67.4285917982655
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Prahuaniyeu",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Prahuaniyeu",
            "id": "625259",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0111902707878023
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.4322205075105,
                "lon": -67.7707234083529
            }
        },
        {
            "nombre_completo": "Comisión de Fomento El Cain",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "El Cain",
            "id": "625224",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0172141531544726
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.7663746514907,
                "lon": -67.9105731336342
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Aguada Cecilio",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Aguada Cecilio",
            "id": "625168",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00273484157976854
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -40.8663529171297,
                "lon": -65.8978743716421
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Cona Niyeu",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Cona Niyeu",
            "id": "625161",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0230074316366605
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.7591468812231,
                "lon": -66.9600916196989
            }
        },
        {
            "nombre_completo": "Comisión de Fomento El Cuy",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "El Cuy",
            "id": "625056",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0225487330212433
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -39.9042130684158,
                "lon": -68.1435897851708
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Aguada de Guerra",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Aguada de Guerra",
            "id": "625196",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0050822822276401
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -40.9552361898102,
                "lon": -68.4614433401377
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Naupa Huen",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Naupa Huen",
            "id": "625098",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00351261455596777
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -39.9330478073117,
                "lon": -69.5423537818292
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Ojos de Agua",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Ojos de Agua",
            "id": "625245",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0135542838710714
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.7231304422893,
                "lon": -69.758361104809
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Mamuel Choique",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Mamuel Choique",
            "id": "625238",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0063751562959626
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.7859281548501,
                "lon": -70.1233351467106
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Rio Chico",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Rio Chico",
            "id": "625266",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.00671172421803134
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -41.7550023825728,
                "lon": -70.4166173577108
            }
        },
        {
            "nombre_completo": "Municipio Viedma",
            "fuente": "A.R.T - Gerencia de Catastro",
            "nombre": "Viedma",
            "id": "620014",
            "provincia": {
                "nombre": "Río Negro",
                "id": "62",
                "interseccion": 0.0008747849852591
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -40.847812539356,
                "lon": -63.0166864583886
            }
        },
        {
            "nombre_completo": "Municipio El Maitén",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "El Maitén",
            "id": "260028",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.00258673912195101
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -42.1227715249121,
                "lon": -71.1509289608383
            }
        },
        {
            "nombre_completo": "Municipio Lago Puelo",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Lago Puelo",
            "id": "260042",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000295247211138491
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -42.0304764901391,
                "lon": -71.5667357457431
            }
        },
        {
            "nombre_completo": "Municipio Rawson",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Rawson",
            "id": "260112",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.00192306808141291
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -43.2585661872238,
                "lon": -65.088623341394
            }
        },
        {
            "nombre_completo": "Comisión de Fomento 28 de Julio",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "28 de Julio",
            "id": "265014",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000485593463951336
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -43.3837023377194,
                "lon": -65.8391207473089
            }
        },
        {
            "nombre_completo": "Municipio Arroyo del Medio",
            "fuente": "Ministerio de Ecología",
            "nombre": "Arroyo del Medio",
            "id": "540245",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00551963824529336
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.7292589296399,
                "lon": -55.3978728810584
            }
        },
        {
            "nombre_completo": "Municipio Epuyén",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Epuyén",
            "id": "260035",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.00357284648007751
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -42.2742146687025,
                "lon": -71.3477379380155
            }
        },
        {
            "nombre_completo": "Municipio Dolavon",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Dolavon",
            "id": "260091",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000444073026486271
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -43.3329711153712,
                "lon": -65.683609112542
            }
        },
        {
            "nombre_completo": "Municipio Trelew",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Trelew",
            "id": "260119",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.00121848771556347
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -43.2489444215854,
                "lon": -65.3181167768115
            }
        },
        {
            "nombre_completo": "Municipio Gaiman",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Gaiman",
            "id": "260098",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000617663697267877
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -43.3084974956967,
                "lon": -65.5118173147311
            }
        },
        {
            "nombre_completo": "Municipio José de San Martín",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "José de San Martín",
            "id": "260154",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000353652197966476
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -44.0515049815562,
                "lon": -70.4638843298773
            }
        },
        {
            "nombre_completo": "Comuna Rural Aldea Beleiro",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Aldea Beleiro",
            "id": "268091",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000378642750053076
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -45.5547604536796,
                "lon": -71.5479426044265
            }
        },
        {
            "nombre_completo": "Municipio Esquel",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Esquel",
            "id": "260077",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.00521273601877757
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -42.9105175261148,
                "lon": -71.3158427579452
            }
        },
        {
            "nombre_completo": "Comuna Rural Puerto Pirámides",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Puerto Pirámides",
            "id": "265028",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000384254224878208
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -42.5486838278015,
                "lon": -64.2705125210326
            }
        },
        {
            "nombre_completo": "Municipio Tecka",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Tecka",
            "id": "260105",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000354816704008665
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -43.5131646424293,
                "lon": -70.830328287139
            }
        },
        {
            "nombre_completo": "Municipio Rada Tilly",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Rada Tilly",
            "id": "260056",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 8.65220098386579e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -45.9332658147722,
                "lon": -67.5779619867228
            }
        },
        {
            "nombre_completo": "Municipio Trevelín",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Trevelín",
            "id": "260084",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.00546195931886787
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -43.197538543158,
                "lon": -71.4504295400791
            }
        },
        {
            "nombre_completo": "Comuna Rural Dr. Atilio Oscar Viglione",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Dr. Atilio Oscar Viglione",
            "id": "268147",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000310334648371982
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -44.1731028533014,
                "lon": -71.6794040315733
            }
        },
        {
            "nombre_completo": "Municipio Río Mayo",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Río Mayo",
            "id": "260133",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000425794564203897
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -45.700601256226,
                "lon": -70.2675090217992
            }
        },
        {
            "nombre_completo": "Municipio Camarones",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Camarones",
            "id": "260063",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000572681822263719
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -44.7983158105494,
                "lon": -65.7501067941953
            }
        },
        {
            "nombre_completo": "Municipio Abramo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Abramo",
            "id": "420007",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.015314800763415
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.9218412713366,
                "lon": -64.1906632402765
            }
        },
        {
            "nombre_completo": "Municipio Santa Teresa",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Santa Teresa",
            "id": "420343",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00264685666527155
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.5577310761252,
                "lon": -63.5302848624151
            }
        },
        {
            "nombre_completo": "Municipio General Campos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "General Campos",
            "id": "420140",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00410013362728612
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.3995272293204,
                "lon": -63.5266190870235
            }
        },
        {
            "nombre_completo": "Municipio Trenel",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Trenel",
            "id": "420371",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00543968948017255
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.6413010481655,
                "lon": -64.1226949154921
            }
        },
        {
            "nombre_completo": "Municipio Rancul",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Rancul",
            "id": "420308",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0110658158337484
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.1568500131534,
                "lon": -64.8706864412113
            }
        },
        {
            "nombre_completo": "Municipio Coronel Hilario Lagos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Coronel Hilario Lagos",
            "id": "420105",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00189760837484067
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.085024294542,
                "lon": -63.8577976411479
            }
        },
        {
            "nombre_completo": "Municipio Bernardo Larroude",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Bernardo Larroude",
            "id": "420049",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00206474912323805
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.0688510274548,
                "lon": -63.4949611104079
            }
        },
        {
            "nombre_completo": "Municipio Ceballos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Ceballos",
            "id": "420084",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00308031789308352
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.2627176594077,
                "lon": -63.811007312856
            }
        },
        {
            "nombre_completo": "Municipio Intendente Alvear",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Intendente Alvear",
            "id": "420175",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00614713120387381
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.2731377859158,
                "lon": -63.5508311755451
            }
        },
        {
            "nombre_completo": "Comuna Rural Cerro Centinela",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Cerro Centinela",
            "id": "268021",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000217859899004009
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -43.4623262308252,
                "lon": -71.6090756854463
            }
        },
        {
            "nombre_completo": "Comuna Rural Colan Conhué",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Colan Conhué",
            "id": "268063",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000770938870126628
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -43.256967210358,
                "lon": -70.0165928358279
            }
        },
        {
            "nombre_completo": "Comuna Rural Gastre",
            "fuente": "Dirección General de Estadística y Censos",
            "nombre": "Gastre",
            "id": "268035",
            "provincia": {
                "nombre": "Chubut",
                "id": "26",
                "interseccion": 0.000123711491197231
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -42.287175612789,
                "lon": -69.2167735510543
            }
        },
        {
            "nombre_completo": "Municipio Miguel Riglos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Miguel Riglos",
            "id": "420259",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00797188976319412
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.8320346409974,
                "lon": -63.7976877058673
            }
        },
        {
            "nombre_completo": "Municipio Toay",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Toay",
            "id": "420357",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0159560028883008
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.6824756333842,
                "lon": -64.7196040508549
            }
        },
        {
            "nombre_completo": "Municipio Puelén",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Puelén",
            "id": "420287",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0539044859770038
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.1503128326128,
                "lon": -67.6700354194202
            }
        },
        {
            "nombre_completo": "Municipio La Maruja",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Maruja",
            "id": "420210",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00953709670990628
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.6516430074803,
                "lon": -65.003853923457
            }
        },
        {
            "nombre_completo": "Municipio Macachín",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Macachín",
            "id": "420231",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00521544576230793
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.1229550530837,
                "lon": -63.6943937231621
            }
        },
        {
            "nombre_completo": "Municipio Ingeniero Luiggi",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Ingeniero Luiggi",
            "id": "420168",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00743866423667037
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.3868979248351,
                "lon": -64.6342119573138
            }
        },
        {
            "nombre_completo": "Municipio Embajador Martini",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Embajador Martini",
            "id": "420126",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0030645979148607
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.3612111194718,
                "lon": -64.2940729256625
            }
        },
        {
            "nombre_completo": "Municipio Eduardo Castex",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Eduardo Castex",
            "id": "420119",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00703777334809432
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.9371265801401,
                "lon": -64.3296829486188
            }
        },
        {
            "nombre_completo": "Municipio Monte Nievas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Monte Nievas",
            "id": "420266",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00224664597110667
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.8739584862966,
                "lon": -64.1173404843675
            }
        },
        {
            "nombre_completo": "Municipio Quemú Quemú",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Quemú Quemú",
            "id": "420301",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00656430171711153
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.9899232091812,
                "lon": -63.5963423365355
            }
        },
        {
            "nombre_completo": "Municipio Villa Mirasol",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Mirasol",
            "id": "420406",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00345771838745303
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.0084630949925,
                "lon": -63.9307226012966
            }
        },
        {
            "nombre_completo": "Municipio Colonia Barón",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Barón",
            "id": "420091",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00532778277778864
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.2070971406291,
                "lon": -63.8361884288236
            }
        },
        {
            "nombre_completo": "Municipio Winifreda",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Winifreda",
            "id": "420413",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.011743649781508
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.2611820101032,
                "lon": -64.4552441731366
            }
        },
        {
            "nombre_completo": "Municipio Santa Isabel",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Santa Isabel",
            "id": "420329",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0555716302224478
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.4241719901827,
                "lon": -66.6047431635363
            }
        },
        {
            "nombre_completo": "Municipio Telén",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Telén",
            "id": "420350",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0244216816397921
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.51345284609,
                "lon": -65.7900333947797
            }
        },
        {
            "nombre_completo": "Municipio Ataliva Roca",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Ataliva Roca",
            "id": "420042",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0162133116372687
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.9558969256195,
                "lon": -64.379368160951
            }
        },
        {
            "nombre_completo": "Municipio Alpachiri",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Alpachiri",
            "id": "420014",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00763234646698912
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.3878939429661,
                "lon": -63.8366890133505
            }
        },
        {
            "nombre_completo": "Municipio Bernasconi",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Bernasconi",
            "id": "420056",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0185886876263101
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.1726373832168,
                "lon": -64.0988711483355
            }
        },
        {
            "nombre_completo": "Municipio Victorica",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Victorica",
            "id": "420399",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0135473990221234
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.0952859514657,
                "lon": -65.8441622972006
            }
        },
        {
            "nombre_completo": "Municipio Metileo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Metileo",
            "id": "420245",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00257317974586612
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.8187533133228,
                "lon": -63.9455158938857
            }
        },
        {
            "nombre_completo": "Municipio Uriburu",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Uriburu",
            "id": "420378",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00501134721128182
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.5083737162916,
                "lon": -63.8303238811822
            }
        },
        {
            "nombre_completo": "Municipio Conhelo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Conhelo",
            "id": "420098",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00550082123029695
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.9895788988044,
                "lon": -64.6068637776845
            }
        },
        {
            "nombre_completo": "Municipio General Acha",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "General Acha",
            "id": "420133",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.073792421741448
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.6096833380063,
                "lon": -65.0659942392503
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Unanue",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Unanue",
            "id": "425154",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00774090728347839
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -37.612408582533,
                "lon": -64.364342695767
            }
        },
        {
            "nombre_completo": "Municipio Guatraché",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Guatraché",
            "id": "420161",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00703656822129129
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.6718770730308,
                "lon": -63.6737487898962
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Speluzzi",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Speluzzi",
            "id": "425147",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00189428646735324
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -35.533347282363,
                "lon": -63.8703933569322
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Chacharramendi",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Chacharramendi",
            "id": "425049",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0216184547947742
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -37.2319839948442,
                "lon": -65.704436584826
            }
        },
        {
            "nombre_completo": "Municipio Mina Clavero",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Mina Clavero",
            "id": "141092",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00154040320674827
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6760818624427,
                "lon": -64.914550316223
            }
        },
        {
            "nombre_completo": "Municipio La Adela",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Adela",
            "id": "420189",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.055270585152106
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.7835189351641,
                "lon": -64.1118204002918
            }
        },
        {
            "nombre_completo": "Comisión de Fomento La Reforma",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Reforma",
            "id": "425077",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0181302053569909
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -37.4347070443003,
                "lon": -66.2286938603008
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Limay Mahuida",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Limay Mahuida",
            "id": "425084",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0448308602463185
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -37.1076410505622,
                "lon": -66.6447934382331
            }
        },
        {
            "nombre_completo": "Municipio Alta Italia",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Alta Italia",
            "id": "420021",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00374715724052573
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.3498672141462,
                "lon": -64.0994549558221
            }
        },
        {
            "nombre_completo": "Municipio Anguil",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Anguil",
            "id": "420028",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00592049536288912
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.5543101532231,
                "lon": -64.045242126436
            }
        },
        {
            "nombre_completo": "Municipio Mauricio Mayer",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Mauricio Mayer",
            "id": "420238",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00346918102430071
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.235789641195,
                "lon": -64.0688110278832
            }
        },
        {
            "nombre_completo": "Municipio General San Martín",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "General San Martín",
            "id": "420154",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0159707194937292
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.2823959989124,
                "lon": -63.7483607116489
            }
        },
        {
            "nombre_completo": "Municipio La Humada",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Humada",
            "id": "420196",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0315555748273791
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.3956465607269,
                "lon": -67.9743018865441
            }
        },
        {
            "nombre_completo": "Municipio Doblas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Doblas",
            "id": "420112",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00594684425603076
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -37.1752576653959,
                "lon": -64.0061584536092
            }
        },
        {
            "nombre_completo": "Municipio Parera",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Parera",
            "id": "420273",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00305033814887542
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.1852121657452,
                "lon": -64.4993137537235
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Rucanelo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Rucanelo",
            "id": "425133",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00690003263780978
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -36.0180946638785,
                "lon": -64.8376588340502
            }
        },
        {
            "nombre_completo": "Municipio Caleufú",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Caleufú",
            "id": "420063",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0051338925313021
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.6439826197757,
                "lon": -64.5916676567604
            }
        },
        {
            "nombre_completo": "Municipio General Pico",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "General Pico",
            "id": "420147",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00891946629316367
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.579774285604,
                "lon": -63.6162749709165
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Agustoni",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Agustoni",
            "id": "425014",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00275217857525727
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -35.7927871529689,
                "lon": -63.4827268346081
            }
        },
        {
            "nombre_completo": "Municipio Miguel Cané",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Miguel Cané",
            "id": "420252",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00224548318007082
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -36.1708849475111,
                "lon": -63.5209715100294
            }
        },
        {
            "nombre_completo": "Municipio Puelches",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Puelches",
            "id": "420280",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.0558271764767048
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -38.0312653577147,
                "lon": -66.0568431795002
            }
        },
        {
            "nombre_completo": "Municipio Adelia María",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Adelia María",
            "id": "140763",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.90902933396555e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.6333900311039,
                "lon": -64.018706351216
            }
        },
        {
            "nombre_completo": "Municipio Alcira",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Alcira",
            "id": "140770",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.23826637020107e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.7517122016285,
                "lon": -64.3355358980884
            }
        },
        {
            "nombre_completo": "Municipio Almafuerte",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Almafuerte",
            "id": "141421",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000522399683112227
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.2022805517205,
                "lon": -64.2413981036842
            }
        },
        {
            "nombre_completo": "Municipio Alpa Corral",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Alpa Corral",
            "id": "140777",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.10924442733432e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.682752317234,
                "lon": -64.7275918344128
            }
        },
        {
            "nombre_completo": "Municipio Alto Alegre",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Alto Alegre",
            "id": "141589",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.01357129791901e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.3422198194663,
                "lon": -62.881956428719
            }
        },
        {
            "nombre_completo": "Municipio Realicó",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Realicó",
            "id": "420315",
            "provincia": {
                "nombre": "La Pampa",
                "id": "42",
                "interseccion": 0.00327174351787072
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.1055266288962,
                "lon": -64.2414455593926
            }
        },
        {
            "nombre_completo": "Comuna Amboy",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Amboy",
            "id": "142007",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.89708229652823e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.1764282380889,
                "lon": -64.5750894423153
            }
        },
        {
            "nombre_completo": "Comuna Anisacate",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Anisacate",
            "id": "142987",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000144437739722109
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7138413750519,
                "lon": -64.4044575589392
            }
        },
        {
            "nombre_completo": "Comuna Arroyo los Patos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Arroyo los Patos",
            "id": "142840",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.75644281662145e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7642195618748,
                "lon": -65.0013233421398
            }
        },
        {
            "nombre_completo": "Comuna Aldea Santa María",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Aldea Santa María",
            "id": "143225",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.36098723452909e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.6993242969668,
                "lon": -62.9142238528503
            }
        },
        {
            "nombre_completo": "Municipio Ausonia",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Ausonia",
            "id": "140280",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.38820546132957e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.5890346393292,
                "lon": -63.2473324157256
            }
        },
        {
            "nombre_completo": "Comuna Avellaneda",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Avellaneda",
            "id": "142259",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.48377365179265e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.5973098047243,
                "lon": -64.2284115066381
            }
        },
        {
            "nombre_completo": "Municipio Ballesteros Sud",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Ballesteros Sud",
            "id": "141603",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.83081132376347e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.5887950634732,
                "lon": -63.0250790508917
            }
        },
        {
            "nombre_completo": "Municipio Balnearia",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Balnearia",
            "id": "141183",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.24687159281051e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.0090169258664,
                "lon": -62.6695377581646
            }
        },
        {
            "nombre_completo": "Comuna Bañado de Soto",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Bañado de Soto",
            "id": "142140",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000345734602118466
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.8036031227312,
                "lon": -65.0550301741107
            }
        },
        {
            "nombre_completo": "Municipio Bell Ville",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Bell Ville",
            "id": "141610",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000273573250222912
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.6187289822799,
                "lon": -62.6950392494893
            }
        },
        {
            "nombre_completo": "Municipio Berrotarán",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Berrotarán",
            "id": "140784",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.34210958287311e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.44800784576,
                "lon": -64.3889098621187
            }
        },
        {
            "nombre_completo": "Municipio Alejandro Roca",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Alejandro Roca",
            "id": "140385",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000129293036031576
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.3442762498231,
                "lon": -63.7203299331365
            }
        },
        {
            "nombre_completo": "Municipio Alejo Ledesma",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Alejo Ledesma",
            "id": "140476",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.69731163959233e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.5987357093936,
                "lon": -62.623853511442
            }
        },
        {
            "nombre_completo": "Municipio Alicia",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Alicia",
            "id": "141162",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.66482239511118e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.9393591274177,
                "lon": -62.4655974862229
            }
        },
        {
            "nombre_completo": "Municipio Arroyo Cabral",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Arroyo Cabral",
            "id": "140273",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.66019683445826e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.4891001131456,
                "lon": -63.4014050637081
            }
        },
        {
            "nombre_completo": "Comuna Bouwer",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Bouwer",
            "id": "142994",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000177799314511462
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.549740886705,
                "lon": -64.1791819532722
            }
        },
        {
            "nombre_completo": "Municipio Brinkmann",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Brinkmann",
            "id": "141190",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000101990244772872
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.8738051951416,
                "lon": -62.0382117148241
            }
        },
        {
            "nombre_completo": "Municipio Buchardo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Buchardo",
            "id": "140210",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.0719045692819e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.7236789574212,
                "lon": -63.5073115948871
            }
        },
        {
            "nombre_completo": "Municipio Altos de Chipión",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Altos de Chipión",
            "id": "141169",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.18029491417272e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.9547219317203,
                "lon": -62.3373302112667
            }
        },
        {
            "nombre_completo": "Comuna Ana Zumarán",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Ana Zumarán",
            "id": "143232",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.03238718401952e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.3920332150246,
                "lon": -63.0580417534197
            }
        },
        {
            "nombre_completo": "Municipio Caa Yarí",
            "fuente": "Ministerio de Ecología",
            "nombre": "Caa Yarí",
            "id": "540252",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00314140311454738
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5172025944507,
                "lon": -55.3054526023442
            }
        },
        {
            "nombre_completo": "Comuna Assunta",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Assunta",
            "id": "142308",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.60778323820552e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.6337692253498,
                "lon": -63.2252758695141
            }
        },
        {
            "nombre_completo": "Municipio Bulnes",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Bulnes",
            "id": "140791",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.27112457688404e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.5042811125423,
                "lon": -64.6777003609733
            }
        },
        {
            "nombre_completo": "Municipio Olegario V. Andrade",
            "fuente": "Ministerio de Ecología",
            "nombre": "Olegario V. Andrade",
            "id": "540287",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00378280422444837
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5656210470432,
                "lon": -55.4966789911991
            }
        },
        {
            "nombre_completo": "Comuna Cabalango",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cabalango",
            "id": "142469",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000111261694556819
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.400900660068,
                "lon": -64.5640472582906
            }
        },
        {
            "nombre_completo": "Municipio Calchín",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Calchín",
            "id": "140973",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.31037679320784e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6676543704963,
                "lon": -63.1974210579747
            }
        },
        {
            "nombre_completo": "Municipio Calchín Oeste",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Calchín Oeste",
            "id": "140980",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.83794955618244e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.8626925094345,
                "lon": -63.2781089159471
            }
        },
        {
            "nombre_completo": "Municipio Cerro Azul",
            "fuente": "Ministerio de Ecología",
            "nombre": "Cerro Azul",
            "id": "540259",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00850980252578792
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.6492686317995,
                "lon": -55.5134640126559
            }
        },
        {
            "nombre_completo": "Comuna Calmayo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Calmayo",
            "id": "142014",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000153837488440034
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.0456338882203,
                "lon": -64.4583493455315
            }
        },
        {
            "nombre_completo": "Municipio Camilo Aldao",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Camilo Aldao",
            "id": "140490",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.68278772091674e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.1268229039745,
                "lon": -62.095365317054
            }
        },
        {
            "nombre_completo": "Comuna Caminiaga",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Caminiaga",
            "id": "143120",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000138407183626601
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.0636109406398,
                "lon": -64.015966693721
            }
        },
        {
            "nombre_completo": "Municipio Canals",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Canals",
            "id": "141624",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.31336825210974e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.5586948564453,
                "lon": -62.8811407005032
            }
        },
        {
            "nombre_completo": "Comuna Candelaria Sud",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Candelaria Sud",
            "id": "143169",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.5514491553404e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.8433176604863,
                "lon": -63.8032592447914
            }
        },
        {
            "nombre_completo": "Comuna Capilla de los Remedios",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Capilla de los Remedios",
            "id": "142623",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.03157037251279e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.4269081145413,
                "lon": -63.8203344245728
            }
        },
        {
            "nombre_completo": "Municipio Capilla del Carmen",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Capilla del Carmen",
            "id": "140987",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.49258191922669e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.5078552559627,
                "lon": -63.3412198297322
            }
        },
        {
            "nombre_completo": "Comuna Capilla del Sitón",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Capilla del Sitón",
            "id": "143176",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.6469513176761e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.5721396926692,
                "lon": -63.653161773578
            }
        },
        {
            "nombre_completo": "Municipio Capitán General B. OHiggins",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Capitán General B. OHiggins",
            "id": "140497",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.77581822021488e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.2490438734254,
                "lon": -62.2690389534895
            }
        },
        {
            "nombre_completo": "Municipio Carnerillo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Carnerillo",
            "id": "140399",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.38488129074683e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.9166449024458,
                "lon": -64.0239837960829
            }
        },
        {
            "nombre_completo": "Municipio Carrilobo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Carrilobo",
            "id": "140994",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.22512086690412e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.8688626120995,
                "lon": -63.1151968886878
            }
        },
        {
            "nombre_completo": "Comuna Cañada de Río Pinto",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cañada de Río Pinto",
            "id": "142266",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.2916104676996e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.7405230006184,
                "lon": -64.2526933568927
            }
        },
        {
            "nombre_completo": "Comuna Cerro Colorado",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cerro Colorado",
            "id": "142735",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000212055536618129
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.1019030224683,
                "lon": -63.930831634537
            }
        },
        {
            "nombre_completo": "Municipio Chaján",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Chaján",
            "id": "140798",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.84406119399501e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.5562216707363,
                "lon": -65.0045692987122
            }
        },
        {
            "nombre_completo": "Comuna Chalacea",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Chalacea",
            "id": "142630",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.15742332638497e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.7632052336575,
                "lon": -63.5769184254782
            }
        },
        {
            "nombre_completo": "Comuna Chancaní",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Chancaní",
            "id": "142406",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.46341845549736e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.4141204299092,
                "lon": -65.4541355537761
            }
        },
        {
            "nombre_completo": "Comuna Charbonier",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Charbonier",
            "id": "142483",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.38762955318308e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.7610604781622,
                "lon": -64.5633540903801
            }
        },
        {
            "nombre_completo": "Municipio Chazón",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Chazón",
            "id": "140287",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.05579799013454e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.0779841520433,
                "lon": -63.2744840417554
            }
        },
        {
            "nombre_completo": "Comuna Chañar Viejo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Chañar Viejo",
            "id": "142742",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.74624488561516e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.9924994136235,
                "lon": -63.8514999217488
            }
        },
        {
            "nombre_completo": "Municipio Chilibroste",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Chilibroste",
            "id": "141631",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.02243612299404e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.3326918177426,
                "lon": -62.5134148309413
            }
        },
        {
            "nombre_completo": "Comuna Churqui Cañada",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Churqui Cañada",
            "id": "143204",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.97233769030828e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.2150807804174,
                "lon": -63.938667533284
            }
        },
        {
            "nombre_completo": "Comuna Chuña",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Chuña",
            "id": "142273",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.95662312293303e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.4549727642068,
                "lon": -64.6415044577514
            }
        },
        {
            "nombre_completo": "Comuna Cañada de Machado",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cañada de Machado",
            "id": "142616",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.50565416353281e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.4291231437251,
                "lon": -63.5869750076907
            }
        },
        {
            "nombre_completo": "Comuna Cañada del Sauce",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cañada del Sauce",
            "id": "142021",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000131276033491375
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.3827196464223,
                "lon": -64.6369274751008
            }
        },
        {
            "nombre_completo": "Comuna Chuña Huasi",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Chuña Huasi",
            "id": "143127",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.8440707448953e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.8939402837581,
                "lon": -64.1260864027201
            }
        },
        {
            "nombre_completo": "Comuna Ciénaga del Coro",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Ciénaga del Coro",
            "id": "142357",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00160220478655093
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0053157543172,
                "lon": -65.2173529646248
            }
        },
        {
            "nombre_completo": "Comuna Chucul",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Chucul",
            "id": "142553",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.8104316311336e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.0108482213758,
                "lon": -64.1704416685286
            }
        },
        {
            "nombre_completo": "Municipio Colonia Caroya",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Caroya",
            "id": "140091",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00110732311528213
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.0541541597821,
                "lon": -64.0859537870841
            }
        },
        {
            "nombre_completo": "Municipio Colonia Prosperidad",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Prosperidad",
            "id": "141204",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.59433548589618e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6255205424057,
                "lon": -62.3816472058384
            }
        },
        {
            "nombre_completo": "Comuna Comechingones",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Comechingones",
            "id": "142644",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.26560219957873e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1716888632059,
                "lon": -63.6066406773798
            }
        },
        {
            "nombre_completo": "Municipio Cintra",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cintra",
            "id": "141638",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.8699006958906e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.3087285653744,
                "lon": -62.6517297624238
            }
        },
        {
            "nombre_completo": "Municipio Colonia Almada",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Almada",
            "id": "141428",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.03184554735979e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.0344936485779,
                "lon": -63.8637834613237
            }
        },
        {
            "nombre_completo": "Comuna Colonia Anita",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Anita",
            "id": "142931",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.63254361136251e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1210986173448,
                "lon": -62.2342507930804
            }
        },
        {
            "nombre_completo": "Comuna Colonia Barge",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Barge",
            "id": "142336",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.05282029424742e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.2560592578889,
                "lon": -62.6074772843903
            }
        },
        {
            "nombre_completo": "Municipio Colonia Bismarck",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Bismarck",
            "id": "141645",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.0836524457969e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.3005078918635,
                "lon": -62.7159959455752
            }
        },
        {
            "nombre_completo": "Comuna Colonia Valtelina",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Valtelina",
            "id": "142959",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.16153927701536e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0524082685551,
                "lon": -62.2339804279145
            }
        },
        {
            "nombre_completo": "Comuna Colonia Vicente Agüero",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Vicente Agüero",
            "id": "142098",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000245406688456218
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0166675793953,
                "lon": -64.001954509175
            }
        },
        {
            "nombre_completo": "Municipio Colonia Vignaud",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Colonia Vignaud",
            "id": "141218",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.01391639190965e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.8424347299693,
                "lon": -61.9554557644487
            }
        },
        {
            "nombre_completo": "Comuna Conlara",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Conlara",
            "id": "142889",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000331337541480329
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.0781856148427,
                "lon": -65.2552002582022
            }
        },
        {
            "nombre_completo": "Comuna Copacabana",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Copacabana",
            "id": "142280",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.13185785255956e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.6442603235698,
                "lon": -64.5015919158185
            }
        },
        {
            "nombre_completo": "Municipio Coronel Moldes",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Coronel Moldes",
            "id": "140812",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.39289977833155e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.6213761643601,
                "lon": -64.5957374156971
            }
        },
        {
            "nombre_completo": "Municipio Corralito",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Corralito",
            "id": "141435",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.50956111899605e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.0255900678864,
                "lon": -64.1871324165762
            }
        },
        {
            "nombre_completo": "Municipio Cruz Alta",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cruz Alta",
            "id": "140525",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.7518604553193e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.0062840802659,
                "lon": -61.8111079222229
            }
        },
        {
            "nombre_completo": "Comuna Cruz de Caña",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cruz de Caña",
            "id": "142147",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.11592048097623e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0828883237064,
                "lon": -64.9475909508308
            }
        },
        {
            "nombre_completo": "Municipio Coronel Baigorria",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Coronel Baigorria",
            "id": "140805",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.65851537113827e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.8535584171106,
                "lon": -64.3679739325012
            }
        },
        {
            "nombre_completo": "Municipio Corral de Bustos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Corral de Bustos",
            "id": "140518",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.68565240056636e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.279888011005,
                "lon": -62.1962096731034
            }
        },
        {
            "nombre_completo": "Comuna Cuesta Blanca",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cuesta Blanca",
            "id": "142490",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.38520343677138e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.485021397287,
                "lon": -64.5984326274193
            }
        },
        {
            "nombre_completo": "Municipio Despeñaderos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Despeñaderos",
            "id": "141379",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000431621823395805
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.8023733963541,
                "lon": -64.3037279335541
            }
        },
        {
            "nombre_completo": "Municipio Devoto",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Devoto",
            "id": "141225",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.92628515318644e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4054517995146,
                "lon": -62.304879233785
            }
        },
        {
            "nombre_completo": "Comuna Diego de Rojas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Diego de Rojas",
            "id": "142651",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.08278147853887e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0276086920172,
                "lon": -63.3412514576711
            }
        },
        {
            "nombre_completo": "Comuna Dique Chico",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Dique Chico",
            "id": "143001",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000287412987467187
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7181315346149,
                "lon": -64.3531607957159
            }
        },
        {
            "nombre_completo": "Municipio Cruz del Eje",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Cruz del Eje",
            "id": "140182",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000300208319558714
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.7457001539119,
                "lon": -64.7749805365374
            }
        },
        {
            "nombre_completo": "Municipio El Arañado",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "El Arañado",
            "id": "141232",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.10434961318866e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.7420994285225,
                "lon": -62.8946381603767
            }
        },
        {
            "nombre_completo": "Municipio Dalmacio Vélez",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Dalmacio Vélez",
            "id": "141442",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.33018931752012e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.6124531244939,
                "lon": -63.5838307311574
            }
        },
        {
            "nombre_completo": "Municipio Deán Funes",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Deán Funes",
            "id": "140371",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.96514871495801e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.4227482302615,
                "lon": -64.3546756378304
            }
        },
        {
            "nombre_completo": "Comuna El Manzano",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "El Manzano",
            "id": "142105",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000235370743246011
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0820615291112,
                "lon": -64.3382836028946
            }
        },
        {
            "nombre_completo": "Comuna El Brete",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "El Brete",
            "id": "142154",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000268739365208686
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.656276826198,
                "lon": -64.8798435891844
            }
        },
        {
            "nombre_completo": "Municipio El Tío",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "El Tío",
            "id": "141246",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.7004053021406e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.3889356919298,
                "lon": -62.8225806131392
            }
        },
        {
            "nombre_completo": "Comuna Esquina",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Esquina",
            "id": "142665",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.87880411719589e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0965547596048,
                "lon": -63.778770682649
            }
        },
        {
            "nombre_completo": "Municipio Elena",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Elena",
            "id": "140819",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.51271095203056e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.5699065743136,
                "lon": -64.3939492510855
            }
        },
        {
            "nombre_completo": "Comuna Estación General Paz",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Estación General Paz",
            "id": "142112",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000670065836802304
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1228499839105,
                "lon": -64.1473438921363
            }
        },
        {
            "nombre_completo": "Municipio Estación Juárez Celman",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Estación Juárez Celman",
            "id": "140105",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00077627756587078
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.2437846823994,
                "lon": -64.1793986490354
            }
        },
        {
            "nombre_completo": "Comuna Estancia Vieja",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Estancia Vieja",
            "id": "142497",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.47827078679955e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3861392102136,
                "lon": -64.5263514335073
            }
        },
        {
            "nombre_completo": "Comuna Eufrasio Loza",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Eufrasio Loza",
            "id": "142749",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.96350218852289e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.9249635677759,
                "lon": -63.5895362222016
            }
        },
        {
            "nombre_completo": "Comuna Falda del Carmen",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Falda del Carmen",
            "id": "143008",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000585270080709117
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5761981297038,
                "lon": -64.4824020120422
            }
        },
        {
            "nombre_completo": "Municipio General Baldissera",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "General Baldissera",
            "id": "140532",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.5476912865475e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.1235893332124,
                "lon": -62.3006086559546
            }
        },
        {
            "nombre_completo": "Comuna Guanaco Muerto",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Guanaco Muerto",
            "id": "142161",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000288890459768491
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.4602024394053,
                "lon": -65.0659885088886
            }
        },
        {
            "nombre_completo": "Municipio James Craik",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "James Craik",
            "id": "141456",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.23761906067108e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.1653801707883,
                "lon": -63.461439214356
            }
        },
        {
            "nombre_completo": "Municipio General Roca",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "General Roca",
            "id": "140539",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.91860027373931e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.7275119390043,
                "lon": -61.9145008159753
            }
        },
        {
            "nombre_completo": "Municipio Hernando",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Hernando",
            "id": "141449",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.29970499024119e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.4298361512602,
                "lon": -63.731976625652
            }
        },
        {
            "nombre_completo": "Municipio Huanchilla",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Huanchilla",
            "id": "140427",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.63700976018423e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.6666603550782,
                "lon": -63.6351900273338
            }
        },
        {
            "nombre_completo": "Municipio Isla Verde",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Isla Verde",
            "id": "140560",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.51918053439594e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.2384139982863,
                "lon": -62.4029816960788
            }
        },
        {
            "nombre_completo": "Comuna Gütemberg",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Gütemberg",
            "id": "142756",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.79101385390582e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.703741548894,
                "lon": -63.5504574858833
            }
        },
        {
            "nombre_completo": "Municipio Jovita",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Jovita",
            "id": "140238",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.29091570565615e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.5175313443449,
                "lon": -63.9431016058546
            }
        },
        {
            "nombre_completo": "Municipio Justiniano Posse",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Justiniano Posse",
            "id": "141659",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.89628876271902e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.885115618459,
                "lon": -62.6803137738942
            }
        },
        {
            "nombre_completo": "Comuna Kilómetro 658",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Kilómetro 658",
            "id": "142672",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.07605963728133e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3696370548369,
                "lon": -63.5309336677359
            }
        },
        {
            "nombre_completo": "Comuna La Batea",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Batea",
            "id": "142168",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000166661014871578
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.4282384273219,
                "lon": -65.2680800032816
            }
        },
        {
            "nombre_completo": "Municipio Inriville",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Inriville",
            "id": "140553",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.29706917098338e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.9444827064459,
                "lon": -62.2232305915593
            }
        },
        {
            "nombre_completo": "Municipio Italó",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Italó",
            "id": "140231",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.87118180018708e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.7873745654291,
                "lon": -63.7809993095979
            }
        },
        {
            "nombre_completo": "Municipio General J. J. Urquiza",
            "fuente": "Ministerio de Ecología",
            "nombre": "General J. J. Urquiza",
            "id": "540434",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00434398672706409
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.0500317841879,
                "lon": -55.3936187774799
            }
        },
        {
            "nombre_completo": "Municipio La Calera",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Calera",
            "id": "140119",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000520008780364991
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.3267269836109,
                "lon": -64.3737475437181
            }
        },
        {
            "nombre_completo": "Municipio La Carlota",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Carlota",
            "id": "140434",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000193000561409779
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.4137059352071,
                "lon": -63.2963774632446
            }
        },
        {
            "nombre_completo": "Comuna La Carolina \"El Potosi\"",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Carolina \"El Potosi\"",
            "id": "142560",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.97719770058357e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.1890811194128,
                "lon": -64.7267491840149
            }
        },
        {
            "nombre_completo": "Municipio Los Helechos",
            "fuente": "Ministerio de Ecología",
            "nombre": "Los Helechos",
            "id": "540392",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00514222913452144
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5706570338854,
                "lon": -55.0593874576337
            }
        },
        {
            "nombre_completo": "Municipio La Cruz",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Cruz",
            "id": "140014",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000944615362273608
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.3103751578826,
                "lon": -64.4805613408482
            }
        },
        {
            "nombre_completo": "Comuna Villa Parque Siquiman",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Parque Siquiman",
            "id": "142532",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.69946220949477e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3521525399098,
                "lon": -64.4926944882209
            }
        },
        {
            "nombre_completo": "Municipio La Cumbre",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Cumbre",
            "id": "140693",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.0004064815236276
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.974262164548,
                "lon": -64.5043560850964
            }
        },
        {
            "nombre_completo": "Comuna La Cumbrecita",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Cumbrecita",
            "id": "143015",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000320103735028177
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8983867615394,
                "lon": -64.7864838705701
            }
        },
        {
            "nombre_completo": "Municipio La Falda",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Falda",
            "id": "140700",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000240281102186867
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.1037750919779,
                "lon": -64.5246847485322
            }
        },
        {
            "nombre_completo": "Comuna La Higuera",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Higuera",
            "id": "142175",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.22526972246538e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0154711503327,
                "lon": -65.1033033166762
            }
        },
        {
            "nombre_completo": "Municipio La Laguna",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Laguna",
            "id": "140301",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.03845920114216e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.8019955201198,
                "lon": -63.2462465865663
            }
        },
        {
            "nombre_completo": "Municipio Córdoba",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Córdoba",
            "id": "140077",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00345160084177375
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4170520000063,
                "lon": -64.1832233457647
            }
        },
        {
            "nombre_completo": "Comuna La Paisanita",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Paisanita",
            "id": "143022",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00021062461863817
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6984186695999,
                "lon": -64.4786608714555
            }
        },
        {
            "nombre_completo": "Municipio La Palestina",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Palestina",
            "id": "140308",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.94900056866446e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.6146851668886,
                "lon": -63.4099507025161
            }
        },
        {
            "nombre_completo": "Municipio La Para",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Para",
            "id": "140903",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.89372598105177e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.8971059716298,
                "lon": -62.9963436299142
            }
        },
        {
            "nombre_completo": "Municipio La Paz",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Paz",
            "id": "141127",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00126879803799602
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.2557108768274,
                "lon": -65.0934018857064
            }
        },
        {
            "nombre_completo": "Comuna La Playa",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Playa",
            "id": "142385",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000496262229570996
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.949151048657,
                "lon": -65.3481568256985
            }
        },
        {
            "nombre_completo": "Municipio La Playosa",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Playosa",
            "id": "140315",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.60608501754727e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.0989683198623,
                "lon": -63.0325027208143
            }
        },
        {
            "nombre_completo": "Municipio La Puerta",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Puerta",
            "id": "140910",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.89187197161306e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.8889405990295,
                "lon": -63.2544937671195
            }
        },
        {
            "nombre_completo": "Comuna La Quinta",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Quinta",
            "id": "142686",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.99696508984304e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.0758714912754,
                "lon": -63.1503504553572
            }
        },
        {
            "nombre_completo": "Comuna La Serranita",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "La Serranita",
            "id": "143036",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.30237832145343e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7411366811169,
                "lon": -64.4617824313022
            }
        },
        {
            "nombre_completo": "Comuna Las Albahacas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Albahacas",
            "id": "142567",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.41671312031965e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.8970347535301,
                "lon": -64.8169079716602
            }
        },
        {
            "nombre_completo": "Municipio Las Arrias",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Arrias",
            "id": "141547",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.61995000066975e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.3900762225366,
                "lon": -63.5849095072049
            }
        },
        {
            "nombre_completo": "Comuna Las Bajadas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Bajadas",
            "id": "142028",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.74322968224228e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.0921713040564,
                "lon": -64.3402635611922
            }
        },
        {
            "nombre_completo": "Comuna Las Caleras",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Caleras",
            "id": "142035",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000383044023513708
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.4017331649058,
                "lon": -64.5188920061475
            }
        },
        {
            "nombre_completo": "Comuna Las Calles",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Calles",
            "id": "142847",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000276899247331871
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8359492924172,
                "lon": -64.9288940967688
            }
        },
        {
            "nombre_completo": "Comuna Las Cañadas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Cañadas",
            "id": "142182",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000181412354996578
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.9742278112505,
                "lon": -64.7644259351544
            }
        },
        {
            "nombre_completo": "Comuna Las Gramillas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Gramillas",
            "id": "142693",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.24339598488338e-07
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.136159229424,
                "lon": -63.266471175762
            }
        },
        {
            "nombre_completo": "Comuna Las Palmas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Palmas",
            "id": "142413",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.38241946333281e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3748540741686,
                "lon": -65.3329790750063
            }
        },
        {
            "nombre_completo": "Municipio Las Perdices",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Perdices",
            "id": "141463",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.6281440101185e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.698989840824,
                "lon": -63.7067140965955
            }
        },
        {
            "nombre_completo": "Municipio Las Peñas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Peñas",
            "id": "141519",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.45737279947593e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.5554859462905,
                "lon": -64.0024875130835
            }
        },
        {
            "nombre_completo": "Comuna Las Peñas Sud",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Peñas Sud",
            "id": "142574",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.45503521173781e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.5334055082122,
                "lon": -64.1083139877237
            }
        },
        {
            "nombre_completo": "Comuna Las Playas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Playas",
            "id": "142189",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000111435170703033
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.7125399415491,
                "lon": -64.8512005429178
            }
        },
        {
            "nombre_completo": "Municipio Las Varas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Varas",
            "id": "141281",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.73637245961791e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.8037220327542,
                "lon": -62.6189189981065
            }
        },
        {
            "nombre_completo": "Comuna Las Rabonas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Rabonas",
            "id": "142854",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000185691618174826
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8709623753909,
                "lon": -64.9489427851813
            }
        },
        {
            "nombre_completo": "Comuna Las Saladas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Saladas",
            "id": "142700",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.01696321840542e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.7601509435353,
                "lon": -63.2043193813076
            }
        },
        {
            "nombre_completo": "Comuna Las Tapias",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Tapias",
            "id": "142903",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000262295366266538
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.9439409128127,
                "lon": -65.1083345433486
            }
        },
        {
            "nombre_completo": "Municipio Las Varillas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Las Varillas",
            "id": "141288",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000197955423606687
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.8753386744317,
                "lon": -62.7085088077584
            }
        },
        {
            "nombre_completo": "Municipio Leones",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Leones",
            "id": "140567",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.91194906901936e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.6533880566012,
                "lon": -62.2977757843412
            }
        },
        {
            "nombre_completo": "Comuna Los Cedros",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Cedros",
            "id": "143043",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.78292878708697e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5311757876478,
                "lon": -64.2883373164957
            }
        },
        {
            "nombre_completo": "Comuna Los Chañaritos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Chañaritos",
            "id": "142819",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000229248039592217
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.5735504195722,
                "lon": -64.9612218742981
            }
        },
        {
            "nombre_completo": "Municipio Los Cisnes",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Cisnes",
            "id": "140441",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.48197093877023e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.3762768113126,
                "lon": -63.4708798480832
            }
        },
        {
            "nombre_completo": "Comuna Los Hoyos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Hoyos",
            "id": "142770",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.23513461045804e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.7848497549882,
                "lon": -63.6266756739874
            }
        },
        {
            "nombre_completo": "Comuna Los Molinos",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Molinos",
            "id": "142042",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.12650363203004e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8565529914794,
                "lon": -64.3791077708501
            }
        },
        {
            "nombre_completo": "Municipio Los Surgentes",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Surgentes",
            "id": "140574",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.85875388189356e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.9743449135051,
                "lon": -62.0146845594701
            }
        },
        {
            "nombre_completo": "Comuna Lutti",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Lutti",
            "id": "142056",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00164447285322836
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.3065734326664,
                "lon": -64.7377888610421
            }
        },
        {
            "nombre_completo": "Municipio Mojón Grande",
            "fuente": "Ministerio de Ecología",
            "nombre": "Mojón Grande",
            "id": "540490",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00480947154243518
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.7257081241474,
                "lon": -55.1202260917369
            }
        },
        {
            "nombre_completo": "Municipio Luca",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Luca",
            "id": "140322",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.05534980034194e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.5401247632302,
                "lon": -63.4773914681508
            }
        },
        {
            "nombre_completo": "Municipio Gral. Alvear",
            "fuente": "Ministerio de Ecología",
            "nombre": "Gral. Alvear",
            "id": "540378",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00277738339528158
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4190588795896,
                "lon": -55.1800539155609
            }
        },
        {
            "nombre_completo": "Comuna Los Reartes",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Reartes",
            "id": "142049",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000262099713171751
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.9153125304694,
                "lon": -64.5898352613713
            }
        },
        {
            "nombre_completo": "Municipio Lozada",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Lozada",
            "id": "141386",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.15379698633072e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6546099199271,
                "lon": -64.093711769734
            }
        },
        {
            "nombre_completo": "Municipio Malagueño",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Malagueño",
            "id": "141393",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00145792831810389
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4598780400586,
                "lon": -64.396789360534
            }
        },
        {
            "nombre_completo": "Municipio Malvinas Argentinas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Malvinas Argentinas",
            "id": "140133",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000591884830185394
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.3908457182217,
                "lon": -64.0104566694891
            }
        },
        {
            "nombre_completo": "Municipio Marcos Juárez",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Marcos Juárez",
            "id": "140581",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000261444754482759
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.6834634699151,
                "lon": -62.1053184551732
            }
        },
        {
            "nombre_completo": "Municipio Mattaldi",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Mattaldi",
            "id": "140245",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.3177515621363e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.4853031976435,
                "lon": -64.1779147615068
            }
        },
        {
            "nombre_completo": "Comuna Mayu Sumaj",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Mayu Sumaj",
            "id": "142504",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.73593614464768e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.4660174565973,
                "lon": -64.549632214915
            }
        },
        {
            "nombre_completo": "Comuna Media Naranja",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Media Naranja",
            "id": "142203",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000174298670002517
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.6312650658571,
                "lon": -64.9392510631274
            }
        },
        {
            "nombre_completo": "Municipio Mendiolaza",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Mendiolaza",
            "id": "140140",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000101154825880016
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.2585432498765,
                "lon": -64.2848467061892
            }
        },
        {
            "nombre_completo": "Municipio Miramar",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Miramar",
            "id": "141302",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.76390530038745e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.9171637587504,
                "lon": -62.6691619837422
            }
        },
        {
            "nombre_completo": "Municipio Monte Buey",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Monte Buey",
            "id": "140588",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.3144255971924e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.9169889907274,
                "lon": -62.4531499125634
            }
        },
        {
            "nombre_completo": "Municipio Monte Cristo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Monte Cristo",
            "id": "140917",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00093549562480512
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.3145501675443,
                "lon": -63.9009959981404
            }
        },
        {
            "nombre_completo": "Municipio Monte Leña",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Monte Leña",
            "id": "141673",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.62311713480668e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.6073407618879,
                "lon": -62.5887953092074
            }
        },
        {
            "nombre_completo": "Municipio Monte Maíz",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Monte Maíz",
            "id": "141680",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.34733021423885e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.2059969112394,
                "lon": -62.6035104209721
            }
        },
        {
            "nombre_completo": "Municipio Monte Ralo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Monte Ralo",
            "id": "141400",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.88873520938638e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.9160854413818,
                "lon": -64.2355903371877
            }
        },
        {
            "nombre_completo": "Municipio Morrison",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Morrison",
            "id": "141687",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.72485926486854e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.592916342672,
                "lon": -62.8337927569311
            }
        },
        {
            "nombre_completo": "Municipio Morteros",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Morteros",
            "id": "141309",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000292833166265247
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.7117689159368,
                "lon": -62.0091537289313
            }
        },
        {
            "nombre_completo": "Municipio Noetinger",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Noetinger",
            "id": "141694",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.69877759809131e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.3608072067664,
                "lon": -62.3132776257758
            }
        },
        {
            "nombre_completo": "Municipio Obispo Trejo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Obispo Trejo",
            "id": "140924",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.93650712856123e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.7769384027746,
                "lon": -63.4166185018715
            }
        },
        {
            "nombre_completo": "Municipio Olaeta",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Olaeta",
            "id": "140448",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.51053132690889e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.0441850270044,
                "lon": -63.9100511143704
            }
        },
        {
            "nombre_completo": "Municipio Oliva",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Oliva",
            "id": "141477",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.52221215350612e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.0485978880871,
                "lon": -63.5570228461854
            }
        },
        {
            "nombre_completo": "Comuna Olivares de San Nicolás",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Olivares de San Nicolás",
            "id": "142294",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.56574763229567e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.5460582548383,
                "lon": -64.8787665881544
            }
        },
        {
            "nombre_completo": "Comuna Onagoity",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Onagoity",
            "id": "142231",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.70278770832235e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.7699095275567,
                "lon": -63.6717128404408
            }
        },
        {
            "nombre_completo": "Municipio Oncativo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Oncativo",
            "id": "141050",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000117522271478852
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.9151263882847,
                "lon": -63.6760024082064
            }
        },
        {
            "nombre_completo": "Municipio Ordóñez",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Ordóñez",
            "id": "141701",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.33423602438442e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.8406260509866,
                "lon": -62.864507904134
            }
        },
        {
            "nombre_completo": "Municipio Pasco",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Pasco",
            "id": "140329",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.68753918124178e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.7453423023259,
                "lon": -63.3402135333334
            }
        },
        {
            "nombre_completo": "Comuna Paso Viejo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Paso Viejo",
            "id": "142210",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.58275566677564e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.7663464619765,
                "lon": -65.1910942537931
            }
        },
        {
            "nombre_completo": "Comuna Pincen",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Pincen",
            "id": "142238",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.38834489322739e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -34.8383140184064,
                "lon": -63.9175546184509
            }
        },
        {
            "nombre_completo": "Municipio Pampayasta Sud",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Pampayasta Sud",
            "id": "141484",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.20220347983427e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.2615771632819,
                "lon": -63.6532371104857
            }
        },
        {
            "nombre_completo": "Municipio Pascanas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Pascanas",
            "id": "141708",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.23801447091169e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.1262394371826,
                "lon": -63.0411760442872
            }
        },
        {
            "nombre_completo": "Municipio Piquillín",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Piquillín",
            "id": "140931",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.93336080053154e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.3014822797673,
                "lon": -63.7592227132231
            }
        },
        {
            "nombre_completo": "Comuna Plaza Luxardo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Plaza Luxardo",
            "id": "142966",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.01861324414005e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3075262309917,
                "lon": -62.1458650159189
            }
        },
        {
            "nombre_completo": "Municipio Porteña",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Porteña",
            "id": "141316",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000110608286523557
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.9889513794182,
                "lon": -62.063204317245
            }
        },
        {
            "nombre_completo": "Comuna Pozo Nuevo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Pozo Nuevo",
            "id": "143134",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.86766905015658e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -29.5752928863074,
                "lon": -64.1248945764177
            }
        },
        {
            "nombre_completo": "Comuna Puesto de Castro",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Puesto de Castro",
            "id": "142777",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.46840954513963e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.1936676598579,
                "lon": -63.4025697720489
            }
        },
        {
            "nombre_completo": "Comuna Punta del Agua",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Punta del Agua",
            "id": "143162",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.49705686997754e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.5765144963957,
                "lon": -63.8111899638921
            }
        },
        {
            "nombre_completo": "Municipio Quebracho Herrado",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Quebracho Herrado",
            "id": "141323",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.25247795834064e-06
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.5498828557019,
                "lon": -62.2270479672393
            }
        },
        {
            "nombre_completo": "Municipio Quilino",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Quilino",
            "id": "140378",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.15664899695831e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.2204887977382,
                "lon": -64.477822148941
            }
        },
        {
            "nombre_completo": "Comuna Rafael García",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Rafael García",
            "id": "143057",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.75355030992355e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6484813084361,
                "lon": -64.2614633616075
            }
        },
        {
            "nombre_completo": "Municipio Reducción",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Reducción",
            "id": "140455",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.6555878211585e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.2028095475754,
                "lon": -63.8627303675096
            }
        },
        {
            "nombre_completo": "Comuna Rincón",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Rincón",
            "id": "142826",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.77452447155622e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5941777031772,
                "lon": -63.6262147970324
            }
        },
        {
            "nombre_completo": "Municipio Río Cuarto",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Río Cuarto",
            "id": "140861",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00159666321951608
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.115558002371,
                "lon": -64.3570883812807
            }
        },
        {
            "nombre_completo": "Municipio Río Primero",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Río Primero",
            "id": "140938",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.75361643489833e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.3296360408912,
                "lon": -63.6234759919454
            }
        },
        {
            "nombre_completo": "Municipio Río Segundo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Río Segundo",
            "id": "141071",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000213041293284203
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6440157915068,
                "lon": -63.9009945616551
            }
        },
        {
            "nombre_completo": "Municipio Río Tercero",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Río Tercero",
            "id": "141491",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00171560625629326
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.1683934801302,
                "lon": -64.1027089402001
            }
        },
        {
            "nombre_completo": "Municipio Sacanta",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Sacanta",
            "id": "141330",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.5872841683642e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.6643044904367,
                "lon": -63.0467526560951
            }
        },
        {
            "nombre_completo": "Municipio Saira",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Saira",
            "id": "140595",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.04310040400766e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.4083063626491,
                "lon": -62.1010565233928
            }
        },
        {
            "nombre_completo": "Comuna Saladillo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Saladillo",
            "id": "142343",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.47421726279919e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.9330379413915,
                "lon": -62.3430346300725
            }
        },
        {
            "nombre_completo": "Municipio Saldán",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Saldán",
            "id": "140154",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.37043197581248e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.3147407774699,
                "lon": -64.3108946086379
            }
        },
        {
            "nombre_completo": "Municipio Salsacate",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Salsacate",
            "id": "140609",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00158087917596909
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.339376670938,
                "lon": -65.1282172380766
            }
        },
        {
            "nombre_completo": "Municipio San Javier",
            "fuente": "Ministerio de Ecología",
            "nombre": "San Javier",
            "id": "540497",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00607218298868682
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.8093657596003,
                "lon": -55.1540444936225
            }
        },
        {
            "nombre_completo": "Municipio Salsipuedes",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Salsipuedes",
            "id": "140161",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000836104374024837
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.1248166533766,
                "lon": -64.3006220022838
            }
        },
        {
            "nombre_completo": "Municipio Sampacho",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Sampacho",
            "id": "140868",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00015158479768756
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.3725117758152,
                "lon": -64.7081087013992
            }
        },
        {
            "nombre_completo": "Municipio San Agustín",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Agustín",
            "id": "140056",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000961123535591563
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.9727259844158,
                "lon": -64.3764401661818
            }
        },
        {
            "nombre_completo": "Comuna San Antonio de Arredondo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Antonio de Arredondo",
            "id": "142511",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000247541847293122
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5250380100716,
                "lon": -64.544108451202
            }
        },
        {
            "nombre_completo": "Municipio San Basilio",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Basilio",
            "id": "140875",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.38110789383271e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.4975395266719,
                "lon": -64.3154562518364
            }
        },
        {
            "nombre_completo": "Municipio San Carlos Minas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Carlos Minas",
            "id": "140602",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000164405340384985
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.1637575067469,
                "lon": -65.0830995258615
            }
        },
        {
            "nombre_completo": "Comuna San Clemente",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Clemente",
            "id": "143064",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000333247081089524
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7222791862549,
                "lon": -64.6344801875431
            }
        },
        {
            "nombre_completo": "Municipio San Francisco",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Francisco",
            "id": "141337",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00051565357923052
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4291183141885,
                "lon": -62.1082677652083
            }
        },
        {
            "nombre_completo": "Municipio San Francisco del Chañar",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Francisco del Chañar",
            "id": "141414",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000809314437562065
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.8335821929536,
                "lon": -63.9388834433132
            }
        },
        {
            "nombre_completo": "Comuna San Gerónimo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Gerónimo",
            "id": "142427",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.79527257540054e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3559936708057,
                "lon": -64.92941454369
            }
        },
        {
            "nombre_completo": "Comuna San Ignacio",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Ignacio",
            "id": "142063",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000374322687301497
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.1516825639597,
                "lon": -64.5469099126919
            }
        },
        {
            "nombre_completo": "Municipio San José",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San José",
            "id": "141141",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000574415000094803
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.9806239572522,
                "lon": -65.3167014254429
            }
        },
        {
            "nombre_completo": "Comuna San Lorenzo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Lorenzo",
            "id": "142868",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000304385045377365
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.6586437934172,
                "lon": -65.0051014087656
            }
        },
        {
            "nombre_completo": "Municipio San Marcos Sierras",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Marcos Sierras",
            "id": "140189",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.89619718667526e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.7673188311433,
                "lon": -64.6511803149359
            }
        },
        {
            "nombre_completo": "Municipio San Pedro",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Pedro",
            "id": "141106",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000134191797054932
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.8743510648851,
                "lon": -65.2450584934844
            }
        },
        {
            "nombre_completo": "Comuna San Vicente",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "San Vicente",
            "id": "142875",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00107768436261
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8370903607737,
                "lon": -65.5309219740349
            }
        },
        {
            "nombre_completo": "Comuna Santa Elena",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Santa Elena",
            "id": "142791",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.28833404029523e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.1147826429304,
                "lon": -63.8587957361287
            }
        },
        {
            "nombre_completo": "Municipio Santa Rosa de Calamuchita",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Santa Rosa de Calamuchita",
            "id": "140035",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000637550265868607
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.075302961898,
                "lon": -64.5467001962975
            }
        },
        {
            "nombre_completo": "Comuna Sauce Arriba",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Sauce Arriba",
            "id": "142882",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.49564018059688e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.9111884774186,
                "lon": -65.162547951832
            }
        },
        {
            "nombre_completo": "Municipio Sarmiento",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Sarmiento",
            "id": "141526",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.19198939132827e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.774969440319,
                "lon": -64.11992572457
            }
        },
        {
            "nombre_completo": "Comuna Simbolar",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Simbolar",
            "id": "143197",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.34994220247217e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.4759380124635,
                "lon": -63.9848922540636
            }
        },
        {
            "nombre_completo": "Junta Vecinal Portón Negro",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Portón Negro",
            "id": "349105",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 3.24236774190347e-06
            },
            "categoria": "Junta Vecinal",
            "centroide": {
                "lat": -24.9655172869136,
                "lon": -58.7419037802063
            }
        },
        {
            "nombre_completo": "Municipio Serrezuela",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Serrezuela",
            "id": "140196",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000265484027594926
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.5673524944777,
                "lon": -65.3514532144563
            }
        },
        {
            "nombre_completo": "Municipio Sinsacate",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Sinsacate",
            "id": "141533",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000189607319725136
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.9422713589299,
                "lon": -64.0806973366608
            }
        },
        {
            "nombre_completo": "Comuna Suco",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Suco",
            "id": "142588",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 6.71098668942825e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.4414356242941,
                "lon": -64.8290466867185
            }
        },
        {
            "nombre_completo": "Municipio Tancacha",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Tancacha",
            "id": "141498",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.68140282985207e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.2395132273511,
                "lon": -63.9792575326274
            }
        },
        {
            "nombre_completo": "Municipio Tanti",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Tanti",
            "id": "140728",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000213387850162362
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.3619877805978,
                "lon": -64.5694692159224
            }
        },
        {
            "nombre_completo": "Comuna Tala Cañada",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Tala Cañada",
            "id": "142434",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000512796928645955
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3589576280074,
                "lon": -64.9982605968852
            }
        },
        {
            "nombre_completo": "Comuna Tala Huasi",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Tala Huasi",
            "id": "142525",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.56310121373144e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.4670111937152,
                "lon": -64.57278414827
            }
        },
        {
            "nombre_completo": "Municipio Ticino",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Ticino",
            "id": "140343",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.48015076504775e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.6948787489748,
                "lon": -63.4350474292111
            }
        },
        {
            "nombre_completo": "Municipio Tío Pujio",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Tío Pujio",
            "id": "140350",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.73867946143793e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.2799480172569,
                "lon": -63.35177573013
            }
        },
        {
            "nombre_completo": "Municipio Tosquita",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Tosquita",
            "id": "140889",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.19433161229132e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.8214399062638,
                "lon": -64.4611155218709
            }
        },
        {
            "nombre_completo": "Comuna Tuclame",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Tuclame",
            "id": "142217",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.58894370212647e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.7468404971543,
                "lon": -65.2357340089556
            }
        },
        {
            "nombre_completo": "Comuna Toro Pujio",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Toro Pujio",
            "id": "142973",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.60940628743814e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.1056274024481,
                "lon": -62.9975126154702
            }
        },
        {
            "nombre_completo": "Comuna Tosno",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Tosno",
            "id": "142399",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000747311917450644
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.9455846794062,
                "lon": -65.2828381577686
            }
        },
        {
            "nombre_completo": "Municipio Tránsito",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Tránsito",
            "id": "141358",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.25064000449886e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4313249034113,
                "lon": -63.1947377387049
            }
        },
        {
            "nombre_completo": "Municipio Ucacha",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Ucacha",
            "id": "140469",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.42144993350462e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.0317994602079,
                "lon": -63.507135543766
            }
        },
        {
            "nombre_completo": "Comisión de Fomento Tres Lagunas",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Tres Lagunas",
            "id": "345063",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 1.1924716271142e-05
            },
            "categoria": "Comisión de Fomento",
            "centroide": {
                "lat": -25.2141176287373,
                "lon": -58.5114565747576
            }
        },
        {
            "nombre_completo": "Comuna Valle de Anisacate",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Valle de Anisacate",
            "id": "143071",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.98206001219466e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7350762329001,
                "lon": -64.4192206419266
            }
        },
        {
            "nombre_completo": "Municipio Viamonte",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Viamonte",
            "id": "141736",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.54108345985328e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.7473048096682,
                "lon": -63.0994810512003
            }
        },
        {
            "nombre_completo": "Municipio Vicuña Mackenna",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Vicuña Mackenna",
            "id": "140896",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000121823336200276
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.9288149320525,
                "lon": -64.4072934720761
            }
        },
        {
            "nombre_completo": "Municipio Laguna Yema",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Laguna Yema",
            "id": "340007",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 0.00070081455106248
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -24.2842405514177,
                "lon": -61.2514099326242
            }
        },
        {
            "nombre_completo": "Municipio Unquillo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Unquillo",
            "id": "140168",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000462114503545975
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.2192351356385,
                "lon": -64.3345156620741
            }
        },
        {
            "nombre_completo": "Comuna Villa Amancay",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Amancay",
            "id": "142077",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00023266820072314
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.2182599982267,
                "lon": -64.580560197772
            }
        },
        {
            "nombre_completo": "Comuna Villa Ciudad Parque los Reartes",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Ciudad Parque los Reartes",
            "id": "142084",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000392260585332035
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8897835985433,
                "lon": -64.5215690751297
            }
        },
        {
            "nombre_completo": "Municipio Villa Carlos Paz",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Carlos Paz",
            "id": "140742",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00048320073861293
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.4206918540759,
                "lon": -64.5088844540427
            }
        },
        {
            "nombre_completo": "Comuna Villa Cerro Azul",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Cerro Azul",
            "id": "142126",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.19703830141727e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.071705029281,
                "lon": -64.3300094291551
            }
        },
        {
            "nombre_completo": "Comuna Villa Ciudad de América",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Ciudad de América",
            "id": "143078",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000450434839195137
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.7668626505577,
                "lon": -64.5156567958551
            }
        },
        {
            "nombre_completo": "Municipio Villa Cura Brochero",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Cura Brochero",
            "id": "141113",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.01314109105518e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.709906354572,
                "lon": -65.0155388613377
            }
        },
        {
            "nombre_completo": "Municipio Villa de las Rosas",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa de las Rosas",
            "id": "141148",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000572170050348444
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.939449162597,
                "lon": -65.0365731182786
            }
        },
        {
            "nombre_completo": "Municipio Villa de María",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa de María",
            "id": "140966",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000222691943083959
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -29.8941782214697,
                "lon": -63.7251634049095
            }
        },
        {
            "nombre_completo": "Municipio Villa del Rosario",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa del Rosario",
            "id": "141085",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.61305520663513e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.5570088932439,
                "lon": -63.5340745893101
            }
        },
        {
            "nombre_completo": "Municipio Villa de Soto",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa de Soto",
            "id": "140203",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000150481422195265
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.8690814087168,
                "lon": -65.007397762367
            }
        },
        {
            "nombre_completo": "Municipio Villa del Totoral",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa del Totoral",
            "id": "141540",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 8.05718794723038e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.7095120032809,
                "lon": -64.0569454757473
            }
        },
        {
            "nombre_completo": "Comuna Villa el Chacay",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa el Chacay",
            "id": "142595",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.26654063991961e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.894408635154,
                "lon": -64.8658820184979
            }
        },
        {
            "nombre_completo": "Comuna Villa Elisa",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Elisa",
            "id": "142350",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 9.44113475229926e-07
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.8338792756203,
                "lon": -62.2950011450932
            }
        },
        {
            "nombre_completo": "Municipio Villa Dolores",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Dolores",
            "id": "141155",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000592992486825241
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.9771247818656,
                "lon": -65.2015131268781
            }
        },
        {
            "nombre_completo": "Comuna Villa Gutiérrez",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Gutiérrez",
            "id": "142301",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.21521653104139e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -30.6956206838802,
                "lon": -64.1911110471149
            }
        },
        {
            "nombre_completo": "Comuna Rural Rumipunco",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Rumipunco",
            "id": "908245",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00512281404904389
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.9520642809365,
                "lon": -65.5974718078989
            }
        },
        {
            "nombre_completo": "Municipio Mayor Vicente E. Villafañe",
            "fuente": "Direc. Grl. Catastro (WMS)",
            "nombre": "Mayor Vicente E. Villafañe",
            "id": "340231",
            "provincia": {
                "nombre": "Formosa",
                "id": "34",
                "interseccion": 4.5972304295521e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.2043809484768,
                "lon": -59.0807489037343
            }
        },
        {
            "nombre_completo": "Municipio Villa General Belgrano",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa General Belgrano",
            "id": "140049",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000829993198368252
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.9843739756545,
                "lon": -64.5854153620909
            }
        },
        {
            "nombre_completo": "Municipio Villa Giardino",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Giardino",
            "id": "140749",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000425149711582482
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.040129320429,
                "lon": -64.5134379250387
            }
        },
        {
            "nombre_completo": "Municipio Villa María",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa María",
            "id": "140357",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000530870851120435
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.4031012852999,
                "lon": -63.2366303163216
            }
        },
        {
            "nombre_completo": "Comuna Villa Parque Santa Ana",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Parque Santa Ana",
            "id": "143106",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000230224581248522
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.5902804153487,
                "lon": -64.3471770630551
            }
        },
        {
            "nombre_completo": "Comuna Villa Quillinzo",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Quillinzo",
            "id": "142091",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000154229526196558
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -32.2419722792215,
                "lon": -64.5299853710022
            }
        },
        {
            "nombre_completo": "Comuna Teniente Berdina",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Teniente Berdina",
            "id": "908448",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00133838345784509
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.0211944280671,
                "lon": -65.5164854849446
            }
        },
        {
            "nombre_completo": "Comuna Villa Río Icho Cruz",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Río Icho Cruz",
            "id": "142546",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 5.86566402305991e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.486607973038,
                "lon": -64.5618964195508
            }
        },
        {
            "nombre_completo": "Municipio Comandante A. Guacurary",
            "fuente": "Ministerio de Ecología",
            "nombre": "Comandante A. Guacurary",
            "id": "540182",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0304269893679281
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.7226094659074,
                "lon": -54.011311196757
            }
        },
        {
            "nombre_completo": "Municipio San Antonio",
            "fuente": "Ministerio de Ecología",
            "nombre": "San Antonio",
            "id": "540189",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0334452222972251
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.9963679675545,
                "lon": -53.9385338267045
            }
        },
        {
            "nombre_completo": "Municipio Villa Sarmiento (S. A.)",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Sarmiento (S. A.)",
            "id": "141120",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000290875344442529
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.1500199451459,
                "lon": -64.736285034239
            }
        },
        {
            "nombre_completo": "Municipio Villa Tulumba",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Tulumba",
            "id": "141582",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 3.17242312202004e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -30.3958819067891,
                "lon": -64.1206106410778
            }
        },
        {
            "nombre_completo": "Municipio Villa Rumipal",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Rumipal",
            "id": "140063",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00014188582073348
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.1625608439289,
                "lon": -64.4858600100432
            }
        },
        {
            "nombre_completo": "Comuna Villa Santa Cruz del Lago",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Santa Cruz del Lago",
            "id": "142539",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.33595673673128e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.3705588269763,
                "lon": -64.5104902375029
            }
        },
        {
            "nombre_completo": "Municipio Villa Valeria",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Valeria",
            "id": "140259",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.52459947705971e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.3414551616036,
                "lon": -64.9192025001429
            }
        },
        {
            "nombre_completo": "Municipio Wenceslao Escalante",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Wenceslao Escalante",
            "id": "141743",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 1.33550496344495e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.1716374700178,
                "lon": -62.7704160998211
            }
        },
        {
            "nombre_completo": "Municipio Los Cóndores",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Los Cóndores",
            "id": "140021",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.00154498667948041
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.2941267136032,
                "lon": -64.2631745771009
            }
        },
        {
            "nombre_completo": "Comisión Municipal La Punilla",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "La Punilla",
            "id": "746133",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00113010472986047
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.1261155349737,
                "lon": -65.1122602148508
            }
        },
        {
            "nombre_completo": "Municipio Aristóbulo del Valle",
            "fuente": "Ministerio de Ecología",
            "nombre": "Aristóbulo del Valle",
            "id": "540035",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0197869732836159
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.1247440389736,
                "lon": -54.8269103165253
            }
        },
        {
            "nombre_completo": "Municipio Lujan",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Lujan",
            "id": "740014",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00185517885780326
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.365000181113,
                "lon": -65.9357732042101
            }
        },
        {
            "nombre_completo": "Comuna Choromoro",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Choromoro",
            "id": "908623",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0391047061678975
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.4504412818447,
                "lon": -65.4177004347269
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Trancas",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Trancas",
            "id": "900126",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0344183182405964
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.2728692084183,
                "lon": -65.2498363606302
            }
        },
        {
            "nombre_completo": "Comuna San Pedro de Colalao",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "San Pedro de Colalao",
            "id": "908630",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0457080001940369
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.2419550397552,
                "lon": -65.5297991244422
            }
        },
        {
            "nombre_completo": "Comuna Quilmes y los Sueldos",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Quilmes y los Sueldos",
            "id": "908329",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00244762058621769
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.0764554671978,
                "lon": -65.235358181279
            }
        },
        {
            "nombre_completo": "Comuna Rural Los Gomez",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Los Gomez",
            "id": "908308",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00463819527732002
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.3059495637553,
                "lon": -65.1916387595683
            }
        },
        {
            "nombre_completo": "Comuna Rural Esquina y Mancopa",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Esquina y Mancopa",
            "id": "908287",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00278945915735527
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.0301134156148,
                "lon": -65.1888470221335
            }
        },
        {
            "nombre_completo": "Municipio Santa María",
            "fuente": "Ministerio de Ecología",
            "nombre": "Santa María",
            "id": "540133",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0141777321081025
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.8747754650079,
                "lon": -55.4252777120985
            }
        },
        {
            "nombre_completo": "Municipio Guaraní",
            "fuente": "Ministerio de Ecología",
            "nombre": "Guaraní",
            "id": "540385",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00371139871168218
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5607188356084,
                "lon": -55.1766194604071
            }
        },
        {
            "nombre_completo": "Municipio Quines",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Quines",
            "id": "740021",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00200917262307295
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.2297816443169,
                "lon": -65.813224324661
            }
        },
        {
            "nombre_completo": "Comisión Municipal Las Vertientes",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Las Vertientes",
            "id": "746287",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.0019972543527841
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.7905137799324,
                "lon": -65.7509326074955
            }
        },
        {
            "nombre_completo": "Comisión Municipal Paso Grande",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Paso Grande",
            "id": "746315",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00181655419550466
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.8695786125613,
                "lon": -65.6452060298608
            }
        },
        {
            "nombre_completo": "Municipio San Luis",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "San Luis",
            "id": "740133",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.002728676393134
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.3035158239582,
                "lon": -66.3434777452638
            }
        },
        {
            "nombre_completo": "Comisión Municipal El Trapiche",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "El Trapiche",
            "id": "746042",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00679211750491749
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.0307488782957,
                "lon": -66.061091786955
            }
        },
        {
            "nombre_completo": "Municipio Merlo",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Merlo",
            "id": "740105",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00170170144134849
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.3529400330367,
                "lon": -65.0070214618305
            }
        },
        {
            "nombre_completo": "Municipio Juana Koslay",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Juana Koslay",
            "id": "740119",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00124855131964654
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.2951079835674,
                "lon": -66.2274958520562
            }
        },
        {
            "nombre_completo": "Comisión Municipal Navia",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Navia",
            "id": "746189",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00122355019151044
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -34.7527440852598,
                "lon": -66.5657005724897
            }
        },
        {
            "nombre_completo": "Comisión Municipal Batavia",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Batavia",
            "id": "746168",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.0023657718457636
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -34.7784823489821,
                "lon": -65.6871985106842
            }
        },
        {
            "nombre_completo": "Municipio San José",
            "fuente": "Ministerio de Ecología",
            "nombre": "San José",
            "id": "540021",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0140252466506998
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.7754603717937,
                "lon": -55.6691612915895
            }
        },
        {
            "nombre_completo": "Municipio Villa Mercedes",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Villa Mercedes",
            "id": "740077",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00300920277053024
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.667693601946,
                "lon": -65.4739226474119
            }
        },
        {
            "nombre_completo": "Municipio Ranqueles",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Ranqueles",
            "id": "740073",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00890832336171033
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.5620777515937,
                "lon": -65.9653785506159
            }
        },
        {
            "nombre_completo": "Municipio Candelaria",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Candelaria",
            "id": "740007",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00183178010245585
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.0696433724102,
                "lon": -65.8335092068251
            }
        },
        {
            "nombre_completo": "Comisión Municipal Alto Pelado",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Alto Pelado",
            "id": "746231",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00163778481209215
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.8241276567794,
                "lon": -66.1255415411401
            }
        },
        {
            "nombre_completo": "Comisión Municipal Alto Pencoso",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Alto Pencoso",
            "id": "746238",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00233549733943197
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.4319845531256,
                "lon": -66.9268856281154
            }
        },
        {
            "nombre_completo": "Comisión Municipal Las Aguadas",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Las Aguadas",
            "id": "746294",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00230882202695494
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.3754702752368,
                "lon": -65.5009524526763
            }
        },
        {
            "nombre_completo": "Municipio San Martin",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "San Martin",
            "id": "740140",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00228114412770065
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.4101296285628,
                "lon": -65.6758808215231
            }
        },
        {
            "nombre_completo": "Comisión Municipal V, de Praga",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "V, de Praga",
            "id": "746322",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00217890522292936
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.5330352260902,
                "lon": -65.6438203657219
            }
        },
        {
            "nombre_completo": "Comisión Municipal Villa del Carmen",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Villa del Carmen",
            "id": "746098",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00128507394410549
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.9177881472782,
                "lon": -65.0466107323724
            }
        },
        {
            "nombre_completo": "Comisión Municipal San Pablo",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "San Pablo",
            "id": "746091",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00178769381535772
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.6522518781735,
                "lon": -65.3092306502766
            }
        },
        {
            "nombre_completo": "Comisión Municipal Renca",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Renca",
            "id": "746084",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00190594592419009
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.7777931018667,
                "lon": -65.3742752787487
            }
        },
        {
            "nombre_completo": "Municipio Ameghino",
            "fuente": "Ministerio de Ecología",
            "nombre": "Ameghino",
            "id": "540476",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00421688617359541
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.6952894204323,
                "lon": -55.0615940730353
            }
        },
        {
            "nombre_completo": "Municipio Campo Ramón",
            "fuente": "Ministerio de Ecología",
            "nombre": "Campo Ramón",
            "id": "540357",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0137655639950021
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.479248178282,
                "lon": -54.9662782162749
            }
        },
        {
            "nombre_completo": "Municipio Tilisarao",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Tilisarao",
            "id": "740063",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00152893455981118
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.7369590822116,
                "lon": -65.2768445006966
            }
        },
        {
            "nombre_completo": "Comisión Municipal Los Molles",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Los Molles",
            "id": "746217",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00109474956296604
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.4541506828014,
                "lon": -64.9990072643336
            }
        },
        {
            "nombre_completo": "Comisión Municipal Leandro N. Alem",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Leandro N. Alem",
            "id": "746007",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00230090778727057
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.4861654411151,
                "lon": -66.0526110100643
            }
        },
        {
            "nombre_completo": "Comisión Municipal La Calera",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "La Calera",
            "id": "746014",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00232132451654617
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.8772165561097,
                "lon": -66.8428577544769
            }
        },
        {
            "nombre_completo": "Municipio Apóstoles",
            "fuente": "Ministerio de Ecología",
            "nombre": "Apóstoles",
            "id": "540007",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0107226397177403
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.9025022905258,
                "lon": -55.7217304493641
            }
        },
        {
            "nombre_completo": "Comuna Rural San Ignacio",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "San Ignacio",
            "id": "908252",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00240894443691982
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.7630583479046,
                "lon": -65.6422403052396
            }
        },
        {
            "nombre_completo": "Comuna Rural Manuela Pedraza",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Manuela Pedraza",
            "id": "908511",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00233751776238445
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.2416094725294,
                "lon": -65.3304642435191
            }
        },
        {
            "nombre_completo": "Comuna Colombres",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Colombres",
            "id": "908077",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00313616418204354
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.8923611719294,
                "lon": -65.070141646709
            }
        },
        {
            "nombre_completo": "Municipio Villa Nueva",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Nueva",
            "id": "140364",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000154251677483599
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.4348778297543,
                "lon": -63.2624459627598
            }
        },
        {
            "nombre_completo": "Comuna Villa San Isidro",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa San Isidro",
            "id": "143113",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 0.000533485634359042
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.8046885379658,
                "lon": -64.4161559167215
            }
        },
        {
            "nombre_completo": "Municipio Santa Rosa de Río Primero",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Santa Rosa de Río Primero",
            "id": "140945",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 2.85115475993598e-05
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -31.1533189906775,
                "lon": -63.4030104122576
            }
        },
        {
            "nombre_completo": "Comuna Villa Sarmiento (G.R.)",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Villa Sarmiento (G.R.)",
            "id": "142252",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 4.54980061718919e-05
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -31.9200351681617,
                "lon": -65.1928848099619
            }
        },
        {
            "nombre_completo": "Comuna Washington",
            "fuente": "Direc. Grl. de Catastro",
            "nombre": "Washington",
            "id": "142602",
            "provincia": {
                "nombre": "Córdoba",
                "id": "14",
                "interseccion": 7.28575977773246e-06
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -33.8748130316447,
                "lon": -64.6907512956001
            }
        },
        {
            "nombre_completo": "Municipio Tres Capones",
            "fuente": "Ministerio de Ecología",
            "nombre": "Tres Capones",
            "id": "540028",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00413010815459016
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.9918146633049,
                "lon": -55.6141377080929
            }
        },
        {
            "nombre_completo": "Comisión Municipal Fortin el Patria",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Fortin el Patria",
            "id": "749175",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00236970949128208
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -34.7739596252621,
                "lon": -65.5216731228319
            }
        },
        {
            "nombre_completo": "Comuna Rural Agua Dulce y la Soledad",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Agua Dulce y la Soledad",
            "id": "908273",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00986244774952711
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.0938953837727,
                "lon": -65.0464239088762
            }
        },
        {
            "nombre_completo": "Municipio Desaguadero",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Desaguadero",
            "id": "740108",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00780054242896107
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.2931731671588,
                "lon": -67.0844111188143
            }
        },
        {
            "nombre_completo": "Comuna Gdor. Piedrabuena",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Gdor. Piedrabuena",
            "id": "908049",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0194930954983462
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.7456882147701,
                "lon": -64.7180746042488
            }
        },
        {
            "nombre_completo": "Comisión Municipal Las Lagunas",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Las Lagunas",
            "id": "746308",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00228903917263911
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.6286670748448,
                "lon": -65.5479977710782
            }
        },
        {
            "nombre_completo": "Comisión Municipal Las Chacras",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Las Chacras",
            "id": "746301",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00223455925965215
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.5633795921196,
                "lon": -65.7796055226069
            }
        },
        {
            "nombre_completo": "Comuna Rural San Javier",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "San Javier",
            "id": "908651",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00267595731059658
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -26.7866589965083,
                "lon": -65.3905941012725
            }
        },
        {
            "nombre_completo": "Municipio V, Gral, Roca",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "V, Gral, Roca",
            "id": "740035",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00231617744808199
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.6659194099238,
                "lon": -66.4507834261469
            }
        },
        {
            "nombre_completo": "Municipio Sta Rosa del Conlara",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Sta Rosa del Conlara",
            "id": "740098",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00193656131780557
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.351184010327,
                "lon": -65.213950705925
            }
        },
        {
            "nombre_completo": "Municipio Eldorado",
            "fuente": "Ministerio de Ecología",
            "nombre": "Eldorado",
            "id": "540154",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00716340219186246
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.4223788581657,
                "lon": -54.6153014553097
            }
        },
        {
            "nombre_completo": "Municipio Puerto Piray",
            "fuente": "Ministerio de Ecología",
            "nombre": "Puerto Piray",
            "id": "540350",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0120404660520201
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.5386325781089,
                "lon": -54.4261810360779
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Juan Bautista Alberdi",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Juan Bautista Alberdi",
            "id": "900056",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00341778929075255
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5899081064152,
                "lon": -65.6157736434403
            }
        },
        {
            "nombre_completo": "Comuna Monteagudo",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Monteagudo",
            "id": "908518",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0144083476053846
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.4867120823322,
                "lon": -65.1747080169836
            }
        },
        {
            "nombre_completo": "Comuna Rural El Polear",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "El Polear",
            "id": "908462",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00159646656974173
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.5043602265638,
                "lon": -65.5729611377999
            }
        },
        {
            "nombre_completo": "Comuna Santa Ana",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Santa Ana",
            "id": "908483",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0112889394185445
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.4798962857238,
                "lon": -65.7521664452298
            }
        },
        {
            "nombre_completo": "Comuna Villa de Chicligasta",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Villa de Chicligasta",
            "id": "908553",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00367238211558476
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.4113772987721,
                "lon": -65.1703099621512
            }
        },
        {
            "nombre_completo": "Comuna Trinidad",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Trinidad",
            "id": "908189",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00123744139634086
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.40262147558,
                "lon": -65.4991650494647
            }
        },
        {
            "nombre_completo": "Municipio Garuhapé",
            "fuente": "Ministerio de Ecología",
            "nombre": "Garuhapé",
            "id": "540308",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0198017160710979
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.8872609443926,
                "lon": -54.9072138973559
            }
        },
        {
            "nombre_completo": "Comisión Municipal V, de la Quebrada",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "V, de la Quebrada",
            "id": "746028",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00215919463902475
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.0210961731301,
                "lon": -66.2916667961259
            }
        },
        {
            "nombre_completo": "Comisión Municipal Nogoli",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Nogoli",
            "id": "746021",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00215640511222198
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.9144404088905,
                "lon": -66.3260298327171
            }
        },
        {
            "nombre_completo": "Comisión Municipal Carpinteria",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Carpinteria",
            "id": "746203",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.000814570832679811
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.4108231858127,
                "lon": -64.9985692378465
            }
        },
        {
            "nombre_completo": "Municipio La Toma",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "La Toma",
            "id": "740042",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00175763377856781
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.046653227084,
                "lon": -65.6356268275324
            }
        },
        {
            "nombre_completo": "Municipio Buena Esperanza",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Buena Esperanza",
            "id": "740084",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.002372094818847
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -34.7590033684233,
                "lon": -65.2537704313506
            }
        },
        {
            "nombre_completo": "Comuna Rural Ciudacita",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Ciudacita",
            "id": "908504",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00283193066706602
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.4421855913349,
                "lon": -65.4190456907457
            }
        },
        {
            "nombre_completo": "Comuna Rio Chico y Nueva Trinidad",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Rio Chico y Nueva Trinidad",
            "id": "908532",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.015067853990391
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.5183926862368,
                "lon": -65.3191003249121
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Aguilares",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Aguilares",
            "id": "900091",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00168447103919389
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4381337326602,
                "lon": -65.6284335564001
            }
        },
        {
            "nombre_completo": "Comuna Los Sarmiento y la Tipa",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Los Sarmiento y la Tipa",
            "id": "908469",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00292827891941412
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.4080309175109,
                "lon": -65.7026761989972
            }
        },
        {
            "nombre_completo": "Comuna Rural Monte Bello",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Monte Bello",
            "id": "908476",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00812419117895031
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.4152129708517,
                "lon": -65.8621732548063
            }
        },
        {
            "nombre_completo": "Comuna Sargento Moya",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Sargento Moya",
            "id": "908434",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00279401312006119
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.1527652170227,
                "lon": -65.7995877023293
            }
        },
        {
            "nombre_completo": "Comuna Rio Seco",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Rio Seco",
            "id": "908420",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.000897036752830088
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.2631502166668,
                "lon": -65.5732307382912
            }
        },
        {
            "nombre_completo": "Comisión Municipal Juan Llerena",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Juan Llerena",
            "id": "746126",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00106956737088755
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.2835609428488,
                "lon": -65.648344957264
            }
        },
        {
            "nombre_completo": "Municipio Concaran",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Concaran",
            "id": "740049",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00192364105861236
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.5648308694663,
                "lon": -65.2385006221064
            }
        },
        {
            "nombre_completo": "Comisión Municipal Talita",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Talita",
            "id": "746224",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00129195711202099
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.2253766754598,
                "lon": -65.574538983418
            }
        },
        {
            "nombre_completo": "Comisión Municipal Villa Larca",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Villa Larca",
            "id": "746105",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00153449355560532
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.6050751482919,
                "lon": -64.9872112931982
            }
        },
        {
            "nombre_completo": "Comisión Municipal Papagayos",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Papagayos",
            "id": "746077",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00163521817329806
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.6889705583597,
                "lon": -64.9958582537887
            }
        },
        {
            "nombre_completo": "Municipio Naschel",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Naschel",
            "id": "740056",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00158762814087528
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -32.899570501439,
                "lon": -65.3862894779769
            }
        },
        {
            "nombre_completo": "Comuna San Andres",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "San Andres",
            "id": "908154",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00180210686771292
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.9198728910698,
                "lon": -65.1820007041167
            }
        },
        {
            "nombre_completo": "Municipio Justo Daract",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Justo Daract",
            "id": "740070",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00218275074733733
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.858645814515,
                "lon": -65.1869760029057
            }
        },
        {
            "nombre_completo": "Comisión Municipal Saladillo",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Saladillo",
            "id": "746063",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.0023300901195782
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.2022523817984,
                "lon": -65.8559267176371
            }
        },
        {
            "nombre_completo": "Comisión Municipal Bagual",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Bagual",
            "id": "746161",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00238321498671958
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -35.1430062488726,
                "lon": -65.5694561123146
            }
        },
        {
            "nombre_completo": "Municipio Union",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Union",
            "id": "740091",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00238361750944411
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -35.1539097288901,
                "lon": -65.9454868164706
            }
        },
        {
            "nombre_completo": "Comisión Municipal Arizona",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Arizona",
            "id": "746154",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00219752843767572
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -35.7270528785446,
                "lon": -65.3157176252592
            }
        },
        {
            "nombre_completo": "Comisión Municipal Nueva Galia",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Nueva Galia",
            "id": "746196",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00222644416673294
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -35.1153083584885,
                "lon": -65.2538594145069
            }
        },
        {
            "nombre_completo": "Comisión Municipal Fortuna",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Fortuna",
            "id": "749182",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00222704070871796
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -35.1318701277277,
                "lon": -65.3883623457859
            }
        },
        {
            "nombre_completo": "Comisión Municipal Anchorena",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Anchorena",
            "id": "746147",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00219587974766298
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -35.672961161783,
                "lon": -65.4302210648369
            }
        },
        {
            "nombre_completo": "Comisión Municipal Juan Jorba",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Juan Jorba",
            "id": "749119",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00234073272978375
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.6151941989638,
                "lon": -65.2726607834124
            }
        },
        {
            "nombre_completo": "Comisión Municipal Lavaisse",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Lavaisse",
            "id": "746140",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00234639585078579
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.8228631592664,
                "lon": -65.4243757203361
            }
        },
        {
            "nombre_completo": "Comisión Municipal San Jose del Morro",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "San Jose del Morro",
            "id": "746112",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00233023949513141
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.2125308103618,
                "lon": -65.4909903747158
            }
        },
        {
            "nombre_completo": "Comisión Municipal San Jeronimo",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "San Jeronimo",
            "id": "746273",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.000943811772181357
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.1617646921591,
                "lon": -66.5094866216829
            }
        },
        {
            "nombre_completo": "Comisión Municipal El Volcan",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "El Volcan",
            "id": "746259",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.000773581716926559
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -33.2673740566263,
                "lon": -66.1474909524644
            }
        },
        {
            "nombre_completo": "Comisión Municipal Lafinur",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Lafinur",
            "id": "746210",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00132867113325152
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.0859055469255,
                "lon": -65.348168405395
            }
        },
        {
            "nombre_completo": "Municipio Estancia Grande",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Estancia Grande",
            "id": "740038",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00270553929526209
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.1581085522715,
                "lon": -66.145396226486
            }
        },
        {
            "nombre_completo": "Municipio La Punta",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "La Punta",
            "id": "749007",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00302372108042262
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -33.1753715269425,
                "lon": -66.3583807823884
            }
        },
        {
            "nombre_completo": "Comuna Rural Buena Vista",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Buena Vista",
            "id": "908497",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00181537476816863
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.293103413231,
                "lon": -65.4086112719943
            }
        },
        {
            "nombre_completo": "Comuna Taco Ralo",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Taco Ralo",
            "id": "908210",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0263338842726529
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.8166185689103,
                "lon": -65.1995939541741
            }
        },
        {
            "nombre_completo": "Comuna Lamadrid",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Lamadrid",
            "id": "908203",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0284462223287199
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.6581361187059,
                "lon": -65.185126168893
            }
        },
        {
            "nombre_completo": "Comuna San Felipe y Santa Barbara",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "San Felipe y Santa Barbara",
            "id": "908364",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00277637582320908
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.9268324704497,
                "lon": -65.2452106918328
            }
        },
        {
            "nombre_completo": "Comuna Amaicha del Valle",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Amaicha del Valle",
            "id": "908567",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0469818937524795
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.5104479409167,
                "lon": -65.8560920089714
            }
        },
        {
            "nombre_completo": "Comuna Colalao del Valle",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Colalao del Valle",
            "id": "908574",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0303710904537283
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.4289475639879,
                "lon": -66.0630265040008
            }
        },
       
        {
            "nombre_completo": "Municipio Colonia Wanda",
            "fuente": "Ministerio de Ecología",
            "nombre": "Colonia Wanda",
            "id": "540231",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0156899924392616
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.9807484033979,
                "lon": -54.3100077563901
            }
        },
        {
            "nombre_completo": "Comuna Ranchillos y San Miguel",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Ranchillos y San Miguel",
            "id": "908147",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00555637018237953
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.9649258485248,
                "lon": -65.0319416616308
            }
        },
        {
            "nombre_completo": "Comuna El Chañar",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "El Chañar",
            "id": "908014",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0061470034249664
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.7585094835685,
                "lon": -65.0116501532297
            }
        },
        {
            "nombre_completo": "Comuna Villa Padre Monti",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Villa Padre Monti",
            "id": "908070",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0242321506061774
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.4093655654606,
                "lon": -64.9838039127352
            }
        },
        {
            "nombre_completo": "Comuna La Florida y Luisiana",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "La Florida y Luisiana",
            "id": "908105",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00274490224998656
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.8110760530452,
                "lon": -65.0493432281003
            }
        },
        {
            "nombre_completo": "Comuna Los Ralos",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Los Ralos",
            "id": "908140",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0063805199917816
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.9077273561348,
                "lon": -64.9494845475381
            }
        },
        {
            "nombre_completo": "Comisión Municipal Cortaderas",
            "fuente": "Dirección de Geodesia y Catastro",
            "nombre": "Cortaderas",
            "id": "746070",
            "provincia": {
                "nombre": "San Luis",
                "id": "74",
                "interseccion": 0.00161548718206821
            },
            "categoria": "Comisión Municipal",
            "centroide": {
                "lat": -32.5179302837987,
                "lon": -64.993145431184
            }
        },
        {
            "nombre_completo": "Comuna Cevil Redondo",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Cevil Redondo",
            "id": "908644",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00164685570267357
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.7604186617388,
                "lon": -65.3082018325489
            }
        },
        {
            "nombre_completo": "Comuna Garmendia",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Garmendia",
            "id": "908042",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0195716209727684
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.5437398480203,
                "lon": -64.602021722468
            }
        },
        {
            "nombre_completo": "Comuna La Ramada y la Cruz",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "La Ramada y la Cruz",
            "id": "908056",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0161207127750385
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.6769926256373,
                "lon": -64.903340015279
            }
        },
        {
            "nombre_completo": "Comuna Los Perez",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Los Perez",
            "id": "908133",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00483900169223411
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.8256121642019,
                "lon": -64.9084266828363
            }
        },
        {
            "nombre_completo": "Comuna Estacion Araoz y Tacanas",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Estacion Araoz y Tacanas",
            "id": "908294",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00879842554991841
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.097335732713,
                "lon": -64.88854807146
            }
        },
        {
            "nombre_completo": "Comuna Rural El Mojon",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "El Mojon",
            "id": "908280",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0092376896583845
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.2177164727416,
                "lon": -64.8964552442379
            }
        },
        {
            "nombre_completo": "Comuna Benjamin Araoz y el Tajamar",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Benjamin Araoz y el Tajamar",
            "id": "908063",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0160515954544301
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.5650275880602,
                "lon": -64.8166974682852
            }
        },
        {
            "nombre_completo": "Comuna Rural Los Pereyras",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Los Pereyras",
            "id": "908126",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00772343061705501
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.006849550652,
                "lon": -64.8560919370471
            }
        },
        {
            "nombre_completo": "Comuna Las Cejas",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Las Cejas",
            "id": "908112",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00871971437219001
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.9193176439473,
                "lon": -64.7959865771321
            }
        },
        {
            "nombre_completo": "Comuna Leon Rouges y Santa Rosa",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Leon Rouges y Santa Rosa",
            "id": "908406",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0032002193360237
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.221224021688,
                "lon": -65.5046906941058
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Monteros",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Monteros",
            "id": "900084",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00198471527580465
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.1804891520765,
                "lon": -65.4729583478233
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Tafi Viejo",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Tafi Viejo",
            "id": "900119",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00271722726913366
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.7418103474808,
                "lon": -65.2770267288798
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Burruyacu",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Burruyacu",
            "id": "900007",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00562630733229247
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.4603848527914,
                "lon": -64.7366427741997
            }
        },
        {
            "nombre_completo": "Comuna 7 de Abril",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "7 de Abril",
            "id": "908007",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0148374757587143
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.3206584981473,
                "lon": -64.5825405006861
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Bella Vista",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Bella Vista",
            "id": "900070",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00232856387236688
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.0635317509637,
                "lon": -65.3070652191747
            }
        },
        {
            "nombre_completo": "Comuna Villa de Leales",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Villa de Leales",
            "id": "908350",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00719081542814852
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.2210020625548,
                "lon": -65.2308899100708
            }
        },
        {
            "nombre_completo": "Comuna Santa Rosa de Leales y L. Blanca",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Santa Rosa de Leales y L. Blanca",
            "id": "908343",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00981266506230585
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.1347105867806,
                "lon": -65.1993040428079
            }
        },
        {
            "nombre_completo": "Comuna Rural Las Talas",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Las Talas",
            "id": "908301",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.000783738317084017
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.0029638345194,
                "lon": -65.2797471487476
            }
        },
        {
            "nombre_completo": "Comuna Rural Los Bulacios y los Villagras",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Los Bulacios y los Villagras",
            "id": "908119",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00130392467664889
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -26.9807172537575,
                "lon": -65.207750805092
            }
        },
        {
            "nombre_completo": "Comuna Rural Huasa Pampa",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Huasa Pampa",
            "id": "908238",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00808760070185838
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.8646840304662,
                "lon": -65.6228768277513
            }
        },
        {
            "nombre_completo": "Comuna Rural Escaba",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Escaba",
            "id": "908217",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0181972863499173
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.6301336583105,
                "lon": -65.8621193241881
            }
        },
        {
            "nombre_completo": "Comuna Medina",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Medina",
            "id": "908196",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00158623850154483
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.3896378313012,
                "lon": -65.5446199318525
            }
        },
        {
            "nombre_completo": "Comuna Alto Verde y los Guchea",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Alto Verde y los Guchea",
            "id": "908168",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00219573542563062
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -27.3887695155064,
                "lon": -65.612508074534
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Famailla",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Famailla",
            "id": "900042",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.0195178498644852
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.9787072041791,
                "lon": -65.4724587727599
            }
        },
        {
            "nombre_completo": "Municipio Municipalidad de Banda del Rio Sali",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "Banda del Rio Sali",
            "id": "900028",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00173057601683179
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -26.8676751675854,
                "lon": -65.1563310604477
            }
        },
        {
            "nombre_completo": "Comuna Rural El Cercado",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "El Cercado",
            "id": "908399",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00160076996497478
            },
            "categoria": "Comuna Rural",
            "centroide": {
                "lat": -27.1910533081183,
                "lon": -65.5757616015617
            }
        },
        {
            "nombre_completo": "Municipio Dos de Mayo",
            "fuente": "Ministerio de Ecología",
            "nombre": "Dos de Mayo",
            "id": "540049",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0159820019937476
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.0916027750349,
                "lon": -54.6114381158115
            }
        },
        {
            "nombre_completo": "Comuna El Manantial",
            "fuente": "Dirección de Estadística de la Prov. Tucumán",
            "nombre": "El Manantial",
            "id": "908357",
            "provincia": {
                "nombre": "Tucumán",
                "id": "90",
                "interseccion": 0.00105511817308067
            },
            "categoria": "Comuna",
            "centroide": {
                "lat": -26.8395314982664,
                "lon": -65.3222639381292
            }
        },
        {
            "nombre_completo": "Municipio Garupá",
            "fuente": "Ministerio de Ecología",
            "nombre": "Garupá",
            "id": "540112",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0102257200783585
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5440492834756,
                "lon": -55.8649965962929
            }
        },
        {
            "nombre_completo": "Municipio Profundidad",
            "fuente": "Ministerio de Ecología",
            "nombre": "Profundidad",
            "id": "540091",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00436311414092536
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.5596067764968,
                "lon": -55.7184719443713
            }
        },
        {
            "nombre_completo": "Municipio Candelaria",
            "fuente": "Ministerio de Ecología",
            "nombre": "Candelaria",
            "id": "540063",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0041945100362215
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.4689188332012,
                "lon": -55.7145175073734
            }
        },
        {
            "nombre_completo": "Municipio Loreto",
            "fuente": "Ministerio de Ecología",
            "nombre": "Loreto",
            "id": "540077",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.00354113172902581
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -27.3567760317075,
                "lon": -55.5127073353104
            }
        },
        {
            "nombre_completo": "Municipio Libertad",
            "fuente": "Ministerio de Ecología",
            "nombre": "Libertad",
            "id": "540224",
            "provincia": {
                "nombre": "Misiones",
                "id": "54",
                "interseccion": 0.0288918714802287
            },
            "categoria": "Municipio",
            "centroide": {
                "lat": -25.8492622245534,
                "lon": -54.4206259685073
            }
        },
        {
            "nombre":"La Banda",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Vilelas",
            "provincia":{
                "nombre": "Santiago"
            }
        },        
        {
            "nombre":"Brea Pozo",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Pampa de los Guanacos",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Los Pirpintos",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"La Cañada",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Clodomira",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Loreto",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Suncho Corral",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Villa Ojo de Agua",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Monte Quemado",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Fernández",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Quimilí",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Añatuya",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Frías",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Termas de Río Hondo",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Santiago",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Los Telares",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Selva",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Weisburd",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"San Pedro de Guasayán",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Sacháyoj",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Garza",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Estación Simbolar",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Herrera",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Icaño",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Pinto",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Beltrán",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Ingeniero Forres",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Sumampa",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Bandera",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Campo Gallo",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Los Juríes",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Colonia El Simbolar",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Pozo Hondo",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Tintina",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Colonia Dora",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Villa Atamisqui",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Sol de Julio",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Nueva Esperanza",
            "provincia":{
                "nombre": "Santiago"
            }
        },
        {
            "nombre":"Colón",
            "provincia":{
                "nombre": "Entre Ríos"
            }
        },
        {
            "nombre":"Concordia",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Diamante",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Federación",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Federal",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Feliciano",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Gualeguay",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Gualeguaychú",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Islas del Ibicuy",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"La Paz",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Nogoyá",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Paraná",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"San Salvador",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Tala",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Uruguay",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Victoria",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Villaguay",
            "provincia":{
                "nombre": "Entre rios"
            }
        },
        {
            "nombre":"Caleta Olivia",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"Las Heras",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"Perito Moreno",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"Los Antiguos",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"Pico Truncado",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"Puerto Deseado",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"Gobernador Gregores",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"Puerto San Julián",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"El Chaltén",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"Comandante Luis Piedrabuena",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"El Calafate",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"Veintiocho de Noviembre",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"Río Turbio",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"Puerto Santa Cruz",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"Río Gallegos",
            "provincia":{
                "nombre": "Santa Cruz"
            }
        },
        {
            "nombre":"Abasto",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Colegiales",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        }
        ,
        {
            "nombre":"Belgrano",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Parque Avellaneda",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Flores",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Floresta",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"San Cristóbal",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Constitución",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Pompeya",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Mataderos",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Liniers",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Villa del Parque",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Once",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Barracas",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Microcentro",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Villareal",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Villa Pueyrredón",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Puerto Madero",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Balvanera",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Congreso",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Caballito",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Lugano",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Parque Patricios",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Parque Chacabuco",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Villa Devoto",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"San Nicolás",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Villa Urquiza",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Palermo",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Barrio Norte",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"San Telmo",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        },
        {
            "nombre":"Villa Crespo",
            "provincia":{
                "nombre": "Ciudad Autónoma de Buenos Aires"
            }
        }

    ],
    "parametros": {},
    "inicio": 0
}';


$municipios = json_decode($municipios_json);


        foreach ($municipios->municipios as $key ) {
               
            Ciudad::create([
             'nombre' =>  $key->nombre,
             'provincia' => $key->provincia->nombre
            ]);
            }        
    }
}
