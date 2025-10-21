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
     * @var string[]
     */
    private array $preFetchMedia = [];


    /**
     * @return string[]
     */
    public function getPreFetchMedia(): array
    {
        return $this->preFetchMedia;
    }

    /**
     * @param string[] $preFetchMedia
     */
    public function setPreFetchMedia(array $preFetchMedia): self
    {
        $this->preFetchMedia = $preFetchMedia;
        return $this;
    }

}
