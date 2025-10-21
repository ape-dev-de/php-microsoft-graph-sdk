<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationChannelResource
 */
class EducationChannelResource
{
    /**
     * URL of the channel resource.
     */
    private ?string $url;


    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

}
