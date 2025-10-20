<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BaseCollectionPaginationCountResponse
 */
class BaseCollectionPaginationCountResponse
{
    /**
     */
    private ?int $@odata.count;

    /**
     */
    private ?string $@odata.nextLink;

    public function get@odata.count(): ?int
    {
        return $this->@odata.count;
    }

    public function set@odata.count(?int $@odata.count): self
    {
        $this->@odata.count = $@odata.count;
        return $this;
    }

    public function get@odata.nextLink(): ?string
    {
        return $this->@odata.nextLink;
    }

    public function set@odata.nextLink(?string $@odata.nextLink): self
    {
        $this->@odata.nextLink = $@odata.nextLink;
        return $this;
    }

}
