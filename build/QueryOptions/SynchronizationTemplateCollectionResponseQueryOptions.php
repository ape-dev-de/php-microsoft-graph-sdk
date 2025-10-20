<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationTemplateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SynchronizationTemplateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SynchronizationTemplateCollectionResponse properties
     * 
     * @param array<string> $select Use SynchronizationTemplateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
