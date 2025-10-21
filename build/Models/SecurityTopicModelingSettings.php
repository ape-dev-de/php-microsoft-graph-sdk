<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTopicModelingSettings
 */
class SecurityTopicModelingSettings
{
    /**
     * Indicates whether the themes model should dynamically optimize the number of generated topics. To learn more, see Adjust maximum number of themes dynamically.
     */
    private ?bool $dynamicallyAdjustTopicCount;

    /**
     * Indicates whether the themes model should exclude numbers while parsing document texts. To learn more, see Include numbers in themes.
     */
    private ?bool $ignoreNumbers;

    /**
     * Indicates whether themes model is enabled for the case.
     */
    private ?bool $isEnabled;

    /**
     * The total number of topics that the themes model will generate for a review set. To learn more, see Maximum number of themes.
     */
    private ?string $topicCount;


    public function getDynamicallyAdjustTopicCount(): ?bool
    {
        return $this->dynamicallyAdjustTopicCount;
    }

    public function setDynamicallyAdjustTopicCount(?bool $dynamicallyAdjustTopicCount): self
    {
        $this->dynamicallyAdjustTopicCount = $dynamicallyAdjustTopicCount;
        return $this;
    }

    public function getIgnoreNumbers(): ?bool
    {
        return $this->ignoreNumbers;
    }

    public function setIgnoreNumbers(?bool $ignoreNumbers): self
    {
        $this->ignoreNumbers = $ignoreNumbers;
        return $this;
    }

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getTopicCount(): ?string
    {
        return $this->topicCount;
    }

    public function setTopicCount(?string $topicCount): self
    {
        $this->topicCount = $topicCount;
        return $this;
    }

}
