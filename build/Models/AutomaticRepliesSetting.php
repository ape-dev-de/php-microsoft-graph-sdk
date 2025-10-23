<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AutomaticRepliesSetting
 */
class AutomaticRepliesSetting
{
    /** 
     * The set of audience external to the signed-in user's organization who will receive the ExternalReplyMessage, if Status is AlwaysEnabled or Scheduled. The possible values are: none, contactsOnly, all.
     * @var ExternalAudienceScope|\stdClass|null
     */
    public mixed $externalAudience = null;

    /** The automatic reply to send to the specified external audience, if Status is AlwaysEnabled or Scheduled. */
    public ?string $externalReplyMessage = null;

    /** The automatic reply to send to the audience internal to the signed-in user's organization, if Status is AlwaysEnabled or Scheduled. */
    public ?string $internalReplyMessage = null;

    /** 
     * The date and time that automatic replies are set to end, if Status is set to Scheduled.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $scheduledEndDateTime = null;

    /** 
     * The date and time that automatic replies are set to begin, if Status is set to Scheduled.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $scheduledStartDateTime = null;

    /** 
     * Configurations status for automatic replies. The possible values are: disabled, alwaysEnabled, scheduled.
     * @var AutomaticRepliesStatus|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['externalAudience'])) {
            $this->externalAudience = $data['externalAudience'];
        }
        if (isset($data['externalReplyMessage'])) {
            $this->externalReplyMessage = $data['externalReplyMessage'];
        }
        if (isset($data['internalReplyMessage'])) {
            $this->internalReplyMessage = $data['internalReplyMessage'];
        }
        if (isset($data['scheduledEndDateTime'])) {
            $this->scheduledEndDateTime = $data['scheduledEndDateTime'];
        }
        if (isset($data['scheduledStartDateTime'])) {
            $this->scheduledStartDateTime = $data['scheduledStartDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
