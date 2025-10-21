<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PublicError resources
 *
 * Available select fields:
 * - code
 * - details
 * - innerError
 * - message
 * - target
 */
class PublicErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PublicError
     */
    public const FIELD_CODE = 'code';
    public const FIELD_DETAILS = 'details';
    public const FIELD_INNER_ERROR = 'innerError';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_TARGET = 'target';

    /**
     * Select specific PublicError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
