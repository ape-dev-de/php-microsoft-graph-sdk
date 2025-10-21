<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecureScore resources
 *
 * Available select fields:
 * - activeUserCount
 * - averageComparativeScores
 * - azureTenantId
 * - controlScores
 * - createdDateTime
 * - currentScore
 * - enabledServices
 * - licensedUserCount
 * - maxScore
 * - vendorInformation
 */
class SecureScoreQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecureScore
     */
    public const FIELD_ACTIVE_USER_COUNT = 'activeUserCount';
    public const FIELD_AVERAGE_COMPARATIVE_SCORES = 'averageComparativeScores';
    public const FIELD_AZURE_TENANT_ID = 'azureTenantId';
    public const FIELD_CONTROL_SCORES = 'controlScores';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CURRENT_SCORE = 'currentScore';
    public const FIELD_ENABLED_SERVICES = 'enabledServices';
    public const FIELD_LICENSED_USER_COUNT = 'licensedUserCount';
    public const FIELD_MAX_SCORE = 'maxScore';
    public const FIELD_VENDOR_INFORMATION = 'vendorInformation';

    /**
     * Select specific SecureScore properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
