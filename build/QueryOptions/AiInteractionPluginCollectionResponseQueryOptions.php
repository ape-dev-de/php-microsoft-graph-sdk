<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteractionPluginCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AiInteractionPluginCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AiInteractionPluginCollectionResponse properties
     * 
     * @param array<string> $select Use AiInteractionPluginCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
