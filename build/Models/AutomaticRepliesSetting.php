<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AutomaticRepliesSetting
 */
class AutomaticRepliesSetting
{
    public function __construct(
        /** The set of audience external to the signed-in user's organization who will receive the ExternalReplyMessage, if Status is AlwaysEnabled or Scheduled. The possible values are: none, contactsOnly, all. */
        public ?string $externalAudience = null,
        /** The automatic reply to send to the specified external audience, if Status is AlwaysEnabled or Scheduled. */
        public ?string $externalReplyMessage = null,
        /** The automatic reply to send to the audience internal to the signed-in user's organization, if Status is AlwaysEnabled or Scheduled. */
        public ?string $internalReplyMessage = null,
        /** The date and time that automatic replies are set to end, if Status is set to Scheduled. */
        public ?string $scheduledEndDateTime = null,
        /** The date and time that automatic replies are set to begin, if Status is set to Scheduled. */
        public ?string $scheduledStartDateTime = null,
        /** Configurations status for automatic replies. The possible values are: disabled, alwaysEnabled, scheduled. */
        public ?string $status = null
    ) {}
}
