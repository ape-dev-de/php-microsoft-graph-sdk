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
    /**
     * Available select fields for AuditLogRoot
     */
    public const FIELD_DIRECTORY_AUDITS = 'directoryAudits';
    public const FIELD_PROVISIONING = 'provisioning';
    public const FIELD_SIGN_INS = 'signIns';

    /**
     * Select specific AuditLogRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
