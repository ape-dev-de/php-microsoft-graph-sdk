<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UsageRightsIncluded resources
 *
 * Available select fields:
 * - ownerEmail
 * - userEmail
 * - value
 */
class UsageRightsIncludedQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UsageRightsIncluded
     */
    public const FIELD_OWNER_EMAIL = 'ownerEmail';
    public const FIELD_USER_EMAIL = 'userEmail';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UsageRightsIncluded properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
