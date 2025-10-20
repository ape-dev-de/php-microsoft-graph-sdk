<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityGoogleCloudResourceEvidence resources
 *
 * Available select fields:
 * - fullResourceName
 * - location
 * - locationType
 * - projectId
 * - projectNumber
 * - resourceName
 * - resourceType
 */
class SecurityGoogleCloudResourceEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_FULL_RESOURCE_NAME = 'fullResourceName';
    public const FIELD_LOCATION = 'location';
    public const FIELD_LOCATION_TYPE = 'locationType';
    public const FIELD_PROJECT_ID = 'projectId';
    public const FIELD_PROJECT_NUMBER = 'projectNumber';
    public const FIELD_RESOURCE_NAME = 'resourceName';
    public const FIELD_RESOURCE_TYPE = 'resourceType';

    /**
     * Select specific SecurityGoogleCloudResourceEvidence properties
     * 
     * @param array<string> $select Use SecurityGoogleCloudResourceEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
