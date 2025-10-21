<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsApp
 */
class TeamsApp
{
    /**
     * The name of the catalog app provided by the app developer in the Microsoft Teams zip app package.
     */
    private ?string $displayName;

    /**
     * The method of distribution for the app. Read-only.
     */
    private ?string $distributionMethod;

    /**
     * The ID of the catalog provided by the app developer in the Microsoft Teams zip app package.
     */
    private ?string $externalId;

    /**
     * The details for each version of the app.
     * @var string[]
     */
    private array $appDefinitions = [];


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getDistributionMethod(): ?string
    {
        return $this->distributionMethod;
    }

    public function setDistributionMethod(?string $distributionMethod): self
    {
        $this->distributionMethod = $distributionMethod;
        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAppDefinitions(): array
    {
        return $this->appDefinitions;
    }

    /**
     * @param string[] $appDefinitions
     */
    public function setAppDefinitions(array $appDefinitions): self
    {
        $this->appDefinitions = $appDefinitions;
        return $this;
    }

}
