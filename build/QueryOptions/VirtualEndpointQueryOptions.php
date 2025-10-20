<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEndpoint resources
 *
 * Available select fields:
 * - auditEvents
 * - cloudPCs
 * - deviceImages
 * - galleryImages
 * - onPremisesConnections
 * - provisioningPolicies
 * - userSettings
 */
class VirtualEndpointQueryOptions extends QueryOptions
{
    public const FIELD_AUDIT_EVENTS = 'auditEvents';
    public const FIELD_CLOUD_PCS = 'cloudPCs';
    public const FIELD_DEVICE_IMAGES = 'deviceImages';
    public const FIELD_GALLERY_IMAGES = 'galleryImages';
    public const FIELD_ON_PREMISES_CONNECTIONS = 'onPremisesConnections';
    public const FIELD_PROVISIONING_POLICIES = 'provisioningPolicies';
    public const FIELD_USER_SETTINGS = 'userSettings';

    /**
     * Select specific VirtualEndpoint properties
     * 
     * @param array<string> $select Use VirtualEndpointQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
