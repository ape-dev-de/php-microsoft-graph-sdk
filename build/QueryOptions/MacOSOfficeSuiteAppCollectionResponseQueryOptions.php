<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSOfficeSuiteAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MacOSOfficeSuiteAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MacOSOfficeSuiteAppCollectionResponse properties
     * 
     * @param array<string> $select Use MacOSOfficeSuiteAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
