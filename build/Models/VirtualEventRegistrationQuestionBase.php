<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationQuestionBase
 */
class VirtualEventRegistrationQuestionBase
{
    /**
     * Display name of the registration question.
     */
    private ?string $displayName;

    /**
     * Indicates whether an answer to the question is required. The default value is false.
     */
    private ?string $isRequired;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIsRequired(): ?string
    {
        return $this->isRequired;
    }

    public function setIsRequired(?string $isRequired): self
    {
        $this->isRequired = $isRequired;
        return $this;
    }

}
