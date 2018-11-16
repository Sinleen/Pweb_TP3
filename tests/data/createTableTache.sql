create table tache (
	id serial NOT NULL primary key,
  expiration DATE NOT NULL,
  categorie VARCHAR(45) NOT NULL,
  description TEXT NULL,
  accomplie char(1) check (accomplie in ('O', 'N'))
);
