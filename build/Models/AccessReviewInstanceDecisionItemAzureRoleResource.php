<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemAzureRoleResource
 */
class AccessReviewInstanceDecisionItemAzureRoleResource
{
    /**
     * Details of the scope this role is associated with.
     */
    private ?string $scope;


    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;
        return $this;
    }

}
