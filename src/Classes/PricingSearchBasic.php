<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2020-07-07 11:24:43 AM CDT
 */

namespace NetSuite\Classes;

class PricingSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $assignedPriceLevel;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $maximumQuantity;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $minimumQuantity;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $priceLevel;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $rate;
    static $paramtypesmap = array(
        "assignedPriceLevel" => "SearchBooleanField",
        "currency" => "SearchMultiSelectField",
        "customer" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "maximumQuantity" => "SearchDoubleField",
        "minimumQuantity" => "SearchDoubleField",
        "priceLevel" => "SearchMultiSelectField",
        "rate" => "SearchDoubleField",
    );
}
