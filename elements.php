<?php
/**
 * Dublin Core Help
 *
 * @copyright Copyright 2015 Kirjastot.fi, Aija Laine & Matti Lassila
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU GPLv3
 */

// Finnish Dublin Core usage instructions originally for digi.kirjastot.fi

$elements = array(
    array(
        'label' => 'Title',
        'comment'=>'Tekijän tai julkaisijan tallenteelle antama nimi. Kirjoitetaan samassa muodossa kuin tallenteessakin. Mikäli muu nimeketieto, kuten alanimeke, halutaan erottaa päänimekkeestä, käytetään luettelointisääntöjen normaalia merkitsemistapaa eli välilyönti kaksoispiste välilyönti. Esimerkiksi Edgar Degas : pastels, lavis, gouaches, esquisses.'
    ),
    array(
        'label' => 'Alternative Title',
        'comment' => 'Vaihtoehtoinen nimeke voi olla esimerkiksi rinnakkaisnimeke, käännös tai lyhennys.'
    ),
    array(
        'label' => 'Creator',
        'comment' => 'Tallenteen päävastuullinen tekijä, kuten esimerkiksi kirjailija, valokuvaaja, taiteilija tai kuvittaja. Henkilöiden nimet kirjoitetaan kenttään muodossa Sukunimi, Etunimi. Esimerkiksi Aho, Juhani Jos tallenteella on useampia päävastuullisia tekijöitä, toista kenttää (Lisää kenttä).'
    ),
    array(
        'label' => 'Subject',
        'comment' => 'Aihe-kentällä kuvataan tallenteen sisältöä. Tallennetta kuvataan yleensä asiasanoilla tai luokitusjärjestelmän avulla. Kontrolloitujen sanastojen ja luokitusjärjestelmien (YSA, YKL) käyttö on suositeltavaa.
                      Jokainen asiasana kirjoitetaan omaan kenttäänsä, eli kenttiä toistetaan (Lisää kenttä) tarvittava määrä.
                      Jos aihe-kenttään kirjoitetaan henkilönimi, kirjoitetaan se muodossa Sukunimi, Etunimi.
                      Käytä aihetta hyvin kuvaavia termejä ja vältä liian yleisluontoista kuvausta.',
    ),
    array(
        'label' => 'Description',
        'comment' => 'Tallenteen kuvaus vapaatekstinä. Kuvauksessa voidaan käyttää esimerkiksi tekstiaineiston sisällysluetteloa tai tiivistelmää. Tallennetta voidaan kuvata myöl vapaasti omin sanoin.'
    ),
    array(
        'label' => 'Publisher',
        'comment' => 'Organisaatio, joka on julkaissut tallenteen sen nykyisessä muodossa, eli siis kuvailtavan digitaalisen version julkaisija. Jos tekijä ja julkaisija ovat samoja, ei tekijää toisteta enää julkaisija-kentässä.',
    ),
    array(
        'label' => 'Contributor',
        'comment' => 'Henkilö tai organisaatio, joka on osallistunut merkittävästi tallenteen tekemiseen, mutta jonka panos on vähäisempi kuin päävastuullisen tekijän. Muu tekijä voi olla esimerkiksi kääntäjä tai kuvittaja. Henkilönimet samassa muodossa kuin Tekijä- kentässäkin eli Sukunimi, Etunimi. Tarvittaessa  kenttää voidaan toistaa.',
    ),
    array(
        'label' => 'Date Created',
        'comment' => 'Kuvailtavan aineiston alkuperäinen julkaisuajankohta. Esimerkiksi sen painetun version julkaisuvuosi, johon digitaalinen versio perustuu.
         Merkintätavat kuten yllä, eli samoin kuin julkistamisajankohdassa.'
    ),
    array(
        'label' => 'Date Issued',
        'comment' => 'Kuvailtavan eli digitaalisen version julkistamisajankohta. Suositeltavat merkintätavat ovat:
        VVVV-KK-PP (2014-10-27), (2014-10), VVVV (2014)'
    ),
    array(
        'label' => 'Format',
        'comment' => 'Tallenteen tiedostomuoto. Antaa käyttäjälle tietoa tallenteen laitteisto- ja ohjelmistoympäristöstä. Formaatin ilmaisemiseen käytetään Internetin Mediatyyppejä (MIME-types).
                    Digi-palvelussa on valmis sanasto eri formaateille. Valitse pudotusvalikosta tarvitsemasi formaatti. Mikäli valikossa ei ole tarvitsemaasi formaattia, se voidaan lisätä palveluun. Ota tällaisessa tapauksessa yhteyttä aija.laine@turku.fi.'
    ),
    array(
        'label' => 'Identifier',
        'comment' => 'Yksiselitteisesti tallenteen identifioiva tunnus, esimerkiksi ISBN-numero tai URN-tunnus. ISBN-tunnukset tallennetaan ilman tavuviivoja. URN-tunnukset muodossa URN:NBN:fi-fe2014080832695.'
    ),
    array(
        'label' => 'Language',
        'comment' => 'Tallenteen kieli. Valitaan valikosta tallenteen kieli. Monikielisissä teoksissa toistetaan kenttää (Lisää kenttä). Jos tarvitsemasi kielikoodi puuttuu listalta ilmoita siitä lisäystä varten (aija.laine@turku.fi).
                    Kielikoodit ovat Digi-palvelussa kaksimerkkisinä. Kaksimerkkiset koodit muutetaan kuitenkin rajapinnassa nykyisin käytössä oleviin kolmimerkkisiin koodeihin.',
    ),
    array(
        'label' => 'Rights',
        'comment' => 'Kenttään voidaan merkitä tallenteen tekijänoikeus- tai käyttötietoja.
                    Kannattaa kuitenkin muistaa, että Digi-palvelu on julkinen verkkopalvelu, joten sinne tallennettavien aineistojen tulee olla lähtökohtaisesti sellaisia etteivät tekijänoikeudet rajoita niiden käyttöä.'
    ),
    array(
        'label' => 'Provenance',
        'comment' => 'Merkittävä aineiston omistussuhteisiin liittyvä asia, tai aineiston omistussuhteissa tapahtunut muutos. Käytetään vain, jos tieto on oleellista ja sillä on käyttäjien tai aineiston kannalta merkitystä.'
    )
);
