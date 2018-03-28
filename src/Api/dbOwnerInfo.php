<?php

namespace Defr\CzechDataBox\Api;

class dbOwnerInfo
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var string $formdataid
     */
    protected $formdataid = null;

    /**
     * @var string $identityDocumentNum
     */
    protected $identityDocumentNum = null;

    /**
     * @var string $identityDocumentType
     */
    protected $identityDocumentType = null;

    /**
     * @var anonymous24 $PDZ
     */
    protected $PDZ = null;

    /**
     * @param string $guid
     * @param string $formdataid
     * @param string $identityDocumentNum
     * @param string $identityDocumentType
     * @param anonymous24 $PDZ
     */
    public function __construct($guid = null, $formdataid = null, $identityDocumentNum = null, $identityDocumentType = null, $PDZ = null)
    {
      $this->guid = $guid;
      $this->formdataid = $formdataid;
      $this->identityDocumentNum = $identityDocumentNum;
      $this->identityDocumentType = $identityDocumentType;
      $this->PDZ = $PDZ;
    }

    /**
     * @return string
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param string $guid
     * @return \Defr\CzechDataBox\Api\dbOwnerInfo
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormdataid()
    {
      return $this->formdataid;
    }

    /**
     * @param string $formdataid
     * @return \Defr\CzechDataBox\Api\dbOwnerInfo
     */
    public function setFormdataid($formdataid)
    {
      $this->formdataid = $formdataid;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentityDocumentNum()
    {
      return $this->identityDocumentNum;
    }

    /**
     * @param string $identityDocumentNum
     * @return \Defr\CzechDataBox\Api\dbOwnerInfo
     */
    public function setIdentityDocumentNum($identityDocumentNum)
    {
      $this->identityDocumentNum = $identityDocumentNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentityDocumentType()
    {
      return $this->identityDocumentType;
    }

    /**
     * @param string $identityDocumentType
     * @return \Defr\CzechDataBox\Api\dbOwnerInfo
     */
    public function setIdentityDocumentType($identityDocumentType)
    {
      $this->identityDocumentType = $identityDocumentType;
      return $this;
    }

    /**
     * @return anonymous24
     */
    public function getPDZ()
    {
      return $this->PDZ;
    }

    /**
     * @param anonymous24 $PDZ
     * @return \Defr\CzechDataBox\Api\dbOwnerInfo
     */
    public function setPDZ($PDZ)
    {
      $this->PDZ = $PDZ;
      return $this;
    }

}
