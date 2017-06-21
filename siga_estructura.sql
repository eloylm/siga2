--
-- PostgreSQL database dump
--

-- Started on 2009-11-12 01:31:17

SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

--
-- TOC entry 1890 (class 1262 OID 16403)
-- Name: siga; Type: DATABASE; Schema: -; Owner: -
--

CREATE DATABASE siga WITH TEMPLATE = template0 ENCODING = 'UTF8';


\connect siga

SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

--
-- TOC entry 343 (class 2612 OID 16386)
-- Name: plpgsql; Type: PROCEDURAL LANGUAGE; Schema: -; Owner: -
--

CREATE PROCEDURAL LANGUAGE plpgsql;


SET search_path = public, pg_catalog;

--
-- TOC entry 20 (class 1255 OID 16404)
-- Dependencies: 343 6
-- Name: agrega_resultados(); Type: FUNCTION; Schema: public; Owner: -
--

CREATE FUNCTION agrega_resultados() RETURNS trigger
    AS $$ DECLARE
BEGIN
    IF (TG_OP='INSERT') THEN
    insert into resultados (analisis_id, ordenes_trabajo_id,estado,resultado, fecha)
    select aa.analisis_id, aa.ordenes_trabajo_id,'Sin cargar',0,CURRENT_DATE+tiempo_demora  
    from analisis_ordenes_trabajo_assn aa join analisis a 
    on aa.analisis_id=a.analisis_id
    where aa.ordenes_trabajo_id=NEW.ordenes_trabajo_id and aa.analisis_id=NEW.analisis_id;
    END IF;
    RETURN NEW;
END $$
    LANGUAGE plpgsql;


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 1515 (class 1259 OID 16405)
-- Dependencies: 6
-- Name: analisis; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE analisis (
    analisis_id integer NOT NULL,
    nombre character varying,
    tiempo_demora integer
);


--
-- TOC entry 1516 (class 1259 OID 16411)
-- Dependencies: 6 1515
-- Name: analisis_analisis_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE analisis_analisis_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    MINVALUE 0
    CACHE 1;


--
-- TOC entry 1893 (class 0 OID 0)
-- Dependencies: 1516
-- Name: analisis_analisis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE analisis_analisis_id_seq OWNED BY analisis.analisis_id;


--
-- TOC entry 1517 (class 1259 OID 16413)
-- Dependencies: 6
-- Name: analisis_metodos_assn; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE analisis_metodos_assn (
    analisis_id integer NOT NULL,
    metodo_id integer NOT NULL
);


--
-- TOC entry 1518 (class 1259 OID 16416)
-- Dependencies: 6 1517
-- Name: analisis_metodos_assn_analisis_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE analisis_metodos_assn_analisis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- TOC entry 1894 (class 0 OID 0)
-- Dependencies: 1518
-- Name: analisis_metodos_assn_analisis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE analisis_metodos_assn_analisis_id_seq OWNED BY analisis_metodos_assn.analisis_id;


--
-- TOC entry 1519 (class 1259 OID 16418)
-- Dependencies: 1517 6
-- Name: analisis_metodos_assn_metodo_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE analisis_metodos_assn_metodo_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- TOC entry 1895 (class 0 OID 0)
-- Dependencies: 1519
-- Name: analisis_metodos_assn_metodo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE analisis_metodos_assn_metodo_id_seq OWNED BY analisis_metodos_assn.metodo_id;


--
-- TOC entry 1521 (class 1259 OID 16423)
-- Dependencies: 6
-- Name: analisis_unidades_assn; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE analisis_unidades_assn (
    analisis_id integer NOT NULL,
    unidad_id integer NOT NULL
);


--
-- TOC entry 1526 (class 1259 OID 16438)
-- Dependencies: 6
-- Name: metodos; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE metodos (
    metodo_id integer NOT NULL,
    nombre character varying NOT NULL
);


--
-- TOC entry 1536 (class 1259 OID 16480)
-- Dependencies: 6
-- Name: unidades; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE unidades (
    unidad_id integer NOT NULL,
    nombre character varying NOT NULL
);


--
-- TOC entry 1543 (class 1259 OID 16899)
-- Dependencies: 1619 6
-- Name: analisis_metodos_unidades; Type: VIEW; Schema: public; Owner: -
--

CREATE VIEW analisis_metodos_unidades AS
    SELECT a.analisis_id, a.nombre, a.tiempo_demora, m.nombre AS metodo, u.nombre AS unidad FROM ((((analisis a JOIN analisis_metodos_assn am ON ((a.analisis_id = am.analisis_id))) JOIN metodos m ON ((am.metodo_id = m.metodo_id))) JOIN analisis_unidades_assn au ON ((a.analisis_id = au.analisis_id))) JOIN unidades u ON ((au.unidad_id = u.unidad_id))) ORDER BY a.analisis_id;


--
-- TOC entry 1520 (class 1259 OID 16420)
-- Dependencies: 6
-- Name: analisis_ordenes_trabajo_assn; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE analisis_ordenes_trabajo_assn (
    analisis_id integer NOT NULL,
    ordenes_trabajo_id integer NOT NULL
);


--
-- TOC entry 1522 (class 1259 OID 16426)
-- Dependencies: 6 1521
-- Name: analisis_unidades_assn_analisis_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE analisis_unidades_assn_analisis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- TOC entry 1896 (class 0 OID 0)
-- Dependencies: 1522
-- Name: analisis_unidades_assn_analisis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE analisis_unidades_assn_analisis_id_seq OWNED BY analisis_unidades_assn.analisis_id;


--
-- TOC entry 1523 (class 1259 OID 16428)
-- Dependencies: 6 1521
-- Name: analisis_unidades_assn_unidad_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE analisis_unidades_assn_unidad_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- TOC entry 1897 (class 0 OID 0)
-- Dependencies: 1523
-- Name: analisis_unidades_assn_unidad_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE analisis_unidades_assn_unidad_id_seq OWNED BY analisis_unidades_assn.unidad_id;


--
-- TOC entry 1524 (class 1259 OID 16430)
-- Dependencies: 6
-- Name: clientes; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE clientes (
    clientes_id integer NOT NULL,
    nombre character varying,
    direccion character varying,
    localidad character varying,
    provincia character varying,
    email character varying NOT NULL,
    responsable_contacto character varying,
    fecha_alta date,
    estado boolean,
    email_secundario character varying,
    telefono character varying
);


--
-- TOC entry 1525 (class 1259 OID 16436)
-- Dependencies: 6 1524
-- Name: clientes_clientes_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE clientes_clientes_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- TOC entry 1898 (class 0 OID 0)
-- Dependencies: 1525
-- Name: clientes_clientes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE clientes_clientes_id_seq OWNED BY clientes.clientes_id;


--
-- TOC entry 1527 (class 1259 OID 16444)
-- Dependencies: 1526 6
-- Name: metodos_metodo_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE metodos_metodo_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- TOC entry 1899 (class 0 OID 0)
-- Dependencies: 1527
-- Name: metodos_metodo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE metodos_metodo_id_seq OWNED BY metodos.metodo_id;


--
-- TOC entry 1528 (class 1259 OID 16446)
-- Dependencies: 6
-- Name: muestras; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE muestras (
    muestras_id integer NOT NULL,
    detalle character varying,
    observaciones character varying,
    clientes_id integer,
    estado boolean,
    usuarios_id integer NOT NULL
);


--
-- TOC entry 1529 (class 1259 OID 16452)
-- Dependencies: 1528 6
-- Name: muestras_muestras_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE muestras_muestras_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- TOC entry 1900 (class 0 OID 0)
-- Dependencies: 1529
-- Name: muestras_muestras_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE muestras_muestras_id_seq OWNED BY muestras.muestras_id;


--
-- TOC entry 1530 (class 1259 OID 16454)
-- Dependencies: 1819 6
-- Name: ordenes_trabajo; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE ordenes_trabajo (
    ordenes_trabajo_id integer NOT NULL,
    fecha_entrada date,
    clientes_id integer,
    cargador character varying,
    buque character varying,
    kg integer,
    puerto character varying,
    referencia_cliente character varying,
    destino character varying,
    muestras_id integer,
    usuarios_id integer,
    "new" boolean DEFAULT true,
    estado character varying,
    observaciones character varying
);


--
-- TOC entry 1531 (class 1259 OID 16461)
-- Dependencies: 6 1530
-- Name: ordenes_trabajo_ordenes_trabajo_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ordenes_trabajo_ordenes_trabajo_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- TOC entry 1901 (class 0 OID 0)
-- Dependencies: 1531
-- Name: ordenes_trabajo_ordenes_trabajo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ordenes_trabajo_ordenes_trabajo_id_seq OWNED BY ordenes_trabajo.ordenes_trabajo_id;


--
-- TOC entry 1532 (class 1259 OID 16463)
-- Dependencies: 1821 6
-- Name: resultados; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE resultados (
    resultados_id integer NOT NULL,
    ordenes_trabajo_id integer,
    analisis_id integer,
    estado character varying,
    usuarios_id integer,
    fecha date,
    resultado real DEFAULT 0,
    norma character varying,
    medicion character varying
);


--
-- TOC entry 1533 (class 1259 OID 16470)
-- Dependencies: 1532 6
-- Name: resultados_resultados_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE resultados_resultados_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- TOC entry 1902 (class 0 OID 0)
-- Dependencies: 1533
-- Name: resultados_resultados_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE resultados_resultados_id_seq OWNED BY resultados.resultados_id;


--
-- TOC entry 1534 (class 1259 OID 16472)
-- Dependencies: 6
-- Name: roles; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE roles (
    roles_id integer NOT NULL,
    descrip character varying,
    comentario character varying
);


--
-- TOC entry 1535 (class 1259 OID 16478)
-- Dependencies: 1534 6
-- Name: roles_roles_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE roles_roles_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- TOC entry 1903 (class 0 OID 0)
-- Dependencies: 1535
-- Name: roles_roles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE roles_roles_id_seq OWNED BY roles.roles_id;


--
-- TOC entry 1537 (class 1259 OID 16486)
-- Dependencies: 6 1536
-- Name: unidades_unidad_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE unidades_unidad_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- TOC entry 1904 (class 0 OID 0)
-- Dependencies: 1537
-- Name: unidades_unidad_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE unidades_unidad_id_seq OWNED BY unidades.unidad_id;


--
-- TOC entry 1538 (class 1259 OID 16488)
-- Dependencies: 6
-- Name: usuarios; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE usuarios (
    usuarios_id integer NOT NULL,
    usuario character varying,
    nombre character varying,
    email character varying,
    habilitado boolean,
    password character varying
);


--
-- TOC entry 1539 (class 1259 OID 16494)
-- Dependencies: 6
-- Name: usuarios_analisis; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE usuarios_analisis (
    usuarios_id integer NOT NULL,
    analisis_id integer NOT NULL,
    usuarios_analisis_id integer NOT NULL
);


--
-- TOC entry 1540 (class 1259 OID 16497)
-- Dependencies: 6 1539
-- Name: usuarios_analisis_usuarios_analisis_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE usuarios_analisis_usuarios_analisis_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- TOC entry 1905 (class 0 OID 0)
-- Dependencies: 1540
-- Name: usuarios_analisis_usuarios_analisis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE usuarios_analisis_usuarios_analisis_id_seq OWNED BY usuarios_analisis.usuarios_analisis_id;


--
-- TOC entry 1541 (class 1259 OID 16499)
-- Dependencies: 6
-- Name: usuarios_roles_assn; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE usuarios_roles_assn (
    usuarios_id integer NOT NULL,
    roles_id integer NOT NULL
);


--
-- TOC entry 1542 (class 1259 OID 16502)
-- Dependencies: 6 1538
-- Name: usuarios_usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE usuarios_usuarios_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- TOC entry 1906 (class 0 OID 0)
-- Dependencies: 1542
-- Name: usuarios_usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE usuarios_usuarios_id_seq OWNED BY usuarios.usuarios_id;


--
-- TOC entry 1811 (class 2604 OID 16504)
-- Dependencies: 1516 1515
-- Name: analisis_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE analisis ALTER COLUMN analisis_id SET DEFAULT nextval('analisis_analisis_id_seq'::regclass);


--
-- TOC entry 1812 (class 2604 OID 16505)
-- Dependencies: 1518 1517
-- Name: analisis_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE analisis_metodos_assn ALTER COLUMN analisis_id SET DEFAULT nextval('analisis_metodos_assn_analisis_id_seq'::regclass);


--
-- TOC entry 1813 (class 2604 OID 16506)
-- Dependencies: 1519 1517
-- Name: metodo_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE analisis_metodos_assn ALTER COLUMN metodo_id SET DEFAULT nextval('analisis_metodos_assn_metodo_id_seq'::regclass);


--
-- TOC entry 1814 (class 2604 OID 16507)
-- Dependencies: 1522 1521
-- Name: analisis_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE analisis_unidades_assn ALTER COLUMN analisis_id SET DEFAULT nextval('analisis_unidades_assn_analisis_id_seq'::regclass);


--
-- TOC entry 1815 (class 2604 OID 16508)
-- Dependencies: 1523 1521
-- Name: unidad_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE analisis_unidades_assn ALTER COLUMN unidad_id SET DEFAULT nextval('analisis_unidades_assn_unidad_id_seq'::regclass);


--
-- TOC entry 1816 (class 2604 OID 16509)
-- Dependencies: 1525 1524
-- Name: clientes_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE clientes ALTER COLUMN clientes_id SET DEFAULT nextval('clientes_clientes_id_seq'::regclass);


--
-- TOC entry 1817 (class 2604 OID 16510)
-- Dependencies: 1527 1526
-- Name: metodo_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE metodos ALTER COLUMN metodo_id SET DEFAULT nextval('metodos_metodo_id_seq'::regclass);


--
-- TOC entry 1818 (class 2604 OID 16511)
-- Dependencies: 1529 1528
-- Name: muestras_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE muestras ALTER COLUMN muestras_id SET DEFAULT nextval('muestras_muestras_id_seq'::regclass);


--
-- TOC entry 1820 (class 2604 OID 16512)
-- Dependencies: 1531 1530
-- Name: ordenes_trabajo_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ordenes_trabajo ALTER COLUMN ordenes_trabajo_id SET DEFAULT nextval('ordenes_trabajo_ordenes_trabajo_id_seq'::regclass);


--
-- TOC entry 1822 (class 2604 OID 16513)
-- Dependencies: 1533 1532
-- Name: resultados_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE resultados ALTER COLUMN resultados_id SET DEFAULT nextval('resultados_resultados_id_seq'::regclass);


--
-- TOC entry 1823 (class 2604 OID 16514)
-- Dependencies: 1535 1534
-- Name: roles_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE roles ALTER COLUMN roles_id SET DEFAULT nextval('roles_roles_id_seq'::regclass);


--
-- TOC entry 1824 (class 2604 OID 16515)
-- Dependencies: 1537 1536
-- Name: unidad_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE unidades ALTER COLUMN unidad_id SET DEFAULT nextval('unidades_unidad_id_seq'::regclass);


--
-- TOC entry 1825 (class 2604 OID 16516)
-- Dependencies: 1542 1538
-- Name: usuarios_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE usuarios ALTER COLUMN usuarios_id SET DEFAULT nextval('usuarios_usuarios_id_seq'::regclass);


--
-- TOC entry 1826 (class 2604 OID 16517)
-- Dependencies: 1540 1539
-- Name: usuarios_analisis_id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE usuarios_analisis ALTER COLUMN usuarios_analisis_id SET DEFAULT nextval('usuarios_analisis_usuarios_analisis_id_seq'::regclass);


--
-- TOC entry 1830 (class 2606 OID 16519)
-- Dependencies: 1517 1517 1517
-- Name: analisis_metodos_assn_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY analisis_metodos_assn
    ADD CONSTRAINT analisis_metodos_assn_pkey PRIMARY KEY (analisis_id, metodo_id);


--
-- TOC entry 1832 (class 2606 OID 16521)
-- Dependencies: 1520 1520 1520
-- Name: analisis_ordenes_trabajo_assn_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY analisis_ordenes_trabajo_assn
    ADD CONSTRAINT analisis_ordenes_trabajo_assn_pkey PRIMARY KEY (analisis_id, ordenes_trabajo_id);


--
-- TOC entry 1828 (class 2606 OID 16523)
-- Dependencies: 1515 1515
-- Name: analisis_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY analisis
    ADD CONSTRAINT analisis_pkey PRIMARY KEY (analisis_id);


--
-- TOC entry 1834 (class 2606 OID 16525)
-- Dependencies: 1521 1521 1521
-- Name: analisis_unidades_assn_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY analisis_unidades_assn
    ADD CONSTRAINT analisis_unidades_assn_pkey PRIMARY KEY (analisis_id, unidad_id);


--
-- TOC entry 1836 (class 2606 OID 16527)
-- Dependencies: 1524 1524
-- Name: clientes_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY clientes
    ADD CONSTRAINT clientes_pkey PRIMARY KEY (clientes_id);


--
-- TOC entry 1838 (class 2606 OID 16529)
-- Dependencies: 1526 1526
-- Name: metodos_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY metodos
    ADD CONSTRAINT metodos_pkey PRIMARY KEY (metodo_id);


--
-- TOC entry 1842 (class 2606 OID 16531)
-- Dependencies: 1528 1528
-- Name: muestras_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY muestras
    ADD CONSTRAINT muestras_pkey PRIMARY KEY (muestras_id);


--
-- TOC entry 1847 (class 2606 OID 16533)
-- Dependencies: 1530 1530
-- Name: ordenes_trabajo_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ordenes_trabajo
    ADD CONSTRAINT ordenes_trabajo_pkey PRIMARY KEY (ordenes_trabajo_id);


--
-- TOC entry 1852 (class 2606 OID 16535)
-- Dependencies: 1532 1532
-- Name: resultados_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY resultados
    ADD CONSTRAINT resultados_pkey PRIMARY KEY (resultados_id);


--
-- TOC entry 1854 (class 2606 OID 16537)
-- Dependencies: 1534 1534
-- Name: roles_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (roles_id);


--
-- TOC entry 1856 (class 2606 OID 16539)
-- Dependencies: 1536 1536
-- Name: unidades_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY unidades
    ADD CONSTRAINT unidades_pkey PRIMARY KEY (unidad_id);


--
-- TOC entry 1864 (class 2606 OID 16541)
-- Dependencies: 1539 1539
-- Name: usuarios_analisis_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY usuarios_analisis
    ADD CONSTRAINT usuarios_analisis_pkey PRIMARY KEY (usuarios_analisis_id);


--
-- TOC entry 1858 (class 2606 OID 16543)
-- Dependencies: 1538 1538
-- Name: usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (usuarios_id);


--
-- TOC entry 1868 (class 2606 OID 16545)
-- Dependencies: 1541 1541 1541
-- Name: usuarios_roles_assn_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY usuarios_roles_assn
    ADD CONSTRAINT usuarios_roles_assn_pkey PRIMARY KEY (usuarios_id, roles_id);


--
-- TOC entry 1860 (class 2606 OID 16547)
-- Dependencies: 1538 1538
-- Name: usuarios_usuario_key; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_usuario_key UNIQUE (usuario);


--
-- TOC entry 1861 (class 1259 OID 16548)
-- Dependencies: 1539
-- Name: fki_analisis_id; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX fki_analisis_id ON usuarios_analisis USING btree (analisis_id);


--
-- TOC entry 1839 (class 1259 OID 16549)
-- Dependencies: 1528
-- Name: fki_clientes_muestras; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX fki_clientes_muestras ON muestras USING btree (clientes_id);


--
-- TOC entry 1843 (class 1259 OID 16550)
-- Dependencies: 1530
-- Name: fki_clientes_ordenes_trabajo; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX fki_clientes_ordenes_trabajo ON ordenes_trabajo USING btree (clientes_id);


--
-- TOC entry 1844 (class 1259 OID 16551)
-- Dependencies: 1530
-- Name: fki_muestras_ordenes_trabajo; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX fki_muestras_ordenes_trabajo ON ordenes_trabajo USING btree (muestras_id);


--
-- TOC entry 1865 (class 1259 OID 16552)
-- Dependencies: 1541
-- Name: fki_roles_usuarios_roles; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX fki_roles_usuarios_roles ON usuarios_roles_assn USING btree (roles_id);


--
-- TOC entry 1840 (class 1259 OID 16553)
-- Dependencies: 1528
-- Name: fki_usuarios_muestras; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX fki_usuarios_muestras ON muestras USING btree (usuarios_id);


--
-- TOC entry 1845 (class 1259 OID 16554)
-- Dependencies: 1530
-- Name: fki_usuarios_ordenes_trabajo; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX fki_usuarios_ordenes_trabajo ON ordenes_trabajo USING btree (usuarios_id);


--
-- TOC entry 1866 (class 1259 OID 16555)
-- Dependencies: 1541
-- Name: fki_usuarios_usuarios_roles; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX fki_usuarios_usuarios_roles ON usuarios_roles_assn USING btree (usuarios_id);


--
-- TOC entry 1862 (class 1259 OID 16556)
-- Dependencies: 1539
-- Name: fki_usuariosid; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX fki_usuariosid ON usuarios_analisis USING btree (usuarios_id);


--
-- TOC entry 1848 (class 1259 OID 16557)
-- Dependencies: 1532
-- Name: idx_ordenes_trabajo_resultados; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX idx_ordenes_trabajo_resultados ON resultados USING btree (ordenes_trabajo_id);


--
-- TOC entry 1849 (class 1259 OID 16558)
-- Dependencies: 1532
-- Name: idx_resultados_analisis; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX idx_resultados_analisis ON resultados USING btree (analisis_id);


--
-- TOC entry 1850 (class 1259 OID 16559)
-- Dependencies: 1532
-- Name: idx_usuarios_resultados; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX idx_usuarios_resultados ON resultados USING btree (usuarios_id);


--
-- TOC entry 1887 (class 2620 OID 16560)
-- Dependencies: 1520 20
-- Name: agrega_resultados; Type: TRIGGER; Schema: public; Owner: -
--

CREATE TRIGGER agrega_resultados
    AFTER INSERT ON analisis_ordenes_trabajo_assn
    FOR EACH ROW
    EXECUTE PROCEDURE agrega_resultados();


--
-- TOC entry 1871 (class 2606 OID 16561)
-- Dependencies: 1827 1520 1515
-- Name: analisis_ordenes_trabajo_assn_analisis_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY analisis_ordenes_trabajo_assn
    ADD CONSTRAINT analisis_ordenes_trabajo_assn_analisis_id_fkey FOREIGN KEY (analisis_id) REFERENCES analisis(analisis_id);


--
-- TOC entry 1872 (class 2606 OID 16566)
-- Dependencies: 1846 1530 1520
-- Name: analisis_ordenes_trabajo_assn_ordenes_trabajo_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY analisis_ordenes_trabajo_assn
    ADD CONSTRAINT analisis_ordenes_trabajo_assn_ordenes_trabajo_id_fkey FOREIGN KEY (ordenes_trabajo_id) REFERENCES ordenes_trabajo(ordenes_trabajo_id);


--
-- TOC entry 1875 (class 2606 OID 16571)
-- Dependencies: 1835 1524 1528
-- Name: clientes_muestras; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY muestras
    ADD CONSTRAINT clientes_muestras FOREIGN KEY (clientes_id) REFERENCES clientes(clientes_id);


--
-- TOC entry 1877 (class 2606 OID 16576)
-- Dependencies: 1530 1524 1835
-- Name: clientes_ordenes_trabajo; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY ordenes_trabajo
    ADD CONSTRAINT clientes_ordenes_trabajo FOREIGN KEY (clientes_id) REFERENCES clientes(clientes_id);


--
-- TOC entry 1869 (class 2606 OID 16581)
-- Dependencies: 1517 1827 1515
-- Name: fk_analisis_id; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY analisis_metodos_assn
    ADD CONSTRAINT fk_analisis_id FOREIGN KEY (analisis_id) REFERENCES analisis(analisis_id);


--
-- TOC entry 1873 (class 2606 OID 16586)
-- Dependencies: 1521 1515 1827
-- Name: fk_analisis_id; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY analisis_unidades_assn
    ADD CONSTRAINT fk_analisis_id FOREIGN KEY (analisis_id) REFERENCES analisis(analisis_id);


--
-- TOC entry 1870 (class 2606 OID 16591)
-- Dependencies: 1517 1526 1837
-- Name: fk_metodo_id; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY analisis_metodos_assn
    ADD CONSTRAINT fk_metodo_id FOREIGN KEY (metodo_id) REFERENCES metodos(metodo_id);


--
-- TOC entry 1874 (class 2606 OID 16596)
-- Dependencies: 1521 1536 1855
-- Name: fk_unidad_id; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY analisis_unidades_assn
    ADD CONSTRAINT fk_unidad_id FOREIGN KEY (unidad_id) REFERENCES unidades(unidad_id);


--
-- TOC entry 1878 (class 2606 OID 16601)
-- Dependencies: 1530 1528 1841
-- Name: muestras_ordenes_trabajo; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY ordenes_trabajo
    ADD CONSTRAINT muestras_ordenes_trabajo FOREIGN KEY (muestras_id) REFERENCES muestras(muestras_id);


--
-- TOC entry 1880 (class 2606 OID 16606)
-- Dependencies: 1532 1530 1846
-- Name: ordenes_trabajo_resultados; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY resultados
    ADD CONSTRAINT ordenes_trabajo_resultados FOREIGN KEY (ordenes_trabajo_id) REFERENCES ordenes_trabajo(ordenes_trabajo_id);


--
-- TOC entry 1881 (class 2606 OID 16611)
-- Dependencies: 1532 1515 1827
-- Name: resultados_analisis_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY resultados
    ADD CONSTRAINT resultados_analisis_id_fkey FOREIGN KEY (analisis_id) REFERENCES analisis(analisis_id);


--
-- TOC entry 1885 (class 2606 OID 16616)
-- Dependencies: 1541 1534 1853
-- Name: roles_usuarios_roles; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY usuarios_roles_assn
    ADD CONSTRAINT roles_usuarios_roles FOREIGN KEY (roles_id) REFERENCES roles(roles_id);


--
-- TOC entry 1883 (class 2606 OID 16621)
-- Dependencies: 1539 1515 1827
-- Name: usuarios_analisis_assn_analisis_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY usuarios_analisis
    ADD CONSTRAINT usuarios_analisis_assn_analisis_id_fkey FOREIGN KEY (analisis_id) REFERENCES analisis(analisis_id);


--
-- TOC entry 1884 (class 2606 OID 16626)
-- Dependencies: 1539 1538 1857
-- Name: usuarios_analisis_assn_usuarios_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY usuarios_analisis
    ADD CONSTRAINT usuarios_analisis_assn_usuarios_id_fkey FOREIGN KEY (usuarios_id) REFERENCES usuarios(usuarios_id);


--
-- TOC entry 1876 (class 2606 OID 16631)
-- Dependencies: 1528 1538 1857
-- Name: usuarios_muestras; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY muestras
    ADD CONSTRAINT usuarios_muestras FOREIGN KEY (usuarios_id) REFERENCES usuarios(usuarios_id);


--
-- TOC entry 1879 (class 2606 OID 16636)
-- Dependencies: 1530 1538 1857
-- Name: usuarios_ordenes_trabajo; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY ordenes_trabajo
    ADD CONSTRAINT usuarios_ordenes_trabajo FOREIGN KEY (usuarios_id) REFERENCES usuarios(usuarios_id);


--
-- TOC entry 1882 (class 2606 OID 16641)
-- Dependencies: 1538 1532 1857
-- Name: usuarios_resultados; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY resultados
    ADD CONSTRAINT usuarios_resultados FOREIGN KEY (usuarios_id) REFERENCES usuarios(usuarios_id);


--
-- TOC entry 1886 (class 2606 OID 16646)
-- Dependencies: 1857 1541 1538
-- Name: usuarios_usuarios_roles; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY usuarios_roles_assn
    ADD CONSTRAINT usuarios_usuarios_roles FOREIGN KEY (usuarios_id) REFERENCES usuarios(usuarios_id);


--
-- TOC entry 1892 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: -
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2009-11-12 01:31:19

--
-- PostgreSQL database dump complete
--

