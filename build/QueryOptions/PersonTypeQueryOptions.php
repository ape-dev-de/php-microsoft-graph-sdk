<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PersonType resources
 *
 * Available select fields:
 * - class
 * - subclass
 */
class PersonTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PersonType
     */
    public const FIELD_CLASS = 'class';
    public const FIELD_SUBCLASS = 'subclass';

    /**
     * Select specific PersonType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
