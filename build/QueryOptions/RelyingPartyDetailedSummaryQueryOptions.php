<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RelyingPartyDetailedSummary resources
 *
 * Available select fields:
 * - failedSignInCount
 * - migrationStatus
 * - migrationValidationDetails
 * - relyingPartyId
 * - relyingPartyName
 * - replyUrls
 * - serviceId
 * - signInSuccessRate
 * - successfulSignInCount
 * - totalSignInCount
 * - uniqueUserCount
 */
class RelyingPartyDetailedSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RelyingPartyDetailedSummary
     */
    public const FIELD_FAILED_SIGN_IN_COUNT = 'failedSignInCount';
    public const FIELD_MIGRATION_STATUS = 'migrationStatus';
    public const FIELD_MIGRATION_VALIDATION_DETAILS = 'migrationValidationDetails';
    public const FIELD_RELYING_PARTY_ID = 'relyingPartyId';
    public const FIELD_RELYING_PARTY_NAME = 'relyingPartyName';
    public const FIELD_REPLY_URLS = 'replyUrls';
    public const FIELD_SERVICE_ID = 'serviceId';
    public const FIELD_SIGN_IN_SUCCESS_RATE = 'signInSuccessRate';
    public const FIELD_SUCCESSFUL_SIGN_IN_COUNT = 'successfulSignInCount';
    public const FIELD_TOTAL_SIGN_IN_COUNT = 'totalSignInCount';
    public const FIELD_UNIQUE_USER_COUNT = 'uniqueUserCount';

    /**
     * Select specific RelyingPartyDetailedSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
