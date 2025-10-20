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
    public const FIELD_TYPE = 'type';

    /**
     * Select specific Package properties
     * 
     * @param array<string> $select Use PackageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
