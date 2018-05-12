SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS techcorrweb23;

USE techcorrweb23;

DROP TABLE IF EXISTS administrador;

CREATE TABLE `administrador` (
  `id` varchar(15) NOT NULL,
  `passwor` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `privilegio` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO administrador VALUES("armando","123","dsagjjk@asdas","ghjhg","administrador");
INSERT INTO administrador VALUES("armandogh","123","as@fsefadsf","asadcbhaq","administrador2");
INSERT INTO administrador VALUES("armandojesus","123","asd@asdasg.com","armandojesus","administrador");
INSERT INTO administrador VALUES("jesus","123","as@fasdas.com","aasdc","administrador2");



DROP TABLE IF EXISTS bajacpu;

CREATE TABLE `bajacpu` (
  `folio` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `fechabaja` date NOT NULL,
  `observaciones` varchar(150) NOT NULL,
  PRIMARY KEY (`folio`),
  KEY `serie` (`serie`),
  CONSTRAINT `bajacpu_ibfk_1` FOREIGN KEY (`serie`) REFERENCES `regcpu` (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO bajacpu VALUES("1234","asd","23","2017-11-21","asdfasdfsadf");



DROP TABLE IF EXISTS bajadisp;

CREATE TABLE `bajadisp` (
  `folio` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `fechabaja` date NOT NULL,
  `observacion` varchar(20) NOT NULL,
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO bajadisp VALUES("11111","fasdrf2fasdfasdf","23fqsdf","2017-11-26","sdfasdfasdfasdf");



DROP TABLE IF EXISTS bajahdd;

CREATE TABLE `bajahdd` (
  `folio` varchar(20) NOT NULL,
  `serie` varchar(29) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `fechabaja` date NOT NULL,
  `observaciones` varchar(150) NOT NULL,
  PRIMARY KEY (`folio`),
  KEY `serie` (`serie`),
  CONSTRAINT `bajahdd_ibfk_1` FOREIGN KEY (`serie`) REFERENCES `reghdd` (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO bajahdd VALUES("234","3245243","sdfgsdfgds","2017-11-21","addfadfsaf");



DROP TABLE IF EXISTS bajaimp;

CREATE TABLE `bajaimp` (
  `folio` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `fechabaja` date NOT NULL,
  `observaciones` varchar(150) NOT NULL,
  PRIMARY KEY (`folio`),
  KEY `serie` (`serie`),
  CONSTRAINT `bajaimp_ibfk_1` FOREIGN KEY (`serie`) REFERENCES `regimpresora` (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO bajaimp VALUES("2342342","fasd","qwd","2017-11-21","fasdfasdfasdf");
INSERT INTO bajaimp VALUES("345","fasd","qwd","2017-11-15","sdfasdfa");



DROP TABLE IF EXISTS bajalap;

CREATE TABLE `bajalap` (
  `folio` varchar(10) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `fechabaja` date NOT NULL,
  `observaciones` varchar(150) NOT NULL,
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO bajalap VALUES("1112","1234123","asdf","2017-11-20","asdfasdfasdf");
INSERT INTO bajalap VALUES("123","12312","hp","2017-11-21","asdasdasdasdada");
INSERT INTO bajalap VALUES("123123","asd","asdf","2017-11-22","asdfasdfasdf");
INSERT INTO bajalap VALUES("1234","asd","asdas","2017-11-21","asdasdasdasdas");
INSERT INTO bajalap VALUES("qwe","1234123","asdf","2017-11-20","asdfasdfadsfas");



DROP TABLE IF EXISTS bajamonitor;

CREATE TABLE `bajamonitor` (
  `folio` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `fechabaja` date NOT NULL,
  `observaciones` varchar(150) NOT NULL,
  PRIMARY KEY (`folio`),
  KEY `serie` (`serie`),
  CONSTRAINT `bajamonitor_ibfk_1` FOREIGN KEY (`serie`) REFERENCES `regmonitor` (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO bajamonitor VALUES("111","asd","asd","2017-11-23","asdfasdfsadf");



DROP TABLE IF EXISTS bajamouse;

CREATE TABLE `bajamouse` (
  `folio` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `fechabaja` date NOT NULL,
  `observaciones` varchar(150) NOT NULL,
  PRIMARY KEY (`folio`),
  KEY `serie` (`serie`),
  CONSTRAINT `bajamouse_ibfk_1` FOREIGN KEY (`serie`) REFERENCES `regmouse` (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO bajamouse VALUES("1111","234","asdf","2017-11-23","asdasdasdasd");



DROP TABLE IF EXISTS bajanbrk;

CREATE TABLE `bajanbrk` (
  `folio` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `fechabaja` date NOT NULL,
  `observaciones` varchar(150) NOT NULL,
  PRIMARY KEY (`folio`),
  KEY `serie` (`serie`),
  CONSTRAINT `bajanbrk_ibfk_1` FOREIGN KEY (`serie`) REFERENCES `regnbrk` (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO bajanbrk VALUES("123","345345","234234","2017-11-10","asdfa");
INSERT INTO bajanbrk VALUES("123123123","asdfasdf","asdfasdf","2017-11-23","asdfasdfsadf");
INSERT INTO bajanbrk VALUES("1234234","345345","234234","2017-11-23","asdfsa");
INSERT INTO bajanbrk VALUES("234","asdfasdf","asdfasdf","2017-11-23","asdfasdf");
INSERT INTO bajanbrk VALUES("3","345345","234234","2017-11-16","asdfasdf");
INSERT INTO bajanbrk VALUES("345","asdfasdf","asdfasdf","2017-11-15","gsdfgsfgdfg");



DROP TABLE IF EXISTS bajateclado;

CREATE TABLE `bajateclado` (
  `folio` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `fechabaja` date NOT NULL,
  `observaciones` varchar(150) NOT NULL,
  PRIMARY KEY (`folio`),
  KEY `serie` (`serie`),
  CONSTRAINT `bajateclado_ibfk_1` FOREIGN KEY (`serie`) REFERENCES `regteclado` (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO bajateclado VALUES("234234","asd","23sd","2017-11-23","fasdfasdfassdf");



DROP TABLE IF EXISTS entregalaptop;

CREATE TABLE `entregalaptop` (
  `serieentrega` varchar(20) NOT NULL,
  `claveuser` varchar(20) NOT NULL,
  `fecharegistro` date NOT NULL,
  `tipodispositivo` varchar(20) NOT NULL,
  `proyecto` varchar(20) NOT NULL,
  `seriedisp` varchar(20) NOT NULL,
  `seriehdd` varchar(20) NOT NULL,
  `serieimpresora` varchar(20) NOT NULL,
  `seriemonitor` varchar(20) NOT NULL,
  `seriemouse` varchar(20) NOT NULL,
  `seriereg` varchar(20) NOT NULL,
  `serielap` varchar(20) NOT NULL,
  PRIMARY KEY (`serieentrega`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO entregalaptop VALUES("123","TCSASDasd","2017-12-12","equipo de laptop","gh","fgwe4swer","asdf24","asdf2d4","sdf3rfg","df2efa","edf24faq","2342342");
INSERT INTO entregalaptop VALUES("1234asasdg","tcs-cf-arman","2017-12-17","equipo de laptop","dgasdvasdvasd","sdfgfwfsdf","asdfasdfasdfqwwqdcas","123asdfasdfsadf","qdfasdfasdfaasdfsdf","123SFADFD23234234234","asdfasdfwdadf","1863776676");



DROP TABLE IF EXISTS equipodecomputo;

CREATE TABLE `equipodecomputo` (
  `seriecomp` varchar(20) NOT NULL,
  `claveuser` varchar(20) NOT NULL,
  `fecharegistro` date NOT NULL,
  `tipodispositivo` varchar(20) NOT NULL,
  `proyecto` varchar(20) NOT NULL,
  `seriedisp` varchar(20) NOT NULL,
  `seriehdd` varchar(20) NOT NULL,
  `serieimpresora` varchar(20) NOT NULL,
  `seriemonitor` varchar(20) NOT NULL,
  `seriemouse` varchar(20) NOT NULL,
  `seriereg` varchar(20) NOT NULL,
  `seriet` varchar(20) NOT NULL,
  `seriecpu` varchar(20) NOT NULL,
  PRIMARY KEY (`seriecomp`),
  KEY `claveuser` (`claveuser`),
  KEY `seriecpu` (`seriecpu`),
  KEY `seriedisp` (`seriedisp`),
  KEY `seriehdd` (`seriehdd`),
  KEY `serieimpresora` (`serieimpresora`),
  KEY `seriemonitor` (`seriemonitor`),
  KEY `seriemouse` (`seriemouse`),
  KEY `seriereg` (`seriereg`),
  KEY `seriet` (`seriet`),
  CONSTRAINT `equipodecomputo_ibfk_1` FOREIGN KEY (`seriecpu`) REFERENCES `regcpu` (`serie`),
  CONSTRAINT `equipodecomputo_ibfk_2` FOREIGN KEY (`seriedisp`) REFERENCES `regdisp` (`serie`),
  CONSTRAINT `equipodecomputo_ibfk_3` FOREIGN KEY (`seriehdd`) REFERENCES `reghdd` (`serie`),
  CONSTRAINT `equipodecomputo_ibfk_4` FOREIGN KEY (`serieimpresora`) REFERENCES `regimpresora` (`serie`),
  CONSTRAINT `equipodecomputo_ibfk_5` FOREIGN KEY (`seriemonitor`) REFERENCES `regmonitor` (`serie`),
  CONSTRAINT `equipodecomputo_ibfk_6` FOREIGN KEY (`seriemouse`) REFERENCES `regmouse` (`serie`),
  CONSTRAINT `equipodecomputo_ibfk_7` FOREIGN KEY (`seriereg`) REFERENCES `regnbrk` (`serie`),
  CONSTRAINT `equipodecomputo_ibfk_8` FOREIGN KEY (`seriet`) REFERENCES `regteclado` (`serie`),
  CONSTRAINT `equipodecomputo_ibfk_9` FOREIGN KEY (`claveuser`) REFERENCES `usuario` (`claveuser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO equipodecomputo VALUES("123","asd-asdf","2017-12-06","equipo de computo","dsghh","asdfasdf","asdfasdf","asdfasdf","asdfasdfads2332323","234","w3423rwqe","123daf","154");
INSERT INTO equipodecomputo VALUES("687","TCSASDasd","2017-12-07","equipo de computo","dfbv","zx","3245243","jkl","xfr","ahaz","asdfasdf","ser","234234234");
INSERT INTO equipodecomputo VALUES("sdsdfgsdfg","tcs-cf-arman","2017-12-17","equipo de computo","sdfvsd","dcas","asdv","bvasd","sdfh","asdgbq","dfghgefghfd","dfshwerths","dfg34");



DROP TABLE IF EXISTS formatoasiglap;

CREATE TABLE `formatoasiglap` (
  `folio` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `softwares` set('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','','','','') NOT NULL,
  `fechaentrega` date NOT NULL,
  `motivos` varchar(100) NOT NULL,
  `observacionesusuarios` varchar(100) NOT NULL,
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO formatoasiglap VALUES("14235","123","2017-12-12","3,5,7,9,12,13","0000-00-00","","");
INSERT INTO formatoasiglap VALUES("175431","1234asasdg","2017-12-17","2,3,4,5,7","0000-00-00","","");



DROP TABLE IF EXISTS formatoasignacion;

CREATE TABLE `formatoasignacion` (
  `folio` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `softwares` set('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18') NOT NULL,
  `fechaentrega` date DEFAULT NULL,
  `motivos` varchar(130) DEFAULT NULL,
  `observacionesusuario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`folio`),
  KEY `serie` (`serie`),
  CONSTRAINT `formatoasignacion_ibfk_1` FOREIGN KEY (`serie`) REFERENCES `equipodecomputo` (`seriecomp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO formatoasignacion VALUES("1206","687","2017-12-07","13,14,15,16","0000-00-00","","");
INSERT INTO formatoasignacion VALUES("678ijh","sdsdfgsdfg","2017-12-17","3,5,6,7,8,10","0000-00-00","","");



DROP TABLE IF EXISTS formatomantenimiento;

CREATE TABLE `formatomantenimiento` (
  `folio` varchar(20) NOT NULL,
  `fechamantenimiento` date NOT NULL,
  `fallas` varchar(100) NOT NULL,
  `respaldodatos` varchar(40) NOT NULL,
  `anomalias` varchar(120) NOT NULL,
  `proxmantenimiento` date NOT NULL,
  `observaciones` varchar(130) NOT NULL,
  `seriecomp` varchar(20) NOT NULL,
  `complementario` set('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21') NOT NULL,
  PRIMARY KEY (`folio`),
  KEY `seriecomp` (`seriecomp`),
  CONSTRAINT `formatomantenimiento_ibfk_1` FOREIGN KEY (`seriecomp`) REFERENCES `equipodecomputo` (`seriecomp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO formatomantenimiento VALUES("1206","2017-12-10","sdfgsdfg","sdfgsdfgsdfg","sdfgsdfgsdfg","2017-12-10","sdfgsdfgsdfg","687","1,3,7,12,19,20");
INSERT INTO formatomantenimiento VALUES("678ijh","2017-12-17","sagsdfgsdfgsdf","gdsfsdfgs","sdfgsdfgsd","2017-12-17","sdfgdfgdsfgsdfgsdfg","sdsdfgsdfg","1,3,5,6,13,20");



DROP TABLE IF EXISTS formatomantenimientolap;

CREATE TABLE `formatomantenimientolap` (
  `folio` varchar(20) NOT NULL,
  `fechamantenimiento` date NOT NULL,
  `fallas` varchar(130) NOT NULL,
  `respaldodatos` varchar(100) NOT NULL,
  `anomalias` varchar(100) NOT NULL,
  `proxmantenimiento` date NOT NULL,
  `observaciones` varchar(130) NOT NULL,
  `serieentrega` varchar(20) NOT NULL,
  `complementos` set('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','') NOT NULL,
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO formatomantenimientolap VALUES("14235","2017-12-13","asdfasdfadfadf","asdfasdfasdf","sadfasdfsadf","2017-12-13","asdfasdfasdfasdfasdf","123","1,3,5,6,7,12,13,14,15,17,19,20");
INSERT INTO formatomantenimientolap VALUES("175431","2017-12-17","sdafasdfasdfasdfasdfasdfasdfasdfasdfadfasdf","asdfasdfasdf","asdfasdfasdfsa","2017-12-17","asdfsadfasdfadfadfasdfsadf","1234asasdg","1,3,5,6,7,8,9,10,13,15,17,19,20");



DROP TABLE IF EXISTS regcpu;

CREATE TABLE `regcpu` (
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `seriecargador` varchar(20) NOT NULL,
  `procesador` varchar(20) NOT NULL,
  `tamanohdd` varchar(10) NOT NULL,
  `tamanoram` varchar(10) NOT NULL,
  `tiposo` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `asignado` varchar(2) NOT NULL,
  `estado` varchar(7) NOT NULL,
  `tipodisp` varchar(20) NOT NULL,
  `marcacargador` varchar(20) NOT NULL,
  `modelocargador` varchar(20) NOT NULL,
  PRIMARY KEY (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO regcpu VALUES("-","-","-","-","-","-","-","-","-","0000-00-00","-","baja","-","-","-");
INSERT INTO regcpu VALUES("lenovo","asd3","12345","asdfasd","345345","asdfadf","34gb","67gb","linux","2017-11-27","no","activo","cpu","hp","dcsd");
INSERT INTO regcpu VALUES("micro","la167388","1235323","asdasda","asd2fasdf","asdh13e4","45gb","23gb","windows","2017-12-17","no","activo","cpu","asdf2ea","asdf2dsah");
INSERT INTO regcpu VALUES("lenovo","xcvbw","154","negro","560398","corei7","45gb","332gb","linux","2017-11-29","si","activo","cpu","asxv","asf");
INSERT INTO regcpu VALUES("hp","asdfasdf","234234234","asdfsadfsa","235235","asdfa","45gb","23gb","asdtgr","2017-11-21","si","activo","cpu","asd","asdq");
INSERT INTO regcpu VALUES("sdfg","sdfgs","34534","sdfg","345","sd","45gb","34gb","sdfgsdfg","2017-11-20","no","baja","cpu","cfh","kjdf");
INSERT INTO regcpu VALUES("hdf","asdas","5698","negro","123464","dfgss","45gb","34gb","linux","2017-12-04","si","activo","cpu","fsw","rths");
INSERT INTO regcpu VALUES("alienware","xcvcxvb","76867","dsafg","hjdfg","hdfg","dfgh","546gb","234gb","2017-11-15","si","activo","cpu","vs","fvz");
INSERT INTO regcpu VALUES("asdf","23","asd","asd","asd","asd","asd","sdaf","asdf","2017-11-20","no","baja","cpu","kgf","fgb");
INSERT INTO regcpu VALUES("fgh456","dfgh4","dfg34","dfghh34","fdgh54","dfg34","34gb","42gb","sdfgsfe34","2017-12-12","si","activo","sdh","asdfw","asdfgaq");
INSERT INTO regcpu VALUES("asdfasd","asdfasd","sadfasdf","asdfasdf","dcasdsad","dwdwsa","34gb","23gb","asdfasdf","2017-12-17","no","activo","cpu","sdfg","sdfgs");



DROP TABLE IF EXISTS regdisp;

CREATE TABLE `regdisp` (
  `marca` varchar(11) NOT NULL,
  `modelo` varchar(11) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `seriecargador` varchar(20) NOT NULL,
  `procesador` varchar(20) NOT NULL,
  `tamanohdd` varchar(5) NOT NULL,
  `tamanoram` varchar(5) NOT NULL,
  `tiposo` varchar(20) NOT NULL,
  `maclan` varchar(30) NOT NULL,
  `macwlan` varchar(30) NOT NULL,
  `remotopass` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `asignado` varchar(2) NOT NULL,
  `estado` varchar(7) NOT NULL,
  `tipodisp` varchar(20) NOT NULL,
  PRIMARY KEY (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO regdisp VALUES("-","-","-","-","-","-","-","-","-","-","-","-","0000-00-00","-","-","-");
INSERT INTO regdisp VALUES("sadf","asd","asd","asd","ga","c","s","dg","asd","asdfasdfasdfasdfsadf","asdfasdfasdfsdfsdfsadfsadf","asdfasdfasdf","2017-12-17","no","activo","disp-comp");
INSERT INTO regdisp VALUES("asasd","asdfasdf","asdfasdf","asdfasdf","asdfasdf","asdfasd","casdc","asdfa","asdcsac","asdfawd","asdfsad","zxcvzxcv","2017-11-23","si","activo","disp-com");
INSERT INTO regdisp VALUES("asdfads","csa","dcas","dca","sdca","asd","4gb","23gb","asd","casdfas","asdfaasdf","aasdfasdf","2017-12-17","si","activo","disp-comp");
INSERT INTO regdisp VALUES("sdfg34","sdfb23","fgwe4swer","sefg34gs","dfg345s","sssdfg345s","34gb","23gb","sdfvb","sdfgseerg","sdfgsdfg","sdfgw3e4gsdf","2017-12-12","si","activo","disp-comp");
INSERT INTO regdisp VALUES("asdfasdf","sdfasdf","sdfasdf","asdfasdf","sadfasdf","asdfasdf","45gb","23gb","asdfsadf","sadfasdf","asdfasdf","asdfasdfasdf","2017-12-17","23","21gb","disp-comp");
INSERT INTO regdisp VALUES("dfvbw","sgdfgsdfd","sdfgfwfsdf","gsdfgsdfgsddf","sdfgwe","sdfgsdfg","wefgs","34gb","sdfgsdf","sdfgsfgsddfg","sddfdgsdfgsd","sdfgsdfgsdfgsdd","2017-12-17","si","activo","disp-com");
INSERT INTO regdisp VALUES("xc","df","we","hg","345sd","sd","45gb","43gb","asdf","34fasd","asdrf234r","asdfasdf","2017-12-07","si","activo","disp-comp");
INSERT INTO regdisp VALUES("c","sd","zx","gfs","sd","re","4f","sdf54","sdf","sdf","sdfv","asdfgwe","2017-12-07","si","activo","disp-comp");



DROP TABLE IF EXISTS reghdd;

CREATE TABLE `reghdd` (
  `descripcion` varchar(150) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `serie` varchar(29) NOT NULL,
  `color` varchar(20) NOT NULL,
  `capacidad` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `asignado` varchar(2) NOT NULL,
  `estado` varchar(6) NOT NULL,
  `tipodisp` varchar(20) NOT NULL,
  PRIMARY KEY (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO reghdd VALUES("-","-","-","-","-","-","0000-00-00","-","-","-");
INSERT INTO reghdd VALUES("sdfgsdfg","sdfgsdfg","sdfgsdfgds","3245243","sdsdf","45gb","2017-11-21","si","activo","hdd");
INSERT INTO reghdd VALUES("asdfasdf","asd","dcasd","asdf","asd","asdg","2017-12-17","no","activo","hdd");
INSERT INTO reghdd VALUES("sadv234fgasdgf","asdf2f3a","asdf12f4","asdf24","wqasd23","34gb","2017-12-12","si","activo","asdhaw4");
INSERT INTO reghdd VALUES("asas","asdasd","asdfasdf","asdfasdf","asdfasdf","asdfsadf","2017-11-21","si","activo","hdd");
INSERT INTO reghdd VALUES("asdfasdfsadf","asdfqwdfasdf","asdfasdfasdfasdfsadf","asdfasdfasdfqwwqdcas","asdfqfwefasd","34dv","2017-12-17","si","activo","hdd");
INSERT INTO reghdd VALUES("asdfasdfasdf","asdc","dev","asdv","asd","34gb","2017-12-17","si","activo","hdd");
INSERT INTO reghdd VALUES("345","sdfgsd","cvbs","hjgd","asdf","sdfjhs","2017-11-21","si","activo","hdd");



DROP TABLE IF EXISTS regimpresora;

CREATE TABLE `regimpresora` (
  `descripcion` varchar(150) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `asignado` varchar(2) NOT NULL,
  `estado` varchar(7) NOT NULL,
  `tipodisp` varchar(20) NOT NULL,
  PRIMARY KEY (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO regimpresora VALUES("-","-","-","-","-","0000-00-00","-","-","-");
INSERT INTO regimpresora VALUES("asdfasdf234","asd","asdfasdf","123asdfasdfsadf","asdfasdfasdf","2017-12-17","si","activo","impresora");
INSERT INTO regimpresora VALUES("impre","hp","7ffe","345","dfaz","2017-12-07","si","activo","mouse");
INSERT INTO regimpresora VALUES("sdafgsdfgvsdfgw3e","asdw2","fb3","asdf2d4","sdgv23","2017-12-12","si","activo","impresora");
INSERT INTO regimpresora VALUES("asdfasd","asdfasdf","asdfasdf","asdfasdf","asdfasdfsa","2017-11-21","si","activo","impresora");
INSERT INTO regimpresora VALUES("fadfasdf","sadfasdf","asdfasdfd","asx","ga","2017-12-17","no","activo","impresora");
INSERT INTO regimpresora VALUES("asdfasdfasdfa","asdgasdfasd","asdfasdf","bvasd","asdfasd","2017-12-17","si","activo","impresora");
INSERT INTO regimpresora VALUES("fgnvc","wer","qwd","fasd","impresora","2017-11-21","si","activo","impresora");
INSERT INTO regimpresora VALUES("dfgdsf","asfhj","kl","jkl","ghj","2017-12-07","si","activo","impresora");



DROP TABLE IF EXISTS reglaptop;

CREATE TABLE `reglaptop` (
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `serie` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `seriecargador` varchar(30) NOT NULL,
  `procesador` varchar(20) NOT NULL,
  `tamanohdd` varchar(10) NOT NULL,
  `tamanoram` varchar(10) NOT NULL,
  `tiposo` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `asignado` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `tipodisp` varchar(20) NOT NULL,
  `marcacargador` varchar(20) NOT NULL,
  `modelocargador` varchar(20) NOT NULL,
  PRIMARY KEY (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO reglaptop VALUES("-","-","-","-","-","-","-","-","-","0000-00-00","-","-","-","-","-");
INSERT INTO reglaptop VALUES("hp","pavilion","123434","negro","1335134","icore7","23gb","23gb","linux","2017-11-20","no","baja","laptop","sdfgsdfg","sdfgsdfgsdfg");
INSERT INTO reglaptop VALUES("pavilion","pavilion 22xi","1863776676","negro","135","dualcore","34gb","23gb","linux","2017-12-17","si","activo","laptop","kajshgf","1989273");
INSERT INTO reglaptop VALUES("alienware","asd","2342342","asdfas","23434234234","asdfasdf","34gb","34gb","linux","2017-11-22","si","activo","laptop","sdfdhsdf","sdfgsdfg");
INSERT INTO reglaptop VALUES("dfgs34","sdfgq234","sdfbvq3","fasdfv2","wwwwwdfgvsa","sdfgw","34gb","23gb","asdha","2017-12-12","no","activo","laptop","sdfgsdfgsdf","sdfgsdfgdsfgsd");



DROP TABLE IF EXISTS regmonitor;

CREATE TABLE `regmonitor` (
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `asignado` varchar(2) NOT NULL,
  `estado` varchar(7) NOT NULL,
  `tipodisp` varchar(20) NOT NULL,
  PRIMARY KEY (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO regmonitor VALUES("-","-","-","0000-00-00","-","-","-");
INSERT INTO regmonitor VALUES("hp","pavillion 22xi","123456","2017-12-07","si","activo","monitor");
INSERT INTO regmonitor VALUES("222","asd","asd","2017-11-30","si","activo","monitor");
INSERT INTO regmonitor VALUES("asdf","sd2fdsadf","asdfasdfads2332323","2017-11-14","si","activo","monitor");
INSERT INTO regmonitor VALUES("fdsf","dc","casd","2017-12-17","no","activo","monitor");
INSERT INTO regmonitor VALUES("hp","asd2s","qdfasdfasdfaasdfsdf","2017-12-17","si","activo","monitor");
INSERT INTO regmonitor VALUES("ghd","fgb4","sdf3rfg","2017-12-12","si","activo","monitor");
INSERT INTO regmonitor VALUES("dsfgsdf","sdfgsdfv","sdfh","2017-12-17","si","activo","monitor");
INSERT INTO regmonitor VALUES("ghd","asdgfc","xfr","2017-12-07","si","activo","monitor");



DROP TABLE IF EXISTS regmouse;

CREATE TABLE `regmouse` (
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `asignado` varchar(2) NOT NULL,
  `estado` varchar(7) NOT NULL,
  `tipodisp` varchar(20) NOT NULL,
  PRIMARY KEY (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO regmouse VALUES("-","-","-","0000-00-00","-","-","-");
INSERT INTO regmouse VALUES("techzone","tz15m22-ROJO","123SFADFD23234234234","2017-12-17","si","activo","mouse");
INSERT INTO regmouse VALUES("hp","asdf","234","2017-11-23","si","activo","mouse");
INSERT INTO regmouse VALUES("cv","bh","ahaz","2017-12-07","si","activo","mouse");
INSERT INTO regmouse VALUES("asdf","asdf","asdf","2017-11-21","si","activo","mouse");
INSERT INTO regmouse VALUES("fg","asd","asdfasdf","2017-12-17","no","activo","mouse");
INSERT INTO regmouse VALUES("asdb","dgqa","asdgbq","2017-12-17","si","activo","mouse");
INSERT INTO regmouse VALUES("bvs","egtr3","df2efa","2017-12-12","si","activo","mouse");



DROP TABLE IF EXISTS regnbrk;

CREATE TABLE `regnbrk` (
  `descripcion` varchar(150) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `asignado` varchar(2) NOT NULL,
  `estado` varchar(7) NOT NULL,
  `tipodisp` varchar(20) NOT NULL,
  PRIMARY KEY (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO regnbrk VALUES("-","-","-","-","0000-00-00","-","-","-");
INSERT INTO regnbrk VALUES("cvbcvb","asdf","234234","345345","2017-11-23","si","activo","reg-nbrk");
INSERT INTO regnbrk VALUES("asdfasdf","asdfasdf","asdfasdf","asdfasdf","2017-11-25","si","activo","reg-nbrk");
INSERT INTO regnbrk VALUES("SADFGASDfasdfa","asdfasdf3d","2e3fasdf","asdfasdfwdadf","2017-12-17","si","activo","reg-nbrk");
INSERT INTO regnbrk VALUES("fhgfdghdfghfd","fdhdfghdfgh","dfghdfgh","dfghgefghfd","2017-12-17","si","activo","reg-nbrk");
INSERT INTO regnbrk VALUES("asdfgasdfasdfasdfadfqwrgsdv","erc","dva23","edf24faq","2017-12-12","si","activo","reg-nbrk");
INSERT INTO regnbrk VALUES("fdfasdfasdf","asdfasdf","as","gasd","2017-12-17","no","activo","reg-nbrk");
INSERT INTO regnbrk VALUES("as","asdagagag","23esdas","w3423rwqe","2017-11-26","si","activo","reg-nbrk");



DROP TABLE IF EXISTS regteclado;

CREATE TABLE `regteclado` (
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `asignado` varchar(2) NOT NULL,
  `estado` varchar(7) NOT NULL,
  `tipodisp` varchar(20) NOT NULL,
  PRIMARY KEY (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO regteclado VALUES("-","-","-","0000-00-00","-","-","-");
INSERT INTO regteclado VALUES("mv","asdfasdf","123daf","2017-11-23","si","activo","teclado");
INSERT INTO regteclado VALUES("easy","asdkfjio2","23efasdf","2017-12-17","si","activo","teclado");
INSERT INTO regteclado VALUES("bw","2dgf","2exg86t","2017-12-12","si","activo","teclado");
INSERT INTO regteclado VALUES("asdfasd","23sd","asd","2017-11-22","si","activo","teclado");
INSERT INTO regteclado VALUES("vvc","sdfg","dfshwerths","2017-12-17","si","activo","teclado");
INSERT INTO regteclado VALUES("df","dg","ser","2017-12-07","si","activo","teclado");



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `proceso` varchar(20) NOT NULL,
  `claveuser` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `numerotel` bigint(10) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  PRIMARY KEY (`claveuser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO usuario VALUES("TCS-OI","asd-asdf","asdf asd","asd asd","2147483647","asdfasdfasdfsa");
INSERT INTO usuario VALUES("TCA-AL","tca-al-armando","armando sad","sarmiento","9321159734","asd");
INSERT INTO usuario VALUES("TCS-CF","tcs-cf-arman","SAFAS","sdgo","9321156786","asg");
INSERT INTO usuario VALUES("TCS-SE","TCSASDasd","asd","asdg","2147483647","mngv");



SET FOREIGN_KEY_CHECKS=1;