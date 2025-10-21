<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Synchronization resources
 *
 * Available select fields:
 * - secrets
 * - jobs
 * - templates
 */
class SynchronizationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Synchronization
     */
    public const FIELD_SECRETS = 'secrets';
    public const FIELD_JOBS = 'jobs';
    public const FIELD_TEMPLATES = 'templates';

    /**
     * Select specific Synchronization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
