<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceStatus
 */
class ServiceStatus
{
    public function __construct(
        /** The type of consumer. The possible values are: unknown, firstparty, thirdparty, unknownFutureValue. */
        public ?BackupServiceConsumer $backupServiceConsumer = null,
        /** The reason the service is disabled. The possible values are: none, controllerServiceAppDeleted, invalidBillingProfile, userRequested, unknownFutureValue. */
        public ?DisableReason $disableReason = null,
        /** The expiration time of the grace period. */
        public ?\DateTimeInterface $gracePeriodDateTime = null,
        /** Identity of the person who last modified the entity. */
        public ?IdentitySet $lastModifiedBy = null,
        /** Timestamp of the last modification of the entity. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The expiration time of the restoration allowed period. */
        public ?\DateTimeInterface $restoreAllowedTillDateTime = null,
        /** Status of the service. This value indicates what capabilities can be used. The possible values are: disabled, enabled, protectionChangeLocked, restoreLocked, unknownFutureValue. */
        public ?BackupServiceStatus $status = null
    ) {}
}
