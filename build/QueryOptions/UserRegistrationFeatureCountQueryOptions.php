<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserRegistrationFeatureCount resources
 *
 * Available select fields:
 * - feature
 * - userCount
 */
class UserRegistrationFeatureCountQueryOptions extends QueryOptions
{
    public const FIELD_FEATURE = 'feature';
    public const FIELD_USER_COUNT = 'userCount';

    /**
     * Select specific UserRegistrationFeatureCount properties
     * 
     * @param array<string> $select Use UserRegistrationFeatureCountQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
