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
    public const FIELD_APP = 'app';
    public const FIELD_USER = 'user';

    /**
     * Select specific AuditActivityInitiator properties
     * 
     * @param array<string> $select Use AuditActivityInitiatorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
