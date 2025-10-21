<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PayloadDetail
 */
class PayloadDetail
{
    /**
     */
    private array $coachmarks = [];

    /**
     * Payload content details.
     */
    private ?string $content;

    /**
     * The phishing URL used to target a user.
     */
    private ?string $phishingUrl;


    public function getCoachmarks(): array
    {
        return $this->coachmarks;
    }

    public function setCoachmarks(array $coachmarks): self
    {
        $this->coachmarks = $coachmarks;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getPhishingUrl(): ?string
    {
        return $this->phishingUrl;
    }

    public function setPhishingUrl(?string $phishingUrl): self
    {
        $this->phishingUrl = $phishingUrl;
        return $this;
    }

}
