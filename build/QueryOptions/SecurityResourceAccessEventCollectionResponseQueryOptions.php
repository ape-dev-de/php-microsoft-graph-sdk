<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityResourceAccessEventCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityResourceAccessEventCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityResourceAccessEventCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityResourceAccessEventCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
