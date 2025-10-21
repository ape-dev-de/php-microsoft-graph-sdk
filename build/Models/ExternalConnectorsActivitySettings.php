<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsActivitySettings
 */
class ExternalConnectorsActivitySettings
{
    /**
     * Specifies configurations to identify an externalItem based on a shared URL.
     * @var string[]
     */
    private array $urlToItemResolvers = [];


    /**
     * @return string[]
     */
    public function getUrlToItemResolvers(): array
    {
        return $this->urlToItemResolvers;
    }

    /**
     * @param string[] $urlToItemResolvers
     */
    public function setUrlToItemResolvers(array $urlToItemResolvers): self
    {
        $this->urlToItemResolvers = $urlToItemResolvers;
        return $this;
    }

}
