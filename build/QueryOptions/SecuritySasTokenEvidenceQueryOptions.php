<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySasTokenEvidence resources
 *
 * Available select fields:
 * - allowedIpAddresses
 * - allowedResourceTypes
 * - allowedServices
 * - expiryDateTime
 * - permissions
 * - protocol
 * - signatureHash
 * - signedWith
 * - startDateTime
 * - storageResource
 */
class SecuritySasTokenEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_ALLOWED_IP_ADDRESSES = 'allowedIpAddresses';
    public const FIELD_ALLOWED_RESOURCE_TYPES = 'allowedResourceTypes';
    public const FIELD_ALLOWED_SERVICES = 'allowedServices';
    public const FIELD_EXPIRY_DATE_TIME = 'expiryDateTime';
    public const FIELD_PERMISSIONS = 'permissions';
    public const FIELD_PROTOCOL = 'protocol';
    public const FIELD_SIGNATURE_HASH = 'signatureHash';
    public const FIELD_SIGNED_WITH = 'signedWith';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_STORAGE_RESOURCE = 'storageResource';

    /**
     * Select specific SecuritySasTokenEvidence properties
     * 
     * @param array<string> $select Use SecuritySasTokenEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
