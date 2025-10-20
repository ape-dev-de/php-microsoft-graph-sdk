<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcDomainJoinConfigurationCollectionResponse
 */
class CloudPcDomainJoinConfigurationCollectionResponse
{
    /**
     */
    private array $value = [];

    public function getValue(): array
    {
        return $this->value;
    }

    public function setValue(array $value): self
    {
        $this->value = $value;
        return $this;
    }

}
