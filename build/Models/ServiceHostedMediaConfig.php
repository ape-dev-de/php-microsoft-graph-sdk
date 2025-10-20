<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHostedMediaConfig
 */
class ServiceHostedMediaConfig
{
    /**
     * The list of media to pre-fetch.
     */
    private ?string $preFetchMedia;

    public function getPreFetchMedia(): ?string
    {
        return $this->preFetchMedia;
    }

    public function setPreFetchMedia(?string $preFetchMedia): self
    {
        $this->preFetchMedia = $preFetchMedia;
        return $this;
    }

}
