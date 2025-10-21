<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExchangeProtectionPolicy
 */
class ExchangeProtectionPolicy
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
        /** The rules associated with the Exchange protection policy. */
        public array $mailboxInclusionRules = [],
        /** The protection units (mailboxes) that are  protected under the Exchange protection policy. */
        public array $mailboxProtectionUnits = [],
        /** @var string[]  */
        public array $mailboxProtectionUnitsBulkAdditionJobs = []
    ) {}
}
