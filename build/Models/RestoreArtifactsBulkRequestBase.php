<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestoreArtifactsBulkRequestBase
 */
class RestoreArtifactsBulkRequestBase
{
    public function __construct(
        /** The identity of the person who created the bulk request. */
        public ?string $createdBy = null,
        /** The time when the bulk request was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue. */
        public ?string $destinationType = null,
        /** Name of the addition request. */
        public ?string $displayName = null,
        /** Error details are populated for resource resolution failures. */
        public ?string $error = null,
        /** Identity of the person who last modified this entity. */
        public ?string $lastModifiedBy = null,
        /** Timestamp when this entity was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The start and end date and time of the protection period. */
        public ?string $protectionTimePeriod = null,
        /** @var string[] Indicates which protection units to restore. This property isn't implemented yet. Future value; don't use. */
        public array $protectionUnitIds = [],
        /** Indicates which restore point to return. The possible values are: oldest, latest, unknownFutureValue. */
        public ?string $restorePointPreference = null,
        /**  */
        public ?string $status = null,
        /** The type of the restore point. The possible values are: none, fastRestore, unknownFutureValue. */
        public ?string $tags = null
    ) {}
}
