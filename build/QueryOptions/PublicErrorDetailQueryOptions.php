<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PublicErrorDetail resources
 *
 * Available select fields:
 * - code
 * - message
 * - target
 */
class PublicErrorDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PublicErrorDetail
     */
    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_TARGET = 'target';

    /**
     * Select specific PublicErrorDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
