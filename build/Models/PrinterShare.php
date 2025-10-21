<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterShare
 */
class PrinterShare
{
    /**
     * If true, all users and groups will be granted access to this printer share. This supersedes the allow lists defined by the allowedUsers and allowedGroups navigation properties.
     */
    private ?bool $allowAllUsers;

    /**
     * The DateTimeOffset when the printer share was created. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Additional data for a printer share as viewed by the signed-in user.
     */
    private ?string $viewPoint;

    /**
     * The groups whose users have access to print using the printer.
     */
    private array $allowedGroups = [];

    /**
     * The users who have access to print using the printer.
     */
    private array $allowedUsers = [];

    /**
     * The printer that this printer share is related to.
     */
    private ?string $printer;


    public function getAllowAllUsers(): ?bool
    {
        return $this->allowAllUsers;
    }

    public function setAllowAllUsers(?bool $allowAllUsers): self
    {
        $this->allowAllUsers = $allowAllUsers;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getViewPoint(): ?string
    {
        return $this->viewPoint;
    }

    public function setViewPoint(?string $viewPoint): self
    {
        $this->viewPoint = $viewPoint;
        return $this;
    }

    public function getAllowedGroups(): array
    {
        return $this->allowedGroups;
    }

    public function setAllowedGroups(array $allowedGroups): self
    {
        $this->allowedGroups = $allowedGroups;
        return $this;
    }

    public function getAllowedUsers(): array
    {
        return $this->allowedUsers;
    }

    public function setAllowedUsers(array $allowedUsers): self
    {
        $this->allowedUsers = $allowedUsers;
        return $this;
    }

    public function getPrinter(): ?string
    {
        return $this->printer;
    }

    public function setPrinter(?string $printer): self
    {
        $this->printer = $printer;
        return $this;
    }

}
