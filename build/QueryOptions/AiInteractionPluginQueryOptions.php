<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteractionPlugin resources
 *
 * Available select fields:
 * - identifier
 * - name
 * - version
 */
class AiInteractionPluginQueryOptions extends QueryOptions
{
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_NAME = 'name';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific AiInteractionPlugin properties
     * 
     * @param array<string> $select Use AiInteractionPluginQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
