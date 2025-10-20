<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceAttribute
 */
class AccessPackageResourceAttribute
{
    /**
     * Information about how to set the attribute, currently a accessPackageUserDirectoryAttributeStore type.
     */
    private ?string $destination;

    /**
     */
    private ?bool $isEditable;

    /**
     */
    private ?bool $isPersistedOnAssignmentRemoval;

    /**
     * The name of the attribute in the end system. If the destination is accessPackageUserDirectoryAttributeStore, then a user property such as jobTitle or a directory schema extension for the user object type, such as extension2b676109c7c74ae2b41549205f1947edpersonalTitle.
     */
    private ?string $name;

    /**
     * Information about how to populate the attribute value when an accessPackageAssignmentRequest is being fulfilled, currently a accessPackageResourceAttributeQuestion type.
     */
    private ?string $source;

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(?string $destination): self
    {
        $this->destination = $destination;
        return $this;
    }

    public function getIsEditable(): ?bool
    {
        return $this->isEditable;
    }

    public function setIsEditable(?bool $isEditable): self
    {
        $this->isEditable = $isEditable;
        return $this;
    }

    public function getIsPersistedOnAssignmentRemoval(): ?bool
    {
        return $this->isPersistedOnAssignmentRemoval;
    }

    public function setIsPersistedOnAssignmentRemoval(?bool $isPersistedOnAssignmentRemoval): self
    {
        $this->isPersistedOnAssignmentRemoval = $isPersistedOnAssignmentRemoval;
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

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

}
