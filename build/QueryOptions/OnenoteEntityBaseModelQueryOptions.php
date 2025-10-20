<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteEntityBaseModel resources
 *
 * Available select fields:
 * - self
 */
class OnenoteEntityBaseModelQueryOptions extends QueryOptions
{
    public const FIELD_SELF = 'self';

    /**
     * Select specific OnenoteEntityBaseModel properties
     * 
     * @param array<string> $select Use OnenoteEntityBaseModelQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
