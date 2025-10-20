<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserRegistrationFeatureSummary resources
 *
 * Available select fields:
 * - totalUserCount
 * - userRegistrationFeatureCounts
 * - userRoles
 * - userTypes
 */
class UserRegistrationFeatureSummaryQueryOptions extends QueryOptions
{
    public const FIELD_TOTAL_USER_COUNT = 'totalUserCount';
    public const FIELD_USER_REGISTRATION_FEATURE_COUNTS = 'userRegistrationFeatureCounts';
    public const FIELD_USER_ROLES = 'userRoles';
    public const FIELD_USER_TYPES = 'userTypes';

    /**
     * Select specific UserRegistrationFeatureSummary properties
     * 
     * @param array<string> $select Use UserRegistrationFeatureSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
