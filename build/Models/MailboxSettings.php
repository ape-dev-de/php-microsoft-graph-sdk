<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxSettings
 */
class MailboxSettings
{
    /**
     * Folder ID of an archive folder for the user.
     */
    private ?string $archiveFolder;

    /**
     * Configuration settings to automatically notify the sender of an incoming email with a message from the signed-in user.
     */
    private ?string $automaticRepliesSetting;

    /**
     * The date format for the user's mailbox.
     */
    private ?string $dateFormat;

    /**
     * If the user has a calendar delegate, this specifies whether the delegate, mailbox owner, or both receive meeting messages and meeting responses. Possible values are: sendToDelegateAndInformationToPrincipal, sendToDelegateAndPrincipal, sendToDelegateOnly.
     */
    private ?string $delegateMeetingMessageDeliveryOptions;

    /**
     * The locale information for the user, including the preferred language and country/region.
     */
    private ?string $language;

    /**
     * The time format for the user's mailbox.
     */
    private ?string $timeFormat;

    /**
     * The default time zone for the user's mailbox.
     */
    private ?string $timeZone;

    /**
     * The purpose of the mailbox. Differentiates a mailbox for a single user from a shared mailbox and equipment mailbox in Exchange Online. Possible values are: user, linked, shared, room, equipment, others, unknownFutureValue. Read-only.
     */
    private ?string $userPurpose;

    /**
     * The days of the week and hours in a specific time zone that the user works.
     */
    private ?string $workingHours;


    public function getArchiveFolder(): ?string
    {
        return $this->archiveFolder;
    }

    public function setArchiveFolder(?string $archiveFolder): self
    {
        $this->archiveFolder = $archiveFolder;
        return $this;
    }

    public function getAutomaticRepliesSetting(): ?string
    {
        return $this->automaticRepliesSetting;
    }

    public function setAutomaticRepliesSetting(?string $automaticRepliesSetting): self
    {
        $this->automaticRepliesSetting = $automaticRepliesSetting;
        return $this;
    }

    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }

    public function setDateFormat(?string $dateFormat): self
    {
        $this->dateFormat = $dateFormat;
        return $this;
    }

    public function getDelegateMeetingMessageDeliveryOptions(): ?string
    {
        return $this->delegateMeetingMessageDeliveryOptions;
    }

    public function setDelegateMeetingMessageDeliveryOptions(?string $delegateMeetingMessageDeliveryOptions): self
    {
        $this->delegateMeetingMessageDeliveryOptions = $delegateMeetingMessageDeliveryOptions;
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;
        return $this;
    }

    public function getTimeFormat(): ?string
    {
        return $this->timeFormat;
    }

    public function setTimeFormat(?string $timeFormat): self
    {
        $this->timeFormat = $timeFormat;
        return $this;
    }

    public function getTimeZone(): ?string
    {
        return $this->timeZone;
    }

    public function setTimeZone(?string $timeZone): self
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    public function getUserPurpose(): ?string
    {
        return $this->userPurpose;
    }

    public function setUserPurpose(?string $userPurpose): self
    {
        $this->userPurpose = $userPurpose;
        return $this;
    }

    public function getWorkingHours(): ?string
    {
        return $this->workingHours;
    }

    public function setWorkingHours(?string $workingHours): self
    {
        $this->workingHours = $workingHours;
        return $this;
    }

}
