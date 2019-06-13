create table consultation
(
   id                   int not null,
   patid                int not null,
   use_id               int not null,
   condesc              varchar(254),
   condate              datetime,
   primary key (id)
);

create table exampresc
(
   con_id               int not null,
   lab_id               int not null,
   id                   int not null,
   resultfile           varchar(254),
   primary key (con_id, lab_id, id)
);

create table labtest
(
   id                   int not null,
   name                 varchar(254),
   price                varchar(254),
   labdesc              varchar(254),
   primary key (id)
);

create table parameter
(
   id                   int not null,
   con_id               int not null,
   temperature          numeric(8,0),
   weight               numeric(8,0),
   tension              numeric(8,0),
   primary key (id)
);

create table patients
(
   patid                int not null,
   fname                varchar(254),
   lname                varchar(254),
   dob                  datetime,
   phonenum             varchar(254),
   address              varchar(254),
   email                varchar(254),
   gender               varchar(254),
   primary key (patid)
);

create table payment
(
   id                   int not null,
   use_id               int not null,
   patid                int not null,
   type                 varchar(254),
   total                numeric(8,0),
   paydate              datetime,
   primary key (id)
);

create table prescription
(
   idpres               int not null,
   id                   int not null,
   presdesc             varchar(254),
   drugname             varchar(254),
   primary key (idpres)
);

create table rdv
(
   id                   int not null,
   use_id               int not null,
   patid                int not null,
   rdvdate              datetime,
   rdvtime              varchar(254),
   rdvdesc              varchar(254),
   primary key (id)
);

create table role
(
   id                   int not null,
   name                 varchar(254),
   code                 varchar(254),
   primary key (id)
);

create table user
(
   id                   int not null,
   fname                varchar(254),
   dob                  datetime,
   adress               varchar(254),
   gender               varchar(254),
   phonenum             varchar(254),
   email                varchar(254),
   login                varchar(254),
   password             varchar(254),
   sex                  varchar(254),
   lname                varchar(254),
   speciality           varchar(254),
   primary key (id)
);

create table privilege
(
   id                   int not null,
   rol_id               int not null,
   primary key (id, rol_id)
);

alter table consultation add constraint fk_association7 foreign key (use_id)
      references user (id) on delete restrict on update restrict;

alter table consultation add constraint fk_goesfor foreign key (patid)
      references patients (patid) on delete restrict on update restrict;

alter table exampresc add constraint fk_i foreign key (con_id)
      references consultation (id) on delete restrict on update restrict;

alter table exampresc add constraint fk_j foreign key (lab_id)
      references labtest (id) on delete restrict on update restrict;

alter table parameter add constraint fk_association5 foreign key (con_id)
      references consultation (id) on delete restrict on update restrict;

alter table payment add constraint fk_association10 foreign key (patid)
      references patients (patid) on delete restrict on update restrict;

alter table payment add constraint fk_association12 foreign key (use_id)
      references user (id) on delete restrict on update restrict;

alter table prescription add constraint fk_association9 foreign key (id)
      references consultation (id) on delete restrict on update restrict;

alter table rdv add constraint fk_association6 foreign key (use_id)
      references user (id) on delete restrict on update restrict;

alter table rdv add constraint fk_association8 foreign key (patid)
      references patients (patid) on delete restrict on update restrict;

alter table privilege add constraint fk_privilege foreign key (rol_id)
      references role (id) on delete restrict on update restrict;

alter table privilege add constraint fk_privilege foreign key (id)
      references user (id) on delete restrict on update restrict;

