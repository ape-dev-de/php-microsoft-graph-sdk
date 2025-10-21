<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuditActivityInitiator resources
 *
 * Available select fields:
 * - app
 * - user
 */
class AuditActivityInitiatorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuditActivityInitiator
     */
    public const FIELD_APP = 'app';
    public const FIELD_USER = 'user';

    /**
     * Select specific AuditActivityInitiator properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
