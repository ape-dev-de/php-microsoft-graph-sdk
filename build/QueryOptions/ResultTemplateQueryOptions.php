<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResultTemplate resources
 *
 * Available select fields:
 * - body
 * - displayName
 */
class ResultTemplateQueryOptions extends QueryOptions
{
    public const FIELD_BODY = 'body';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific ResultTemplate properties
     * 
     * @param array<string> $select Use ResultTemplateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
