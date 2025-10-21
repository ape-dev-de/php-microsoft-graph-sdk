<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PublicErrorResponse resources
 *
 * Available select fields:
 * - error
 */
class PublicErrorResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PublicErrorResponse
     */
    public const FIELD_ERROR = 'error';

    /**
     * Select specific PublicErrorResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
