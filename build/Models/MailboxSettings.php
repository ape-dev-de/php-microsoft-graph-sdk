<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxSettings
 */
class MailboxSettings
{
    public function __construct(
        /** Folder ID of an archive folder for the user. */
        public ?string $archiveFolder = null,
        /** Configuration settings to automatically notify the sender of an incoming email with a message from the signed-in user. */
        public ?string $automaticRepliesSetting = null,
        /** The date format for the user's mailbox. */
        public ?string $dateFormat = null,
        /** If the user has a calendar delegate, this specifies whether the delegate, mailbox owner, or both receive meeting messages and meeting responses. Possible values are: sendToDelegateAndInformationToPrincipal, sendToDelegateAndPrincipal, sendToDelegateOnly. */
        public ?string $delegateMeetingMessageDeliveryOptions = null,
        /** The locale information for the user, including the preferred language and country/region. */
        public ?string $language = null,
        /** The time format for the user's mailbox. */
        public ?string $timeFormat = null,
        /** The default time zone for the user's mailbox. */
        public ?string $timeZone = null,
        /** The purpose of the mailbox. Differentiates a mailbox for a single user from a shared mailbox and equipment mailbox in Exchange Online. Possible values are: user, linked, shared, room, equipment, others, unknownFutureValue. Read-only. */
        public ?string $userPurpose = null,
        /** The days of the week and hours in a specific time zone that the user works. */
        public ?string $workingHours = null
    ) {}
}
