--
-- PostgreSQL dbmercados
--


CREATE SCHEMA IF NOT EXISTS public;

ALTER SCHEMA public OWNER TO postgres;


CREATE TABLE IF NOT EXISTS public.archivo (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    ruta character varying NOT NULL,
    tipo integer NOT NULL,
    fecha_creacion date NOT NULL,
    activo boolean DEFAULT true NOT NULL
);


ALTER TABLE public.archivo OWNER TO postgres;

--
-- Name: archivo_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

ALTER TABLE public.archivo ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.archivo_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- Name: direccion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE IF NOT EXISTS public.direccion (
    id integer NOT NULL,
    calle character varying NOT NULL,
    numero character varying NOT NULL,
    colonia character varying NOT NULL,
    estado character varying NOT NULL,
    pais character varying NOT NULL,
    codigo_postal character varying NOT NULL,
    latitud character varying,
    longitud character varying,
    activo boolean DEFAULT true NOT NULL
);


ALTER TABLE public.direccion OWNER TO postgres;

--
-- Name: direccion_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

ALTER TABLE public.direccion ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.direccion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- Name: giro; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE IF NOT EXISTS public.giro (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    activo boolean DEFAULT true NOT NULL
);


ALTER TABLE public.giro OWNER TO postgres;

--
-- Name: giro_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

ALTER TABLE public.giro ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.giro_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- Name: locacion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE IF NOT EXISTS public.locacion (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    historia text,
    telefono character varying
);


ALTER TABLE public.locacion OWNER TO postgres;

--
-- Name: locacion_archivo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE IF NOT EXISTS public.locacion_archivo (
    id_locacion integer NOT NULL,
    id_archivo integer NOT NULL
);


ALTER TABLE public.locacion_archivo OWNER TO postgres;

--
-- Name: locacion_id_locacion_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

ALTER TABLE public.locacion ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.locacion_id_locacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- Name: local; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE IF NOT EXISTS public.local (
    id integer NOT NULL,
    clave character varying NOT NULL,
    eslogan character varying NOT NULL,
    activo boolean DEFAULT true NOT NULL,
    id_giro integer NOT NULL,
    id_locacion integer NOT NULL,
    id_mercado integer NOT NULL
);


ALTER TABLE public.local OWNER TO postgres;

--
-- Name: local_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

ALTER TABLE public.local ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.local_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- Name: mercado; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE IF NOT EXISTS public.mercado (
    id integer NOT NULL,
    zona character varying NOT NULL,
    hora_apertura character varying NOT NULL,
    hora_cierre character varying NOT NULL,
    descripcion character varying NOT NULL,
    activo boolean DEFAULT true NOT NULL,
    id_locacion integer NOT NULL,
    id_direccion integer NOT NULL
);


ALTER TABLE public.mercado OWNER TO postgres;

--
-- Name: mercado_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

ALTER TABLE public.mercado ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.mercado_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- Name: palabra_clave; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE IF NOT EXISTS public.palabra_clave (
    id integer NOT NULL,
    valor character varying NOT NULL,
    activo boolean DEFAULT true NOT NULL,
    id_local integer NOT NULL
);


ALTER TABLE public.palabra_clave OWNER TO postgres;

--
-- Name: palabra_clave_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

ALTER TABLE public.palabra_clave ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.palabra_clave_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);

--
-- Name: archivo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.archivo_id_seq', 1, false);


--
-- Name: direccion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.direccion_id_seq', 1, false);


--
-- Name: giro_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.giro_id_seq', 1, false);


--
-- Name: locacion_id_locacion_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.locacion_id_locacion_seq', 1, false);


--
-- Name: local_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.local_id_seq', 1, false);


--
-- Name: mercado_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.mercado_id_seq', 1, false);


--
-- Name: palabra_clave_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.palabra_clave_id_seq', 1, false);


--
-- Name: archivo archivo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.archivo
    ADD CONSTRAINT archivo_pkey PRIMARY KEY (id);


--
-- Name: direccion direccion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.direccion
    ADD CONSTRAINT direccion_pkey PRIMARY KEY (id);


--
-- Name: giro giro_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.giro
    ADD CONSTRAINT giro_pkey PRIMARY KEY (id);


--
-- Name: locacion locacion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.locacion
    ADD CONSTRAINT locacion_pkey PRIMARY KEY (id);


--
-- Name: local local_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.local
    ADD CONSTRAINT local_pkey PRIMARY KEY (id);


--
-- Name: mercado mercado_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mercado
    ADD CONSTRAINT mercado_pkey PRIMARY KEY (id);


--
-- Name: palabra_clave palabra_clave_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.palabra_clave
    ADD CONSTRAINT palabra_clave_pkey PRIMARY KEY (id);


--
-- Name: locacion_archivo archivo; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.locacion_archivo
    ADD CONSTRAINT archivo FOREIGN KEY (id_archivo) REFERENCES public.archivo(id) NOT VALID;


--
-- Name: mercado direccion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mercado
    ADD CONSTRAINT direccion FOREIGN KEY (id_direccion) REFERENCES public.direccion(id) NOT VALID;


--
-- Name: local giro; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.local
    ADD CONSTRAINT giro FOREIGN KEY (id_giro) REFERENCES public.giro(id) NOT VALID;


--
-- Name: mercado locacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mercado
    ADD CONSTRAINT locacion FOREIGN KEY (id_locacion) REFERENCES public.locacion(id);


--
-- Name: local locacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.local
    ADD CONSTRAINT locacion FOREIGN KEY (id_locacion) REFERENCES public.locacion(id) NOT VALID;


--
-- Name: locacion_archivo locacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.locacion_archivo
    ADD CONSTRAINT locacion FOREIGN KEY (id_locacion) REFERENCES public.locacion(id) NOT VALID;


--
-- Name: palabra_clave local; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.palabra_clave
    ADD CONSTRAINT local FOREIGN KEY (id_local) REFERENCES public.local(id) NOT VALID;


--
-- Name: local mercado; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.local
    ADD CONSTRAINT mercado FOREIGN KEY (id_mercado) REFERENCES public.mercado(id) NOT VALID;
