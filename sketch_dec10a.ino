#include <Adafruit_Fingerprint.h>
#include <SPI.h>
#include <Ethernet.h>
const uint32_t password = 0x0;
SoftwareSerial mySerial(8, 9);

Adafruit_Fingerprint fingerprintSensor = Adafruit_Fingerprint(&mySerial, password);
#if (defined(__AVR__) || defined(ESP8266)) && !defined(__AVR_ATmega2560__)
#else
#define mySerial Serial1
#endif
String mensagem;
int numeroDigital;
static uint32_t timer;
String url = "GET /conectaBancoArduino.php?id=1&exemplo=";
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
IPAddress server(192,168,20,125);  // numeric IP for Google (no DNS) 
IPAddress ip(192, 168, 11, 10);
IPAddress myDns(192, 168, 11, 4);
EthernetClient client;
unsigned long beginMicros, endMicros;
unsigned long byteCount = 0;
bool printWebData = true;  // set to false for better speed measurement






void setup() {
Serial.begin(9600);
 while (!Serial) {
    ; // wait for serial port to connect. Needed for native USB port only
  }
   if (Ethernet.begin(mac) == 0) {
    Serial.println("Failed to configure Ethernet using DHCP");
    // Check for Ethernet hardware present
    if (Ethernet.hardwareStatus() == EthernetNoHardware) {
      Serial.println("Ethernet shield was not found.  Sorry, can't run without hardware. :(");
      while (true) {
        delay(1); // do nothing, no point running without Ethernet hardware
      }
    }
    if (Ethernet.linkStatus() == LinkOFF) {
      Serial.println("Ethernet cable is not connected.");
    }
    // try to congifure using IP address instead of DHCP:
    Ethernet.begin(mac, ip, myDns);
  } else {
    Serial.print("  DHCP assigned IP ");
    Serial.println(Ethernet.localIP());
  }
  // give the Ethernet shield a second to initialize:
  delay(1000);
  Serial.print("connecting to ");
  Serial.print(server);
  Serial.println("...");
   setupFingerprintSensor();


}

void enviaRequisicao(String mensagem){
  if (client.connect(server, 80)) {
    Serial.print("connected to ");
    Serial.println(client.remoteIP());
    // Make a HTTP request:
    client.println(mensagem);
    } else {
    // if you didn't get a connection to the server:
    Serial.println("connection failed");
  }
  beginMicros = micros();
}  
void setupFingerprintSensor()
  {
    //Inicializa o sensor
    fingerprintSensor.begin(57600);
  
    //Verifica se a senha está correta
    if(!fingerprintSensor.verifyPassword())
    {
      //Se chegou aqui significa que a senha está errada ou o sensor está problemas de conexão
      Serial.println(F("Não foi possível conectar ao sensor. Verifique a senha ou a conexão"));
      while(true);
    }
  }
void loop() {
   checkFingerprint();
   mensagem = url+numeroDigital;
    enviaRequisicao(mensagem);
   exit(0);
}
void checkFingerprint()
{
  Serial.println(F("Encoste o dedo no sensor"));

  //Espera até pegar uma imagem válida da digital
  while (fingerprintSensor.getImage() != FINGERPRINT_OK);

  //Converte a imagem para o padrão que será utilizado para verificar com o banco de digitais
  if (fingerprintSensor.image2Tz() != FINGERPRINT_OK)
  {
    //Se chegou aqui deu erro, então abortamos os próximos passos
    Serial.println(F("Erro image2Tz"));
    return;
  }
  
  //Procura por este padrão no banco de digitais
  if (fingerprintSensor.fingerFastSearch() != FINGERPRINT_OK)
  {
    //Se chegou aqui significa que a digital não foi encontrada
    Serial.println(F("Digital não encontrada"));
    return;
  }

  //Se chegou aqui a digital foi encontrada
  //Mostramos a posição onde a digital estava salva e a confiança
  //Quanto mais alta a confiança melhor
  Serial.print(F("Digital encontrada com confiança de "));
  Serial.print(fingerprintSensor.confidence);
  Serial.print(F(" na posição "));
  Serial.println(fingerprintSensor.fingerID);
  numeroDigital =fingerprintSensor.fingerID;
   
}
  
