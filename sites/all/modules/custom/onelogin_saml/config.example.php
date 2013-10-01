<?php

$config = array (

	// What environment are we in? Three possible values - prod, test or local
	"environment" => "local",


	//**** PROD ****

  // the URL where to the SAML Response/SAML Assertion will be posted
  "prod.const_assertion_consumer_service_url" => NULL, // Null means will be given a default value
  
  // name / entity id of this application
  "prod.const_issuer"                         => NULL, // Null means will be given a default value
  
  // tells the IdP to return the email address of the current user
  "prod.const_name_identifier_format"         => "urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress",



  //**** TEST ****

  // the URL where to the SAML Response/SAML Assertion will be posted
  "test.const_assertion_consumer_service_url" => NULL, // Null means will be given a default value
  
  // name / entity id of this application
  "test.const_issuer"                         => NULL, // Null means will be given a default value
  
  // tells the IdP to return the email address of the current user
  "test.const_name_identifier_format"         => "urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress",


  
  //**** LOCAL ****

  // the URL where to the SAML Response/SAML Assertion will be posted
  "local.const_assertion_consumer_service_url" => NULL, // Null means will be given a default value
  
  // name / entity id of this application
  "local.const_issuer"                         => NULL, // Null means will be given a default value
  //"local.const_issuer"                         => "http://www.local.malmo.se/kominforum", // Null means will be given a default value
  
  // tells the IdP to return the email address of the current user
  "local.const_name_identifier_format"         => "urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress"

);