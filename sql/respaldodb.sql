--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: areas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE areas (
    id_area integer NOT NULL,
    nombre character varying(50) NOT NULL
);


ALTER TABLE areas OWNER TO postgres;

--
-- Name: areas_id_area_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE areas_id_area_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE areas_id_area_seq OWNER TO postgres;

--
-- Name: areas_id_area_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE areas_id_area_seq OWNED BY areas.id_area;


--
-- Name: autores; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE autores (
    id_autor integer NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    correo character varying(50) NOT NULL,
    acronimo character varying(30) NOT NULL
);


ALTER TABLE autores OWNER TO postgres;

--
-- Name: autores_areas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE autores_areas (
    id_autor integer NOT NULL,
    id_area integer NOT NULL
);


ALTER TABLE autores_areas OWNER TO postgres;

--
-- Name: autores_areas_id_area_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE autores_areas_id_area_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE autores_areas_id_area_seq OWNER TO postgres;

--
-- Name: autores_areas_id_area_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE autores_areas_id_area_seq OWNED BY autores_areas.id_area;


--
-- Name: autores_areas_id_autor_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE autores_areas_id_autor_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE autores_areas_id_autor_seq OWNER TO postgres;

--
-- Name: autores_areas_id_autor_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE autores_areas_id_autor_seq OWNED BY autores_areas.id_autor;


--
-- Name: autores_id_autor_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE autores_id_autor_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE autores_id_autor_seq OWNER TO postgres;

--
-- Name: autores_id_autor_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE autores_id_autor_seq OWNED BY autores.id_autor;


--
-- Name: documento_area; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE documento_area (
    id_documento integer NOT NULL,
    id_area integer NOT NULL
);


ALTER TABLE documento_area OWNER TO postgres;

--
-- Name: documento_area_id_area_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE documento_area_id_area_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE documento_area_id_area_seq OWNER TO postgres;

--
-- Name: documento_area_id_area_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE documento_area_id_area_seq OWNED BY documento_area.id_area;


--
-- Name: documento_area_id_documento_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE documento_area_id_documento_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE documento_area_id_documento_seq OWNER TO postgres;

--
-- Name: documento_area_id_documento_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE documento_area_id_documento_seq OWNED BY documento_area.id_documento;


--
-- Name: documento_autor; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE documento_autor (
    id_documento integer NOT NULL,
    id_autor integer NOT NULL
);


ALTER TABLE documento_autor OWNER TO postgres;

--
-- Name: documento_autor_id_autor_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE documento_autor_id_autor_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE documento_autor_id_autor_seq OWNER TO postgres;

--
-- Name: documento_autor_id_autor_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE documento_autor_id_autor_seq OWNED BY documento_autor.id_autor;


--
-- Name: documento_autor_id_documento_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE documento_autor_id_documento_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE documento_autor_id_documento_seq OWNER TO postgres;

--
-- Name: documento_autor_id_documento_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE documento_autor_id_documento_seq OWNED BY documento_autor.id_documento;


--
-- Name: documento_palabra; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE documento_palabra (
    id_documento integer NOT NULL,
    id_palabra integer NOT NULL
);


ALTER TABLE documento_palabra OWNER TO postgres;

--
-- Name: documento_palabra_id_documento_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE documento_palabra_id_documento_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE documento_palabra_id_documento_seq OWNER TO postgres;

--
-- Name: documento_palabra_id_documento_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE documento_palabra_id_documento_seq OWNED BY documento_palabra.id_documento;


--
-- Name: documento_palabra_id_palabra_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE documento_palabra_id_palabra_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE documento_palabra_id_palabra_seq OWNER TO postgres;

--
-- Name: documento_palabra_id_palabra_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE documento_palabra_id_palabra_seq OWNED BY documento_palabra.id_palabra;


--
-- Name: documentos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE documentos (
    id_documento integer NOT NULL,
    tipo_material character varying(30) NOT NULL,
    titulo_principal character varying(200) NOT NULL,
    titulo_secundario character varying(100) NOT NULL,
    editorial character varying(50) NOT NULL,
    fecha_catalogacion date NOT NULL,
    fecha_creacion date NOT NULL,
    idioma character varying(15) NOT NULL,
    derechos_autor character varying(50) NOT NULL,
    formato character varying(30) NOT NULL,
    descripcion character varying(200) NOT NULL
);


ALTER TABLE documentos OWNER TO postgres;

--
-- Name: documentos_id_documento_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE documentos_id_documento_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE documentos_id_documento_seq OWNER TO postgres;

--
-- Name: documentos_id_documento_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE documentos_id_documento_seq OWNED BY documentos.id_documento;


--
-- Name: groups; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE groups (
    id integer NOT NULL,
    name character varying(20) NOT NULL,
    description character varying(100) NOT NULL,
    CONSTRAINT check_id CHECK ((id >= 0))
);


ALTER TABLE groups OWNER TO postgres;

--
-- Name: groups_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE groups_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE groups_id_seq OWNER TO postgres;

--
-- Name: groups_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE groups_id_seq OWNED BY groups.id;


--
-- Name: login_attempts; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE login_attempts (
    id integer NOT NULL,
    ip_address character varying(15),
    login character varying(100) NOT NULL,
    "time" integer,
    CONSTRAINT check_id CHECK ((id >= 0))
);


ALTER TABLE login_attempts OWNER TO postgres;

--
-- Name: login_attempts_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE login_attempts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE login_attempts_id_seq OWNER TO postgres;

--
-- Name: login_attempts_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE login_attempts_id_seq OWNED BY login_attempts.id;


--
-- Name: palabraclave; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE palabraclave (
    id_palabra integer NOT NULL,
    nombre character varying(50) NOT NULL
);


ALTER TABLE palabraclave OWNER TO postgres;

--
-- Name: palabraclave_id_palabra_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE palabraclave_id_palabra_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE palabraclave_id_palabra_seq OWNER TO postgres;

--
-- Name: palabraclave_id_palabra_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE palabraclave_id_palabra_seq OWNED BY palabraclave.id_palabra;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    ip_address character varying(45),
    username character varying(100),
    password character varying(255) NOT NULL,
    salt character varying(255),
    email character varying(100) NOT NULL,
    activation_code character varying(40),
    forgotten_password_code character varying(40),
    forgotten_password_time integer,
    remember_code character varying(40),
    created_on integer NOT NULL,
    last_login integer,
    active integer,
    first_name character varying(50),
    last_name character varying(50),
    company character varying(100),
    phone character varying(20),
    CONSTRAINT check_active CHECK ((active >= 0)),
    CONSTRAINT check_id CHECK ((id >= 0))
);


ALTER TABLE users OWNER TO postgres;

--
-- Name: users_groups; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE users_groups (
    id integer NOT NULL,
    user_id integer NOT NULL,
    group_id integer NOT NULL,
    CONSTRAINT users_groups_check_group_id CHECK ((group_id >= 0)),
    CONSTRAINT users_groups_check_id CHECK ((id >= 0)),
    CONSTRAINT users_groups_check_user_id CHECK ((user_id >= 0))
);


ALTER TABLE users_groups OWNER TO postgres;

--
-- Name: users_groups_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_groups_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_groups_id_seq OWNER TO postgres;

--
-- Name: users_groups_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE users_groups_id_seq OWNED BY users_groups.id;


--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: id_area; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY areas ALTER COLUMN id_area SET DEFAULT nextval('areas_id_area_seq'::regclass);


--
-- Name: id_autor; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY autores ALTER COLUMN id_autor SET DEFAULT nextval('autores_id_autor_seq'::regclass);


--
-- Name: id_autor; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY autores_areas ALTER COLUMN id_autor SET DEFAULT nextval('autores_areas_id_autor_seq'::regclass);


--
-- Name: id_area; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY autores_areas ALTER COLUMN id_area SET DEFAULT nextval('autores_areas_id_area_seq'::regclass);


--
-- Name: id_documento; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY documento_area ALTER COLUMN id_documento SET DEFAULT nextval('documento_area_id_documento_seq'::regclass);


--
-- Name: id_area; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY documento_area ALTER COLUMN id_area SET DEFAULT nextval('documento_area_id_area_seq'::regclass);


--
-- Name: id_documento; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY documento_autor ALTER COLUMN id_documento SET DEFAULT nextval('documento_autor_id_documento_seq'::regclass);


--
-- Name: id_autor; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY documento_autor ALTER COLUMN id_autor SET DEFAULT nextval('documento_autor_id_autor_seq'::regclass);


--
-- Name: id_documento; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY documento_palabra ALTER COLUMN id_documento SET DEFAULT nextval('documento_palabra_id_documento_seq'::regclass);


--
-- Name: id_palabra; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY documento_palabra ALTER COLUMN id_palabra SET DEFAULT nextval('documento_palabra_id_palabra_seq'::regclass);


--
-- Name: id_documento; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY documentos ALTER COLUMN id_documento SET DEFAULT nextval('documentos_id_documento_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY groups ALTER COLUMN id SET DEFAULT nextval('groups_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY login_attempts ALTER COLUMN id SET DEFAULT nextval('login_attempts_id_seq'::regclass);


--
-- Name: id_palabra; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY palabraclave ALTER COLUMN id_palabra SET DEFAULT nextval('palabraclave_id_palabra_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users_groups ALTER COLUMN id SET DEFAULT nextval('users_groups_id_seq'::regclass);


--
-- Data for Name: areas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY areas (id_area, nombre) FROM stdin;
\.


--
-- Name: areas_id_area_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('areas_id_area_seq', 1, false);


--
-- Data for Name: autores; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY autores (id_autor, nombre, apellido, correo, acronimo) FROM stdin;
\.


--
-- Data for Name: autores_areas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY autores_areas (id_autor, id_area) FROM stdin;
\.


--
-- Name: autores_areas_id_area_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('autores_areas_id_area_seq', 1, false);


--
-- Name: autores_areas_id_autor_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('autores_areas_id_autor_seq', 1, false);


--
-- Name: autores_id_autor_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('autores_id_autor_seq', 1, false);


--
-- Data for Name: documento_area; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY documento_area (id_documento, id_area) FROM stdin;
\.


--
-- Name: documento_area_id_area_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('documento_area_id_area_seq', 1, false);


--
-- Name: documento_area_id_documento_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('documento_area_id_documento_seq', 1, false);


--
-- Data for Name: documento_autor; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY documento_autor (id_documento, id_autor) FROM stdin;
\.


--
-- Name: documento_autor_id_autor_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('documento_autor_id_autor_seq', 1, false);


--
-- Name: documento_autor_id_documento_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('documento_autor_id_documento_seq', 1, false);


--
-- Data for Name: documento_palabra; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY documento_palabra (id_documento, id_palabra) FROM stdin;
\.


--
-- Name: documento_palabra_id_documento_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('documento_palabra_id_documento_seq', 1, false);


--
-- Name: documento_palabra_id_palabra_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('documento_palabra_id_palabra_seq', 1, false);


--
-- Data for Name: documentos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY documentos (id_documento, tipo_material, titulo_principal, titulo_secundario, editorial, fecha_catalogacion, fecha_creacion, idioma, derechos_autor, formato, descripcion) FROM stdin;
\.


--
-- Name: documentos_id_documento_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('documentos_id_documento_seq', 1, false);


--
-- Data for Name: groups; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY groups (id, name, description) FROM stdin;
1	admin	Administrator
2	members	General User
\.


--
-- Name: groups_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('groups_id_seq', 1, false);


--
-- Data for Name: login_attempts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY login_attempts (id, ip_address, login, "time") FROM stdin;
\.


--
-- Name: login_attempts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('login_attempts_id_seq', 1, false);


--
-- Data for Name: palabraclave; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY palabraclave (id_palabra, nombre) FROM stdin;
\.


--
-- Name: palabraclave_id_palabra_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('palabraclave_id_palabra_seq', 1, false);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, ip_address, username, password, salt, email, activation_code, forgotten_password_code, forgotten_password_time, remember_code, created_on, last_login, active, first_name, last_name, company, phone) FROM stdin;
1	127.0.0.1	administrator	$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36		admin@admin.com		\N	\N	\N	1268889823	1268889823	1	Admin	istrator	ADMIN	0
\.


--
-- Data for Name: users_groups; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users_groups (id, user_id, group_id) FROM stdin;
1	1	1
2	1	2
\.


--
-- Name: users_groups_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_groups_id_seq', 2, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 1, true);


--
-- Name: areas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY areas
    ADD CONSTRAINT areas_pkey PRIMARY KEY (id_area);


--
-- Name: autores_areas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY autores_areas
    ADD CONSTRAINT autores_areas_pkey PRIMARY KEY (id_autor, id_area);


--
-- Name: autores_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY autores
    ADD CONSTRAINT autores_pkey PRIMARY KEY (id_autor);


--
-- Name: documento_area_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY documento_area
    ADD CONSTRAINT documento_area_pkey PRIMARY KEY (id_documento, id_area);


--
-- Name: documento_autor_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY documento_autor
    ADD CONSTRAINT documento_autor_pkey PRIMARY KEY (id_documento, id_autor);


--
-- Name: documento_palabra_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY documento_palabra
    ADD CONSTRAINT documento_palabra_pkey PRIMARY KEY (id_documento, id_palabra);


--
-- Name: documentos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY documentos
    ADD CONSTRAINT documentos_pkey PRIMARY KEY (id_documento);


--
-- Name: groups_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY groups
    ADD CONSTRAINT groups_pkey PRIMARY KEY (id);


--
-- Name: login_attempts_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY login_attempts
    ADD CONSTRAINT login_attempts_pkey PRIMARY KEY (id);


--
-- Name: palabraclave_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY palabraclave
    ADD CONSTRAINT palabraclave_pkey PRIMARY KEY (id_palabra);


--
-- Name: uc_users_groups; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users_groups
    ADD CONSTRAINT uc_users_groups UNIQUE (user_id, group_id);


--
-- Name: users_groups_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users_groups
    ADD CONSTRAINT users_groups_pkey PRIMARY KEY (id);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: fk_documento_area; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY documento_area
    ADD CONSTRAINT fk_documento_area FOREIGN KEY (id_area) REFERENCES areas(id_area) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: fk_documento_area_documento; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY documento_area
    ADD CONSTRAINT fk_documento_area_documento FOREIGN KEY (id_documento) REFERENCES documentos(id_documento) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: fk_documento_autor; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY documento_autor
    ADD CONSTRAINT fk_documento_autor FOREIGN KEY (id_autor) REFERENCES autores(id_autor) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: fk_documento_autor_documento; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY documento_autor
    ADD CONSTRAINT fk_documento_autor_documento FOREIGN KEY (id_documento) REFERENCES documentos(id_documento) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: fk_documento_palabra; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY documento_palabra
    ADD CONSTRAINT fk_documento_palabra FOREIGN KEY (id_palabra) REFERENCES palabraclave(id_palabra) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: fk_documento_palabra_documento; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY documento_palabra
    ADD CONSTRAINT fk_documento_palabra_documento FOREIGN KEY (id_documento) REFERENCES documentos(id_documento) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

