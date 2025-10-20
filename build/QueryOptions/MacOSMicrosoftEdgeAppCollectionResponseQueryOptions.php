<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSMicrosoftEdgeAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MacOSMicrosoftEdgeAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MacOSMicrosoftEdgeAppCollectionResponse properties
     * 
     * @param array<string> $select Use MacOSMicrosoftEdgeAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
