<?php
/**
 * Author: Bernardo Fuentes
 * Twitter: @bfuent3s
 * Email: bfuentes@itivos.com
 */
require_once(dirname(__FILE__) . '../../../config/config.inc.php');
require_once(dirname(__FILE__) . '../../../init.php');

$products = '{
    "Hoja2": [
        {
            "id": "62",
            "SKU": "ALNID",
            "Nombre": "ALINEADOR",
            "Descripcion corta": "Accesorio en acero inoxidable para la colocación de las paletas en el momento de salir del molde.",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moldes Paleteros",
            "Precio": "2048.28",
            "Precio + IVA": "2376.00",
            "Existencias": "3"
        },
        {
            "id": "42",
            "SKU": "BTAG18",
            "Nombre": "Botes para 18 litros de agua",
            "Descripcion corta": "Botes en acero inoxidable para 18 litros de agua ",
            "Categoria Padre": "MUEBLES Y ACCESORIOS PARA AGUA",
            "Categorias Hijas": "Accesorios para agua",
            "Precio": "465.52",
            "Precio + IVA": "540.00",
            "Existencias": "3"
        },
        {
            "id": "43",
            "SKU": "BTAG36",
            "Nombre": "Botes para 36 litros de agua",
            "Descripcion corta": "Botes en acero inoxidable para 36 litros de agua ",
            "Categoria Padre": "MUEBLES Y ACCESORIOS PARA AGUA",
            "Categorias Hijas": "Accesorios para agua",
            "Precio": "744.83",
            "Precio + IVA": "864.00",
            "Existencias": "3"
        },
        {
            "id": "66",
            "SKU": "BTEACC",
            "Nombre": "BOTE CON TAPA Y ESQUELETO ",
            "Descripcion corta": "Bote con tapa en acero inoxidable y esqueleto con aspas en acrílico con capacidad de 14 litros de nieve",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moledores",
            "Precio": "3910.34",
            "Precio + IVA": "4536.00",
            "Existencias": "3"
        },
        {
            "id": "46",
            "SKU": "CHOC6INS",
            "Nombre": "Chocolatera",
            "Descripcion corta": "Chocolatera en Acero Inoxidable, con cristal templado para exhibición.",
            "Categoria Padre": "MUEBLES AUXILIARES",
            "Categorias Hijas": "Mesas",
            "Precio": "7448.28",
            "Precio + IVA": "8640.00",
            "Existencias": "3"
        },
        {
            "id": "30",
            "SKU": "CJBC",
            "Nombre": "Caja paletera bocona",
            "Descripcion corta": "Caja paletera bocona con doble capa de fibra de vidrio y cartuchos incluídos",
            "Categoria Padre": "CARRITOS Y CAJAS PALETAS",
            "Categorias Hijas": "Cajas paleteras",
            "Precio": "4189.66",
            "Precio + IVA": "4860.00",
            "Existencias": "3"
        },
        {
            "id": "28",
            "SKU": "CJMINI",
            "Nombre": "Caja paletera mini",
            "Descripcion corta": "Caja paletera mini con doble capa de fibra de vidrio y cartuchos incluídos",
            "Categoria Padre": "CARRITOS Y CAJAS PALETAS",
            "Categorias Hijas": "Cajas paleteras",
            "Precio": "3351.72",
            "Precio + IVA": "3888.00",
            "Existencias": "3"
        },
        {
            "id": "32",
            "SKU": "CJMINIBC",
            "Nombre": "Caja paletera mini bocona",
            "Descripcion corta": "Caja paletera bocona mini con doble capa de fibra de vidrio y cartuchos incluídos",
            "Categoria Padre": "CARRITOS Y CAJAS PALETAS",
            "Categorias Hijas": "Cajas paleteras",
            "Precio": "3537.93",
            "Precio + IVA": "4104.00",
            "Existencias": "3"
        },
        {
            "id": "31",
            "SKU": "CJNEV",
            "Nombre": "Caja paletera nevera",
            "Descripcion corta": "Caja paletera nevera con doble capa de fibra de vidrio y cartuchos incluídos",
            "Categoria Padre": "CARRITOS Y CAJAS PALETAS",
            "Categorias Hijas": "Cajas paleteras",
            "Precio": "5027.59",
            "Precio + IVA": "5832.00",
            "Existencias": "3"
        },
        {
            "id": "29",
            "SKU": "CJSTD",
            "Nombre": "Caja paletera estándar",
            "Descripcion corta": "Caja paletera estándar con doble capa de fibra de vidrio y cartuchos incluídos",
            "Categoria Padre": "CARRITOS Y CAJAS PALETAS",
            "Categorias Hijas": "Cajas paleteras",
            "Precio": "3817.24",
            "Precio + IVA": "4428.00",
            "Existencias": "3"
        },
        {
            "id": "49",
            "SKU": "CONG2PTA",
            "Nombre": "Congeldor doble puerta de cristal",
            "Descripcion corta": "Congelador doble puerta corrediza para almacenar y exhibir variedad de productos.",
            "Categoria Padre": "MUEBLES AUXILIARES",
            "Categorias Hijas": "Congeladores",
            "Precio": "0.00",
            "Precio + IVA": "0.00",
            "Existencias": "0"
        },
        {
            "id": "50",
            "SKU": "CONG3PTAS",
            "Nombre": "Congelador triple puerta de cristal",
            "Descripcion corta": "Congelador tapas planas de cristal deslizables para exhibición y mantenimiento de producto",
            "Categoria Padre": "MUEBLES AUXILIARES",
            "Categorias Hijas": "Congeladores",
            "Precio": "15455.17",
            "Precio + IVA": "17928.00",
            "Existencias": "3"
        },
        {
            "id": "50",
            "SKU": "CONG3PTAS",
            "Nombre": "Congelador tapa de cofre",
            "Descripcion corta": "Congelador tapa sólida blanca de poliuretano que facilita el sellado y mantenimiento del frío",
            "Categoria Padre": "MUEBLES AUXILIARES",
            "Categorias Hijas": "Congeladores",
            "Precio": "14431.03",
            "Precio + IVA": "16740.00",
            "Existencias": "3"
        },
        {
            "id": "35",
            "SKU": "CPBC",
            "Nombre": "Carrito paletero de caja bocona",
            "Descripcion corta": "Carrito paletero bocón de fibra de vidrio, maneral cromado y cartuchos incluídos",
            "Categoria Padre": "CARRITOS Y CAJAS PALETAS",
            "Categorias Hijas": "Carros paleteros",
            "Precio": "5400.00",
            "Precio + IVA": "6264.00",
            "Existencias": "3"
        },
        {
            "id": "33",
            "SKU": "CPMINI",
            "Nombre": "Carrito paletero mini",
            "Descripcion corta": "Carrito paletero tamaño mini  de fibra de vidrio, maneral cromado y cartuchos incluídos",
            "Categoria Padre": "CARRITOS Y CAJAS PALETAS",
            "Categorias Hijas": "Carros paleteros",
            "Precio": "4655.17",
            "Precio + IVA": "5400.00",
            "Existencias": "3"
        },
        {
            "id": "37",
            "SKU": "CPMINIBC",
            "Nombre": "Carrito paletero de caja mini bocona",
            "Descripcion corta": "Carrito paletero mini bocón de fibra de vidrio, maneral cromado y cartuchos incluídos",
            "Categoria Padre": "CARRITOS Y CAJAS PALETAS",
            "Categorias Hijas": "Carros paleteros",
            "Precio": "4841.38",
            "Precio + IVA": "5616.00",
            "Existencias": "3"
        },
        {
            "id": "36",
            "SKU": "CPNEV",
            "Nombre": "Carrito paletero nevero",
            "Descripcion corta": "Carrito paletero tamaño nevero de fibra de vidrio, maneral cromado y cartuchos incluídos",
            "Categoria Padre": "CARRITOS Y CAJAS PALETAS",
            "Categorias Hijas": "Carros paleteros",
            "Precio": "6424.14",
            "Precio + IVA": "7452.00",
            "Existencias": "3"
        },
        {
            "id": "34",
            "SKU": "CPSTD",
            "Nombre": "Carrito paletero estándar",
            "Descripcion corta": "Carrito paletero tamaño estándar de fibra de vidrio, maneral cromado y cartuchos incluídos",
            "Categoria Padre": "CARRITOS Y CAJAS PALETAS",
            "Categorias Hijas": "Carros paleteros",
            "Precio": "5213.79",
            "Precio + IVA": "6048.00",
            "Existencias": "3"
        },
        {
            "id": "44",
            "SKU": "CUCHACC",
            "Nombre": "Cucharon",
            "Descripcion corta": "Cucharones especiales para agua",
            "Categoria Padre": "MUEBLES Y ACCESORIOS PARA AGUA",
            "Categorias Hijas": "Accesorios para agua",
            "Precio": "139.66",
            "Precio + IVA": "162.00",
            "Existencias": "3"
        },
        {
            "id": "61",
            "SKU": "EMAPL",
            "Nombre": "EMPALILLADOR",
            "Descripcion corta": "Accesorio en acero inoxidable con maneral fijo, utilizado para la fácil colocación de los palillos de paleta así como la extracción del total de producto del molde paletero",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moldes Paleteros",
            "Precio": "2048.28",
            "Precio + IVA": "2376.00",
            "Existencias": "3"
        },
        {
            "id": "39",
            "SKU": "M4BAG",
            "Nombre": "Mueble para 4 botes de agua",
            "Descripcion corta": "Mueble en acero inoxidable para 4 botes de acero inoxidable y cucharones",
            "Categoria Padre": "MUEBLES Y ACCESORIOS PARA AGUA",
            "Categorias Hijas": "Muebles para agua ",
            "Precio": "32586.21",
            "Precio + IVA": "37800.00",
            "Existencias": "3"
        },
        {
            "id": "40",
            "SKU": "M6BAG",
            "Nombre": "Mueble para 6 botes de agua",
            "Descripcion corta": "Mueble en acero inoxidable para 6 botes de acero inoxidable y cucharones",
            "Categoria Padre": "MUEBLES Y ACCESORIOS PARA AGUA",
            "Categorias Hijas": "Muebles para agua ",
            "Precio": "35379.31",
            "Precio + IVA": "41040.00",
            "Existencias": "3"
        },
        {
            "id": "41",
            "SKU": "M8BAG",
            "Nombre": "Mueble para 8 botes de agua",
            "Descripcion corta": "Mueble en acero inoxidable para 8 botes de acero inoxidable y cucharones",
            "Categoria Padre": "MUEBLES Y ACCESORIOS PARA AGUA",
            "Categorias Hijas": "Muebles para agua ",
            "Precio": "37241.38",
            "Precio + IVA": "43200.00",
            "Existencias": "3"
        },
        {
            "id": "57",
            "SKU": "MDBAND",
            "Nombre": "MOLDE PALETERO TIPO BANDERILLA",
            "Descripcion corta": "Molde paletero banderilla en acero inoxidable para la fabricación de 24 paletas",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moldes Paleteros",
            "Precio": "1489.66",
            "Precio + IVA": "1728.00",
            "Existencias": "3"
        },
        {
            "id": "58",
            "SKU": "MDHEXA",
            "Nombre": "MOLDE PALETERO TIPO HEXAGONAL",
            "Descripcion corta": "Molde paletero hexagonal en acero inoxidable para la fabricación de 24 paletas",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moldes Paleteros",
            "Precio": "1489.66",
            "Precio + IVA": "1728.00",
            "Existencias": "3"
        },
        {
            "id": "55",
            "SKU": "MDHOLANDA",
            "Nombre": "MOLDE PALETERO HOLANDA ",
            "Descripcion corta": "Molde paletero estilo michoacana en acero inoxidable para la fabricación de 40 paletas",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moldes Paleteros",
            "Precio": "1163.79",
            "Precio + IVA": "1350.00",
            "Existencias": "3"
        },
        {
            "id": "54",
            "SKU": "MDLISO",
            "Nombre": "MOLDE PALETERO LISO ESTÁNDAR",
            "Descripcion corta": "Molde paletero estilo michoacana en acero inoxidable para la fabricación de 40 paletas",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moldes Paleteros",
            "Precio": "1117.24",
            "Precio + IVA": "1296.00",
            "Existencias": "3"
        },
        {
            "id": "53",
            "SKU": "MDMLISO",
            "Nombre": "MOLDE PALETERO LISO MINI",
            "Descripcion corta": "Molde paletero estilo michoacana en acero inoxidable para la fabricación de 40 paletas",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moldes Paleteros",
            "Precio": "0.00",
            "Precio + IVA": "0.00",
            "Existencias": "0"
        },
        {
            "id": "60",
            "SKU": "MDPERCH",
            "Nombre": "MOLDE PALETERO TIPO PERCHERON",
            "Descripcion corta": "Molde paletero para veladora en acero inoxidable para la fabricación de 40 paletas",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moldes Paleteros",
            "Precio": "1396.55",
            "Precio + IVA": "1620.00",
            "Existencias": "3"
        },
        {
            "id": "56",
            "SKU": "MDSNDW",
            "Nombre": "MOLDE PALETERO TIPO SANDWICH CON ARAÑA",
            "Descripcion corta": "Molde paletero estilo michoacana en acero inoxidable para la fabricación de 40 paletas",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moldes Paleteros",
            "Precio": "1396.55",
            "Precio + IVA": "1620.00",
            "Existencias": "3"
        },
        {
            "id": "59",
            "SKU": "MDVEL",
            "Nombre": "MOLDE PALETERO TIPO VELADORA",
            "Descripcion corta": "Molde paletero para veladora en acero inoxidable para la fabricación de 40 paletas",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moldes Paleteros",
            "Precio": "0.00",
            "Precio + IVA": "0.00",
            "Existencias": "0"
        },
        {
            "id": "65",
            "SKU": "MEDNIEV",
            "Nombre": "JUEGO PARA TALADRO",
            "Descripcion corta": "Cucharas servidoras de nieve en medidas varias",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moledores",
            "Precio": "2048.28",
            "Precio + IVA": "2376.00",
            "Existencias": "3"
        },
        {
            "id": "67",
            "SKU": "MENDACC",
            "Nombre": "MENEADOR",
            "Descripcion corta": "Herramienta en acero inoxidable para aguas de base redonda con respiradores circulares.",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moledores",
            "Precio": "1675.86",
            "Precio + IVA": "1944.00",
            "Existencias": "3"
        },
        {
            "id": "48",
            "SKU": "MESTRA",
            "Nombre": "Mesa de trabajo",
            "Descripcion corta": "Mesa Rectangular Lisa con Entrepaño Inferior ideal para trabajos de preparación, acomodo y mezcla de ingredientes o productos.",
            "Categoria Padre": "MUEBLES AUXILIARES",
            "Categorias Hijas": "Mesas",
            "Precio": "6517.24",
            "Precio + IVA": "7560.00",
            "Existencias": "3"
        },
        {
            "id": "52",
            "SKU": "MMLISO",
            "Nombre": "MOLDE PALETERO LISO MINI",
            "Descripcion corta": "Molde paletero estilo michoacana en acero inoxidable para la fabricación de 40 paletas",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moldes Paleteros",
            "Precio": "931.03",
            "Precio + IVA": "1080.00",
            "Existencias": "3"
        },
        {
            "id": "27",
            "SKU": "NA10P20",
            "Nombre": "Nevera Automática 10 para 20",
            "Descripcion corta": "Tanque para fabricar 160 paletas y 14L de nieve, o bien 200 paletas en 28min.",
            "Categoria Padre": "NEVERAS",
            "Categorias Hijas": "NEVERAS",
            "Precio": "107068.97",
            "Precio + IVA": "124200.00",
            "Existencias": "3"
        },
        {
            "id": "20",
            "SKU": "NHS",
            "Nombre": "Nevera para Hielo y Sal",
            "Descripcion corta": "Máquina en acero inoxidable para la fabricación de nieve utilizando hielo y sal",
            "Categoria Padre": "NEVERAS",
            "Categorias Hijas": "Nevera",
            "Precio": "13965.52",
            "Precio + IVA": "16200.00",
            "Existencias": "3"
        },
        {
            "id": "23",
            "SKU": "NMA",
            "Nombre": "Nevera con Motor Agitador",
            "Descripcion corta": "Máquina en acero inoxidable para la fabricación de nieve y paletas",
            "Categoria Padre": "NEVERAS",
            "Categorias Hijas": "Nevera",
            "Precio": "35379.31",
            "Precio + IVA": "41040.00",
            "Existencias": "3"
        },
        {
            "id": "24",
            "SKU": "NND",
            "Nombre": "Nevera Doble",
            "Descripcion corta": "Máquina en Acero Inoxidable con Dos Garrafas Removibles",
            "Categoria Padre": "NEVERAS",
            "Categorias Hijas": "Nevera",
            "Precio": "73551.72",
            "Precio + IVA": "85320.00",
            "Existencias": "3"
        },
        {
            "id": "21",
            "SKU": "NPN",
            "Nombre": "Nevera para pura nieve",
            "Descripcion corta": "Máquina en acero inoxidable para la fabricación exclusiva de nieve.",
            "Categoria Padre": "NEVERAS",
            "Categorias Hijas": "Nevera",
            "Precio": "32586.21",
            "Precio + IVA": "37800.00",
            "Existencias": "3"
        },
        {
            "id": "22",
            "SKU": "NPP",
            "Nombre": "Nevera para pura paleta",
            "Descripcion corta": "Máquina en acero inoxidable con agitador para la fabricación exclusiva de paletas.",
            "Categoria Padre": "NEVERAS",
            "Categorias Hijas": "Nevera",
            "Precio": "30724.14",
            "Precio + IVA": "35640.00",
            "Existencias": "3"
        },
        {
            "id": "45",
            "SKU": "PILINOX",
            "Nombre": "Pileta",
            "Descripcion corta": "Mueble en Acero Inoxidable con superficie plana y área de desmolde.",
            "Categoria Padre": "MUEBLES AUXILIARES",
            "Categorias Hijas": "Mesas",
            "Precio": "6594.83",
            "Precio + IVA": "7650.00",
            "Existencias": "3"
        },
        {
            "id": "64",
            "SKU": "REACTLDMKT",
            "Nombre": "JUEGO PARA TALADRO",
            "Descripcion corta": "Juego piramidal de metal con centro de péndulo para taladro Makita.",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moledores",
            "Precio": "2327.59",
            "Precio + IVA": "2700.00",
            "Existencias": "3"
        },
        {
            "id": "5",
            "SKU": "T1MCG",
            "Nombre": "Tanque 1 molde con garrafa",
            "Descripcion corta": "Tanque para fabricar 40 paletas y 14L de nieve, o bien 80 paletas en 28min.",
            "Categoria Padre": "TANQUES PALETEROS EN ACERO INOXIDABLE",
            "Categorias Hijas": "Tanque Paletero Duales (nieve y paleta)",
            "Precio": "49344.83",
            "Precio + IVA": "57240.00",
            "Existencias": "3"
        },
        {
            "id": "7",
            "SKU": "T2MCG",
            "Nombre": "Tanque 2 moldes con garrafa",
            "Descripcion corta": "Tanque para fabricar 80 paletas y 14L de nieve, o bien 120 paletas en 28min.",
            "Categoria Padre": "TANQUES PALETEROS EN ACERO INOXIDABLE",
            "Categorias Hijas": "Tanque Paletero Duales (nieve y paleta)",
            "Precio": "57724.14",
            "Precio + IVA": "66960.00",
            "Existencias": "3"
        },
        {
            "id": "16",
            "SKU": "T2MSG",
            "Nombre": "Tanque 2 moldes sin garrafa",
            "Descripcion corta": "Tanque para fabricar 80 paletas en 28 minutos",
            "Categoria Padre": "TANQUES PALETEROS EN ACERO INOXIDABLE",
            "Categorias Hijas": "Tanque Paletero solo para paleta",
            "Precio": "57724.14",
            "Precio + IVA": "66960.00",
            "Existencias": "3"
        },
        {
            "id": "8",
            "SKU": "T3MCG",
            "Nombre": "Tanque 3 moldes con garrafa",
            "Descripcion corta": "Tanque para fabricar 120 paletas y 14L de nieve, o bien 160 paletas en 28min.",
            "Categoria Padre": "TANQUES PALETEROS EN ACERO INOXIDABLE",
            "Categorias Hijas": "Tanque Paletero Duales (nieve y paleta)",
            "Precio": "72620.69",
            "Precio + IVA": "84240.00",
            "Existencias": "3"
        },
        {
            "id": "17",
            "SKU": "T3MSG",
            "Nombre": "Tanque 3 moldes sin garrafa",
            "Descripcion corta": "Tanque para fabricar 120 paletas en 28 minutos",
            "Categoria Padre": "TANQUES PALETEROS EN ACERO INOXIDABLE",
            "Categorias Hijas": "Tanque Paletero solo para paleta",
            "Precio": "53068.97",
            "Precio + IVA": "61560.00",
            "Existencias": "3"
        },
        {
            "id": "9",
            "SKU": "T4MCG",
            "Nombre": "Tanque 4 moldes con garrafa",
            "Descripcion corta": "Tanque para fabricar 160 paletas y 14L de nieve, o bien 200 paletas en 28min.",
            "Categoria Padre": "TANQUES PALETEROS EN ACERO INOXIDABLE",
            "Categorias Hijas": "Tanque Paletero Duales (nieve y paleta)",
            "Precio": "85655.17",
            "Precio + IVA": "99360.00",
            "Existencias": "3"
        },
        {
            "id": "18",
            "SKU": "T4MSG",
            "Nombre": "Tanque 4 moldes sin garrafa",
            "Descripcion corta": "Tanque para fabricar 160 paletas en 28 minutos",
            "Categoria Padre": "TANQUES PALETEROS EN ACERO INOXIDABLE",
            "Categorias Hijas": "Tanque Paletero solo para paleta",
            "Precio": "77275.86",
            "Precio + IVA": "89640.00",
            "Existencias": "3"
        },
        {
            "id": "12",
            "SKU": "T5MCG",
            "Nombre": "Tanque5 moldes con garrafa",
            "Descripcion corta": "Tanque para fabricar 200 paletas y 14L de nieve, o bien 240 paletas en 28min.",
            "Categoria Padre": "TANQUES PALETEROS EN ACERO INOXIDABLE",
            "Categorias Hijas": "Tanque Paletero Duales (nieve y paleta)",
            "Precio": "88448.28",
            "Precio + IVA": "102600.00",
            "Existencias": "3"
        },
        {
            "id": "19",
            "SKU": "T5MSG",
            "Nombre": "Tanque 5 moldes sin garrafa",
            "Descripcion corta": "Tanque para fabricar 200 paletas y 14L de nieve, o bien 200 paletas en 28min.",
            "Categoria Padre": "TANQUES PALETEROS EN ACERO INOXIDABLE",
            "Categorias Hijas": "Tanque Paletero solo para paleta",
            "Precio": "83793.10",
            "Precio + IVA": "97200.00",
            "Existencias": "3"
        },
        {
            "id": "14",
            "SKU": "T8MCG",
            "Nombre": "Tanque 8 moldes con garrafa",
            "Descripcion corta": "Tanque para fabricar 200 paletas y 14L de nieve, o bien 240 paletas en 28min.",
            "Categoria Padre": "TANQUES PALETEROS EN ACERO INOXIDABLE",
            "Categorias Hijas": "Tanque Paletero Duales (nieve y paleta)",
            "Precio": "0.00",
            "Precio + IVA": "0.00"
        },
        {
            "id": "63",
            "SKU": "TALDMKT",
            "Nombre": "TALADRO PARA FRUTA",
            "Descripcion corta": "Esmeriladora angular eléctrica marca Makita para la trituración de fruta y producto suave para la fabricación de helados y paletas.",
            "Categoria Padre": "ACCESORIOS",
            "Categorias Hijas": "Moledores",
            "Precio": "4655.17",
            "Precio + IVA": "5400.00",
            "Existencias": "3"
        },
        {
            "id": "0",
            "SKU": "TANQUES",
            "Nombre": "Tanques Alta Producción",
            "Descripcion corta": "Tanques a partir de 10 moldes paleteros, con una o más garrafas",
            "Categoria Padre": "TANQUES PALETEROS EN ACERO INOXIDABLE",
            "Categorias Hijas": "Tanque Paletero Duales (nieve y paleta)",
            "Precio": "0.00",
            "Precio + IVA": "0.00"
        },
        {
            "id": "38",
            "SKU": "TRCB",
            "Nombre": "Triciclo con caja bocona",
            "Descripcion corta": "Triciclo paletero con caja bocona, maneral cromado y cartuchos incluídos",
            "Categoria Padre": "CARRITOS Y CAJAS PALETAS",
            "Categorias Hijas": "Carros paleteros",
            "Precio": "8379.31",
            "Precio + IVA": "9720.00",
            "Existencias": "3"
        }
    ]
}';

$products_array = json_decode($products, true);
$count = 0;
/*
foreach ($products_array['Hoja2'] as $key => $product) {
	$id_product = (int) $product['id'];
	$price = (float) $product['Precio'];
	$quantity =(int) $product['Existencias'];

	$product = New Product($id_product);
	$product->price = $price;
	$product->id_tax_rules_group = 1;
	$product->update();
	$count = $count + 1;
}
*/
echo "Me da weba actualizar los ". $count ."productos." ;
