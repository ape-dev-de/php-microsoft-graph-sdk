<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10SecureAssessmentConfiguration
 */
class Windows10SecureAssessmentConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** DateTime the object was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Admin provided description of the Device Configuration. */
        public ?string $description = null,
        /** Admin provided name of the device configuration. */
        public ?string $displayName = null,
        /** DateTime the object was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Version of the device configuration. */
        public ?float $version = null,
        /** The list of assignments for the device configuration profile. */
        public array $assignments = [],
        /** Device Configuration Setting State Device Summary */
        public array $deviceSettingStateSummaries = [],
        /** Device configuration installation status by device. */
        public array $deviceStatuses = [],
        /** Device Configuration devices status overview */
        public ?DeviceConfigurationDeviceOverview $deviceStatusOverview = null,
        /** Device configuration installation status by user. */
        public array $userStatuses = [],
        /** Device Configuration users status overview */
        public ?DeviceConfigurationUserOverview $userStatusOverview = null,
        /** Indicates whether or not to allow the app from printing during the test. */
        public ?bool $allowPrinting = null,
        /** Indicates whether or not to allow screen capture capability during a test. */
        public ?bool $allowScreenCapture = null,
        /** Indicates whether or not to allow text suggestions during the test. */
        public ?bool $allowTextSuggestion = null,
        /** The account used to configure the Windows device for taking the test. The user can be a domain account (domain/user), an AAD account (username@tenant.com) or a local account (username). */
        public ?string $configurationAccount = null,
        /** Url link to an assessment that's automatically loaded when the secure assessment browser is launched. It has to be a valid Url (http[s]://msdn.microsoft.com/). */
        public ?string $launchUri = null
    ) {}
}
