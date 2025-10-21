<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchIdentitySet resources
 *
 * Available select fields:
 * - application
 * - device
 * - user
 */
class SearchIdentitySetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchIdentitySet
     */
    public const FIELD_APPLICATION = 'application';
    public const FIELD_DEVICE = 'device';
    public const FIELD_USER = 'user';

    /**
     * Select specific SearchIdentitySet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
