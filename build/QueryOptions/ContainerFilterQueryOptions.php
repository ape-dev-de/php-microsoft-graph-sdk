<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContainerFilter resources
 *
 * Available select fields:
 * - includedContainers
 */
class ContainerFilterQueryOptions extends QueryOptions
{
    public const FIELD_INCLUDED_CONTAINERS = 'includedContainers';

    /**
     * Select specific ContainerFilter properties
     * 
     * @param array<string> $select Use ContainerFilterQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
