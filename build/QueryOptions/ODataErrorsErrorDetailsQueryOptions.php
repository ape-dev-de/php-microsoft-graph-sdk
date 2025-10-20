<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ODataErrorsErrorDetails resources
 *
 * Available select fields:
 * - code
 * - message
 * - target
 */
class ODataErrorsErrorDetailsQueryOptions extends QueryOptions
{
    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_TARGET = 'target';

    /**
     * Select specific ODataErrorsErrorDetails properties
     * 
     * @param array<string> $select Use ODataErrorsErrorDetailsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
