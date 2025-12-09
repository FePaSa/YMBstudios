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

[cite_start]Per garantir un streaming estable i la gestió de múltiples connexions[cite: 20]:

* **Connexió i Backbone:**
    * [cite_start]Fibra òptica simètrica mínima de **1Gbps** (ideal 2-3Gbps)[cite: 22].
    * [cite_start]Router professional amb QoS (Ubiquiti Dream Machine Pro, Mikrotik CCR o ASUS Pro)[cite: 22, 23, 24, 25].
    * [cite_start]Switch principal gestionable de **24 o 48 ports gigabit** amb VLANs[cite: 26].
    * [cite_start]Dos switches secundaris per planta o per zones d'estudi[cite: 27].

* [cite_start]**Xarxa Interna (VLANs Separades):** [cite: 29]
    * [cite_start]`VLAN Estudis` (targetes de so, ordinadors, DAWs)[cite: 30].
    * [cite_start]`VLAN Producció` (càmeres, OBS, servidors)[cite: 31].
    * [cite_start]`VLAN Convidats` (WiFi artistes i personal)[cite: 32].
    * [cite_start]`VLAN IoT` (llums, panells, etc.)[cite: 33].
    * [cite_start]Accés **WiFi 6 o 6E** amb 2-4 APs distribuïts (Ubiquiti, TP-Link Omada...)[cite: 34].

* **Seguretat:**
    * [cite_start]Firewall actiu i filtratge de tràfic entre VLANs[cite: 36].
    * [cite_start]Backups automàtics de configuracions[cite: 37].
    * [cite_start]Control d'accés amb comptes i permisos per treballadors[cite: 38].

### 1.2. Infraestructura de Streaming i Producció

[cite_start]La zona de producció és el "cervell" del projecte[cite: 40].

* **Hardware de Producció (PC de realització/streaming):**
    * [cite_start]CPU **Ryzen 9 / Intel i9**[cite: 44].
    * [cite_start]**64GB RAM**[cite: 46].
    * [cite_start]GPU **NVIDIA 4070** o superior per codificació NVENC[cite: 47].
    * [cite_start]Discos **SSD NVMe** per arxius temporals i enregistraments[cite: 48].
    * [cite_start]Pantalles múltiples (2-3 monitors)[cite: 49].

* **Taula de Mescles de Vídeo:**
    * [cite_start]Blackmagic ATEM Mini Extreme ISO o ATEM Television Studio[cite: 51].
    * [cite_start]Capturadores (Blackmagic, Elgato o Magewell)[cite: 52, 53].

* **Intercomunicació Interna:**
    * [cite_start]Intercom DECT o sistemes IP via xarxa per comunicar amb càmeres i equips[cite: 56].

* **Càmeres:**
    * [cite_start]**6-12 càmeres PTZ** o DSLR/Mirrorless amb captura[cite: 58].
    * [cite_start]Trípodes, suports i "mounts"[cite: 59].
    * [cite_start]Controladors PTZ sobre xarxa[cite: 61].

* **Àudio per al Directe:**
    * [cite_start]Taula de so (Behringer XR18 / X32 Rack / Yamaha TF1)[cite: 64].
    * [cite_start]Distribució de canals per cada artista i micròfon[cite: 65].
    * [cite_start]Sistema d'in-ear o monitorització interna[cite: 66].

### 1.3. Estudis de Música (3 sets)

* **Hardware Bàsic per cada Estudi:**
    * [cite_start]Ordinador (PC o Mac) amb **32GB RAM** i processador potent per DAW, SSD NVMe[cite: 69, 70].
    * [cite_start]Targeta de so (Focusrite Clarett, Apollo Twin, Motu M4 o similars)[cite: 71, 72].
    * [cite_start]Micròfons (Condensador com AT4040, NT1, SM7B amb Cloudlifter si cal)[cite: 73, 74].
    * [cite_start]Auriculars tancats (Beyerdynamic DT770, Audio Technica M50x, etc.)[cite: 75, 77, 78].
    * [cite_start]Monitors d'estudi (Yamaha HS5/HS7, KRK, Adam T5V...)[cite: 79, 80].
    * [cite_start]Tractament acústic (Panells absorbents, Bass traps, Difusors)[cite: 81, 83, 84, 86].
    * [cite_start]Suports (Braços de micròfon, peus, antipop)[cite: 87, 89].

* **Software:**
    * [cite_start]DAWs: Ableton Live / FL Studio / Logic (si Mac) / Pro Tools[cite: 90].
    * [cite_start]Plugins bàsics (FabFilter, Waves, iZotope, Kontakt, Omnisphere...)[cite: 91].
    * [cite_start]Drivers i configuració ASIO/CORE AUDIO[cite: 92].

### 1.4. Infraestructura Audiovisual

* [cite_start]Il·luminació contínua Led (Pantalles, LED strips, llums RGB per ambientació)[cite: 94, 95].
* [cite_start]Equip per enregistrar *making-of* (càmeres portàtils)[cite: 96].

---

## 🛠️ 2. Informatització del Projecte

### 2.1. Instal·lació i Configuració dels Sistemes Operatius (Windows/MacOS)

* [cite_start]Optimitzacions per àudio (Desactivar processos innecessaris, límits de latència, gestió d'energia al màxim)[cite: 99, 100, 102, 103].
* [cite_start]Creació d'**imatges clonables** per replicar configuracions a cada estudi[cite: 105].
* [cite_start]Creació d'usuaris (`Convidat`, `Artistes`, `Administració`)[cite: 106, 107, 108, 109].
* [cite_start]Restriccions per evitar instal·lacions no autoritzades[cite: 110].

### 2.2. Configuració de la Xarxa

* [cite_start]Configuració del router professional amb **VLANs**[cite: 112, 114].
* [cite_start]**QoS** per prioritzar streaming i càmeres[cite: 115].
* [cite_start]Rutes internes entre estudis i producció[cite: 116].
* [cite_start]Assignació d'**IP fixes** (Càmeres, PC de producció, Servidors NAS, Consola ATEM)[cite: 117, 118, 119, 120, 121].
* [cite_start]Configuració de WiFi (SSID separat per artistes i staff, contrasenyes rotatives, limitació d'ample de banda a convidats)[cite: 122, 123, 124, 125].

### 2.3. Configuració d'Àudio i DAWs

* [cite_start]Instal·lació de tots els plugins i llicències[cite: 127].
* [cite_start]Plantilles de sessió per agilitzar producció[cite: 128].
* [cite_start]Configuració d'ASIO i latències[cite: 129].
* [cite_start]Routing d'àudio per a streaming i gravació[cite: 130].
* [cite_start]Connexió de les targetes de so amb drivers actualitzats[cite: 131].

### 2.4. Configuració de Streaming i Vídeo

* **Plantilles d'OBS preconfigurades:**
    * [cite_start]Escenes dels estudis, escenes de la casa, grafismes, alerts, xats integrats[cite: 133, 134, 135, 136, 137, 138].
* [cite_start]Integració ATEM amb OBS o directament amb YouTube/Twitch[cite: 139].
* [cite_start]Monitoratge de bitrate i estabilitat[cite: 140].

### 2.5. Servidor i Arxius

* [cite_start]**NAS** (Synology o QNAP) amb[cite: 142]:
    * [cite_start]Carpetes per artista[cite: 144].
    * [cite_start]Backups automàtics[cite: 145].
    * [cite_start]Accés per xarxa local[cite: 146].
* [cite_start]Sistema de còpies de seguretat diàries i setmanals[cite: 147].
* [cite_start]Control de versions de projectes musicals[cite: 148].

### 2.6. Preparació per Llançament

* **Proves Generals:**
    * [cite_start]Streaming privat de test[cite: 151].
    * [cite_start]Enregistrament de sessions pilot[cite: 152].
    * [cite_start]Test de latència d'àudio entre estudis i producció[cite: 153].
    * [cite_start]Prova de convivència curta (1-2 dies)[cite: 154].
* **Documentació Interna:**
    * [cite_start]Manual de producció[cite: 156].
    * [cite_start]Guia per artistes[cite: 157].
    * [cite_start]Normes de convivència[cite: 158].
    * [cite_start]Checklist d'inici i final de cada directe[cite: 159].
