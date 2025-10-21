<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCasesRoot
 */
class SecurityCasesRoot
{
    /**
     * @var string[]
     */
    private array $ediscoveryCases = [];


    /**
     * @return string[]
     */
    public function getEdiscoveryCases(): array
    {
        return $this->ediscoveryCases;
    }

    /**
     * @param string[] $ediscoveryCases
     */
    public function setEdiscoveryCases(array $ediscoveryCases): self
    {
        $this->ediscoveryCases = $ediscoveryCases;
        return $this;
    }

}
