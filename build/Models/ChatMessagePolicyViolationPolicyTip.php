<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessagePolicyViolationPolicyTip
 */
class ChatMessagePolicyViolationPolicyTip
{
    /** The URL a user can visit to read about the data loss prevention policies for the organization. (ie, policies about what users shouldn't say in chats) */
    public ?string $complianceUrl = null;

    /** Explanatory text shown to the sender of the message. */
    public ?string $generalText = null;

    /** 
     * The list of improper data in the message that was detected by the data loss prevention app. Each DLP app defines its own conditions, examples include 'Credit Card Number' and 'Social Security Number'.
     * @var string[]
     */
    public array $matchedConditionDescriptions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['complianceUrl'])) {
            $this->complianceUrl = $data['complianceUrl'];
        }
        if (isset($data['generalText'])) {
            $this->generalText = $data['generalText'];
        }
        if (isset($data['matchedConditionDescriptions'])) {
            $this->matchedConditionDescriptions = $data['matchedConditionDescriptions'];
        }
    }
}
