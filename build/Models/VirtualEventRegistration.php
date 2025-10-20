<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistration
 */
class VirtualEventRegistration
{
    /**
     * Date and time when the registrant cancels their registration for the virtual event. Only appears when applicable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $cancelationDateTime;

    /**
     * Email address of the registrant.
     */
    private ?string $email;

    /**
     * The external information for a virtual event registration.
     */
    private ?string $externalRegistrationInformation;

    /**
     * First name of the registrant.
     */
    private ?string $firstName;

    /**
     * Last name of the registrant.
     */
    private ?string $lastName;

    /**
     * The registrant's preferred language.
     */
    private ?string $preferredLanguage;

    /**
     * The registrant's time zone details.
     */
    private ?string $preferredTimezone;

    /**
     * Date and time when the registrant registers for the virtual event. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $registrationDateTime;

    /**
     * The registrant's answer to the registration questions.
     */
    private array $registrationQuestionAnswers = [];

    /**
     * Registration status of the registrant. Read-only. Possible values are registered, canceled, waitlisted, pendingApproval, rejectedByOrganizer, and unknownFutureValue.
     */
    private ?string $status;

    /**
     * The registrant's ID in Microsoft Entra ID. Only appears when the registrant is registered in Microsoft Entra ID.
     */
    private ?string $userId;

    /**
     * Sessions for a registration.
     */
    private ?string $sessions;

    public function getCancelationDateTime(): ?\DateTimeInterface
    {
        return $this->cancelationDateTime;
    }

    public function setCancelationDateTime(?\DateTimeInterface $cancelationDateTime): self
    {
        $this->cancelationDateTime = $cancelationDateTime;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getExternalRegistrationInformation(): ?string
    {
        return $this->externalRegistrationInformation;
    }

    public function setExternalRegistrationInformation(?string $externalRegistrationInformation): self
    {
        $this->externalRegistrationInformation = $externalRegistrationInformation;
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getPreferredLanguage(): ?string
    {
        return $this->preferredLanguage;
    }

    public function setPreferredLanguage(?string $preferredLanguage): self
    {
        $this->preferredLanguage = $preferredLanguage;
        return $this;
    }

    public function getPreferredTimezone(): ?string
    {
        return $this->preferredTimezone;
    }

    public function setPreferredTimezone(?string $preferredTimezone): self
    {
        $this->preferredTimezone = $preferredTimezone;
        return $this;
    }

    public function getRegistrationDateTime(): ?\DateTimeInterface
    {
        return $this->registrationDateTime;
    }

    public function setRegistrationDateTime(?\DateTimeInterface $registrationDateTime): self
    {
        $this->registrationDateTime = $registrationDateTime;
        return $this;
    }

    public function getRegistrationQuestionAnswers(): array
    {
        return $this->registrationQuestionAnswers;
    }

    public function setRegistrationQuestionAnswers(array $registrationQuestionAnswers): self
    {
        $this->registrationQuestionAnswers = $registrationQuestionAnswers;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function getSessions(): ?string
    {
        return $this->sessions;
    }

    public function setSessions(?string $sessions): self
    {
        $this->sessions = $sessions;
        return $this;
    }

}
