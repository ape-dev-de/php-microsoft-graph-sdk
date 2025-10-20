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
     */
    private ?string $urlToItemResolvers;

    public function getUrlToItemResolvers(): ?string
    {
        return $this->urlToItemResolvers;
    }

    public function setUrlToItemResolvers(?string $urlToItemResolvers): self
    {
        $this->urlToItemResolvers = $urlToItemResolvers;
        return $this;
    }

}
