<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSMicrosoftDefenderAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MacOSMicrosoftDefenderAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MacOSMicrosoftDefenderAppCollectionResponse properties
     * 
     * @param array<string> $select Use MacOSMicrosoftDefenderAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
