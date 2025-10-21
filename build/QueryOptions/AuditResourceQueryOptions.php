<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuditResource resources
 *
 * Available select fields:
 * - auditResourceType
 * - displayName
 * - modifiedProperties
 * - resourceId
 */
class AuditResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuditResource
     */
    public const FIELD_AUDIT_RESOURCE_TYPE = 'auditResourceType';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_MODIFIED_PROPERTIES = 'modifiedProperties';
    public const FIELD_RESOURCE_ID = 'resourceId';

    /**
     * Select specific AuditResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
