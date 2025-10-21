<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnTokenIssuanceStartCustomExtension
 */
class OnTokenIssuanceStartCustomExtension
{
    /**
     * Collection of claims to be returned by the API called by this custom authentication extension. Used to populate claims mapping experience in Microsoft Entra admin center. Optional.
     * @var string[]
     */
    private array $claimsForTokenConfiguration = [];


    /**
     * @return string[]
     */
    public function getClaimsForTokenConfiguration(): array
    {
        return $this->claimsForTokenConfiguration;
    }

    /**
     * @param string[] $claimsForTokenConfiguration
     */
    public function setClaimsForTokenConfiguration(array $claimsForTokenConfiguration): self
    {
        $this->claimsForTokenConfiguration = $claimsForTokenConfiguration;
        return $this;
    }

}
