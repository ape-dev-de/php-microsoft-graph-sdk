<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommsNotification
 */
class CommsNotification
{
    /**
     */
    private ?string $changeType;

    /**
     * URI of the resource that was changed.
     */
    private ?string $resourceUrl;


    public function getChangeType(): ?string
    {
        return $this->changeType;
    }

    public function setChangeType(?string $changeType): self
    {
        $this->changeType = $changeType;
        return $this;
    }

    public function getResourceUrl(): ?string
    {
        return $this->resourceUrl;
    }

    public function setResourceUrl(?string $resourceUrl): self
    {
        $this->resourceUrl = $resourceUrl;
        return $this;
    }

}
