<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Package resources
 *
 * Available select fields:
 * - type
 */
class PackageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Package
     */
    public const FIELD_TYPE = 'type';

    /**
     * Select specific Package properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
