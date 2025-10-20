<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcAuditResource resources
 *
 * Available select fields:
 * - displayName
 * - modifiedProperties
 * - resourceId
 */
class CloudPcAuditResourceQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_MODIFIED_PROPERTIES = 'modifiedProperties';
    public const FIELD_RESOURCE_ID = 'resourceId';

    /**
     * Select specific CloudPcAuditResource properties
     * 
     * @param array<string> $select Use CloudPcAuditResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
