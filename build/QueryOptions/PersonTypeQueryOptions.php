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
    public const FIELD_CLASS = 'class';
    public const FIELD_SUBCLASS = 'subclass';

    /**
     * Select specific PersonType properties
     * 
     * @param array<string> $select Use PersonTypeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
