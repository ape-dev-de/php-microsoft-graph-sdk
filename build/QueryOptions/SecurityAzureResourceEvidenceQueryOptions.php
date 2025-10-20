<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAzureResourceEvidence resources
 *
 * Available select fields:
 * - resourceId
 * - resourceName
 * - resourceType
 */
class SecurityAzureResourceEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_RESOURCE_ID = 'resourceId';
    public const FIELD_RESOURCE_NAME = 'resourceName';
    public const FIELD_RESOURCE_TYPE = 'resourceType';

    /**
     * Select specific SecurityAzureResourceEvidence properties
     * 
     * @param array<string> $select Use SecurityAzureResourceEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
