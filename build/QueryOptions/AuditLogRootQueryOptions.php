<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuditLogRoot resources
 *
 * Available select fields:
 * - directoryAudits
 * - provisioning
 * - signIns
 */
class AuditLogRootQueryOptions extends QueryOptions
{
    public const FIELD_DIRECTORY_AUDITS = 'directoryAudits';
    public const FIELD_PROVISIONING = 'provisioning';
    public const FIELD_SIGN_INS = 'signIns';

    /**
     * Select specific AuditLogRoot properties
     * 
     * @param array<string> $select Use AuditLogRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
