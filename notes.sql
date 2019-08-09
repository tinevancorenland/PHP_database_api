CREATE DATABASE IF NOT EXISTS db_notes;

CREATE TABLE IF NOT EXISTS notes (
  note_id       int             PRIMARY KEY IDENTITY,
  title         varchar (255)   UNIQUE NOT NULL,
  content       text (1000),
  );