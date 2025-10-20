<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsPstnCallLogRow resources
 *
 * Available select fields:
 * - callDurationSource
 * - calleeNumber
 * - callerNumber
 * - callId
 * - callType
 * - charge
 * - conferenceId
 * - connectionCharge
 * - currency
 * - destinationContext
 * - destinationName
 * - duration
 * - endDateTime
 * - id
 * - inventoryType
 * - licenseCapability
 * - operator
 * - startDateTime
 * - tenantCountryCode
 * - usageCountryCode
 * - userDisplayName
 * - userId
 * - userPrincipalName
 */
class CallRecordsPstnCallLogRowQueryOptions extends QueryOptions
{
    public const FIELD_CALL_DURATION_SOURCE = 'callDurationSource';
    public const FIELD_CALLEE_NUMBER = 'calleeNumber';
    public const FIELD_CALLER_NUMBER = 'callerNumber';
    public const FIELD_CALL_ID = 'callId';
    public const FIELD_CALL_TYPE = 'callType';
    public const FIELD_CHARGE = 'charge';
    public const FIELD_CONFERENCE_ID = 'conferenceId';
    public const FIELD_CONNECTION_CHARGE = 'connectionCharge';
    public const FIELD_CURRENCY = 'currency';
    public const FIELD_DESTINATION_CONTEXT = 'destinationContext';
    public const FIELD_DESTINATION_NAME = 'destinationName';
    public const FIELD_DURATION = 'duration';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_ID = 'id';
    public const FIELD_INVENTORY_TYPE = 'inventoryType';
    public const FIELD_LICENSE_CAPABILITY = 'licenseCapability';
    public const FIELD_OPERATOR = 'operator';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_TENANT_COUNTRY_CODE = 'tenantCountryCode';
    public const FIELD_USAGE_COUNTRY_CODE = 'usageCountryCode';
    public const FIELD_USER_DISPLAY_NAME = 'userDisplayName';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific CallRecordsPstnCallLogRow properties
     * 
     * @param array<string> $select Use CallRecordsPstnCallLogRowQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
