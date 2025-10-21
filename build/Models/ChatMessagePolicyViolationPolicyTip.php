<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessagePolicyViolationPolicyTip
 */
class ChatMessagePolicyViolationPolicyTip
{
    /**
     * The URL a user can visit to read about the data loss prevention policies for the organization. (ie, policies about what users shouldn''t say in chats)
     */
    private ?string $complianceUrl;

    /**
     * Explanatory text shown to the sender of the message.
     */
    private ?string $generalText;

    /**
     * The list of improper data in the message that was detected by the data loss prevention app. Each DLP app defines its own conditions, examples include ''Credit Card Number'' and ''Social Security Number''.
     * @var string[]
     */
    private array $matchedConditionDescriptions = [];


    public function getComplianceUrl(): ?string
    {
        return $this->complianceUrl;
    }

    public function setComplianceUrl(?string $complianceUrl): self
    {
        $this->complianceUrl = $complianceUrl;
        return $this;
    }

    public function getGeneralText(): ?string
    {
        return $this->generalText;
    }

    public function setGeneralText(?string $generalText): self
    {
        $this->generalText = $generalText;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMatchedConditionDescriptions(): array
    {
        return $this->matchedConditionDescriptions;
    }

    /**
     * @param string[] $matchedConditionDescriptions
     */
    public function setMatchedConditionDescriptions(array $matchedConditionDescriptions): self
    {
        $this->matchedConditionDescriptions = $matchedConditionDescriptions;
        return $this;
    }

}
