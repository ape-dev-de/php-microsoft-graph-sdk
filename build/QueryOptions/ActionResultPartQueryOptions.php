<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ActionResultPart resources
 *
 * Available select fields:
 * - error
 */
class ActionResultPartQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ActionResultPart
     */
    public const FIELD_ERROR = 'error';

    /**
     * Select specific ActionResultPart properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
