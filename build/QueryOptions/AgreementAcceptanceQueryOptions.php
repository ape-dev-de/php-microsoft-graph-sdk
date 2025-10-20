<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AgreementAcceptance resources
 *
 * Available select fields:
 * - agreementFileId
 * - agreementId
 * - deviceDisplayName
 * - deviceId
 * - deviceOSType
 * - deviceOSVersion
 * - expirationDateTime
 * - recordedDateTime
 * - state
 * - userDisplayName
 * - userEmail
 * - userId
 * - userPrincipalName
 */
class AgreementAcceptanceQueryOptions extends QueryOptions
{
    public const FIELD_AGREEMENT_FILE_ID = 'agreementFileId';
    public const FIELD_AGREEMENT_ID = 'agreementId';
    public const FIELD_DEVICE_DISPLAY_NAME = 'deviceDisplayName';
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_DEVICE_OSTYPE = 'deviceOSType';
    public const FIELD_DEVICE_OSVERSION = 'deviceOSVersion';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_RECORDED_DATE_TIME = 'recordedDateTime';
    public const FIELD_STATE = 'state';
    public const FIELD_USER_DISPLAY_NAME = 'userDisplayName';
    public const FIELD_USER_EMAIL = 'userEmail';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific AgreementAcceptance properties
     * 
     * @param array<string> $select Use AgreementAcceptanceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
