<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentitySet resources
 *
 * Available select fields:
 * - application
 * - device
 * - user
 */
class IdentitySetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentitySet
     */
    public const FIELD_APPLICATION = 'application';
    public const FIELD_DEVICE = 'device';
    public const FIELD_USER = 'user';

    /**
     * Select specific IdentitySet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
