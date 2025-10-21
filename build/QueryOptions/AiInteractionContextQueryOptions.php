<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteractionContext resources
 *
 * Available select fields:
 * - contextReference
 * - contextType
 * - displayName
 */
class AiInteractionContextQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AiInteractionContext
     */
    public const FIELD_CONTEXT_REFERENCE = 'contextReference';
    public const FIELD_CONTEXT_TYPE = 'contextType';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific AiInteractionContext properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
