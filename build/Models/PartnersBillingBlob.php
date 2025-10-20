<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingBlob
 */
class PartnersBillingBlob
{
    /**
     * The blob name.
     */
    private ?string $name;

    /**
     * The partition that contains the file. A large partition is split into multiple files, each with the same partitionValue.
     */
    private ?string $partitionValue;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getPartitionValue(): ?string
    {
        return $this->partitionValue;
    }

    public function setPartitionValue(?string $partitionValue): self
    {
        $this->partitionValue = $partitionValue;
        return $this;
    }

}
