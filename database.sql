DROP TABLE IF EXISTS Habilities;
CREATE TABLE Habilities(
    id integer primary key AUTOINCREMENT,
    topic text unique,
    color text,
    background text,
    icon text,
    title text not null,
    habilityDescription text
);

DROP TABLE IF EXISTS HabilitiesExamples;
CREATE TABLE HabilitiesExamples(
    id integer primary key AUTOINCREMENT,
    idHability integer,
    title text not null,
    habilityViewUrl text,
    habilityExampleUrl text,
    habilityExampleDescription text
);

.mode tabs
.import habilities.txt Habilities
.import habilitiesExamples.txt HabilitiesExamples
.save habilities.db