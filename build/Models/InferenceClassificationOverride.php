<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InferenceClassificationOverride
 */
class InferenceClassificationOverride
{
    /**
     * Specifies how incoming messages from a specific sender should always be classified as. The possible values are: focused, other.
     */
    private ?string $classifyAs;

    /**
     * The email address information of the sender for whom the override is created.
     */
    private ?string $senderEmailAddress;


    public function getClassifyAs(): ?string
    {
        return $this->classifyAs;
    }

    public function setClassifyAs(?string $classifyAs): self
    {
        $this->classifyAs = $classifyAs;
        return $this;
    }

    public function getSenderEmailAddress(): ?string
    {
        return $this->senderEmailAddress;
    }

    public function setSenderEmailAddress(?string $senderEmailAddress): self
    {
        $this->senderEmailAddress = $senderEmailAddress;
        return $this;
    }

}
