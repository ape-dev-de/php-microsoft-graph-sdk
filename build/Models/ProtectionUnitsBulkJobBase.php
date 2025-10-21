<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectionUnitsBulkJobBase
 */
class ProtectionUnitsBulkJobBase
{
    public function __construct(
        /** The identity of person who created the job. */
        public ?string $createdBy = null,
        /** The time of creation of the job. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The name of the protection units bulk addition job. */
        public ?string $displayName = null,
        /** Error details containing resource resolution failures, if any. */
        public ?string $error = null,
        /** The identity of the person who last modified the job. */
        public ?string $lastModifiedBy = null,
        /** Timestamp of the last modification made to the job. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /**  */
        public ?string $status = null
    ) {}
}
