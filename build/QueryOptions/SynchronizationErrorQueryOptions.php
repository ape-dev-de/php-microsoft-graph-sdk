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
    /**
     * Available select fields for SynchronizationError
     */
    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_TENANT_ACTIONABLE = 'tenantActionable';

    /**
     * Select specific SynchronizationError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
