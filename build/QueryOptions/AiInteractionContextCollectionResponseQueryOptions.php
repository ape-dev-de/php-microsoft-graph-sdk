<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteractionContextCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AiInteractionContextCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AiInteractionContextCollectionResponse properties
     * 
     * @param array<string> $select Use AiInteractionContextCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
