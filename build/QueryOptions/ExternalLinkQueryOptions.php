<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalLink resources
 *
 * Available select fields:
 * - href
 */
class ExternalLinkQueryOptions extends QueryOptions
{
    public const FIELD_HREF = 'href';

    /**
     * Select specific ExternalLink properties
     * 
     * @param array<string> $select Use ExternalLinkQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
