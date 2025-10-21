<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppRegistration
 */
class ManagedAppRegistration
{
    public function __construct(
        /** The app package Identifier */
        public ?string $appIdentifier = null,
        /** App version */
        public ?string $applicationVersion = null,
        /** Date and time of creation */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Host device name */
        public ?string $deviceName = null,
        /** App management SDK generated tag, which helps relate apps hosted on the same device. Not guaranteed to relate apps in all conditions. */
        public ?string $deviceTag = null,
        /** Host device type */
        public ?string $deviceType = null,
        /** Zero or more reasons an app registration is flagged. E.g. app running on rooted device */
        public array $flaggedReasons = [],
        /** Date and time of last the app synced with management service. */
        public ?\DateTimeInterface $lastSyncDateTime = null,
        /** App management SDK version */
        public ?string $managementSdkVersion = null,
        /** Operating System version */
        public ?string $platformVersion = null,
        /** The user Id to who this app registration belongs. */
        public ?string $userId = null,
        /** Version of the entity. */
        public ?string $version = null,
        /** Zero or more policys already applied on the registered app when it last synchronized with managment service. */
        public array $appliedPolicies = [],
        /** Zero or more policies admin intended for the app as of now. */
        public array $intendedPolicies = [],
        /** @var string[] The ManagedAppEntity is the base entity type for all other entity types under app management workflow. */
        public array $operations = []
    ) {}
}
