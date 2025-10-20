<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudClipboardItemPayloadCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CloudClipboardItemPayloadCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CloudClipboardItemPayloadCollectionResponse properties
     * 
     * @param array<string> $select Use CloudClipboardItemPayloadCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
