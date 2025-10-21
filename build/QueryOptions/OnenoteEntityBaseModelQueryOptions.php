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
    /**
     * Available select fields for OnenoteEntityBaseModel
     */
    public const FIELD_SELF = 'self';

    /**
     * Select specific OnenoteEntityBaseModel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
