#  Laravel Video Game Web Shop

Autor: **Matija Kojčić**

Ovo je web aplikacija za prodaju video igara napravljena u Laravelu. Omogucava autentifikaciju korisnika, kontrolni panel za admina, CRUD funkcionalnost za igre, upravljanje porudzbina i komentarima

---

## 🌐 Dostupni jezici

- [English](README.md)
- [Srpski](README.sr.md)
- [日本語](README.ja.md)

---

##  Setup Instrukcije

1. Importujte `mkojcic.sql` u vas lokalni MySQL server.
2. Pokrenite `start.bat` da biste aktivirali Laravel development server.
3. Otvorite browser i idite na [http://127.0.0.1:8000]

---

##  Funkcionalnosti

- **Pocetna strana**: Prikaziju istaknute video igre.
- **Detalji igre**: Kliknite na "Opsirnije" za vise informacija i skrolujte do dugmeta "Poruci" da biste narucili igru.
- **Korisnicki kontrolni panel**:
  - Pregled i upravljanje porudzbinama.
  - Ostavljanje komentara za igre koje ste narucili.
  - Otkazivanje postojecih porudzbina.
- **Admin kontrolni panel**:
  - Dostupan samo adminima.
  - Upravljanje:
    - Igrama (CRUD)
    - Korisnicima (CRUD, admin-only)
    - Komentarima (CRUD)
  - Editori mogu upravljati igrama i komentarima, ali ne i korisnicima.
  - Obicni korisnici nemaju pristup admin panelu.

---

##  Test Accounts

| Uloga   | Email              | Password |
|--------|--------------------|----------|
| Admin  | admin@pwa.rs       | admin    |
| Editor | editor@pwa.rs      | editor   |
| User   | user@pwa.rs        | user     |

---

##  Planirane funkcionalnosti

- Korpa za kupovinu.
- Bisejezicka podrska direktno na vebsajtu (pored README datoteka).