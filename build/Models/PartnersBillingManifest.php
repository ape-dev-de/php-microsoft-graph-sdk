<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingManifest
 */
class PartnersBillingManifest
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The total file count for this partner tenant ID. */
        public ?float $blobCount = null,
        /** A collection of blob objects that contain details of all the files for the partner tenant ID. */
        public array $blobs = [],
        /** The date and time when a manifest resource was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The billing data file format. The possible value is: compressedJSONLines. Each blob is a compressed file and data in the file is in JSON lines format. Decompress the file to access the data. */
        public ?string $dataFormat = null,
        /** Version of data represented by the manifest. Any change in eTag indicates a new data version. */
        public ?string $eTag = null,
        /** Indicates the division of data. If a given partition has more than the supported number, the data is split into multiple files, each file representing a specific partitionValue. By default, the data in the file is partitioned by the number of line items. */
        public ?string $partitionType = null,
        /** The Microsoft Entra tenant ID of the partner. */
        public ?string $partnerTenantId = null,
        /** The root directory that contains all the files. */
        public ?string $rootDirectory = null,
        /** The SAS token for accessing the directory or an individual file in the directory. */
        public ?string $sasToken = null,
        /** The version of the manifest schema. */
        public ?string $schemaVersion = null
    ) {}
}
