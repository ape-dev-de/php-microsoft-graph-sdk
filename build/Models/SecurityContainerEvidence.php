<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityContainerEvidence
 */
class SecurityContainerEvidence
{
    /**
     * The list of arguments.
     */
    private ?string $args;

    /**
     * The list of commands.
     */
    private ?string $command;

    /**
     * The container ID.
     */
    private ?string $containerId;

    /**
     * The image used to run the container.
     */
    private ?string $image;

    /**
     * The privileged status.
     */
    private ?bool $isPrivileged;

    /**
     * The container name.
     */
    private ?string $name;

    /**
     * The pod this container belongs to.
     */
    private ?string $pod;

    public function getArgs(): ?string
    {
        return $this->args;
    }

    public function setArgs(?string $args): self
    {
        $this->args = $args;
        return $this;
    }

    public function getCommand(): ?string
    {
        return $this->command;
    }

    public function setCommand(?string $command): self
    {
        $this->command = $command;
        return $this;
    }

    public function getContainerId(): ?string
    {
        return $this->containerId;
    }

    public function setContainerId(?string $containerId): self
    {
        $this->containerId = $containerId;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getIsPrivileged(): ?bool
    {
        return $this->isPrivileged;
    }

    public function setIsPrivileged(?bool $isPrivileged): self
    {
        $this->isPrivileged = $isPrivileged;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getPod(): ?string
    {
        return $this->pod;
    }

    public function setPod(?string $pod): self
    {
        $this->pod = $pod;
        return $this;
    }

}
