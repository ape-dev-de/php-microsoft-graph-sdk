<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingManifest resources
 *
 * Available select fields:
 * - blobCount
 * - blobs
 * - createdDateTime
 * - dataFormat
 * - eTag
 * - partitionType
 * - partnerTenantId
 * - rootDirectory
 * - sasToken
 * - schemaVersion
 */
class PartnersBillingManifestQueryOptions extends QueryOptions
{
    public const FIELD_BLOB_COUNT = 'blobCount';
    public const FIELD_BLOBS = 'blobs';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DATA_FORMAT = 'dataFormat';
    public const FIELD_E_TAG = 'eTag';
    public const FIELD_PARTITION_TYPE = 'partitionType';
    public const FIELD_PARTNER_TENANT_ID = 'partnerTenantId';
    public const FIELD_ROOT_DIRECTORY = 'rootDirectory';
    public const FIELD_SAS_TOKEN = 'sasToken';
    public const FIELD_SCHEMA_VERSION = 'schemaVersion';

    /**
     * Select specific PartnersBillingManifest properties
     * 
     * @param array<string> $select Use PartnersBillingManifestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
