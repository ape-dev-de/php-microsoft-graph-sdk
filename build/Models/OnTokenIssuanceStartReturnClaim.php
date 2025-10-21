<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnTokenIssuanceStartReturnClaim
 */
class OnTokenIssuanceStartReturnClaim
{
    /**
     * The identifier of the claim returned by an API that is to be add to a token being issued.
     */
    private ?string $claimIdInApiResponse;


    public function getClaimIdInApiResponse(): ?string
    {
        return $this->claimIdInApiResponse;
    }

    public function setClaimIdInApiResponse(?string $claimIdInApiResponse): self
    {
        $this->claimIdInApiResponse = $claimIdInApiResponse;
        return $this;
    }

}
