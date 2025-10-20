<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PublicInnerError resources
 *
 * Available select fields:
 * - code
 * - details
 * - message
 * - target
 */
class PublicInnerErrorQueryOptions extends QueryOptions
{
    public const FIELD_CODE = 'code';
    public const FIELD_DETAILS = 'details';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_TARGET = 'target';

    /**
     * Select specific PublicInnerError properties
     * 
     * @param array<string> $select Use PublicInnerErrorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
