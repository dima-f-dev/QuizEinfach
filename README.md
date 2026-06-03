# Quiz-Plattform

Eine modulare PHP-Webanwendung zur Erstellung und Durchführung von Online-Quizzes. Das Projekt nutzt ein modernes Frontend-Routing auf Basis von Komponenten und ist vollständig für die Containerisierung mit Docker vorbereitet.

## 🚀 Funktionen (Features)
* **Quiz-System:** Dynamische Anzeige und Auswertung von Quiz-Inhalten (`quiz.php`).
* **Benutzerverwaltung:** Sicheres Login- und Registrierungssystem für Nutzer (`login.php`).
* **Erstellungs-Modus:** Integriertes Interface zum Anlegen neuer Quizzes (`create.php`).
* **Responsive Design:** Modernes und mobiles Frontend basierend auf Tailwind CSS.
* **Modulare Architektur:** Trennung von Konfigurationsdaten, Seitenelementen (Header/Footer/Sidebar) und Hauptseiten.

---

## 📂 Projektstruktur

Die Verzeichnisstruktur des Projekts ist wie folgt aufgebaut:

```text
├── assets/                  # Statische Frontend-Ressourcen
│   ├── css/                 # Stylesheets (input.css / generiertes output.css)
│   ├── img/                 # Bilder und Icons (Favicon, Hintergrundbilder)
│   └── js/                  # JavaScript-Logik (main.js, quiz.js, tailwind.config.js)
├── config/                  # Konfigurationsdateien
│   ├── .htaccess            # Apache-Zugriffsrechte für das Config-Verzeichnis
│   ├── db.php               # Datenbankverbindung und PDO-Instanziierung
│   ├── env.php              # Laden der Umgebungsvariablen
│   └── seo_config.php       # SEO- und Metadaten-Konfiguration
├── includes/                # Wiederverwendbare Layout-Komponenten
│   ├── footer.php           # Seitenfuß
│   ├── l_sidebar.php        # Linke Seitenleiste
│   ├── navbar.php           # Hauptnavigation
│   └── r_sidebar.php        # Rechte Seitenleiste
├── node_modules/            # Node.js-Abhängigkeiten (Tailwind CSS CLI)
├── pages/                   # Inhaltsseiten (Dynamic Routing)
│   ├── 404.php              # Fehlerseite
│   ├── create.php           # Quiz erstellen
│   ├── datenschutz.php      # Datenschutzerklärung
│   ├── faq.php              # Häufig gestellte Fragen
│   ├── home.php             # Startseite / Dashboard
│   ├── impressum.php        # Impressum
│   ├── kontakt.php          # Kontaktformular
│   ├── login.php            # Benutzeranmeldung
│   ├── quiz.php             # Quiz-Ansicht und Logik
│   └── setting.php          # Benutzereinstellungen
├── .env                     # Lokale Umgebungsvariablen (DB-Logins)
├── .gitignore               # Ignorierte Dateien für Git (node_modules, .env)
├── .htaccess                # Haupt-Routing und URL-Rewriting für den Webserver
├── docker-compose.yml       # Definition der Docker-Services (Webserver, PHP, DB)
├── Dockerfile               # Build-Anweisungen für das PHP-Anwendungs-Image
├── favicon.ico              # Website-Icon im Root-Verzeichnis
├── index.php                # Haupteinstiegspunkt (Router) der Anwendung
├── package-lock.json        # Exakte Versionssperre der npm-Pakete
└── package.json             # Projektabhängigkeiten und Build-Skripte für Tailwind