CREATE DATABASE sevima_academy;



/*==============================================================*/
/* Table: user                                              */
/*==============================================================*/
CREATE TABLE "user"
(
  userid serial NOT NULL,
  username character varying(50),
  password character varying(32),
  userdesc character varying(50),
  email character varying(100),
  isactive character varying(1) DEFAULT 1,
  softdelete character(1) NOT NULL DEFAULT '0'::bpchar,
  CONSTRAINT pk_sc_user PRIMARY KEY (userid),
  CONSTRAINT uniq_username UNIQUE (username)
)
WITH (
  OIDS=FALSE
);


/*==============================================================*/
/* Table: post                                              */
/*==============================================================*/
CREATE TABLE post
(
  idpost serial NOT NULL,
  userid integer NOT NULL,
  isipost character varying(1000) NOT NULL,
  softdelete character(1) NOT NULL DEFAULT '0'::bpchar,
  CONSTRAINT pk_idpost PRIMARY KEY (idpost),
  CONSTRAINT fk_userid_user FOREIGN KEY (userid)
      REFERENCES public.user (userid) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE RESTRICT
)
WITH (
  OIDS=FALSE
);


/*==============================================================*/
/* Table: file_post                                              */
/*==============================================================*/
CREATE TABLE file_post
(
  idfile_post serial NOT NULL,
  idpost integer NOT NULL,
  userid integer NOT NULL,
  namafile character varying(255),
  mimetype character varying(255),
  softdelete character(1) NOT NULL DEFAULT '0'::bpchar,
  CONSTRAINT pk_file_post PRIMARY KEY (idfile_post),
  CONSTRAINT fk_idpost_post FOREIGN KEY (idpost)
      REFERENCES public.post (idpost) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT fk_userid_user FOREIGN KEY (userid)
      REFERENCES public.user (userid) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE RESTRICT
)
WITH (
  OIDS=FALSE
);


/*==============================================================*/
/* Table: komentar                                              */
/*==============================================================*/
CREATE TABLE komentar
(
  idkomentar serial NOT NULL,
  idpost integer NOT NULL,
  userid integer NOT NULL,
  komentar character varying(255),
  softdelete character(1) NOT NULL DEFAULT '0'::bpchar,
  CONSTRAINT pk_komentar PRIMARY KEY (idkomentar),
  CONSTRAINT fk_idpost_post FOREIGN KEY (idpost)
      REFERENCES public.post (idpost) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT fk_userid_user FOREIGN KEY (userid)
      REFERENCES public.user (userid) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE RESTRICT
)
WITH (
  OIDS=FALSE
);


/*==============================================================*/
/* Table: Like                                              */
/*==============================================================*/
CREATE TABLE "Like"
(
  idpost integer NOT NULL,
  userid integer NOT NULL,
  softdelete character(1) NOT NULL DEFAULT '0'::bpchar,
  CONSTRAINT pk_like PRIMARY KEY (idpost, userid),
  CONSTRAINT fk_idpost_post FOREIGN KEY (idpost)
      REFERENCES public.post (idpost) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT fk_userid_user FOREIGN KEY (userid)
      REFERENCES public.user (userid) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE RESTRICT
)
WITH (
  OIDS=FALSE
);
