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
    public const FIELD_ERROR = 'error';

    /**
     * Select specific ActionResultPart properties
     * 
     * @param array<string> $select Use ActionResultPartQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
