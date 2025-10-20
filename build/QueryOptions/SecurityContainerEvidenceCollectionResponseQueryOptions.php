<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityContainerEvidenceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityContainerEvidenceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityContainerEvidenceCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityContainerEvidenceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
