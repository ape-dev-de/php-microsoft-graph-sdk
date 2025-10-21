<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
 */
class AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
{
    /**
     * Display name of the access package to which access has been granted.
     */
    private ?string $accessPackageDisplayName;

    /**
     * Identifier of the access package to which access has been granted.
     */
    private ?string $accessPackageId;


    public function getAccessPackageDisplayName(): ?string
    {
        return $this->accessPackageDisplayName;
    }

    public function setAccessPackageDisplayName(?string $accessPackageDisplayName): self
    {
        $this->accessPackageDisplayName = $accessPackageDisplayName;
        return $this;
    }

    public function getAccessPackageId(): ?string
    {
        return $this->accessPackageId;
    }

    public function setAccessPackageId(?string $accessPackageId): self
    {
        $this->accessPackageId = $accessPackageId;
        return $this;
    }

}
