<?php

    namespace SPID;
    abstract class AbtractSPID {

        abstract public function requireAuth();
        abstract public function login($idp, $l, $returnTo="");
        abstract public function logout();
        abstract public function getLogoutURL($returnTo = null);
        abstract public function getAttributes();
        abstract public function getAttribute($attribute);
        abstract public function isAuthenticated();
        abstract public function insertSPIDButtonCSS();
        abstract public function insertSPIDButtonJS();
        abstract public function insertSPIDButton($size);
        abstract public function insertSPIDSmartButton($size);
        abstract public function setNaturalPerson(); 
        abstract public function setProfessionalUse();
        abstract public function setLegalPerson();
        abstract public function setProfessionalUseOnlyLegalPerson();
        abstract public function setProfessionalUseOnlyNaturalPerson();
        abstract public function setProfessionalUseAndLegalPerson();
        
    }