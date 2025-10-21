<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Payload
 */
class Payload
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The branch of a payload. Possible values are: unknown, other, americanExpress, capitalOne, dhl, docuSign, dropbox, facebook, firstAmerican, microsoft, netflix, scotiabank, sendGrid, stewartTitle, tesco, wellsFargo, syrinxCloud, adobe, teams, zoom, unknownFutureValue. */
        public ?PayloadBrand $brand = null,
        /** The complexity of a payload. Possible values are: unknown, low, medium, high, unknownFutureValue. */
        public ?PayloadComplexity $complexity = null,
        /** Identity of the user who created the attack simulation and training campaign payload. */
        public ?EmailIdentity $createdBy = null,
        /** Date and time when the attack simulation and training campaign payload. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Description of the attack simulation and training campaign payload. */
        public ?string $description = null,
        /** Additional details about the payload. */
        public ?PayloadDetail $detail = null,
        /** Display name of the attack simulation and training campaign payload. Supports $filter and $orderby. */
        public ?string $displayName = null,
        /** Industry of a payload. Possible values are: unknown, other, banking, businessServices, consumerServices, education, energy, construction, consulting, financialServices, government, hospitality, insurance, legal, courierServices, IT, healthcare, manufacturing, retail, telecom, realEstate, unknownFutureValue. */
        public ?PayloadIndustry $industry = null,
        /** Indicates whether the attack simulation and training campaign payload was created from an automation flow. Supports $filter and $orderby. */
        public ?bool $isAutomated = null,
        /** Indicates whether the payload is controversial. */
        public ?bool $isControversial = null,
        /** Indicates whether the payload is from any recent event. */
        public ?bool $isCurrentEvent = null,
        /** Payload language. */
        public ?string $language = null,
        /** Identity of the user who most recently modified the attack simulation and training campaign payload. */
        public ?EmailIdentity $lastModifiedBy = null,
        /** Date and time when the attack simulation and training campaign payload was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** @var string[] Free text tags for a payload. */
        public array $payloadTags = [],
        /** The payload delivery platform for a simulation. Possible values are: unknown, sms, email, teams, unknownFutureValue. */
        public ?PayloadDeliveryPlatform $platform = null,
        /** Predicted probability for a payload to phish a targeted user. */
        public ?string $predictedCompromiseRate = null,
        /** Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue. */
        public ?SimulationAttackType $simulationAttackType = null,
        /**  */
        public ?SimulationContentSource $source = null,
        /** Simulation content status. Supports $filter and $orderby. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue. */
        public ?SimulationContentStatus $status = null,
        /** The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue, oAuthConsentGrant. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: oAuthConsentGrant. For more information on the types of social engineering attack techniques, see simulations. */
        public ?SimulationAttackTechnique $technique = null,
        /** The theme of a payload. Possible values are: unknown, other, accountActivation, accountVerification, billing, cleanUpMail, controversial, documentReceived, expense, fax, financeReport, incomingMessages, invoice, itemReceived, loginAlert, mailReceived, password, payment, payroll, personalizedOffer, quarantine, remoteWork, reviewMessage, securityUpdate, serviceSuspended, signatureRequired, upgradeMailboxStorage, verifyMailbox, voicemail, advertisement, employeeEngagement, unknownFutureValue. */
        public ?PayloadTheme $theme = null
    ) {}
}
