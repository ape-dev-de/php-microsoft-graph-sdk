<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRetentionEventStatus resources
 *
 * Available select fields:
 * - error
 * - status
 */
class SecurityRetentionEventStatusQueryOptions extends QueryOptions
{
    public const FIELD_ERROR = 'error';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific SecurityRetentionEventStatus properties
     * 
     * @param array<string> $select Use SecurityRetentionEventStatusQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
