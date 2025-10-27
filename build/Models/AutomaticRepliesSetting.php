<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AutomaticRepliesSetting
 */
class AutomaticRepliesSetting
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The set of audience external to the signed-in user's organization who will receive the ExternalReplyMessage, if Status is AlwaysEnabled or Scheduled. The possible values are: none, contactsOnly, all.
     * @var ExternalAudienceScope|\stdClass|null
     */
    public ExternalAudienceScope|\stdClass|null $externalAudience = null;

    /** The automatic reply to send to the specified external audience, if Status is AlwaysEnabled or Scheduled. */
    public ?string $externalReplyMessage = null;

    /** The automatic reply to send to the audience internal to the signed-in user's organization, if Status is AlwaysEnabled or Scheduled. */
    public ?string $internalReplyMessage = null;

    /** 
     * The date and time that automatic replies are set to end, if Status is set to Scheduled.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public DateTimeTimeZone|\stdClass|null $scheduledEndDateTime = null;

    /** 
     * The date and time that automatic replies are set to begin, if Status is set to Scheduled.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public DateTimeTimeZone|\stdClass|null $scheduledStartDateTime = null;

    /** 
     * Configurations status for automatic replies. The possible values are: disabled, alwaysEnabled, scheduled.
     * @var AutomaticRepliesStatus|\stdClass|null
     */
    public AutomaticRepliesStatus|\stdClass|null $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['externalAudience'])) {
            $this->externalAudience = is_array($data['externalAudience']) ? new ExternalAudienceScope($data['externalAudience']) : $data['externalAudience'];
        }
        if (isset($data['externalReplyMessage'])) {
            $this->externalReplyMessage = $data['externalReplyMessage'];
        }
        if (isset($data['internalReplyMessage'])) {
            $this->internalReplyMessage = $data['internalReplyMessage'];
        }
        if (isset($data['scheduledEndDateTime'])) {
            $this->scheduledEndDateTime = is_array($data['scheduledEndDateTime']) ? new DateTimeTimeZone($data['scheduledEndDateTime']) : $data['scheduledEndDateTime'];
        }
        if (isset($data['scheduledStartDateTime'])) {
            $this->scheduledStartDateTime = is_array($data['scheduledStartDateTime']) ? new DateTimeTimeZone($data['scheduledStartDateTime']) : $data['scheduledStartDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new AutomaticRepliesStatus($data['status']) : $data['status'];
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
