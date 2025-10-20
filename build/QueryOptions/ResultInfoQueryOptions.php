<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResultInfo resources
 *
 * Available select fields:
 * - code
 * - message
 * - subcode
 */
class ResultInfoQueryOptions extends QueryOptions
{
    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_SUBCODE = 'subcode';

    /**
     * Select specific ResultInfo properties
     * 
     * @param array<string> $select Use ResultInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
