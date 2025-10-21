<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequestorSettings
 */
class AccessPackageAssignmentRequestorSettings
{
    /**
     * False indicates that the requestor isn't permitted to include a schedule in their request.
     */
    private ?bool $allowCustomAssignmentSchedule;

    /**
     * True allows on-behalf-of requestors to create a request to add access for another principal.
     */
    private ?bool $enableOnBehalfRequestorsToAddAccess;

    /**
     * True allows on-behalf-of requestors to create a request to remove access for another principal.
     */
    private ?bool $enableOnBehalfRequestorsToRemoveAccess;

    /**
     * True allows on-behalf-of requestors to create a request to update access for another principal.
     */
    private ?bool $enableOnBehalfRequestorsToUpdateAccess;

    /**
     * True allows requestors to create a request to add access for themselves.
     */
    private ?bool $enableTargetsToSelfAddAccess;

    /**
     * True allows requestors to create a request to remove their access.
     */
    private ?bool $enableTargetsToSelfRemoveAccess;

    /**
     * True allows requestors to create a request to update their access.
     */
    private ?bool $enableTargetsToSelfUpdateAccess;

    /**
     * The principals who can request on-behalf-of others.
     * @var string[]
     */
    private array $onBehalfRequestors = [];


    public function getAllowCustomAssignmentSchedule(): ?bool
    {
        return $this->allowCustomAssignmentSchedule;
    }

    public function setAllowCustomAssignmentSchedule(?bool $allowCustomAssignmentSchedule): self
    {
        $this->allowCustomAssignmentSchedule = $allowCustomAssignmentSchedule;
        return $this;
    }

    public function getEnableOnBehalfRequestorsToAddAccess(): ?bool
    {
        return $this->enableOnBehalfRequestorsToAddAccess;
    }

    public function setEnableOnBehalfRequestorsToAddAccess(?bool $enableOnBehalfRequestorsToAddAccess): self
    {
        $this->enableOnBehalfRequestorsToAddAccess = $enableOnBehalfRequestorsToAddAccess;
        return $this;
    }

    public function getEnableOnBehalfRequestorsToRemoveAccess(): ?bool
    {
        return $this->enableOnBehalfRequestorsToRemoveAccess;
    }

    public function setEnableOnBehalfRequestorsToRemoveAccess(?bool $enableOnBehalfRequestorsToRemoveAccess): self
    {
        $this->enableOnBehalfRequestorsToRemoveAccess = $enableOnBehalfRequestorsToRemoveAccess;
        return $this;
    }

    public function getEnableOnBehalfRequestorsToUpdateAccess(): ?bool
    {
        return $this->enableOnBehalfRequestorsToUpdateAccess;
    }

    public function setEnableOnBehalfRequestorsToUpdateAccess(?bool $enableOnBehalfRequestorsToUpdateAccess): self
    {
        $this->enableOnBehalfRequestorsToUpdateAccess = $enableOnBehalfRequestorsToUpdateAccess;
        return $this;
    }

    public function getEnableTargetsToSelfAddAccess(): ?bool
    {
        return $this->enableTargetsToSelfAddAccess;
    }

    public function setEnableTargetsToSelfAddAccess(?bool $enableTargetsToSelfAddAccess): self
    {
        $this->enableTargetsToSelfAddAccess = $enableTargetsToSelfAddAccess;
        return $this;
    }

    public function getEnableTargetsToSelfRemoveAccess(): ?bool
    {
        return $this->enableTargetsToSelfRemoveAccess;
    }

    public function setEnableTargetsToSelfRemoveAccess(?bool $enableTargetsToSelfRemoveAccess): self
    {
        $this->enableTargetsToSelfRemoveAccess = $enableTargetsToSelfRemoveAccess;
        return $this;
    }

    public function getEnableTargetsToSelfUpdateAccess(): ?bool
    {
        return $this->enableTargetsToSelfUpdateAccess;
    }

    public function setEnableTargetsToSelfUpdateAccess(?bool $enableTargetsToSelfUpdateAccess): self
    {
        $this->enableTargetsToSelfUpdateAccess = $enableTargetsToSelfUpdateAccess;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getOnBehalfRequestors(): array
    {
        return $this->onBehalfRequestors;
    }

    /**
     * @param string[] $onBehalfRequestors
     */
    public function setOnBehalfRequestors(array $onBehalfRequestors): self
    {
        $this->onBehalfRequestors = $onBehalfRequestors;
        return $this;
    }

}
