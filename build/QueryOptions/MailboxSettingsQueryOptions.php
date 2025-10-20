<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailboxSettings resources
 *
 * Available select fields:
 * - archiveFolder
 * - automaticRepliesSetting
 * - dateFormat
 * - delegateMeetingMessageDeliveryOptions
 * - language
 * - timeFormat
 * - timeZone
 * - userPurpose
 * - workingHours
 */
class MailboxSettingsQueryOptions extends QueryOptions
{
    public const FIELD_ARCHIVE_FOLDER = 'archiveFolder';
    public const FIELD_AUTOMATIC_REPLIES_SETTING = 'automaticRepliesSetting';
    public const FIELD_DATE_FORMAT = 'dateFormat';
    public const FIELD_DELEGATE_MEETING_MESSAGE_DELIVERY_OPTIONS = 'delegateMeetingMessageDeliveryOptions';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_TIME_FORMAT = 'timeFormat';
    public const FIELD_TIME_ZONE = 'timeZone';
    public const FIELD_USER_PURPOSE = 'userPurpose';
    public const FIELD_WORKING_HOURS = 'workingHours';

    /**
     * Select specific MailboxSettings properties
     * 
     * @param array<string> $select Use MailboxSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
