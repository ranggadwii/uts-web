CREATE TABLE userdb (
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE datadb (
    nik INT(11) NOT NULL,
    nm VARCHAR(64) NOT NULL,
    almt VARCHAR(255) NOT NULL,
    jkl VARCHAR(16) NOT NULL,
    skl VARCHAR(50) NOT NULL
);

CREATE TABLE matkuldb (
    matkul VARCHAR(255) NOT NULL,
    deskripsi VARCHAR(255) NOT NULL,
    materi1 VARCHAR(255) NULL,
    materi2 VARCHAR(255) NULL,
    materi3 VARCHAR(255) NULL,
    materi4 VARCHAR(255) NULL,
    materi5 VARCHAR(255) NULL,
    materi6 VARCHAR(255) NULL,
    materi7 VARCHAR(255) NULL,
    materi8 VARCHAR(255) NULL,
    materi9 VARCHAR(255) NULL,
    materi10 VARCHAR(255) NULL,
    materi11 VARCHAR(255) NULL,
    materi12 VARCHAR(255) NULL,
    materi13 VARCHAR(255) NULL,
    materi14 VARCHAR(255) NULL
);