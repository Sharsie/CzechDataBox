<?php

namespace Defr\CzechDataBox\Api;

class DataBoxSearch extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'tIdDbInput' => 'Defr\\CzechDataBox\\Api\\tIdDbInput',
      'tReqStatusOutput' => 'Defr\\CzechDataBox\\Api\\tReqStatusOutput',
      'tDbReqStatus' => 'Defr\\CzechDataBox\\Api\\tDbReqStatus',
      'tDbUserInfo' => 'Defr\\CzechDataBox\\Api\\tDbUserInfo',
      'tDbUserInfoExt' => 'Defr\\CzechDataBox\\Api\\tDbUserInfoExt',
      'tDbOwnerInfo' => 'Defr\\CzechDataBox\\Api\\tDbOwnerInfo',
      'tDbOwnerInfoExt' => 'Defr\\CzechDataBox\\Api\\tDbOwnerInfoExt',
      'tDbOwnersArray' => 'Defr\\CzechDataBox\\Api\\tDbOwnersArray',
      'tDbUsersArray' => 'Defr\\CzechDataBox\\Api\\tDbUsersArray',
      'dbUserInfo' => 'Defr\\CzechDataBox\\Api\\dbUserInfo',
      'tFindDBInput' => 'Defr\\CzechDataBox\\Api\\tFindDBInput',
      'tFindDBOuput' => 'Defr\\CzechDataBox\\Api\\tFindDBOuput',
      'tCreateDBInput' => 'Defr\\CzechDataBox\\Api\\tCreateDBInput',
      'dbOwnerInfo' => 'Defr\\CzechDataBox\\Api\\dbOwnerInfo',
      'tCreateDBOutput' => 'Defr\\CzechDataBox\\Api\\tCreateDBOutput',
      'tDeleteDBInput' => 'Defr\\CzechDataBox\\Api\\tDeleteDBInput',
      'tUpdateDBInput' => 'Defr\\CzechDataBox\\Api\\tUpdateDBInput',
      'tAddDBUserInput' => 'Defr\\CzechDataBox\\Api\\tAddDBUserInput',
      'tAddDBUserOutput' => 'Defr\\CzechDataBox\\Api\\tAddDBUserOutput',
      'tDelDBUserInput' => 'Defr\\CzechDataBox\\Api\\tDelDBUserInput',
      'tUpdDBUserInput' => 'Defr\\CzechDataBox\\Api\\tUpdDBUserInput',
      'tNewAccDataInput' => 'Defr\\CzechDataBox\\Api\\tNewAccDataInput',
      'tNewAccDataOutput' => 'Defr\\CzechDataBox\\Api\\tNewAccDataOutput',
      'tOwnerInfoInput' => 'Defr\\CzechDataBox\\Api\\tOwnerInfoInput',
      'tDisableExternallyInput' => 'Defr\\CzechDataBox\\Api\\tDisableExternallyInput',
      'tGetDBUsersOutput' => 'Defr\\CzechDataBox\\Api\\tGetDBUsersOutput',
      'tCheckDBOutput' => 'Defr\\CzechDataBox\\Api\\tCheckDBOutput',
      'tActivateInput' => 'Defr\\CzechDataBox\\Api\\tActivateInput',
      'tActivateOutput' => 'Defr\\CzechDataBox\\Api\\tActivateOutput',
      'tDummyInput' => 'Defr\\CzechDataBox\\Api\\tDummyInput',
      'tGetOwnInfoOutput' => 'Defr\\CzechDataBox\\Api\\tGetOwnInfoOutput',
      'tGetUserInfoOutput' => 'Defr\\CzechDataBox\\Api\\tGetUserInfoOutput',
      'tGetPasswInfoOutput' => 'Defr\\CzechDataBox\\Api\\tGetPasswInfoOutput',
      'tChngPasswInput' => 'Defr\\CzechDataBox\\Api\\tChngPasswInput',
      'tGetDBListInput' => 'Defr\\CzechDataBox\\Api\\tGetDBListInput',
      'tGetDBListOutput' => 'Defr\\CzechDataBox\\Api\\tGetDBListOutput',
      'tDeleteDBPromptlyInput' => 'Defr\\CzechDataBox\\Api\\tDeleteDBPromptlyInput',
      'tPDZInfoInput' => 'Defr\\CzechDataBox\\Api\\tPDZInfoInput',
      'tPDZRec' => 'Defr\\CzechDataBox\\Api\\tPDZRec',
      'tPDZRecArray' => 'Defr\\CzechDataBox\\Api\\tPDZRecArray',
      'tPDZInfoOutput' => 'Defr\\CzechDataBox\\Api\\tPDZInfoOutput',
      'tChangeDBsTypeInput' => 'Defr\\CzechDataBox\\Api\\tChangeDBsTypeInput',
      'tChangeDBsTypeOutput' => 'Defr\\CzechDataBox\\Api\\tChangeDBsTypeOutput',
      'tChangeLogRow' => 'Defr\\CzechDataBox\\Api\\tChangeLogRow',
      'tDBCreditInfoInput' => 'Defr\\CzechDataBox\\Api\\tDBCreditInfoInput',
      'tDBCreditInfoOutput' => 'Defr\\CzechDataBox\\Api\\tDBCreditInfoOutput',
      'ciRecords' => 'Defr\\CzechDataBox\\Api\\ciRecords',
      'tCiRecord' => 'Defr\\CzechDataBox\\Api\\tCiRecord',
      'tISDSSearchInput' => 'Defr\\CzechDataBox\\Api\\tISDSSearchInput',
      'tISDSSearchOutput' => 'Defr\\CzechDataBox\\Api\\tISDSSearchOutput',
      'tdbResult' => 'Defr\\CzechDataBox\\Api\\tdbResult',
      'tdbResultsArray' => 'Defr\\CzechDataBox\\Api\\tdbResultsArray',
      'tGetDBStatusInput' => 'Defr\\CzechDataBox\\Api\\tGetDBStatusInput',
      'tGetDBStatusOutput' => 'Defr\\CzechDataBox\\Api\\tGetDBStatusOutput',
      'tdbPeriodsArray' => 'Defr\\CzechDataBox\\Api\\tdbPeriodsArray',
      'tdbPeriod' => 'Defr\\CzechDataBox\\Api\\tdbPeriod',
      'tFindPersonalDBInput' => 'Defr\\CzechDataBox\\Api\\tFindPersonalDBInput',
      'tdbPersonalOwnerInfo' => 'Defr\\CzechDataBox\\Api\\tdbPersonalOwnerInfo',
      'tFindPersonalDBOutput' => 'Defr\\CzechDataBox\\Api\\tFindPersonalDBOutput',
      'tdbPersOwnersArray' => 'Defr\\CzechDataBox\\Api\\tdbPersOwnersArray',
      'tDTInfoInput' => 'Defr\\CzechDataBox\\Api\\tDTInfoInput',
      'tDTInfoOutput' => 'Defr\\CzechDataBox\\Api\\tDTInfoOutput',
      'tPDZSendInput' => 'Defr\\CzechDataBox\\Api\\tPDZSendInput',
      'tPDZSendOutput' => 'Defr\\CzechDataBox\\Api\\tPDZSendOutput',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = '/build/Resources/db_search.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param tFindDBInput $parameter
     * @return tFindDBOuput
     */
    public function FindDataBox(tFindDBInput $parameter)
    {
      return $this->__soapCall('FindDataBox', array($parameter));
    }

    /**
     * @param tIdDbInput $parameter
     * @return tCheckDBOutput
     */
    public function CheckDataBox(tIdDbInput $parameter)
    {
      return $this->__soapCall('CheckDataBox', array($parameter));
    }

    /**
     * @param tGetDBListInput $parameter
     * @return tGetDBListOutput
     */
    public function GetDataBoxList(tGetDBListInput $parameter)
    {
      return $this->__soapCall('GetDataBoxList', array($parameter));
    }

    /**
     * @param tPDZInfoInput $parameter
     * @return tPDZInfoOutput
     */
    public function PDZInfo(tPDZInfoInput $parameter)
    {
      return $this->__soapCall('PDZInfo', array($parameter));
    }

    /**
     * @param tDBCreditInfoInput $parameter
     * @return tDBCreditInfoOutput
     */
    public function DataBoxCreditInfo(tDBCreditInfoInput $parameter)
    {
      return $this->__soapCall('DataBoxCreditInfo', array($parameter));
    }

    /**
     * @param tISDSSearchInput $parameter
     * @return tISDSSearchOutput
     */
    public function ISDSSearch2(tISDSSearchInput $parameter)
    {
      return $this->__soapCall('ISDSSearch2', array($parameter));
    }

    /**
     * @param tGetDBStatusInput $parameter
     * @return tGetDBStatusOutput
     */
    public function GetDataBoxActivityStatus(tGetDBStatusInput $parameter)
    {
      return $this->__soapCall('GetDataBoxActivityStatus', array($parameter));
    }

    /**
     * @param tFindPersonalDBInput $parameter
     * @return tFindPersonalDBOutput
     */
    public function FindPersonalDataBox(tFindPersonalDBInput $parameter)
    {
      return $this->__soapCall('FindPersonalDataBox', array($parameter));
    }

    /**
     * @param tDTInfoInput $parameter
     * @return tDTInfoOutput
     */
    public function DTInfo(tDTInfoInput $parameter)
    {
      return $this->__soapCall('DTInfo', array($parameter));
    }

    /**
     * @param tPDZSendInput $parameter
     * @return tPDZSendOutput
     */
    public function PDZSendInfo(tPDZSendInput $parameter)
    {
      return $this->__soapCall('PDZSendInfo', array($parameter));
    }

}
