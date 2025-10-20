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
    public const FIELD_APPLICATION = 'application';
    public const FIELD_DEVICE = 'device';
    public const FIELD_USER = 'user';

    /**
     * Select specific SearchIdentitySet properties
     * 
     * @param array<string> $select Use SearchIdentitySetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
