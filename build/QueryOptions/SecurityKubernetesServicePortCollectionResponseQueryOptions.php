<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesServicePortCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityKubernetesServicePortCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityKubernetesServicePortCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityKubernetesServicePortCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
