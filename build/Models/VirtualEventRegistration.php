<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistration
 */
class VirtualEventRegistration
{
    public function __construct(
        /** Date and time when the registrant cancels their registration for the virtual event. Only appears when applicable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $cancelationDateTime = null,
        /** Email address of the registrant. */
        public ?string $email = null,
        /** The external information for a virtual event registration. */
        public ?string $externalRegistrationInformation = null,
        /** First name of the registrant. */
        public ?string $firstName = null,
        /** Last name of the registrant. */
        public ?string $lastName = null,
        /** The registrant's preferred language. */
        public ?string $preferredLanguage = null,
        /** The registrant's time zone details. */
        public ?string $preferredTimezone = null,
        /** Date and time when the registrant registers for the virtual event. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $registrationDateTime = null,
        /** The registrant's answer to the registration questions. */
        public array $registrationQuestionAnswers = [],
        /** Registration status of the registrant. Read-only. Possible values are registered, canceled, waitlisted, pendingApproval, rejectedByOrganizer, and unknownFutureValue. */
        public ?string $status = null,
        /** The registrant's ID in Microsoft Entra ID. Only appears when the registrant is registered in Microsoft Entra ID. */
        public ?string $userId = null,
        /** @var string[] Sessions for a registration. */
        public array $sessions = []
    ) {}
}
