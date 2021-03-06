<?php
namespace Bitrix24\CRM;
use Bitrix24\Bitrix24Entity;

class Enum extends Bitrix24Entity
{


	/**
	 * get list of enum fields descriptions
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/auxiliary/enum/crm_enum_fields.php
	 * @return array
	 */
	public function fields()
	{
		$fullResult = $this->client->call(
			'crm.enum.fields'
		);
		return $fullResult;
	}

	

	/**
	 * get list of enum owner types
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/auxiliary/enum/crm_enum_ownertype.php
	 * @return array
	 */
	public function ownerType()
	{
		$fullResult = $this->client->call(
			'crm.enum.ownertype'
		);
		return $fullResult;
	}

	/**
	 * get list of enum activity types
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/auxiliary/enum/crm_enum_activitytype.php
	 * @return array
	 */
	public function activityType()
	{
		$fullResult = $this->client->call(
			'crm.enum.activitytype'
		);
		return $fullResult;
	}

	
	/**
	 * get list of enum activity priorities
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/auxiliary/enum/crm_enum_activitypriority.php
	 * @return array
	 */
	public function activityPriority()
	{
		$fullResult = $this->client->call(
			'crm.enum.activitypriority'
		);
		return $fullResult;
	}

		
	/**
	 * get list of enum content types
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/auxiliary/enum/crm_enum_contenttype.php
	 * @return array
	 */
	public function contentType()
	{
		$fullResult = $this->client->call(
			'crm.enum.contenttype'
		);
		return $fullResult;
	}

	
	/**
	 * get list of enum activity directions 
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/auxiliary/enum/crm_enum-activitydirection.php
	 * @return array
	 */
	public function activityDirection()
	{
		$fullResult = $this->client->call(
			'crm.enum.activitydirection'
		);
		return $fullResult;
	}

		
	/**
	 * get list of enum activity notify types
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/auxiliary/enum/crm_enumactivitynotifytype.php
	 * @return array
	 */
	public function activityNotifyType()
	{
		$fullResult = $this->client->call(
			'crm.enum.activitynotifytype'
		);
		return $fullResult;
	}


    /**
     * Get list of supported address types.
     *
     * @link https://dev.1c-bitrix.ru/rest_help/crm/auxiliary/enum/crm_enum_addresstype.php
     *
     * @return array
     * @throws \Bitrix24\Exceptions\Bitrix24ApiException
     * @throws \Bitrix24\Exceptions\Bitrix24EmptyResponseException
     * @throws \Bitrix24\Exceptions\Bitrix24Exception
     * @throws \Bitrix24\Exceptions\Bitrix24IoException
     * @throws \Bitrix24\Exceptions\Bitrix24MethodNotFoundException
     * @throws \Bitrix24\Exceptions\Bitrix24PaymentRequiredException
     * @throws \Bitrix24\Exceptions\Bitrix24PortalDeletedException
     * @throws \Bitrix24\Exceptions\Bitrix24PortalRenamedException
     * @throws \Bitrix24\Exceptions\Bitrix24SecurityException
     * @throws \Bitrix24\Exceptions\Bitrix24TokenIsExpiredException
     * @throws \Bitrix24\Exceptions\Bitrix24TokenIsInvalidException
     * @throws \Bitrix24\Exceptions\Bitrix24WrongClientException
     */
	public function addressType()
    {
        $fullResult = $this->client->call(
            'crm.enum.addresstype'
        );
        return $fullResult;
    }
}