<?php
/**
 * @package plugins.reach
 * @subpackage model.filters
 */
class EntryVendorTaskFilter extends baseObjectFilter
{
	public function init ()
	{
		$this->fields = kArray::makeAssociativeDefaultValue ( array (
			"_eq_id",
			"_in_id",
			"_gte_created_at",
			"_lte_created_at",
			"_gte_updated_at",
			"_lte_updated_at",
			"_gte_queued_at",
			"_lte_queued_at",
			"_gte_finished_at",
			"_lte_finished_at",
			"_eq_entry_id",
			"_eq_status",
			"_in_status",
			"_eq_vendor_profile_id",
			"_in_vendor_profile_id",
			"_eq_catalog_item_id",
			"_in_catalog_item_id",
		) , NULL );
		
		$this->allowed_order_fields = array (
			"id",
			"createdAt",
			"updatedAt",
			"queuedAt",
			"finishedAt",
		);
		
		$this->aliases = array (
		);
	}
	
	public function describe()
	{
		return
			array (
				"display_name" => "EntryVendorTask",
				"desc" => ""
			);
	}
	
	public function getFieldNameFromPeer($field_name)
	{
		return EntryVendorTaskPeer::translateFieldName($field_name, $this->field_name_translation_type, BasePeer::TYPE_COLNAME);
	}
	
	public function getIdFromPeer()
	{
		return EntryVendorTaskPeer::ID;
	}
}

