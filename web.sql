--
-- PostgreSQL database dump
--

-- Dumped from database version 11.3
-- Dumped by pg_dump version 11.2

-- Started on 2019-06-07 14:43:20

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 12 (class 2615 OID 24761)
-- Name: web; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA web;


ALTER SCHEMA web OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 232 (class 1259 OID 24770)
-- Name: competence; Type: TABLE; Schema: web; Owner: postgres
--

CREATE TABLE web.competence (
    id integer NOT NULL,
    compt character varying(1000),
    alt character varying(20)
);


ALTER TABLE web.competence OWNER TO postgres;

--
-- TOC entry 231 (class 1259 OID 24768)
-- Name: competence_id_seq; Type: SEQUENCE; Schema: web; Owner: postgres
--

CREATE SEQUENCE web.competence_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE web.competence_id_seq OWNER TO postgres;

--
-- TOC entry 2963 (class 0 OID 0)
-- Dependencies: 231
-- Name: competence_id_seq; Type: SEQUENCE OWNED BY; Schema: web; Owner: postgres
--

ALTER SEQUENCE web.competence_id_seq OWNED BY web.competence.id;


--
-- TOC entry 236 (class 1259 OID 24789)
-- Name: diplome; Type: TABLE; Schema: web; Owner: postgres
--

CREATE TABLE web.diplome (
    id integer NOT NULL,
    dipl character varying(200)
);


ALTER TABLE web.diplome OWNER TO postgres;

--
-- TOC entry 235 (class 1259 OID 24787)
-- Name: diplome_id_seq; Type: SEQUENCE; Schema: web; Owner: postgres
--

CREATE SEQUENCE web.diplome_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE web.diplome_id_seq OWNER TO postgres;

--
-- TOC entry 2964 (class 0 OID 0)
-- Dependencies: 235
-- Name: diplome_id_seq; Type: SEQUENCE OWNED BY; Schema: web; Owner: postgres
--

ALTER SEQUENCE web.diplome_id_seq OWNED BY web.diplome.id;


--
-- TOC entry 237 (class 1259 OID 24797)
-- Name: experience; Type: TABLE; Schema: web; Owner: postgres
--

CREATE TABLE web.experience (
    sstitre character varying(200),
    dscrp character varying(200),
    id_e integer
);


ALTER TABLE web.experience OWNER TO postgres;

--
-- TOC entry 241 (class 1259 OID 24852)
-- Name: loisir; Type: TABLE; Schema: web; Owner: postgres
--

CREATE TABLE web.loisir (
    id integer NOT NULL,
    img character varying(1000),
    nom character varying(50)
);


ALTER TABLE web.loisir OWNER TO postgres;

--
-- TOC entry 240 (class 1259 OID 24850)
-- Name: loisir_id_seq; Type: SEQUENCE; Schema: web; Owner: postgres
--

CREATE SEQUENCE web.loisir_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE web.loisir_id_seq OWNER TO postgres;

--
-- TOC entry 2965 (class 0 OID 0)
-- Dependencies: 240
-- Name: loisir_id_seq; Type: SEQUENCE OWNED BY; Schema: web; Owner: postgres
--

ALTER SEQUENCE web.loisir_id_seq OWNED BY web.loisir.id;


--
-- TOC entry 230 (class 1259 OID 24762)
-- Name: profil; Type: TABLE; Schema: web; Owner: postgres
--

CREATE TABLE web.profil (
    compt1 character varying(20),
    compt2 character varying(20),
    compt3 character varying(20),
    compt4 character varying(20),
    compt5 character varying(20),
    ville character varying(30),
    activ character varying(150),
    pht character varying(1000)
);


ALTER TABLE web.profil OWNER TO postgres;

--
-- TOC entry 239 (class 1259 OID 24811)
-- Name: titreexp; Type: TABLE; Schema: web; Owner: postgres
--

CREATE TABLE web.titreexp (
    id integer NOT NULL,
    titre character varying(50)
);


ALTER TABLE web.titreexp OWNER TO postgres;

--
-- TOC entry 238 (class 1259 OID 24809)
-- Name: titreexp_id_seq; Type: SEQUENCE; Schema: web; Owner: postgres
--

CREATE SEQUENCE web.titreexp_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE web.titreexp_id_seq OWNER TO postgres;

--
-- TOC entry 2966 (class 0 OID 0)
-- Dependencies: 238
-- Name: titreexp_id_seq; Type: SEQUENCE OWNED BY; Schema: web; Owner: postgres
--

ALTER SEQUENCE web.titreexp_id_seq OWNED BY web.titreexp.id;


--
-- TOC entry 2809 (class 2604 OID 24773)
-- Name: competence id; Type: DEFAULT; Schema: web; Owner: postgres
--

ALTER TABLE ONLY web.competence ALTER COLUMN id SET DEFAULT nextval('web.competence_id_seq'::regclass);


--
-- TOC entry 2810 (class 2604 OID 24792)
-- Name: diplome id; Type: DEFAULT; Schema: web; Owner: postgres
--

ALTER TABLE ONLY web.diplome ALTER COLUMN id SET DEFAULT nextval('web.diplome_id_seq'::regclass);


--
-- TOC entry 2812 (class 2604 OID 24855)
-- Name: loisir id; Type: DEFAULT; Schema: web; Owner: postgres
--

ALTER TABLE ONLY web.loisir ALTER COLUMN id SET DEFAULT nextval('web.loisir_id_seq'::regclass);


--
-- TOC entry 2811 (class 2604 OID 24814)
-- Name: titreexp id; Type: DEFAULT; Schema: web; Owner: postgres
--

ALTER TABLE ONLY web.titreexp ALTER COLUMN id SET DEFAULT nextval('web.titreexp_id_seq'::regclass);


--
-- TOC entry 2950 (class 0 OID 24770)
-- Dependencies: 232
-- Data for Name: competence; Type: TABLE DATA; Schema: web; Owner: postgres
--

COPY web.competence (id, compt, alt) FROM stdin;
1	img/html5.png	html
2	img/css3.png	css
3	img/javascript.png	javascript
4	img/php.png	php
5	img/jquery.png	jquery
6	img/python.png	python
7	img/postgre.png	postgre
8	img/mysql.png	mysql
9	img/java.png	java
10	img/xd.png	xd
11	img/illustrator.png	illustrator
\.


--
-- TOC entry 2952 (class 0 OID 24789)
-- Dependencies: 236
-- Data for Name: diplome; Type: TABLE DATA; Schema: web; Owner: postgres
--

COPY web.diplome (id, dipl) FROM stdin;
1	Actuellement : Etudiant 1ere année Bachelor Informatique (Ynov - Nantes)
2	Baccalauréat S-SI (Science de l'ingénieur)
3	Formation général BAFA (Ufcv - Vannes)
4	Initiateur Fédération Française de Basketball
5	Animateur Fédération Française de Basketball
\.


--
-- TOC entry 2953 (class 0 OID 24797)
-- Dependencies: 237
-- Data for Name: experience; Type: TABLE DATA; Schema: web; Owner: postgres
--

COPY web.experience (sstitre, dscrp, id_e) FROM stdin;
2019/2016 : Equipe de moins de 11ans - Similienne Nantes	\N	1
26 au 31 Août 2018 et 21 au 25 Août 2017 :	Encadrement de stage de basket (jeunes de 11 à 17ans)	2
19 Juin 2017 : Coupe du monde 3x3 "The Bridge" tous publics	\N	2
2019/2012 : Arbitre de champs de table (toutes catégories)	\N	3
1er Mai 2016 : Fête Nationnal du Mini-Basket - Nantes	\N	3
\.


--
-- TOC entry 2957 (class 0 OID 24852)
-- Dependencies: 241
-- Data for Name: loisir; Type: TABLE DATA; Schema: web; Owner: postgres
--

COPY web.loisir (id, img, nom) FROM stdin;
1	/img/basket.png	Basket
2	/img/draw.png	Dessin
3	/img/music.png	Musique
4	/img/vgames.png	Jeux vidéo
\.


--
-- TOC entry 2948 (class 0 OID 24762)
-- Dependencies: 230
-- Data for Name: profil; Type: TABLE DATA; Schema: web; Owner: postgres
--

COPY web.profil (compt1, compt2, compt3, compt4, compt5, ville, activ, pht) FROM stdin;
CURIEUX	SOCIABLE	DYNAMIQUE	IMAGINATIF	APPLIQUE	Nantes	Etudiant en informatique	/img/photoProfil.jpg
\.


--
-- TOC entry 2955 (class 0 OID 24811)
-- Dependencies: 239
-- Data for Name: titreexp; Type: TABLE DATA; Schema: web; Owner: postgres
--

COPY web.titreexp (id, titre) FROM stdin;
1	Entraîneur et coach de basket :
2	Animateur Basket :
3	Abritre :
\.


--
-- TOC entry 2967 (class 0 OID 0)
-- Dependencies: 231
-- Name: competence_id_seq; Type: SEQUENCE SET; Schema: web; Owner: postgres
--

SELECT pg_catalog.setval('web.competence_id_seq', 11, true);


--
-- TOC entry 2968 (class 0 OID 0)
-- Dependencies: 235
-- Name: diplome_id_seq; Type: SEQUENCE SET; Schema: web; Owner: postgres
--

SELECT pg_catalog.setval('web.diplome_id_seq', 5, true);


--
-- TOC entry 2969 (class 0 OID 0)
-- Dependencies: 240
-- Name: loisir_id_seq; Type: SEQUENCE SET; Schema: web; Owner: postgres
--

SELECT pg_catalog.setval('web.loisir_id_seq', 4, true);


--
-- TOC entry 2970 (class 0 OID 0)
-- Dependencies: 238
-- Name: titreexp_id_seq; Type: SEQUENCE SET; Schema: web; Owner: postgres
--

SELECT pg_catalog.setval('web.titreexp_id_seq', 3, true);


--
-- TOC entry 2814 (class 2606 OID 24778)
-- Name: competence competence_id_key; Type: CONSTRAINT; Schema: web; Owner: postgres
--

ALTER TABLE ONLY web.competence
    ADD CONSTRAINT competence_id_key UNIQUE (id);


--
-- TOC entry 2816 (class 2606 OID 24794)
-- Name: diplome diplome_id_key; Type: CONSTRAINT; Schema: web; Owner: postgres
--

ALTER TABLE ONLY web.diplome
    ADD CONSTRAINT diplome_id_key UNIQUE (id);


--
-- TOC entry 2820 (class 2606 OID 24860)
-- Name: loisir loisir_id_key; Type: CONSTRAINT; Schema: web; Owner: postgres
--

ALTER TABLE ONLY web.loisir
    ADD CONSTRAINT loisir_id_key UNIQUE (id);


--
-- TOC entry 2818 (class 2606 OID 24816)
-- Name: titreexp titreexp_id_key; Type: CONSTRAINT; Schema: web; Owner: postgres
--

ALTER TABLE ONLY web.titreexp
    ADD CONSTRAINT titreexp_id_key UNIQUE (id);


-- Completed on 2019-06-07 14:43:20

--
-- PostgreSQL database dump complete
--

