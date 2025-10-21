<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OneDriveForBusinessProtectionPolicy
 */
class OneDriveForBusinessProtectionPolicy
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identity of person who created the policy. */
        public ?string $createdBy = null,
        /** The time of creation of the policy. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The name of the policy to be created. */
        public ?string $displayName = null,
        /** The identity of the person who last modified the policy. */
        public ?string $lastModifiedBy = null,
        /** The timestamp of the last modification of the policy. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Contains the retention setting details for the policy. */
        public array $retentionSettings = [],
        /** The aggregated status of the protection units associated with the policy. The possible values are: inactive, activeWithErrors, updating, active, unknownFutureValue. */
        public ?string $status = null,
        /** Contains the details of the Onedrive for Business protection rule. */
        public array $driveInclusionRules = [],
        /** Contains the protection units associated with a  OneDrive for Business protection policy. */
        public array $driveProtectionUnits = [],
        /**  */
        public array $driveProtectionUnitsBulkAdditionJobs = []
    ) {}
}
