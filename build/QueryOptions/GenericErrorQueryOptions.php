<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GenericError resources
 *
 * Available select fields:
 * - code
 * - message
 */
class GenericErrorQueryOptions extends QueryOptions
{
    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';

    /**
     * Select specific GenericError properties
     * 
     * @param array<string> $select Use GenericErrorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
