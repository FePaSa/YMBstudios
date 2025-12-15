# YMBstudios

## INTRODUCCIÓ 
YMB és un projecte que busca ensenyar a la gent el procés creatiu que es duu a terme quan es fan cançons i música en general. 

L’objectiu d’aquest projecte és ajuntar a 12 o 13 artistes emergents (7 artistes i 6 productors més o menys) i portar-los un mes a viure en una casa amb equips de streaming i de música. 

La idea és muntar una zona de producció, on es controlen totes les càmeres, micròfons i temes del streaming. Junt amb tema de xarxa i connexió. Després, sense la part de producció, també volem muntar 3 sets (estudis de música) amb targetes de so, micròfons, auriculars, pantalles, etc. 

D’aquesta manera necessitarem organitzar sistemes operatius, xarxes, temes de so, hardware i software, empresa per la part de llogar la casa, pagar sous de treballadors, etc. 

Trobem un problema que la gent escolti música i no conegui l’origen de les seves cançons preferides, etc. Per això el nostre projecte fa que tothom tingui la capacitat de conèixer i veure el procés creatiu. 

## CONTEXT I SITUACIÓ INICIAL
El problema que veiem és que la gent escolta música sense saber d’on prové ni com és el procés creatiu que duen a terme els artistes, productors i videogràfs junt amb tota la gent involucrada a una canço.

Aquest projecte s’implementa al sectortor de l’entreteniment musical, i busca apropar al public als artistes, productors i tot l’equip darrera de la música que escolten. D’igual manera els usuaris finals del nostre projecte serien tant els artistes involucrats, ja que aquests guanyarien gent que els coneix. Com l’audiencia que podria coneixer tot el procés musical desde 0 i al natural en directe.  

## ABAST DEL PROJECTE
L’abast del nostre projecte inclou el següent:
- Disseny i implementació de la infraestructura (xarxa, equips, estudis, streaming)
- Planificació de convivencia, calendari de creació i esdeveniments
- Producció i emissió en directe (Streaming, OBS, Cameras, Micròfons per cada artista, etc)
- Difusió del projecte (marketing i xarxes socials)

## 💻 1. Infraestructura Necessària

### 1.1. Infraestructura de Xarxa

Per garantir un streaming estable i la gestió de múltiples connexions:

* **Connexió i Backbone:**
    * Fibra òptica simètrica mínima de **1Gbps** (ideal 2-3Gbps).
    * Router professional amb QoS (Ubiquiti Dream Machine Pro, Mikrotik CCR o ASUS Pro).
    * Switch principal gestionable de **24 o 48 ports gigabit** amb VLANs.
    * Dos switches secundaris per planta o per zones d'estudi.

* **Xarxa Interna (VLANs Separades):**
    * `VLAN Estudis` (targetes de so, ordinadors, DAWs).
    * `VLAN Producció` (càmeres, OBS, servidors).
    * `VLAN Convidats` (WiFi artistes i personal).
    * `VLAN IoT` (llums, panells, etc.).
    * Accés **WiFi 6 o 6E** amb 2-4 APs distribuïts (Ubiquiti, TP-Link Omada...).

* **Seguretat:**
    * Firewall actiu i filtratge de tràfic entre VLANs.
    * Backups automàtics de configuracions.
    * Control d'accés amb comptes i permisos per treballadors.

### 1.2. Infraestructura de Streaming i Producció

La zona de producció és el "cervell" del projecte.

* **Hardware de Producció (PC de realització/streaming):**
    * CPU **Ryzen 9 / Intel i9**.
    * **64GB RAM**.
    * GPU **NVIDIA 4070** o superior per codificació NVENC.
    * Discos **SSD NVMe** per arxius temporals i enregistraments.
    * Pantalles múltiples (2-3 monitors).

* **Taula de Mescles de Vídeo:**
    * Blackmagic ATEM Mini Extreme ISO o ATEM Television Studio.
    * Capturadores (Blackmagic, Elgato o Magewell).

* **Intercomunicació Interna:**
    * Intercom DECT o sistemes IP via xarxa per comunicar amb càmeres i equips.

* **Càmeres:**
    * **6-12 càmeres PTZ** o DSLR/Mirrorless amb captura.
    * Trípodes, suports i "mounts".
    * Controladors PTZ sobre xarxa.

* **Àudio per al Directe:**
    * Taula de so (Behringer XR18 / X32 Rack / Yamaha TF1).
    * Distribució de canals per cada artista i micròfon.
    * Sistema d'in-ear o monitorització interna.

### 1.3. Estudis de Música (3 sets)

* **Hardware Bàsic per cada Estudi:**
    * Ordinador (PC o Mac) amb **32GB RAM** i processador potent per DAW, SSD NVMe.
    * Targeta de so (Focusrite Clarett, Apollo Twin, Motu M4 o similars).
    * Micròfons (Condensador com AT4040, NT1, SM7B amb Cloudlifter si cal).
    * Auriculars tancats (Beyerdynamic DT770, Audio Technica M50x, etc.).
    * Monitors d'estudi (Yamaha HS5/HS7, KRK, Adam T5V...).
    * Tractament acústic (Panells absorbents, Bass traps, Difusors).
    * Suports (Braços de micròfon, peus, antipop).

* **Software:**
    * DAWs: Ableton Live / FL Studio / Logic (si Mac) / Pro Tools.
    * Plugins bàsics (FabFilter, Waves, iZotope, Kontakt, Omnisphere...).
    * Drivers i configuració ASIO/CORE AUDIO.

### 1.4. Infraestructura Audiovisual

* Il·luminació contínua Led (Pantalles, LED strips, llums RGB per ambientació).
* Equip per enregistrar *making-of* (càmeres portàtils).

---

## 🛠️ 2. Informatització del Projecte

### 2.1. Instal·lació i Configuració dels Sistemes Operatius (Windows/MacOS)

* Optimitzacions per àudio (Desactivar processos innecessaris, límits de latència, gestió d'energia al màxim).
* Creació d'**imatges clonables** per replicar configuracions a cada estudi.
* Creació d'usuaris (`Convidat`, `Artistes`, `Administració`).
* Restriccions per evitar instal·lacions no autoritzades.

### 2.2. Configuració de la Xarxa

* Configuració del router professional amb **VLANs**.
* **QoS** per prioritzar streaming i càmeres.
* Rutes internes entre estudis i producció.
* Assignació d'**IP fixes** (Càmeres, PC de producció, Servidors NAS, Consola ATEM).
* Configuració de WiFi (SSID separat per artistes i staff, contrasenyes rotatives, limitació d'ample de banda a convidats).

### 2.3. Configuració d'Àudio i DAWs

* Instal·lació de tots els plugins i llicències.
* Plantilles de sessió per agilitzar producció.
* Configuració d'ASIO i latències.
* Routing d'àudio per a streaming i gravació.
* Connexió de les targetes de so amb drivers actualitzats.

### 2.4. Configuració de Streaming i Vídeo

* **Plantilles d'OBS preconfigurades:**
    * Escenes dels estudis, escenes de la casa, grafismes, alerts, xats integrats.
* Integració ATEM amb OBS o directament amb YouTube/Twitch.
* Monitoratge de bitrate i estabilitat.

### 2.5. Preparació per Llançament

* **Proves Generals:**
    * Streaming privat de test.
    * Enregistrament de sessions pilot.
    * Test de latència d'àudio entre estudis i producció.
    * Prova de convivència curta (1-2 dies).
* **Documentació Interna:**
    * Manual de producció.
    * Guia per artistes.
    * Normes de convivència.
    * Checklist d'inici i final de cada directe.
