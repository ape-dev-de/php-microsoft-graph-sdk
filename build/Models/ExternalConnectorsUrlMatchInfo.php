<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsUrlMatchInfo
 */
class ExternalConnectorsUrlMatchInfo
{
    /**
     * A list of the URL prefixes that must match URLs to be processed by this URL-to-item-resolver.
     * @var string[]
     */
    private array $baseUrls = [];

    /**
     * A regular expression that will be matched towards the URL that is processed by this URL-to-item-resolver. The ECMAScript specification for regular expressions (ECMA-262) is used for the evaluation. The named groups defined by the regular expression will be used later to extract values from the URL.
     */
    private ?string $urlPattern;


    /**
     * @return string[]
     */
    public function getBaseUrls(): array
    {
        return $this->baseUrls;
    }

    /**
     * @param string[] $baseUrls
     */
    public function setBaseUrls(array $baseUrls): self
    {
        $this->baseUrls = $baseUrls;
        return $this;
    }

    public function getUrlPattern(): ?string
    {
        return $this->urlPattern;
    }

    public function setUrlPattern(?string $urlPattern): self
    {
        $this->urlPattern = $urlPattern;
        return $this;
    }

}
