<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AutomaticRepliesMailTips
 */
class AutomaticRepliesMailTips
{
    public function __construct(
        /** The automatic reply message. */
        public ?string $message = null,
        /** The language that the automatic reply message is in. */
        public ?string $messageLanguage = null,
        /** The date and time that automatic replies are set to end. */
        public ?string $scheduledEndTime = null,
        /** The date and time that automatic replies are set to begin. */
        public ?string $scheduledStartTime = null
    ) {}
}
