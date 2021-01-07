CREATE TABLE medecin
(
    numRPPS bigint primary key not null,
    nomM varchar(100),
    prenomM varchar(100),
    specialite varchar(100),
    ville varchar(100),
    adresse varchar(500),
    pass varchar(100)
);


CREATE TABLE patient
(
    numSS bigint primary key not null,
    nomP varchar(100),
    prenomP varchar(100),
    sexe varchar(1),
    datenaiss date,
    numRPPS bigint not null,

    FOREIGN KEY (numRPPS) REFERENCES medecin(numRPPS)
);

CREATE TABLE consulte
(
    numRPPS bigint not null,
    numSS bigint not null,
    dateC date,
    diagnostic varchar(500),
    numOrd int primary key not null,

    FOREIGN KEY (numRPPS) REFERENCES medecin(numRPPS),
    FOREIGN KEY (numSS) REFERENCES patient(numSS)
);