<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteractionAttachmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AiInteractionAttachmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AiInteractionAttachmentCollectionResponse properties
     * 
     * @param array<string> $select Use AiInteractionAttachmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
