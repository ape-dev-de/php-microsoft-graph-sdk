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
    /**
     * Available select fields for ClassificationError
     */
    public const FIELD_DETAILS = 'details';

    /**
     * Select specific ClassificationError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
