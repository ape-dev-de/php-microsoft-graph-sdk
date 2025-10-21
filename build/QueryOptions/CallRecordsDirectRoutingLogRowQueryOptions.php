<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsDirectRoutingLogRow resources
 *
 * Available select fields:
 * - calleeNumber
 * - callEndSubReason
 * - callerNumber
 * - callType
 * - correlationId
 * - duration
 * - endDateTime
 * - failureDateTime
 * - finalSipCode
 * - finalSipCodePhrase
 * - id
 * - inviteDateTime
 * - mediaBypassEnabled
 * - mediaPathLocation
 * - signalingLocation
 * - startDateTime
 * - successfulCall
 * - trunkFullyQualifiedDomainName
 * - userDisplayName
 * - userId
 * - userPrincipalName
 */
class CallRecordsDirectRoutingLogRowQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsDirectRoutingLogRow
     */
    public const FIELD_CALLEE_NUMBER = 'calleeNumber';
    public const FIELD_CALL_END_SUB_REASON = 'callEndSubReason';
    public const FIELD_CALLER_NUMBER = 'callerNumber';
    public const FIELD_CALL_TYPE = 'callType';
    public const FIELD_CORRELATION_ID = 'correlationId';
    public const FIELD_DURATION = 'duration';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_FAILURE_DATE_TIME = 'failureDateTime';
    public const FIELD_FINAL_SIP_CODE = 'finalSipCode';
    public const FIELD_FINAL_SIP_CODE_PHRASE = 'finalSipCodePhrase';
    public const FIELD_ID = 'id';
    public const FIELD_INVITE_DATE_TIME = 'inviteDateTime';
    public const FIELD_MEDIA_BYPASS_ENABLED = 'mediaBypassEnabled';
    public const FIELD_MEDIA_PATH_LOCATION = 'mediaPathLocation';
    public const FIELD_SIGNALING_LOCATION = 'signalingLocation';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_SUCCESSFUL_CALL = 'successfulCall';
    public const FIELD_TRUNK_FULLY_QUALIFIED_DOMAIN_NAME = 'trunkFullyQualifiedDomainName';
    public const FIELD_USER_DISPLAY_NAME = 'userDisplayName';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific CallRecordsDirectRoutingLogRow properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
