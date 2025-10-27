<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxSettings
 */
class MailboxSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Folder ID of an archive folder for the user. */
    public ?string $archiveFolder = null;

    /** 
     * Configuration settings to automatically notify the sender of an incoming email with a message from the signed-in user.
     * @var AutomaticRepliesSetting|\stdClass|null
     */
    public AutomaticRepliesSetting|\stdClass|null $automaticRepliesSetting = null;

    /** The date format for the user's mailbox. */
    public ?string $dateFormat = null;

    /** 
     * If the user has a calendar delegate, this specifies whether the delegate, mailbox owner, or both receive meeting messages and meeting responses. Possible values are: sendToDelegateAndInformationToPrincipal, sendToDelegateAndPrincipal, sendToDelegateOnly.
     * @var DelegateMeetingMessageDeliveryOptions|\stdClass|null
     */
    public DelegateMeetingMessageDeliveryOptions|\stdClass|null $delegateMeetingMessageDeliveryOptions = null;

    /** 
     * The locale information for the user, including the preferred language and country/region.
     * @var LocaleInfo|\stdClass|null
     */
    public LocaleInfo|\stdClass|null $language = null;

    /** The time format for the user's mailbox. */
    public ?string $timeFormat = null;

    /** The default time zone for the user's mailbox. */
    public ?string $timeZone = null;

    /** 
     * The purpose of the mailbox. Differentiates a mailbox for a single user from a shared mailbox and equipment mailbox in Exchange Online. Possible values are: user, linked, shared, room, equipment, others, unknownFutureValue. Read-only.
     * @var UserPurpose|\stdClass|null
     */
    public UserPurpose|\stdClass|null $userPurpose = null;

    /** 
     * The days of the week and hours in a specific time zone that the user works.
     * @var WorkingHours|\stdClass|null
     */
    public WorkingHours|\stdClass|null $workingHours = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['archiveFolder'])) {
            $this->archiveFolder = $data['archiveFolder'];
        }
        if (isset($data['automaticRepliesSetting'])) {
            $this->automaticRepliesSetting = is_array($data['automaticRepliesSetting']) ? new AutomaticRepliesSetting($data['automaticRepliesSetting']) : $data['automaticRepliesSetting'];
        }
        if (isset($data['dateFormat'])) {
            $this->dateFormat = $data['dateFormat'];
        }
        if (isset($data['delegateMeetingMessageDeliveryOptions'])) {
            $this->delegateMeetingMessageDeliveryOptions = is_array($data['delegateMeetingMessageDeliveryOptions']) ? new DelegateMeetingMessageDeliveryOptions($data['delegateMeetingMessageDeliveryOptions']) : $data['delegateMeetingMessageDeliveryOptions'];
        }
        if (isset($data['language'])) {
            $this->language = is_array($data['language']) ? new LocaleInfo($data['language']) : $data['language'];
        }
        if (isset($data['timeFormat'])) {
            $this->timeFormat = $data['timeFormat'];
        }
        if (isset($data['timeZone'])) {
            $this->timeZone = $data['timeZone'];
        }
        if (isset($data['userPurpose'])) {
            $this->userPurpose = is_array($data['userPurpose']) ? new UserPurpose($data['userPurpose']) : $data['userPurpose'];
        }
        if (isset($data['workingHours'])) {
            $this->workingHours = is_array($data['workingHours']) ? new WorkingHours($data['workingHours']) : $data['workingHours'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
