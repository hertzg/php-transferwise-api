<?php

namespace TWAPI\Profiles;


class BusinessProfileDetails extends ProfileDetails
{
    protected $name;
    protected $registrationNumber;
    protected $acn;
    protected $abn;
    protected $arbn;
    protected $companyType;
    protected $companyRole;
    protected $descriptionOfBusiness;
    protected $webpage;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * @param mixed $registrationNumber
     */
    public function setRegistrationNumber($registrationNumber): void
    {
        $this->registrationNumber = $registrationNumber;
    }

    /**
     * @return mixed
     */
    public function getAcn()
    {
        return $this->acn;
    }

    /**
     * @param mixed $acn
     */
    public function setAcn($acn): void
    {
        $this->acn = $acn;
    }

    /**
     * @return mixed
     */
    public function getAbn()
    {
        return $this->abn;
    }

    /**
     * @param mixed $abn
     */
    public function setAbn($abn): void
    {
        $this->abn = $abn;
    }

    /**
     * @return mixed
     */
    public function getArbn()
    {
        return $this->arbn;
    }

    /**
     * @param mixed $arbn
     */
    public function setArbn($arbn): void
    {
        $this->arbn = $arbn;
    }

    /**
     * @return mixed
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }

    /**
     * @param mixed $companyType
     */
    public function setCompanyType($companyType): void
    {
        $this->companyType = $companyType;
    }

    /**
     * @return mixed
     */
    public function getCompanyRole()
    {
        return $this->companyRole;
    }

    /**
     * @param mixed $companyRole
     */
    public function setCompanyRole($companyRole): void
    {
        $this->companyRole = $companyRole;
    }

    /**
     * @return mixed
     */
    public function getDescriptionOfBusiness()
    {
        return $this->descriptionOfBusiness;
    }

    /**
     * @param mixed $descriptionOfBusiness
     */
    public function setDescriptionOfBusiness($descriptionOfBusiness): void
    {
        $this->descriptionOfBusiness = $descriptionOfBusiness;
    }

    /**
     * @return mixed
     */
    public function getWebpage()
    {
        return $this->webpage;
    }

    /**
     * @param mixed $webpage
     */
    public function setWebpage($webpage): void
    {
        $this->webpage = $webpage;
    }


}