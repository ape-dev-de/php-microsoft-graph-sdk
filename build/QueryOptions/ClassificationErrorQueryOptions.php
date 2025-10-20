<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ClassificationError resources
 *
 * Available select fields:
 * - details
 */
class ClassificationErrorQueryOptions extends QueryOptions
{
    public const FIELD_DETAILS = 'details';

    /**
     * Select specific ClassificationError properties
     * 
     * @param array<string> $select Use ClassificationErrorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
