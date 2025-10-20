<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteractionLinkCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AiInteractionLinkCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AiInteractionLinkCollectionResponse properties
     * 
     * @param array<string> $select Use AiInteractionLinkCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
