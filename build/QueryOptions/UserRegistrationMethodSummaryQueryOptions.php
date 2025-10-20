<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserRegistrationMethodSummary resources
 *
 * Available select fields:
 * - totalUserCount
 * - userRegistrationMethodCounts
 * - userRoles
 * - userTypes
 */
class UserRegistrationMethodSummaryQueryOptions extends QueryOptions
{
    public const FIELD_TOTAL_USER_COUNT = 'totalUserCount';
    public const FIELD_USER_REGISTRATION_METHOD_COUNTS = 'userRegistrationMethodCounts';
    public const FIELD_USER_ROLES = 'userRoles';
    public const FIELD_USER_TYPES = 'userTypes';

    /**
     * Select specific UserRegistrationMethodSummary properties
     * 
     * @param array<string> $select Use UserRegistrationMethodSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
