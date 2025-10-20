<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationError resources
 *
 * Available select fields:
 * - code
 * - message
 * - tenantActionable
 */
class SynchronizationErrorQueryOptions extends QueryOptions
{
    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_TENANT_ACTIONABLE = 'tenantActionable';

    /**
     * Select specific SynchronizationError properties
     * 
     * @param array<string> $select Use SynchronizationErrorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
