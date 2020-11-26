-- MariaDB dump 10.17  Distrib 10.4.6-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: eneatipos
-- ------------------------------------------------------
-- Server version	10.4.6-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `casos`
--

DROP TABLE IF EXISTS `casos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eneagrama` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casos`
--

LOCK TABLES `casos` WRITE;
/*!40000 ALTER TABLE `casos` DISABLE KEYS */;
/*!40000 ALTER TABLE `casos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fulltest`
--

DROP TABLE IF EXISTS `fulltest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fulltest` (
  `fulltest` int(11) NOT NULL AUTO_INCREMENT,
  `preguntas` varchar(100) DEFAULT NULL,
  `timestamps` varchar(45) NOT NULL,
  PRIMARY KEY (`fulltest`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fulltest`
--

LOCK TABLES `fulltest` WRITE;
/*!40000 ALTER TABLE `fulltest` DISABLE KEYS */;
/*!40000 ALTER TABLE `fulltest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_09_23_230258_create_casos_table',1),(5,'2019_09_23_230331_create_preguntas_table',1),(6,'2019_09_23_230402_create_respuestas_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pregunta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas`
--

LOCK TABLES `preguntas` WRITE;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` VALUES (1,'2019-09-24 02:23:56','2019-09-24 02:23:56','Soy una persona honrada.'),(2,'2019-09-24 02:26:12','2019-09-24 02:26:12','Con frecuencia estoy lleno de dudas.'),(3,'2019-09-24 02:26:32','2019-09-24 02:26:32','Con frecuencia he sido posesivo con mis seres queridos.'),(4,'2019-09-24 02:26:46','2019-09-24 02:26:46','Con frecuencia me enfado conmigo mismo por no hacer mejor las cosas.'),(5,'2019-09-24 02:27:44','2019-09-24 02:27:44','Desde el punto de vista intelectual, me gusta sintetizar y reunir ideas diferentes.'),(6,'2019-09-24 02:29:49','2019-09-24 02:29:49','Disfruto en el ejercicio del poder.'),(7,'2019-09-24 22:16:41','2019-09-24 22:16:41','En la vida hay pocas cosas que no disfrute.'),(8,NULL,NULL,'Es muy importante para mi la lealtad al grupo.'),(9,NULL,NULL,'Generalmente sigo la línea de menor resistencia.'),(10,NULL,NULL,'La armonía y la aceptación han sido valores importantes para mí.'),(11,NULL,NULL,'La mayor parte del tiempo evito dedicarme a problemas graves.'),(12,NULL,NULL,'La mayoría de la gente no tiene sentimientos profundos como los míos.'),(13,NULL,NULL,'La mayoría de la gente no tiene sentimientos profundos como los míos.'),(14,NULL,NULL,'Me acusan de ser dramático, pero en realidad no me comprenden.'),(15,NULL,NULL,'La mayoría de la gente no tiene sentimientos profundos como los míos.'),(16,NULL,NULL,'Me acusan de ser dramático, pero en realidad no me comprenden.'),(17,NULL,NULL,'Me cuesta relajarme y estar alegre.'),(18,NULL,NULL,'Me disgusta que me digan que no marcha bien lo que estoy haciendo.'),(19,NULL,NULL,'Me encuentro a mí mismo pasando por altibajos: o bien estoy muy elevado o muy bajo. En el medio no me siento vivo.'),(20,NULL,NULL,'Me esfuerzo en hacer que se respete mi libertad y mi independencia.'),(21,NULL,NULL,'Me gusta sentirme una persona juguetona, infantil.'),(22,NULL,NULL,'Me gusta tener objetivos claros y saber en qué punto del camino hacia esos objetivos me encuentro.'),(23,NULL,NULL,'Me gusta tener tiempo para no hacer nada.'),(24,NULL,NULL,'Me identifico con la precisión y la profesionalidad.'),(25,NULL,NULL,'Mi calma y lentitud pueden irritar a los demás.'),(26,NULL,NULL,'Mi deseo de ayudar ha repercutido en mi propia salud y bienestar.'),(27,NULL,NULL,'Mi medio ambiente es muy importante para mí.'),(28,NULL,NULL,'No creo tener muchas necesidades.'),(29,NULL,NULL,'No me importa sacrificarme por los demás, con tal de hacerlos felices.'),(30,NULL,NULL,'Algunas personas me consideran superficial.'),(31,NULL,NULL,'Normalmente me preocupa que alguien se aproveche de mí, cuando bajo la guardia.'),(32,NULL,NULL,'Para lograr el éxito, a veces hay que poner entre paréntesis las propias normas.'),(33,NULL,NULL,'Para mí es muy importante proyectar una imagen triunfadora.'),(34,NULL,NULL,'Para mí, la justicia y la injusticia son palabras claves.'),(35,NULL,NULL,'Protejo a quienes se encuentran bajo mi autoridad.'),(36,NULL,NULL,'Sin leyes estrictas, es difícil decir lo que tienen que hacer las personas.'),(37,NULL,NULL,'Soy un buen colaborador y los demás pueden fiarse de mí.'),(38,NULL,NULL,'Soy una persona extremadamente tratable.'),(39,NULL,NULL,'Soy una persona metódica y organizada.'),(40,NULL,NULL,'Suelo guardar mis sentimientos para mí.'),(41,NULL,NULL,'Suelo ser muy entusiasta en cuanto al futuro.'),(42,NULL,NULL,'Tengo dificultad para aceptar y expresar mi lado tierno, agradable, suave, femenino.'),(43,NULL,NULL,'Tiendo a cuidar los detalles, el orden y la precisión.'),(44,NULL,NULL,'Tiendo a ser una persona tacaña con mi tiempo, mi dinero y mi yo.'),(45,NULL,NULL,'Trato de resolver mis problemas pensando.');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntas_largo`
--

DROP TABLE IF EXISTS `preguntas_largo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntas_largo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=174 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas_largo`
--

LOCK TABLES `preguntas_largo` WRITE;
/*!40000 ALTER TABLE `preguntas_largo` DISABLE KEYS */;
INSERT INTO `preguntas_largo` VALUES (1,'A menudo el defecto final arruina el conjunto.'),(2,'A menudo hay personas que se me acercan pidiéndome que las conforte y las aconseje.'),(3,'A menudo me molesta que las cosas no marchen como debieran.'),(4,'A menudo me siento atrás para observar a los demás, en lugar de involucrarme en la acción.'),(5,'A menudo me siento que el tiempo pasa rápido y que queda demasiado por hacer.'),(6,'A menudo, me cuesta, alcanzar o pedir lo que necesito.'),(7,'A veces he irritado a los demás por ser una persona demasiado agresiva.'),(8,'A veces me siento victima de otros, como si me utilizasen.'),(9,'Algunas personas me consideran superficial.'),(10,'Ante la presión de los demás me vuelvo una persona huidiza.'),(11,'Antes de tomar una decisión, obtengo información adicional para estar seguro que estoy preparado.'),(12,'Casi me siento obligado a ser una persona honrada.'),(13,'Casi siempre estoy calmado y tranquilo.'),(14,'Con frecuencia estoy lleno de dudas.'),(15,'Con frecuencia me enfado conmigo mismo por no hacer mejor las cosas.'),(16,'Con frecuencia me siento frustrado porque ni yo ni los demás somos como debiéramos.'),(17,'Con frecuencia mis propias críticas y las de otros pululan en mi cabeza.'),(18,'Con frecuencia, suelo actuar con sentido del deber y responsabilidad.'),(19,'Creo que las apariencias son importantes.'),(20,'Creo que los demás se crean sus propios problemas.'),(21,'Creo que merezco estar en primer término en la vida de algunos, por todo lo que he hecho por ellos.'),(22,'Creo que necesito lograr muchas cosas para que los demás me aprecien.'),(23,'Cuando alguien no me cae bien, normalmente he intentado ser cordial a pesar de mis sentimientos.'),(24,'Cuando he temido que las necesidades y demandas de los demás me superasen, he evitado la intimidad.'),(25,'Cuando me presionan me pongo irascible y tenso.'),(26,'Cuando me siento inseguro reacciono volviéndome terco y poniéndome a la defensiva.'),(27,'Cuando miro mi pasado suelo recordar más, lo que hice bien, que lo que hice mal.'),(28,'Cuando no me siento bien, me aislo.'),(29,'Cuando tengo tiempo libre, me dedico con frecuencia a ayudar a los demás.'),(30,'Desde el punto de vista intelectual, me gusta sintetizar y reunir ideas diferentes.'),(31,'Disfruto en el ejercicio del poder.'),(32,'EI contacto con la naturaleza me ayuda a relajarme.'),(33,'En general, prefiero estar implicado en el desarrollo de una operación que observar como marcha.'),(34,'En la vida hay pocas cosas que no disfrute.'),(35,'Es muy importante para mi la lealtad al grupo.'),(36,'Generalmente me lleva bastante tiempo empezar o hacer algo.'),(37,'Generalmente sigo la línea de menor resistencia.'),(38,'Gran parte de mis éxitos se debieron a mi capacidad de dar una buena impresión.'),(39,'Habitualmente he hecho lo que quería hacer.'),(40,'Hay días en que la vida es maravillosa y otros en que resulta insoportable.'),(41,'He sido una persona demasiado confiada y permisiva conmigo misma.'),(42,'La armonía y la aceptación han sido valores importantes para mí.'),(43,'La gente ha confiado en mí porque soy una persona justa y hago lo que es correcto.'),(44,'La gente suele pensar que soy el alma de las reuniones.'),(45,'La mayor parte del tiempo evito dedicarme a problemas graves.'),(46,'La mayoría de la gente se preocupa demasiado por las cosas.'),(47,'La prudencia es una virtud muy importante para mí.'),(48,'Las artes y la expresión artística son muy importantes para mí como medio para canalizar emociones.'),(49,'Las cosas siempre funcionan de la mejor manera posible.'),(50,'Las primeras impresiones son muy importantes.'),(51,'ldealizo a las personas cuando están lejos.'),(52,'Los demás se han interesado en mí porque soy extrovertido y me intereso y comprometo por ellos.'),(53,'Me acusan de ser distante.'),(54,'Me acusan de ser dramático, pero en realidad no me comprenden.'),(55,'Me adapto con facilidad a las situaciones.'),(56,'Me comunico con mis amigos más a menudo de lo que ellos se comunican conmigo.'),(57,'Me considero una persona especial.'),(58,'Me cuesta dejar que las cosas sigan su curso.'),(59,'Me da la sensación de que siempre estoy luchando con mis miedos.'),(60,'Me da la sensación que tengo que ser perfecto para que otros me amen o quieran.'),(61,'Me disgusta que me digan que no marcha bien lo que estoy haciendo.'),(62,'Me doy cuenta de donde reside el poder en un grupo.'),(63,'Me doy cuenta rápidamente de los puntos débiles de los demás y los ataco si me provocan.'),(64,'Me encuentro a mí mismo pasando por altibajos: o bien estoy muy elevado o muy bajo. En el medio no me siento vivo.'),(65,'Me enojo cuando los demás no escuchan lo que tengo para decirles.'),(66,'Me es muy difícil ir en contra de lo dispuesto por la autoridad.'),(67,'Me fastidia que me perturben.'),(68,'Me fastidian las personas que no son lógicas.'),(69,'Me gusta considerar las ramificaciones cósmicas de los hechos, la importancia universal de lo que ocurre.'),(70,'Me gusta estar seguro antes de actuar.'),(71,'Me gusta más trabajar sólo, que en equipo.'),(72,'Me gusta mucho el teatro y fantaseo como si estuviese en escena.'),(73,'Me gusta que la gente me necesite.'),(74,'Me gusta sentirme una persona juguetona, infantil.'),(75,'Me gusta ser protagonista.'),(76,'Me gusta tener objetivos claros y saber en qué punto del camino hacia esos objetivos me encuentro.'),(77,'Me gusta tener tiempo para no hacer nada.'),(78,'Me gusta trabajar en equipo y ser un buen miembro del mismo.'),(79,'Me gusta ver las cosas en perspectiva retroceder e incluirlo todo.Si dejo algo fuera me acuso de ser simplista e ingenuo'),(80,'Me gustan las situaciones que provocan sensaciones intensas y profundas.'),(81,'Me gustaría que los demás estuviesen mejor dispuestos respecto a todo.'),(82,'Me he inclinado a actuar, basándome en mis sentimientos.'),(83,'Me he inclinado a no imponerme lo suficiente ante los demás.'),(84,'Me he inclinado a ser demasiado emotivo y poco disciplinado.'),(85,'Me he sentido orgulloso de mantener mis puntos de vista, soy firme y congruente con lo que creo.'),(86,'Me he sentido orgulloso de mi capacidad para ser flexible.'),(87,'Me he sentido orgulloso de ser una persona objetiva y clara.'),(88,'Me he volcado, sobre todo, hacia el riesgo y la aventura.'),(89,'Me identifico con la precisión y la profesionalidad.'),(90,'Me identifico tanto con mi trabajo o rol que me olvido de quién soy.'),(91,'Me importan mucho los problemas emocionales.'),(92,'Me muestro ante los demás como una persona más preocupada por ellos de lo que realmente estoy.'),(93,'Me olvido fácilmente de lo que me produce dolor.'),(94,'Me parece natural ser capaz de organizar cosas y terminarlas.'),(95,'Me parece que el fin de una relación me afecta más que a la mayoría.'),(96,'Me parece que siento el peligro y la amenaza más que otras personas.'),(97,'Me precio de ser una persona estable.'),(98,'Me quedo mudo cuando me encuentro en situaciones embarazosas o cuando alguien me pregunta como me siento.'),(99,'Me resulta difícil aceptar compromisos a largo plazo.'),(100,'Me resulta fácil expresar mi insatisfacción.'),(101,'Mi actitud de servicio me lleva a una dedicación activa, poniendo todo mi tiempo y esfuerzo.'),(102,'Mi calma y lentitud pueden irritar a los demás.'),(103,'Mi deseo de ayudar ha repercutido en mi propia salud y bienestar.'),(104,'Mi medio ambiente es muy importante para mí.'),(105,'Mi sentido del deber me lleva a sacrificar el tiempo dedicado al ocio y al descanso.'),(106,'Mis valores y estilo de vida han cambiado varias veces a lo largo de los años.'),(107,'Muchas veces me encuentro sobrecargado por la dependencia de otros respecto de mí.'),(108,'Necesito contacto con los demás para sentirme vivo.'),(109,'Necesito estimulación exterior para moverme.'),(110,'Necesito gran cantidad de espacio y de tiempos privados.'),(111,'Necesito ser importante en la vida de otras personas.'),(112,'No creo que sea bueno estar triste mucho tiempo.'),(113,'No creo tener muchas necesidades.'),(114,'No hay nada tan urgente, que no pueda esperar hasta mañana.'),(115,'No me gusta estar arrinconado.'),(116,'No me gusta que me digan que me adapte o me conforme.'),(117,'No me importa sacrificarme por los demás, con tal de hacerlos felices.'),(118,'No merece la pena molestarse por la mayor parte de las cosas de la vida.'),(119,'No sé como participar en conversaciones intrascendentes.'),(120,'No soporto a quien cambia de ropas en función de las conveniencias.'),(121,'No trato de imponer mis ¡deas a los demás, pero si lo hago es por su bien.'),(122,'Normalmente he sido una persona demasiado intransigente y exigente con los demás.'),(123,'Normalmente me preocupa que alguien se aproveche de mí, cuando bajo la guardia.'),(124,'Noto enseguida si algo no funciona o está fuera de lugar.'),(125,'Otras personas me envidian porque hago muchas cosas.'),(126,'Para lograr el éxito, a veces hay que poner entre paréntesis las propias normas.'),(127,'Para mí es importante actuar correctamente.'),(128,'Para mí es muy importante proyectar una imagen triunfadora.'),(129,'Para mí ha sido más importante disfrutar de la seguridad que desarrollar mis propios intereses.'),(130,'Para mí no es problema tomar decisiones.'),(131,'Para mí, la justicia y la injusticia son palabras claves.'),(132,'Parece que veo todo en términos de correcto o equivocado, bueno o malo.'),(133,'Pienso durante mucho tiempo porque necesito explorar exhaustivamente las diversas opciones.'),(134,'Pongo mas interés en servir a los demás que en cualquier cosa.'),(135,'Por naturaleza soy una persona cauta y reservada.'),(136,'Prefiero que las cosas tengan establecido el principio y el fin a que se dejen abiertas en su realización.'),(137,'Protejo a quienes se encuentran bajo mi autoridad.'),(138,'Puede preocuparme el sufrimiento, la pérdida y la muerte.'),(139,'Puedo ser un arbitro desapasionado, porque para mí las dos partes son iguales.'),(140,'Rara vez he sido demasiado expresivo emocionalmente.'),(141,'Recuerdo mi infancia como una etapa feliz.'),(142,'Sé como hacer las cosas.'),(143,'Si estoy seguro de mi propósito, hago caso omiso de la opinión de los demás.'),(144,'Si surge un problema, primero lo estudio por mi cuenta y luego lo discuto con los demás.'),(145,'Si tengo que elegir entre algo nuevo y algo conocido, tiendo a escoger lo nuevo.'),(146,'Siempre me ha atraído el simbolismo.'),(147,'Sin leyes estrictas, es difícil decir lo que tienen que hacer las personas.'),(148,'Sobre todo he sido una persona pragmática y realista.'),(149,'Son importantes, para mí, las formas y el buen gusto.'),(150,'Soy propenso a reprimir los sentimientos.'),(151,'Soy un buen colaborador y los demás pueden fiarse de mí.'),(152,'Soy una persona metódica y organizada.'),(153,'Soy una persona propensa a la nostalgia, a la melancolía y a revivir el pasado.'),(154,'Soy visto por los demás como una persona segura y decidida.'),(155,'Soy, básicamente, una persona moderada.'),(156,'Suelo dejar la iniciativa a los otros.'),(157,'Suelo fijarme en el lado bueno de las cosas y dejar de lado el aspecto negativo de la vida.'),(158,'Suelo guardar mis sentimientos para mí.'),(159,'Suelo pasar de una cosa a otra, en vez de profundizar en una sola.'),(160,'Suelo ser consciente de las contradicciones y soy muy sensible a ellas.'),(161,'Suelo ser muy entusiasta en cuanto al futuro.'),(162,'Tengo cierta dificultad en centrar mi atención.'),(163,'Tengo dificultad para aceptar y expresar mi lado tierno, agradable, suave, femenino.'),(164,'Tengo tendencia a desvalorizarme.'),(165,'Tengo una nostalgia casi compulsiva de mi pasado.'),(166,'Tiendo a cuidar los detalles, el orden y la precisión.'),(167,'Tiendo a no juzgar a las personas.'),(168,'Tiendo a quitar importancia a las cosas para que los demás se tranquilicen.'),(169,'Tiendo a ser una persona emprendedora y realizadora, con fuertes motivaciones.'),(170,'Tiendo a ser una persona tacaña con mi tiempo, mi dinero y mi yo.'),(171,'Trato de parecer natural.'),(172,'Una de mis cualidades ha sido la habilidad para describir estados internos.'),(173,'Vivo con cierta tensión porque me propongo demasiados objetivos.');
/*!40000 ALTER TABLE `preguntas_largo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntas_respuestas`
--

DROP TABLE IF EXISTS `preguntas_respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntas_respuestas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `caso_id` bigint(20) unsigned NOT NULL,
  `pregunta_id` bigint(20) unsigned NOT NULL,
  `respuesta_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`,`caso_id`,`pregunta_id`,`respuesta_id`),
  KEY `fk_preguntas_respuestas_1_idx` (`caso_id`),
  KEY `fk_preguntas_respuestas_2_idx` (`pregunta_id`),
  KEY `fk_preguntas_respuestas_3_idx` (`respuesta_id`),
  CONSTRAINT `fk_preguntas_respuestas_1` FOREIGN KEY (`caso_id`) REFERENCES `casos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_preguntas_respuestas_2` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_preguntas_respuestas_3` FOREIGN KEY (`respuesta_id`) REFERENCES `respuestas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas_respuestas`
--

LOCK TABLES `preguntas_respuestas` WRITE;
/*!40000 ALTER TABLE `preguntas_respuestas` DISABLE KEYS */;
/*!40000 ALTER TABLE `preguntas_respuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respuestas`
--

DROP TABLE IF EXISTS `respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respuestas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `respuesta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respuestas`
--

LOCK TABLES `respuestas` WRITE;
/*!40000 ALTER TABLE `respuestas` DISABLE KEYS */;
/*!40000 ALTER TABLE `respuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `compro` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_order_id` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preference_id` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'marcos','mlete@gmail.com',NULL,'$2y$10$vm7O8emnlvNb40Ahk.OObu.t6FMCzYdsaI0nj00a/2hM0di3eqKAq','jeZIa6TaQP7Ycsf7RbsMt8qLK0fxN6hpTiK3tjcMj7SXm06bvT6s1XdCgP85','2020-05-17 17:57:33','2020-06-21 00:50:05','1','7168917158','approved','1540357739','247338821-c7698327-5d1f-47e6-8700-e7c6d5bc457c'),(2,'goy','goy@gmail.com',NULL,'$2y$10$RKmjp0o40VTNYUPRSRv8W.LbFEa.UejF09P3GV2KvtHtuBUsTGO0q',NULL,'2020-05-30 17:00:49','2020-10-21 21:26:57','1','123456789','approved','pago con paypal','pago con paypal'),(3,'gilo','gilo@gmail.com',NULL,'$2y$10$wgIFYCFmGWstcTVDVuh6T.JRhT2W2rl1sX5HetKEPCMVRLxFX1D06',NULL,'2020-05-30 17:14:25','2020-06-23 19:03:21',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-26  0:49:11
