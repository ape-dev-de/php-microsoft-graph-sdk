<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTaskDefinition
 */
class IdentityGovernanceTaskDefinition
{
    /**
     */
    private ?string $category;

    /**
     * Defines if the workflow will continue if the task has an error.
     */
    private ?bool $continueOnError;

    /**
     * The description of the taskDefinition.
     */
    private ?string $description;

    /**
     * The display name of the taskDefinition.Supports $filter(eq, ne) and $orderby.
     */
    private ?string $displayName;

    /**
     * The parameters that must be supplied when creating a workflow task object.Supports $filter(any).
     */
    private array $parameters = [];

    /**
     * The version number of the taskDefinition. New records are pushed when we add support for new parameters.Supports $filter(ge, gt, le, lt, eq, ne) and $orderby.
     */
    private ?string $version;

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getContinueOnError(): ?bool
    {
        return $this->continueOnError;
    }

    public function setContinueOnError(?bool $continueOnError): self
    {
        $this->continueOnError = $continueOnError;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function setParameters(array $parameters): self
    {
        $this->parameters = $parameters;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

}
