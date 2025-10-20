<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemPreviewInfo
 */
class ItemPreviewInfo
{
    /**
     */
    private ?string $getUrl;

    /**
     */
    private ?string $postParameters;

    /**
     */
    private ?string $postUrl;

    public function getGetUrl(): ?string
    {
        return $this->getUrl;
    }

    public function setGetUrl(?string $getUrl): self
    {
        $this->getUrl = $getUrl;
        return $this;
    }

    public function getPostParameters(): ?string
    {
        return $this->postParameters;
    }

    public function setPostParameters(?string $postParameters): self
    {
        $this->postParameters = $postParameters;
        return $this;
    }

    public function getPostUrl(): ?string
    {
        return $this->postUrl;
    }

    public function setPostUrl(?string $postUrl): self
    {
        $this->postUrl = $postUrl;
        return $this;
    }

}
