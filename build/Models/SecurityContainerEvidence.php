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
     * @var string[]
     */
    private array $args = [];

    /**
     * The list of commands.
     * @var string[]
     */
    private array $command = [];

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


    /**
     * @return string[]
     */
    public function getArgs(): array
    {
        return $this->args;
    }

    /**
     * @param string[] $args
     */
    public function setArgs(array $args): self
    {
        $this->args = $args;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCommand(): array
    {
        return $this->command;
    }

    /**
     * @param string[] $command
     */
    public function setCommand(array $command): self
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
