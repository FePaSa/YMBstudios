# 1. Introducció

Aquest document defineix l'**abast**, el **context**, els **objectius** i les **solucions tècniques** del projecte **Young Money Boys Studios (YMB)**, un sistema dissenyat per ensenyar el procés creatiu darrere de la producció musical mitjançant un entorn de **streaming** i **convivència** entre artistes, productors i audiència.

El projecte s'emmarca dins del **mòdul M12 (Projecte Intermodular)** del cicle **SMX2 (Sistemes Microinformàtics i Xarxes)**, seguint les directrius de gestió i desenvolupament descrites al document de referència *«Consideracions Generals per a l'Avaluació de Projectes»* (Francesc Rocher, 25 de març de 2026).

---

## Justificació del Projecte
   **Aspecte**       | **Descripció**                                                                                     |
 |-------------------|-----------------------------------------------------------------------------------------------------|
 | **Problema**      | Falta de coneixement sobre el procés creatiu de la producció musical i accés limitat a equipament professional per a artistes emergents. |
 | **Solució**       | Crear un **estudi de producció musical temporal** amb streaming en directe, on l'audiència pugui veure i aprendre del procés creatiu. |
 | **Valor afegit**  | - **Educació**: L'audiència aprèn sobre producció musical, àudio i streaming.                     |
 |                   | - **Oportunitat**: Artistes emergents accedeixen a equipament professional i visibilitat.         |
 |                   | - **Comunitat**: Fomentar la col·laboració entre artistes, productors i tècnics.                  |

---

---

# 2. Context i Situació Inicial

## 2.1. Problema Detectat

Actualment, el consum de música es limita a l'**audiència final**, sense cap connexió amb el **procés creatiu** darrere de les cançons. Els problemes principals són:

- **Falta de transparència**: Els consumidors desconeixen com es creen les cançons (composició, gravació, mescla, masterització).
- **Aïllament dels artistes**: Els artistes emergents, productors i equips tècnics treballen en entorns **aïllats**, sense una plataforma que permeti:
  - Transmetre en directe el seu treball.
  - Interactuar amb l'audiència per explicar tècniques o respondre preguntes.
- **Accés limitat a equipament**: Els estudis de música tradicionals són **costosos** i **inaccessibles** per a artistes nous, i no ofereixen transparència sobre el procés de producció.

---

## 2.2. Solució Proposada: YMB Studios

**Young Money Boys Studios (YMB)** és un projecte que reuneix **12-13 artistes i productors** en una **casa adaptada durant 1 mes**, on es crea un **entorn de producció i streaming professional** amb les següents característiques:
 | **Àrea**               | **Descripció**                                                                                     |
 |------------------------|-----------------------------------------------------------------------------------------------------|
 | **Zona de producció** | Control de càmeres, àudio i streaming.                                                             |
 | **Estudis de música** | 3 estudis equipats amb **hardware i software professional** (DAWs, targetes de so, micròfons, etc.). |
 | **Streaming**         | Transmissió en directe via **YouTube/Twitch** del procés creatiu (sessions de gravació, producció, convivència). |
 | **Difusió**           | Contingut promocionat a **xarxes socials** (Instagram, TikTok, Twitter) per atraure audiència.       |

---

### Valor Afegit

- ** Transparència**: L'audiència veu en directe com es creen les cançons.
- ** Oportunitat per a artistes**: Accés a equipament professional i visibilitat.
- ** Educació**: Els espectadors aprenen sobre producció musical, àudio i streaming.
- ** Comunitat**: Fomentar la col·laboració entre artistes, productors i tècnics.

---

---
---
# 3. Abast del Projecte

## 3.1. Què Inclou el Projecte?

El projecte **YMB Studios** abasta una **infraestructura completa** per a la producció musical i el streaming en directe, organitzada en **capes funcionals**:

---

### **🖥 A nivell d'aplicacions**
- **Streaming**: OBS Studio per a la transmissió en directe.
- **Gestió de emissions**: Dashboards de **YouTube** i **Twitch**.
- **Producció musical**: DAWs (Ableton Live, FL Studio).
- **Interacció**: Xat en directe integrat per a la comunicació amb l'audiència.

---

### ** A nivell de sistema operatiu**
- **Equips de producció i àudio**: Windows 11.
- **Servidors de xarxa**: Linux.

---
### ** A nivell de xarxa i comunicacions**
- **Connexió a Internet**: Fibra òptica **simètrica de 1 Gbps**.
- **Segmentació de la xarxa**:
  - **VLAN 10 (Producció)**: `192.168.10.0/24` (PC de streaming, càmeres, taula ATEM).
  - **VLAN 20 (Estudis)**: `192.168.20.0/24` (DAWs, targetes de so).
  - **VLAN 30 (Convidats)**: `192.168.30.0/24` (WiFi per a convidats, **limitat a 10 Mbps**).
  - **VLAN 40 (IoT)**: `192.168.40.0/24` (Dispositius intel·ligents).
- **QoS**: Priorització del tràfic **RTMP** (streaming) i àudio.
- **Firewall**: Bloqueig de tràfic entre **VLAN Convidats** i **Producció/Estudis**.

---
### ** A nivell físic**
- **PC de streaming**: i9-13900K, 64GB RAM, RTX 4090 (NVENC per codificació 1080p/60fps).
- **Càmeres**: PTZ 4K (control remot i qualitat professional).
- **Àudio**: Micròfons professionals, targetes de so.
- **Xarxa**: Switches i routers (Ubiquiti Dream Machine Pro, UniFi Switch, UniFi AP WiFi 6).

---
### ** Aspectes transversals**
- **Seguretat**: Firewall, control d'accés, còpies de seguretat de les configuracions.
- **Monitoratge**: Alertes de latència, bitrate i estabilitat del streaming.

---
---
## 3.2. Què NO Inclou el Projecte?

El projecte **YMB Studios** es centra **exclusivament en la part tècnica i operativa**, per la qual cosa **no abasta** els següents aspectes:

- ** Instal·lació d'aplicacions/plugins**:
  Cada productor ha de portar el **DAW** i els **plugins** que utilitzi, ja instal·lats i configurats al seu portàtil.
- ** Producció musical**:
  El projecte no inclou la creació de música (composició, gravació, mescla, etc.), ja que no som **productors musicals** ni **artistes**.

---
---
## ** Actors Principals**
 | **Actor**               | **Rol**                                                                                     |
 |-------------------------|---------------------------------------------------------------------------------------------|
 | **Tècnic de producció** | Configura OBS, supervisa el streaming i interactua amb el xat.                              |
 | **Artistes**            | Creen música als estudis i interactuen amb l’audiència.                                       |
 | **Administrador de xarxa** | Configura VLANs, QoS, firewall i accés per a convidats.                                      |
 | **Audiència**           | Visualitza el streaming i interactua via xat.                                                 |
