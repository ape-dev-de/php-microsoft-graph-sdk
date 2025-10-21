<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesProvisioningError
 */
class OnPremisesProvisioningError
{
    /**
     * Category of the provisioning error. Note: Currently, there is only one possible value. Possible value: PropertyConflict - indicates a property value is not unique. Other objects contain the same value for the property.
     */
    private ?string $category;

    /**
     * The date and time at which the error occurred.
     */
    private ?\DateTimeInterface $occurredDateTime;

    /**
     * Name of the directory property causing the error. Current possible values: UserPrincipalName or ProxyAddress
     */
    private ?string $propertyCausingError;

    /**
     * Value of the property causing the error.
     */
    private ?string $value;


    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getOccurredDateTime(): ?\DateTimeInterface
    {
        return $this->occurredDateTime;
    }

    public function setOccurredDateTime(?\DateTimeInterface $occurredDateTime): self
    {
        $this->occurredDateTime = $occurredDateTime;
        return $this;
    }

    public function getPropertyCausingError(): ?string
    {
        return $this->propertyCausingError;
    }

    public function setPropertyCausingError(?string $propertyCausingError): self
    {
        $this->propertyCausingError = $propertyCausingError;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
