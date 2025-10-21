<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemResource
 */
class AccessReviewInstanceDecisionItemResource
{
    /**
     * Display name of the resource
     */
    private ?string $displayName;

    /**
     * Identifier of the resource
     */
    private ?string $id;

    /**
     * Type of resource. Types include: Group, ServicePrincipal, DirectoryRole, AzureRole, AccessPackageAssignmentPolicy.
     */
    private ?string $type;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
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

}
