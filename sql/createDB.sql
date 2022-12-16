-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2022-12-06 23:09:01.607

-- tables
-- Table: Admin
CREATE TABLE Admin (
    A_ID int NOT NULL,
    A_NAMA varchar(150) NULL,
    A_EMAIL varchar(50) NULL,
    A_TLP varchar(25) NULL,
    A_PASSWORD varchar(50) NULL,
    CONSTRAINT Admin_pk PRIMARY KEY (A_ID)
);

-- Table: Jasa_Karya
CREATE TABLE Jasa_Karya (
    JK_ID int NOT NULL,
    JK_JUDUL varchar(255) NULL,
    JK_DESKRIPSI varchar(255) NULL,
    JK_HARGA int NULL,
    Seniman_S_ID int NOT NULL,
    Kategori_K_ID int NOT NULL,
    CONSTRAINT Jasa_Karya_pk PRIMARY KEY (JK_ID)
);

-- Table: Kategori
CREATE TABLE Kategori (
    K_ID int NOT NULL,
    K_NAMA varchar(50) NULL,
    K_JMLH int NULL,
    CONSTRAINT Kategori_pk PRIMARY KEY (K_ID)
);

-- Table: Pelanggan
CREATE TABLE Pelanggan (
    P_ID int NOT NULL,
    P_NAMA varchar(150) NULL,
    P_EMAIL varchar(50) NULL,
    P_TLP varchar(25) NULL,
    P_BIO varchar(255) NULL,
    P_PASSWORD varchar(50) NULL,
    CONSTRAINT Pelanggan_pk PRIMARY KEY (P_ID)
);

-- Table: Seniman
CREATE TABLE Seniman (
    S_ID int NOT NULL,
    S_NAMA varchar(150) NULL,
    S_EMAIL varchar(150) NULL,
    S_TLP varchar(25) NULL,
    S_BIO varchar(255) NULL,
    S_PASSWORD VARCHAR(50) NULL,
    CONSTRAINT Seniman_pk PRIMARY KEY (S_ID)
);

-- Table: Token
CREATE TABLE Token (
    ID_Token int NOT NULL,
    Pelanggan_P_ID int NOT NULL,
    Seniman_S_ID int NULL,
    CONSTRAINT Token_pk PRIMARY KEY (ID_Token)
);

-- Table: Transaksi
CREATE TABLE Transaksi (
    T_ID int NOT NULL,
    T_STATUS int NULL,
    T_TGL timestamp NULL,
    Pelanggan_P_ID int NOT NULL,
    Admin_A_ID int NOT NULL,
    Jasa_Karya_JK_ID int NOT NULL,
    CONSTRAINT Transaksi_pk PRIMARY KEY (T_ID)
);

-- foreign keys
-- Reference: Jasa_Karya_Kategori (table: Jasa_Karya)
ALTER TABLE Jasa_Karya ADD CONSTRAINT Jasa_Karya_Kategori FOREIGN KEY Jasa_Karya_Kategori (Kategori_K_ID)
    REFERENCES Kategori (K_ID);

-- Reference: Jasa_Karya_Seniman (table: Jasa_Karya)
ALTER TABLE Jasa_Karya ADD CONSTRAINT Jasa_Karya_Seniman FOREIGN KEY Jasa_Karya_Seniman (Seniman_S_ID)
    REFERENCES Seniman (S_ID);

-- Reference: Token_Pelanggan (table: Token)
ALTER TABLE Token ADD CONSTRAINT Token_Pelanggan FOREIGN KEY Token_Pelanggan (Pelanggan_P_ID)
    REFERENCES Pelanggan (P_ID);

-- Reference: Token_Seniman (table: Token)
ALTER TABLE Token ADD CONSTRAINT Token_Seniman FOREIGN KEY Token_Seniman (Seniman_S_ID)
    REFERENCES Seniman (S_ID);

-- Reference: Transaksi_Admin (table: Transaksi)
ALTER TABLE Transaksi ADD CONSTRAINT Transaksi_Admin FOREIGN KEY Transaksi_Admin (Admin_A_ID)
    REFERENCES Admin (A_ID);

-- Reference: Transaksi_Jasa_Karya (table: Transaksi)
ALTER TABLE Transaksi ADD CONSTRAINT Transaksi_Jasa_Karya FOREIGN KEY Transaksi_Jasa_Karya (Jasa_Karya_JK_ID)
    REFERENCES Jasa_Karya (JK_ID);

-- Reference: Transaksi_Pelanggan (table: Transaksi)
ALTER TABLE Transaksi ADD CONSTRAINT Transaksi_Pelanggan FOREIGN KEY Transaksi_Pelanggan (Pelanggan_P_ID)
    REFERENCES Pelanggan (P_ID);

-- Add foto to pelanggan (FICO)
ALTER TABLE pelanggan ADD P_FOTO VARCHAR(255) NULL;

-- End of file.

