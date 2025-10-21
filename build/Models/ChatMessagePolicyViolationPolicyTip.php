<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessagePolicyViolationPolicyTip
 */
class ChatMessagePolicyViolationPolicyTip
{
    public function __construct(
        /** The URL a user can visit to read about the data loss prevention policies for the organization. (ie, policies about what users shouldn't say in chats) */
        public ?string $complianceUrl = null,
        /** Explanatory text shown to the sender of the message. */
        public ?string $generalText = null,
        /** @var string[] The list of improper data in the message that was detected by the data loss prevention app. Each DLP app defines its own conditions, examples include 'Credit Card Number' and 'Social Security Number'. */
        public array $matchedConditionDescriptions = []
    ) {}
}
