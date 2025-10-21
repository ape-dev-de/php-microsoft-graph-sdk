<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Simulation
 */
class Simulation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue, oAuthConsentGrant. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: oAuthConsentGrant. For more information on the types of social engineering attack techniques, see simulations. */
        public ?string $attackTechnique = null,
        /** Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue. */
        public ?string $attackType = null,
        /** Unique identifier for the attack simulation automation. */
        public ?string $automationId = null,
        /** Date and time of completion of the attack simulation and training campaign. Supports $filter and $orderby. */
        public ?\DateTimeInterface $completionDateTime = null,
        /** Identity of the user who created the attack simulation and training campaign. */
        public ?string $createdBy = null,
        /** Date and time of creation of the attack simulation and training campaign. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Description of the attack simulation and training campaign. */
        public ?string $description = null,
        /** Display name of the attack simulation and training campaign. Supports $filter and $orderby. */
        public ?string $displayName = null,
        /** Simulation duration in days. */
        public ?float $durationInDays = null,
        /** Details about the end user notification setting. */
        public ?string $endUserNotificationSetting = null,
        /** Users excluded from the simulation. */
        public ?string $excludedAccountTarget = null,
        /** Users targeted in the simulation. */
        public ?string $includedAccountTarget = null,
        /** Flag that represents if the attack simulation and training campaign was created from a simulation automation flow. Supports $filter and $orderby. */
        public ?bool $isAutomated = null,
        /** Identity of the user who most recently modified the attack simulation and training campaign. */
        public ?string $lastModifiedBy = null,
        /** Date and time of the most recent modification of the attack simulation and training campaign. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Date and time of the launch/start of the attack simulation and training campaign. Supports $filter and $orderby. */
        public ?\DateTimeInterface $launchDateTime = null,
        /** OAuth app details for the OAuth technique. */
        public ?string $oAuthConsentAppDetail = null,
        /** Method of delivery of the phishing payload used in the attack simulation and training campaign. Possible values are: unknown, sms, email, teams, unknownFutureValue. */
        public ?string $payloadDeliveryPlatform = null,
        /** Report of the attack simulation and training campaign. */
        public ?string $report = null,
        /** Status of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, draft, running, scheduled, succeeded, failed, cancelled, excluded, unknownFutureValue. */
        public ?string $status = null,
        /** Details about the training settings for a simulation. */
        public ?string $trainingSetting = null,
        /** The landing page associated with a simulation during its creation. */
        public ?string $landingPage = null,
        /** The login page associated with a simulation during its creation. */
        public ?string $loginPage = null,
        /** The payload associated with a simulation during its creation. */
        public ?string $payload = null
    ) {}
}
