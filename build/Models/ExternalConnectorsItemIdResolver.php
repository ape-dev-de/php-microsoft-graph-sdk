<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsItemIdResolver
 */
class ExternalConnectorsItemIdResolver
{
    /**
     * Pattern that specifies how to form the ID of the external item that the URL represents. The named groups from the regular expression in urlPattern within the urlMatchInfo can be referenced by inserting the group name inside curly brackets.
     */
    private ?string $itemId;

    /**
     * Configurations to match and resolve URL.
     */
    private ?string $urlMatchInfo;


    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    public function getUrlMatchInfo(): ?string
    {
        return $this->urlMatchInfo;
    }

    public function setUrlMatchInfo(?string $urlMatchInfo): self
    {
        $this->urlMatchInfo = $urlMatchInfo;
        return $this;
    }

}
