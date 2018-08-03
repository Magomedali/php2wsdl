<?php

header("Content-Type: text/xml; charset=utf-8");
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
?>
<definitions xmlns="http://schemas.xmlsoap.org/wsdl/" xmlns:tns="http://xampp:8082/test/soap/wsdl_generator/gen/server.php" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap-enc="http://schemas.xmlsoap.org/soap/encoding/" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" name="Test" targetNamespace="http://xampp:8082/test/soap/wsdl_generator/gen/server.php">
  <types>
    <xsd:schema targetNamespace="http://xampp:8082/test/soap/wsdl_generator/gen/server.php">
      <xsd:import namespace="http://schemas.xmlsoap.org/soap/encoding/"/>
    </xsd:schema>
  </types>
  <portType name="TestPort">
    <operation name="add">
      <documentation>Adds two numbers.</documentation>
      <input message="tns:addIn"/>
      <output message="tns:addOut"/>
    </operation>
  </portType>
  <binding name="TestBinding" type="tns:TestPort">
    <soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http"/>
    <operation name="add">
      <soap:operation soapAction="http://xampp:8082/test/soap/wsdl_generator/gen/server.php#add"/>
      <input>
        <soap:body use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" namespace="http://xampp:8082/test/soap/wsdl_generator/gen/server.php"/>
      </input>
      <output>
        <soap:body use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" namespace="http://xampp:8082/test/soap/wsdl_generator/gen/server.php"/>
      </output>
    </operation>
  </binding>
  <service name="TestService">
    <port name="TestPort" binding="tns:TestBinding">
      <soap:address location="http://xampp:8082/test/soap/wsdl_generator/gen/server.php"/>
    </port>
  </service>
  <message name="addIn">
    <part name="p1" type="xsd:float"/>
    <part name="p2" type="xsd:float"/>
  </message>
  <message name="addOut">
    <part name="return" type="soap-enc:Array"/>
  </message>
</definitions>

