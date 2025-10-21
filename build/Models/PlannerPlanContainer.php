<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerPlanContainer
 */
class PlannerPlanContainer
{
    /**
     * The identifier of the resource that contains the plan. Optional.
     */
    private ?string $containerId;

    /**
     * The type of the resource that contains the plan. For supported types, see the previous table. Possible values are: group, unknownFutureValue, roster. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: roster. Optional.
     */
    private ?string $type;

    /**
     * The full canonical URL of the container. Optional.
     */
    private ?string $url;


    public function getContainerId(): ?string
    {
        return $this->containerId;
    }

    public function setContainerId(?string $containerId): self
    {
        $this->containerId = $containerId;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

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
