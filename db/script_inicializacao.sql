create user usr_app with password 'teste123';

create database db_teste;
\connect db_teste;
create schema prj_solicitacoes;

create table prj_solicitacoes.status_solicitante
(
    id   bigserial,
    nome character varying(60),
    constraint pk_statussolicitante
        primary key (id)
);

create table prj_solicitacoes.tipo_contato
(
    id   bigserial,
    nome character varying(20),
    constraint pk_tipocontato
        primary key (id)
);

create table prj_solicitacoes.contato
(
    id             bigserial,
    id_tipocontato bigint,
    contato        character varying(50),
    constraint pk_contato
        primary key (id),
    constraint fk_contato_tipocontato_idtipocontato
        foreign key (id_tipocontato) references prj_solicitacoes.tipo_contato (id)
);

create table prj_solicitacoes.area
(
    id   bigserial,
    nome character varying(60) not null,
    constraint pk_area primary key (id)
);

create table prj_solicitacoes.solicitante
(
    id                   bigserial,
    id_contato           bigint,
    nome                 character varying(255),
    id_area              bigint,
    data_cadastro        date default now(),
    id_statussolicitante bigint,
    constraint pk_solicitante
        primary key (id),
    constraint fk_solicitante_contato_id
        foreign key (id_contato) references prj_solicitacoes.contato (id),
    constraint fk_solicitante_statussolicitante_id
        foreign key (id_statussolicitante) references prj_solicitacoes.status_solicitante (id),
    constraint fk_solicitante_area_id
        foreign key (id_area) references prj_solicitacoes.area (id)

);

create table prj_solicitacoes.status_solicitacao
(
    id   bigserial,
    nome character varying(60) not null,
    constraint pk_statussolicitacao
        primary key (id)
);

create table prj_solicitacoes.solicitacao
(
    id                   bigserial,
    id_solicitante       bigint,
    descricao            character varying(4000),
    id_statussolicitacao bigint,
    constraint pk_solicitacao
        primary key (id),
    constraint fk_solicitacao_solicitante
        foreign key (id_solicitante) references prj_solicitacoes.solicitante (id),
    constraint fk_solicitacao_statussolicitacao
        foreign key (id_statussolicitacao) references prj_solicitacoes.status_solicitacao (id)
);


grant usage on schema prj_solicitacoes to usr_app;
GRANT USAGE, SELECT ON ALL SEQUENCES IN SCHEMA prj_solicitacoes TO usr_app;
