# Lemmiklooma Mikrokiibi Lugeja ja Andmebaasi Rakendus

## Ülevaade

Selle projekti eesmärk on luua veebirakendus, mis loeb lemmikloomade mikrokiipe ja salvestab seotud informatsiooni andmebaasi. Rakendus võimaldab kasutajatel registreerida, uuendada ja vaadata lemmikloomade andmeid kasutajasõbraliku liidese kaudu, sarnaselt süsteemidele nagu [Lemmikloomaregister](https://www.lemmikloomaregister.ee/et/) ja [LLR](https://www.llr.ee/KKK).

## Põhifunktsioonid

- **Mikrokiibi Lugeja Integratsioon**: Rakendus loeb lemmikloomade mikrokiibi andmeid, mida kasutatakse looma tuvastamiseks ja informatsiooni salvestamiseks.
- **Andmebaasi Halduse**: Rakendus salvestab lemmiklooma detailid (nt nimi, tõug, omaniku info) SQLite andmebaasi.
- **Otsing ja Filtreerimine**: Kasutajad saavad otsida ja filtreerida andmebaasis konkreetseid loomi mikrokiibi numbri või muude detailide põhjal.
- **CRUD Operatsioonid**: Kasutajad saavad luua, lugeda, uuendada ja kustutada lemmiklooma informatsiooni.
- **Omaniku Teavitused**: Teavitab loomaomanikke muudatustest või meeldetuletustest, mis on seotud nende registreeritud loomadega.
- **Seotud Andmed**: Loob seoseid lemmikloomade, omanike, vaktsineerimiste ja meditsiiniliste andmete vahel.

## Tehnoloogiad ja Vajalikud Oskused

Selle projekti rakendamiseks on vajalikud järgmised tehnoloogiad ja oskused:

- **Laravel**: Veebirakenduse raamistiku arendamiseks ja serveripoolse loogika käsitlemiseks.
- **SQLite**: Kerge ja serverita andmebaasi lahendus, et salvestada lemmikloomade ja omanike andmeid.
- **HTML/CSS/JavaScript**: Kasutajaliidese ehitamiseks vajalikud tehnoloogiad.
- **Mikrokiibi Lugeja Integratsioon**: Teadmised riistvaraseadmete integreerimiseks rakendusega, et lugeda mikrokiibi andmeid.
- **REST API**: API-de loomine lemmiklooma info haldamiseks ja andmete pärimiseks.
- **Versioonihaldus (Git)**: Koodi muutuste jälgimiseks ja koostööhalduseks GitHubi kaudu.

## Aja Hinnang

Töötan selle projekti kallal üksinda, mis sisaldab:

- **Projekti planeerimine**: 20 tundi
- **Tagapõhja ja andmebaasi arendus**: 70 tundi
- **Kasutajaliidese arendus**: 40 tundi
- **Mikrokiibi lugeja integreerimine**: 20 tundi
- **Testimine ja vigade parandamine**: 10 tundi

See on ligikaudne hinnang, mis sisaldab programmeerimist, dokumentatsiooni ja testimist.

## Lisainformatsioon

See projekt on inspireeritud lemmikloomade registreerimise süsteemidest nagu [Lemmikloomaregister](https://www.lemmikloomaregister.ee/et/) ja [LLR](https://www.llr.ee/KKK). Rakenduse eesmärk on lihtsustada lemmikloomade mikrokiibi andmete haldamist, muutes selle kergesti kättesaadavaks ja hallatavaks nii lemmikloomade omanikele kui ka organisatsioonidele.
