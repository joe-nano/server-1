<?php

/**
 * Represents the Bulk service input for filter bulk upload
 * @package plugins.bulkUploadFilter
 * @subpackage api.objects
 */
class KalturaBulkServiceFilterDataBase extends KalturaBulkServiceData
{
	/**
	 * Filter for extracting the objects list to upload
	 * @var KalturaFilter
	 */
	public $filter;


	public function getType ()
	{
		return kPluginableEnumsManager::apiToCore("BulkUploadType", BulkUploadFilterPlugin::getApiValue(BulkUploadFilterType::FILTER));
	}

	public function toBulkUploadJobData(KalturaBulkUploadJobData $jobData)
	{
		$jobData->filter = $this->filter;
	}
}